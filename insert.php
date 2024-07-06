<?php
//require_once("in.php");

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
        <form action="in.php" method="POST">
            <label for="polling_unit_id">Polling Unit ID:</label>
            <input type="text" id="polling_unit_id" name="id" >

            <label for="party_abc_score"> Party Name:</label>
            <input type="text" id="party_abc_score" name="party" >

           
            <label for="party_pqr_score">Party Score:</label>
            <input type="text" id="score" name="score" >

            <label for="party_pqr_score">User Name:</label>
            <input type="text" id="party_pqr_score" name="username" >

            <input type="submit" name="store" value="Store Results">
        </form>
    </div>
</body>
</html>
