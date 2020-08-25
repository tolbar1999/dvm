<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Eventos DVM</title>
  <link rel="icon" href="imagenes/logo.png">

  <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="css/mi-estilo.css">
</head>

<body>
    <div class="ui placeholder segment" style="height: 100vh; width: 100vw;">
      <form action="logica/validar.php" method="post">
          <div class="ui two column very relaxed stackable grid">
            <div class="column">
              <div class="ui form">
                <div class="field">
                  <label>Usuario</label>
                  <div class="ui left icon input">
                    <input type="text" placeholder="Usuario" name="usuario" required="required">
                    <i class="user icon"></i>
                  </div>
                </div>
                <div class="field">
                  <label>Contraseña</label>
                  <div class="ui left icon input">
                    <input type="password" placeholder="*****" name="clave" required="required">
                    <i class="lock icon"></i>
                  </div>
                </div>
                <button type="submit" class="ui blue submit button">Ingresar</button>
              </div>
            </div>
            <div class="middle aligned column">
              <div class="ui big button">
                <i class="signup icon"></i>
                Registrarse
              </div>
            </div>
          </div>
          <div class="ui vertical divider">
            O
          </div>
        </form>
    </div>
  

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/semantic.min.js"></script>
</body>
</html>