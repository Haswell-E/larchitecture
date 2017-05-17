<?php
/**
 * Created by PhpStorm.
 * User: zakar
 * Date: 16/05/2017
 * Time: 15:39
 */


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/revu.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les revues L'architecture</title>
</head>
<body>
<div class="haut">
<!-- <php include header.php ?>-->
<h1>Nos dernières parutions</h1>
    <h3 class="tri"><a href="#filtre_2">Trier par région</a></h3>
        <section  class="sous_filtre">
            <article>
                <figure>
                    <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                    <figcaption>
                        <h2>Martinique</h2>
                        <p>Revue n°205 - 2017</p>
                        <h3>Lire en ligne</h3>
                    </figcaption>
                </figure>
            </article>
            <article>
            <figure>
                <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                <figcaption>
                    <h2>Ile de France</h2>
                    <p>Revue n°206 - 2017</p>
                    <h3>Lire en ligne</h3>
                </figcaption>
            </figure>
        </article>
        <article>
            <figure>
                <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                <figcaption>
                    <h2>Bretagne</h2>
                    <p>Revue n°205 - 2017</p>
                    <h3>Lire en ligne</h3>
                </figcaption>
            </figure>
        </article>
        <article>
            <figure>
                <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                <figcaption>
                    <h2>Normandie</h2>
                    <p>Revue n°205 - 2017</p>
                    <h3>Lire en ligne</h3>
                </figcaption>
            </figure>
        </article>
        <article>
            <figure>
                <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                <figcaption>
                    <h2>Région PACA</h2>
                    <p>Revue n°205 - 2017</p>
                    <h3>Lire en ligne</h3>
                </figcaption>
            </figure>
        </article>
            <article>
                <figure>
                    <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                    <figcaption>
                        <h2>Région PACA</h2>
                        <p>Revue n°205 - 2017</p>
                        <h3>Lire en ligne</h3>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                    <figcaption>
                        <h2>Région PACA</h2>
                        <p>Revue n°205 - 2017</p>
                        <h3>Lire en ligne</h3>
                    </figcaption>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="img-content/couv_284.jpg" alt="" class="filtre_img">
                    <figcaption>
                        <h2>Région PACA</h2>
                        <p>Revue n°205 - 2017</p>
                        <h3>Lire en ligne</h3>
                    </figcaption>
                </figure>
            </article>

            <div class="pagination">
            <ul class="page">
                <li><a href="#">Précédent</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Suivant</a></li>
            </ul>
            </div>

        </section>

</div>
<div class="opacity">
<section id="filtre_2">
    <h2>Parutions par région</h2>
    <div class="tri_par_region">
    <ul class="region">
        <h3 class="france">France Metropolitaine</h3>
        <li><a href="#">Alsace</a></li>
        <li><a href="#">Aquitaine</a></li>
        <li><a href="#">Auvergne</a></li>
        <li><a href="#">Bourgogne</a></li>
        <li><a href="#">Bretagne</a></li>
        <li><a href="#">Centre</a></li>
        <li><a href="#">Champagne-Ardenne</a></li>
        <li><a href="#">Corse</a></li>
        <li><a href="#">Franche-Conté</a></li>
        <li><a href="#">Ile de France</a></li>
        <li><a href="#">Languedoc-Roussilon</a></li>
        <li><a href="#">Limousin</a></li>
        <li><a href="#">Lorraine</a></li>
        <li><a href="#">Midi-Pyrénées</a></li>
        <li><a href="#">Nord Pas de Calais</a></li>
        <li><a href="#">Normandie</a></li>
        <li><a href="#">Pays de la Loire</a></li>
        <li><a href="#">Picardie</a></li>
        <li><a href="#">Poitou Charentes</a></li>
        <li><a href="#">Provence Alpes Cote d'Azur</a></li>
        <li><a href="#">Rhone Alpes</a></li>
    </ul>
        <ul class="collectivite">
            <h3 class="dom">Collectivité d'Outre-Mer</h3>
            <li><a href="#">Guadeloupe</a></li>
            <li><a href="#">Guyane</a></li>
            <li><a href="#">Martinique</a></li>
            <li><a href="#">Réunion</a></li>
            <li><a href="#">Mayotte</a></li>
            <li><a href="#">Saint Barthélemy</a></li>
            <li><a href="#">Saint Martin</a></li>
        </ul>
    <ul class="international">
        <h3 class="inte">Etranger</h3>
        <li><a href="#">Belgique/Belgie</a></li>
        <li><a href="#">Suisse</a></li>
    </ul>
    </div>
</section>
</div>
<!--<php include footer.php ?>-->
</body>
</html>
