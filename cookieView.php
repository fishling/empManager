<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/22
 * Time: 10:32
 */
    /*if(!empty($_COOKIE['username'])){
        echo $_COOKIE['username'];
    }*/
    echo '<br/>';
    var_dump($_COOKIE);

    //删除cookie
    //setcookie('username',"",time()-200);
    foreach($_COOKIE as $key=>$val){
        setcookie($key,"",time()-1);
    }
    echo '<br/>';
    var_dump($_COOKIE); //刚删除时打印出来还是有值的，刷新之后变为空，why？？

?>