<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$school = $_POST['school'];
$addr = $_POST['addr'];
$city = $_POST['city'];
$state = $_POST['state'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$email = $_POST['email'];

$m = new MongoClient();
$db = $m->GEA;
$coll = $db->Teachers;

if ($password == $confirm) {
    $teacher = array("fn" => $fn, "ln" => $ln, "school" => $school, "address" => $addr, "city" => $city, "state" => $state, "username" => $username, "password" => $password, "email" => $email, "points" => 0);
    $coll->insert($teacher);
} else {
    $error = "<p>You must enter the same password in the Password and Confirm password textboxes!</p>";
    header("Location: signup.html?error=".$error);
}
?>