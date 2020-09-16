<!-- Passare come parametri GET name, mail ed age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
 $name = $_GET['name'];
 $mail = $_GET['mail'];
 $age = $_GET['age'];

 //RIDOTTO
 if ( empty($name) || empty($mail) || empty($age) ) {
   $text = 'Accesso negato';
 } else {
   if ( (strlen($name) > 3) && ( (strpos($mail, '@') !== false) && (strpos($mail, '.') !== false) ) && (intval($age) == true) ){
     $text = 'Accesso consentito';
   } else {
     $text = 'Accesso negato';
   }
 }

//COSTRUZIONE
// if ( empty($name) || empty($mail) || empty($age) ) {
//   $text = 'Accesso negato. Compila tutti i campi';  //Compila tutti i campi
// } else {
//   if (strlen($name) <= 3) {
//     $text = 'Accesso negato. Nome troppo corto';    //Controllo lunghezza
//   } else {
//     if ( (strpos($mail, '@') === false) && (strpos($mail, '.') === false) ){
//       $text = 'Accesso negato. Controllo mail';     //Contrllo @ e .
//     } else {
//       if (intval($age) == true) {                   //Controllo intero
//         $text = 'Accesso consentito.';
//       } else {
//         $text = 'Accesso negato.';
//       }
//     }
//   }
// }


//PROVA IF UNICO
// if ( ( ( empty($name) || empty($mail) || empty($age) ) == false ) && ( (strlen($name) > 3) && ( (strpos($mail, '@') !== false) && (strpos($mail, '.') !== false) ) && (intval($age) == true) ) ){
//     $text = 'Accesso consentito';
// } else {
//   $text = 'Accesso negato';
// }



echo $text;
?>
