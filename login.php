<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <main>
        <div><h1>Login - Tienda SAAS</h1></div>
        <div>
            <form action="validar.php" method="POST">
                <label for="">Usuario<br>
                    <input type="text" name="inp_usuario" placeholder="Ingrese usuario">
                </label>
                <br><br>
                <label for="">Contraseña<br>
                    <input type="password" name="inp_contrasenia" placeholder="Ingrese contraseña">
                </label>
                <br><br>
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </main>
</body>

</html>