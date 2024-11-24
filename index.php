<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            z-index: 1;
        }

        nav {
            height: 10vh;
            background-color: rgba(0, 0, 255, 0.5) !important;
        }

        .container {
            height: 98%;
            width: 100%;
            position: relative;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            display: grid;
            grid-template-columns: repeat(3, 2fr);
            gap: calc(100%/3);
        }


        .picture {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;

        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto;
            width: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 40%;
            overflow: hidden;
        }

        .startSection {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            display: grid;
            grid-template-columns: repeat(3, 2fr);
            gap: calc(100%/2);

        }

        img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
            background-position: center;
            display: block;
        }

        .dialouge-box {
            position: absolute;
            height: 100vh;
            width: 100vw;
            background-color: rgba(255, 255, 255, 0.5);
            z-index: 5 !important;
            top: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .open {
            height: 80%;
            width: 50%;
            background-color: rgba(2, 82, 55, 0.6);
            border-radius: 20%;
            display: flex;
            flex-direction: column;

            &>nav {
                display: flex;
                justify-content: center;

            }

            &>form {
                position: relative;
                top: 20%;
                left: 10%
            }
        }

        .dialouge-box {
            display: none;

            &>span {
                position: absolute;
            }
        }

        form {
            border: 1px solid;
            width: cover;
            flex-direction: column;

            &>button {
                bottom: 0%;
                background-color: red !important;
            }
        }

        span {
            position: absolute;
            top: 0%;
            left: 98%;
            color: red;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <div class="picture grid-items ">
                <div class="logo image-fluid">
                    <img src="codernaccotax.png" alt="codernaccotax">
                </div>
                <strong><u>CNAT</u></strong>
            </div>

            <div class="startSection grid-items ">
                <strong>Login As</strong>
                <a class="btn btn-primary" href="./Administrator/select_subject.php">Teacher</a>
                <a class="btn btn-primary" href="./Administrator/test.php">Student</a>
            </div>

            <div class="signup grid-items ">
                <button class="btn btn-success" onclick="dialougeBox()">Sign Up</button>
            </div>

        </div>
    </nav>
    <div class="dialouge-box">
        <span>
            <h1><strong>x</strong></h1>
        </span>
        <div class="open">
            <nav><strong><u>SIGN UP</u></strong></nav>

            <form action="" method="GET">
                <label class="col-12" for="name">Enter Name</label>
                <input class="col-10" name="name" type="text" id="name">

                <label class="col-12" for="email">Enter Email</label>
                <input class="col-10" name="email" type="text" id="email">

                <label class="col-12" for="phone">Enter Phone</label>
                <input class="col-10" name="phone" type="text" id="phone">

                <button class="col-10" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <?php

    require_once './Administrator/config.php';
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function dialougeBox() {
            let dialougeBox = document.querySelector('.dialouge-box');
            console.log(`${dialougeBox}`);
            dialougeBox.style.display = "flex";
        }
    </script>
</body>

</html>