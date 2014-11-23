<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$username = $_POST['username'];
$password = $_POST['pass'];


$m = new MongoClient();
$db = $m->GEA;
$coll = $db->Teachers;

$userQ = array("username"=>$username, "password"=>$password);

$doc = $coll->findOne($userQ);

if($doc) {
    header("Location: index2.php?username=".$doc['username']);
}

else {
    $error = "<p>Invalid username and/or password!</p>";
    header("Location: teacherlogin.php?error=".$error);
}
?>