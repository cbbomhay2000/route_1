<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="tong">
        <div class="tieu_de">
            <H1><b>TUOR DU LỊCH VINH - ĐÀ NẴNG</b></H1>
        </div>
        <div class="container">
            <form class="form-inl row" name="myForm" action="session.php" method="post" onsubmit="return validateForm2()">
                <div class="row" >
                    <div class="col-sm-6">
                        <div class="form-group" style="height: 60px; padding-top: 20px;">
                            <label class="control-label col-sm-6">Phương tiện di chuyển</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="giatien">
                                    <option value="4200000">Xe 12 chỗ. Đơn giá 4.2 triệu/người</option>
                                    <option value="4000000">Xe 24 chỗ. Đơn giá 4.0 triệu/người</option>
                                    <option value="3800000">Xe khách. Đơn giá 3.8 triệu/người</option>
                                    <option value="5000000">Tàu hỏa. Đơn giá 5.0 triệu/người</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="height: 40px;">
                            <label class="control-label col-sm-6">Ngày khởi hành</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="form-group" style="height: 55px;">
                            <label class="control-label col-sm-6">Số lượng đăng ký: <br>
                                <p id="dkgiamgia">(Giảm 10% nếu đăng kí với số lượng > 20 người)</p>
                            </label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="soluong">
                            </div>
                        </div>
                        <div class="form-group" style="height: 40px;">
                            <label class="control-label col-sm-6">Tên khách hàng:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group" style="height: 40px;">
                            <label class="control-label col-sm-12">Những yêu cầu kèm theo:</label>
                            <div class="col-sm-12">
                                <input style="height: 60px;" type="text" class="form-control" name="yeucau">
                            </div>
                        </div>
                        <button style="margin: 15px 20px 24px 245px;" type="submit" class="btn btn-primary">Đăng Kí Tuor</button>
                    </div>
                    <div class="col-sm-6">
                        <img width="722px" src="https://nucuoimekong.com/wp-content/uploads/anh-nen.jpg" alt="">
                    </div>

                </div>
            </form>
        </div>
    </div>





</body>
<script>
    $(document).ready(function() {
        $('#datetimepicker2').datetimepicker({
            locale: 'vn'
        });
    })

    function validateForm2() {
        let name = document.forms["myForm"]["name"].value;
        let date = document.forms["myForm"]["date"].value;
        let soluong = document.forms["myForm"]["soluong"].value;
        let giatien = document.forms["myForm"]["giatien"].value;


        if (name == "") {
            alert("Hãy bổ sung trường họ và tên");
            return false;
        }

        if (new Date(date) < new Date()) {
            alert("Vui Lòng Chọn ngày giao hàng lớn hơn ngày hiện tại");
            return false;
        }
        if (date == '') {
            alert("Vui Lòng Chọn thời gian giao hàng");
            return false;
        }
        if (soluong == "") {
            alert("hãy nhập số lượng người");
            return false;
        }
        if (soluong <= 0) {
            alert("Số lượng lớn hơn 0");
            return false;
        }
        
    }
</script>
<style>
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