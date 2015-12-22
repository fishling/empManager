<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 10:24
 */
    echo $_GET['user'].'登录成功';
    require_once 'timeProcess.php';
    getLastVisitTime();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" >
    </head>
    </br>
    <a href="empList.php">查看雇员信息</a>
</html>