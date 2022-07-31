<!DOCTYPE html>
<html lang="en">
<head>
    <title>First example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php

    require_once 'include/database.php';

    $database = new Database();

    $logs = $database->select("SELECT * FROM `xss` order by date_time DESC ");

    echo <<<TH
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Filtered input</th>
      <th scope="col">Date &amp; time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
TH;

    $number = 1;
    foreach ($logs as $log) {
        echo <<<LDO
    <tr>
      <th scope="row">$number</th>
      <td>$log[filtered_input]</td>
      <td>$log[date_time]</td>
      <td><button type="button" class="btn btn-primary codes" data-id="$log[id_xss]">Run raw input</button></td>
    </tr>
LDO;

        $number++;
    }

    echo <<< TF
  </tbody>
</table>
TF;

    ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script src="include/script.js"></script>
</body>
</html>






