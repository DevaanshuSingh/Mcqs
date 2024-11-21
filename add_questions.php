<?php
require_once 'config.php';
// if (isset($_GET['topic_id'], $_GET['number_of_questions'])) {
// $topic = $_GET['topic_id'];
print_r($_GET);

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
    *::selection {
      color: blue;
    }

    body {
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
    }

    a {
      text-decoration: none;
      color: black;

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

    .btn {
      transition: 1s ease;
      background-color: rgba(67, 103, 177, 1);
      border: 1px solid;

      &:hover {
        color: white;
        border: 1px solid rgba(67, 103, 177, 1);
        background-color: rgba(67, 103, 177, .5);
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="" method="GET">
      <h3 class="heading"><u>Enter Question</h3>

      <label for="question">Insert Question</label>
      <input type="text" name="question" id="question">

      <label for="option-1">Insert Option-1</label>
      <input type="text" name="option-1" id="option-1">

      <label for="option-2">Insert Option-2</label>
      <input type="text" name="option-2" id="option-2">

      <label for="option-3">Insert Option-3</label>
      <input type="text" name="option-3" id="option-3">

      <label for="option-4">Insert Option-4</label>
      <input type="text" name="option-4" id="option-4">

      <label for="ans">Insert Correct Answer</label>
      <input type="text" name="ans" id="ans">

      <input type="hidden" value="<?php
      echo $_GET['topic_id']
        ?>" name="topic_id">

      <button type="submit" class="btn"><strong>Insert Again</strong></button>
      <button type="submit" class="btn"><strong><a href="complete.php">Complete Inserting</a></strong></button>
    </form>

    <?php

require_once 'config.php';
// Check if form is submitted via GET
print_r($_GET);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Check if the required form fields are set
  if (isset($_GET['question'], $_GET['topic_id'], $_GET['option-1'], $_GET['option-2'], $_GET['option-3'], $_GET['option-4'], $_GET['ans'])) {
      
      // GET the form values
      $question = $_GET['question'];
      $topic_id = $_GET['topic_id'];
      $option1 = $_GET['option-1'];
      $option2 = $_GET['option-2'];
      $option3 = $_GET['option-3'];
      $option4 = $_GET['option-4'];
      $ans = $_GET['ans'];

      if (is_numeric($topic_id)) {
          try {
            echo "Inside Try Block";
              // Prepare the SQL statement
              $stmt = $pdo->prepare('INSERT INTO questions (question, topic_id, option1, option2, option3, option4, ans) VALUES (?, ?, ?, ?, ?, ?, ?)');
              
              // Execute the query
              if ($stmt->execute([$question, $topic_id, $option1, $option2, $option3, $option4, $ans])) {
                  // If the query is successful
                  echo "Ok";
              } else {
                  echo "Failed to insert the question.";
              }
          } catch (PDOException $e) {
              // Handle SQL errors gracefully
              echo "Error: " . $e->getMessage();
          }
      } else {
          echo "Invalid topic ID.";
      }
  } else {
      echo "Please fill in all the fields!";
  }
}

?>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
<?php
// }