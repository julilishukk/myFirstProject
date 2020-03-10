<?php
require_once "../set/settings.php";

function dd($data, $stop=null){
    echo "DUMP:";
    echo "<pre><br>";
    print_r($data);
    echo "</pre>";
    if($stop!=0) exit();
}

function connect(){
    $ar = get_param();
    $dsn= "mysql:dbname=".$ar['db_name'].";host=127.0.0.1";
    $user=$ar['user'];
    $password=$ar['password'];
    try{
        $link=new PDO($dsn,$user,$password);
       // echo "success"."<br>";
    }catch(PDOException $e){
        echo "some errors".$e->getMessage();

    }
    return $link;

}

function check($login,$pas,$link){
    $my_query = "select * from users WHERE name='".$login."' and password='".$pas."'";
    $ar = $link->query($my_query)->fetchAll(2);
    return count($ar);
}


function cnt_users($login){
  $link = connect();
  $ar = $link->query("select * from users where name='".$login."'")->fetchAll(2);
  return count($ar);
}


//function init(){
//
//    $users = [
//        [1,'user1','pas1'],
//        [2,'user2','pas2'],
//        [3,'user3','pas3'],
//    ];
//
//    return $users;
//}
//
///**
// * @param $data
// * @param null $stop
// */
//function dd($data, $stop=null){
//    echo "DUMP:";
//    echo "<pre>";
//    print_r($data);
//    echo "</pre>";
//    if(!($stop!=0)) exit();
//}