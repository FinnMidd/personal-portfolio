<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Finn Middleton Portfolio">
    <meta name="keywords" content="Middleton, Portfolio, Web Development, Photography, Programming, Programmer, Web Dev">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico">
    <title>Finn Middleton</title>

    <script defer src="https://kit.fontawesome.com/e17e3207d2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- ! Testing -->
    <!-- <div id="test"></div> -->
    
    <!-- Header Content -->

    <header id="header">
        <h1 class="logo"><a href="index.html" id="logo" class="logo">Finn Middleton</a></h1>
        <nav>
            <ul>
                <li><a href=#hero>HOME</a></li>
                <li><a href=#about>ABOUT</a></li>
                <li><a href="#services">PROJECTS</a></li>
                <li><a href="assets/FinnMiddleton_Resume.pdf" target="_blank" class="cta_buy">RESUME</a></li>
            </ul>
        </nav>
        <button id="menuBurger">|||</button>
    </header>
    
    <section id="mobileMenu">
        <div class="container">
            <a href="index.html">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#projects">PROJECTS</a>
            <a href="assets/FinnMiddleton_Resume.pdf" target="_blank">RESUME</a>
        </div>
    </section>

    <div id="spacer"></div>

    <!-- Hero Content -->
    
    <section id="admin">
        <article class="project">
            <h2>Oops</h>
            <hr>
            <br>
            <h1>Unexpected error</h1>
            <p>It seems you do not have access to this area.</p>
        </article>
    </section>

    <!-- Footer Content -->
    
    <footer id="footer">
        <div class="footer-links m-hide">
            <a href="#">Admin</a>
            <a href="sitemap.html">Sitemap</a>
            <a href="contact.html">Contact</a>
        </div>
        <div class="social-icons">
            <a href="https://github.com/finnmidd" target="_blank">
                <img src="images/icons/github-Icon.svg" alt="GitHub">
            </a>
            <a href="https://www.linkedin.com/in/finnmiddleton" target="_blank">
                <img src="images/icons/Linkedin-Icon.svg" alt="LinkedIn">
            </a>
            <a href="mailto:finnpmiddleton@gmail.com">
                <img src="images/icons/email-Icon.svg" alt="Email">
            </a>
        </div>
    </footer>

    <footer id="subFooter">
        <p>&copy; <?php echo date("Y"); ?> <a href="https://www.finnmiddleton.com">Finn Middleton</a>. All rights reserved.</p>
        
    </footer>

    <div class="hidden-section">
        <!-- Content for the hidden section -->
    </div>
</body>
</html>