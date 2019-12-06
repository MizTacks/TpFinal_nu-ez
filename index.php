<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/style.css">
<title>LogIn</title>
</head>
<body>
  <div  class ="cuerpoLog">
    <div class="editor">
      <div class="imgcontainer">
        <img src="https://cache.desktopnexus.com/thumbseg/2373/2373110-bigthumbnail.jpg" alt="Avatar" class="avatar">
      </div>
      <div class="container">
        <form method="POST" onsubmit="return checklogin();">
          <h3>Usuario</h3>
          <input type="text" placeholder="Ingresar Usuario" id="usuario" required>
          <h3>Contraseña</h3>
          <input type="text" placeholder="Ingresa tu Contraseña" id="password" required>
          <br>
          <br>
          <br>
          <button class="botonpanel" type="SUBMIT" style="margin-left: 17%;">Ingresa</button>
        </form>
        <button class="botonpanel"  style="margin-left: 14%; margin-top: 2%;" onclick="window.location.href='registro.php'">No tengo Cuenta</button>
      </div>
    </div>
  </div>
  <script src="js/jquery.js"></script>
  <script>
    function checklogin(){
      let user = $("#usuario").val();
      let pass = $("#password").val();
      
      let parametros = {
        "usuario": user,
        "password": pass
      };

      $.ajax({
        url : "PHP/checkLogin.php",
        type: "post",
        data: parametros,
        success: function (retorno){
          if(retorno == "OK"){
			alert('Bienvenido a AlienMind, ' + user + '!');
            location.href = "articulos.php";
          }
          else{
            alert("Datos erroneos.");
          }
        }
      });

      return false;
    }
  </script>
</body>
</html>