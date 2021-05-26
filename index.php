<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="email.php" method="POST" class="form-enviar">
        <h4>Mensaje</h4>
        <input type="text" placeholder="Tu Nombre" id="nombre" name="nombre" class="controls" required>
        <br>
        <br>
        <input type="text" placeholder="Tu Email" id="emailDestino" name="emailDestino" class="controls" required>
        <br>
        <br>
        <input type="text" placeholder="Asunto" id="asunto" name="asunto" class="controls" required>
        <br>
        <br>
        <textarea placeholder="Escriba su mensaje aqui ....." id="texto" name="texto" cols="45" rows="10" required></textarea>
        <br>
        <button type="submit" class="botons">Enviar Mensaje</button>
    </form>

</body>
</html>