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
    <link rel="stylesheet" href="/css/prism.css">
    <title>Brendan Boyle | Coding</title>
    <meta name="description" content="Here are some coding examples from my work.">
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
                <h1>Coding Examples</h1>
            </div>
        </div>
    </header>
    <main id="coding">
        <section id="example-1" class="example">
            <h2>Netmatters Reflection</h2>
            <p>I wrote this piece of code to populate the CSS classes of the Service Card section of the <a href="https://netmatters.brendan-boyle.netmatters-scs.co.uk/#service-cards" target="_blank">Netmatters home page.</a></p>
            <pre>
                <code class="language-scss">
                    // Assigning the theme colours to variables
                    // to aid reuse throughout the project
                    $design: #926fb1;
                    $support: #4183d7;
                    $telecoms: #d64541;
                    $software: #67809f;
                    $marketing: #2ecc71;
                    $security: #f62459;

                    // Creating a map of the colour variables
                    $service-colours: (
                    "design": $design,
                    "support": $support,
                    "telecoms": $telecoms,
                    "software": $software,
                    "marketing": $marketing,
                    "security": $security,
                    );

                    // A mixin to create the icon backgrounds
                    @mixin circle-icon($dim) {
                        color: white;
                        border-radius: 50%;
                        text-align: center;
                        align-self: center;
                        width: $dim;
                        height: $dim;
                    }  

                    // Setting up the service cards
                    // An each loop iterating through 
                    // the colour map
                    @each $name, $colour in ($service-colours) {
                        // Using interpolation to assign 
                        // a class name using the map key
                        .#{$name} {
                            // Targeting the icon element using nesting
                            i {
                                // Calling the mixin
                                @include circle-icon(60px);
                                // Setting the colour to 
                                // the map value
                                background-color: $colour;
                                margin-bottom: 17px;
                                font-size: 23px;
                                line-height: 60px;
                            }
                            // Assigning the values for when
                            // the service card is hovered over 
                            // and the colours change
                            &:hover {
                                color: white;
                                background-color: $colour;
                                i, .btn {
                                color: $colour;
                                background-color: white;
                                }
                            }
                        }
                    }
                </code>
            </pre>
            <p>The code above is written in Sass (syntactically awesome style sheets), a CSS preprocessor.</p>
            <p>Sass extends on the CSS language using techniques like vaiables, loops, nesting, inheritance and mixins. These methods allow the creation of much more efficient code.</p>
            <p>In the example above, twenty seven lines of code define the each loop and mixin, when this is compiled it creates 120 lines of CSS rules.</p>
            <p>These rules define the appearance of the Service Cards and how the colours change when the element is hovered over with the mouse pointer.</p>
            <div class="card-images">
                <figure>
                    <img src="../img/Design-card.png" alt="Web Design Service Card">
                    <figcaption>The Design Service Card</figcaption>
                </figure>
                <figure>
                    <img src="../img/Design-card-hover.png" alt="Web Design Service Card, Highlighted">
                    <figcaption>The Design Service Card hover state</figcaption>
                </figure>
            </div>
        </section>
        <section id="example-2" class="example">
            <h2>Database Challenge</h2>
            <p>For this challenge I was given a choice of three data sets. Being a bit of a film buff I chose the one on movies, the table structure of this can be seen below. I decided to see if I could find the most popular film of the bussiest year.</p>
            <figure>
                <img src="../img/movie-database.png" alt="Movie Database">
                <figcaption>Movie Database table structure</figcaption>
            </figure>
            <p>I wrote a query that selects the year in which the most film releases were recorded and displays the titles of the films from this year. The query pulls in data from the rating table so that this subset can be sorted by rating.</p>
            <pre>
                <code class="language-sql">
                    SELECT 
                    mov_title AS "Title", 
                    dir_fname || ' ' || dir_lname AS "Director",
                    rev_stars AS "Rating",
                    mov_year AS "Year" 

                    FROM movie m
                    JOIN movie_direction md
                    ON m.mov_id = md.mov_id
                    JOIN director d
                    ON md.dir_id = d.dir_id
                    JOIN rating r
                    ON m.mov_id = r.mov_id

                    WHERE mov_year IN (
                        SELECT mov_year 
                        FROM movie
                        GROUP BY mov_year
                        ORDER BY COUNT(*) DESC
                        LIMIT 1
                    )

                    ORDER BY rev_stars DESC
                    ;
                </code>
            </pre>
            <p>The query also links to the director table, via movie_direction. The final output includes the film title, directors name, rating and year of release. I formatted the column headings to be a little more human-friendly. The result of my query can be seen in the table below. </p>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Director</th>
                        <th>Rating</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Princess Mononoke</td>
                        <td>Hayao Miyazaki</td>
                        <td>8.40</td>
                        <td>1997</td>
                    </tr>
                    <tr>
                        <td>Titanic</td>
                        <td>James Cameron</td>
                        <td>7.70</td>
                        <td>1997</td>
                    </tr>
                    <tr>
                        <td>Good Will Hunting</td>
                        <td>Gus Van Sant</td>
                        <td>4.0</td>
                        <td>1997</td>
                    </tr>
                    <tr>
                        <td>Boogie Nights</td>
                        <td>Paul Thomas Anderson</td>
                        <td>3.0</td>
                        <td>1997</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer class="code-foot">
        <a href="#coding" class="scroll-btn">
            <i class="fas fa-angle-up"></i>
            <p>Back To Top</p>
        </a>
    </footer>
    <script src="/js/prism.js"></script>
    <script src="/js/mobile-nav.js"></script>
</body>
</html>