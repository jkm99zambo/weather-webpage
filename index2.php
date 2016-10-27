<!DOCTYPE html>

<?php
$file=file('sensors.html');
$time=date('H:i');
$date=date('d/m/Y');
$hour=date('H')+2;
$minutes=date('i');
$temperature_ext=$file[0];
$temperature_int=$file[2];
$pressure=$file[4];
$humidity_int=$file[6];
$humidity_ext=$file[8];
?>
<html>

<head>
  <title> Test </title>
<meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/style.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body class="ciao <?php/*

if($hour>=21 || $hour<7) {
  echo 'blue darken-4';
  $flag=true;
}
else {
  echo 'light-blue lighten-4';
  $flag=false;
}
*/?>">
<div id=risposta>
</div>
<h1 class="center-align <?php if($hour>=21 || $hour<7) echo 'light-blue-text lighten-4'; else echo 'blue-text darken-4';?>
  ">Stazione meteo</h1>

  <div id="dateTime" class="container">
        <h2 class="right-align">
          Dati aggiornati al
          <?php
          echo $date." ".$hour.":".$minutes;
          ?>
        </h2>
  </div>

  <!--  <?php
  /*      if($flag) {
  echo '<img src="http://www.gifanimate.com/data/media/344/luna-immagine-animata-0077.gif">';
}
else {
echo '<img src="http://www.gifanimategratis.eu/img/universo/sole/sole19.gif">';
}
*/?>-->

<div id="badgesContainer" class="container row red-text container-big">
  <div class="col l4 m6 s12">
    <div class="card red">
      <div class="card-content white-text">
        <div class="card-title center-align">Temperatura</div>
        <div class="valign-wrapper">
          <div class="valign">
            <p id="temperature_int">Interna:  <?php echo $temperature_int; ?>°C</p>
            <p id="temperature_ext">Esterna: <?php echo $temperature_ext; ?>°C</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col l4 m6 s12">
    <div class="card green">
      <div class="card-content white-text">
        <div class="card-title center-align">Pressione</div>
        <div class="valign-wrapper">
          <div class="valign">
            <p id= "pressure">Unica:  <?php echo $pressure.'Pa'; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col l4 m6 s12 offset-m3">
    <div class="card yellow black-text">
      <div class="card-content">
        <div class="card-title center-align">Umidità</div>
        <div class="valign-wrapper">
          <div class="valign">
            <p id="humidity_int">Interna: <?php echo $humidity_int.'%'; ?></p>
            <p id="humidity_ext">Esterna: <?php echo $humidity_ext.'%'; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
