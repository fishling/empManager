<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 14:30
 */

require_once './access/EmployeeAccess.class.php';
class EmployeeService {
    private $employeeAccess;

    public function __construct(){
        $this->employeeAccess = new EmployeeAccess();
    }

    public function findAllEmployees(){
        return $this->employeeAccess->findEmployees(null);
    }
}