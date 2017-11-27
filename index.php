<!-- 
    ---- BYE BETHO JUNIOR;
    ---- NÃO COPIE ESSA MERDA;
    ---- 01/12/2017 ;
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Anderson Duarte</title>
        <link href="imagens/logoComFundo.png" rel="icon" />
        <link href="Materialize/css/materialize.css" rel="stylesheet" />
        <link href="css/index.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Montserrat|Raleway" rel="stylesheet">
    </head>
    <body>
        <?php 
            include("view/header.php");
        
            echo "<div class='fundoCinza'>";
                include("view/quemSomos.php");
                include("view/video.php");
            echo "</div>";
        
            include("view/footer.php");
        ?>
    <script src="Materialize/js/jquery-3.2.1.js"></script>
    <script src="Materialize/js/materialize.js"></script>
    <script src="js/functions.js"></script>
    <script>
        $('.dropdown-button').dropdown('open');
        $('.dropdown-button').dropdown('close');
    </script>
    </body>
</html>