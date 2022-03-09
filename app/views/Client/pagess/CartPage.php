<?php
$cart = $data["sp"];
$sum = 0;
?>
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <?php
                    if (!empty($_SESSION['cart_tb'])) {
                    ?>
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cart as $key => $value) : ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="<?php echo _WEB_ROOT . $value['image'] ?>" alt="">
                                            <h5><?php echo $value['name'] ?></h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            <?php echo number_format($value['price']) . " VNĐ" ?>
                                        </td>
                                        <td>
                                            <span class="minus"><a style="color: black;" href="<?php echo _WEB_ROOT . "/Cart/minus?id=" . $key; ?>"><i class="fa fa-minus" aria-hidden="true"></i></a></span>
                                            <?php echo $value['quantity'] ?>
                                            <span class="plus"><a style="color: black;" href="<?php echo _WEB_ROOT . "/Cart/plus?id=" . $key; ?>"><i class=" fa fa-plus" aria-hidden="true"></i></a></span>

                                        </td>
                                        <td class="shoping__cart__total">
                                            <?php $resuilt =  $value['price'] * $value['quantity'];
                                            echo number_format($resuilt) . " VNĐ";
                                            $sum += $resuilt;
                                            ?>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="plus"><a style="color: black;" href="<?php echo _WEB_ROOT . "/Cart/delete?id=" . $key ?>"><i class="fa-solid fa-xmark"></i></a></span>

                                        </td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p>Không có sản phẩm nào trong giỏ hàng. Quay lại cửa hàng để tiếp tục mua sắm.</p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="<?php echo _WEB_ROOT . "/cua-hang" ?>" class="primary-btn cart-btn">Tiếp tục mua hàng</a>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span><?php echo number_format($sum) . " VNĐ" ?></span></li>
                        <li>Total <span><?php echo number_format($sum) . " VNĐ" ?></span></li>
                    </ul>
                    <a href="#" class="primary-btn">Thực hiện thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section>