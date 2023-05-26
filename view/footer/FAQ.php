<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>HV - FAQ</title>
    <link rel="stylesheet" href="../../css/header.css"/>
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="../../scripts/form.js"></script>
    <script src="../../scripts/customSubmit.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>

<body>

<?php include("../header/header.php") ?> 
    <main>
  <h1>FAQ</h1>
  <details>
  <summary>Mon capteur ne fonctionne pas, que faire ?</summary>
  <div>
Faut le jeter  </div>
</details>
</div>
        <h2>D'autres questions ? Cliquez <a href="contact.php">ici</a> </h2>

    </main>
    <?php include("../footer/footer.php"); ?>
</body>
</html>
