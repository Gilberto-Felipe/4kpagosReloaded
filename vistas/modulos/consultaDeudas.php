<h1>Consulta de pagos de un deudor por fecha</h1>

<div class="modal-dialog text-center">

    <div class="col-sm-8 main-section">

        <div class="modal-content">

            <form class="col-12" th:action="@{/login}" method="post">
                
                <label for="psw-repeat"><b style="color: white">Fecha inicial</b></label>
                <input type="date" placeholder="Fecha inicial" name="fechaI" required style="padding: 5px">
                
                <label for="psw-repeat"><b style="color: white">Fecha final</b></label>
                <input type="date" placeholder="Fecha final" name="fechaF" required style="padding: 5px">
                
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Buscar </button>

                <?php 
                
                    $consultarDeudas = new ControladorConsultarDeudas();
                    $consultarDeudas -> ctrConsultarDeuda();
                
                ?>


            </form>
        </div>
    </div>
</div>