<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/12
 * Time: 19:45
 */

class Paging {
    private $pageSize = 5; //每页显示条数，默认5
    private $pageNow; //显示的当前页
    private $rowCount; //总共行数
    private $pageCount; //总页数
    private $list; //分页查询结果
    private $obj; //查询条件
    private $phpPageName;

    public function showPaging(){
        echo "第".$this->pageNow."页";
        if($this->pageNow>1){
            $prePage = $this->pageNow-1;
            echo "<a href='".$this->phpPageName.".php?pageNow=$prePage'>上一页</a>&nbsp;";
        }
        if($this->pageNow<$this->pageCount){
            $nextPage = $this->pageNow+1;
            echo "<a href='".$this->phpPageName.".php?pageNow=$nextPage'>下一页</a>&nbsp;";
        }
        echo "共".$this->rowCount."条数据.每页".$this->pageSize."条,共".$this->pageCount."页</br>";
    }

    /**
     * @return mixed
     */
    public function getPhpPageName()
    {
        return $this->phpPageName;
    }

    /**
     * @param mixed $phpPageName
     */
    public function setPhpPageName($phpPageName)
    {
        $this->phpPageName = $phpPageName;
    }

    /**
     * @return mixed
     */
    public function getObj()
    {
        return $this->obj;
    }

    /**
     * @param mixed $obj
     */
    public function setObj($obj)
    {
        $this->obj = $obj;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getPageNow()
    {
        return $this->pageNow;
    }

    /**
     * @param mixed $pageNow
     */
    public function setPageNow($pageNow)
    {
        $this->pageNow = $pageNow;
    }

    /**
     * @return mixed
     */
    public function getRowCount()
    {
        return $this->rowCount;
    }

    /**
     * @param mixed $rowCount
     */
    public function setRowCount($rowCount)
    {
        $this->rowCount = $rowCount;
    }

    /**
     * @return mixed
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param mixed $pageCount
     */
    public function setPageCount($pageCount)
    {
        $this->pageCount = $pageCount;
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param mixed $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }

}
?>