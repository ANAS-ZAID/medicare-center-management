<?php

include $loginData;



if (isset($_SESSION["authUser"])) {

    header("Location:$view$scereens$dashPordScereens");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    Login::onLogin(fileetrRequest('email'), sha1(fileetrRequest('password')));
}
// else{
//     header("Location:$indexScereens");
//     exit;   
// }
class Login
{
    

    static function onLogin($email, $password)
    {

        $responsData = LginData::chickUser($email, $password);

        if ($responsData['status']) {
            $_SESSION["authUser"] = $responsData['data'];
            $_SESSION["auth"] = $responsData['data'];
            global $dashPordScereens;
            global $view;global $scereens;
            header("Location:$view$scereens$dashPordScereens");
            exit;

        } else {
            global $indexScereens;
            header("Location:$indexScereens");
            exit;
        }

    }

}










?>