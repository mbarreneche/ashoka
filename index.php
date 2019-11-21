<?php
error_reporting(0); // Set anti explosion
  if (  $_GET['modo']=='1') {
    $img='front/img/bill.png';
  }elseif ($_GET['modo']>=2) {
    $img='';
   }else {
    $img='front/img/fond2.jpg';
};

require_once("clases/dbMysql.php");

 $db = new dbMysql;

$perfil = $db->perfilesRandom();  
 

   ?> 

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ashoka</title>
  <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!--Logito -->
    
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <!--CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="front/css/estilo.css">
    <link rel="stylesheet" href="front/css/efects2.css">
    <link rel="stylesheet" href="front/css/monserrat.css">

  </head>
  <body style="width:100%;" >
<?php
    if (  $_GET['modo']=='1') { ?>
      <div class="fondoBill " style="background-image: url('<?=$img?>');">
  <?php  }elseif ($_GET['modo']>=2 ) { ?>
    <div class="fondo " style="background-image: url('<?=$img?>');">
    <?php }else {   //ACA ES CUANDO VAL HOME CALCULO?>
    <div class="fondo w-100" style="height: 882px;background-image: url('<?=$img?>');">
      <div class="algo" style="height: 882px;background-color:rgba(3,60,117,0.74);">


<?php  } ?>



    <div class="container-fluid" >
      <div class="row">

        <?php if (!isset($_GET['modo'])) {  ?>
     <img src="front/img/map2.png" alt=""  class=""style="height: 750px;position:absolute;right:40px;">
    <?php     } ?>



        <div class="col-12 pt-5">
          <div class="  ">
            <ul class="list-unstyled list-inline social text-right  mr-2" style="margin: 0;  ">

<?php

if (   $_GET['modo']<2 or $_GET['modo']==1   ) {
?>
<li class="list-inline-item"><a  href="javascript:void();"> <img src="front/img/social/dona.png"  style="width:65px; " alt="dona "></a></li>
<li class="list-inline-item"><a href="javascript:void();"> <img src="front/img/social/chormevd.png"  style="width:28px; " alt="chorme"></a></li>
<li class="list-inline-item"><a href="javascript:void();"> <img src="front/img/social/twitvd.png"  style="width:28px; " alt="twitter"></a></li>
<li class="list-inline-item"><a href="javascript:void();"> <img src="front/img/social/facevd.png"  style="width:28px;"alt="Facebook"></a></li>
<li class="list-inline-item"><a href="javascript:void();"> <img src="front/img/social/instavd.png"  style="width:28px; " alt="Instagram"></a></li>
<?php
}else{?>
  <li class="list-inline-item"><a  href="javascript:void();"> <img src="front/img/social/donav2.png"  style="width:65px; " alt="dona "></a></li>
  <li class="list-inline-item"><a href="javascript:void();"> <img src="front/img/social/chormv2.png"  style="width:28px; " alt="chorme"></a></li>
  <li class="list-inline-item"><a href="javascript:void();"> <img src="front/img/social/TwitterV2.png"  style="width:28px; " alt="twitter"></a></li>
  <li class="list-inline-item"><a href="javascript:void();"> <img src="front/img/social/FacebookV2.png"  style="width:28px; "alt="Facebook"></a></li>
  <li class="list-inline-item"><a href="javascript:void();"> <img src="front/img/social/InstagramV.png"  style="width:28px; " alt="Instagram"></a></li>
      <?php
}?>



            </ul>
          </div>
        </div>
      </div>
    </div>



<?php
    include('sections/nav.php');

  if ($_GET['modo']=='1') {  // SECCION 01 SOBRE ASHOKA
      if ($_GET['dire']=='1') {
        include('sections/seccion1/cont1.php');
        include('sections/seccion1/cont2.php');
      }
    }elseif ($_GET['modo']=='2') { //EQUIPO

       if ($_GET['dire']=='1') {
         include('sections/team/cont1.php');
       }

       if ($_GET['dire']=='2') {
         include('sections/team/cont2.php');
       }

  }
  elseif ($_GET['modo']=='3') {   // JUVENTUD Y NIÑEZ
     include('sections/seccionNyJ/cont1.php');  // Esta parte ahora es sabana

     }

  elseif (($_GET['modo']=='4') || isset(($_GET["id"]))) { //EMPRENDEDORES
     if ($_GET['dire']=='1') {
        include('sections/red/cont1.php');  //
     }
     if (($_GET['dire']=='2') || isset(($_GET["id"]))) {
        include('sections/red/perfil.php');  //
     }
     if ($_GET['dire']=='3') {
        include('sections/red/seleccion.php');  //
     }
  }
  elseif ($_GET['modo']=='5') { //ECOSISTEMAS
    if ($_GET['dire']=='1') {
      include('sections/ecosistemas/cont1.php');  //
   }

}

elseif ($_GET['modo']=='6') { //COLABORA
  if ($_GET['dire']=='1') {
    include('sections/colabora/dona.php');  //
 }
 if ($_GET['dire']=='2') {
  include('sections/colabora/voluntario.php');  //
}

}




  else{  //    HOME
    include('sections/principal/cont1.php');
    include('sections/principal/cont2.php');
    include('sections/principal/cont3.php');
  }

    include('sections/footer.php');

?>


      <!-- SCRIPTS  -->
        <script src="front/js/javascript.js"  ></script>
        <script src="front/js/filtros.js"  ></script>
        <script src="front/js/fundaciones.js"  ></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
