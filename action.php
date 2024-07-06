<?php

require_once("config.php");

function Q1() {
    global $connect;
    $select="SELECT * FROM announced_pu_results WHERE polling_unit_uniqueid =8 ";

$query=mysqli_query($connect,$select);


return $query;

}



function Q2($id) {
    global $connect;
    $select = "
    SELECT 
      v.lga_id,
      c.party_abbreviation,
      SUM(c.party_score) AS total_party_score
    FROM 
      announced_pu_results c
    INNER JOIN 
      polling_unit v ON c.polling_unit_uniqueid = v.uniqueid
    WHERE 
      v.lga_id = ".$id."
    GROUP BY 
      v.lga_id, c.party_abbreviation;
  ";
  
  
  


 //$select2="SELECT * FROM polling_unit WHERE lga_id= 1";

 $query=mysqli_query($connect,$select);


return $query ;

}

function lga()  {
    global $connect;
    $select2="SELECT * FROM lga ";

 $query=mysqli_query($connect,$select2);

 $er=mysqli_fetch_array($query);
 return $query;
}