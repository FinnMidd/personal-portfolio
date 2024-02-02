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
        <h1 class="logo"><a href="index.php" id="logo" class="logo">Finn Middleton</a></h1>
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

    <section id="about" class="">
        <!-- TODO: add hover icons on portrait -->
        <aside class="textBox">
            <h2 class="intro">Meet Finn</h2>
            <hr>
            <br>
            <p>Hi! I'm Finn, I'm a passionate young web developer with a keen interest in databases and back-end engineering.</p>
            <br>
            <p class="callout">Skilled in HTML, CSS, JavaScript, SQL & PHP</p>
        </aside>
        
        <div id="objContainer" class="">
            <div id="box1" class="colored-box"><img src="images/logos3D/Javascript-Logo.png" alt="javascript icon" class="floating-icon"></div>
            <div id="box2" class="colored-box"><img src="images/logos3D/Html-Logo.png" alt="html icon" class="floating-icon"></div>
            <div id="box3" class="colored-box"><img src="images/logos3D/Css-Logo.png" alt="html icon" class="floating-icon"></div>
            <div id="box4" class="colored-box"><img src="images/logos3D/Python-Logo.png" alt="python icon" class="floating-icon"></div>
            <img id="portrait" src="images/FinnPortrait.jpg" alt="Founder Portrait">
        </div>
        
    </section>

    <!-- Recent Projects -->

    <section id="services" class="">

        <aside class="textBox">
            <h2>Recent Projects</h2>
            <hr class="m-hide">
            <br>
            <p class="m-hide">Here are some of the most recent projects that I've been working on. It's everything from front-end to back, with a strong focus on interacting & building databases. Feel free to click on them to learn more!</p>
        </aside>

        <section id="collapsibleBox" class="">
            <div class="collapsible-container">
                <button class="collapsible">&nbsp;<i class="fa-solid fa-database"></i>&nbsp;&nbsp;&nbsp; Database Challenges</button>
                <div class="content">
                    <p>Built a collection of challenges that is designed to help users hone their skills in database management. It uses real-world scenarios & ensures a hands-on and immersive experience for any aspiring developers.<br><br><a href="https://github.com/FinnMidd/Database-Challenges"><em>Learn More</em> &#187;</a></p>
                </div>
            </div>
                
            <div class="collapsible-container">
                <button class="collapsible">&#8202;<i class="fa-solid fa-house-laptop"></i>&nbsp;&nbsp;&nbsp;Cabin Hire Website</button>
                <div class="content">
                    <p>Designed a user-friendly interface for the admins of a cabin-hire website. Allowing them to update cabin details & availability to ensure customers enjoy an up-to-date experience.<br><br><a href="https://github.com/FinnMidd/cabin-hire"><em>Learn More</em> &#187;</a></p>
                </div>
            </div>

            <div class="collapsible-container">
                <button class="collapsible">&nbsp;<i class="fa-solid fa-globe"></i>&nbsp;&nbsp;&nbsp; Personal Portfolio</button>
                <div class="content">
                    <p>Planned & developed a personal portfolio website using a blend of markup, php and styling. Demonstrating both my technical knowledge & creativity.<br><br><a href="https://github.com/FinnMidd/personal-portfolio"><em>Learn More</em> &#187;</a></p>
                </div>
            </div>
        </section>
        
    </section>

    <!-- Skills -->
    <!-- TODO -->


    <!-- Footer Content -->
    
    <footer id="footer">
        <div class="footer-links m-hide">
            <a href="#">Admin</a>
            <a href="#">Sitemap</a>
            <a href="#">Contact</a>
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