<?php
class LginData
{

    static function chickUser($email, $password)
    {
        return selectFromTable("users", "*", "`email` = ? AND `password` = ? AND registerStatus = ?", [$email, $password, 1], "one");
        

    }

}