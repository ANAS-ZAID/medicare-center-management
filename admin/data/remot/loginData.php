<?php
class LginData
{

    static function chickUser($email, $password)
    {
        return selectFromTable("admins","*","`email` = ? AND `password` = ? AND registerStatus =? AND (isAdmin =? OR isSupAdmin =?) ",[$email, $password, 1,1,1], "one" );
        

    }

}