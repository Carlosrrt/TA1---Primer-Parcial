<!DOCTYPE html>
<html>
<head>
    <title>ParcialCarlos</title>
</head>
<body>
    <form id="Informacion" action="./index.php" method="post">
        Nombre: <input type="text" name="nombre" id="nombre"> <br>
        Edad: <input type="text" name="edad" id="edad"> <br>
        Apellido: <input type="text" name="Apellido" id="Apellido"> <br>
        Telefono: <input type="text" name="telefono" id="telefono"> <br>
        Email:<input type="text" name="email" id="email"> <br>
        fecha de nacimiento: <input type="text" name="FeNa" id="FeNa"> <br>
        <button type="submit">Enviar</button>
        
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo $_POST['nombre']
            echo $_POST['Apellido']
            echo $_POST['edad']
            echo $_POST['telefono']
            echo $_POST['email']
            echo $_POST['telefono']
            echo $_POST['FeNa']
        }
    ?>
</html>
