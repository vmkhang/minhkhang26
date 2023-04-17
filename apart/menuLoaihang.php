<?php
// require_once './administrator/elements_vmk/mod/loaihangCls.php';
require_once './administrator/element_vmk/mod/loaihangCls.php';
?>
<a href="./index.php">
    <div class="itemsmenu">
        <img class="imgmenu" src="./administrator/img_vmk/home.png">Home
    </div>
</a>
<?php
$obj = new loaihang();
$list_loaihang = $obj->LoaihangGetAll();

if (is_array($list_loaihang) || is_object($list_loaihang)) {
    foreach ($list_loaihang as $v) {
        ?>
        <a href="./index.php?reqView=<?php echo $v->idloaihang; ?>">
            <div class="itemsmenu">
                <img src="data:image/png;base64, <?php echo ($v->hinhanh); ?>" alt="" class="imgmenu">
                <?php echo ($v->tenloaihang); ?>
            </div>
        </a>
        <?php
    }
}
else {
    echo "";
}

?>