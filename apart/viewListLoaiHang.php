<?php
require_once './administrator/element_vmk/mod/hanghoaCls.php';
// require_once './administrator/elements_vmk/mod/hanghoaCls.php';
$hanghoa = new hanghoa();

if (isset($_REQUEST['reqView'])) {
    $idloaihang = $_REQUEST['reqView'];
    $list_hanghoa = $hanghoa->HanghoaGetbyIdloaihang($idloaihang);
}
else {
    $list_hanghoa = $hanghoa->HanghoaGetAll();
}
?>

<div>
    <?php
    foreach ($list_hanghoa as $v) {
        if (isset($v->giathamkhao)) {
            echo "";
        }
        else {
            echo "";
        }
        ?>
        <a href="./index.php?reqHanghoa=<?php echo $v->idhanghoa;?>">
            <div class="itemsHanghoa">
                <img src="data:image/png;base64, <?php echo $v->hinhanh;?>" alt="" class="imgHanghoa"><br>
                Sản phẩm: <?php echo $v->tenhanghoa;?><br>
                Giá bán: <?php echo $v->giathamkhao;?>
            </div>
        </a>
    <?php
    }
    ?>
</div>