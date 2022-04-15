<!DOCTYPE html>
<html>

<head>
    <?php include "php/head.php"; ?>
</head>

<body id="body">

    <!-- Welcome -->
    <div id="welcome">
        <?php include "php/welcome.php"; ?>
        <?php include "php/intro.php"; ?>
    </div>

    <!-- Navigation -->
    <div id="nav">
        <?php include "php/navV2.php"; ?>
    </div>

    <!-- Main (projects, about me, contact) -->
    <div id="main">

        <!-- About Me -->
        <div class="panel" id="aboutMe">
            <div class="mySpacer64"></div>
            <?php include "php/aboutMe.php"; ?>
            <div class="mySpacer64"></div>
        </div>

        <div class="mySpacer128"></div>

        <!-- Projects -->
        <div class="panel" id="projects">
            <div class="mySpacer64"></div>
            <?php include "php/projects.php"; ?>
            <div class="mySpacer64"></div>
        </div>

        <div class="mySpacer128"></div>

        <!-- Contact -->
        <div class="panel" id="contact">
            <div class="mySpacer64"></div>
            <?php include "php/contact.php"; ?>
            <div class="mySpacer64"></div>
        </div>

    </div>

    <!-- Footer -->
    <div id="footer">
        <?php include "php/footer.php"; ?>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>

    <!-- Email smpt -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="../js/sendEmail.js"></script>
    <script src="../js/formValidation.js"></script>


    <script src="../js/navJs.js"></script>
    <script src="../js/welcomeJs.js"></script>
    <script src="../js/scrollMagic.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/indexJs.js"></script>
    <script src="../js/mode1.js"></script>
    <script src="../js/mode2.js"></script>
    <script src="../js/mode3.js"></script>
    <script src="../js/mode4.js"></script>
    <script src="../js/aboutMeJs.js"></script>
    <script src="../js/projectJs.js"></script>

</body>

</html>