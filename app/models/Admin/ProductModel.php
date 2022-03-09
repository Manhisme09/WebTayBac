<?php
class ProductModel extends DB
{
    public function get_product()
    {
        $sql = "select * from products";
        return mysqli_query($this->con, $sql);
    }
    public function get_productID($key)
    {
        $sql = "select * from products where product_id = '$key'";
        return mysqli_query($this->con, $sql);
    }

    public function insert_product($product_name, $path_file, $price, $description, $productType_id, $availability, $information)
    {
        $sql = "insert into products(product_name,image,price,description,productType_id,availability) values('$product_name','$path_file','$price','$description','$productType_id','$availability','$information')";
        return mysqli_query($this->con, $sql);
    }

    public function get_productType()
    {
        $sql = "select * from producttype";
        return mysqli_query($this->con, $sql);
    }

    public function update_product($product_id, $product_name, $path_file, $price, $description, $productType_id, $availability, $information)
    {
        $sql = "update products
        set
        product_name = '$product_name',
        image = '$path_file',
        price = '$price',
        description = '$description',
        productType_id = '$productType_id',
        availability = '$availability',
        information = '$information'
        where product_id = '$product_id' ";
        return mysqli_query($this->con, $sql);
    }

    public function delete_product($key)
    {
        $sql = "delete from products where product_id = '$key'";
        return mysqli_query($this->con, $sql);
    }


    // public function get_product_apple($name)
    // {
    //     $sql = "select * 
    //     from product inner join manufacture on product.manufacture_code = manufacture.manufacture_code where manufacture_name = '$name' ";
    //     return mysqli_query($this->con, $sql);
    // }
    // public function get_detail_product($key)
    // {
    //     $sql = "select * 
    //     from product where code = '$key' ";
    //     return mysqli_query($this->con, $sql);
    // }
    // public function findbyID($key)
    // {
    //     $sql = "select * 
    //     from product where code = '$key' ";
    //     return mysqli_fetch_array(mysqli_query($this->con, $sql), MYSQLI_ASSOC);
    // }
}
