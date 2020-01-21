<?php 
    $title = 'Home';

    require 'header.php';

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=mywebsite;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    
?>   
    <main>
        <section class="home_page">
            <div class="name_tag_line">
                <h1>Developpeur Full Stack</h1>
                <h2>Etienne ZIEGELMEYER</h2>
            </div>    
        </section>
        <section class="presentation">
            <div class="pres_message">
                <h1>Bonjour je suis Etienne</h1>
                <p>Je suis developpeur web Junior.
                    J'ai fini ma formation de depeloppeur web en fin 2019.<br>
                    Je developpe essentiellement mes projets sur Symfony et WordPress.
                </p>
            </div>
        </section>
        <section>
            <div class="competencies">
                <div class="box">
                    <div class="column_front">
                    <div class="image">
                        <span style="font-size: 70px; color: Dodgerblue;"><i class="fab fa-css3"></i></span>
                    </div>
                    <h2>Front_End</h2>
                        <h3 class="font_color">Languages</h3>
                        <p>HTML, Javascript, CSS, Sass, Less</p>
                        <h3 class="font_color">Outils</h3>
                        <ul>
                            <li>Atom</li>
                            <li>Bootstrap</li>
                            <li>Codepen</li>
                        </ul>
                    </div>
                    <div class="column_back">
                        <div class="image">
                            <span style="font-size: 70px; color: Dodgerblue;"><i class="fas fa-code"></i></span>
                        </div>
                        <h2>Back_End</h2>
                        <h3 class="font_color">Languages</h3>
                        <p>PHP, Javascript, Java, SQL</p>
                        <h3 class="font_color">Outils</h3>
                        <ul>
                            <li>Visual Studio Code</li>
                            <li>PhpStorm</li>
                            <li>Github</li>
                            <li>Terminal</li>
                        </ul>
                    </div> 
                </div>
            </div>
        </section> 
        <section class="recent_work">
            <div class="project_title">
                <h1>Mes derniere realisations</h1>
            </div>
            <div class="projects">
                <div class="projet_box">
                    <div class="projet_img">
                        <img src="../public/assets/images/gameRulesWebSite.png" alt=""  width="400">
                    </div>
                </div>
                <div class="projet_name">
                    <h5>Game Rules</h5>
                </div>
            </div>
        </section>   
    </main>

<?php require 'footer.php';?>      
  


