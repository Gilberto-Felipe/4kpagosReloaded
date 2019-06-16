<h1>Registro de deudores</h1>

<div class="modal-dialog text-center">

    <div class="col-sm-8 main-section">

        <div class="modal-content">

            <form class="col-12" method="post">
                
                <label><b style="color: white">Nombre</b></label>
                <input type="text" placeholder="Nombre" name="regNombre" required style="padding: 5px">
                
                <label><b style="color: white">Telefono</b></label>
                <input type="tel" placeholder="Teléfono" name="regTelefono" required style="padding: 5px"> <br><br>
                
                <label><b style="color: white">Email</b></label>
                <input type="text" placeholder="Email" name="regEmail" required style="padding: 5px">

                <label><b style="color: white">Contraseña</b></label>
                <input type="password" placeholder="Contraseña" name="regPassword" required style="padding: 5px">

                <label><b style="color: white">Perfil</b></label>
                <input type="number" min="1" max="2" placeholder="Perfil" name="regPerfil" required style="padding: 5px">
                
                <br><br>
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Agregar </button>

                <?php 

                    $crearUsuario = new ControladorUsuarios();
                    $crearUsuario -> ctrCrearUsuario();

                ?>

            </form>

        </div>

    </div>

</div>

