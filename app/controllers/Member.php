<?php
class Member extends Control
{
    public function register()
    {

        $get = $this->model("HomeModels");
        if (isset($_POST['submit'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            if (strcmp($password, $confirm_password) != 0) {
                header('Location:' . _WEB_ROOT . "/member/register");
                exit();
            } else {

                $get->insert_customer($first_name, $last_name, $email, $password, $phone_number, $address);
                header('Location:' . _WEB_ROOT . "/member/login");
            }
        }


        $this->view("Client/layoutss/Layout2", [
            "page" => "Register",
            "product_type" => $get->get_productType(),
        ]);
    }

    public function login()
    {
        $get = $this->model("HomeModels");

        if (isset($_POST['submit'])) {
            $password = $_POST['password'];
            $email = $_POST['email'];


            $resuilt = $get->get_customer($email, $password);
            $number_row = mysqli_num_rows($resuilt);

            if ($number_row == 1) {
                $each = mysqli_fetch_array($resuilt);
                $_SESSION['id'] = $each['id'];
                $_SESSION['fullname'] =  $each['first_name'] . " " . $each['last_name'];
                header('Location:' . _WEB_ROOT);
            } else {
                header('Location:' . _WEB_ROOT . "/member/login");
            }
        }




        $this->view("Client/layoutss/Layout2", [
            "page" => "Login",
            "product_type" => $get->get_productType(),
        ]);
    }
    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['fullname']);

        header('Location:' . _WEB_ROOT);
    }
}
