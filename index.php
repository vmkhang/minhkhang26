<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./public_file/pmycss.css">
</head>
<body>
    <div class="lvOne"></div>

    <div class="lvTwo">
        <?php
        require './apart/menuLoaihang.php';
        ?>
    </div>

    <div class="lvThree">
        <?php
        if (!isset($_REQUEST['reqHanghoa'])) {
            require './apart/viewListLoaiHang.php';
        }
        else {
            require './apart/viewHangHoa.php';
        }
        ?>
    </div>

</body>
</html>