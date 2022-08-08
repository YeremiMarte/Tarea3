<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <!-- Nombre de la pestaña -->
        <title>Log in</title>
        <!-- Icono de la pestaña -->
        <link rel="icon" href="C:\Users\user\Downloads\favicon.png" type="image/png"/>
    </head>

    <body>
        <!-- link se usa para unir otros documentos externos al programa -->
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       <!-- Form se usa para una seccion del documento donde se contienen los la interactividad con el usuario -->
       <!-- La class e id se utilizan como identificadores que se pueden usar en CSS y Javascript, con los getElementById y getElementByClass -->
        <form class="form" id="form">
            <h1 class="h3 mb-3 font-weight-bold" id="LogGym">Login Agenda</h1>
            <br> 
            <h1 class="h3 mb-3 font-weight-bold">Iniciar Sesión</h1>
            <!-- Placeholder menciona lo que contiene el recuadro, este caso, "Ingrese usuario" -->
            <input type="text" class="form-control" id="usuario" placeholder="Ingrese usuario" required>
            <!-- El elemento required se utiliza para que no se deje vacio el campo, que sea un campo requerido -->
            <input type="password" class="form-control" id="contraseña" placeholder="Ingrese contraseña" required>
            <button type="submit" class="btn btn-outline-success">Ingresar</button><br> <br>    
        
        </form>

        

      <!-- los src son fuentes de donde se pueden sacar los elementos que se sacaron en este caso de bootstrap -->
      <!-- Bootstrap es una biblioteca multiplataforma o conjunto de herramientas de código abierto para diseño de sitios y aplicaciones web -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="login1.js" type="text/javascript"
        src="agenda.php" type="php"></script>
    </body>
</html>