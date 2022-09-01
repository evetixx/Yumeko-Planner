<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="CSS/style.css">

<?php 
$Senin=array('anjim','anjay','gurinjay');
$dailytask = [
    [
        "hari" => "Senin",
        "task1" => "Beli Kopi",
        "task2" => "Beli Susu"
    ],
    [
        "hari" => "Selasa",
        "task1" => "Beli gula",
        "task2" => "Beli Sayur",
    ]

    ];
$data=$_GET["hari"];
?>

</head>
<body>
        <section class="container">
            <div class="tile"><p style = "color:white"><?= $_GET["task"];?></div></p>
            <div class="tile"><p style = "color:white"><?= $_GET["task1"];?></div></p>
            <div class="tile"><p style = "color:white"><?= $_GET["task2"];?></div></p>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"><a href="index.php">Back</a></div>
        </section>
        <ul>
        </ul>
</body>
</html>