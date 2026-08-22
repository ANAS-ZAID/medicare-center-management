<?php
 function UpdateToTable(string $table, array $columnAndValues,string $where,array $whereValues){
    global $con;
    $columnAndValues=explodeColAndVal($columnAndValues);
    $columns=$columnAndValues['columns'];
    $values=$columnAndValues['values'];
    foreach ($whereValues as $key => $value) {
        array_push($values,$value);
    }
    $sql=$con->prepare("UPDATE $table SET $columns WHERE $where");
    $sql->execute($values);
    if ($sql->rowCount()>0) {
        
        return ["status"=>true,"message"=> translate("successMessage")];
    }else  {
        
        return ["status"=>false,"message"=> translate("errorMessage")];
    }
    
 }
 

 
 function selectFromTable(string $table, string $columns="*",string $where="true",array $whereValues=[] ,string $typeReturn="all",$orderBy = 'id', $order = 'desc', string $limit = '') {
    global $con;
    if ($limit != '') {
        $limit = "LIMIT $limit";
    }
    $sql=$con->prepare("SELECT $columns FROM $table  WHERE $where  ORDER BY $orderBy $order $limit");
    $sql->execute($whereValues);
    if($sql->rowCount() > 0) {
        $data=$typeReturn=="all"? $sql->fetchAll(PDO::FETCH_OBJ) :$sql->fetch(PDO::FETCH_OBJ);
        return ["status" => true, "data" =>$data ,"message"=> translate("successMessage")];
    }else {
        return ["status" => false,"data" =>[], "message" => translate("errorMessage")];
    }
 }
 function insertToTable(string $table, array $columnAndValues,string $typeReturn="all") {
    global $con;
    $columnAndValues=explodeColAndVal($columnAndValues,'');   
    $sql=$con->prepare("INSERT INTO  $table ({$columnAndValues['columns']}) VALUES ({$columnAndValues['quationMark']})");
    $sql->execute($columnAndValues['values']);
    if($sql->rowCount() > 0) {
        return ["status" => true, "data" =>$sql->fetch(PDO::FETCH_OBJ) ,"message"=> translate("successMessage")];
    }else {
        return ["status" => false,"data" =>null, "message" => translate("errorMessage")];
    }
 }
 function deleteFromTable(string $table,string $where,array $whereValues) {
    global $con;
    
    $sql=$con->prepare("DELETE FROM $table  WHERE $where");
    $sql->execute($whereValues);
    if($sql->rowCount() > 0) {
    
        return ["status" => true, "message"=> translate("successMessage")];
    }else {
        return ["status" => false, "message" => translate("errorMessage")];
    }
 }
 function explodeColAndVal(array $columnAndValues,$strAfterColumn="=?",$strBeforeColumn=","){
    $columns="";
    $values=array();
    $quationMark="";
   
    foreach ($columnAndValues as $key => $val) {
        $columns.=$strBeforeColumn.$key.$strAfterColumn;
         $quationMark.=",?";
        array_push($values, $val);
       } 
       $columns[0]=" ";
       $quationMark[0]=" ";
       return["columns"=>$columns, "values"=>$values,"quationMark"=>$quationMark];
 }