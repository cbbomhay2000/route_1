<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
</head>

<body>
    <div class="container t" style="width: 60%;">
        <div class="container align-items">
            <h1><b>Đặt phòng khách sạn</b></h1>
        </div>
        <hr>
        <div class="container">
            <form class="form-inl row" action="information.php" method="POST" onsubmit="return validateForm1()" name="myForm" >
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-1" style="width: 115px;">
                            <b> Loại phòng:</b>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label class="checkbox-inline" for="">
                                        <input type="checkbox" class="form-check-input require-one" name="p1" id="" value="Phòng vip đơn-500 nghìn đồng:" checked>
                                        <b>Phòng vip đơn</b><br>(500k/phòng)
                                    </label>
                                </div>
                                <div class="col-sm-5">
                                    <label class="control-label col-sm-4" for="my-input">Số lượng:</label>
                                    <div class="col-sm-8">
                                        <input id="my-input" class="form-control" type="number" name="sl1">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <img src="https://khanhgiahotel.vn/wp-content/uploads/2019/05/IMG_0951-3.jpg" width="100px" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label class="checkbox-inline" for="">
                                        <input type="checkbox" class="form-check-input require-one" name="p2" id="" value="Phòng vip đôi-800 nghìn đồng:" >
                                        <b>Phòng vip đôi</b><br>(800k/phòng)
                                    </label>
                                </div>
                                <div class="col-sm-5">
                                    <label class="control-label col-sm-4" for="my-input">Số lượng:</label>
                                    <div class="col-sm-8">
                                        <input id="my-input" class="form-control" type="number" name="sl2">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <img src="https://hotelmart.vn/files/Anh-HTM-Ni/Nam-2019/Thang-12/cac-loai-giuong-trong-khach-san-01.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label class="checkbox-inline" for="">
                                        <input type="checkbox" class="form-check-input require-one" name="p3" id="" value="Phòng thường-300 nghìn đồng:" >
                                        <b>Phòng thường</b><br>(300k/phòng)
                                    </label>
                                </div>
                                <div class="col-sm-5">
                                    <label class="control-label col-sm-4" for="my-input">Số lượng:</label>
                                    <div class="col-sm-8">
                                        <input id="my-input" class="form-control" type="number" name="sl3">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <img src="https://kenh14cdn.com/2020/2/12/844003171599881721172282334154703484485632o-1581509670538827726279.jpg" width="100px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <label class="col-sm-4" for="">Ngày đến:</label>
                            <div class="col-sm-8">
                                <input name="date1" class="form-control" type="date" value="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-4" for="">Ngày đi:</label>
                            <div class="col-sm-8">
                                <input name="date2" class="form-control" type="date" value=""><br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container col-md-12">
                        <div class="col-md-4">
                            <label class="col-sm-4" for="">Khách hàng:</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="name" type="text" value="">
                            </div>
                        </div>
                    </div>
                <div class="col-sm-12 ">
                    <button class="btn btn-primary" type="submit"><b>Đăng ký</b></button>
                </div>
                </div>
            </form>
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

    .col-6 {
        background-color: yellow;
    }
    .btn {
        margin: 20px 0px 30px 340px;
    }
    h1{
        padding-left: 235px;
        color: #6666FF;
    }
    .t {
        background-image: url(https://coolbackgrounds.io/images/backgrounds/index/ranger-4df6c1b6.png);
        margin-top: 70px;
        

    }
    body{
        color: #330033;
      background-image: url(https://images.wallpaperscraft.com/image/single/drops_background_bright_87013_2048x1152.jpg); 
    }
</style>
<script>
    $(document).ready(function() {
        $('#datetimepicker2').datetimepicker({
            locale: 'vn'
        });
    })

    function validateForm1() {
        let sl1 = document.forms["myForm"]["sl1"].value;
        let sl2 = document.forms["myForm"]["sl2"].value;
        let sl3 = document.forms["myForm"]["sl3"].value;
        let date1 = document.forms["myForm"]["date1"].value;
        let date2 = document.forms["myForm"]["date2"].value;
        let name = document.forms["myForm"]["name"].value;   
        

        if (sl1 == "" & sl2 == "" & sl3 == "") {
            alert("Hãy số lượng phòng");
            return false;
        }
        
        if (name == "") {
            alert("Hãy bổ sung trường họ và tên");
            return false;
        }
        if (new Date(date1) < new Date()) {
            alert("Vui lòng chọn ngày đặt phòng lớn hơn ngày hiện tại");
            return false;
        }
        if (new Date(date2) < new Date()) {
            alert("Vui lòng chọn ngày đi lớn hơn ngày hiện tại");
            return false;
        }
        if (new Date(date2) < new Date(date1)) {
            alert("Vui lòng chọn ngày đi lớn hơn ngày đặt");
            return false;
        }
    }
</script>
</html>
