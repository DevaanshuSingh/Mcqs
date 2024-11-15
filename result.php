<?php
require 'config.php';
$table_data = "<table class='table table-success border-dark table-striped table-bordered'>";
$table_data .= "<thead><tr><th>Sl</th><th>Question</th><th>Correct Answer</th><th>Selected Answer</th><th>Marks</th></tr></thead>";

$table_data .= "<tbody>";
$total = 0;
$sl = 0;

foreach ($_POST as $row) {
    $test = explode('_', $row);
    $given_ans = $test[1];
    $sql = "select question
        ,case
        when ans=1 then option1
        when ans=2 then option2
        when ans=3 then option3
        when ans=4 then option4
        end as correct_ans
        ,case
        when " . $given_ans . "=1 then option1
        when " . $given_ans . "=2 then option2
        when " . $given_ans . "=3 then option3
        when " . $given_ans . "=4 then option4
        end as selected_ans
        ,if(ans=" . $given_ans . ",1,0) as marks
        from questions where id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$test[0]]);
    $question = $stmt->fetch(PDO::FETCH_ASSOC);
    $table_data .= '<tr>';
    $table_data .= '<td>' . ++$sl . '</td>';
    $table_data .= '<td>' . $question['question'] . '</td>';
    $table_data .= '<td>' . $question['correct_ans'] . '</td>';
    $table_data .= '<td>' . $question['selected_ans'] . '</td>';
    if ($question['marks'] == 1) {
        $table_data .= '<td class="text-success text-right" ><strong>' . $question['marks'] . '</strong><i class="bi bi-check-circle"></i></td>';
    } else
        $table_data .= '<td class="text-danger text-right"><strong>' . $question['marks'] . '</strong></td>';
    $table_data .= '</tr>';
    $total += $question['marks'];

}

$table_data .= "</tbody>";
// $table_data .= "<tfoot class='bg-warning'>";
$table_data .= "<tfoot>";
$table_data .= "<tr>";
$table_data .= '<td colspan="4"> <strong>ATTENDED QUESTIONS <strong>--></strong></strong></td>';
$table_data .= '<td class="text-right"><strong><i>' . $sl . '</i></strong></td>';
$table_data .= "</tr>";
$table_data .= "<tr>";
$table_data .= '<td colspan="4"> <strong>CORRECT ANSWERS <strong>--></strong></strong></td>';
$table_data .= '<td class="text-right"><strong><i>' . $total . '</i></strong></td>';
$table_data .= "</tr>";
$table_data .= "<tr>";
$table_data .= '<td colspan="4"> <strong>PERCENTAGE <strong>--></strong></strong></td>';
$table_data .= '<td class="text-right"><strong><i>' . ($total/$sl)*100 . '</i></strong>%</td>';
$table_data .= "</tr>";
$table_data .= "</tfoot>";
$table_data .= "</table>";
// $stmt = $pdo->prepare('SELECT * FROM questions where subject_id=?');
// $stmt->execute([$subject_id]);
// $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MCQ Test Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgba(7, 7, 7, 0.2);
        }
        tfoot{
            background-color: rgba(199, 219, 35, 0.5);
        }
    </style>
</head>

<body>
    <?php
    echo $table_data;
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>