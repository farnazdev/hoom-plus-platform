<?php
    require_once 'app/session_config.php';
?>

<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=keyboard_backspace" />
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordInput = document.getElementById("password");
        const submitButton = document.getElementById("submit");
        const sendTime = <?php echo isset($_SESSION['send_time']) ? $_SESSION['send_time'] : 'null';?>

        if (sendTime) {
            passwordInput.removeAttribute("disabled");
        }

        // Disable submit button initially
        // submitButton.disabled = true;

        // Enable/disable submit button based on password input
        passwordInput.addEventListener("input", function() {
            submitButton.disabled = passwordInput.value.trim() === "";
        });});

    </script>
    

</head>
<body dir="rtl">
    <div class="main">
        <img src="image/hoompluslogo.jpg" alt="hoom plus logo" class="asctrocyteLogo" style="width:60%" >

        <?php if (isset($_SESSION['error'])): ?>
            <p style="color: red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <p style="color: green;"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
        <?php endif; ?>

        <form action="register.php" method="POST"> 
            <input type="text" name="username" id="username" placeholder="* شماره تلفن مثال: 09123456789" value="<?= $_SESSION['pre_value'] ?? "" ?>">
            <input type="password" name="password" id="password" disabled placeholder="* کد دریافت شده را وارد کنید">
            <button id="sendCode" onclick="window.location.href = 'register.php';" name="action" value="send_code">ارسال کد</button>
            <button id="submit" onclick="window.location.href = 'register.php';" name="action" value="login" >ورود</button>
        </form>
    </div>

    

</body>
</html>
