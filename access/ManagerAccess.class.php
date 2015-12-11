<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 11:09
 */

require_once './db/MysqlTool.class.php';
require_once './obj/Manager.class.php';
class ManagerAccess {
    private $connection;

    public function __construct(){
        $this->connection = new MysqlTool();
    }

    public function findUserByCode($code){
        $sql = "select name,password from manager where code = '".$code."'";
        $res = $this->connection->excute_dql($sql);

        if ($row = mysql_fetch_assoc($res)) {
            $user = new Manager();
            $user->setName($row['name']);
            $user->setPassword($row['password']);
        }
        $this->connection->releaseRes($res);
        $this->connection->closeConnection();
        return $user;
    }
}