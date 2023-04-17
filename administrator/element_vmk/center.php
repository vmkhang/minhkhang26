<?php
if (isset($_REQUEST['req'])) {
    $request = $_REQUEST['req'];
    switch ($request) {
        case 'exjs01':
            require './pageJS/exjs01.php';
            break;

        case 'exjs02':
            require './pageJS/exjs02.php';
            break;

        case 'exjs03':
            require './pageJS/exjs03.php';
            break;

        case 'userview':
            require './element_vmk/mUser/userView.php';
            break;
        case 'updateuser':
            require './element_vmk/mUser/userUpdate.php';
            break;
        case 'loaihangView':
            require './element_vmk/mLoaihang/loaihangView.php';
            break;
        case 'hanghoaView':
            require './element_vmk/mHanghoa/hanghoaView.php';
            break;

        case 'hanghoaUpdate':
            require './element_vmk/mHanghoa/hanghoaUpdate.php';
            break;
    }
} else {
    require './element_vmk/default.php';
}
