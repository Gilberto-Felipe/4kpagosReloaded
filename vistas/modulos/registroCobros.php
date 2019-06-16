<h1>Registro de cobros</h1>

<div class="modal-dialog text-center">

    <div class="col-sm-8 main-section">

        <div class="modal-content">

            <form class="col-12" method="post">
                
                <label><b style="color: white">ID Usuario</b></label>
                <input type="number" placeholder="ID del deudor" name="idUsuario" required style="padding: 5px">
                <br> <br>
                
                <label><b style="color: white">Concepto</b></label>
                <input type="text" placeholder="Concepto" name="concepto" required style="padding: 5px"> <br>
                
                <label><b style="color: white">Monto de la deuda</b></label>
                <input type="number" placeholder="Monto" name="monto" required style="padding: 5px">
                
                <br><br>
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Agregar </button>

                <?php 

                    $insertarCobro = new ControladorRegistroCobros();
                    $insertarCobro -> ctrInsertarCobro();

                ?>

            </form>

        </div>

    </div>

</div>

