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
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">

                <tr>
                    <th scope="col">Nombre</th>
                    <td><?php echo $resultados["nombre"] ?></td>
                </tr>


                <tr>
                    <th scope="col">Correo</th>
                    <td><?php echo $resultados["correo"] ?></td>
                </tr>
                <tr>
                    <th scope="col">Comentario</th>
                    <td><?php echo $resultados["comentario"] ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>