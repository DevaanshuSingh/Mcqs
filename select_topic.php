<?php
require_once 'config.php';
try {
    $stmt = $pdo->prepare('SELECT * FROM topics WHERE subject_id = ?');
    $stmt->execute([$_GET['subject_id']]);
    $topics = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // print_r($topics);
} catch (PDOException $e) {
    echo 'Error While Fetching Is: ' . $e->getMessage();
}



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
            background-color: whitesmoke;
            background-color: rgba(13, 110, 253, 0.5);
        }

        select,
        option {
            /*Here this property isn't working on options*/
            cursor: pointer;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 45%;
            width: 50%;
            border-radius: 15%;
            background-color: rgb(13 110 253 / 40%);
        }

        .choose {
            /* background-color: red; */
            /* border-radius: 15%; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 80%;
            width: 50%;
            padding: 2vh;
            /* background-color: rgb(13 110 253 / 63%); */
        }

        .form-select {
            margin: 2vmin;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 vw-100">
    <div class=" container">
        <h3><strong>Select_Topic</strong></h3>
        <div class="choose">
            <form action="add_questions.php" method="GET">
                <div class="col-12">
                    <select required name="topic_id" class="w-100 form-select form-select-sm"
                        aria-label=".form-select-sm example">
                        <option selected disabled>Topics</option>
                        <?php
                        foreach ($topics as $topic) {
                            echo '<option value=' . $topic['id'] . '>' . $topic['topic_name'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-end btn-section">
                    <button type="submit" class="btn col-6 btn-dark">Go</button>
                </div>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        document.body.style.cursor = 'url("solve2.png") 16 16, auto';

    </script>
</body>

</html>