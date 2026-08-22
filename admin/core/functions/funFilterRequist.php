<?php

 function fileetrRequest($name, $type = "post")
{

    if ($type == "post") {


        if (((isset($_POST[$name]) && $_POST[$name]==0)||isset($_POST[$name])) && !empty($_POST[$name])) {


            return htmlspecialchars(strip_tags($_POST[$name]));
        } else {

              return "";

            // header("Location:$nameIndexPage");
            // exit;
        }
    } elseif ($type == "get") {


        if ((isset($_GET[$name]) && $_GET[$name]==0)||(isset($_GET[$name]) && !empty($_GET[$name]) )) {
        
            return htmlspecialchars(strip_tags($_GET[$name]));
          
        } else {

            return null;
            
            // header("Location:$nameIndexPage?page=index");
            // exit;
        }
    }
}