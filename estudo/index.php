<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    hoje é dia <?php echo date('d/m/Y'); ?>
    <form action="resposta.php" method="post">
        <label>Informe o primeiro número</label>
        <input type="text" name="valor1" >

        <label>Informe o segundo número</label>
        <input type="text" name="valor2" >
        <button type="submit">Enviar</button>
    </form>
        
    
</body>
</html>