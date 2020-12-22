<h1>Esercizio n°1</h1>
<?php
  $partite = [
    'partita_uno' => [
      'squadra casa' => 'Napoli',
      'squadra fuori' => 'Juventus',
      'punti casa'=> 80,
      'punti fuori'=> 10
    ],
    'partita_due' => [
      'squadra casa' => 'Los Angeles Lakers',
      'squadra fuori' => 'Chicago Bulls',
      'punti casa' => 50,
      'punti fuori' => 60
    ],
    'partita_tre' => [
      'squadra casa' => 'Milwaukee Bucks',
      'squadra fuori' => 'Miami Heat',
      'punti casa' => 55,
      'punti fuori' => 55
    ],
    'partita_quattro' => [
      'squadra casa' => 'Toronto Raptors',
      'squadra fuori' => 'Philadelphia 76ers',
      'punti casa' => 30,
      'punti fuori' => 29
    ],
  ]
 ?>

 <h2>
   <?php
   // potevo usare anche il ciclo for, ma leggendo la documentazione questo mi sembrava più semplice
   // for ($i=0; $i < 5 ; $i++) {
     // code...
   //}
    foreach ($partite as $scontro) {
    echo $scontro['squadra casa'] . ' - ' . $scontro['squadra fuori'] . ' | ' . $scontro['punti casa'] . ' - ' . $scontro['punti fuori'] . '<br>';
   }
    ?>
 </h2>

 <h1>Esercizio n°2</h1>

 <?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    // ciclo per effettuare la validità dei dati inseriti

    if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.it') && is_numeric($age)) {
      echo '<h1>Accesso Eseguito</h1>';
    } else {
      echo '<h1>Utente non riconosciuto</h1>';
    };
  ?>
