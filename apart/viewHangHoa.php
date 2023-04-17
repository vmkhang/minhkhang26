<script>
    function goBack() {
        window.history.back();
    }
</script>

<?php
// require './element_vmk/mod/hanghoaCls.php';
require './administrator/element_vmk/mod/hanghoaCls.php';
$hanghoa = new hanghoa();
if (isset($_REQUEST['reqHanghoa'])) {
    $idhanghoa = $_REQUEST['reqHanghoa'];
    $obj = $hanghoa->HanghoaGetbyId($idhanghoa);
}
?>

<div class="itemsViewHangHoa">
    <center>
        <img src="data:image/png;base64, <?php echo ($obj->hinhanh) ;?>" alt="" class="imgViewHanghoa">
    </center>
    <br>
    <p>Sản phẩm: <?php echo $obj->tenhanghoa; ?></p><br>
    <p>Mô tả: <?php echo $obj->mota; ?></p><br>
    <p>Giá bán: <?php echo $obj->giathamkhao; ?></p><br>
    <button onclick="goBack()">Go Back</button>
</div>