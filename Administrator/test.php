<?php
require_once 'config.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-image: url('codernaccotax.png');
      background-repeat: repeat-y;
      background-size: contain;
      background-position: center;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .heading {
      color: greenyellow !important;
    }


    .form-check-input:checked {
      background-color: #2b3a7b;
      border: 1px solid whitesmoke !important;
    }

    .container {
      height: 100%;
      width: 100%;
      /* background-color: black; */
      z-index: 1;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php
    // print_r($_POST);
    ?>
    <h3 class="heading"><u>Questions From <?php
    try {
      $stmt = $pdo->prepare('SELECT subject_name FROM subjects where id=?');
      $stmt->execute([$subject_id]);
      $question = $stmt->fetch(PDO::FETCH_COLUMN);
      echo $question . '</u>';
    } catch (PDOException $e) {
      echo 'Database error: ' . $e->getMessage();
    }
    ?>:</h3>

    <form action="result.php" method="post">
      <?php
      $q_no = 0;
      foreach ($questions as $question) {
        echo '<h4>' . ++$q_no . ". " . $question['question'] . '</h4>';
        for ($i = 1; $i <= 4; $i++) {
          $opt = "option" . $i;
          echo '<div class="form-check">';
          echo '<input class="form-check-input border border-dark" type="radio" value="' . $question['id'] . '_' . $i . '" name="id_' . $question['id'] . '" id="flexRadioDefault1">';
          echo '<label class="form-check-label" for="flexRadioDefault1">';
          print ($question[$opt]);
          echo "</label>";
          echo "</div>";
        }
      }
      ?>
      <div class="col-6">
        <button type="submit" class="btn btn-primary">Submit Test</button>
      </div>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>