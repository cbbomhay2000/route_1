<?php
include 'DbConnect2.php';
$link = mysqli_connect("localhost", "root", "", "qlgiaohang"); 
$sql = "SELECT
khach.MaKH as makhachhang,
khach.TenKH as tenkhachhang,
khach.Dienthoai as dienthoai,
khach.Diachi as diachi,
hang.MaH as mahang,
hang.TenH as tenhang,
hang.Donvido as donvido,
hang.Soluongton as soluongton,
phieugiao.Ngaygiao as ngaygiao,
phieugiao.Tongtien as tongtien,
phieugiao.Sohieugiaohang as sohieugiaohang,
duongdi.Sohieuduongdi as sohieuduongdi,
duongdi.Tenduongdi as tenduongdi,
duongdi.Chiphi as chiphi,
chitiet.Soluong as soluong,
chitiet.Thanhtien as thanhtien,
chitiet.MaH as mh,
chitiet.Sohieugiaohang as shgh,
phieugiao.Sohieuduongdi as shdd,
phieugiao.MaKH as mkh

FROM phieugiao
INNER JOIN duongdi ON phieugiao.Sohieuduongdi = duongdi.Sohieuduongdi
INNER JOIN khach ON phieugiao.MaKH = khach.MaKH
INNER JOIN chitiet ON chitiet.Sohieugiaohang = phieugiao.Sohieugiaohang
INNER JOIN hang ON hang.MaH = chitiet.MaH";

$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Mã phieu giao</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Tên Khách hàng</th>
        <th scope="col">Số Lượng</th>
        <th scope="col">Số Hiệu đường đi</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Ngày giao</th>
        <th scope="col">Tổng tiền</th>
        <th scope="col">Thao Tác</th>
      </tr>
    </thead>
    <tbody> 
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_array($result)) {
          echo '<tr>
            <th scope="row">' . $data['sohieugiaohang'] . '</th>
            <td>' . $data['tenhang'] . '</td>
            <td>' . $data['tenkhachhang'] . '</td>
            <td>' . $data['soluong'] . '</td>
            <td>' . $data['sohieuduongdi'] . '</td>
            <td>' . $data['diachi'] . '</td>
            <td>' . $data['ngaygiao'] . '</td>
            <td>' . $data['tongtien'] . '</td>
            <td>' .
            '<a href="" class="btn btn-primary getdata mx-2"  data-toggle="modal" 
            data-mgh = ' . $data['sohieugiaohang'] . ' 
            data-th = ' . $data['tenhang'] . ' 
            data-tkh = ' . $data['tenkhachhang'] . ' 
            data-sl = ' . $data['soluong'] . ' 
            data-shd = ' . $data['sohieuduongdi'] . ' 
            data-dc = ' . $data['diachi'] . ' 
            data-ng = ' . $data['ngaygiao'] . ' 
            data-tt = ' . $data['tongtien'] . ' 
            data-target="#exampleModalLong">Primary</a>' .

            '<a href="" class="btn btn-primary mx-2">Primary</a>' .
            '</td>
                    </tr>';
        }
      } ?> 
    </tbody>
  </table>

 
</body>

<script>
  $('.getdata').click(function() {
    var id = $(this).data('id');
    var tend = $(this).data('tend');
    var hlv = $(this).data('hlv');
    var sl = $(this).data('sl');
    var shs = $(this).data('shs');
    var date = $(this).data('date');
    var tensan = $(this).data('tensan');
    var diachi = $(this).data('diachi');

    $('#id').val(id);
    $('#tendoi').val(tend);
    $('#hlv').val(hlv);
    $('#sl').val(sl);
    $('#shs').val(shs);
    $('#date').val(date);
    $('#ts').val(tensan);
    $('#diachi').val(diachi);
  });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>
</html> 