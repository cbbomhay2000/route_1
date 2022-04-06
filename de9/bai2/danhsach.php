<?php
$sql = "SELECT * FROM sinhvien";
$query = mysqli_query($connect, $sql);
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Danh sách sinh viên </h2>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>Mã Sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = $query->fetch_assoc()) { ?>
            <tr>
              <td> <?php echo $row['MaSV']; ?> </td>
              <td><?php echo $row['TenSV']; ?></td>
              <td><?php echo $row['Gioitinh']; ?></td>
              <td><?php echo $row['Ngaysinh']; ?></td>
              <td><?php echo $row['DiachiSV']; ?></td>

              <td><a href="" class="btn btn-primary getdata mx-2" 
              data-toggle="modal" 
              data-target="#exampleModalLong" 
              data-msv="<?php echo $row['MaSV'] ?>" 
              data-tsv="<?php echo $row['TenSV'] ?>" 
              data-gt="<?php echo $row['Gioitinh'] ?>" 
              data-ns="<?php echo $row['Ngaysinh'] ?>" 
              data-dc="<?php echo $row['DiachiSV'] ?>">
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
        <h5 class="modal-title" id="exampleModalLongTitle">Thông tin sinh viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Mã sinh viên</span>
          <input type="text" aria-label="First name" id="masinhvien" class="form-control">
        </div>

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Tên sinh viên</span>
          <input type="text" aria-label="First name" id="tensinhvien" class="form-control">
        </div>

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Giới tính</span>
          <input type="text" aria-label="First name" id="gioitinh" class="form-control">
        </div>

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Ngày sinh</span>
          <input type="text" aria-label="First name" id="ngaysinh" class="form-control">
        </div>

        <div class="input-group my-2 row ml-1">
          <span class="input-group-text col-4">Địa chỉ</span>
          <input type="text" aria-label="First name" id="diachi" class="form-control">
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
    var masv = $(this).data('msv');
    var tensv = $(this).data('tsv');
    var gioit = $(this).data('gt');
    var ngays = $(this).data('ns');
    var diac = $(this).data('dc');

    $('#masinhvien').val(masv);
    $('#tensinhvien').val(tensv);
    $('#gioitinh').val(gioit);
    $('#ngaysinh').val(ngays);
    $('#diachi').val(diac);
  });
</script>