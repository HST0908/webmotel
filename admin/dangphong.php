<?php 
    session_start();
    include '../connect.php';
    $user = (isset($_SESSION['user']))?$_SESSION['user']:''; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng phòng</title>
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
    <div class="app">
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

        <div class="grid lager">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="box__container">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="box__container-top">
                                <a href="../index.php" class="back_datphong"><i class="fa-solid fa-arrow-left"></i>Trở lại</a>
                                <div class="box__container--header">
                                    <h2 class="header__title">Đăng phòng cho thuê mới</h2>
                                </div>
                            </div>
                            <div class="box__container-content">
                                <div class="content__list">
                                    <input type="number" name="id_user" class="content__list--input" value="<?=$user['idcard'];?>" placeholder="Mã chủ  trọ" readonly></input>
                                    <input type="text" name="title" class="content__list--input" placeholder="Tiêu đề bài đăng"></input>
                                </div>
                                <div class="content__list">
                                    <select name="kieunha" id="" class="content__list--input">
                                        <option value="Nhà cấp 4">Nhà cấp 4</option>
                                        <option value="Nhà trọ">Nhà trọ</option>
                                    </select>
                                    <select name="loaiphong" id="" class="content__list--input">
                                        <option value="Khép kín">Khép kín</option>
                                        <option value="Không khép kín">Không khép kín</option>
                                    </select>
                                </div>
                                
                                <div class="content__list">
                                    <select class="content__list--input" name="thanhpho" id="">
                                        <option value="Thành phố Vinh">Thành phố Vinh</option>
                                        <option value="Thành phố Hà Tĩnh">Thành phố Hà Tĩnh</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                    </select>
                                    <select class="content__list--input" name="phuong" id="">
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
                                    
                                    <select class="content__list--input" name="tinh" id="">
                                        <option value="Nghệ An">Nghệ An</option>
                                        <option value="Thanh Hóa">Thanh Hóa</option>
                                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                                    </select>
                                </div>

                                <div class="content__list">
                                    <input type="text" name="sonha" class="content__list--input" value="" placeholder="Số nhà" required></input>
                                    <input type="text" name="duong" class="content__list--input" placeholder="Tên đường" required></input>
                                </div>

                                <div class="content__list">
                                    <select class="content__list--input" name="slnguoi" id="">
                                        <option value="2">Từ dưới 2 người</option>
                                        <option value="3">Từ trên 2 người</option>
                                    </select>
                                    
                                    <input type="number" name="dientich" class="content__list--input" placeholder="Diện tích" required></input>

                                    <input type="number" name="gia" class="content__list--input" placeholder="Giá phòng/tháng" required></input>
                                </div>
                                
                                <div class="content__list">
                                    <h5>Ảnh phòng</h5>
                                    <input type="file" name="image" class="content__list--input" value=""></input>
                                </div>

                                <!-- <div class="content__list">
                                    <h5>Ảnh phòng&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                    <input type="file" name="images[]" class="content__list--input" title="Chọn tối đa 3 ảnh" value="" multiple></input>
                                </div> -->
                                <div class="content__list">
                                    <textarea type="text" name="mota" class="content__list--input" value="" placeholder="Nhập mô tả phòng..."></textarea>
                                </div>
                                <div class="content__list">
                                    <button type="submit" name="submit" class="btn btn__dangbai">Đăng Phòng</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['submit'])){
                            $machutro = $_POST['id_user'];
                            $tieude = $_POST['title'];
                            $kieunha = $_POST['kieunha'];
                            $loaiphong = $_POST['loaiphong'];
                            $thanhpho = $_POST['thanhpho'];
                            $phuong = $_POST['phuong'];
                            $tinh = $_POST['tinh'];
                            $sonha = $_POST['sonha'];
                            $duong = $_POST['duong'];
                            $slnguoi = $_POST['slnguoi'];
                            $dientich = $_POST['dientich'];
                            $gia = $_POST['gia'];
                            $mota = $_POST['mota'];

                            $file = $_FILES['image'];
                            $file_name = $file['name'];
                            move_uploaded_file($file['tmp_name'],'../public/uploads/'.$file_name);

                            
                            // $files = $_FILES['images'];
                            // $file_names = $files['name'];
                            // foreach ($file_names as $key => $value){
                            //     move_uploaded_file($files['tmp_name'][$key],'../public/uploads/'.$value);
                            // }

                            $sql = "INSERT INTO `phongtro` (`ma_phong`, `idcard`, `title`, `loai_phong`, `kieu_phong`, `sonha`, `duong`, `phuong`, `huyen`, `tinh`, `dientich`, `so_nguoi`, `gia`, `avatar`, `mota`, `tinhtrang`) 
                            VALUES (NULL, '$machutro', '$tieude', '$loaiphong', '$kieunha', '$sonha', '$duong', '$phuong', '$thanhpho', '$tinh', '$dientich', '$slnguoi', '$gia', '$file_name', '$mota', '0')";
                            
                            $rs = mysqli_query($conn,$sql);
                            // $id_phongtro = mysqli_insert_id($conn);

                            
                            // foreach ($file_names as $key => $value){
                            //     mysqli_query($conn,"INSERT INTO image(maphong,image) VALUE('$id_phongtro','$value')");
                            // }

                            // $imageCount = count($_FILES['anhphong']['name']);
                            // for($i = 0; $i < $imageCount; $i++){
                                
                            //     $imageName = $_FILES['anhphong']['name'][$i];
                            //     $targetPath = "../public/uploads/".$imageName;
                            //     $imageTempName = $_FILES['image']['tmp_name'][$i];
                            //     if(move_uploaded_file($imageTempName,$targetPath)){
                            //         $result = mysqli_insert_id($conn);
                                    // }
                            // }
                            
                            if($rs){
                                echo'<script>alert("Đăng bài thành công");</script>';
                            }
                            else{
                                echo'<script>alert("Đăng bài thất bại");</script>';
                            }
                        } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="assets/js/app.js"></script>
</body>
</html>