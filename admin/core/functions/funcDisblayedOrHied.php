<?php function disblayedOrHied(){

    echo $_SESSION['auth']->isAdmin==0?'d-none':'';
}