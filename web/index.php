<?php include('class.wedding.php'); ?>
<!DOCTYPE html>
<html class="no-js">
    <head lang="fr">
        <meta charset="UTF-8">
        <title></title>
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.min.css" />

        <meta name="keywords" content="" />
        
        <meta name="author" content="Marek Algoud (www.marekalgoud.fr)" />
        <title>04 juin 2016 - Salomé et Marek se marient !</title>
    </head>
    <body>
        <header class="header relative">
            <div class="header-scene windows-height relative" id="header-scene-1">
                <div class="content-wrapper w100">
                    <div class="deco">
                        
                    </div>
                    <div class="fl animated w50 txtcenter">
                        <h1>Marek</h1>
                        <div class="perso">
                            <img src="img/marek-surfeur.png" alt="">
                        </div>
                        <ul>
                            <li><span class="key-number">3504</span> écoutes de Francky Vincent</li>
                            <li><span class="key-number">93</span> litres de clairette bus</li>
                            <li><span class="key-number">180</span> 14 mois à l'étranger</li>
                        </ul>
                    </div>
                    <div class="fr animated w50 txtcenter">
                        <h1>Salomé</h1>
                        <div class="perso">
                            <img src="img/salome-sport.png" alt="">
                        </div>
                        <ul>
                            <li><span class="key-number">12507</span> litres de thé bus</li>
                            <li><span class="key-number">642</span> plans analysés</li>
                            <li><span class="key-number">254</span> Pots de nutella mangés</li>
                        </ul>
                    </div>
                    
                    <div class="clear pam">
                        <h2 class="txtcenter">Se Marient le 04 juin 2016 !</h2>
                    </div>
                </div>
            </div>
            <div class="header-scene windows-height relative" id="header-scene-2">
                <div class="content-wrapper">
                    <div class="result row">
                        <div class="animated content-left">
                            <ul>
                                <li><span class="key-number"><?php echo $wedding->getIntervalMeeting('%a')?></span> jours ensemble</li>
                                <li><span class="key-number">3</span> pays visités</li>
                                <li><span class="key-number">1</span> chats</li>
                            </ul>
                        </div>
                        <div class="perso w30">
                            <img src="img/marek-salome.png" alt="">
                        </div>
                        <div class="animated content-right">
                            <ul>
                                <li><span class="key-number">42</span> poissons</li>
                                <li><span class="key-number">50</span> leçons de Salsa</li>
                                <li><span class="key-number">1000</span> projets plein la tête</li>
                            </ul>
                        </div>
                        </div>
                        <div>
                        <div class="pam pt0">
                            <h2 class="txtcenter">Il va falloir encore patienter pendant : </h2>
                        </div>
                        <div class="countdown inbl">
                            <div class="year inbl">
                                <span class="title">année</span>
                                <span class="result"><?php echo $wedding->getIntervalWedding('%y')?></span>
                            </div>
                            <div class="month inbl">
                                <span class="title">mois</span>
                                <span class="result"><?php echo $wedding->getIntervalWedding('%m')?></span>
                            </div>
                            <div class="day inbl">
                                <span class="title">jours</span>
                                <span class="result"><?php echo $wedding->getIntervalWedding('%d')?></span>
                            </div>
                            <div class="hour inbl">
                                <span class="title">heures</span>
                                <span class="result"><?php echo $wedding->getIntervalWedding('%h')?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-scene windows-height relative" id="header-scene-3">
                <div class="content-wrapper">
                <div class="w50 center pal" id="confirm">
                    <h1>Pour continuer sur le site, merci de saisir le code reçu sur votre carton d'invitation</h1>
                    <form method="post" action="index.php" class="form">
                        <p>
                            <input type="text" class="w60" title="code" placeholder="le code reçu sur votre carton d'invitation" name="code" id="confirm-code" required>
                            <input type="submit" class="submit w30" value="envoyer">
                        </p>
                        <p>
                            <a href="#">Code perdu ?</a>
                        </p>
                        <p class="error">
                            Désolé, mais nous ne reconnaissons pas ce code. Merci de nous contacter si vous pensez qu'il s'agit d'une erreur.
                        </p>
                    </form>
                </div>
                </div>
            </div>
        </header>
        <main class="scroll-content" id="main"></main>
        <footer class="windows-height" id="footer">
            <div class="content-wrapper">
                <div class="pal">
                    <h1>Contacts / Informations :</h1>

                    <p>Si vous avez besoin de renseignement, n'hesitez pas à nous contacter à :
                        <a href="mailto:contact@salomeetmarek.fr">contact@salomeetmarek.fr</a>
                    </p>
                    <p>
                        Si vous souhaitez preparer une surprise quelques qu'elle soit pour le jour de notre mariage, merci de contacter l'un de nos témoins :
                    </p>
                    <ul>
                        <li>
                            <h2>Pascal Ruiz</h2>
                            <p>email : </p>
                        </li>
                        <li>
                            <h2>Rémy Paille</h2>
                            <p>email : </p>
                        </li>
                        <li>
                            <h2>Karen Waton</h2>
                            <p>email : </p>
                        </li>
                        <li>
                            <h2>Véronique Rigaux</h2>
                            <p>email : </p>
                        </li>
                        <li>
                            <h2>Pascal Ruiz</h2>
                            <p>email : </p>
                        </li>
                        <li>
                            <h2>Rémy Paille</h2>
                            <p>email : </p>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="js/global.min.js"></script>
    </body>
</html>