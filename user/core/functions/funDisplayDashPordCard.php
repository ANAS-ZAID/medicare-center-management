<?php
function displayCard($icon, $title, $table,$href){
    $count= count(selectFromTable($table)['data']) ;
   echo " <div class='col-lg-3 col-md-3'>
       <a href=$href class='a-card'>  <div class='card card-dashPordScereens'>
            <div class='card-head'>
             <h4>  $count </h4>
                <i class='fa fa-$icon fa-fw'></i>
               
            </div>
            <div class='card-body'>
                <h4>
                  $title
                </h4><h4>$count</h4>
            </div>

        </div> </a>
    </div>";

}