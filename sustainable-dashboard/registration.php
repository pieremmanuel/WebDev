<?php
session_start();
if (isset($_SESSION["user_id"])) {
    header("Location: dashboard.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Sustainability</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url("https://theeducationview.com/wp-content/uploads/2022/12/Dayananda-Sagar-University-A-Centre-of-Pedagogical-Excellence..jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh;
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

        .container {
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
        }
    </style>
</head>

<body>
    <div class="container shadow-none">
        <img src="assets/dsulogo.png" width="250" class="mb-4" style="margin-left: 10vw;" alt="">
        <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Passwords do not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_prepare($dbconn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                array_push($errors, "Email already exists!");
            }
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($dbconn, $sql);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);

                    // Fetch the newly created user ID
                    $user_id = mysqli_insert_id($dbconn);

                    // Create a session for the new user
                    $_SESSION["user_id"] = $user_id;

                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                    header("Location: dashboard.php");
                    exit();
                } else {
                    die("Something went wrong");
                }
                mysqli_stmt_close($stmt);
            }
            mysqli_close($dbconn);
        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control shadow-none" name="fullname" placeholder="Full Name:" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control shadow-none" name="email" placeholder="Email:" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control shadow-none" name="password" placeholder="Password:"
                    required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control shadow-none" name="repeat_password"
                    placeholder="Repeat Password:" required>
            </div>
            <div class="form-btn">
                <input type="submit" class="btn" value="Register" name="submit">
            </div>
        </form>
        <div>
            <div style="margin-top:10px;">
                <p style="color: #fff;">Already Registered? <a href="login.php">Login Here</a></p>
            </div>
        </div>
        <a href="index.php" class="btn btn-warning">Back</a>
    </div>
</body>

</html>