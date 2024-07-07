<?php
session_start();
include ("database.php");
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];
$sql = "SELECT full_name FROM users WHERE id = ?";
$stmt = $dbconn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($full_name);
$stmt->fetch();
$stmt->close();
$dbconn->close();

if ($full_name) {
    $_SESSION['full_name'] = $full_name;
} else {
    $_SESSION['full_name'] = "User";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sustainability</title>
    <link rel="shortcut icon" href="assets/solar-panel.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/body.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .wrapper {
            background-image: url('https://sustainability.utah.edu/wp-content/uploads/sites/56/2016/11/Campus-Fall-Panorama-fullsize.jpg');
        }

        .main {
            min-height: 100vh;
        }

        .main>a {
            color: #27348b;
            position: absolute;
            left: 10%;
            font-weight: 600;
            font-size: 1.2vw;
        }

        .main>a:hover {
            color: #27348b;
            text-decoration: underline;
        }

        .buttons {
            margin-top: 1vw;
            padding: 3vw 7vw;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }


        .buttons a {
            background-color: #27348b;
            padding: 1vw 3vw;
            font-size: 1.3vw;
            color: #fff;
            font-weight: 600;
            border-radius: 7px;
            transition: all cubic-bezier(0.19, 1, 0.22, 1) 1s;
        }

        .buttons a:hover {
            background-color: #151c49;
        }

        .buttons .prime {
            background-color: #151c49;
        }

        .container h1 {
            padding: 1vw 2vw;
            font-size: 2vw;
            color: #151c49;
        }

        .main .dash {
            min-height: 70vh;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="navbar" style="height: 9vh; z-index: 99">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/dsulogo.png" alt="logo" height="50" />
                </a>
                <a href="logout.php" style="
              background-color: #27348b;
              padding: 0.8vw 2vw;
              font-weight: 600;
              border-radius: 7px;
              color: #fff;
            ">Log Out</a>
                <a class="right-nav" style="position: absolute; left: 95%; top: 88vh" href="#">
                    <div class="circle" style="
                background-color: #27348b;
                border-radius: 50%;
                height: 6vh;
                width: 6vh;
                display: flex;
                align-items: center;
                justify-content: center;
              ">
                        <h2 style="color: #fff; box-shadow: none; font-size: 1vw">top</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="text-container" id="top-container">
        <?php if (isset($_SESSION['full_name'])): ?>
            <h2 style="position: absolute; top: 15%; left: 50%; transform: translateX(-50%); color: #fff;">
                Welcome, <?php echo htmlspecialchars($_SESSION['full_name']); ?>
            </h2>
        <?php endif; ?>
        <h1 class="title" style="
          text-shadow: 2px 2px 2px black;
          position: absolute;
          top: 25%;
          left: 50%;
          transform: translateX(-50%);
          font-size: 4vw;
        ">
            Campus Sustainability
        </h1>
        <div>
            <blockquote style="
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            width: 70vw;
          ">
                <i>
                    <span class="big-quotes">&#8220;</span>
                    Preserve and cherish the pale blue dot, the only home we've ever
                    known.
                    <span class="big-quotes">&#8221;</span></i>
            </blockquote>
        </div>
        <br />
    </div>
    <div class="main" style="padding: 2vw 5vw; margin-top: 2vw">
        <h1 style="padding: 1vw 2vw; font-size: 2.7vw; color: #151c49">Dayananda Sagar Institutions Sustainability
            Dashboard</h1>
        <p style="padding: 1vw 2vw; text-align: justify; font-size: 1.3vw">The Dayananda Sagar Institutions
            Sustainability
            Dashboard is a comprehensive tool
            designed to monitor and
            evaluate the sustainability initiatives undertaken by the Dayananda Sagar Institutions (DSI). This dashboard
            provides a visual representation of key sustainability metrics, allowing stakeholders to track progress,
            identify areas for improvement, and make informed decisions regarding sustainability practices within the
            institution.</p>
        <a href="dashboard.php">Back</a>
        <div class="buttons">
            <a href="dashboard.php" class="prime">Energy</a>
            <a href="elec.php">Electricity</a>
            <a href="water.php">Water</a>
            <a href="plant.php">Plants</a>
            <a href="waste.php">Waste & Recycling</a>
        </div>
        <div class="container-fluid">
            <h1 style="margin-bottom: 1vw;">Energy Use</h1>
            <p style="padding: 1vw 2vw; text-align: justify; font-size: 1.3vw">
                Over the past decade, the college of Dayananda Sagar has reduced its energy use per square foot of
                building
                space, as well as increased its on-site and off-site renewables totals. Contact the Facilities
                Management Sustainability & Energy division for more information.
            </p>
            <div class="dash">
                <div class="img" style="background-color: #27348b; height: 40vh; position: relative;">
                    <img src="https://images.unsplash.com/photo-1558449028-b53a39d100fc?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        style="width: 70%; height: 40vh; object-fit: cover;" alt="">
                    <h2 style="position: absolute; top: 20%; right: 2%; color: #fff;">
                        Did you know? <br><br>
                        More than 40% of the college <br> of Dayananda Sagar's electricity <br> comes from renewable
                        sources.
                    </h2>
                </div>
                <div class="board" style="margin-top: 2vw;">
                    <iframe title="solar2" width="600" height="373.5" style="width: 100%; height: 100vh;"
                        src="https://app.powerbi.com/view?r=eyJrIjoiMjM2NGE0ZGYtYTYwNi00OWJiLTkyMTgtOTU1N2QyY2IxYjQwIiwidCI6ImRmODY3OWNkLWE4MGUtNDVkOC05OWFjLWM4M2VkN2ZmOTVhMCJ9"
                        frameborder="0" allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>

    </div>
    <div class="footer" style="
    margin-top: 5vw;
          height: 15vh;
          background-color: #27348b;
          display: flex;
          align-items: center;
          justify-content: center;
        ">
        <img src="assets/dsulogo.png" width="300" alt="" />
    </div>
    <script src="navbar.js"></script>
</body>

</html>