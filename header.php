<div class="menu">
            <div class="profile">
                <div class="profileDetail">
                    <span class="material-icons person">person</span>
                    <p id="profileName"><?= $_SESSION['user_info']['first_name']. "  ". $_SESSION['user_info']['last_name'] ?></p>
                    <p id="profileTel"></p>
                    <span class="material-icons back"   onclick="let menu =
                document.querySelector('.menu'); menu.classList.toggle('active');
                this.classList.toggle('fa-spin');" style="cursor: pointer;">keyboard_backspace</span>
                </div>
                
            </div>
            <ul>
                <a href="index.php">
                    <li>
                        <span class="material-icons">home</span>
                         صفحه اصلی 
                        </li>
                </a>
                <a href="profile.php">
                    <li>
                        <span class="material-icons">person</span>
                        حساب کاربری   
                    </li>
                </a>
                <a href="factor.php">
                    <li>
                        <span class="material-icons">receipt_long</span>
                        ثبت فاکتور   
                    </li>
                </a>
                <a href="bill.php">
                    <li>
                        <span class="material-icons">request_quote</span>
                        پیگیری قبض
                    </li>
                </a>
                <a href="charge.php">
                    <li>
                        <span class="material-icons">payments</span>
                         شارژ ساختمان
                        </li>
                </a>
                <a href="info.php">
                    <li>
                        <span class="material-icons">info</span>
                        اطلاعات دستگاه ها   
                    </li>
                </a>
                <a href="XXX">
                    <li>
                        <span class="material-icons">construction</span>
                        درخواست نصاب     
                    </li>
                </a>
                <a href="XXX">
                    <li>
                        <span class="material-icons">shopping_cart</span>
                        خرید دستگاه     
                    </li>
                </a>
                <a href="logout.php">
                    <li>
                        <span class="material-icons">logout</span>
                        خروج از حساب کاربری
                    </li>
                </a>
            </ul>
        </div>
