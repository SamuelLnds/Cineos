<footer>



<div class="top-line">

    <div class="left-side">

        <div class="reseaux">
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
        </div>

        <p>Tous droits réservés - Cinéos © <?php echo date("Y"); ?></p>
        
    </div>

    <?php

if (isset($_POST['newsletter'])) {

    $email = $_POST['emailnews'];
    $error = false;


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        echo "<div class=\"error-message\">L'adresse email n'est pas valide</div>";
        unset($email);
    }

    $file = fopen('mail-bd.txt', "r");
    $fichierMail = fread ($file, 99999);
    if (strpos($fichierMail, $email)!==false) {
        $error = true;
        echo "<div class=\"error-message\">L'adresse mail est déjà inscrite à la newsletter</div>";
        unset($email);
    }

    if(!$error) {
        $file = fopen('mail-bd.txt', "a+");
        fwrite($file, $email . "\n");
        fclose($file);
        echo "<div class=\"confirm-message\">Merci de vous être inscrit·e à notre newsletter</div>";
    }

    unset($email);

}

?>

    <div class="newsletter" id="newsletter">

        <form action="index.php#newsletter" method="post">

            <div class="newsletter-input">
                <label for="email">S’abonner à la newsletter</label>
                <input type="email" name="emailnews" id="email" placeholder="email@adresse.com">
            </div>

            <button type="submit" name="newsletter">Envoyer</button>

        </form>

    </div>

</div>


<div class="bot-line">
    <a href="">Mentions légales</a> · <a href="">Politique de confidentialité</a>
</div>

</footer>
