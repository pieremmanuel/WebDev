<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sustainability</title>
  <link rel="stylesheet" type="text/css" href="css/body.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <div class="navbar" style="height: 9vh; z-index: 99">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="assets/dsulogo.png" alt="logo" height="50" />
        </a>
        <a href="login.php" style="
              background-color: #27348b;
              padding: 0.8vw 2vw;
              font-weight: 600;
              border-radius: 7px;
              color: #fff;
            ">Log In</a>
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

  <script src="navbar.js"></script>

  <div class="text-container" id="top-container">
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

  <div class="goals-container" style="height: 60vh; margin-top: 20vh">
    <div class="goals">
      <h2>Our Aim</h2>
      <p>
        Our aim at DSU is to cultivate a community of environmentally
        conscious individuals equipped with the knowledge, skills, and passion
        to address global environmental challenges. Through innovative
        research, sustainable practices, and meaningful engagement, we strive
        to reduce our ecological footprint, inspire positive change, and
        create a more resilient and equitable world for all.
      </p>
    </div>
    <div class="goals">
      <h2>Our Measures</h2>
      <p>
        We have developed the Campus Sustainability Dashboard in hopes of
        reducing our impact on the world by tracking our emissions,
        consumption and energy usage to ensure that we aware and act in
        accordance with our goals.
      </p>
    </div>
  </div>

  <div class="content-wrapper">
    <h1 class="title-redirect">Sustainable Campus Dashboard</h1>
    <p class="title-description">
      Explore DSI's energy saving initiatives across the Kumaraswamy campus.
    </p>
    <a class="redirect-anchor" href="login.php" style="
          width: 10vw;
          padding: 0.8vw 1vw;
          border-radius: 6px;
          background-color: #27348b;
          color: #fff;
        ">View the Dashboard</a>
  </div>
  <div class="main">
    <div class="content" style="padding: 3vw; height: 80vh">
      <div class="top" style="display: flex; justify-content: space-around">
        <div class="img" style="position: relative">
          <a href="dashboard.php">
            <img
              src="https://images.unsplash.com/photo-1509391366360-2e959784a276?q=80&w=1772&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              width="400" height="250" alt="" />
          </a>
          <h1 style="
                color: #fff;
                position: absolute;
                top: 50%;
                font-weight: 600;
                font-size: 1.5vw;
                left: 50%;
                transform: translate(-50%, -50%);
              ">
            Energy
          </h1>
        </div>
        <div class="img" style="position: relative">
          <a href="plant.php">
            <img
              src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1913&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              width="400" height="250" alt="" />
          </a>
          <h1 style="
                color: #fff;
                position: absolute;
                top: 50%;
                font-weight: 600;
                font-size: 1.5vw;
                left: 50%;
                transform: translate(-50%, -50%);
              ">
            Plants & Trees
          </h1>
        </div>
        <div class="img" style="position: relative">
          <a href="waste.php">
            <img
              src="https://images.unsplash.com/photo-1582408921715-18e7806365c1?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              width="400" height="250" alt="" />
          </a>
          <h1 style="
                color: #fff;
                position: absolute;
                top: 50%;
                font-weight: 600;
                font-size: 1.5vw;
                left: 50%;
                transform: translate(-50%, -50%);
              ">
            Waste & Recycling
          </h1>
        </div>
      </div>
      <div class="bot" style="display: flex; justify-content: space-around; margin-top: 3vw">
        <div class="img" style="position: relative">
          <a href="water.php">
            <img
              src="https://www.vardhmanenvirotech.com/blog/wp-content/uploads/2021/04/Rainwater_Harvesting_and_Plastic_Pond_2.jpg"
              width="400" height="250" alt="" />
          </a>
          <h1 style="
                color: #fff;
                position: absolute;
                top: 50%;
                font-weight: 600;
                font-size: 1.5vw;
                left: 50%;
                transform: translate(-50%, -50%);
              ">
            Water
          </h1>
        </div>
        <div class="img" style="position: relative" style="position: relative">
          <a href="login.php">
            <img
              src="https://images.unsplash.com/photo-1506869640319-fe1a24fd76dc?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              width="400" height="250" alt="" />
          </a>
          <h1 style="
                color: #fff;
                position: absolute;
                top: 50%;
                font-weight: 600;
                font-size: 1.5vw;
                left: 50%;
                transform: translate(-50%, -50%);
              ">
            Get Involved
          </h1>
        </div>
      </div>
    </div>
    <div class="contact" style="
          height: 40vh;
          display: flex;
          flex-direction: column;
          justify-content: space-around;
          align-items: center;
        ">
      <h1 style="font-size: 3vw; color: #27348b">Contact Us</h1>
      <p style="font-size: 1.3vw; color: #222">
        If you have any queries, please reach out to our Sustainability team.
      </p>
      <div class="mails" style="display: flex; justify-content: space-between; width: 40vw">
        <div class="mail" style="
              display: flex;
              flex-direction: column;
              align-items: center;
              gap: 1vw;
              justify-content: space-between;
            ">
          <div class="rop">
            <i class="ri-mail-fill" style="color: #27348b; font-size: 4vw"></i>
          </div>
          <a style="color: #222; font-weight: 600" href="mailto:Sustainability@dsi.edu">Sustainability@dsi.edu</a>
        </div>
        <div class="newsletter" style="
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: space-between;
            ">
          <div class="rop">
            <i class="ri-news-line" style="color: #27348b; font-size: 4vw"></i>
          </div>
          <a style="color: #222; font-weight: 600" href="registration.php">Sign Up for NewsLetter</a>
        </div>
      </div>
    </div>
    <div class="footer" style="
          height: 15vh;
          background-color: #27348b;
          display: flex;
          align-items: center;
          justify-content: center;
        ">
      <img src="assets/dsulogo.png" width="300" alt="" />
    </div>
  </div>
</body>

</html>