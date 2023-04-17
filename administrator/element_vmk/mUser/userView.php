<div>Quản lý người dùng</div>
<hr>
<div>Người dùng mới</div>
<div>
    <form name="newuser" id="formreg" method="post" action="./element_vmk/mUser/userAct.php?reqact=addnew">
        <table>
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="hoten"></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>
                    Nam<input type="radio" name="gioitinh" value="1" checked="true">
                    Nữ<input type="radio" name="gioitinh" value="0" />
                </td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="date" name="ngaysinh" /></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="diachi" /></td>
            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td><input type="tel" name="dienthoai" /></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
                <td><input type="reset" value="Làm lại" /><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>

<hr>

<?php
require './element_vmk/mod/userCls.php'
?>
<div class="title_user">Danh sách người dùng</div>
<div class="content_user">
    <?php
    $user = new userCls();
    $list = $user->UserGetAll();
    // $length = count($list_user)
    ?>
    <p>Trong bảng có <b><?php echo count($list); ?></b></p>Tài khoản<br />
    <?php
    if (count($list) > 0) {
        // foreach ($list as $v) {
        //     echo $v->hoten . "<br/>";
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Ngày đăng kí</th>
                    <th>Hoạt động</th>
                    <th>Xoá</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list as $v) {
                ?>
                    <tr>
                        <td><?php echo $v->iduser; ?></td>
                        <td><?php echo $v->username; ?></td>
                        <td><?php echo $v->password; ?></td>
                        <td><?php echo $v->hoten; ?></td>
                        <td align="center">
                            <?php
                            if ($v->gioitinh == 0) {
                            ?>
                                <img class="iconimg" src="./img_vmk/girl.png" />
                            <?php
                            } else {
                            ?>
                                <img class="iconimg" src="./img_vmk/boy.png" />
                            <?php
                            }
                            ?>
                        </td>
                        <!-- <td><?php //echo $v->gioitinh; 
                                    ?></td> -->
                        <td><?php echo $v->ngaysinh; ?></td>
                        <td><?php echo $v->diachi; ?></td>
                        <td><?php echo $v->dienthoai; ?></td>
                        <td><?php echo $v->ngaydangky; ?></td>
                        <td align="center">
                            <?php
                            if (isset($_SESSION['ADMIM'])) {
                                if ($v->ability == 0) {
                            ?>
                                    <a href="./element_vmk/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?> &ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="./img_vmk/clock.png" />
                                    </a>
                                <?php
                                } else {
                                ?>
                                    <a href="./element_vmk/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?> &ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="./img_vmk/unclock.png" />
                                    </a>
                                <?php
                                }
                            } else {
                                if ($v->ability == 0) {
                                ?>
                                    <img class="iconimg" src="./img_vmk/clock.png" />
                                <?php
                                } else {
                                ?>
                                    <img class="iconimg" src="./img_vmk/unclock.png" />
                            <?php
                                }
                            }
                            ?>
                        </td>
                        <!-- <td><?php //echo $v->abtility; 
                                    ?></td> -->

                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                            ?>
                                <a href="./elements_vmk/mUser/userAct.php?reqact=deleteuser&iduser=<?php echo $v->iduser; ?>">
                                    <img class="iconimg" src="./img_vmk/delete1.png" alt="">
                                </a>
                            <?php
                            } else {
                            ?>
                                <img class="iconimg" src="./img_vmk/delete1.png" alt="">
                            <?php
                            }
                            ?>

                            <!-- <a href="index.php?req=updateuser&iduser=<?php //echo $v->iduser;
                                                                            ?>">
                                <img class="iconimg" src="./img_vmk/update1.png" alt="">
                            </a> -->
                            <?php
                            if (isset($_SESSION['USER']) and $v->username == 'admin') {
                            ?>
                                <!-- <temps class="btnupdate" value="<?php //echo $v->iduser; ?>">
                                    <img class="iconimg" src="./img_vmk/update1.png" alt="">
                                </temps> -->
                                <img class="iconimg" src="./img_vmk/update1.png" alt="">
                            <?php
                            } else {
                            ?>
                                <!-- <img class="iconimg" src="./img_vmk/update1.png" alt=""> -->
                                <temps class="btnupdate" value="<?php echo $v->iduser; ?>">
                                    <img class="iconimg" src="./img_vmk/update1.png" alt="">
                                </temps>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>
</div>