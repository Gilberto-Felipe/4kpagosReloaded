<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="./vistas/img/user.png" th:src="@{/img/user.png}"/>
            </div>
            <form class="col-12"  method="post">
                <div id="prop">Ingresa al sistema</div><br>
                <div class="form-group" id="user-group">
                    <input type="tel" class="form-control" placeholder="Telefono" name="loginTelefono"/>
                </div>

                <div class="form-group" id="contrasena-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="loginPassword"/>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>

                <?php 

                    $login = new ControladorUsuarios();
                    $login -> ctrLoginUsuario();

                ?>

            </form>
            
        </div>
    </div>
</div>