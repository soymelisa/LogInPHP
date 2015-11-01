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
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="https://40.media.tumblr.com/46d7dcf17b10a4dc0d7364a0f97e0528/tumblr_mh7d5sTTYI1r6ej77o1_1280.jpg" class="img-responsive" alt="Avatar" /> 
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
          <input type="submit" class="btn">Únete :D</button>-->


    
        </div>
      </div>
     </div>
   </form>
  </div>
</div>
    
 <script src="js/index.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

    
  </body>
</html>
