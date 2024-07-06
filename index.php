<?php
require_once("action.php");
$poll=Q1();

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

    <div class="container">
        <h1>Polling Unit Election Results</h1>
        <div class="polling-unit">
            <h2>Polling Unit Id: 8 </h2>
            <table>
                <thead>
                    <tr>
                        
                        <th>Party</th>
                        <th>Party Score</th>
                       <th>Date Entered</th>
                    </tr>
                </thead>
                <tbody>
                   
                <?php foreach ($poll as $pol) { ?>
                    <tr>
                       
                        <td><?php echo $pol['party_abbreviation'] ?></td>
                        <td><?php echo $pol['party_score'] ?></td>
                        <td><?php echo $pol['date_entered'] ?></td>
                    </tr>

               <?php } ?>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
