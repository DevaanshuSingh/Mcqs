<?php
require_once 'config.php';
$stmt = $pdo->prepare('SELECT * FROM subjects');
$stmt->execute();
$subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            height: 100vh;
            width: 100vw;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex !important;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
        }

        a {
            text-decoration: none;
            color: #212529;
            transition: 1s ease;

            &:hover {
                color: rgba(128, 0, 128,0.9);
                border: 1px solid rgba(67, 103, 177, 1);
                background-color: rgba(67, 103, 177, .5);
            }
        }

        .heading {
            color: greenyellow !important;
        }

        .container {
            height: 100%;
            width: 100%;
            /* background-color: black; */
            z-index: 1;
            /* border: 1px solid; */
            box-sizing: border-box;
        }

        .btn {
            transition: 1s ease;
            background-color: rgba(67, 103, 177, 1);
            border: 1px solid;

            &:hover {
                color: rgba(128, 0, 128,0.9);
                border: 1px solid rgba(67, 103, 177, 1);
                background-color: rgba(67, 103, 177, .5);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <h4><strong>list Of Subjects:</strong></h4>
            <?php
            $i = 0;
            foreach ($subjects as $subject) {
                echo $subject['id'] . ". " . $subject['subject_name'] . '<br>';
            }
            ?>
        </nav>
        <form action="" method="GET">
            <h3 class="heading"><u>Enter Topic</h3>

            <label for="topic-name">Insert Topic Name</label>
            <input type="text" name="topic-name" id="topic-name">

            <label for="subject-id">Insert Subject Id</label>
            <input type="number" name="subject-id" id="subject-id">

            <button type="submit" class="btn"><strong>Insert Again</strong></button>
            <a href="complete.php" class="btn"><strong>Complete Inserting</strong></button></a>
        </form>

        <?php

        require_once 'config.php';
        // Check if form is submitted via GET
        // print_r($_GET);
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Check if the required form fields are set
            if (isset($_GET['topic-name'], $_GET['subject-id'])) {
                // GET the form values
                $topic_name = $_GET['topic-name'];
                $subject_id = $_GET['subject-id'];

                try {
                    echo "Inside Try Block Of set_topics.php";
                    // Prepare the SQL statement
                    $stmt = $pdo->prepare('INSERT INTO topics (topic_name, subject_id) VALUES (?, ?)');

                    // Execute the query
                    if ($stmt->execute([$topic_name, $subject_id])) {
                        // If the query is successful
                        echo "Ok";
                    } else {
                        echo "Failed to insert the Topic.";
                    }
                } catch (PDOException $e) {
                    // Handle SQL errors gracefully
                    echo "Error: " . $e->getMessage();
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