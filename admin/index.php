<?php 
session_start();
$user = (isset($_SESSION['user']))?$_SESSION['user']:''; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
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
    <?php
     if($user['permission'] != '0'){
        die();
    }else{?>
    <div class="app">
        <div class="container">
            <?php include './header.php' ?>
            
            <!-- Main -->
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <!-- Search -->
                    <div class="search">
                        <label for="">
                            <input type="text" placeholder="Search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </label>
                    </div>
                    <!-- userImg -->
                    <div class="user">
                        <img src="../public/uploads/1053244.png" alt="">
                    </div>
                </div>

                <!-- cards -->
                <div class="cardBox">
                    <div class="cardAdmin">
                        <div>
                            <div class="numbers">1,054</div>
                            <div class="cardName">Daily revenue</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                    </div>
                    <div class="cardAdmin">
                        <div>
                            <div class="numbers">1,054</div>
                            <div class="cardName">monthly revenue</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-chart-column"></i>
                        </div>
                    </div>
                    <div class="cardAdmin">
                        <div>
                            <div class="numbers">1,054</div>
                            <div class="cardName">room available</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-list-ul"></i>
                        </div>
                    </div>
                    <div class="cardAdmin">
                        <div>
                            <div class="numbers">1,054</div>
                            <div class="cardName">room full</div>
                        </div>
                        <div class="iconBx">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                    </div>
                </div>

                <!-- Order Data list -->
                <div class="details">
                    <div class="dailyOrder">
                        <div class="cardHeader">
                            <h2>Daily Orders</h2>
                            <a href="#" class="button">View All</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Tên</td>
                                    <td>Tiền</td>
                                    <td>Thanh toán</td>
                                    <td>Trạng thái</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Nhà được thuê hôm nay</h2>
                        </div>
                        <table>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                                <td><h4>Cho thuê nhà trọ giá sinh viên <br><span>chủ trọ</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                                <td><h4>Cho thuê nhà trọ giá sinh viên <br><span>chủ trọ</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                                <td><h4>Cho thuê nhà trọ giá sinh viên <br><span>chủ trọ</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                                <td><h4>Cho thuê nhà trọ giá sinh viên <br><span>chủ trọ</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                                <td><h4>Cho thuê nhà trọ giá sinh viên <br><span>chủ trọ</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../public/uploads/anh1.jpeg" alt=""></div></td>
                                <td><h4>Cho thuê nhà trọ giá sinh viên <br><span>chủ trọ</span></h4></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <?php } ?>
<script src="../assets/js/app.js"></script>
</body>
</html>