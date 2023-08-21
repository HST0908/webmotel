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
                                <td>08</td>
                                <td>800.000</td>
                                <td>Trần Lê Minh Quang</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>1.200.000</td>
                                <td>Trần Lê Minh Quang</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>1.300.000</td>
                                <td>Lê Văn Phong</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>1.000.000</td>
                                <td>Lê Văn Phong</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>700.000</td>
                                <td>Lê Văn Phong</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>600.000</td>
                                <td>Nguyễn Nhật Nam</td>
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
                            <td><h4>Mã Phòng: 23 | Phòng Trọ giá rẻ cho sinh viên<br><span>Chủ trọ: Phạm Xuân Long</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/anh2.jpg" alt=""></div></td>
                            <td><h4>Mã Phòng: 32 | Phòng trọ khép kín gần Đại Học Sư Phạm Kỹ Thuật Vinh<br><span>Chủ trọ: Phạm Xuân Long</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/anh3.jpg" alt=""></div></td>
                            <td><h4>Mã Phòng: 21 | Phòng trọ sạch sẽ thoáng mát <br><span>Chủ trọ: Lê Văn Phong</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/phongtro1.png" alt=""></div></td>
                            <td><h4>Mã Phòng: 33 | Cho thuê phòng trọ gần chợ<br><span>Chủ trọ: Lê Văn Phong</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/phongtro2.jpg" alt=""></div></td>
                            <td><h4>Mã Phòng: 43 | Cho thuê phòng Sạch sẽ<br><span>Chủ trọ: Võ Văn quyết</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="../public/uploads/phongtro3.jpg" alt=""></div></td>
                            <td><h4>Mã Phòng: 12 | phòng sạch sẽ thoáng mát<br><span>Chủ trọ: Trần Lê Minh Quang</span></h4></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Charts -->
            <div class="details detail1fs1">
                <div class="dailyOrder">
                    <div class="cardHeader">
                        <h2>Top 5 chủ trọ được thuê phòng nhiều nhất</h2>
                    </div>
                    <div id="bar-chart"></div>
                </div>

                <div class="dailyOrder">
                    <div class="cardHeader">
                        <h2>Tăng trưởng lượt thuê</h2>
                    </div>
                    <div id="chart-tangtruong"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Script chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.1/apexcharts.min.js" 
    integrity="sha512-Gpg0M5UOTFSHGglemXUOUzL1LyO8MT0fxmEAjGN8jNlY6oSOsLerF1/vuXrqJXKyV5QIay12trwDDhmRJHZisA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script src="../assets/js/app.js"></script>
</body>
</html>