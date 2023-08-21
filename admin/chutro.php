<?php 
session_start();
$user = (isset($_SESSION['user']))?$_SESSION['user']:''; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chủ trọ</title>
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
            <div class="details detail2fs">
                <div class="dailyOrder">
                    <div class="cardHeader">
                        <h2>Danh sách chủ trọ</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Mã phòng</td>
                                <td>Giá phòng</td>
                                <td>Chủ trọ</td>
                                <td>Địa chỉ</td>
                                <td>Tối đa người ở</td>
                                <td>Thao tác</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>18</td>
                                <td>800.000</td>
                                <td>Trần Lê Minh Quang</td>
                                <td>Số 7, ngõ 55, Phường Hưng Dũng,Thành phố Vinh, Nghệ An</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>1.400.000</td>
                                <td>Trần Lê Minh Quang</td>
                                <td>Số 7, ngõ 55, Phường Hưng Dũng,Thành phố Vinh, Nghệ An</td>
                                <td>2</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>1.200.000</td>
                                <td>Trần Lê Minh Quang</td>
                                <td>Số 7, ngõ 55, Phường Hưng Dũng,Thành phố Vinh, Nghệ An</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>1.500.000</td>
                                <td>Lê Văn Phong</td>
                                <td>Số 38,Trần Phú, Thành Phố Vinh, Nghệ An</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>1.000.000</td>
                                <td>Lê Văn Phong</td>
                                <td>Số 38,Trần Phú, Thành Phố Vinh, Nghệ An</td>
                                <td>4</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>900.000</td>
                                <td>Võ Văn Quyết</td>
                                <td>Số 1, Ngách Văn Đông,Phường Hung Dũng, Nghệ An</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>900.000</td>
                                <td>Võ Văn Quyết</td>
                                <td>Số 1, Ngách Văn Đông,Phường Hung Dũng, Nghệ An</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>900.000</td>
                                <td>Võ Văn Quyết</td>
                                <td>Số 1, Ngách Văn Đông,Phường Hung Dũng, Nghệ An</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btnsua">Sửa</a>
                                    <a href="#" class="btnxoa">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script src="../assets/js/app.js"></script>
</body>
</html>