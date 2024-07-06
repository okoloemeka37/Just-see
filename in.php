<?php
 require_once("config.php");
 $error=['id'=>'','name'=>'',"party"=>'','score'=>""];
 function store()  {
    
    global $connect,$error;

if (isset($_POST['store'])) {

    $id='';
    $name='';
    $score='';
    $party='';
  
    if (empty($_POST['id'])) {
      $error['id']="The Polling Unit ID  is Required" ;
      return false;
    }else{
        $id=strip($_POST['id']); 
    }
    if (empty($_POST['username'])) {
        $error['name']="Enter Your Name is Required" ;
        return false;
    }else{
        $name=strip($_POST['username']);
    }

    if (empty($_POST['score'])) {
        $error['score']="Enter The Party Score" ;
        return false;
    }else{
        $score=strip($_POST['score']);
    }
   
    if (empty($_POST['party'])) {
        $error['party']="Enter The Party Name" ;
        return false;
    }else{
        $party=strip($_POST['party']);
    }

   
    $user_ip = $_SERVER['REMOTE_ADDR'];

    $insert="INSERT INTO announced_pu_results(polling_unit_uniqueid,party_abbreviation,party_score,entered_by_user,user_ip_address) VALUES ('$id','$party','$score','$name','$user_ip')";

$query=mysqli_query($connect,$insert);
if ($query) {
   header("location:lga.php?id=1");
}
return "yes";
}

}

store();

function strip($val){
    return html_entity_decode($val);
}