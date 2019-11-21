<?php
if ($_GET['modo']>=2 ) {
  $cls='';
  $col='color:#043c5c;font-weight:800;font-size:0.8rem;';
  $log='front/img/ashoka_logoV2.png';

}else{
    $cls='text-light';
      $log='front/img/Recurso2.png';
      $col='font-weight:800;font-size:0.8rem;';
}

?>


    <div class="container-fluid pl-2 ml-0   ">
      <div class="row ml-0 ">

   <div class="col pl-5 " >
    <a href="index.php"> <img  class="img-responsive ml-5"src='<?=$log?>' style=" width: 85px; " > </a>
    </div>


  <div class="  col  mt-5 " >


      <nav class="navbar navbar-expand-lg navbar-light    "style=" position:relative; top:30px; "   >
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto fondoNav " style="   position: absolute;right:0;"  >
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle menu px-4  <?=$cls?>" style="<?=$col?>  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   ASHOKA
               </a>
               <div class="dropdown-menu  p-0" aria-labelledby="navbarDropdown">
                 <form action="index.php" method="get">
                   <input  class=" " type="hidden" value="1" name='dire'>   <input  class=" " type="hidden" value="1" name='modo'>
                 <button style="    font-weight: 500;font-size:0.7em; color:#003A5F;" class="dropdown-item  " type="submit"  href="index.php">SOBRE ASHOKA</button>
                 </form>

                 <a class="dropdown-item" href="#"  style="    font-weight: 500;font-size:0.7em; color:#003A5F;">HISTORIA</a>





                 <form action="index.php" method="get">
                   <input  class=" " type="hidden" value="1" name='dire'> <input  class=" " type="hidden" value="2" name='modo'>
                   <button class="dropdown-item" type="submit" style="    font-weight: 500;font-size:0.7em; color:#003A5F;"   href="index.php">EQUIPO</button>
                 </form>


                 <form action="index.php" method="get">
                   <input  class=" " type="hidden" value="2" name='dire'> <input  class=" " type="hidden" value="2" name='modo'>
                   <button class="dropdown-item" type="submit" style="    font-weight: 500;font-size:0.7em; color:#003A5F;"   href="index.php">DIRECTORIO</button>
                 </form>




                 <a class="dropdown-item" href="#" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">IMPACTO</a>
                          <a class="dropdown-item" href="#" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">ACADEMIA</a>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="    nav-link dropdown-toggle menu  <?=$cls?>" style="<?=$col?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                RED DE EMPRENDEDORES SOCIALES
               </a>

               <div class="dropdown-menu  p-0" aria-labelledby="navbarDropdown">


                 <form action="index.php#iniciativas" method="get">
                   <input  class=" " type="hidden" value="1" name='dire'> <input  class=" " type="hidden" value="4" name='modo'>
                   <button class="dropdown-item" type="submit"  style="    font-weight: 500;font-size:0.7em; color:#003A5F;" href="index.php">CONOCE LA RED</button>
                 </form>





            <!--    <a class="dropdown-item" href="#" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">EMPRENDEDORES SOCIALES</a> -->

                <form action="index.php#iniciativas" method="get">
                  <input  class=" " type="hidden" value="3" name='dire'> <input  class=" " type="hidden" value="4" name='modo'>
                  <button class="dropdown-item" type="submit"  style="    font-weight: 500;font-size:0.7em; color:#003A5F;" href="index.php">SELECCIÓN DE EMPRENDEDORES</button>
                </form>
                <a class="dropdown-item" href="#" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">NOMINAR A UN CANDIDATO</a>
                <a class="dropdown-item" href="#" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">COMITÉ NOMINADOR</a>


              </div>
             </li>
             <li class="nav-item dropdown">
               <a class="     nav-link dropdown-toggle menu <?=$cls?>" style="<?=$col?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 NIÑEZ Y JUVENTUD
               </a>

               <div class="dropdown-menu  p-0" aria-labelledby="navbarDropdown">

                 <form action="index.php#sobreNyJ" method="get">
                   <input  class=" " type="hidden" value="1" name='dire'> <input  class=" " type="hidden" value="3" name='modo'>
                   <button class="dropdown-item"  style="    font-weight: 500;font-size:0.7em; color:#003A5F;" type="submit"  href="index.php#sobreNyJ">SOBRE NIÑEZ Y JUVENTUD</button>
                 </form>


                 <form action="index.php#red" method="get">
                   <input  class=" " type="hidden" value="2" name='dire'> <input  class=" " type="hidden" value="3" name='modo'>
                   <button class="dropdown-item" type="submit" style="    font-weight: 500;font-size:0.7em; color:#003A5F;"   href="index.php#red">COMUNIDAD INSPIRADORA</button>
                 </form>


                 <form action="index.php#iniciativas" method="get">
                   <input  class=" " type="hidden" value="3" name='dire'> <input  class=" " type="hidden" value="3" name='modo'>
                   <button class="dropdown-item" type="submit"  style="    font-weight: 500;font-size:0.7em; color:#003A5F;" href="index.php#iniciativas">INICIATIVAS</button>
                 </form>

               </div>

             </li>





      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle menu px-4 <?=$cls?>" href="#"  style="<?=$col?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ECOSISTEMA
        </a>
        <div class="dropdown-menu  p-0" aria-labelledby="navbarDropdown">

          <form action="index.php#iniciativas" method="get">
            <input  class=" " type="hidden" value="1" name='dire'> <input  class=" " type="hidden" value="5" name='modo'>
            <button class="dropdown-item  medium" type="submit"  style="  font-size:0.7em; color:#003A5F;" href="index.php">RED DE APOYO(ASN)</button>
          </form>



          <a class="dropdown-item" href="index.php?dire=1&modo=5#empresas" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">RED DE EMPRESAS</a>
          <a class="dropdown-item" href="index.php?dire=1&modo=5#colaboradores" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">COLABORADORES</a>
        </div>
      </li>

       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle menu px-4 <?=$cls?>" style="<?=$col?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NOVEDADES
         </a>
         <div class="dropdown-menu  p-0" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="index.php#novedades" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">NOTICIAS</a>
           <a class="dropdown-item" href="#" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">OPORTUNIDADES</a>
           <a class="dropdown-item" href="#" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">PRENSA</a>
         </div>
       </li>

       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle menu px-4 <?=$cls?> " style="<?=$col?>"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            COLABORA
         </a>
         <div class="dropdown-menu  p-0" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="index.php?dire=1&modo=6" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">DONA</a>

           <a class="dropdown-item" href="index.php?dire=2&modo=6" style="    font-weight: 500;font-size:0.7em; color:#003A5F;">QUIERES SER VOLUNTARIO? </a>
         </div>
       </li>

    </ul>

  </div>
</nav>



</div>
</div></div>
