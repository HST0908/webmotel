<?php 
    session_start(); 
    include 'connect.php';
?>
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

        <div class="grid lager">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="box__container">
                        <form action="" method="post">
                            <div class="box__container-top">
                                <a href="./index.php" class="back_datphong"><i class="fa-solid fa-arrow-left"></i>Trở lại</a>
                                <div class="box__container--header">
                                    <h2 class="header__title">Đăng Ký</h2>
                                </div>
                            </div>
                            
                            <div class="box__container-content">
                                <div class="content__list">
                                    <input type="number" name="id_user" class="content__list--input" value="" placeholder="Số căn cước công dân" required>
                                    <input type="text" name="ten" class="content__list--input" value="" placeholder="Họ và tên" required>
                                </div>
                                <div class="content__list">
                                    <input type="number" name="sdt" class="content__list--input" placeholder="Số điện thoại" value="" required>
                                </div>
                                <div class="content__list">
                                    <input type="password" name="pass" class="content__list--input" id="pass" placeholder="Mật khẩu" value="" required>
                                    <input type="password" name="repass" class="content__list--input" id="repass" placeholder="Nhập lại khẩu" value="" required>
                                </div>
                                <div class="content__list">
                                    <input type="text" id="register_boss1" name="sonha" class="content__list--input" placeholder="Số nhà" value="" style="display: none;">
                                    <input type="text" id="register_boss2" name="duong" class="content__list--input" placeholder="Đường" value="" style="display: none;">
                                    <input type="text" id="register_boss3" name="phuong" class="content__list--input" placeholder="Phường" value="" style="display: none;">
                                </div>
                                <div class="content__list">
                                    <input type="text" id="register_boss4" name="huyen" class="content__list--input" placeholder="Huyện/Thành Phố" value="" style="display: none;">
                                    <input type="text" id="register_boss5" name="tinh" class="content__list--input" placeholder="Tỉnh" value="" style="display: none;">
                                </div>
                                <div class="content__list--loaitk">
                                    <h3>Loại tài khoản</h3>
                                    <div class="radio_select">
                                        <input type="radio" class="content__list--radio" name="myRadio" value="1" onchange="myFunction()" checked><label>Tìm kiếm</label>
                                        <input type="radio" class="content__list--radio" name="myRadio" value="2" onchange="myFunction()"><label>Chủ trọ</label>
                                    </div>
                                </div>
                                <div class="content__list">
                                    <button type="submit" name="submit" class="btn btn__dangbai">Đăng ký</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <?php
            if(isset($_POST['submit'])){
                
                $taikhoan = $_POST['id_user'];
                $ten = $_POST['ten'];
                $sdt = $_POST['sdt'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                $sonha = $_POST['sonha'];
                $duong = $_POST['duong'];
                $phuong = $_POST['duong'];
                $huyen = $_POST['huyen'];
                $tinh = $_POST['tinh'];

                if($pass != $repass){
                    echo'<script>alert("Mật khẩu không trùng khớp")</script>';
                }else{

                    $sql = "INSERT INTO `user` (`idcard`, `password`, `ten`, `sonha`, `duong`, `phuong`, `huyen`, `tinh`, `phone`, `pay`, `status`, `permission`) 
                    VALUES ('$taikhoan', MD5('$pass'), '$ten', '$sonha', '$duong', '$phuong', '$huyen', '$tinh', '$sdt', '', '0', '2')";
                    $rs = mysqli_query($conn,$sql);
                    if($rs){
                        
                        echo'<script>alert("Đăng Ký tài khoản thành công")</script>';
                        echo '<script>window.location.href = "index.php"</script>';

                    }
                }
            }
            ?>

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