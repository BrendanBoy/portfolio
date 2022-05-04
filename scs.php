<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/3f8b63cd88.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Brendan Boyle | SCS</title>
    <meta name="description" content="Overview of the Treehouse training website, Netmatters and the Scion Coallition Training Scheme.">
</head>
<body>
    <div id="overlay" onclick="closeNav()"></div>
    <nav class="mobile-nav">
        <div class="initials">
            <a href="/">BB</a>
        </div>
        <ul>
            <li><a href="/pages/about.html"><span class="link">About Me</span></a></li>
            <li><a href="/index.html#projects"><span class="link">My Portfolio</span></a></li>
            <li><a href="/pages/coding.html"><span class="link">Coding Examples</span></a></li>
            <li><a href="/pages/scs.html"><span class="link">SCS Scheme</span></a></li>
            <li><a href="/index.html#contact"><span class="link">Contact Me</span></a></li>
        </ul>
        <div class="socials">
            <!-- <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://uk.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a> -->
            <a href="https://github.com/BrendanBoy" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </nav>
    <nav class="main-nav">
        <div class="initials">
            <a href="/">BB</a>
        </div>
        <ul>
            <li><a href="/pages/about.html"><span class="link">About Me</span></a></li>
            <li><a href="/index.html#projects"><span class="link">My Portfolio</span></a></li>
            <li><a href="/pages/coding.html"><span class="link">Coding Examples</span></a></li>
            <li><a href="/pages/scs.html"><span class="link">SCS Scheme</span></a></li>
            <li><a href="/index.html#contact"><span class="link">Contact Me</span></a></li>
        </ul>
        <div class="socials">
            <!-- <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://uk.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a> -->
            <a href="https://github.com/BrendanBoy" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </nav>
    <header>
        <div class="header-bar">
            <button class="mobile-btn" onclick="openNav()">
                <i class="fas fa-bars"></i>
            </button>
            <div class="header-text">
                <h1>SCS Scheme</h1>
            </div>
        </div>
    </header>
    <main id="scs">
        <section id="intro">
            <h2>Introduction to Scion Coalition Scheme</h2>
            <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. The course is intensive and therefore the level of learning is extensive in a short space of time.</p>
        </section>
        <section id="treehouse">
            <h2>Treehouse</h2>
            <img class="treehouse-logo" src="/img/treehouse-icon.png" alt="">
            <p>Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress and see how much they've covered in certain areas.</p>
            <a href="https://teamtreehouse.com/brendanboyle4" target="_blank">
                <div class="profile">
                    <img src="/img/treehouse-avatar.jpg" alt="">
                    <div class="p-text">
                        My Profile<br>
                        Points: 10,157
                    </div>
                </div>
            </a>
        </section>
        <section id="netmatters">
            <h2>About Netmatters</h2>
            <img class="netmatters-logo-sm" src="/img/n-logo.png" alt="">
            <img class="netmatters-logo" src="/img/f-logo.png" alt="">
            <ul>
                <li>Established in 2008</li>
                <li>Norfolk's leading technology company</li>
                <li>Winner of the Princess Royal Training Award</li>
                <li>90+ staff, 3 locations accross Norfolk & Cambridgeshire</li>
                <li>Digital Marketing, Website & Software development & IT Support</li>
                <li>Broad spectrum of clients, working nationwide</li>
                <li>Operate to strict company values</li>
            </ul>
        </section>
    </main>
    <footer>
        <a href="#scs" class="scroll-btn">
            <i class="fas fa-angle-up"></i>
            <p>Back To Top</p>
        </a>
    </footer>
    <script src="/js/mobile-nav.js"></script>
</body>
</html>