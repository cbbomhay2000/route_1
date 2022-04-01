<?php
$sql = "SELECT * FROM hang";
$query = mysqli_query($connect, $sql);
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Danh sách sản phẩm </h2>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>Mã Hàng</th>
            <th>Tên Hàng</th>
            <th>Đơn Vị Đo</th>
            <th>Đơn Giá</th>
            <th>Số Lượng Tồn</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = $query->fetch_assoc()) { ?>
            <tr>
              <td> <?php echo $row['MaH']; ?> </td>
              <td><?php echo $row['TenH']; ?></td>
              <td><?php echo $row['Donvido']; ?></td>
              <td><?php echo $row['Donggia']; ?></td>
              <td><?php echo $row['Soluongton']; ?></td>

              <td><a href="" class="btn btn-primary getdata mx-2" 
              data-toggle="modal" 
              data-target="#exampleModalLong" 
              data-mnh="<?php echo $row['MaH'] ?>" 
              data-tenh="<?php echo $row['TenH'] ?>" 
              data-donvido="<?php echo $row['Donvido'] ?>" 
              data-dongia="<?php echo $row['Donggia'] ?>" 
              data-soluong="<?php echo $row['Soluongton'] ?>">
              Xem
            </a>
          </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Thông tin hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Mã hàng</span>
          <input type="text" aria-label="First name" id="mnh" class="form-control">
        </div>

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Tên hàng</span>
          <input type="text" aria-label="First name" id="tenh" class="form-control">
        </div>

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Đơn vị đo</span>
          <input type="text" aria-label="First name" id="donvido" class="form-control">
        </div>

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Đơn giá</span>
          <input type="text" aria-label="First name" id="dongia" class="form-control">
        </div>

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Số lượng tồn</span>
          <input type="text" aria-label="First name" id="soluong" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>
<script>
  $('.getdata').click(function() {
    var mnh = $(this).data('mnh');
    var tenh = $(this).data('tenh');
    var donvido = $(this).data('donvido');
    var dongia = $(this).data('dongia');
    var soluong = $(this).data('soluong');

    $('#mnh').val(mnh);
    $('#tenh').val(tenh);
    $('#donvido').val(donvido);
    $('#dongia').val(dongia);
    $('#soluong').val(soluong);
  });
</script>