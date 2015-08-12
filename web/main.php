<?php include('class.wedding.php'); ?>
<?php 
$root = simplexml_load_file('guest.xml');
$guest = $root->xpath('//guest[@code="'.$_POST['code'].'"]');

if($guest) { ?>
<?php $guest=$guest[0]; ?>
<div class="background">
<div id="background-scene-1"></div>
<div id="background-scene-2"></div>
<div id="background-scene-3"></div>
<div id="background-scene-4"></div>
<div id="background-scene-5"></div>
<div id="background-scene-6"></div>
<div id="background-scene-7"></div>
<div id="background-scene-8"></div>
</div>
<div class="scene-wrapper">
    <nav role="navigation" class="nav windows-height small-hidden">
        <div class="content-wrapper">
            <a href="#confirm" class="confirm">Confirmez votre presence</span>
            <ul>
                <li><a href="#scene-1" class="tooltip"><i>o</i><span class="tooltip-content">Mariage à la Mairie</span></a></li>
                <li><a href="#scene-2" class="tooltip"><i>o</i><span class="tooltip-content">Jour J</span></a></li>
                <li><a href="#scene-3" class="tooltip"><i>o</i><span class="tooltip-content">Comment venir en voiture</span></a></li>
                <li><a href="#scene-4" class="tooltip"><i>o</i><span class="tooltip-content">Comment venir en train</span></a></li>
                <li><a href="#scene-5" class="tooltip"><i>o</i><span class="tooltip-content">Hébergement</span></a></li>
                <li><a href="#scene-6" class="tooltip"><i>o</i><span class="tooltip-content">Dressing code</span></a></li>
                <li><a href="#scene-7" class="tooltip"><i>o</i><span class="tooltip-content">Quiz</span></a></li>
            </ul>
        </div>
    </nav>
    <section class="scene windows-height" id="scene-1">
        <div class="trigger"></div>
        <div class="content-wrapper">
            <div class="text fl w50 small-w100 relative" data-animate-property="left">
                <h2>Mariage à la mairie</h2>
                <div class="description">
                    Le mariage à la mairie se déroulera le vendredi avec les témoins et les proches uniquement (La mairie du 3ième n'est pas adaptée pour accueillir beaucoup de personnes)
                </div>
            </div>
            <div class="next">
                <a href="#scene-2"><i class="fa fa-angle-double-down"></i><span class="visually-hidden">suite</span></a>
            </div>
        </div>
    </section>
    <section class="scene windows-height" id="scene-2">
        <div class="trigger" id="trigger-2"></div>
        <div class="content-wrapper">
            <div class="text fl w50 small-w100 relative" data-animate-property="left">
                <h2>Le jour-J</h2>
                <div class="description">
                    <p>
                    Nous vous attendons au domaine de Jaillans à partir de 15h pour la cérémonie laïque.<br>
                    Déroulement de la journée :
                    </p>
                    <p>
                    15h30 : début de la cérémonie laïque
                    16h30 : photo / candy bar
                    18h : apéritif
                    20h : repas
                    23h : début de la soirée dansante !
                    </p>
                </div>
            </div>
            <div class="next">
                <a href="#scene-3">
                    <i class="fa fa-angle-double-down"></i>
                    <span class="visually-hidden">suite</span>
                </a>
            </div>
        </div>
    </section>
    <section class="scene windows-height" id="scene-3">
        <div class="trigger" id="trigger-3"></div>
        <div class="content-wrapper">
            <div class="text lf w50 small-w100 relative" data-animate-property="left">
                <h2>Comment venir en voiture ?</h2>
                <div class="description">
                    <p>
                    Nous vous conseillons fortement l'utilisation d'un GPS. En effet le domaine n'est pas très bien indiqué. Voici l'adresse à saisir :
                    <br>
                    Bastide de Jaillans<br>
                    XXXXXX<br>
                    26XXX Jaillans<br>
                    Si toutefois vous ne disposez pas d'un GPS ou si vous avez un caractère aventureux, voici les grandes directions à suivre :
                        Depuis Lyon (environ 1h):
                            Prendre l'autoroute A41 en direction de grenoble (péage 2€30)

                    </p>
                </div>
            </div>
            <div class="next">
                <a href="#scene-4">
                    <i class="fa fa-angle-double-down"></i>
                    <span class="visually-hidden">suite</span>
                </a>
            </div>
        </div>
    </section>
    <section class="scene windows-height" id="scene-4">
        <div class="trigger" id="trigger-4"></div>
        <div class="content-wrapper">
            <div class="text lf w50 small-w100 relative" data-animate-property="right">
                <h2>Comment venir en train ?</h2>
                <div class="description">
                    <p>
                    La gare Valence TGV / Alexian est à a peine 20min en voiture du Domaine. Nous pourrons donc organiser des navettes pour venir vous récupérer si vous nous communiquer <strong>assez tôt</strong> l'heure de votre arrivée en gare
                    </p>
                </div>
            </div>
            <div class="next">
                <a href="#scene-5"><i class="fa fa-angle-double-down"></i><span class="visually-hidden">suite</span></a>
            </div>
        </div>
    </section>
    <section class="scene windows-height" id="scene-5">
        <div class="trigger" id="trigger-5"></div>
        <div class="content-wrapper">
            <div class="text lf w60 small-w100 relative" data-animate-property="right">
                <h2>Hébergement</h2>
                <div class="description">
                    <p>
                    Nous avons spécialement choisi le domaine de la bastide pour ces nombreux couchages. Bien qu'assez sommaire, nous pouvons loger jusqu'à 56 personnes sur place ! Si vous souhaitez dormir sur place, nous vous demanderons un petite contribution financière. Les chambres sont des dortoirs allant de 4 à 12 places se répartissant ainsi :
                    </p>
                        <ul>
                            <li><strong>6</strong> chambres avec <strong>2</strong> lits doubes (20€ / pers., 30 € les 2 nuits)</li>
                            <li><strong>2</strong> chambres avec <strong>2</strong> lits doubles + <strong>2</strong> lits simples (15 € / pers., 20€ les 2 nuits)</li>
                            <li><strong>1</strong> chambres de <strong>8</strong> lits simples (12 € / pers., 15€ les 2 nuits)</li>
                            <li><strong>1</strong> chambres de <strong>12</strong> lits simples (12 € / pers., 15€ les 2 nuits)</li>
                           <li>... et la suite des mariés sur laquelle nous avons déjà mis une option ;)</li>
                        </ul>
                    <p>
                    </p>
                    <p>
                        Pour les plus téméraires, un couchage en tente est également possible sur le domaine (5€ la nuit)
                    </p>
                </div>
            </div>
            <div class="next">
                <a href="#scene-6">
                    <i class="fa fa-angle-double-down"></i>
                    <span class="visually-hidden">suite</span>
                </a>
            </div>
        </div>
    </section>
    <section class="scene windows-height" id="scene-6">
        <div class="trigger" id="trigger-6"></div>
        <div class="content-wrapper">
            <div class="text fl w60 small-w100 relative" data-animate-property="right">
                <h2>Dressing code</h2>
                <div class="description">
                    <p>
                    Choisissez une tenue dans laquelle vous vous sentez bien. Le thème de notre mariage sera autour des noeuds, si vous souhaitez rajouter un noeud dans vos cheveux ou sur votre tenue, ou porter un noeud papillon, vous serez pile-poil dans le thème :)
                    Au final, nous vous demandons juste :
                    </p>

                    <h3>Pour ces dames :</h3>
                    <ul>
                        <li>Pas tout en blanc : reservé à la Mariée</li>
                        <li>Pas tout en noir : nous célébrons un événements joyeux, alors mettons un peu de couleur !</li>
                        <li>Vous pouvez si vous voulez mettre un petit noeud dans vos cheveux ou sur votre robe.</li>
                    </ul>
                    <h3>Pour ces messieurs :</h3>
                    <ul>
                        <li>Portez un noeud papillon si vous en avez un</li>
                        <li>Portez des bretelles, si vous le souhaitez</li>
                        <li>Pas de jogging, pas de short (si vous avez trop chaud, une piscine est disponible sur le domaine pour vous rafraichir)</li>
                    </ul>
                </div>
            </div>
            <div class="next">
                <a href="#scene-7">
                    <i class="fa fa-angle-double-down"></i>
                    <span class="visually-hidden">suite</span>
                </a>
            </div>
        </div>
    </section>
    <section class="scene windows-height quiz" id="scene-7">
        <div class="trigger" id="trigger-7"></div>
        <div class="content-wrapper">
            <div class="text fl w100 relative" data-animate-property="left">
                <h2>Mais, nous connaissez vous si bien que ça ? faites le quiz !</h2>
                <div class="description">
                    <?php include('quiz.php') ?>
                </div>
            </div>
            <div class="next">
                <a href="#footer">
                    <i class="fa fa-angle-double-down"></i>
                    <span class="visually-hidden">suite</span>
                </a>
            </div>
        </div>
    </section>
    <section class="scene windows-height confirm" id="scene-8">
        <div class="trigger" id="trigger-8"></div>
        <div class="content-wrapper">
            <div class="text fl w100 relative" data-animate-property="left">
                <h2>Confirmer votre présence</h2>
                <form method="post" action="index.php" class="form">
                    <p class="name"><?php echo $guest->name?></p>
                    <div class="w50 fl prs">
                    <h3>Nous serons là pour :</h3>
                    <ul>
                        <?php if($guest->invited & wedding::CEREMONY) { ?>
                            <li><input type="checkbox" id="form-ceremony" name="presence" value="<?php echo wedding::CEREMONY?>"><label for="form-ceremony">Cerémonie / apéritif</label></li>
                        <?php } ?>
                        <?php if($guest->invited & wedding::LUNCH) { ?>
                            <li><input type="checkbox" id="form-lunch" name="presence" value="<?php echo wedding::LUNCH?>"><label for="form-lunch">Repas</label></li>
                        <?php } ?>
                        <?php if($guest->invited & wedding::SUNDAY) { ?>
                            <li><input type="checkbox" id="form-sunday" name="presence" value="<?php echo wedding::SUNDAY?>"><label for="form-sunday">Dimanche</label></li>
                        <?php } ?>
                    </ul>
                    </div>
                    <div class="w50 fr pls">
                    <h3>Nous serons :</h3>
                    <p>
                        <label for="confirm-nbAdult">Nombre d'adultes</label>
                        <select name="nbAdult" id="confirm-nbAdult">
                            <option value="0">0</option>
                            <option value="1" <?php if($guest->nbAdult == 1) {?>selected<?php } ?>>1</option>
                            <option value="2" <?php if($guest->nbAdult == 2) {?>selected<?php } ?>>2</option>
                        </select>
                    </p>
                    <p>
                        <label for="confirm-nbChildren">Nombre d'enfants</label>
                        <select name="nbAdult" id="confirm-nbChildren">
                            <option value="0">0</option>
                            <option value="1" <?php if($guest->nbChildren == 1) {?>selected<?php } ?>>1</option>
                            <option value="2" <?php if($guest->nbChildren == 2) {?>selected<?php } ?>>2</option>
                            <option value="3" <?php if($guest->nbChildren == 3) {?>selected<?php } ?>>3</option>                       
                        </select>
                    </p>
                    </div>
                    <?php if($guest->invited & wedding::SUNDAY) { ?>
                    <div>
                    <p><input type="checkbox" value="1" name="night" id="confirm-night"><label for="confirm-night">Nous souhaitons dormir sur place</label></p>
                    </div>
                    <?php } ?>
                    <div>
                        <h3>Remarques diverses (végétarien, alérgies particulières, etc...)</h3>
                        <textarea name="note" rows="6" cols="30"></textarea> 
                    </div>
                    <p>
                    <input type="submit" name="submit" value="confirmer">
                    </p>
                </form>
            </div>
            <div class="next">
                <a href="#footer">
                    <i class="fa fa-angle-double-down"></i>
                    <span class="visually-hidden">suite</span>
                </a>
            </div>
        </div>
    </section>
</div>
<?php } ?>