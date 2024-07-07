<?php
session_start();
if (isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sustainability</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url("https://theeducationview.com/wp-content/uploads/2022/12/Dayananda-Sagar-University-A-Centre-of-Pedagogical-Excellence..jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .form-btn .btn {
            background-color: #27348b;
            color: #fff;
        }

        a {
            color: #27348b;
            transition: all cubic-bezier(0.19, 1, 0.22, 1) 1s;
        }

        a:hover {
            color: #FEF200;
        }
    </style>
</head>

<body>
    <div class="container shadow-none">
        <img src="assets/dsulogo.png" width="250" class="mb-4" style="margin-left: 10vw;" alt="">
        <?php
        if (isset($_POST["login"])) {
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $password = $_POST["password"];

            if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = mysqli_prepare($dbconn, $sql);
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if ($user) {
                    if (password_verify($password, $user["password"])) {
                        $_SESSION["user_id"] = $user["id"];
                        header("Location: dashboard.php");
                        exit();
                    } else {
                        echo "<div class='alert alert-danger'>Password does not match</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Email does not match</div>";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "<div class='alert alert-danger'>Invalid input</div>";
            }
        }
        ?>
        <form class="form-container" action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control shadow-none" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control shadow-none"
                    required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn">
            </div>
        </form>
        <div style="margin-top: 10px;">
            <p style="color: #fff">Not registered yet? <a href="registration.php">Register Here</a></p>
        </div>
        <a href="index.php" class="btn btn-warning">Back</a>
    </div>
</body>

</html>