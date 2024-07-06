<?php
require_once("action.php");
$id=$_REQUEST['id'];
$poll=Q2($id);


$rt=lga();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigerian Election Results</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
<?php require_once("nav.php") ?>

<div class="flex">

    <div class="container">
        <h1>Polling Unit Election Results</h1>
        <div class="polling-unit">
            <h2>LGA:<?php echo $id;?> </h2>
       <table>
                <thead>
                    <tr>
                        
                        
                    <th>Party</th>
                    <th>Party Score</th>
                    <th>lga Id</th>
                  

                      
                    </tr>
                </thead>
                <tbody>
                   
                <?php foreach ($poll as $pol) { ?>
                    <tr>
                       
                        <td><?php echo $pol['party_abbreviation'] ?></td>
                       
                        <td><?php echo $pol['total_party_score'] ?></td>

                        <td><?php echo $pol['lga_id'] ?></td>

                      
                    </tr> 
               <?php } ?>
                   
                   
                </tbody>
            </table> 
        </div>
    </div>




    <div class="container">
        <h1>LGA'S</h1>
        <div class="polling-unit">
            
            <table>
            <thead>
                <tr>
                    <th>LGA ID</th>
                    <th>LGA Name</th>
                   <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Replace this part with dynamic data -->
                <?php foreach ($rt as $lga) {?>
                    <tr>
                   
                    <td><?php echo $lga['lga_id']?></td>
                    <td><?php echo $lga['lga_name'] ?></td>
                    <td> <a href="lga.php?id=<?php echo $lga['lga_id']?>">Select</a> </td>
                </tr>
                <?php } ?>


              
               
            </tbody>
        </table>

        </div>
        
        </div>
    </body>
</html>
