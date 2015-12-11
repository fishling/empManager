<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 11:55
 */

require_once './db/MysqlTool.class.php';
require_once './obj/Employee.class.php';
class EmployeeAccess {
    private $connection;

    public function __construct(){
        $this->connection = new MysqlTool();
    }

    public function findEmployees($employee){
        $sql = "select name,code,salary,grade from employee where 1= 1";
        if($employee != null){
            if($employee->getName() != null && strlen($employee->getName()) > 0){
                $sql = $sql." and name like '%".$employee->getName()."%'";
            }
            if($employee->getCode() != null && strlen($employee->getCode()) > 0){
                $sql = $sql." and code = '".$employee->getCode()."'";
            }
            if($employee->getGrade() != null && strlen($employee->getGrade()) > 0){
                $sql = $sql." and grade = '".$employee->getGrade()."'";
            }
        }
        $res = $this->connection->excute_dql($sql);

        $arr = Array();
        $i = 0;
        while($row = mysql_fetch_assoc($res)) {
            $emp = new Employee();
            $emp->setName($row['name']);
            $emp->setCode($row['code']);
            $emp->setSalary($row['salary']);
            $emp->setGrade($row['grade']);
            $arr[$i] = $emp;
            $i++;
        }
        $this->connection->releaseRes($res);
        $this->connection->closeConnection();
        return $arr;
    }
}