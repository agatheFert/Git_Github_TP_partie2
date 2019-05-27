<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ordinateur iMac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- scroll -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Modèle site web Appel</title>
</head>

<body>
    <header class="header">
        <a href="index.html">
            <figure class="logo"> <img src="assets/images/apple.svg" alt="logo apple" title="Apple" class="responsive"> </figure>
        </a>
        
        
        <div id="hamburger">
            <div id="hamburger-content">
                <figure class="imac"> <img src="assets/images/imac.gif" alt="i mac"> </figure>
                <nav>
                    <ul>
                        <li><a href="mac.html">Mac</a></li>
                        <li><a href="ipad">iPad</a></li>
                        <li><a href="iphone">iPhone</a></li>
                        <li><a href="watch.html">Watch</a></li>
                        <li><a href="tv.html">TV</a></li>
                        <li><a href="music.html">Music</a></li>
                        <li><a href="assistance.html">Assistance</a></li>
                    </ul>
                </nav>
                 </div>
                <button id="hamburger-button">&#9776;</button>
                <div id="hamburger-sidebar">
                   
                    <div id="hamburger-sidebar-body"></div>
                </div>
                <div id="hamburger-overlay"></div>
           
        </div>
        
        
    </header>
    <main>
        <section>
            <hgroup>
                <!-- la balise hgroup est utilisé pour grouper que des basiles H -->
                <h1 class="top">iMac</h1>
                <h2 class="top2">Un si beau monstre.</h2> </hgroup>
            <!-- Anim FLIP -->
            <div class="all-flip">
                <div class="contain-flip">
                    <figure class="p1 flip" id="bas">
                        <div class="animation"> <img src="assets/images/imac-p1.jpg" alt="imac"> </div>
                    </figure>
                    <p class="bas1 flip">L’iMac, un monstre ? De puissance, c’est certain. De beauté, aussi. C’est d’ailleurs toute l’idée sur laquelle il repose depuis le début : transformer l’utilisation d’un ordinateur de bureau en une fabuleuse expérience, en intégrant des technologies puissantes et faciles à utiliser dans un élégant design tout‑en‑un. Et cette fois, le nouvel iMac va encore plus loin. Non seulement il est équipé de processeurs dernier cri, de prodigieux outils, d’une mémoire plus rapide et d’une carte graphique impressionnante, mais tous ces atouts sont mis en valeur par l’écran Retina le plus lumineux et le plus spectaculaire jamais vu sur un Mac. Il a tout, en encore plus puissant. <a href="">Commander</a> </p>
                </div>
            </div>
            <!-- FIN Anim FLIP -->
        </section>
        <section>
            <hgroup>
                <h2 class="left gris top">&Eacute;cran Retina</h2>
                <h2 class="left top2">En un mot, wow.</h2> </hgroup>
            <figure class="p2 left1"> <img src="assets/images/imac-p2.jpg" alt="imac"> </figure>
            <p class="cote right1">Grâce à son processeur Intel Core de huitième ou neuvième génération et à sa carte graphique hautes performances dernier cri, l’iMac est plus rapide que jamais. Bien entendu, le stockage n’est pas en reste, puisque chacun des deux modèles est équipé d’un Fusion Drive rapide et spacieux. Et vous pouvez même configurer l’iMac avec un SSD pouvant atteindre 2 To. En résumé, vous pouvez faire tout ce que vous aimez, à vitesse grand V.</p>
        </section>
        <section class="grande">
            <article>
                <header>
                    <h2 class="top">Couleurs éclatantes. Limite hypnotisantes.</h2> </header>
                <p class="right1">Disponible en 4K ou en 5K, deux impressionnantes résolutions, l’écran Retina brille de tous ses feux sur l’iMac. Avec un milliard de couleurs et une luminance de 500 nits, l’image est bluffante. Quant au texte, il est clairement d’une netteté incomparable. Les films et les séries dont tout le monde parle sont mis en valeur de manière magistrale, tandis que les graphismes des jeux offrent un niveau de détail inouï. Hallucinant ? Non, c’est tout simplement le meilleur écran Retina jamais conçu.</p>
                <figure class="small bas1"> <img src="assets/images/small-mac.jpg" alt="petit mac">
                    <figcaption>Écran Retina 4K 21,5 pouces</figcaption>
                </figure>
                <figure class="big" id="bas"> <img src="assets/images/big-mac.jpg" alt="gros mac">
                    <figcaption>Écran Retina 5K 27 pouces</figcaption>
                </figure>
            </article>
        </section>
        <section class="video">
            <video controls loop muted poster="assets/images/user.jpg">
                <source src="assets/video/Motion_Design.mp4" type="video/mp4">
                <source src="assets/video/Motion_Design.webm" type="video/webm">
                <source src="assets/video/Motion_Design.ogg" type="video/ogv"> </video>
            <h2 id="sv" class="bas1">Une palette de couleurs plus vraies que nature.</h2>
            <p class="sv bas1">Le monde regorge de couleurs spectaculaires. L’iMac vous les sert sur un plateau. Son écran Retina utilise une gamme de couleurs P3 qui privilégie des LED au phosphore rouge et vert sophistiquées aux dépens des LED blanches standard. Mieux réparties, les trois couleurs – rouge, vert et bleu – affichent les nuances du monde réel de manière plus précise et plus équilibrée. Vos photos et autres contenus n’ont jamais été aussi réalistes.</p>
        </section>
        <section class="offres">
            <article class="cgv"><a href="#">En savoir plus &#62;</a></article>
            <article class="cgv1"><a href="#">En savoir plus &#62;</a></article>
            <article class="cgv2"><a href="#">En savoir plus &#62;</a></article>
            <article class="cgv3"><a href="#">Chatter en ligne &#62;</a></article>
        </section>
        <section class="liste">
            <ol>
                <li>Tests réalisés par Apple en février 2019 sur des prototypes d’iMac 21,5 pouces équipés d’un processeur Intel Core i7 hexacœur cadencé à 3,2 GHz avec 32 Go de RAM et des prototypes d’iMac 27 pouces équipés d’un processeur Intel Core i9 8 cœurs cadencé à 3,6 GHz avec 64 Go de RAM ; et sur des iMac 21,5 pouces prêts à la commercialisation équipés d’un processeur Intel Core i7 quadricœur cadencé à 3,6 GHz avec 32 Go de RAM et des iMac 27 pouces prêts à la commercialisation équipés d’un processeur Intel Core i7 quadricœur cadencé à 4,2 GHz avec 64 Go de RAM. Tests réalisés à l’aide d’Autodesk Maya 2019 et d’une scène de 399,6 Mo. Les tests de performances sont menés sur des ordinateurs spécifiques et ne donnent qu’une indication approximative des performances de l’iMac.</li>
                <li>Tests réalisés par Apple en février 2019 sur des prototypes d’iMac 21,5 pouces équipés d’un processeur Intel Core i7 hexacœur cadencé à 3,2 GHz avec 32 Go de RAM et une carte graphique Radeon Pro Vega 20 avec 4 Go de VRAM et des prototypes d’iMac 27 pouces équipés d’un processeur Intel Core i9 8 cœurs cadencé à 3,6 GHz avec 64 Go de RAM et une carte graphique Radeon Pro Vega 48 avec 8 Go de RAM ; et sur des iMac 21,5 pouces prêts à la commercialisation équipés d’un processeur Intel Core i7 quadricœur cadencé à 3,6 GHz avec 32 Go de RAM et une carte graphique Radeon Pro 560 avec 4 Go de VRAM et des iMac 27 pouces prêts à la commercialisation équipés d’un processeur Intel Core i7 quadricœur cadencé à 4,2 GHz avec 64 Go de RAM et une carte graphique Radeon Pro 580 avec 8 Go de VRAM. Testé avec DaVinci Resolve Studio 15 en utilisant 14 effets courants et un projet UHD de 10 secondes à une résolution de 3 840 x 2 160 et à une fréquence de 24 images par seconde. Les tests de performances sont menés sur des ordinateurs spécifiques et ne donnent qu’une indication approximative des performances de l’iMac.</li>
                <li>Tests réalisés par Apple en février 2019 sur des prototypes d’iMac 21,5 pouces équipés d’un processeur Intel Core i7 hexacœur cadencé à 3,2 GHz avec 32 Go de RAM et des prototypes d’iMac 27 pouces équipés d’un processeur Intel Core i9 8 cœurs cadencé à 3,6 GHz avec 64 Go de RAM ; et sur des iMac 21,5 pouces prêts à la commercialisation équipés d’un processeur Intel Core i7 quadricœur cadencé à 3,6 GHz avec 32 Go de RAM et des iMac 27 pouces prêts à la commercialisation équipés d’un processeur Intel Core i7 quadricœur cadencé à 4,2 GHz avec 64 Go de RAM. Tests réalisés à l’aide de Logic Pro X 10.4.4 avec un projet comprenant 200 pistes d’un synthétiseur Sculpture. Les pistes individuelles ont été activées pendant la lecture jusqu’à ce que le processeur central soit surchargé. Les tests de performances sont menés sur des ordinateurs spécifiques et ne donnent qu’une indication approximative des performances de l’iMac.</li>
                <li>Tests réalisés par Apple en février 2019 sur des prototypes d’iMac 21,5 pouces équipés d’un processeur Intel Core i7 hexacœur cadencé à 3,2 GHz avec 32 Go de RAM et des prototypes d’iMac 27 pouces équipés d’un processeur Intel Core i9 8 cœurs cadencé à 3,6 GHz avec 64 Go de RAM ; et sur des iMac 21,5 pouces prêts à la commercialisation équipés d’un processeur Intel Core i7 quadricœur cadencé à 3,6 GHz avec 32 Go de RAM et des iMac 27 pouces prêts à la commercialisation équipés d’un processeur Intel Core i7 quadricœur cadencé à 4,2 GHz avec 64 Go de RAM. Tests réalisés à l’aide de Xcode 10.1 (10B61). Les tests de performances sont menés sur des ordinateurs spécifiques et ne donnent qu’une indication approximative des performances de l’iMac.</li>
            </ol>
        </section>
        <section class="form">
            <form action="contact.php" method="post">
                <div class="table">
                    <div class="gauche">
                        <label for="nom" class="titre">Nom</label>
                        <label for="prenom" class="titre">Prenom</label>
                        <label for="email" class="titre">Email</label>
                        <label for="tel" class="titre">Telephone</label>
                        <label for="choix" class="titre">Votre choix</label>
                        <label for="message" class="titre">Message</label>
                    </div>
                    <div class="droite">
                        <div class="zone">
                            <input type="text" name="nom" required> </div>
                        <div class="zone">
                            <input type="text" name="prenom" required> </div>
                        <div class="zone">
                            <input type="email" name="email" id="email" required> </div>
                        <div id="message"> </div>
                        <div class="zone">
                            <input type="tel" name="tel"> </div>
                        <select name="choix">
                            <option value="La demande est : ">HOMME</option>
                            <optgroup class="bleu">
                                <option value="">Choix 1</option>
                                <option value="">Choix 2</option>
                                <option value="">Choix 3</option>
                                <option value="">Choix 4</option>
                                <option value="">Choix 5</option>
                            </optgroup>
                            <option value="La demande est : ">FEMME</option>
                            <optgroup class="rouge">
                                <option value="">Choix 1</option>
                                <option value="">Choix 2</option>
                                <option value="">Choix 3</option>
                                <option value="">Choix 4</option>
                                <option value="">Choix 5</option>
                            </optgroup>
                        </select>
                        <div class="zone">
                            <textarea name="message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="bas">
                            <input type="radio" name="age" value="10-15" class="radio"> 10-15 ans
                            <input type="radio" name="age" value="15-20" class="radio"> 15-20 ans
                            <input type="radio" name="age" value="20-25" class="radio"> 20-25 ans </div>
                    </div>
                    <div class="bas">
                        <input type="checkbox" name="ok" value="valide" checked class="radio"> J'ai lu et accepte les conditions g&eacute;n&eacute;rales.
                        <br>
                        <input type="checkbox" name="pub" value="new" class="radio"> recevoir la newsletter </div>
                    <div class="bas">
                        <input type="submit" name="submit" value="Envoyer" class="button"> </div>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <div class="footBar">
            <figure class="logos"> <img src="assets/images/apple.svg" alt="" class="responsive2"> </figure> <span class="symbole">&#x3009;</span> <a href="" class="mac">MAC</a> <span class="symbole">&#x3009;</span> <a href="" id="imac">iMAC</a>
            <div class="rs">
                <ul class="toto">
                    <h4>S'informer et acheter</h4>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">iPad</a></li>
                    <li><a href="#">iPhone</a></li>
                    <li><a href="#">Watch</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">iTunes</a></li>
                    <li><a href="#">HomePod</a></li>
                    <li><a href="#">iPod touch</a></li>
                    <li><a href="#">Accessoires</a></li>
                    <li><a href="#">Cartes Cadeaux</a></li>
                </ul>
                <ul class="toto">
                    <h4>Apple Store</h4>
                    <li><a href="#">Trouver un Apple Store</a></li>
                    <li><a href="#">Genius Bar</a></li>
                    <li><a href="#">Today at Apple</a></li>
                    <li><a href="#">Stage d'été Apple</a></li>
                    <li><a href="#">App Apple Store</a></li>
                    <li><a href="#">Produits reconditionnés et<br> soldés</a></li>
                    <li><a href="#">Financement</a></li>
                    <li><a href="#">Apple Trade In</a></li>
                    <li><a href="#">&Eacute;tat de votre commande</a></li>
                    <li><a href="#">Aide à l'achat</a></li>
                </ul>
                <ul class="toto">
                    <h4>Pour l'&Eacute;ducation</h4>
                    <li><a href="#">Apple et l'&Eacute;ducation</a></li>
                    <li><a href="#">Acheter pour l'université</a></li>
                    <br>
                    <h4>Pour les entreprises</h4>
                    <li><a href="#">Apple et les entreprises</a></li>
                    <li><a href="#">Acheter pour votre entreprise</a></li>
                    <br>
                    <h4>Pour la santé</h4>
                    <li><a href="#">Apple dans le secteur de la<br>santé</a></li>
                </ul>
                <ul class="toto">
                    <h4>Compte</h4>
                    <li><a href="#">Gérer votre identifiant Apple</a></li>
                    <li><a href="#">Compte Apple Store</a></li>
                    <li><a href="#">iCloud</a></li>
                    <br>
                    <h4>Valeur d'Apple</h4>
                    <li><a href="#">Accessibilité</a></li>
                    <li><a href="#">Environnement</a></li>
                    <li><a href="#">Confidentialité</a></li>
                    <li><a href="#">Résponsabilité des fournisseurs</a></li>
                </ul>
                <ul class="toto">
                    <h4>&Agrave; propos d'Apple</h4>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Direction d'Apple</a></li>
                    <li><a href="#">Travailler chez Apple</a></li>
                    <li><a href="#">Garantie</a></li>
                    <li><a href="#">Investisseurs</a></li>
                    <li><a href="#">&Eacute;v&egrave;nements</a></li>
                    <li><a href="#">Création d'emplois en Europe</a></li>
                    <li><a href="#">Contacter Apple</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
</body>

</html>