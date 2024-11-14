<?php
require_once 'config.php';
$subject_id = $_POST['subject_id'];
$number_of_questions = $_POST['number_of_questions'];
$stmt = $pdo->prepare('SELECT * FROM questions where subject_id=? order by rand() limit ?');
$stmt->execute([$subject_id,$number_of_questions]);
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Choose a subject</h1>
    <?php
    print_r($_POST);
    ?>
    <h3>Questions are: </h3>
    <form action="result.php" method="post">
      <?php
      $q_no=0;
      foreach ($questions as $question) {
        echo '<h4>'.++$q_no.". ". $question['question'] . '</h4>';
        for ($i = 1; $i <= 4; $i++) {
          $opt = "option" . $i;
          echo '<div class="form-check">';
          echo '<input class="form-check-input" type="radio" value="'.$question['id'].'_'.$i.'" name="id_' . $question['id'] . '" id="flexRadioDefault1">';
          echo '<label class="form-check-label" for="flexRadioDefault1">';
          print($question[$opt]);
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>