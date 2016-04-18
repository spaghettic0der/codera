<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once "functions.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $oldPassword = $_POST['oldPassword'];
    $username = $_SESSION['loggedIn'];
    $password = $_POST['password'];

    include_once "functions.php";
    if(isUserAdmin($username) || (isset($oldPassword) && crypt($oldPassword,getSalt()) == getPassword($username)))
    {
        include_once "functions.php";
        changePassword($username,$password);
    }

}
