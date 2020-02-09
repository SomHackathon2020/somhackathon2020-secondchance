<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "hackatonbdd";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $nom = $_POST['nom'];
  $descripcio = $_POST['descripcio'];
  $dia = $_POST['dia'];
  $lloc = $_POST['lloc'];

  $sql = "insert into event(nom, descripcio, data, lloc) values ('" . $nom . "', '" . $descripcio . "', '" . $dia . "', '" . $lloc . "')";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "Post has been saved successfully";
  } else {
    echo "Unable to save post";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <!--HEADER START-->
  <div class="col">
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <div class="col" style="text-align: left;">
          <button type="button" class="btn mainButtons"><img src="img/user_icon.png" style="width: 2em;"></button>
        </div>
        <div class="col" style="text-align: right;">
          <button type="button" class="btn mainButtons"><img src="img/suma_icon.png" style="width: 2em;"></button>
        </div>
      </div>
    </nav>
  </div>
  <!--HEADER END-->
  <div style="margin-top:100px">
    <h1 style="align:center; color:#343a40;">Nou event</h1>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <form action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" name="nom">
        </div>
        <div class="form-group col-md-2">
          <label for="descripcio">Descripció</label>
          <input type="text" class="form-control" name="descripcio">
        </div>
        <div class="form-group col-md-2">
          <label class="control-label" for="dia">Data</label>
          <input class="form-control" id="date" name="dia" placeholder="YYYY-DD-MM" type="text" />
        </div>
        <div class="form-group col-md-2">
          <label for="time">Hora</label>
          <input type="time" class="form-control" name="time">
        </div>
        <div class="form-group col-md-2">
          <label for="lloc">Lloc</label>
          <input type="text" class="form-control" name="lloc">
        </div>
        <button type="submit" name="submit">Submit</button>
        <button type="button" onclick="location.href='eventos.php'">Cancelar</button>
    </form>
  </div>

  <!--FOOTER START-->
  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="col" style="text-align: center;">
        <button type="button" class="btn mainButtons" onclick="location.href='app/app.php'"><img src="img/calendar_icon.png" style="width: 2em;"></button>
      </div>
      <div class="col" style="text-align: center;">
        <button type="button" class="btn mainButtons" onclick="location.href='eventos.php'"><img src="img/home_icon.png" style="width: 2em;"></button>
      </div>
      <div class="col" style="text-align: center;">
        <button type="button" class="btn mainButtons" onclick="location.href='mapa/mat.html'"><img src="img/map_icon.png" style="width: 2em;"></button>
      </div>
    </div>
  </nav>
  <!--FOOTER END-->
</body>

</html>