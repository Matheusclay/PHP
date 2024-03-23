<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício </title>
</head>
<body>


    <form action="exer2resposta.php" method="post">
    <?php for ($i = 1; $i <= 7; $i++) {  ?>
        <label for="numero"> <?=  $i; ?>  </label>
        <input type="number" name="numero" id="numero">
        <br> <br>
    <?php } ?>

    
</body>
</html>