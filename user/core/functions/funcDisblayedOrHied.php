<?php function disblayedOrHied(){
    $authUser = $_SESSION['authUser'] ?? $_SESSION['auth'] ?? null;
    echo (!$authUser || !isset($authUser->isAdmin) || $authUser->isAdmin == 0) ? 'd-none' : '';
}