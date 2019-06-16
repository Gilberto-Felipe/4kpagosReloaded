<h1>Registro de pagos</h1>

<div class="modal-dialog text-center">

    <div class="col-sm-8 main-section">

        <div class="modal-content">
        
            <form class="col-12" th:action="@{/login}" method="post">
                
                <label for="psw-repeat"><b style="color: white">Deudor</b></label>
                <input type="number" placeholder="ID del deudor" name="idDeudor" required style="padding: 5px">

                <label for="psw-repeat"><b style="color: white">Referencia de la deuda</b></label>
                <input type="number" placeholder="ID de la deuda" name="idDeuda" required style="padding: 5px">

                <label for="psw-repeat"><b style="color: white">Cantidad pagada</b></label>
                <input type="number" placeholder="Ingrese cantidad" name="cantidadPagada" required style="padding: 5px">

                
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Registrar Pago </button>

                <?php 
                
                    $registrarPago = new ControladorRegistroPagos();
                    $registrarPago -> ctrRegistrarPago();
                
                ?>


            </form>
            
        </div>

    </div>

</div>