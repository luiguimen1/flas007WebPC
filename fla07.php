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
        <script src="JS/jquery.validate.js" type="text/javascript"></script>
        <script src="JS/additional-methods.js" type="text/javascript"></script>
        <script src="JS/localization/messages_es.js" type="text/javascript"></script>
        <script src="JS/LogFlas07.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="cajaNegra">
            <h1>Categorias</h1>
            <form id="regCat" name="regCat" autocomplete="off">
                <div class="labelT">Codigo</div>
                <div class="Input"><input type="number" value="" readonly="readonly" id="codCa" name="codCa" placeholder="Ingrese codigo" /></div>
                <div class="labelT">Nombre</div>
                <div class="Input"><input type="text" value="" id="nomCa"  name="nomCa" placeholder="Ingrese Nombre" /></div>
                <div class="labelT">Descripción</div>
                <div class="Input"><input type="text" value="" id="desCa"  name="desCa" placeholder="Ingrese Nombre" /></div>
                <div class="separador"></div>
                <div class="cajaBo">
                    <button onclick="crearCat()" type="submit">Agregar</button>
                </div>
                <div class="cajaBo">
                    <button id="limpiarForCat" type="button" onclick="canCat()" >Cancelar</button>
                </div>
                <div class="cajaBo">
                    <button type="button" onclick="mostarTabCat()">Listar</button>
                </div>
                <div class="cajaBo">
                    <button type="button" onclick="MostarBuscar()">Buscar</button>
                </div>
            </form>
            <div class="separador"></div>
            <fieldset id="tabCat" style="display: none;">
                <legend>Listado de Categorias</legend>
                <button onclick="OcultarTabCat()">Ocultar</button>
                <table style="width: 100%;" border="1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tbody id="curTabCat">
                    </tbody>
                </table>
            </fieldset>

            <div class="separador"></div>
            <fieldset style="display: none;" id="bloqBus">
                <legend>Bsucar por ID</legend>
                <label>INgrese cod</label>
                <input id="codBusCat" name="codBusCat" type="numer" value="" placeholder="Ingrese un códido"/>
                <button onclick="ReaLizaBusCatID()">buscar</button>
                <table style="width: 100%;" border="1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tbody id="curTabCatBus">
                    </tbody>
                </table>
            </fieldset>



        </div>
        <div class="cajaNegra">
            <h1>Productos</h1>
            <form id="regPro" name="regPro" autocomplete="off">
                <div class="labelT">Categoria</div>
                <div class="Input">
                    <select id="fkCat" name="fkCat">
                    </select>
                </div>
                <div class="labelT">Nombre</div>
                <div class="Input"><input type="text" value="" id="nomPr"  name="nomPr" placeholder="Ingrese Nombre" /></div>
                <div class="labelT">Valor</div>
                <div class="Input"><input type="text" value="" id="valPr"  name="valPr" placeholder="Ingrese VAlor" /></div>
                <div class="labelT">Confirme Valor</div>
                <div class="Input"><input type="text" value="" id="valPr1"  name="valPr1" placeholder="confirme el valor" /></div>
                <div class="labelT">Cantidad</div>
                <div class="Input"><input type="text" value="" id="canPr"  name="canPr" placeholder="Ingrese Nombre" /></div>
                <div class="labelT">Descripción</div>
                <div class="Input"><input type="text" value="" id="desPr"  name="desPr" placeholder="Ingrese Nombre" /></div>
                <div class="separador"></div>
                <div class="cajaBo">
                    <button onclick="crearPro()" type="submit">Agregar</button>
                </div>
                <div class="cajaBo">
                    <button id="limpiarForPro" type="reset">Cancelar</button>
                </div>
                <div class="cajaBo">
                    <button type="button" onclick="mostarTabPro()">Listar</button>
                </div>
                <div class="cajaBo">
                    <button type="button" onclick="MostarBuscarPro()">Buscar</button>
                </div>
            </form>

            <div class="separador"></div>
            <fieldset id="tabPro" style="display: none;">
                <legend>Listado de Categorias</legend>
                <button onclick="OcultarTabPro()">Ocultar</button>
                <table style="width: 100%;" border="1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Categoria</th>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody id="curTabPro">
                    </tbody>
                </table>
            </fieldset>
        </div>
    </body>
    <script>
        asigID();
    </script>
</html>
