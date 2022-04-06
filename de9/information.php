<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $date1 = '';
    $date2 = '';
    $name = '';
    $sl1 = '';
    $sl2 = '';
    $sl3 = '';
    $p1 = '';
    $p2 = '';
    $p3 = '';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if (isset($_POST)) {
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
        $name = $_POST['name'];
    }
    if (isset($_POST['p1']) == "Phòng vip đơn-500 nghìn đồng:") {
        $sl1 = $_POST['sl1'];
        $p1 = $_POST['p1'] . " " . $sl1 . " " . "phòng.";
    }
    if (isset($_POST['p2']) == "Phòng vip đôi-800 nghìn đồng:") {
        $sl2 = $_POST['sl2'];
        $p2 = $_POST['p2'] . " " . $sl2 . " " . "phòng.";
    }
    if (isset($_POST['p3']) == "Phòng thường-300 nghìn đồng:") {
        $sl3 = $_POST['sl3'];
        $p3 = $_POST['p3'] . " " . $sl3 . " " . "phòng.";
    }
    $total1 = (int)$sl1 * 500000 + (int)$sl2 * 800000 + (int)$sl3 * 300000;
    $first_date = strtotime($date1);
    $second_date = strtotime($date2);
    $datediff = abs($first_date - $second_date);
    $day =  floor($datediff / (60 * 60 * 24));
    $total2 = $total1*$day;
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Bootstrap CSS -->
</head>

<body>
    <div class="container t">
        <div class="container">
            <h1><b>Thông tin đặt phòng</b></h1>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">Khách đã đăng kí:</div>
                <div class="col-sm-12"><b><?php echo $p1 ?></b></div>
                <div class="col-sm-12"><b><?php echo $p2 ?></b></div>
                <div class="col-sm-12"><b><?php echo $p3 ?></b></div>
                <div class="col-sm-4">Ngày đến: <?php echo $date1 ?></div>
                <div class="col-sm-4">Ngày đi: <?php echo $date2 ?></div>
                <div class="col-sm-6">Số ngày khách ở khách sạn: <?php echo $day ?> ngày</div>
                <div class="col-sm-12">Số tiền một ngày: <?php echo $total1 ?>đ</div>
                <div class="col-sm-12">Tổng số tiền cần trả: <?php echo $total2 ?>đ</div>
                <div class="col-sm-12">Thông tin khách hàng: <?php echo $name ?></div>
                <div class="col-sm-12">Chúng tôi đã nhận được thông tin đănh ký của quý khách vào lúc: <?php echo date('H:i:s d-m-Y') ?></div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<style>
    .form-group {
        height: auto;
        padding-bottom: 60px;
    }
    .btn {
        margin: 20px 0px 30px 340px;
    }

    h1 {
        padding-left: 235px;
        color: blue;
    }

    .t {
        background-image: url(https://coolbackgrounds.io/images/backgrounds/index/ranger-4df6c1b6.png);
        margin-top: 70px;
        width: 60%;
        height: 350px;
    }

    body {
        background-image: url(https://images.wallpaperscraft.com/image/single/drops_background_bright_87013_2048x1152.jpg);
    }
</style>

</html>