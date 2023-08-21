<?php 
    session_start();
    include '../connect.php';
    $user = (isset($_SESSION['user']))?$_SESSION['user']:''; 
    $id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng trọ | chi tiết</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/reset.css"/>
    <link rel="stylesheet" href="../assets/libs/grid.css"/>
    <link rel="stylesheet" href="../assets/css/base.css"/>
    <link rel="stylesheet" href="../assets/css/main.css"/>
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.2-web/css/all.min.css"/>
</head>
<body>
    <!-- header -->
    <header class="header">
        <div class="grid wide">
            <nav class="header__navbar">
                <a class="header__navbar-logo" href="../index.php"><img src="../assets/img/Motel.vn-removebg-preview.png" alt="motel.vn"></a>
                <ul class="header__navbar-user">
                    <?php if(!empty($user)){
                        if($user['permission']=='2'){
                            echo'
                        <a class="user-list--link" href="#"><i class="fa-solid fa-user"></i>'.$user['ten'].'</a>
                        <li class="header__navbar-user-list"><a class="user-list--link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a></li>';
                    }else{
                        echo'
                        <a class="user-list--link" href="#"><i class="fa-solid fa-user"></i>'.$user['ten'].'</a>
                        <li class="header__navbar-user-list"><a class="user-list--link" href="suabai.php?id='.$id.'"><i class="fa-solid fa-wrench"></i>Sửa bài đăng</a></li>
                        <li class="header__navbar-user-list"><a class="user-list--link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a></li>';
                    }
                }else{
                    echo'
                    <li class="header__navbar-user-list"><a class="user-list--link" href="#"><i class="fa-solid fa-user-plus"></i>Đăng ký</a></li>
                    <li class="header__navbar-user-list"><a class="user-list--link" onclick="user_login()"><i class="fa-solid fa-user"></i>Đăng nhập</a></li>';
                    } ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class="box__container">
                    <form action="" method="post">
                        <label onclick="window.history.go(-1); return false;" class="back_detail"><i class="fa-solid fa-arrow-left"></i>Trở lại</label>
                        
                        <div class="top_content">
                            <!-- slide detail -->
                                <?php
                            $sql = "SELECT * FROM phongtro WHERE ma_phong ='$id'";
                            $rs = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($rs)){?>
                            <div class="slider">
                                <div class="slides">
                                    <!-- <input type="radio" name="radio" id="radio1" checked>
                                    <input type="radio" name="radio" id="radio2">
                                    <input type="radio" name="radio" id="radio3"> -->
                                    <div class="slide">
                                        <img src="../public/uploads/<?= $row['avatar'] ?>" alt="Slide show">
                                    </div>

                                    <!-- <div class="slide">
                                        <img src="../public/uploads/phong-tro-cho-thue-alonhatro-1-.jpg" alt="Slide show">
                                    </div> -->
                                </div>
                                <!-- <div class="navigation-auto">
                                    <div class="auto-btn1"></div>
                                    <div class="auto-btn2"></div>
                                    <div class="auto-btn3"></div>
                                </div> -->
                                <!-- <div class="navigation-manual">
                                    <label for="radio1" class="manual-btn"></label>
                                    <label for="radio2" class="manual-btn"></label>
                                    <label for="radio3" class="manual-btn"></label>
                                </div> -->
                            </div>
                        </div>
                        <div class="body__content">
                            <div class="content__list">
                                <label type="text" name="sonha" class="content__list--label title" value=""><?= $row['title'] ?></label>
                            </div>

                            <div class="content__list">
                                <label type="text" name="sonha" class="content__list--label" value="">Giá: <?= number_format($row['gia']); ?> đồng/tháng</label>
                            </div>

                            <div class="content__list">
                                <label type="text" name="sonha" class="content__list--label">Diện tích: <?= $row['dientich'] ?>m&sup2;</label>
                                <label type="text" name="sonha" class="content__list--label">Tình trạng phòng: <?php if($row['tinhtrang'] == 0) echo "Còn phòng";
                                                                                                            elseif($row['tinhtrang'] == 1) echo "Đã được thuê"; ?></label>
                            </div>

                            <div class="content__list">
                                <label type="text" name="sonha" class="content__list--label" value="">Địa chỉ: <?= $row['phuong'].', '.$row['huyen'].', '.$row['tinh'] ?></label>
                            </div>

                            <div class="content__list">
                                <label type="text" name="sonha" class="content__list--label">Kiểu nhà: <?= $row['kieu_phong'] ?></label>
                                <label type="text" name="sonha" class="content__list--label">Loại phòng: <?= $row['loai_phong'] ?></label>
                                <label type="text" name="sonha" class="content__list--label">Số người có thể ở: <?php if($row['so_nguoi'] <= 2){echo " dưới 2 người";}
                                elseif($row['so_nguoi'] > 2){ echo "Từ 2 - 4 người";}?></label>
                            </div>

                            <div class="content__list">
                                <label type="text" name="sonha" class="content__list--label" value="">Mô tả: </label>
                            </div>

                            <div class="content__list">
                                <p type="text" name="sonha" class="content__list--label mota" value=""><?= $row['mota'] ?></p>
                            </div>

                            <div class="content__list">
                                <a href="./thuephong.php?id=<?=$id?>" type="submit" name="submit" class="btn btn__thue">Thuê phòng</a>
                            </div>
                        </div>
                    </form>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
<script src="../assets/js/app.js"></script>
</body>
</html>