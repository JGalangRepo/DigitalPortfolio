<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://use.fontawesome.com/092e98dd01.js"></script>
    <title> Portfolio | Home </title>
  </head>
  <body>
    
    <?php include './helper/home_navbar.php'; ?>
    <div class="container" id="intro">
        <h5>
          Hello, I am
        </h5>
          <h3 class="typing"></h3>
        <h6>
          and I'm a BSIT Student
        </h6>
        <div class="container" id="buttonSelection">
          <a href="#aboutMe" class="btn btn-info aboutMe" id="textAboutMe"> About Me </a>
          <a href="#hotIssues" class="btn btn-info hotIssues" id="textHotIssues"> Hot Issues </a>
          <a href="#studentsHighlight" class="btn btn-info studentHL" id="textStudentsHighlight"> Students Highlight </a>
        </div> 
    </div>

    <div class="container text-center aboutMeContainer" id="aboutMe">
        <h5 id="myName">
          Jairus Galang
        </h5>
        <h5 id="currentCareer">
          BSIT Student / Aspiring Full-Stack Web Developer
        </h5>
        <div class="container" id="imageResizing">
            <img src="./images/JGalang.jpg" class="img-responsive rounded-circle containerImage" height="250" width="250" alt="My Picture">
        </div>
        <p id="paragraphAboutMyself" class="zoom">
          Hello, I am Jairus Galang and I am 21 years old. I am currently taking BS Information Technology at University
          of Pangasian, I am pursuing Web Development and I am aspiring to be a Full Stack Web Developer. I do like exploring
          for Web Development, trying the new things and and working on something that I am struggling with. The world is pretty big
          so as our career path, explore things in the career that I am currently taking is a priveledge.
        </p>
        <div class="container">
          <h4 class="firstContainer" id="getInTouchAboutMe"> Want to know more about me? </h4>
          <div class="container" id="buttonSelection">
          <a href="#intro" class="btn btn-info landingPage" id="textIntro"> Intro Page </a>
          <a href="#hotIssues" class="btn btn-info hotIssues" id="textHotIssues"> Hot Issues </a>
          <a href="#studentsHighlight" class="btn btn-info studentHL" id="textStudentsHighlight"> Students Highlight </a>
        </div> 
        </div>
    </div>

    <div class="container text-center" id="hotIssues">   
    <h5 id="myName">
          DSC UPang Chapter
        </h5>
        <h5 id="currentCareer">
          Core Team of DSC UPang / Public Information Officer
        </h5>
        <div class="container" id="imageResizing">
            <img src="./images/08.png" class="img-responsive rounded-circle containerImage" height="270" width="270" alt="My Picture">
        </div> 
        <p id="paragraphAboutMyself" class="zoom">
          The biggest break or the hottest issue that I've ever had this year was that I was given the opportunity to join this prestigious 
          club, which is organized by Google. Due to the pandemic, I've learned a lot because of this club. Instead of sleeping and watching KDramas
          I learned how to manage my time and give time as well to the other things, like trying to join and organize an event, I tried attending
          webinars and getting certificate and meeting some DSC Students around this country.
        </p>
        <div class="container">
          <h4 class="firstContainer" id="getInTouchAboutMe"> What do you want to know next? </h4>
          <div class="container" id="buttonSelection">
          <a href="#intro" class="btn btn-info landingPage" id="textIntro"> Intro Page </a>
          <a href="#aboutMe" class="btn btn-info aboutMe" id="textAboutMe"> About Me </a>
          <a href="#studentsHighlight" class="btn btn-info studentHL" id="textStudentsHighlight"> Students Highlight </a>
        </div> 
        </div>
    </div>

    <div class="container text-center" id="studentsHighlight">
    <h5 id="myName">
          The Highlights of being a Student
        </h5>
        <h5 id="currentCareer">
          what are the highlights of my student life ?
        </h5>
        <div class="container" id="imageResizing">
            <img src="https://thumbs.dreamstime.com/b/programmer-coder-sitting-desk-working-computer-work-software-development-testing-programming-program-coding-office-141000047.jpg" class="img-responsive rounded-circle containerImage" height="270" width="270" alt="My Picture">
            <img src="https://thumbs.dreamstime.com/b/smiling-programmer-coder-businessman-worker-specialist-holding-watching-laptop-young-man-boy-teenager-student-remote-smiling-193201145.jpg" class="img-responsive rounded-circle containerImage" height="270" width="270" alt="My Picture">
        </div> 
        <p id="paragraphAboutMyself" class="zoom">
          There's no particular highlights/moments of me as a student (since I'm not good at socializing), Instead of highlights or the moments I'll just share what I've learned through the process.
          The main highlight of my student life is that I faced different/a lot of hardships that I thought I wouldn't  make it.
          All the efforts and the sleepless nights of coding, practicing and grinding.
          The sacrifices that I've done just to come this far is I think the real Highlight of my Student life and I am genuinely proud of myself.
        </p>
        <div class="container">
          <h4 class="firstContainer" id="getInTouchAboutMe"> What do you want to know next? </h4>
          <div class="container" id="buttonSelection">
          <a href="#intro" class="btn btn-info landingPage" id="textIntro"> Intro Page </a>
          <a href="#aboutMe" class="btn btn-info hotIssues" id="textAboutMe"> About Me </a>
          <a href="#hotIssues" class="btn btn-info hotIssues" id="textHotIssues"> Hot Issues </a>
        </div> 
        </div>
        
    </div>

    <div class="container-fluid" id="mirror">
        <div class="snsicons">
          <ul>
            <li><a href="https://www.facebook.com/JairusGalangx" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.twitter.com/galangjairus" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/jairusgalang" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
          </ul>
        </div>
        <div class="footer-bottom">
            <p> Copyright &copy; Jairus Galang, All Rights Reserved.</p>
        </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script src="main.js"> </script>
  </body>
</html>