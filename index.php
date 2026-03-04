<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar alumno</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <form method="post" >
        <h2>Registrar alumno</h2>
        <p>¡Bienvenido! </p>
        <div class=input-wrapper">
            <label for="nombre">Nombre:</label>   
            <input type="text" name="name" placeholder="Nombre"> 
        </div>
        <div class=input-wrapper">
            <label for="apellidos">Apellidos:</label><br>
            <input type="text" name="apellido" placeholder="Apellidos">
        </div>
        <div class=input-wrapper">
            <label for="edad">Edad:</label><br>
            <input type="int" name="edad" placeholder="Edad">
        </div>
        <div class=input-wrapper">
            <label for="correo">Correo:</label><br>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class=input-wrapper">
            <label for="contraseña">Contraseña:</label><br>
             <input type="password" name="password" placeholder="Contraseña">
        </div>
        <input class="btn" type="submit" name="register" value="Enviar">    
    </form>
</body>
</html>