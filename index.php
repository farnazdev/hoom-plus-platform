<?php
require_once 'app/auth_check.php';
?>
<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/units.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>صفحه اصلی</title>


    <style>
        /* Toast notification styling */
        .toast {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            color:rgb(58, 151, 61);
            padding: 15px 20px;
            border-radius: 5px;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>
<body dir="rtl">
    <div class="main">


                <?php
            require_once 'header.php';

            ?>

        <div class="head">
            <span class="material-icons"  onclick="let sidebar =
            document.querySelector('.menu'); sidebar.classList.toggle('active');
            this.classList.toggle('fa-spin');" style="cursor: pointer;">menu</span>
            <h1>هوم پلاس</h1>
        </div>
        
        <div class="banner-container" style="margin-top: 20px;">
            <img src="image/banner4.jpg" alt="بنر سایت" 
                class="banner-image" style="width: 250px; height: 200px;margin:auto; display:block; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);"/>
        </div>
        <div class="banner-container" style="margin-top: 20px;">
            <img src="image/banner6.jpg" alt="بنر سایت" 
                class="banner-image" style="width: 250px; height: 400px;margin:auto; display:block; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);"/>
        </div>
        

        
    </div>

    
    <!-- show errors -->
    <script>

        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        function removeQueryParam(param) {
            const url = new URL(window.location);
            url.searchParams.delete(param);
            window.history.replaceState({}, document.title, url);
        }


        if (getQueryParam('success')) {

            const toast = document.createElement("div");
            toast.classList.add("toast");
            toast.innerText = getQueryParam('success');
            document.body.appendChild(toast);

            removeQueryParam('success');

            setTimeout(() => {
                toast.style.opacity = "0";
                setTimeout(() => toast.remove(), 500); 
            }, 3000);
        }
    </script>
    
</body>
</html>