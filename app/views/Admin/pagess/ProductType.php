<h1>Đây là trang chủ quản lý các sản phẩm</h1>
<br>
<div>
    <a href="<?php echo _WEB_ROOT . "/Admin/Manage/product/insert" ?>">Thêm sản phẩm</a>
</div>
<br>
<table border="1" width="100%" style="text-align: center;">
    <tr>
        <th>Mã loại</th>
        <th>Tên loại sản phẩm</th>
        <th>Sửa</th>
        <th>Xóa</th>

    </tr>
    <?php
    foreach ($data["type"] as $prod) { ?>
        <tr>
            <td><?php echo $prod['productType_id'] ?></td>
            <td><?php echo $prod['productType_name'] ?></td>

            <td><a href="form_updateP.php?code=<?php echo $prod['code'] ?>">Sửa</a></td>
            <td><a href="process_deleteP.php?code=<?php echo $prod['code'] ?>">Xóa</a></td>
        </tr>
    <?php
    }
    ?>


</table>