<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/29
 * Time: 15:39
 */
    function checkLoginInfo(){
        session_start();
        if(empty($_SESSION['userInfo'])){
            header("Location: login.php");
        }
    }
?>