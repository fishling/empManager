<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 11:55
 */

require_once 'BasicAccess.class.php';
require_once './obj/Employee.class.php';
class EmployeeAccess extends BasicAccess{
    public function buildFindSql($obj){
        $sql = "select name,code,salary,grade from employee where 1= 1";
        $employee = $obj;
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
        return $sql;
    }

    public function constructReturnArr($res){
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
        $this->getConnection()->releaseRes($res);
        return $arr;
    }

    public function buildCountSql($obj){
        $sql = "select count(1) from employee where 1= 1";
        $employee = $obj;
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
        return $sql;
    }
}