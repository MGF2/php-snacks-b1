<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
 $partite = [
   [
     'casa' => 'Squadra A',
     'ospite' => 'Squadra B',
     'puntiCasa'=> 62,
     'puntiOspite'=> 59
   ],
   [
     'casa' => 'Squadra C',
     'ospite' => 'Squadra D',
     'puntiCasa'=> 14,
     'puntiOspite'=> 56
   ],
   [
     'casa' => 'Squadra E',
     'ospite' => 'Squadra F',
     'puntiCasa'=> 22,
     'puntiOspite'=> 98
   ],
   [
     'casa' => 'Squadra G',
     'ospite' => 'Squadra H',
     'puntiCasa'=> 33,
     'puntiOspite'=> 25
   ]
 ];

 // var_dump($partite);
 //
 // for ($i = 0; $i < count($partite); $i++) {
 //   echo $partite[$i]['casa'];
 // }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Partite di basket</title>
   </head>
   <body>
     <ul>
       <?php for ($i = 0; $i < count($partite); $i++) { ?>
       <li>
         <h2>Partita:</h2>
         <h1>
           <?php echo $partite[$i]['casa'];?> -
           <?php echo $partite[$i]['ospite'];?> |
           <?php echo $partite[$i]['puntiCasa'];?> -
           <?php echo $partite[$i]['puntiOspite'];?>
         </h1>
       </li>
       <?php  } ?>
     </ul>
   </body>
 </html>
