<?php
require_once("in.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Election Results</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    
<?php require_once("nav.php") ?>

    <div class="container">
        <h1>Store Election Results for New Polling Unit</h1>
        <form method="POST">
            <label >Polling Unit ID:</label>
            <input type="text"  name="id" >
            <p class="err"><?php echo $error['id']?></p>

            <label for="party_abc_score"> Party Name:</label>
            <input type="text" name="party" >
            <p class="err"><?php echo  $error['party']?></p>

           
            <label for="party_pqr_score">Party Score:</label>
            <input type="text" id="score" name="score" >
            <p class="err"><?php echo $error['score']?></p>

            <label for="party_pqr_score">User Name:</label>
            <input type="text" id="party_pqr_score" name="username" >

   <p class="err"><?php echo $error['name']?></p>

           <button type="submit" name="store">Post</button>

        </form>
    </div>
</body>
</html>
