<?php
class Manage extends Control
{

    public function product($temp = [])
    {
        if (empty($temp)) {
            $get = $this->model("Admin/ProductModel");
            $this->view("Admin/layoutss/mainLayout", [
                "page" => "ProductPage",
                "sp" => $get->get_product(),
            ]);
        } else if ($temp == "insert") {

            $get = $this->model("Admin/ProductModel");
            if (isset($_POST['submit'])) {

                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $information = $_POST['information'];
                $description = $_POST['description'];
                $availability = $_POST['availability'];
                $productType_id = $_POST['productType_id'];
                $fileUpLoad = $_FILES['file-upload'];
                $from = $fileUpLoad['tmp_name'];

                $path_file =  './public/img/product/' . $fileUpLoad['name'];
                move_uploaded_file($from, $path_file);

                $path_file = '/public/img/product/' . $fileUpLoad['name'];


                $get->insert_product($product_name, $path_file, $price, $description, $productType_id, $availability, $information);



                header('Location:' . _WEB_ROOT . "/Admin/Manage/product");
            }

            $this->view("Admin/layoutss/mainLayout", [
                "page" => "InsertProduct",
                "pro_Type" => $get->get_productType(),
            ]);
        } else if ($temp == "update") {
            $key = $_GET['key'];
            $get_proID = $this->model("Admin/ProductModel");
            $get = $this->model("Admin/ProductModel");
            if (isset($_POST['submit'])) {
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $information = $_POST['information'];
                $description = $_POST['description'];
                $availability = $_POST['availability'];
                $productType_id = $_POST['productType_id'];

                $fileUpLoad = $_FILES['image_new'];
                if ($fileUpLoad['name'] != null) {
                    $from = $fileUpLoad['tmp_name'];
                    $path_file = "./public/img/product/" . $fileUpLoad['name'];
                    move_uploaded_file($from, $path_file);
                    $path_file = '/public/img/product/' . $fileUpLoad['name'];
                } else {
                    $path_file = $_POST['image_old'];
                }

                $get->update_product($product_id, $product_name, $path_file, $price, $description, $productType_id, $availability, $information);

                header('Location:' . _WEB_ROOT . "/Admin/Manage/product");
            }

            $this->view("Admin/layoutss/mainLayout", [
                "page" => "UpdateProduct",
                "product" => $get_proID->get_productID($key),
                "pro_Type" => $get->get_productType(),
            ]);
        } else if ($temp == "delete") {
            $key = $_GET['key'];
            $get = $this->model("Admin/ProductModel");
            $get->delete_product($key);

            header('Location:' . _WEB_ROOT . "/Admin/Manage/product");
        }
    }

    public function productType($temp = [])
    {
        if (empty($temp)) {
            $get = $this->model("Admin/ProductModel");
            $this->view("Admin/layoutss/mainLayout", [
                "page" => "ProductType",
                "type" => $get->get_productType(),
            ]);
        }
    }
    public function blogs($temp = [])
    {
        if (empty($temp)) {
            $get = $this->model("Admin/BlogModel");
            $this->view("Admin/layoutss/mainLayout", [
                "page" => "BlogPage",
                "blogs" => $get->get_blogs(),
            ]);
        } else if ($temp == "insert") {
            $get = $this->model("Admin/BlogModel");
            if (isset($_POST['submit'])) {

                $blog_title = $_POST['blog_title'];
                $blog_content = $_POST['blog_content'];
                $categorieBlog_id = $_POST['categorieBlog_id'];
                $fileUpLoad = $_FILES['file-upload'];
                $from = $fileUpLoad['tmp_name'];

                $path_file =  './public/img/blog/' . $fileUpLoad['name'];
                move_uploaded_file($from, $path_file);

                $path_file = '/public/img/blog/' . $fileUpLoad['name'];


                $get->insert_blog($blog_title, $blog_content, $path_file, $categorieBlog_id);



                header('Location:' . _WEB_ROOT . "/Admin/Manage/blogs");
            }
            $this->view("Admin/layoutss/mainLayout", [
                "page" => "InsertBlog",
                "cata_blog" => $get->get_categorie_blog(),
            ]);
        }
    }
}
