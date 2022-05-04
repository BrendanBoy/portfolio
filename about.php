<?php
$pageTitle = "Brendan Boyle | About";
include("inc/head.php");
include("inc/navigation.php");
?>

    <header>
        <div class="header-bar">
            <button class="mobile-btn" onclick="openNav()">
                <i class="fas fa-bars"></i>
            </button>
            <div class="header-text">
                <h1>About Me</h1>
            </div>
        </div>
    </header>
    <main id="about">
        <section id="profile">
            <h2>Personal Profile</h2>
            <p>I am a web developer based in the Cambridgeshire area.</p>
            <p>I have had a keen interest in technology from an early age: learning to program on Sinclair and Atari machines and building my own computers when that became affordable.</p>
            <p>I took a web design course at a local college and followed this up with three years of study through the Open University, with an emphasis on programming.</p>
            <p>I have always tried to utilise these skills in the workplace, whether it's updating or maintaining the companys website or managing the organisations social media presence.</p>
            <p>The largest project I have worked on to date was as a freelance programmer for Videotel, building test modules for an interactive training package for the maritime industry.</p>
            <p>Following redundancy at the end of 2020 I decided to further pursue my interest in web development, a field that allows me to combine my fascination with technology and my creative flair.</p>
            <p>To further this aim I have been participating in the <a href="scs.html#scs">Scion Coalition Scheme</a>, an intensive training program designed to fully prepare candidates to enter this industry.</p>
        </section>
    </main>
    <footer class="about-foot">
        <a href="#about" class="scroll-btn">
            <i class="fas fa-angle-up"></i>
            <p>Back To Top</p>
        </a>
    </footer>
    <script src="/js/mobile-nav.js"></script>
</body>
</html>