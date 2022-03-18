<?php
class HomeModels extends DB
{
    public function get_Product_Sort($offset, $numberPostPerPage, $sort)
    {
        $sql = "select * from products order by $sort limit $numberPostPerPage offset $offset";
        return mysqli_query($this->con, $sql);
    }
    public function get_Product($offset, $numberPostPerPage)
    {
        $sql = "select * from products limit $numberPostPerPage offset $offset";
        return mysqli_query($this->con, $sql);
    }

    public function get_Product_byType_Sort($offset, $numberPostPerPage, $temp, $sort)
    {

        $sql = "select * from products INNER JOIN producttype ON products.productType_id=producttype.productType_id where productType_name = '$temp' order by $sort limit $numberPostPerPage offset $offset";

        return mysqli_query($this->con, $sql);
    }
    public function get_Product_byType($offset, $numberPostPerPage, $temp)
    {

        $sql = "select * from products INNER JOIN producttype ON products.productType_id=producttype.productType_id where productType_name = '$temp' limit $numberPostPerPage offset $offset";

        return mysqli_query($this->con, $sql);
    }
    public function get_Blog_byType($offset, $numberPostPerPage, $temp)
    {

        $sql = "select * from blogs INNER JOIN categorieblog ON blogs.categorieBlog_id=categorieblog.categorieBlog_id where categorieBlog_name = '$temp' limit $numberPostPerPage offset $offset";

        return mysqli_query($this->con, $sql);
    }

    public function get_Blog($offset, $numberPostPerPage)
    {
        $sql = "select * from blogs limit $numberPostPerPage offset $offset";
        return mysqli_query($this->con, $sql);
    }
    public function get_categorie_blog()
    {
        $sql = "SELECT categorieblog.categorieBlog_name,COUNT(*) AS 'sl' FROM blogs INNER JOIN categorieblog ON blogs.categorieBlog_id = categorieblog.categorieBlog_id GROUP BY categorieblog.categorieBlog_name;";
        return mysqli_query($this->con, $sql);
    }

    public function get_count_product($temp = [])
    {
        if (empty($temp)) {
            $sql = "select count(*) from products";
        } else {
            $sql = "select count(*) from products INNER JOIN producttype ON products.productType_id=producttype.productType_id WHERE productType_name = '$temp'";
        }

        return mysqli_query($this->con, $sql);
    }
    public function get_count_blog($temp = [])
    {
        if (empty($temp)) {
            $sql = "select count(*) from blogs";
        } else {
            $sql = "select count(*) from blogs INNER JOIN categorieblog ON blogs.categorieBlog_id=categorieblog.categorieBlog_id WHERE categorieBlog_name = '$temp'";
        }

        return mysqli_query($this->con, $sql);
    }
    public function get_count_blogs()
    {
        $sql = "select count(*) from blogs";
        return mysqli_query($this->con, $sql);
    }

    public function get_blog_featured()
    {
        $sql = "select * from blogs limit 3";
        return mysqli_query($this->con, $sql);
    }

    public function get_productType()
    {
        $sql = "select * from producttype";
        return mysqli_query($this->con, $sql);
    }

    public function get_top_product()
    {
        $sql = "select * from products limit 10";
        return mysqli_query($this->con, $sql);
    }

    public function get_detail_product($item)
    {
        $sql = "select * from products where product_id = '$item' ";
        return mysqli_query($this->con, $sql);
    }
    public function get_detail_blog($item)
    {;
        $sql = "SELECT * FROM blogs INNER JOIN categorieblog ON blogs.categorieBlog_id = categorieblog.categorieBlog_id WHERE blog_id = '$item'";
        return mysqli_query($this->con, $sql);
    }

    public function get_related_product($proType_id, $proId)
    {
        $sql = "SELECT * FROM products WHERE productType_id = '$proType_id' AND NOT product_id='$proId' limit 4";

        return mysqli_query($this->con, $sql);
    }

    public function get_new_blog()
    {
        $sql = "SELECT * FROM blogs ORDER BY posted_at DESC limit 3 ";
        return mysqli_query($this->con, $sql);
    }


    public function get_featured_product1()
    {
        $sql = "select * from products where productType_id = '1' ";
        return mysqli_query($this->con, $sql);
    }

    public function get_featured_product2()
    {
        $sql = "select * from products where productType_id = '2' limit 3 ";
        return mysqli_query($this->con, $sql);
    }
    public function get_featured_product3()
    {
        $sql = "select * from products where productType_id = '3' limit 2 ";
        return mysqli_query($this->con, $sql);
    }
    public function get_featured_product4()
    {
        $sql = "select * from products where productType_id = '9' limit 3 ";
        return mysqli_query($this->con, $sql);
    }
    public function get_featured_product5()
    {
        $sql = "select * from products where productType_id = '8' limit 3 ";
        return mysqli_query($this->con, $sql);
    }
    public function get_featured_product6()
    {
        $sql = "select * from products where productType_id = '6' limit 3 ";
        return mysqli_query($this->con, $sql);
    }
    public function findbyID($key)
    {
        $sql = "select * from products where product_id = '$key' ";
        return mysqli_fetch_array(mysqli_query($this->con, $sql), MYSQLI_ASSOC);
    }

    public function insert_customer($first_name, $last_name, $email, $password, $phone_number, $address)
    {
        $sql = "insert into customers(first_name,last_name,email,password,phone_number,address) values('$first_name','$last_name','$email','$password','$phone_number','$address')";
        return mysqli_query($this->con, $sql);
    }
    public function get_customer($email, $password)
    {
        $sql = "select * from customers where email = '$email' and password = '$password'";
        return mysqli_query($this->con, $sql);
    }
}
