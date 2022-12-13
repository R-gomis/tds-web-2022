<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Richard GOMIS</title>
    <link rel="shortcut icon" href="Images/Logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar">
        <div class="profile">
            <img src="Images/Logo.jpeg" alt="profile">
            <h1>Richard GOMIS</h1>
        </div>
        <?php
        include ('menu.php');
        ?>
        <!--<ul>
            <li><a href="Portfolio.html">Accueil</a></li>
            <li><a href="#Apropos">A propos</a></li>
            <li><a href="#Compétences">Compétences</a></li>
            <li><a href="#Expérience">Expérience</a></li>
            <li><a href="#Formation">Formation</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>-->
    </nav>
    <section class="Accueil">
        <header>
            <h1>Bonjour , je m'appelle <span>Richard GOMIS</span>  (Futur) Developpeur web</h1>
        </header>
        <br><br><br>
    </section>
    <section id="Apropos">
        <h1>A propos</h1>
        <div class="Profil"> 
        <img src="Images/IMG_2.jpg" alt="a propos">
    </div>
        <div class="description">
            
            <h3>À Propos de moi</h3>
            <p>Bonjour , Je suis un étudiant agé de 23 ans en 1ere Année de BTS SIO (Services Informatiques aux Organisations) à Caen Sup Ste Ursule</p>
            <p>Pour plus d'informations, vous pouvez me contacter via la section contact qui se trouve en bas de la page. Vous pouvez également télécharger 
                <a href="CV Richard GOMIS.pdf" target="_blank">mon CV</a>si vous le souhaitez.</p>

        </div>
    </section>
    <section id="Compétences">
        <h1>Compétences</h1>
        <ul>
            <li>
                <h4>HTML</h4> 
                <p></p>
            </li>
            <li>
                <h4>CSS</h4> 
                <p></p>
            </li>
            <li>
                <h4>JAVASCRIPT</h4> 
                <p></p>
            </li>
            <li>
                <h4>PYTHON</h4> 
                <p></p>
            </li>
            <li>
                <h4>PHP</h4> 
                <p></p>
            </li>
        </ul>

    </section>
    <section id="Expérience">
        <h1>Expérience</h1>
    </section>
    <section id="Formation">
        <h1>Formation</h1>
        <ul>
        <li>
                <h4>Universite de Caen </h4> 
                <p>Licence Informatique Non Validée</p>
                <p>Début 2020 - Fin 2022</p>
            </li>
            <li>
                <h4>Caen Sup Ste Ursule</h4>
                <p>BTS SIO (Services Informatiques aux Organisations)</p> 
                <p>Début 2022 - En cours</p>
            </li>
        </ul>

    </section>
    <section id="Contact">
        <h1>Contact</h1>
        <div class="screen">
            <div class="carte">
                <img src="Images/IMG_7.jfif " alt="Icône">
                <h2>Richard GOMIS</h2>
                <p>Etudiant en 1ere Année de BTS SIO(Services Informatiques aux Organisations)</p>
                <div class="réseau">
                    <a href="https://www.linkedin.com/in/richard-gomis-a816aa247"><img src="Images/LinkedIn.png"alt="LinkedIn"></a>
                    <a href="https://github.com/R-gomis"><img src="Images/GitHub.png" alt="GitHub"></a>
                    <a href="mailto:r.gomis99@outlook.fr"><img src="Images/Gmail.png" alt="Gmail"></a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>