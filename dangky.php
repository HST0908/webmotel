<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/reset.css"/>
    <link rel="stylesheet" href="assets/libs/grid.css"/>
    <link rel="stylesheet" href="assets/css/base.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.4.2-web/css/all.min.css"/>
</head>
<body>
    <div class="app">
        <?php
            $user = (isset($_SESSION['user']))?$_SESSION['user']:''; 
        ?>
        <!-- header -->
        <header class="header">
            <div class="grid wide">
                <nav class="header__navbar">
                    <a class="header__navbar-logo" href="index.php"><img src="assets/img/Motel.vn-removebg-preview.png" alt="motel.vn"></a>
                    <ul class="header__navbar-user">
                    <?php if(!empty($user)){
                        if($user['permission']=='2'){
                        echo'
                            <a class="user-list--link" href="#"><i class="fa-solid fa-user"></i>'.$user['ten'].'</a>
                            <li class="header__navbar-user-list"><a class="user-list--link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a></li>';
                        }else{
                            echo'
                            <a class="user-list--link" href="#"><i class="fa-solid fa-user"></i>'.$user['ten'].'</a>
                            <li class="header__navbar-user-list"><a class="user-list--link" onclick="dangbai()"><i class="fa-solid fa-circle-plus"></i>Đăng Phòng</a></li>
                            <li class="header__navbar-user-list"><a class="user-list--link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a></li>';
                        }
                    }else{
                        echo'
                        <li class="header__navbar-user-list"><a class="user-list--link" onclick="user_login()"><i class="fa-solid fa-user"></i>Đăng nhập</a></li>';
                        } ?>
                    </ul>
                </nav>
            </div>
        </header>




            <!-- modal -->
        <div class="modal" id="modal">
            <div class="modal__overlay"></div>
            <div class="modal_body">

                <!-- Authen form -->
                <div class="auth-form">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng Nhập</h3>
                            <a href="#" class="auth-form__switch-btn">Đăng Ký</a>
                        </div>

                        <form action="" method="post" class="auth-form__form">
                            <div class="auth-form__group">
                                <div class="auth-form__group--taikhoan">
                                    <input type="text" name="taikhoan" class="auth-form__input" #id="input_taikhoan" placeholder=" " required>
                                    <label for="taikhoan" class="from-label_taikhoan">Tài khoản</label>
                                </div>
                                
                                <div class="auth-form__group--pass">
                                    <input type="password" name="matkhau" class="auth-form__input" #id="input_matkhau" placeholder=" " required>
                                    <label for="matkhau" class="from-label_mk">Mật khẩu</label>
                                </div>
                            </div>

                            <div class="auth-form__controls">
                                <label class="btn btn-back" name="back" onclick="back_login()">Trở lại</label>
                                <Button class="btn btn-dangnhap" name="login">Đăng nhập</Button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                    if(isset($_POST['login'])){
                        $user = $_POST['taikhoan'];
                        $password = $_POST['matkhau'];
                        $sql = "SELECT * FROM user WHERE idcard = '$user' AND password = MD5('$password')";
                        $result = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($result);
                        $checkuser = mysqli_num_rows($result);
                        if($checkuser == 0){
                        echo '<script>alert("Tài khoản hoặc mật khẩu không đúng")</script>';
                        }else{
                            $_SESSION['user'] = $data;
                            $user = (isset($_SESSION['user']))?$_SESSION['user']:'';
                            $permission = $user['permission'];
                            $ten = $user['ten'];
                            if($permission == '0'){
                                echo '<script>window.location.href = "admin/index.php"</script>';
                            }else{
                                echo '<script>window.location.href = "index.php"</script>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="./assets/js/app.js"></script>
</body>
</html>