<?php

$parola_censurata = $_POST["badWord"];
$testo_originale = $_POST["originalText"];

$testo_censurato = str_replace("hummus", "**", $testo_originale);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- cdnjs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.css"
    integrity="sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A=="
    crossorigin="anonymous" />

  <!-- titolo  -->
  <title>PHP Form</title>
</head>

<body>

  <div class="container my-4">
    <h2 class="mb-4">Confronto tra il testo originale e il nuovo</h2>
    <div class="row">

      <div class="col-6">
        <div class="card p-2 ">
          <h3 class="mb-3">Testo originale</h3>
          <p>
            <? echo $testo_originale ?>
          </p>
          <p>
            Lunghezza del testo:
            <? echo strlen($testo_originale) ?>
            parole.
          </p>
        </div>
      </div>

      <div class="col-6">
        <div class="card p-2 ">
          <h3 class="mb-3">Testo censurato</h3>
          <p>
            <? echo $testo_censurato ?>
          </p>
          <p>
            Lunghezza del testo:
            <? echo strlen($testo_censurato) ?>
            parole.
          </p>
        </div>
      </div>

    </div>
  </div>

</body>

</html>