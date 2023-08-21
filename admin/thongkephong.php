<?php 
session_start();
$user = (isset($_SESSION['user']))?$_SESSION['user']:''; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê phòng</title>
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
    <div class="container">
        
        <?php include './header.php' ?>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <!-- Search -->
                <!-- <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </div> -->
                <!-- userImg -->
                <div class="user">
                    <img src="../public/uploads/1053244.png" alt="">
                </div>
            </div>
            <!-- container list -->
            <div class="details">
                <div class="dailyOrder">
                    <div class="cardHeader">
                        <h2>Danh sách phòng trống</h2>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <td>Mã phòng</td>
                                <td>Giá phòng</td>
                                <td>Chủ trọ</td>
                                <td>Thao tác</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>18</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Danh sách phòng đã được thuê</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                            <td><h4>Mã Phòng: 21323 | Tiêu đề phòng<br><span>chủ trọ</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                            <td><h4>Mã Phòng: 21323 | Tiêu đề phòng<br><span>chủ trọ</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                            <td><h4>Mã Phòng: 21323 | Tiêu đề phòng<br><span>chủ trọ</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                            <td><h4>Mã Phòng: 21323 | Tiêu đề phòng<br><span>chủ trọ</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                            <td><h4>Mã Phòng: 21323 | Tiêu đề phòng<br><span>chủ trọ</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                            <td><h4>Mã Phòng: 21323 | Tiêu đề phòng<br><span>chủ trọ</span></h4></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
<script src="../assets/js/app.js"></script>
</body>
</html>