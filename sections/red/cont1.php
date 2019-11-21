


<div class=" row p-5 m-0 w-100" >

  <div class="p-5">
    <h2 class="  p-3" style=" font-weight:800;line-height:3px;letter-spacing:2px;font-size:1.9rem; color:#CAD7D8;"><span class=" pb-4" style="    border-bottom: 2px solid #F78639;" >CON</span>OCE LA RED</h2>
    <p  class="pl-3 text-left py-5 m-0"style="line-height:28px;letter-spacing:0.5px;font-weight: 500; font-size:1em;color:#2C5A9E;">
      Conformamos una red mundial de más de <strong> 3500 Emprendedores Sociales</strong>, en más de 90 países, que <strong>implementan soluciones con potencial de cambio sistémico, dirigidas a resolver los problemas sociales más apremiantes.</strong> <br>
      <br>
      En Ashoka, creemos que la fuerza más poderosa para cambiar sistemas son buenas ideas en manos de emprendedores sociales. Y esa transformación se hace verdadera al soltar el control de esas ideas, permitiendo escalar el impacto social e inspirando a otros a generar el cambio, y no simplemente haciendo crecer una organización. Es por ello que, para nosotros, los Emprendedores Sociales de Ashoka encarnan la visión de un mundo de agentes de cambio cuyas ideas han impactado (e impactan) positivamente en innumerables personas alrededor del planeta.
    </p>
  </div>
</div>


<div class="album py-5 "  style="background-color:#ECF5F4">
  <div class="container-fluid py-3">
    <div class="row">
     <div class="col-6">
      <h2 class=" pb-3 px-4 " style=" font-weight: 800;  color:#003A5F;font-size:2.2em;">RED DE EMPRENDEDORES</h2>
     </div>
     <div class="col-3 mr-5" style="position:absolute;right:20px;">
       
          <div class="input-group md-form form-sm form-2 pl-0">
            <input  id="busqueda" style="border-radius:0;font-size:1.4em; background-color:rgba(255,255,255,0.8);"class="form-control my-0 py-1   " value="" type="text" placeholder=" " aria-label="Search">
            <div class="input-group-append">
              <button class="button" id="botonbusqueda"> <img src="front/img/social/lupa.png" class="w-100 " alt=""> </button>
              
             </div>
          </div>
        
      </div>
    </div>
  </div>



  <div class="container-fluid px-5 py-4">

    <div class="row   "  >
    <style>
#filtros:hover { 
  cursor: pointer;
}
</style>
      <p id="humanos" class="  mx-3 px-3 py-2 pl-0"style=" width: fit-content;font-weight:600;font-size:0.9em;border:1px solid #003A5F;color:#003A5F;">DERECHOS HUMANOS</p>
      <p id="economico" class=" mx-3 px-3 py-2"style=" width: fit-content;font-weight:600;font-size:0.9em;border:1px solid #003A5F;color:#003A5F;">DESARROLLO ECONOMICO</p>
      <p id="educacion" class=" mx-3 px-3 py-2"style=" width: fit-content;font-weight:600;font-size:0.9em;border:1px solid #003A5F;color:#003A5F;">EDUCACION</p>
      <p id="empleo" class=" mx-3 px-3 py-2"style=" width: fit-content;font-weight:600;font-size:0.9em;border:1px solid #003A5F;color:#003A5F;">EMPLEO</p>
      <p id="ambiente" class=" mx-3 px-3 py-2"style=" width: fit-content;font-weight:600;font-size:0.9em;border:1px solid #003A5F;color:#003A5F;">AMBIENTE</p>
      <p id="ciudadana" class=" mx-3 px-3 py-2"style=" width: fit-content;font-weight:600;font-size:0.9em;border:1px solid #003A5F;color:#003A5F;">PARTICIPACION CIUDADANA</p>
    </div>
    
  </div>


  <div class="container-fluid px-5" id="#busqueda1">
    <div class="row " >
   <?php


   for ($i=1; $i < 9 ; $i++) { ?>
<style>
  #emp1 { 
  -webkit-filter: grayscale(1);
}
#emp1:hover{ 
  -webkit-filter:unset;
}
</style>
     <div class="col-md-3" style="overflow:hidden">
       <div class="  mb-4  " style="height:221px;width:294px;">
         <img class=" h-100"  id="emp1" style=" border-radius: unset;width:100%;object-fit:cover;"  src="img_perfiles/<?php echo $perfil[$i]->getFoto() ?>"  >
         <div class="" style="position:absolute;top:170px;left:40px">
           <span  class="px-2 bold " style=" font-size:0.80em;background-color:white;"><?php echo $perfil[$i]->getCategoria() ?></span><br>
           <span class="mt-2  text-light bold " style=" font-size:0.80em; " ><?php echo $perfil[$i]->getSubcategoria() ?></span>
         </div>

       </div>
       <div class="card-body pt-0 px-0" style="width:294px;">
         <div class="container-fluid ">
           <div class="row ">
             <div class="col-1 pt-2 pl-0">
               <img src="front/img/icons/lineared.png" class="" alt="">
             </div>
             <div class="col-10 pl-0">
               <p class=" extrabold " style=" letter-spacing:0.5px;font-size:1.3rem;color:#003A5F">
               <?php echo $perfil[$i]->getNombre() ?> <br>
               <?php echo $perfil[$i]->getApellido() ?>
               </p>
             </div>
           </div>
         </div>
           <p class="card-text regular"  style=" font-weight:500;color:#003A5F;height:105px;width: fit-content;font-size:0.8rem;line-height:1rem;" >
           <?php echo $perfil[$i]->getResumen() ?>           </p>
           <div class="btn-group">

           

             <form method="get" action="index.php?dire=2&modo=4#iniciativas">
             <style>
                #bt1:focus {
                    border-bottom:1px solid;
                    box-shadow:0 0 0 0 transparent;
                }
                </style> 
                <input  class=" " type="hidden" name="id" value="<?php echo $perfil[$i]->getId() ?>">
                
                 <button id="bt1" type="submit"  class="btn btn-sm bold " style="padding-right:13px;letter-spacing:0.75px;color:#F78639; font-size:0.9em;">  >  Ver más</button>
             </form>
           </div>
         </div>
       </div>



  <?php    }



   ?>



      </div> <!--  FIN DEL ROW -->
        </div> <!--  FIN DEL CONTAINER DE LOS CUADROS DE PERSONAS -->



          <div class=" row pt-5 w-100  " >

            <div class="col-6 p-2 pl-5 m-0   w-50"     >


            <div class=" py-3  " style="border:1px solid #F78639;width:75%;">
              <a href="https://www.ashoka.org/es-AR/our-network/ashoka-fellows" class="" > <p class="text-center mb-1 "style="font-weight:600;font-size: 1rem;color:#F78639;"> CONOCE LA RED DE EMPRENDEDORES <br>
                SOCIALES DEL MUNDO</p>
              </a>
            </div>


         </div>
          <div class="col-6 p  ">
         <div class="  mt-5 col-md-8 pb-5 pt-5  pl-5 ml-5">
          <div class="ml-5  " >
            
           </div>
          </div>


            </div>
            </div>





        </div> <!--  FIN DEL CUADRO ENTERO AZUL -->
