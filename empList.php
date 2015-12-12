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
    require_once './obj/Paging.class.php';

    if(!empty($_REQUEST['pageNow'])) {
        $pageNow = $_REQUEST['pageNow'];
    }else{
        $pageNow = 1;
    }

    echo "<table border=1 width='700px'><tr><td>姓名</td><td>工号</td><td>薪资</td><td>级别</td><td>修改用户</td><td>删除用户</td></tr>";
    $employeeService = new EmployeeService();
    $paging = new Paging();
    $paging->setPageNow($pageNow);
    $paging = $employeeService->findPageAllEmployees($paging);

    //$list = $employeeService->findAllEmployees($pageNow,$pageSize);
    $list = $paging->getList();

    for($i = 0; $i < count($list); $i++){
        echo "<tr><td>";
        echo $list[$i]->getName()."</td><td>";
        echo $list[$i]->getCode()."</td><td>";
        echo $list[$i]->getSalary()."</td><td>";
        echo $list[$i]->getGrade()."</td><td>";
        echo "<a href='#'>修改用户</a></td><td>";
        echo "<a href='#'>删除用户</a>";
        echo "</td></tr>";
    }
    echo "</table>";

    //$rowCount = $employeeService->countAllEmployees();
    $rowCount = $paging->getRowCount();
    $pageCount = $paging->getPageCount();
    /*for($i = 1; $i <= $pageCount; $i++){
        echo "<a href='empList.php?pageNow=$i'>$i</a>&nbsp;";
    }*/
    echo "第".$pageNow."页";
    if($pageNow>1){
        $prePage = $pageNow-1;
        echo "<a href='empList.php?pageNow=$prePage'>上一页</a>&nbsp;";
    }
    if($pageNow<$pageCount){
        $nextPage = $pageNow+1;
        echo "<a href='empList.php?pageNow=$nextPage'>下一页</a>&nbsp;";
    }
    echo "共".$rowCount."条数据.每页".$paging->getPageSize()."条,共".$pageCount."页</br>";
?>
</br>
<form action="empList.php">
    跳转到：<input type="text" name="pageNow" />
    <input type="submit" value="GO">
</form>
</br>
<a href="main.php">返回主页</a>
</html>