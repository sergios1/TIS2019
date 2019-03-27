<?php include 'body.php';?>

 


<!-- Formulario REgistro-->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          
          <div class="spacing-1"></div>

          <!-- Estructura del formulario -->
          <fieldset>

            <legend class="center">Registro</legend>

            <!-- Caja de texto para Nombres -->
            <label class="sr-only" for="user">Nombres</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="user" placeholder="Nombre Completo">
            </div>


            <!-- Div espaciador -->
            <div class="spacing-2"></div>

           <!-- Caja de texto para Apellidos -->
            <label class="sr-only" for="apellidos">Apellidos</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
            </div>
              <!-- Div espaciador -->
            <div class="spacing-2"></div>

           <!-- Caja de texto para Direccion -->
            <label class="sr-only" for="direccion">Direccion</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
              <input type="text" class="form-control" id="direccion" placeholder="Direccion">
            </div>
              <!-- Div espaciador -->
            <div class="spacing-2"></div>

            <!-- Caja de texto para Telefono -->
            <label class="sr-only" for="telefono">Telefono</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-phone"></i></div>
              <input type="text" class="form-control" id="telefono" placeholder="Telefono">
            </div>
              <!-- Div espaciador -->
            <div class="spacing-2"></div>




              <!-- Caja de texto para Correo electronico -->
            <label class="sr-only" for="email">Correo Electronico</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
              <input type="text" class="form-control" id="email" placeholder="Correo Electronico">
            </div>
              <!-- Div espaciador -->
            <div class="spacing-2"></div>

            <!-- Caja de texto para la clave-->
            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu contraseña">
            </div>

            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <!-- Fin load -->

            <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <button type="button" class="btn btn-primary btn-block" name="button" id="login">Registrarse</button>
              </div>
            </div>

            <section class="text-accent center">
              <div class="spacing-2"></div>
              
              <p>
                ohhohhh<a href="registro.php"> hhh!</a>
              </p>
            </section>

          </fieldset>
        </div>
      </div>
    </div>

    <!-- / Final Formulario login -->
<?php include 'footer.php';?>