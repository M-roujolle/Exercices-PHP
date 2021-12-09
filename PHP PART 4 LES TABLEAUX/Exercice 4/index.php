 <?php

    $mois = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mail', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    $replacements = array(7 => "août");
    $basket = array_replace($mois, $replacements);
    print_r($basket);


    // facon simplifié
    // $mois = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mail', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    // $mois[7] = "août";
    // print_r($mois);

    ?>



 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>

 </body>

 </html>