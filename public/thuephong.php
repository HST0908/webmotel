<?php 
    session_start();
    include '../connect.php';
    $user = (isset($_SESSION['user']))?$_SESSION['user']:''; 
    $id = $_REQUEST['id'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận thuê phòng</title>
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
        <div class="grid lager">
            <nav class="header__navbar">
                <a class="header__navbar-logo" href="../index.php"><img src="../assets/img/Motel.vn-removebg-preview.png" alt="motel.vn"></a>
                <ul class="header__navbar-user">
                <?php if(!empty($user)){
                    if($user['permission']=='1' || $user['permission']=='0' ){
                    echo'
                        <a class="user-list--link" href="#"><i class="fa-solid fa-user"></i>'.$user['ten'].'</a>
                        <li class="header__navbar-user-list"><a class="user-list--link" href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a></li>';
                    }else{
                        die();
                    }
                }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <div class="grid wide">
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class="box__container">
                    <?php 
                        $id = $_REQUEST['id'];
                        $sql = "SELECT * FROM phongtro WHERE ma_phong = $id";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="box__container-top">
                            <label href="" onclick="window.history.go(-1); return false;" class="back_datphong"><i class="fa-solid fa-arrow-left"></i>Trở lại</label>
                            <div class="box__container--header">
                                <h2 class="header__title">Thông tin khách hàng</h2>
                            </div>
                        </div>
                        <div class="box__container-content">
                            
                            <div class="content__list">
                                Mã phòng:<input type="number" name="maphong" class="content__list--input" value="<?=$row['ma_phong'];?>" placeholder="Mã phòng" readonly>
                                <input type="text" name="hoten" class="content__list--input" placeholder="Họ tên" value="" required>
                            </div>
                            <div class="content__list">
                                <input type="number" name="dienthoai" id="sdt" maxlength="10" class="content__list--input" value="" placeholder="Điện thoại" required>
                                Tiền cọc:<input type="text" class="content__list--input" placeholder="Tiền cọc" value="<?= number_format($row['gia']*0.2); ?>" readonly>
                                <input type="number" name="tiencoc" class="content__list--input" value="<?= $row['gia']*0.2; ?>" placeholder="Điện thoại" hidden>
                            </div>
                            <div class="content__list">
                                <h5>Ảnh bill</h5>
                                <input type="file" name="image" class="content__list--input" value="">
                            </div>
                            <div class="content__list">
                            Ngày thuê:<input type="text" name="ngaythue" class="content__list--input" placeholder="ngày thuê" value=" <?=date("Y/m/d")?>" readonly>
                            </div>
                            <input type="text" name="gia" value="<?=$row['gia'] ?>" hidden>
                            <p class="keep">
                                Lưu ý:
                                - Khách hàng chuyển tiền đặt cọc chụp lại bill để xác nhận
                                - Số Tài khoản ngân hàng nhận ********************* 
                            </p>
                            <div class="content__list">
                                <button type="submit" name="submit" class="btn btn__dangbai">Thuê</button>
                            </div>
                        </div>
                    </form>
                    <?php }
                    if(isset($_POST['submit'])){
                        $maphong = $_POST['maphong'];
                        $hoten = $_POST['hoten'];
                        $dienthoai = $_POST['dienthoai'];
                        $tiencoc = $_POST['tiencoc'];
                        $ngaythue = $_POST['ngaythue'];
                        $giatri = $_POST['gia'];
                        $file = $_FILES['image'];
                        $file_name = $file['name'];
                        move_uploaded_file($file['tmp_name'],'../public/uploads/'.$file_name);
                        if($file_name == ""){
                            echo '<script>alert("Vui lòng chọn ảnh bill");</script>';
                        }else{

                            $sqlInsert = "INSERT INTO `thue_phong` (`ma_phong`, `ho_ten`, `dienthoai`, `giatri`, `tien_coc`, `bill`, `ngaythue`) 
                            VALUES ('$maphong', '$hoten', '$dienthoai', '$giatri', '$tiencoc', '$file_name', '$ngaythue')";
                            $rs = mysqli_query($conn,$sqlInsert);
                            if($rs){
                                $sqlUpdate = "UPDATE `phongtro` SET `tinhtrang` = '1' WHERE `phongtro`.`ma_phong` = $id";
                                $rsU = mysqli_query($conn,$sqlUpdate);
                                echo '<script>alert("Thuê phòng thành công bạn vui lòng đợi điện thoại xác nhận");</script>';
                            }
                            else {
                                
                                echo '<script>alert("Thuê phòng thất bại");</script>';
                            }

                        }

                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>
<script src="../assets/js/app.js"></script>
</body>
</html>