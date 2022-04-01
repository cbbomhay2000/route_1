<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = '';
    $soluong = '';
    $date = '';
    $giatien = '';

    if (isset($_POST)) {
        $name = $_POST['name'];
        $soluong = $_POST['soluong'];
        $date = $_POST['date'];
        $giatien = $_POST['giatien'];
        $yeucau = $_POST['yeucau'];
    }
    if ($giatien == 4200000){
        $phuongtien = "Xe 12 chỗ";
    }elseif ($giatien == 4000000){
        $phuongtien = "Xe 24 chỗ";
    }elseif ($giatien == 3800000){
        $phuongtien = "Xe khách";
    }else{
        $phuongtien = "Tàu hỏa";
    }

    if ($soluong >= 20){
        $thongbao = "Đã giảm 10%";
        $totalPrice = $soluong * $giatien - ($soluong * $giatien) * 0.1 ;
    }else{
        $totalPrice = $soluong * $giatien;
        $thongbao = "";
    }

    
}

  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" />
</head>

<body>
<div class="tong">
<div class="tieu_de">
            <H1><b>TUOR DU LỊCH VINH - ĐÀ NẴNG</b></H1>
        </div>
        <div class="container">
           
                <div class="row" >
                    <div class="col-sm-6">
                    <div class="col-sm-12 text-left my-1">Khách đã chọn phương tiện: <?php echo $phuongtien ?> </div>
                    <div class="col-sm-12 text-left my-1">Ngày khởi hành: <?php echo $date ?> </div>
                    <div class="col-sm-12 text-left my-1">Số lượng đăng kí: <?php echo $soluong ?> </div>
                    <div class="col-sm-12 text-left my-1">Giá Tour/Khách: <?php echo $giatien ?> </div>
                    <div class="col-sm-12 text-left my-1">Tổng số tiền cho <?php echo $soluong ?> khách: <?php echo $totalPrice ?> VNĐ.<span style="color: yellow; font-size: 15px;"><?php echo $thongbao ?> </span> </div>
                    <br>
                    <span>Thông tin khách hàng</span>
                    <div class="col-sm-12 text-left my-1">Tên khách hàng: <b><?php echo $name ?></b> </div><br>
                    <span>Các yêu cầu kèm theo: </span>
                    <div style="width: 480px;" class="col-sm-10"> <?php echo $yeucau ?> </div><br>   
                    </div>
                    <div class="col-sm-6">
                        <img width="722px" src="https://nucuoimekong.com/wp-content/uploads/anh-nen.jpg" alt="">
                    </div>
                </div>
        </div>
    </div>
</body>
<style>
    span {
        padding-left: 16px;
    }
    .container{
        background-image: url(https://coolbackgrounds.io/images/backgrounds/index/ranger-4df6c1b6.png)
    }
    .tieu_de {
        color: red ;
        text-align: center;
    }
    #dkgiamgia {
        color: red;
        font-size: 12px;  
    }
    body{
      background-image: url(https://images.wallpaperscraft.com/image/single/drops_background_bright_87013_2048x1152.jpg);       
    }
</style>

</html>