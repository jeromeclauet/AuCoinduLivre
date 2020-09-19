<?php 
session_start();
include '../models/books.php';
include '../models/authors.php';
include '../models/articles.php';
include_once '../models/comments.php';
include_once '../controllers/commentsCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au Coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Assets/style.css" type="text/css" />
        <link rel="shorcut icon" type="image/logo" href="../Assets/Image/Logo 1.png" />
    </head>
<body>
    <?php include '../php_page/Header.php' ?>
<div class="main-society">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/Tout ce qu'il ne faut pas dire.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 256 pages</ol>
            <ol>Editeur : Plon</ol>
            <ol>Date de Sortie : 24 Mars 2016</ol>
            <ol>Collection : Hors Collection</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Tout ce qu'il ne faut pas dire</h2>
            <br>Editer aux éditions Plon et écrit par l’ancien numéro 3 de la gendarmerie nationale, le général de gendarmerie Bertrand Soubelet. Devant une commission parlementaire, le 28 décembre 2013, a énoncé les faits de manière claire, nette et précise montrant que le terrorisme et la radicalisation islamiste dans notre pays sont des questions n'ayant pas été appréciées à leur juste valeur et ce depuis trente ans. Cela ne commence pas avec François Hollande. Ayant dit la vérité, il a été écarté de son emploi de la direction des opérations et de l'Emploi de la gendarmerie, ainsi que de la conduite des gendarmes d'Outre-mer. Ce n'est pas un militant politique, il n'a pas d'ambitions quelconque, pas de désir à soutenir tel ou tel. Ce 24 mars sort son livre développant son propos chez Plon.
            Il outrepasse largement son devoir de réserve à géométrie variable selon que vous soyez de gauche ou de droite, mais après les manifestations des « Je suis Charlie » célébrant la liberté d'expression, n'est-elle pas devenue encore plus importante ? Elle est encore plus fondamentale y compris et surtout quand ce qui est exprimé contredit les lieux communs qui rassurent, les mièvreries ambiantes et padamalgamesques, les discours de l'excuse...
            Il dénonce le désengagement progressif, ne serait-ce que par les « économies » drastiques dans les moyens alloués, de l'Etat dans tous les domaines régaliens lui étant pourtant propres : l'Education et la Sécurité en particulier. C'est de là que naît la montée de l'influence néfaste des pires radicaux islamistes dans nombre de nos banlieues et au cœur des villes. Les institutions ont laissé consciemment le terrain libre aux fanatismes, aux haines cuites et recuites, ethniques ou religieuses. Après tout l'Islam radical constitue un excellent moyen de contrôle social des plus précaires. Et ce même si malgré tout les éducateurs et policiers continuent d'y mener comme ils le peuvent un travail remarquable mais qui ne suffira pas car les métastases sont beaucoup trop profondes.......Il évoque les politiques judiciaires désastreuses, apparemment idéologiques mais surtout budgétaires. Ce n'est pas précisément par laxisme que les peines sont moins lourdes ou le suivi des anciens taulards beaucoup moins contraignants mais surtout car cela coûte cher à l'Etat. Cette politique essentiellement comptable n'est pas décidée par nos dirigeants, ceux-ci n'étant que de simples exécutants, elle est mise en forme à la Commission de Bruxelles, à la direction de la Banque Européenne, au Parlement de Strasbourg et à Berlin chez madame Merkel et ses prédécesseurs, l'Allemagne assurant le « leadership » économique de l'Union Européenne. Et elle existe d'abord afin de rassurer la majorité des électeurs de Merkel, les retraités vivant sur leurs fonds de pension.
            Il ne s'arrête pas là. Car ce qui arrive n'est pas seulement de la responsabilité de l'Etat et des dirigeants, d'une politique extérieure qui aurait été désastreuse et cause de tout ce malheur sans que les citoyens n'y soient pour quoi que ce soit. Selon lui, la responsabilité est collective, elle est également la nôtre. Elle est le fruit de tous nos renoncements, nos lâchetés grandes et petites face à l'intégrisme, de notre aveuglement volontaire afin de conserver un confort matériel et intellectuel illusoire. Je songe à cet élu qui lors des attentats du 13 novembre regrettait que cela n'ait pas été des néo-nazis, cela aurait été tellement plus facile. Plutôt que de nous confronter au réel, nous préférons bien souvent nous bercer d'illusions, de belles phrases, voire même nous habituer au terrorisme.
            Bertrand Soubelet enfin annonce un combat long, au moins d'une vingtaine d'années, difficile, à moins que nous ne prenions enfin conscience et que nous relevions la tête, que nous la sortions du sable...
            </p>
        <p class="postDate">Posté le 27 Juillet 2020</p>
        </div>
        </div>
    </div>
    <div> 
    <div class="main-comment">
        <div class="container">
    <fieldset class="ti text-center">Espace Commentaire : </fieldset>    
        <form action="#" method="POST">
            <div class="text-center">
                <label for="username">Pseudo :</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Votre Pseudo"/>
                    <?php //formErrors qui affiche une erreur si le champ est mal rempli.
            if (isset($formErrors['username'])) { ?>
                <div class="text-danger"><?= $formErrors['username']?></div>
                   <?php }else{ ?>
                    <small id="username" class="form-text text-black">Merci de renseigner votre pseudo</small>
            <?php } ?>
                   </div>
            <div class="text-center">
                <label for="comment">Commentaire : </label>
                    <input type="textarea" class="form-control" name="comment" id="comment" placeholder="Votre commentaire..."></textarea>
                    <?php //formErrors qui affiche une erreur si le champ est mal rempli.
            if (isset($formErrors['comment'])) { ?>
                <div class="text-danger"><?= $formErrors['comment']?></div>
                   <?php }else{ ?>
                    <small id="comment" class="form-text text-black">Merci de renseigner votre commentaire</small>
            <?php } ?>
                   </div>
                   <div class="bu text-center">
                   <button class="btn btn-warning" type="submit" name="addComments">Ajouter votre commentaire</button>      
                   </div>
                </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../php_page/Footer.php' ?>