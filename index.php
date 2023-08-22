<?php 
    session_start(); 
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
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
                        <li class="header__navbar-user-list"><a class="user-list--link" href="./dangky.php"><i class="fa-solid fa-user-plus"></i>Đăng ký</a></li>
                        <li class="header__navbar-user-list"><a class="user-list--link" onclick="user_login()"><i class="fa-solid fa-user"></i>Đăng nhập</a></li>';
                        } ?>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- contain -->
        <div class="grid wide">
            <!-- Form Tìm kiếm -->
            <form action="" method="GET" name="formtimkiem">
                <nav class="navheader">
                    <ul class="list__search">
                        <li class="list__search--item">
                            <select class="search--item-select" name="kieunha" id="">
                                <option value="Nhà trọ">Nhà trọ</option>
                                <option value="Nhà cấp 4">Nhà cấp 4</option>
                            </select>
                        </li>
                        <li class="list__search--item">
                            <select class="search--item-select" name="loaiphong" id="">
                                <option value="0">Loại phòng</option>
                                <option value="Khép kín">Khép kín</option>
                                <option value="không khép kín">không khép kín</option>
                            </select>
                        </li>
                        <li class="list__search--item">
                            <select class="search--item-select" name="thanhpho" id="">
                                <option value="0">Thành phố</option>
                                <option value="Thành phố Vinh">Thành phố Vinh</option>
                                <option value="Thành phố Hà Tĩnh">Thành phố Hà Tĩnh</option>
                                <option value="Hà Nội">Hà Nội</option>
                            </select>
                        </li>
                        <li class="list__search--item">
                            <select class="search--item-select" name="phuong" id="">
                                <option value="0">Phường</option>
                                <option value="Phường Đông Vĩnh">Phường Đông Vĩnh</option>
                                <option value="Phường Hà Huy Tập">Phường Hà Huy Tập</option>
                                <option value="Phường Lê Lợi">Phường Lê Lợi</option>
                                <option value="Phường Quán Bàu">Phường Quán Bàu</option>
                                <option value="Phường Hưng Bình">Phường Hưng Bình</option>
                                <option value="Phường Hưng Phúc">Phường Hưng Phúc</option>
                                <option value="Phường Hưng Dũng">Phường Hưng Dũng</option>
                                <option value="Phường Cửa Nam">Phường Cửa Nam</option>
                                <option value="Phường Quang Trung">Phường Quang Trung</option>
                                <option value="Phường Đội Cung">Phường Đội Cung</option>
                                <option value="Phường Lê Mao">Phường Lê Mao</option>
                                <option value="Phường Trường Thi">Phường Trường Thi</option>
                                <option value="Phường Bến Thủy">Phường Bến Thủy</option>
                                <option value="Phường Hồng Sơn">Phường Hồng Sơn</option>
                                <option value="Phường Trung Đô">Phường Trung Đô</option>
                                <option value="Phường Vinh Tân">Phường Vinh Tân</option>
                            </select>
                        </li>
                        <li class="list__search--item">
                            <select class="search--item-select" name="gia" id="">
                                <option value="0">Giá</option>
                                <option value="1000000">dưới 1 triệu</option>
                                <option value="1100000">trên 1 triệu</option>
                            </select>
                        </li>
                        <li class="list__search--item">
                            <select class="search--item-select" name="slnguoi" id="">
                                <option value="0">Số người</option>
                                <option value="2">Tối đa 2 người</option>
                                <option value="3">Tối đa 3 người</option>
                            </select>
                        </li>
                        
                        <li class="list__search--item">
                            <Button name="timkiem" class="btn_timkiem">Tìm kiếm</Button>
                        </li>
                    </ul>
                </nav>
            </form>
            <div class="row">
            <!-- SELECT * FROM phongtro,user WHERE phongtro.tinhtrang='0' AND user.ten -->
                <!-- item hiển thị phòng -->
                <?php 
                
                if(isset($_GET['timkiem'])){
                    $key_loaiphong = $_GET['loaiphong'];
                    $key_kieuphong = $_GET['kieunha'];
                    $key_phuong = $_GET['phuong'];
                    $key_huyen = $_GET['thanhpho'];
                    $key_gia = $_GET['gia'];
                    $key_slnguoi = $_GET['slnguoi'];

                    $sql = "SELECT * FROM `phongtro` WHERE kieu_phong LIKE '%$key_kieuphong%'";

                    if(isset($key_loaiphong)&& $key_loaiphong != 0){
                       $sql.=" AND loai_phong LIKE '%$key_loaiphong%'";
                    }
                    if(isset($key_phuong)&& $key_phuong!= 0){
                       $sql.=" AND phuong LIKE '%$key_phuong%'";
                    }
                    if(isset($key_huyen)&& $key_huyen!= 0){
                       $sql.=" AND huyen LIKE '%$key_huyen%'";
                    }
                    if(isset($key_gia)&& $key_gia!= 0){
                        if($key_gia <= 1000000){
                           $sql.=" AND gia < '$key_gia'";
                        }else {
                           $sql ." AND gia > '$key_gia'";
                        }
                    }
                    if(isset($key_slnguoi)&& $key_slnguoi!= 0){
                        if($key_slnguoi <= 2){
                            
                           $sql.=" AND kieu_phong < '%$key_slnguoi%'";
                        }else{
                           $sql.=" AND kieu_phong > '%$key_slnguoi%'";
                        }
                    }
                   $sql.="AND tinhtrang = '0'";

                }
                    $sql = "SELECT * FROM `phongtro` WHERE tinhtrang ='0'";
                // echo $sql;
                    $rs = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($rs)){?>
                <div class="col l-4 m-12 c-12">
                    <?='<script>alert("SQL"'.$sql.');</script>'?>
                    <div class="card">
                        <a href="./public/detail.php?id=<?= $row['ma_phong'] ?>" class="card_top">
                            <img src="./public/uploads/<?= $row['avatar'] ?>" alt="" class="card_top-img">
                        </a>
                        <div class="card__content">
                            <a href="./public/detail.php?id=<?= $row['ma_phong'] ?>" class="card__title"><?= $row['title'] ?></a>
                            <div class="card__content--price">Giá: <?= number_format($row['gia']); ?> đồng/tháng</div>
                            <div class="card__content--dientich">Diện tích: <?= $row['dientich'] ?>m&sup2;</div>
                            <div class="card__content--adress"><i class="fa-solid fa-location-dot"></i><?= $row['phuong'].', '.$row['huyen'].', '.$row['tinh'] ?></div>
                        </div>
                        <div class="card__bottom">
                            <img src="public/uploads/1053244.png" alt="" class="card__bottom--img">
                            <?php
                            $idcard = $row['idcard'];
                                $selectTen = mysqli_query($conn,"SELECT ten FROM user where idcard = $idcard");
                                foreach($selectTen as $key => $value){ ?>

                                    <div class="card__bottom--username"><?= $value['ten'] ?></div>

                                <?php } ?>
                        </div>
                    </div>
                </div>
                <?php }

                ?>
            </div>
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
                                        <input type="text" name="taikhoan" class="auth-form__input" #id="input_taikhoan" placeholder=" " autocomplete="off" required>
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
        <!-- footer -->
        <footer class="footer">

        </footer>
    </div>
    <script src="assets/js/app.js"></script>
</body>
</html>