<!DOCTYPE html>
<html>
<head>

    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--fin meta-->

    <!--liens-->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <!--fin des liens-->

    <title>Maths moi so</title>

</head>
<body>

    <!--Barre de navigation-->
    <nav>
        <?php include("nav.php");
        ?>
    </nav>
    <!--Fin de la barre de navigation-->

    <!--Header-->
    <header>
        <?php include("header.php");
        ?>
    </header>
    <!--Fin Header-->

    <!--Section-->
    <section class="main">
        <?php include("section.php");
        ?>
    </section>
    <!--Fin de section-->
    <section class="video">
        <div class="contourvid">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tc9wvbYuZts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <!--Pied de page-->
    <footer>
        <?php include("footer.php");
        ?>
    </footer>
    <!--Fin du Pied de page-->

</body>
</html>