<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

<!-- <style>
        * {
            margin: 0;
            padding: 0;
            z-index: 1;
        }

        body {
            height: 100vh;
            width: 100vw;
        }

        nav {
            height: 10% !important;
            width: 100%;
            background-color: red;

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

        .picture{
            height: 100%;
            width: fit-content;
            background-color: yellow;
            margin: 0 0 0 2%;
            display: grid;
            grid-template-rows: repeat(2, 1fr);
            gap: auto;
        }

        .logo {
             margin: 0 0 0 2% !important; 
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
            grid-template-columns: repeat(4, 2fr);
            gap: calc(100%/4);

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

        h1 strong {
            cursor: pointer;
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
    </style> -->
<!-- </head>

<body>
    <nav>
        <div class="picture ">
            <strong><u>CNAT</u></strong>
            <div class="logo image-fluid">
                <img image-fluid src="codernaccotax.png" alt="codernaccotax">
                 <img src="" alt="codernaccotax"> 
            </div>
        </div>

        <div class="startSection ">
             <strong>Login As</strong> -
            <a class="btn btn-primary" href="./Administrator/select_subject.php">Teacher</a>
            <a class="btn btn-primary" href="./Administrator/select_subject.php">Administrator</a>
            <a class="btn btn-primary" href="./Administrator/select_subject.php">Student</a>
        </div>

         <div class="signup  ">
                <button class="btn btn-success" onclick="dialougeBox()">Sign Up</button>
            </div> 
    </nav>
    <div class="dialouge-box">
        <span>
            <h1 onclick="closeDialougeBox()"><strong>x</strong></h1>
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

    // require_once './Administrator/config.php';
    // Check if form is submitted via GET
    // print_r($_GET);
    
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
        function closeDialougeBox() {
            let dialougeBox = document.querySelector('.dialouge-box');
            console.log(`${dialougeBox}`);
            dialougeBox.style.display = "none";
        }
    </script>
</body>

</html> -->


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./cssFolder/style.css">
</head>

<body>

    <nav>
        <div class="insideNav">
            <div class="logo">
                <div class="name">
                    <span>CNAT</span>
                </div>
                <div class="image-section">
                    <img src="codernaccota.png" alt="CNAT">
                </div>
            </div>
            <div class="login">
                <div class="heading"><strong>
                        <h5>Login As:</h5>
                    </strong></div>
                <div class="options">
                    <button class="btn btn-success">Student</button>
                    <button class="btn btn-success">Teacher</button>
                    <button class="btn btn-success">Administrator</button>
                </div>
            </div>
            <div class="sign-up">
                <div class="btn btn-primary">SIGN UP</div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>