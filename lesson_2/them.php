<?php
    $sql_hang = "SELECT * FROM hang"; 
    $query_hang = mysqli_query($connect, $sql_hang);
    if(isset($_POST['sbm'])){
        $MaH = $_POST['MaH'];
        $TenH = $_POST['TenH'];
        $Donvido = $_POST['Donvido'];
        $Donggia = $_POST['Donggia'];
        $Soluongton = $_POST['Soluongton'];

        $sql = "INSERT INTO hang (MaH, TenH, Donvido, Donggia, Soluongton)
        VALUES ('$MaH', '$TenH', '$Donvido', $Donggia, $Soluongton)";
        
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm mới hàng</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="my-input">Mã hàng</label>
                    <input class="form-control" type="text" name="MaH" required>
                    <label for="my-input">Tên hàng</label>
                    <input class="form-control" type="text" name="TenH" required> 
                    <label for="my-input">Đơn vị đo</label>
                    <input class="form-control" type="text" name="Donvido" required> 
                    <label for="my-input">Đơn giá</label>
                    <input id="my-input" class="form-control" type="number" name="Donggia" required> 
                    <label for="my-input">Số lượng tồn</label>
                    <input class="form-control" type="number" name="Soluongton" required> 
                </div>
                <button name="sbm" class="btn btn-success" type="submit">thêm mới</button>
            </form>
        </div>
    </div>
</div>