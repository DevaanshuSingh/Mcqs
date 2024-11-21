<?php

require_once 'config.php';
// Check if form is submitted via POST
print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the required form fields are set
  if (isset($_POST['question'], $_POST['topic_id'], $_POST['option-1'], $_POST['option-2'], $_POST['option-3'], $_POST['option-4'], $_POST['ans'])) {
      
      // POST the form values
      $question = $_POST['question'];
      $topic_id = $_POST['topic_id'];  // This will be passed from the form
      $option1 = $_POST['option-1'];
      $option2 = $_POST['option-2'];
      $option3 = $_POST['option-3'];
      $option4 = $_POST['option-4'];
      $ans = $_POST['ans'];

      // Make sure topic_id is valid (e.g., ensure it's an integer if it's a foreign key)
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