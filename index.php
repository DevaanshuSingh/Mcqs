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
        }

        .navbar {
            margin: 0 0 ;
            height: 10vh;
            background-color: rgba(0, 0, 255, 0.5) !important;
            display: flex;
            align-items: center;
            justify-content: space-around;

        }

         .picture {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: auto;
            /* width: 50px; */
            /* background-color: red; */
            /* border: 1px solid black;
            overflow: hidden; */
            /* background-color: red; */
            height: 10vh;
            width:10vw;
        } 

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            /* height: auto; */
            width: 30%;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 40%;
            /* border: 1px solid black; */
            overflow: hidden;
        }

        .section {
            width: 20%;
            position: absolute;
            left: 10%;            
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            /* border: 1px solid black; */
        }

        img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
            background-position: center;
            display: block;
        }
    </style>
</head>

<body>
    <!-- <nav>
        <picture>
            <img src="codernaccotax.png" alt="codernaccotax Image">
        </picture>
        <div class="login-as">
        <h1>Login As</h1>
            <a href="select_subject.php"><button>Teacher</button></a>
            <a href="test.php"><button>Student</button></a>
        </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="picture">
                    <div class="logo">
                        <img src="codernaccotax.png" alt="codernaccotax">
                    </div>
                    <strong><u>CNAT</u></strong>
            </div>

            <div class="section">
                <strong>Login As</strong>
                <a class="btn btn-primary" href="select_subject.php">Teacher</a>
                <a class="btn btn-primary" href="test.php">Student</a>
            </div>
        
            <div class="signup">
                <button class="btn btn-success">Sign Up</button>
            </div>

        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>