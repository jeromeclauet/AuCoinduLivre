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
<div class="main-romans">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src='../Assets/Image/La Place.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Poche : 113 pages</ol>
            <ol>Editeur : Gallimard</ol>
            <ol>Date de Sortie : 1983</ol>
            <ol>Collection : Folio Poche</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>La Place</h2>
            Il n'est jamais entré dans un musée, il ne lisait que Paris-Normandie et se servait toujours de son Opinel pour manger. Ouvrier devenu petit commerçant, il espérait que sa fille, grâce aux études, serait mieux que lui.
            Cette fille, Annie Ernaux, refuse l'oubli des origines. Elle retrace la vie et la mort de celui qui avait conquis se petite "place au soleil". Et dévoile aussi la distance, douloureuse, survenue entre elle, étudiante, et ce père aimé qui lui disait : "Les livres, la musique, c'es bon pour toi. Moi, je n'en ai pas besoin pour vivre."
            Ce récit dépouillé possède une dimension universelle.
            La place, où Annie Ernaux se fait la biographe de son père. Quel bel hommage, et quelle belle illustration du défunt ascenseur social !
            Annie Ernaux, biographe de son père, et partiellement d'elle-même par la même occasion.
            La place est un petit ouvrage (à peine plus de cent pages) qu'on peut qualifier de minimaliste : c'est parfois froid, sans vraiment de pathos… et pourtant Dieu sait si le sujet s'y prête, au pathos. S'il s'agit là d'un exercice de style, c'est parfaitement réussi ; et même si, habituellement, j'ai toujours du mal avec ce genre de prose, je dois avouer que là, elle m'a emmené…
            Grace à ce style épuré, je suppose ; car autrement, comment emmener le lecteur au terme d'une histoire comme il y en a tant : le père qui s'extrait de sa condition ouvrière pour tenir un café-épicerie, et la fille qui bénéficie de « l'ascenseur social de la République » ; brillantes études, enseignement, agrégation… Et au fur et à mesure que les échelons sont franchis, un écart qui se creuse avec son milieu social d'origine, inexorablement.
            Et puis… d'origine normande, comme l'auteur(e), j'ai connu dans mon enfance ce genre de café-épicerie, il y en avait deux près de chez moi ; c'était avant le Super-égé et la Coop, bien sûr. Rien que d'en parler ici, leur odeur particulière, un mélange de fumée de tabac, de produits d'entretien et de cidre « dur », servi « à la tireuse » me monte aux narines…et le souvenir de ma mère me disant : « va me chercher un paquet de chicorée chez P. ». Chez P. … C'était plus loin que chez H., mais c'était moins cher…
            Bref, un petit ouvrage au style particulier, mais qui m'a ouvert la porte des souvenirs d'enfance…avec parfois des expressions locales en usage chez mes grands parents comme « quart moins d'onze heures » pour onze heures moins le quart, probablement héritées de l'anglais.
            </p>
        <p class="postDate">Posté le 21 Juillet 2020</p>
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