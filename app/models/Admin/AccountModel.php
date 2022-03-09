<?php
class AccountModel extends DB
{
    public function log($email, $password)
    {
        $sql = "select * from admin where email = '$email' and password = '$password'";
        return mysqli_query($this->con, $sql);
    }
}
