<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
    <header>
    <div class="container">
      <figure class="logo pull-left">
        <img src="../img/mevisa.png" alt="MEVISA" class="img-responsive">
      </figure>
      
      <nav class="pull-right">
        <ul>
          <a class="selector" href="../index.php">INICIO</a>
          <a class="selector" href="nosotros.php">NOSOTROS</a>
          <a class="selector" href="servicios.php">SERVICIOS</a>
          <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
      </nav>

       <div class="op-menu">
        <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
      </div>
    </div>
  </header>

  <div class="bannerc">
    <div class="fondoc">
      <p>Contacto</p>
    </div>
  </div>

  <div class="container" style="padding: 5% 0%;">
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-3" >
            <h4 class="text-center"><i class="fa fa-street-view" aria-hidden="true"></i> DIRECCION</h4>
            <hr class="hr-c">
            <p class="text-center txt-c" style="height: 90px;">C. Club Campestre #365 M20 L60 por C. San Marino y C. Circuito Sur, Col. Campanario. Tuxtla Gutierrez, Chiapas. C.P. 29057</p>
        </div>
        <div class="col-sm-6 col-md-3" >
            <h4 class="text-center"><i class="fa fa-clock-o" aria-hidden="true"></i> HORARIO</h4>
            <hr class="hr-c">
            <p class="text-center txt-c" style="height: 90px;">Lunes a Viernes de 9 am a 6 pm</p>
        </div>
        <div class="col-sm-6 col-md-3" >
            <h4 class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i> CORREO</h4>
            <hr class="hr-c">
            <p class="text-center txt-c" style="height: 90px;">info@transportemevisa.com</p>
        </div>
        <div class="col-sm-6 col-md-3" >
            <h4 class="text-center"><i class="fa fa-phone" aria-hidden="true"></i> TELEFONO</h4>
            <hr class="hr-c">
            <p class="text-center txt-c" style="height: 90px;">PENDIENTE</p>
        </div>
        
    </div>
</div>

<div class="sectionc">
    <div class="container delete-br">
        <h1 class="text-center tit-f" style="color: #fff;">Formulario de contacto</h1> <br><br>
            <form action="" method="post" onSubmit="return false">
                <input id="txtNOMBRE" type="text" name="subject" class="form-control" placeholder=" Escribe tu nombre completo" />
            <input type="text" id="txtCORREO" name="email" class="form-control" placeholder=" Escribe tu correo electrónico" />
            <input type="text" id="txtTELEFONO" name="subject" class="form-control" placeholder=" Escribe tu número teléfonico" />
            <textarea id="txtCOMENTARIO" name="message" id="message" cols="30" rows="10" class="form-control" placeholder=" Escribe tu comentario"></textarea>

            <div id="_AJAX_PRE_"></div>
            <center><button type="submit" name="send_message" class="btn btn-primary btn-large btn-half btn-send" onclick="sendCORREO()"><i class="fa fa-send fa-2x"></i></button></center>
        </form>
    </div>
</div>
<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d567.9068733906461!2d-93.18403513590891!3d16.75642304834371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecdbd0c1bad1f3%3A0xa8c626f6cc03d8ec!2sCamino+Al+Club+Campestre+365%2C+El+Campanario%2C+29057+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1508967674880" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/requerido.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>