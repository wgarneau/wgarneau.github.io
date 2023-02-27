<?php
if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "williamgarneau1999@gmail.com";
    $email_subject = "Portfolio";


    function died($error)
    {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if (!isset($_POST['nom']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }


    $first_name = $_POST['nom']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required

    $error_message = "";

    if (!($email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }


    if (strlen($first_name) >= 20) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }

    if (strlen($comments) < 5) {
        $error_message .= 'Votre message est trop petit pour être envoyé.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";


    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }


    $email_message .= "Nom: " . clean_string($first_name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Message: " . clean_string($comments) . "\n";

// create email headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    ?>

    <head>

        <meta charset="UTF-8">
        <title>William Garneau</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shorcut icon" type="image/png" href="img/FavIcon2.png">
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Montserrat:100,100i,200,200i,300,300i,400,400i"
              rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    </head>
    <body>
    <!-- include your own success html here -->
    <div class="wrapper">
        <nav id="nav" class="globalNav">
            <a id="logo" class="logo" href="https://wgarneau.ca/">William Garneau</a>
            <div id="menuToggle">
                <input type="checkbox"/>
                <span class="spanMenu"></span>
                <span class="spanMenu"></span>
                <span class="spanMenu"></span>
                <ul id="menu">
                    <a class="page" href="https://wgarneau.ca/">
                        <li class="li">Accueil</li>
                    </a>
                    <a class="page" href="#main" class="scroll">
                        <li class="li">À Propos</li>
                    </a>
                    <a class="page" href="projets.html">
                        <li class="li">Projets</li>
                    </a>
                    <a class="page" href="#contact" class="scroll">
                        <li class="li">Contact</li>
                    </a>
                </ul>
            </div>
        </nav>
        <!--Ma navigation FIN-->


        <!--Mon header-->
        <header>
            <div class="information formulaire">
                <h1>Merci de m'avoir contacter, je vous répondrai le plus tôt possible !</h1>
            </div>
        </header>
        <!--Mon header FIN-->

        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="js/main.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126190768-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-126190768-1');
        </script>
    </div>
    </body>
    <?php
}
?>