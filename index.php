<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>
<?php 
$dailytask = [
    [
        "hari" => "Senin",
        "task" => "Beli Kopi",
        "task1" => "Beli Susu",
        "task2" => "Tidur",
    ],
    [
        "hari" => "Selasa",
        "task" => "Beli gula",
        "task1" => "Beli Sayur",
        "task2" => "Tidur"
    ],
    [
        "hari" => "Rabu",
        "task" => "Beli gula",
        "task1" => "Tidur",
        "task2" => "Tidur",
    ],
    [
        "hari" => "Kamis",
        "task" => "Beli gula",
        "task1" => "Ngentod",
        "task2" => "Ngentod",
    ]

    ];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ngentod gatau Pusing</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="CSS/style.css">

</head>
<body>

    <section class = "title">
        <h1>Daftar Hari</h1>
    </section>
    <section class = "container">
    <?php foreach ($dailytask as $data ) : ?> 
            <div class="tile"><a href="task.php?hari=<?=$data["hari"];?>&task=<?=$data["task"];?>&task1=<?=$data["task1"];?>&task2=<?=$data["task2"];?>"><?= $data["hari"];?></a></div>
    <?php endforeach; ?>
    </section>



</body>
</html>
<a href="logout.php">logout</a>