<?php
    $sql_sv = "SELECT * FROM sinhvien"; 
    $query_sv = mysqli_query($connect, $sql_sv);
    if(isset($_POST['sbm'])){
        $MaSV = $_POST['masinhvien'];
        $TenSV = $_POST['tensinhvien'];
        $Gioitinh = $_POST['gioitinh'];
        $Ngaysinh = $_POST['ngaysinh'];
        $Diachi = $_POST['diachi'];
        $sql = "INSERT INTO sinhvien (MaSV, TenSV, Gioitinh, Ngaysinh, DiachiSV)
        VALUES ('$MaSV', '$TenSV', '$Gioitinh', $Ngaysinh, '$Diachi')";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container" style="width: 50%;">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sinh Viên</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="my-input">Mã sinh viên</label>
                    <input class="form-control" type="text" name="masinhvien" required>
                    <label for="my-input">Tên sinh viên</label>
                    <input class="form-control" type="text" name="tensinhvien" required> 
                    <label for="my-input">Giới tính</label>
                    <input class="form-control" type="text" name="gioitinh" required> 
                    <label for="my-input">Ngày sinh</label>
                    <input id="my-input" class="form-control" type="date" name="ngaysinh" required> 
                    <label for="my-input">Địa chỉ</label>
                    <input class="form-control" type="text" name="diachi" required> 
                </div>
                <button name="sbm" class="btn btn-success" type="submit">thêm mới</button>
            </form>
        </div>
    </div>
</div>