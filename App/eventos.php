<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <title>Events</title>
</head>

<body>

  <!--HEADER START-->
  <div class="col">
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <div class="col" style="text-align: left;">
          <button type="button" class="btn mainButtons" onclick="location.href='login.html'"><img src="img/user_icon.png" style="width: 2em;"></button>
        </div>
        <div class="col" style="text-align: right;">
          <button type="button" class="btn mainButtons" onclick="location.href='newEventForm.php'"><img src="img/suma_icon.png" style="width: 2em;"></button>
        </div>
      </div>
    </nav>
  </div>
  <!--HEADER END-->

  <div style="margin-top:50px">
    <br>
    <h1 style="align:center; color:#343a40;">Llistat d'events</h1>
    <!--<input type="button" value="Refresh Page" onClick="window.location.reload()">-->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hackatonbdd";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT nom, descripcio, data, lloc FROM event";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      echo "<div class='list-group'>";
      while ($row = $result->fetch_assoc()) {
        echo "<div class='borderbts'>";
        echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>";
        echo "<div class='d-flex w-100 justify-content-between'>";
        echo "<h5 class='mb-1'>" . $row['nom'] . "</h5>";
        echo "<small>" . $row['data'] . "</small>";
        echo "</div>";
        echo "<p class='mb-1'>" . $row['descripcio'] . "</p>";
        echo "<small>" . $row['lloc'] . "</small>";
        echo "</a>";
        echo "</div>";
      }
      echo "</div>";
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </div>

  <!--FOOTER START-->
  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="col" style="text-align: center;">
        <button type="button" class="btn mainButtons" onclick="location.href='calendar.html'"><img src="img/calendar_icon.png" style="width: 2em;"></button>
      </div>
      <div class="col" style="text-align: center;">
        <button type="button" class="btn mainButtons"><img src="img/home_icon.png" style="width: 2em;"></button>
      </div>
      <div class="col" style="text-align: center;">
        <button type="button" class="btn mainButtons" onclick="location.href='mapa/mat.html'"><img src="img/map_icon.png" style="width: 2em;"></button>
      </div>
    </div>
  </nav>
  <!--FOOTER END-->
</body>

</html>