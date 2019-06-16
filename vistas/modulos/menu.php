
<?php 

    if ($_SESSION['id_perfil'] == 1){ ?>

            <div class="modal-dialog text-center">
                <div class="col-sm-8 main-section">
                    <div class="modal-content">
                    
                        <form class="col-12" method="post">

                            <a href="registroUsuarios" class="btn btn-primary" id="btn">Agregar Usuarios</a>
                            <a href="registroCobros" class="btn btn-primary" id="btn">Agregar Cobro</a>
                            <a href="registroPagos" class="btn btn-primary" id="btn">Agregar Pago</a>
                            <a href="consultaDeudas" class="btn btn-primary" id="btn">Consultar Deuda</a>
                            <a href="consultaTiempo" class="btn btn-primary" id="btn">Consultar Pagos</a>

                        </form>

                    </div>
                </div>
            </div>

<?php

    } else { ?>
        
    <div class="modal-dialog text-center">

        <div class="col-sm-8 main-section">

            <div class="modal-content">

                <form class="col-12" th:action="@{/login}" method="get">

                    <a href="#" class="btn btn-primary" id="btn">Consultar Pagos</a>

                    <a href="#" class="btn btn-primary" id="btn">Consultar Deuda</a> 

                    <a href="#" class="btn btn-primary" id="btn">Consultar Cobros</a> 

                </form>
            </div>
        </div>
    </div>

<?php } ?>    


