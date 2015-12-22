<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/22
 * Time: 11:28
 */
    function getCookieValue($key){
        if(!empty($_COOKIE[$key])){
            return $_COOKIE[$key];
        }
        return '';
    }

    function setCookieValueNull($key){
        if(!empty($_COOKIE[$key])) {
            setcookie($key, '', time() - 1);
        }
    }
?>