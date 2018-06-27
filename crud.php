<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="CSS/MiEstilo.css" rel="stylesheet" type="text/css"/>
        <script src="JS/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="JS/logCrud.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Mi formulario</h1>
        <form id="ForReg" name="ForReg">
            <label class="ColorVerde">Nombre</label> <input type="text" value="" id="nombre" name="nombre" placeholder="Ingrese el nombre" /><br>
            <label class="ColorVerde">Cedula</label><input type="text" value="" id="cc" name="cc" placeholder="Ingrese el nombre" /><br>
            <label class="ColorVerde">Correo</label><input type="text" value="" id="email" name="email" placeholder="Ingrese el nombre" /><br>
            <button  type="button" onclick="registro()">Registro</button>
        </form>
    </body>
</html>
