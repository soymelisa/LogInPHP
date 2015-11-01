<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Segundo Parcial WEB</title>

    
        <link rel="stylesheet" href="css/style.css">
        
  </head>





  <body>
    <!--Google Font - Work Sans-->
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!--Google Font - Work Sans
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

-->

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="https://s-media-cache-ak0.pinimg.com/736x/3d/dc/83/3ddc83348dba4a74e13dfe6b717c931d.jpg" class="img-responsive" alt="Avatar" /> 
    </button>
    <form action="respuesta.php" method="post"> 
    <div class="profile__form">
      <div class="profile__fields">
        
        <div class="field">
          <input name="CORREO" type="text" id="fieldUser" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Correo</label>
        </div>

        <div class="field">
          <input name="CONTRASENA" type="password" id="fieldPassword" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Contraseña</label>
        </div>

         <button class="profile__avatar" id="toggleProfile">
          <img src="http://i64.tinypic.com/24bvtqg.png" class="img-responsive" alt="Avatar" /> 
         </button>
        <!--<button class="profile__footer">
          <input type="submit" class="btn">Éxitoso</button>-->

        </div>
      </div>
     </div>
   </form>
  </div>
</div>
    
<!-- 
  <section class="hero" id="hero">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center section-padding">
                  <h1 class="animated fadeInDown">Página web<span>Proyecto2</span></h1>
                  
                </div>
              </div>
    </section>
-->

  <div class="col-md-4">
      <div class="light-box box-hover">
        <h2><i class="fa fa-paper-plane"></i><span>Contacto</span></h2>
          <p><a href="#">soymelisa@yahoo.com</a></p>
      </div>
  </div>




 <script src="js/index.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

    
  </body>
</html>

