<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/22
 * Time: 17:43
 */
    include_once 'obj/Manager.class.php';

    session_start();
    $_SESSION['username']='administrator';
    $_SESSION['isAdmin']=true;
    $user = new Manager();
    $user->setName('管理员');
    $user->setCode('administrator');
    $user->setId(1201);
    $_SESSION['user']=$user;

    var_dump($_SESSION);

    $u = $_SESSION['user'];
    echo $u->getName().'</br>';

    unset($_SESSION['isAdmin']);
    var_dump($_SESSION);

    // 销毁当前会话中的全部数据,删除session文件,但是不会重置当前会话所关联的全局变量,也不会重置会话 cookie
    session_destroy();
?>