<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale 1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> />
        <link rel="stylesheet" href="Assets/style.css" type="text/css" />
    </head>
<body>
    <?php include 'php_page/Header.php' ?>
<div class="main-society">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/Lève toi et code.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 112 pages</ol>
            <ol>Editeur : La Martinière</ol>
            <ol>Date de Sortie : 16 Mai 2018</ol>
            <ol>Collection : Non Fiction</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Lève toi et code</h2>
            <br>Editer aux éditions de la Martinière, et écrit par Rabbin des Bois. Je ne vous caches pas que ce livre m’a attiré au départ car je démarre une formation dans le développement web et je voulais avoir l’expérience d’un codeur autodidacte.
            Nous commençons le livre avec une lettre écrite par Rabbin des Bois, qui nous ai directement adressé. Il ne nomme pas le lecteur mais l’implique dans la narration du texte en utilisant le tutoiement à l’excès. Il va même jusqu’à mettre une majuscule à chaque utilisation du tutoiement dans la lettre.
            Il explique au fur et à mesure de la lecture son histoire, le pourquoi de sa « profession ». En effet, il attaque le deuxième chapitre en expliquant qu’il vient d’une cité HLM et qu’il souhaitait faire comme d’autres ( c’est-à-dire faire de beaucoup d’argent rapidement en un minimum de temps ). Après la réussite de sa première arnaque, il s’attaque sans le vouloir à un autre hacker, « K ». Ce dernier gèle alors les avoirs de son arnaque. Il récupéra ses « biens », lorsque il aura expliqué le but et la subtilité de ce montage. 
            Suite à ce repérage, l’auteur part s’installer chez son grand-père afin d’aborder la « Hack-life » comme il faut. L’auteur va être former par « K ». Il vont monter plusieurs coups ensemble et vendre leurs « idées » ( disons le plutôt des vols de données et de data). Grâce à cela, ils gagnent beaucoup d’argent facile.
            Et c’est tout ! Vous n’apprendrez pas grand-chose de plus sur la vie de Rabbin, c’est dommage.
            En tant que lecteur, je m’attendais à un peu plus je dois dire, mais ce n’est pas de la déception mais plutôt de la frustration de ne pas voir ou savoir ce que sais Rabbin. Parce que la réalité est là, car on connait le passé tumultueux de notre hacker, on pouvait s’attendre à un peu plus. Mais il relate aussi une réalité qu’on n’ose pas voir ou pas réalisé, selon les avis que notre vie entière peu être volée à tout moment et qu’il faut en prendre conscience le plus rapidement possible sinon nous courrons droit à la catastrophe !
            Je ne donnerai aucun conseil sur l’achat ou non de ce bouquin car il peut être très instructif comme très frustrant au final, donc acheter le si vous voulez avoir un avis impartial sur celui-ci et ne pas forcément vous fiez à mon avis !
            </p>
        <p class="postDate">Posté le 27 Juillet 2020</p>
        </div>
        </div>
    </div>
    <div> 
        <h3 class="text-center">Commentaires :</h3>
    <form method="POST">
        <input type="text" name="pseudo" placeholder="Votre Pseudo"/></br></br>
        <input type="textarea" size="150" name="commentaire" placeholder="Votre commentaire..."></textarea></br></br>
        <input type="submit" class="btn btn-warning" value="Poster votre commentaire" name="submit_commentaire"/></br></br>
    </form>
    </div>
    </div>
    <?php include 'php_page/Footer.php' ?>
</body>
</html>