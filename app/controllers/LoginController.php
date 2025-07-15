<?php
declare(strict_types=1);
require_once 'app/session_config.php';
require_once 'app/models/LoginModel.php';
require_once 'app/bale/SendMessage.php';

class LoginController{
    private $model;
    private $msg;
    public function __construct(){
        $this->model = new LoginModel();
        $this->msg = new SendMessage();
    }
    public function send_code($user_name): bool{
        if(empty($user_name)){
            $_SESSION['error'] = "لطفا تلفن همراه خود را وارد کنید.";
            return false;
        }
        $user = $this->model->get_user($user_name);
        if(!$user){
            if(preg_match('/^09\d{9}$/', $user_name)){
                $this->model->add_user($user_name);
            }else{
                $_SESSION['error'] = "تلفن همراه وارد شده اشتباه است";
                return false;
            }
            
        }
        $code = rand(100000, 999999);

        $send_status = $this->msg->send_sms($user_name, $code);
        // $send_status = $this->msg->send_code($user['chat_id'], $code);
        
        if(!$send_status){
            $_SESSION['error'] = "خطا در ارسال کد";
            return false;
        }

        $_SESSION['pre_value'] = $user_name;
        $_SESSION['success'] = "کد ارسال شد";
        $_SESSION['send_time'] = time();
        $_SESSION['code'] = $code;
        return true;
    }

    public function code_check($user_name, $pwd): bool{
        if(empty($user_name) || empty($pwd)){
            $_SESSION['error'] = "لطفا فیلد ها را تکمیل کنید.";
            return false;
        }
        if($user_name !== $_SESSION['pre_value']){
            $_SESSION['error'] = "شماره تلفنی که وارد کردید تغییر کرده است";
            return false;
        }
        if($pwd != $_SESSION['code']){
            $_SESSION['error'] = "کدی که وارد کرده اید اشتباه است.";
            return false;
        }

        return true;
    }
    public function set_sessions($user_name){
        unset($_SESSION['code']);
        unset($_SESSION['pre_value']);
        unset($_SESSION['send_time']);
        // new
        if(empty($user_name)){
            $_SESSION['error'] = "لطفا تلفن همراه خود را وارد کنید.";
            return false;
        }
        $user = $this->model->get_user($user_name);
        if(!$user){
            if(preg_match('/^09\d{9}$/', $user_name)){
                $this->model->add_user($user_name);
                $user = $this->model->get_user($user_name); // 👈 دوباره بگیر
            }else{
                $_SESSION['error'] = "تلفن همراه وارد شده اشتباه است";
                return false;
    }
}

        
        // new end
        
        $_SESSION['user_info'] = $user;
        return true;
    }
}