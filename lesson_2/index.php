<?php 
    require_once 'db.php';[]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Giao hàng</title>
</head>
<body>
    <?php
    if(isset($_GET['page_layout'])){
        switch ($_GET['page_layout']){
            case 'danhsach':
                require_once 'danhsach.php';
                break;
            default:
                require_once 'them.php';
                break;
            }
        }else{
            require_once 'danhsach.php';
        }
    
    ?> 
</body>
</html>