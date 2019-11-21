<?php
require_once("clases/dbMysql.php");
if (isset($_GET[id])) {
$db = new dbMysql;


  $perfil = $db->buscarId($_GET[id]); 
}



?>


<div class="container-fluid pt-5 px-0" >
  <div class="row m-0 "  style="height:500px;display:flex;flex-orientation:row;width:100%;">
    <div class="" style="margin-left:30px;width:45%;height:500px;">
    <img src="img_perfiles/<?php echo $perfil->getFoto() ?>"  style="width:100%;height:100%;object-fit:contain;" alt="<?php echo $perfil->getNombre()." ".$perfil->getApellido ?>">
    </div>
    
    
    <div class="col-6 pt-5  pl-5" style="height:500px;">
      <p class="h1 mt-5 bold text-light" style="font-size:2.5rem;">
        <?php echo mb_strtoupper($perfil->getNombre() . " " .  $perfil->getApellido()); ?>
      </p>
      <p class=" medium text-light" style="margin-top:20px;height:130px;line-height: 1.9rem;font-size:1.1rem;">
        <?php echo $perfil->getBajada(); ?>
      </p>
      

     <p class="mt-3 px-4 py-3 lead regular text-light" style="font-size:1.2rem;  width: fit-content;border:0.5px solid white"><?php echo mb_strtoupper($perfil->getCategoria())?></p>
     <p class="pt-1 pb-5 text-light semibold"style="font-size:1.2rem;">#<?php $stripped = str_replace(' ', '', $perfil->getSubcategoria());echo mb_strtoupper($stripped) ?></p>


     </div>
     

  </div>
</div>

<div class="container-fluid   pt-5 pl-4  " style="background-color:white;">
  <div class="row ml-5" style="margin-top:35px;width:95%;margin-right:5px;">
    <p class="bold" style="color:#2c5a9e;font-size:1.2rem;line-height:2rem;">
       <?php echo mb_strtoupper($perfil->getResumen()) ?>
     </p>
  </div>
  <div class="row pl-5 " style="padding-top:10px;">
   <div class="" style="margin-left:16px;">
     <p class="medium  lead" style=" font-size:1rem;line-height:1.5rem;text-aling:left,letter-spacing:1px;font-weight:500;">
       
        <?php echo $perfil->getHistoria();?>
       
   </div>
  </div>

<div class="abajo" style="margin-left:5%;margin-top:40px;display:flex;flex-direction:row;width:100%;height:250px;justify-content:space-around;">
   <div class=p1 style="display:flex;align-items:center;flex-direction:row;padding-top:10px;width:45%">
     <p style="font-size:1.2rem;font-weight:700;color:black;margin-right:10px;border-right:black 1px solid;padding-right:20px;padding-top:40px;padding-bottom:40px;">ACTUALIDAD</p>
     <p style="padding-left:10px;text-align:left;width:70%;font-size:1.1rem;font-weight:700;color:black;"> <?php echo $perfil->getRol()?> </p>
   </div>
   <div class=p2 style="display:flex;align-items:center;flex-direction:row;padding-top:10px;width:45%">
     <p style="MARGIN-left:10px;font-size:1.2rem;font-weight:700;color:black;margin-right:10px;border-right:black 1px solid;padding-right:20px;padding-top:40px;padding-bottom:40px;">HISTORIA </p>
     <p style="padding-left:10px;text-align:left;width:70%;font-size:1.1rem;font-weight:700;color:black;"> <?php echo $perfil->getOrg_fund()?> </p>
   </div>
   </div>
</div>
