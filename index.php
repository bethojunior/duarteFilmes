<!-- 
    ----BYE BETHO JUNIOR;
    ----NÃO COPIE ESSA MERDA;
    ----01/12/2017 ;
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
    <a class="btnMail left btn-floating btn-large waves-effect waves-light" onclick="modalInfo()">
        ?
    </a>
        <div class="row">
            <div class="col l1"></div>
                <?php 
                    include("view/header.php");
                
                    echo "<div class='fundoCinza'>";
                        include("view/quemSomos.php");
                        include("view/video.php");
                    echo "</div>";
                
                    include("view/footer.php");

                    include("view/modalFooter.php");
                ?>
            <div class="col l1"></div>
        </div>
    


    <script src="Materialize/js/jquery-3.2.1.js"></script>
    <script src="Materialize/js/materialize.js"></script>
    <script src="js/functions.js"></script>
    <script>
        $('.dropdown-button').dropdown('open');
        $('.dropdown-button').dropdown('close');
    </script>
    <script>
    $(document).ready(function(){
    $('.modal').modal();
    });
    </script>
    </body>
</html>