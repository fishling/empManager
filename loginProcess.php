<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 10:23
 */
    require_once './service/ManagerService.class.php';

    $code = $_POST['code'];
    $password = $_POST['password'];

    $manager = new Manager();
    $manager->setCode($code);
    $manager->setPassword($password);
    $managerService = new ManagerService();
    if($managerService->checkLogin($manager)){
        header("Location: main.php?user=$code");
    }else{
        header("Location: login.php?errorno=1");
    }
    exit();
?>