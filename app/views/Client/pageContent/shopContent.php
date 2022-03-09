<div class="col-lg-9 col-md-7">
    <!-- <div class="product__discount">
        <div class="section-title product__discount__title">
            <h2>Sale Off</h2>
        </div>
        <div class="row">
            <div class="product__discount__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-1.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Raisin’n’nuts</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-2.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Vegetables</span>
                            <h5><a href="#">Vegetables’package</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-3.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Mixed Fruitss</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-4.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Raisin’n’nuts</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-5.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Raisin’n’nuts</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-6.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Raisin’n’nuts</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="filter__item">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="filter__sort">
                    <span>Sắp xếp</span>


                    <select>
                        <option value="0">Mặc định</option>
                        <option value="0"><a href="#">Sắp xếp theo tên</a></option>
                        <option value="0"><a href="#">Giá từ thấp đến cao</a></option>
                        <option value="0"><a href="<?php echo _WEB_ROOT ?>">Giá từ cao đến thấp</a></option>
                    </select>


                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <?php foreach ($data['product'] as $each) : ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?php echo _WEB_ROOT . $each['image'] ?>">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="<?php echo _WEB_ROOT . "/Cart/store?id=" . $each['product_id'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?php echo _WEB_ROOT . "/chi-tiet/sanpham/"  . $each['product_id'] ?>"><?php echo $each['product_name'] ?></a></h6>
                        <h5><?php echo number_format($each['price']) . " VNĐ" ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach ?>


    </div>
    <div class="product__pagination">
        <?php for ($i = 1; $i <= $data['numberPagePro']; $i++) : ?>
            <?php if (isset($data['nameType'])) { ?>
                <a href="<?php echo _WEB_ROOT . "/cua-hang/danh-muc/" . $data['nameType'] . "/?page=" . $i ?>"><?php echo $i ?></a>
            <?php } else { ?>
                <a href="<?php echo _WEB_ROOT . "/cua-hang?page=" . $i ?>"><?php echo $i ?></a>
            <?php } ?>
        <?php endfor ?>
        <!-- <a href="#"><i class="fa fa-long-arrow-right"></i></a> -->
    </div>
</div>