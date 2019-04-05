<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5 p-3 border border-info">

    <form method="post" class="w-75 p-4 my-4 border border-dark mx-auto rounded">
      <h3 class="text-center text-info">POST form</h3>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>

      <input type="submit" value="Submit me" class="btn btn-info">

    </form>

    <?php
    if (!empty($_POST)) {
      if ($_POST['email'] === 'zilvinas.vidmantas.93@gmail.com' && $_POST['password'] === 'admin') {
        echo '<h4 class="text-success">Sveikinus prisijungus</h4>';
      } else {
        echo '<h4 class="text-danger">Neteisingas prisijungimas</h4>';
      }
    }
    ?>


    <form method="get" class="w-75 p-4 my-4 border border-dark mx-auto rounded">

      <h3 class="text-center text-info">GET form</h3>

      <div class="form-group">
        <label for="age">Please write your age</label>
        <input type="text" class="form-control" id="age" name="age">
      </div>

      <input type="submit" value="Verify" class="btn btn-info">
      <input type="hidden" name="ageValidatior">
    </form>


    <?php
    if (!empty($_GET) && isset($_GET['ageValidator'])) {

      $age = isNatural($_GET['age']) ?? false;
      if ($age !== false) {
        if (gettype($age) === 'string') echo '<h4>' . $age . '</h4>';
        elseif ($age < 4) echo '<h4>Lažinuos, kad neišsedėsi vietoje nejudėdamas 5 minutes</h4>';
        elseif ($age < 10) echo '<h4>Nori zefyro?</h4>';
        elseif ($age < 15) echo '<h4>Tipo vaidinsi paauglį?</h4>';
        elseif ($age < 25) echo '<h4>Realiai nemeluok sau, esi paauglys</h4>';
        elseif ($age < 40) echo '<h4>Siūlyčiau greitu atveju susirast paną</h4>';
        elseif ($age < 55) echo '<h4>Gatvėj būtum ponas</h4>';
        elseif ($age < 65) echo '<h4>Užduodi? Pensiją?</h4>';
        elseif ($age < 85) echo '<h4>Dabar gali daryt, ką visada sakei kad darysi</h4>';
        elseif ($age < 110) echo '<h4>Kiek proanukių turi?</h4>';
        else echo '<h4>Sėkmės mušant rekordus</h4>';
      }

    }

    function isNatural($ageInput)
    {
      if (is_int($ageInput) && int_val($ageInput) >= 0) return $ageInput;

      if (is_int($ageInput)) {
        echo 'Įvedėt ne sveiką skaičių';
        return false;
      }
      if ($ageInput < 0) {
        echo 'Deja dar nesi gimęs';
        return false;
      }
      if (empty($ageInput) || $ageInput !== '0') {
        echo 'Nieko neįvedėte';
        return false;
      }
    }
    ?>

    <form method="get" class="w-75 p-4 my-4 border border-dark mx-auto rounded">
      <h3 class="text-center text-info">GET form</h3>
      <input type="submit" value="Kelintadienis šiandien?" class="btn btn-info">
      <input type="hidden" name="getDay">
    </form>

    <?php
    if (!empty($_GET) && isset($_GET['getDay'])) {

      switch (date('w')) {
        case 1:
          echo 'Pirmadienis';
          break;
        case 2:
          echo 'Antradienis';
          break;
        case 3:
          echo 'Trečiadienis';
          break;
        case 4:
          echo 'Ketvirtadienis';
          break;
        case 5:
          echo 'Penktadienis';
          break;
        case 6:
          echo 'Šeštadienis';
          break;
        case 7:
          echo 'Sekmadineis';
          break;
        default:
          echo 'Kentauro proxima valdo!';
      }
    }
    ?>




  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>