<?php

include("log.php")

?>

<link rel="stylesheet"  href="./assets/css/style.css">

<body style="background: url('./assets/img/fondocoffe.jpg') no-repeat center center fixed; background-size: cover;">
<form action="menu.php" method="post" >
    <div class="logo">
        <img class="Logo1" src="./assets/img/logo1.png" alt="" width="140px" height="140px">
        <h3>Lorem ipsum</h3>
    </div>
    <div class="container"> 
        <div class="Img">
            <h1 class="title">Sistema de Gestion y Control de ventas</h1>
            <img class="Fondo" src="./assets/img/924514.png" alt="" width="340px" height="340px">
        </div>
        <!-- Formulario -->
        <div class="Form">
            <h1 class="title">Iniciar Sesion</h1>
            <!-- inputs -->
            <div class="inputs">
            <!-- User-->
                <div class="mb-3">
                    <label for="" class="form-label">Usuario</label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder="Ingrese su Usuario"
                    />
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="" class="form-label">Contraseña</label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder="Ingrese su Contraseña"
                    />
                </div>
            
                <!-- CheckBox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" />
                    <label class="form-check-label" for=""> Recordar Contraseña? </label>
                </div>
                <!-- Buttom-->
                <div class="Buttom">
                <!-- Formulario con botón para redirigir -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-outline-primary">Iniciar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>