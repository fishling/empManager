<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/22
 * Time: 11:12
 */
    //设置时区
    date_default_timezone_set('prc');

    function getLastVisitTime(){
        if(!empty($_COOKIE['lastVisit'])){
            echo '<br/>上次登录时间为 '.$_COOKIE['lastVisit'];
        }else{
            echo '<br/>第一次登录';
        }
        setcookie('lastVisit',date("Y-m-d H:i:s"),time()+30*24*3600);
    }

?>