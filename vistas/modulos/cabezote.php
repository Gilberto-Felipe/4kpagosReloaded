<header>

    <span class="hidden-xs">

        <?php 
        
            echo $_SESSION['nombre']; 
        
        ?>

    </span>

    <a href="salir" class="btn btn-default btn-flat">Salir</a>

    <h1>Bienvenido</h1>

    <?php 
    
        date_default_timezone_set('America/Mexico_City');
        $fecha = date('Y-m-d H:i:s');

        echo $fecha;

    ?>

</header>
