<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" >
        <title>雇员管理系统</title>
    </head>
    <body>
        <h1>管理员登录</h1>
        <form action="loginProcess.php" method="post">
            <table>
                <tr><td>用户名:</td><td><input type="text" name="code"></td></tr>
                <tr><td>密&nbsp;码:</td><td><input type="password" name="password"></td></tr>
                <tr>
                    <td><input type="submit" value="登录"></td>
                    <td><input type="reset" value="重新输入"></td>
                </tr>
            </table>
        </form>
        <?php
        /**
         * Created by PhpStorm.
         * User: fish
         * Date: 2015/12/11
         * Time: 10:22
         */
            if(!empty($_GET['errorno'])){
                $err = $_GET['errorno'];
                if($err==1) {
                    echo "<font color='red'>你输入的用户名或密码错误</font>";
                }
            }
        ?>
    </body>
</html>
