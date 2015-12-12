<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 11:09
 */

require_once 'BasicAccess.class.php';
require_once './obj/Manager.class.php';
class ManagerAccess extends BasicAccess{
    public function buildFindSql($obj){
        $code = $obj;
        $sql = "select name,password from manager where code = '".$code."'";
        return $sql;
    }

    public function constructReturnArr($res){

    }

    public function constructReturnOne($res){
        if ($row = mysql_fetch_assoc($res)) {
            $user = new Manager();
            $user->setName($row['name']);
            $user->setPassword($row['password']);
        }
        $this->getConnection()->releaseRes($res);
        return $user;
    }

    public function buildCountSql($obj){

    }
}