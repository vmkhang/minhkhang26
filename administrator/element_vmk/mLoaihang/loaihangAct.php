<?php
require '../../element_vmk/mod/loaihangCls.php';
if (isset($_GET['reqact'])) {
    $requestAction = $_GET['reqact'];
    switch ($requestAction) {
        case 'addnew':
            $tenloaihang = $_REQUEST['tenloaihang'];
            $tenhinhanh = $_REQUEST['tenhinhanh'];
            $hinhanh = $_FILES['fileimage']['tmp_name'];
            $hinhanh = base64_encode(file_get_contents(addslashes($hinhanh)));

            $loaihang = new loaihang();
            $rs = $loaihang->LoaihangAdd($tenloaihang, $tenhinhanh, $hinhanh);
            if ($rs) {
                header('location:../../index.php?req=loaihangView&result=ok');
            }
            else {
                header('location:../../index.php?req=loaihangView&result=notok');
            }
            break;
            case 'deleteloaihang':
                $idloaihang = $_REQUEST['idloaihang'];
                $loaihang = new loaihang();
                $rs = $loaihang->LoaihangDelete($idloaihang);
    
                if ($rs) {
                    header('location:../../index.php?req=loaihangView&result=ok');
                }
                else {
                    header('location:../../index.php?req=loaihangView&result=notok');
                }
                break;
                case 'updateloaihang':
                    $file_tmp = $_FILES['fileimage']['tmp_name'];
                    echo $file_tmp;
                    echo "fdsfsdf";
        
        
                    $idloaihang = $_POST['idloaihang'];
                    $tenloaihang = $_POST['tenloaihang'];
                    $tenhinhanh = $_POST['tenhinhanh'];
                    //kiểm tra có đổi hình ảnh không
                    if (getimagesize($_FILES['fileimage']['tmp_name']) == false) {
                             $hinhanh = $_POST['hinhanh'];
                             $hinhanh = $_POST['hinhanh'];
                         }
                         else {
                             $hinhanh = $_FILES['fileimage']['tmp_name'];
                             $hinhanh = base64_encode(file_get_contents(addslashes($hinhanh)));
                         }
                         $loaihang = new loaihang();
                         //$rs = $loaihang->LoaihangUpdate($tenloaihang, $tenhinhanh, $hinhanh, $idloaihang);
                         $rs = $loaihang->LoaihangUpdate($tenloaihang, $tenhinhanh, $hinhanh, $idloaihang);
                    if ($rs) {
                      header('location:../../index.php?req=loaihangView&result=ok');
                         }
                         else {
                             header('location:../../index.php?req=loaihangView&result=notok');
                              }
                         break;     

        default :
            header('location:../../index.php?req=loaihangView');
            break;
        }
    } else {
        header('location:../../index.php?req=loaihangView');
    }
     