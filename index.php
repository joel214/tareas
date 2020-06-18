
<?php
$elementos = ['H','He','Li','Be','B','C','N','O','F','Ne','Na','Mg','Al','Si','P','S','Cl','Ar','K','Ca','Sc','Ti','V','Cr','Mn','Fe','Co',
'Ni','Cu','Zn','Ga','Ge','As','Se','Br','Kr','Rb','Sr','Y','Zr','Nb','Mo','Tc','Ru','Rh','Pd','Ag','Cd','In','Sn','Sb','Te','I','Xe',
'Cs','Ba','La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu','Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg','Tl',
'Pb','Bi','Po','At','Rn','Fr','Ra','Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr','Rf','Db','Sg','Bh','Hs',
'Mt','Ds','Rg','Cn','Nh','Fl','Mc','Lv','Ts','Og'];

$metales_alcalinos = ['Li','Na','K','Rb','Cs','Fr','Uue'];

$alcalinoterreos = ['Be','Mg','Ca','Sr','Ba','Ra'];

$otros_metales = ['Al','Ga','In','Sn','Pb','Bi','Tl','H','C','N','O','P','S','Se'];

$metales_transacion = ['Sc','Ti','V','Cr','Mn','Fe','Co','Ni','Cu','Zn','Y','Zr','Nb','Mo','Tc','Ru','Rh','Pd','Ag','Cd',
'Lu','Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg','Lr','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn',''];

$lantanidos = ['La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'];

$actinidos = ['Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'];

$metaloides = ['B','Si','Ge','As','Sb','Te','Po','At'];

$no_metales  = ['H','C','N','O','P','S','Se'];

$halogenos = ['F','Cl','Br','I','Ts'];

$gases_nobles = ['He','Ne','Ar','Kr','Xe','Rn','Og'];

$desconocidos = ['Nh','Fl','Mc','Lv'];

$a = 0;

 $contener = in_array($elementos[$a] ,$metales_alcalinos);

$contar = 0;
$s= '';
$ven = false;
$go = false;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="assets\css\stiley.css">

</head>
<body>

<div class="row center-text">
<div class="col-md-15">

<?php 
 //var_dump($contener);

foreach($elementos as $number): 


  $contar++ ;
 

    ?>

 
<?php if(in_array($elementos[$a] ,$metales_alcalinos)):?>

 <div class="columnas1"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

  <?php if(in_array($elementos[$a] ,$alcalinoterreos )):?>

<div class="columnas2"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

  <?php if(in_array($elementos[$a] ,$otros_metales )):?>

<div class="columnas3"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

  <?php if(in_array($elementos[$a] ,$metales_transacion)):?>

<div class="columnas4"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

  <?php if(in_array($elementos[$a] ,$lantanidos )):?>

   
<?php $ven = true; ?> 


<?php else: ?>

  <?php if(in_array($elementos[$a] ,$actinidos )):?>

    <?php $ven = false; 
    
    $go = true;
    ?> 


<?php else: ?>

  <?php if(in_array($elementos[$a] ,$metaloides )):?>

    <?php $ven = false; 
    
    $go = false;
    ?> 

<div class="columnas7"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

  <?php if(in_array($elementos[$a] ,$no_metales )):?>

<div class="columnas8"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

  <?php if(in_array($elementos[$a] ,$halogenos  )):?>

<div class="columnas9"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

  <?php if(in_array($elementos[$a] ,$gases_nobles )):?>

<div class="columnas10"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

  <?php if(in_array($elementos[$a] ,$desconocidos  )):?>

<div class="columnas11"> <?php echo "<span> {$number} </span>" ?> </div>

<?php else: ?>

   <div class="columnas"> <?php echo "<span> {$number} </span>" ?> </div>
   <?php endif?>
   <?php endif?>
   <?php endif?>
   <?php endif?>
   <?php endif?>
   <?php endif?>
   <?php endif?>
   <?php endif?>
   <?php endif?>

  <?php endif?>
<?php endif?>



<?php $a = $a + 1;
 ?>

<?php if($contar == 1):
    

  for ($f = 1; $f <= 15; $f++) {  ?>


    <div class="vaciar"> <?php echo "<span>  </span>" ?> </div>


    <?php 
  }

endif;

if($contar == 4):
    

    for ($f = 1; $f <= 9; $f++) {  ?>
      
  
      <div class="vaciar"> <?php echo "<span>  </span>" ?> </div>
  
  
      <?php 
    }
  
  endif;

  if($contar == 12):
    

    for ($f = 1; $f <= 9; $f++) {  ?>

      <div class="vaciar"> <?php echo "<span>  </span>" ?> </div>
  
      <?php 
    }
  
  endif;

 
  ?>


<?php endforeach ?>
<div></div>
<br>
<br>
<div></div>


<?php foreach($lantanidos as $number): ?>

   <div class="columnas5"> <?php echo "<span> {$number} </span>" ?> </div>



<?php endforeach ?>
<div></div>

<?php foreach($actinidos as $number): ?>

<div class="columnas6"> <?php echo "<span> {$number} </span>" ?> </div>



<?php endforeach ?>
<div></div>
</div>
</div>
<br>
<br>


<div class="columnas1"> alcalinos</div>
<div class="columnas2"> alcalinoterreos</div>
<div class="columnas3"> OtrosMetales</div>
<div class="columnas4"> M.transacion</div>
<div class="columnas5"> lantanidos</div>
<div class="columnas6"> actinidos</div>
<div></div>
<div class="columnas7"> metaloides</div>
<div class="columnas8"> no metales</div>
<div class="columnas9"> halogenos</div>
<div class="columnas10">GasesNobles</div>
<div class="columnas11">desconocido</div>




    
</body>
</html>