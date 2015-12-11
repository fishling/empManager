<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" >
    <title>雇员列表信息</title>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 11:49
 */
    require_once './service/EmployeeService.class.php';

    echo "<table border=1><tr><td>姓名</td><td>工号</td><td>薪资</td><td>级别</td></tr>";
    $employeeService = new EmployeeService();
    $list = $employeeService->findAllEmployees();

    for($i = 0; $i < count($list); $i++){
        echo "<tr><td>";
        echo $list[$i]->getName()."</td><td>";
        echo $list[$i]->getCode()."</td><td>";
        echo $list[$i]->getSalary()."</td><td>";
        echo $list[$i]->getGrade();
        echo "</td></tr>";
    }
    echo "</table>";
?>
</br>
<a href="main.php">返回主页</a>
</html>