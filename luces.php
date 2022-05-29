<?php
    if (!isset( $_COOKIE['user'])){
        header('Location: ./index.php');
        die();
    } else {
        if (empty($_COOKIE['user'])){
        header('Location: ./index.php');
        die();
        }
    }
    
	include("conexion.php");
	include("variables.php"); 
?>
<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>PhpHome</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/general.css">
</head>
<body>
<div class="main container">
  <div class="widget">
    <div class="widget-container">
      <div class="tab-container">
        <div class="tab-list" role="tablist">
          <button role="tab" class="tab active" aria-controls="tab-content-01" id="tab-01" tabindex="0" aria-selected="true"><span class="icon material-icons">lightbulb</span></button>
          <div class="follow"></div>
        </div>
        <div class="tab-content-wrapper">
          <div class="tab-content tab-active" id="tab-content-01" hidden tabindex="0" role="tabpanel" aria-labelledby="tab-01">
          <button class="btn btn-icon-only" onClick="parent.location='general.php'"><span class="icon material-icons">home</span></button>
          <hr>
          <p>Luces disponibles...</p>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
            <?php
            $es0='0';
                if ($estado[0] == '1'||$es0=='1') {
                    echo "<button class='btn btn-primary' type='submit'name='escalera'>";
                    echo "<span class='icon material-icons'>toggle_on</span>";
                    echo "<span class='btn-label'>Escalera</span>";
                    echo "</button>";
                } elseif ($estado[0] == '0' || $es0=='0'){
                    echo "<button type='submit' class='btn' name='escalera'>";
                    echo "<span class='icon material-icons'>toggle_off</span>";
                    echo "<span class='btn-label'>Escalera</span>";
                    echo "</button>";
                }
            ?>
            <?php
            $es1 = '1';
                if ($estado[1] == '1'||$es1=='1') {
                    echo "<button class='btn btn-primary' type='submit'name='salon'>";
                    echo "<span class='icon material-icons'>toggle_on</span>";
                    echo "<span class='btn-label'>Salon</span>";
                    echo "</button>";
                } elseif ($estado[1] == '0'||$es1=='0') {
                    echo "<button class='btn' type='submit'name='salon'>";
                    echo "<span class='icon material-icons'>toggle_off</span>";
                    echo "<span class='btn-label'>Salon</span>";
                    echo "</button>";
                }
            ?>
            <?php
            $es2 = '0';
                if ($estado[2] == '1'||$es2=='1') {
                    echo "<button class='btn btn-primary' type='submit'name='pasillo'>";
                    echo "<span class='icon material-icons'>toggle_on</span>";
                    echo "<span class='btn-label'>Pasillo</span>";
                    echo "</button>";
                } elseif ($estado[2] == '0'||$es2=='0') {
                    echo "<button class='btn' type='submit'name='pasillo'>";
                    echo "<span class='icon material-icons'>toggle_off</span>";
                    echo "<span class='btn-label'>Pasillo</span>";
                    echo "</button>";
                }
            ?>
            <?php
            $es3 = '0';
                if ($estado[3] == '1'||$es3=='1') {
                    echo "<button class='btn btn-primary' type='submit'name='cocina'>";
                    echo "<span class='icon material-icons'>toggle_on</span>";
                    echo "<span class='btn-label'>Cocina</span>";
                    echo "</button>";
                } elseif ($estado[3] == '0'||$es3=='0') {
                    echo "<button class='btn' type='submit'name='cocina'>";
                    echo "<span class='icon material-icons'>toggle_off</span>";
                    echo "<span class='btn-label'>Cocina</span>";
                    echo "</button>";
                }
            ?>
            <?php
            $es4 = '1';
                if ($estado[4] == '1'||$es4=='1') {
                    echo "<button class='btn btn-primary' type='submit'name='garaje'>";
                    echo "<span class='icon material-icons'>toggle_on</span>";
                    echo "<span class='btn-label'>Garaje</span>";
                    echo "</button>";
                } elseif ($estado[4] == '0'||$es4=='0') {
                    echo "<button class='btn' type='submit'name='garaje'>";
                    echo "<span class='icon material-icons'>toggle_off</span>";
                    echo "<span class='btn-label'>Garaje</span>";
                    echo "</button>";
                }
            ?>
        </form>
          </div>

</div>
</div>
</div>
</div>
</div>
</div>
<script  src="js/general.js"></script>
</body>
</html>
