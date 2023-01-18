<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/image/arttherapie.svg"/>
    <link rel="apple-touch-icon" href="./assets/image/arttherapie.svg"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Changer le kit FontAwesome ici -->
    <script src="https://kit.fontawesome.com/26aa6b1341.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/js/js.js" defer></script>
    <title>Art thérapy</title>
</head>


<body>
    <header>
        <!-- Top header -->
        <div class="container-is-fluid" id="topNavigation">
            <div class="notification is-danger">
                <nav class="level">
                    <!-- Left side -->
                    <div class="level-left">
                        <div class="level-item">
                            <p class="subtitle is-4">
                                La singularité de chacun est prise en considération
                            </p>
                        </div>
                    </div>
                    <!-- Right side -->
                    <div class="level-right">
                        <p class="level-item">Chantal LUQUE</p>
                        <p class="level-item"><i class="fa-solid fa-phone"> : </i><a href="tel:06 09 82 71 74">06-09-82-71-74</a></p>
                    </div>
                </nav>
            </div>
        </div>
        <!--Barre de  Navigation-->
        <div class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <div class="navbar-item iconeWeb">
                    <!--logo-->
                    <span class="icon-text">
                        <span class="icon">
                            <img src="./assets/image/icone.png">
                        </span>
                        <h4 class="title is-4">Art Therapy</h4>
                    </span>
                </div>
                <!-- menu burger -->
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a href="#presentation" class="navbar-item">
                        Présentation
                    </a>
                    <a href="#contact" class="navbar-item">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- debut du main -->
        <div class="imageSection">
            <figure class="image is-3by1">
                <img src="./assets/image/art-therapy-section.jpg">
            </figure> 
        </div>
        <!--Presentation-->
        <div class="container-is-fluid">
            <div id="presentation" class="presentation">
                <h1 class="title">A propos de Moi</h1>
                <div class="container">
                        <div class="columns">
                            <div class="column is-one-quarter">
                                <figure class="image has-text-centered mr-4 imagePresentation">
                                    <img class="is-rounded" src="./assets/image/art-therapy3.jpg">
                                </figure>
                            </div>
                            <div class="column">
                                <div class="content">
                                Art-thérapeute, diplômée de la faculté de médecine et de pharmacologie de Poitiers.
                                Artiste avec une expérience forte du monde du social, je propose l’utilisation d’outils
                                artistiques comme moyens d’expression afin d’apporter un mieux-être à la personne en
                                difficulté,
                                en souffrance, une amélioration de sa qualité de vie.
                                Celui-ci peut ainsi contribuer à la construction ou à la reconnaissance de l’identité, à
                                l’expression de la personnalité et des émotions. Il peut favoriser la connaissance et
                                l’estime
                                de soi, la confiance en soi, voire le développement de l’autonomie, de la prise
                                d’initiative, de
                                la création et l’aboutissement de projets personnels. cela peut également améliorer les
                                capacités communicationnelles, relationnelles et sociales.
                                </div>
                            </div>
                        </div>
                    <hr>
                    <p><strong>Lieux d'intervention : </strong> à domicile <i class="fa-solid fa-house-user"></i> au cabinet à Poitiers <i class="fa-regular fa-hospital"></i> ou en institution.</p>
                </div>
            </div>
        </div>
        
        <!--activités-->
        <div class="container">
            <div id="activites" class="columns is-desktop is-justify-content-center has-text-centered">
            
                <div class="column">
                <figure>
                    <img src="./assets/image/image1.webp" alt="">
                    <h4 class="title is-4">Psychothérapie</h4>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</figcaption>
                </figure>
                </div>
                <div class="column">
                <figure>
                    <img src="./assets/image/image2.webp" alt="">
                    <h4 class="title is-4">Chagrin & perte</h4>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</figcaption>
                </figure>
                </div>
                <div class="column">
                <figure>
                    <img src="./assets/image/image3.webp" alt="">
                    <h4 class="title is-4">Coaching</h4>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</figcaption>
                </figure>
                </div>
                <div class="column">
                <figure>
                    <img src="./assets/image/image4.webp" alt="">
                    <h4 class="title is-4">Elocution</h4>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</figcaption>
                </figure>
                </div>
            </div>
        </div>
        <!--Image // Formulaire -->
        <div id="contact" class="columns is-justify-content-center has-text-centered">
            <div class="column">
                <img class="imgContact" src="./assets/image/art-therapy1.jpg" alt="">
            </div>
            <div id="contactForm" class="column">
                <form method="POST" action="mail.php" autocomplete="off">
                    <h1 class="title">Me contacter</h1>
                    <div class="field">
                        <label class="label">Votre Nom et prénom</label>
                        <div class="control">
                            <input name="nomClient" class="input" type="text" placeholder="Alex Smith" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Votre email</label>
                        <div class="control">
                            <input name="emailClient" class="input" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                placeholder=" alexsmith@gmail.com" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Votre message</label>
                        <div class="control">
                            <textarea name="body" class="textarea" placeholder="Sujet de votre demande" required></textarea>
                        </div>
                    </div>
                    <div class="field align-item-center">
                        <div class="control">
                            <button name="envoi" class="button is-danger is-link" type="submit" value="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
                <!--resultat Envoi-->
                <div id="envoyer" style="background-color: yellow; width:50%; margin:auto; margin-top:25px">
                    <?php
                        require_once './function.php';
                    ?>
                    <script src="./assets/js/affichage.js"></script>
                </div>
            </div>
        </div>
        <!--localisation -->
        <div class="localisation">
            <div class="container">
                <div class="columns"> 
                    <div class="column is-half has-text-centered imageLoca">
                    <figure class="image has-text-centered m-auto">
                        <img class="is-rounded" src="./assets/image/localisation.png">
                    </figure>
                    </div>
                    <div class="column is-half has-text-centered info">
                        <p class="subtitle is-2 titreInfo">
                            Informations
                        </p>
                        <p class="subtitle is-4">
                            <span> Nom et prenom :</span> Chantal Luque <br>
                            <span> Adresse :</span> 5, rue des Flageolles <br>
                            <span> Ville :</span> 86000 Poitiers <br>
                            <span> Téléphone :</span> 06 09 82 71 74 <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <footer class="footer has-text-centered">
            <p>
                <strong>2023 ©️ Chantal Luque || Tous droits réservés</strong>
            </p>
    </footer>
</body>

</html>