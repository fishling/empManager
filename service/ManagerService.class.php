<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/11
 * Time: 11:13
 */

require_once './access/ManagerAccess.class.php';
class ManagerService {
    private $managerAccess;

    public function __construct(){
        $this->managerAccess = new ManagerAccess();
    }

    public function checkLogin($manager){
        $user = $this->managerAccess->findUserByCode($manager->getCode());
        if(isset($user)){
            if($user->getPassword() == md5($manager->getPassword())){
                return true;
            }
        }
        return false;
    }
}