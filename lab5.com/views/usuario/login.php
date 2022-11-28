<style>
            body {
                background-color: #CDEDFD;
            }

            .navbar {
                background-color: #A9F8FB;
                color: black;
            }
            .btn {
                border: 2px solid #A9F8FB;
                background-color: #81F7E5;
                color: black;
                font-size: 16px;
                cursor: pointer;
            }
            .btn:hover{
                background-color: #B69DBB;
                color: white;
            }

    </style>
<div class="container-sm">
    <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <form action="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("validar")?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="txtUsuario" id="exampleInputText1" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="txtPassword" id="exampleInputText1" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text"></div>
                </div>
                <input type="hidden" value="<?php echo seg::getToken()?>" name="token">
                <button type="submit" class="btn">Entrar</button>
            </form>
        </div>
    </div>
</div>