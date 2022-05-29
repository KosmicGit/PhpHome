<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>PhpHome</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/general.css">
  <script type="text/javascript">
            function popUp(URL) {
            window.open(URL, 'IPS', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=525,height=625,left = 390,top = 50');
            }
        </script>
</head>
<body>
<div class="main container">
  <div class="widget">
    <div class="widget-container">
      <div class="tab-container">
        <div class="tab-list" role="tablist">
          <button role="tab" class="tab active" aria-controls="tab-content-01" id="tab-01" tabindex="0" aria-selected="true"><span class="icon material-icons">manage_accounts</span></button>
          <div class="follow"></div>
        </div>
        <div class="tab-content-wrapper">
          <div class="tab-content tab-active" id="tab-content-01" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-01">
          <hr>
          <fieldset>
          <legend>Añadir Usuario</legend>
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <p>Introduzca los datos de usuario</p>
            <input type="text" name="name" placeholder="Usuario" required>
            <input type="password" name="pass" placeholder="Contraseña" required>
            <input type="email" name="mail" placeholder="Correo" required>
            <input type="submit" value="Introducir" name="introducir">
            <?php
                if (isset($_REQUEST['introducir'])) {
                    $nombre = $_REQUEST['name'];
                    $pass = $_REQUEST['pass'];
                    $correo = $_REQUEST['mail'];
                    
                    $insertar = "insert into usuarios(usuario,pass,alias,email,otros) values ('$nombre',SHA2('$pass',512),'$nombre','$correo','introducido por AddUserTool')";
                      mysqli_query($mysqli, $insertar);
                      echo "<script languaje='javascript' type='text/javascript'>window.alert('Usuario añadido');</script>";
                      sleep(3);
                      echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
            }
            ?>
          </fieldset>
          <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">Proyecto realizado por Esteban Vicario y José García</p>
            <p style="color : #737373; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;">2021 ©</p>
        </div>

</div>
</div>
</div>
</div>
</div>
</div>
<script  src="../js/general.js"></script>
</body>
</html>
