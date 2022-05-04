<?php
$pageTitle = "Brendan Boyle | Portfolio";
include("inc/connect.php");
include("inc/head.php");
?>

    <div class="header-bar home-bar"></div>
    <button class="mobile-btn" onclick="openNav()">
        <i class="fas fa-bars"></i>
    </button>

    <?php include("inc/navigation.php"); ?>

    <header id="hero" class="hero">
        <div class="hero-image">
            <div class="hero-text">
                <h1 id="head-type">My Name is Brendan Boyle</h1>
                <p id="para-type">I'm a Web Developer</p>
            </div>
            <a class="scroll-btn" href="index.php#projects">
                <p>Scroll Down</p>
                <i class="fas fa-angle-down"></i>
            </a>
        </div>
    </header>

    <main>
        <section id="projects">
            <div class="project">
                <h3>Netmatters Reflection</h3>
                <a href="https://netmatters.brendan-boyle.netmatters-scs.co.uk" target="_blank"><div class="p-link">View Project <i class="fas fa-arrow-right"></i></div></a>
                <a href="https://netmatters.brendan-boyle.netmatters-scs.co.uk" target="_blank" class="project-img"><img src="img/nm-project.png" alt="Netmatters Homepage Project"></a>
                <div class="detail">This project was to rebuild the Netmatters homepage using HTML and Sass. <br>
                    There was a strong emphasis on responsive design and cross browser compatibility.</div>
            </div>
            <div class="project">
                <h3>JavaScript Reflection</h3>
                <a href="https://array.brendan-boyle.netmatters-scs.co.uk" target="_blank"><div class="p-link">View Project <i class="fas fa-arrow-right"></i></div></a>
                <a href="https://array.brendan-boyle.netmatters-scs.co.uk" target="_blank" class="project-img"><img src="img/array-project.png" alt="Array Project"></a>
                <div class="detail">The challenge here was to create a page that could assign multiple images to a given email address and store this information locally in the browser.</div>
            </div>
            <!-- <div class="project">
                <h3>Project Three</h3>
                <a href="#"><div class="p-link">View Project <i class="fas fa-arrow-right"></i></div></a>
                <a href="#" class="project-img"><img src="img/placeimg_640_480_tech-tiny.jpg" alt="Placeholder image"></a>
            </div>
            <div class="project">
                <h3>Project Four</h3>
                <a href="#"><div class="p-link">View Project <i class="fas fa-arrow-right"></i></div></a>
                <a href="#" class="project-img"><img src="img/placeimg_640_480_tech-tiny.jpg" alt="Placeholder image"></a>
            </div>
            <div class="project">
                <h3>Project Five</h3>
                <a href="#"><div class="p-link">View Project <i class="fas fa-arrow-right"></i></div></a>
                <a href="#" class="project-img"><img src="img/placeimg_640_480_tech-tiny.jpg" alt="Placeholder image"></a>
            </div>
            <div class="project">
                <h3>Project Six</h3>
                <a href="#"><div class="p-link">View Project <i class="fas fa-arrow-right"></i></div></a>
                <a href="#" class="project-img"><img src="img/placeimg_640_480_tech-tiny.jpg" alt="Placeholder image"></a>
            </div> -->
        </section>
        <section id="contact">
            <div class="contact-blurb">
                <div class="blurb">
                    <div>
                        <h2>Get in Touch</h2>
                        <p>If you'd like to get in touch, just fill out the form.</p>
                    </div>
                    <div>
                        <img class="mail" src="img/pexels-cottonbro-10202993-sm-tiny.jpg" alt="">
                    </div>
                </div>
                <p>I'd love to hear from you</p>
            </div>
            <form id="contact-form" action="index.php#contact" method="GET" novalidate>
                <div id="error-msg"></div>
                <div class="name">
                    <input class="form-field" type="text" name="first_name" id="first_name" placeholder="First Name*">
                    <input class="form-field" type="text" name="last_name" id="last_name" placeholder="Last Name*"><br>
                </div>
                <input class="form-field" type="email" name="mail" id="user_email" placeholder="Email Address*"><br>
                <input class="form-field" type="tel" name="phone" id="user_phone" placeholder="Telephone Number*">
                <input class="form-field" type="text" name="subject" id="subject" placeholder="Subject"><br>
                <textarea class="form-field" name="message" id="user_message" rows="10" placeholder="Message"></textarea><br>
                <span class="note"><small>Fields marked with an asterisk are mandatory</small></span>
                <input type="submit" value="Submit">
                
            </form>
        </section>
    </main>
    <footer>
        <a href="#hero" class="scroll-btn">
            <i class="fas fa-angle-up"></i>
            <p>Back To Top</p>
        </a>
    </footer>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="js/type.js"></script>
    <script src="js/mobile-nav.js"></script>
    <script src="js/form-validation.js"></script>
</body>
</html>