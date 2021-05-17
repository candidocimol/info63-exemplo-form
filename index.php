<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Criação de Sites</title>
        <link rel="stylesheet" href="./css/style.css" />
    </head>
    <body> 
        <main>
            <h1>Cadastro de veículos</h1>
            <div id="form">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
                method="POST" enctype="multipart/form-data">
                    <div class='input'>
                        <label>Marca</label>
                        <input type="text" name="marca" 
                        pattern="^[a-zA-Zëö]{2,}$" required/>
                    </div>
                    <div class='input'>
                        <label>Modelo</label>
                        <input type="text" name="modelo" 
                        pattern="^[a-xA-Z0-9]+$" required/>
                    </div>
                    <div class='input'>
                        <label>Ano</label>
                        <input type="text" name="ano" 
                        pattern="^(19[0-9]{2})|(200[0-9])|(201[0-9])|(202[0-1])$" required/>
                    </div>
                    <div class='input'>
                        <label>Placa</label>
                        <input type="text" name="placa" 
                        pattern="^([A-Z]{3}-[0-9]{4})|([A-Z0-9]{6})$" required/>
                    </div>
                    <div class='input'>
                        <label>Foto</label>
                        <input type="file" name="foto" required/>
                    </div>

                    <div class='input'>
                        <input type="submit" name="enviar" Value="Enviar" />
                    </div>

                </form>
            </div>
            <div id="show">
                   <?php
                       echo var_dump($_POST); 
                       echo var_dump($_FILES);
                   
                   ?>
            </div>
            <div id="list">

            </div>
        </main>

    </body>


</html>