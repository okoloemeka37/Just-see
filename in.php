<?php
 require_once("config.php");
if (isset($_POST['store'])) {

    $id=$_POST['id'];
    $name=$_POST['username'];
    $party=$_POST['party'];
    $score=$_POST['score'];
    $user_ip = $_SERVER['REMOTE_ADDR'];

    $insert="INSERT INTO announced_pu_results(polling_unit_uniqueid,party_abbreviation,party_score,entered_by_user,user_ip_address) VALUES ('$id','$party','$score','$name','$user_ip')";

mysqli_query($connect,$insert);
return "yes";
}
