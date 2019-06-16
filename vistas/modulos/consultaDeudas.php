
<h1>Consulta de pagos de un deudor por fecha</h1>

<div class="modal-dialog text-center">

    <div class="col-sm-8 main-section">

        <div class="modal-content">

            <form class="col-12" method="post">
                
                <label for="psw-repeat"><b style="color: white">Fecha inicial</b></label>
                <input type="date" placeholder="Fecha inicial" name="fechaI" required style="padding: 5px">
                
                <label for="psw-repeat"><b style="color: white">Fecha final</b></label>
                <input type="date" placeholder="Fecha final" name="fechaF" required style="padding: 5px">
                
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Buscar </button>

                <?php $consulta = ControladorConsultarDeudas::ctrConsultarDeuda(); ?>
                
                
            </form>

        </div>

    </div>

</div>


<div class="box-body">

    <table class="table table-bordered table-striped dt-responsive tablas">

        <thead> 

            <tr>
                
                <th style="width: 10px">ID</th>
                <th>ID usuario</th>
                <th>Concept</th>
                <th>Fecha deuda</th>
                <th>Monto</th>
                <th>Estado</th>

            </tr>

        </thead>

        <tbody>

<?php       

    //$consulta = ControladorConsultarDeudas::ctrConsultarDeuda();

    foreach ($consulta as $key => $value) {

        echo '<tr>
            
                <td>'.$value["id"].'</td>
                <td>'.$value["id_usuario"].'</td>
                <td>'.$value["concepto"].'</td>
                <td>'.$value["monto"].'</td>
                <td>'.$value["fechaDeuda"].'</td>
                <td>'.$value["estado"].'</td>

            </tr>';

    }

?>

        </tbody>
        
    </table>

</div>
