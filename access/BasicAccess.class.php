<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/12
 * Time: 20:08
 */

require_once './db/MysqlTool.class.php';
abstract class BasicAccess {
    private $connection;

    public function __construct(){
        $this->connection = new MysqlTool();
    }

    public function findObjs($obj,$pageNow,$pageSize){
        $sql = $this->buildFindSql($obj);
        if($pageNow != null && $pageSize != null){
            $sql = $sql." limit ".($pageNow-1)*$pageSize.",$pageSize";
        }
        $this->getConnection()->connect();
        $res = $this->getConnection()->excute_dql($sql);
        $this->getConnection()->closeConnection();

        return $this->constructReturnArr($res);
    }

    public function countObjs($obj){
        $sql = $this->buildCountSql($obj);
        $this->getConnection()->connect();
        $res = $this->getConnection()->excute_dql($sql);
        $this->getConnection()->closeConnection();

        if($row = mysql_fetch_row($res)){
            $rowCount = $row[0];
        }
        $this->getConnection()->releaseRes($res);
        return $rowCount;
    }

    public function findPageAllObjs($paging){
        $paging->setList($this->findObjs(null,$paging->getPageNow(),$paging->getPageSize()));
        $paging->setRowCount($this->countObjs(null));
        $paging->setPageCount(ceil($paging->getRowCount()/$paging->getPageSize()));
        return $paging;
    }

    public abstract function buildFindSql($obj);

    public abstract function constructReturnArr($res);

    public abstract function buildCountSql($obj);

    /**
     * @return MysqlTool
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param MysqlTool $connection
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;
    }

}