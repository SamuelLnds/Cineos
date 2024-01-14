<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="design/Logo svg/IconTab.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/queries.css">

    <script src="scripts/checkbox.js" defer></script>
    <script src="scripts/widthalert.js" defer></script>
    <script src="scripts/settings.js" defer></script>

    <title>Cinéos</title>
</head>
<body>

    <?php require('fragments/header.php');?>

    <nav>
        <p><a href="index.php">/ Retour à la première page</a></p>
    </nav>

    <main>

        <form action="reservation.php" method="post" id="reservation">
            <div class="infos-reservation">

                <select name="salon" id="choix_salon">
                    <option value="">-- Choix du salon --</option>
                    <option value="standard">Gamme standard</option>
                    <option value="famille">Gamme familiale</option>
                    <option value="luxe">Haut de gamme</option>
                </select>

                <select name="horaire" id="choix_horaire">
                    <option value="">-- Choix du créneau horaire --</option>
                    <option value="matin">8h-12h</option>
                    <option value="aprem">13h-17h</option>
                    <option value="soir">18h-22h</option>
                </select>

                <select name="film" id="choix_film">
                    <option value="">-- Choix du film --</option>
                    <option value="film0">Astérix & Obélix</option>
                    <option value="film1">Super Mario Bros</option>
                    <option value="film2">Scream VI</option>
                    <option value="film3">Les Trois Mousquetaires</option>
                    <option value="film4">Le Royaume de Naya</option>
                </select>

                <div class="checkbox-retirer-options">

                    <input type="checkbox" name="options" id="retirer_options">
                    <label for="retirer_options">Je souhaite retirer des options (GRATUIT)</label>
        
                </div>

                <div class="hidden-options-retirer">

                    <div class="checkbox-retirer-options">
                        <input type="checkbox" name="brumisateur" id="retirer_brumisateur">
                        <label for="retirer_brumisateur">Je ne veux pas qu’il y ait de brumisateur/autres effets</label>
                    </div>

                    <div class="checkbox-retirer-options">                
                        <input type="checkbox" name="odeur" id="retirer_odeur">
                        <label for="retirer_odeur">Je ne veux pas que l’odeur change</label>
                    </div>

                    <div class="checkbox-retirer-options">
                        <input type="checkbox" name="mouvements" id="retirer_mouvements">
                        <label for="retirer_mouvements">Je ne veux pas que les sièges bougent</label>
                    </div>

                    <div class="checkbox-retirer-options">                
                        <input type="checkbox" name="light" id="retirer_lumiere">
                        <label for="retirer_lumiere">Je ne veux pas qu’il y ait des effets de lumière</label>
                    </div>

                </div>

            </div>

            <div class="separation-line"></div>

            <div class="infos-achat">
                <div class="infos-util">
                    <div class="infos-personne infos-sub">

                        <div class="infos-sub">
                            <label for="nom_acheteur">Nom</label>
                            <input type="text" name="nom" id="nom_acheteur">
                        </div>

                        <div class="infos-sub">
                            <label for="prenom_acheteur">Prénom</label>
                            <input type="text" name="prenom" id="prenom_acheteur">
                        </div>

                        <div class="infos-sub">
                            <label for="email_acheteur">Adresse mail</label>
                            <input type="text" name="mail" id="email_acheteur">
                        </div>

                        <div class="infos-sub">
                            <label for="telephone_acheteur">Téléphone</label>
                            <input type="tel" name="tel" id="telephone_acheteur">
                        </div>

                    </div>

                    <div class="separation-line"></div>

                    <div class="infos-lieu infos-sub">

                        <div class="infos-sub">
                            <label for="adresse">Adresse</label>
                            <input type="text" name="adresse" id="adresse">
                        </div>

                        <div class="infos-sub">
                            <label for="code-postal_acheteur">Code postal</label>
                            <input type="number" name="codePostal" id="code-postal_acheteur">
                        </div>

                        <div class="infos-sub">
                            <label for="ville_acheteur">Ville</label>
                            <input type="text" name="ville" id="ville_acheteur">
                        </div>

                    </div>
                </div>
                <div class="infos-bancaires infos-sub">
                    <label for="numero_carte_bancaire">Numéro de carte</label>
                    <input type="number" name="numeroCarte" id="numero_carte_bancaire">
                    <div class="verif-secu infos-sub">
                        <label for="expiration_carte_bancaire">Date d’expiration</label>
                        <input type="date" name="dateExpiration" id="expiration_carte_bancaire">
                        <label for="code_carte_bancaire">Code de vérification</label>
                        <input type="number" name="codeVerification" id="code_carte_bancaire">
                    </div>
                </div>
            </div>

            <div class="check-notifs">
                <div class="checkbox-notification">
                    <input type="checkbox" name="newsnotif" id="opt-in_newsletter">
                    <label for="opt-in_newsletter">J'accepte de recevoir la newsletter de Cinéos dans ma boîte mail afin d'être tenu au courant des nouveautés et de l'actualité de Cinéos.</label>
                </div>
                <div class="checkbox-notification">
                    <input type="checkbox" name="smsnotif" id="opt-in_sms">
                    <label for="opt-in_sms">J'accepte que Cinéos m'envoie des SMS pour m'informer des dernières nouvelles.</label>
                </div>
            </div>

            <button type="submit" name="reservation">Valider ma réservation</button>

        </form>

        <?php

if (isset($_POST['reservation'])) {
    $salon = $_POST['salon'];
    $heure = $_POST['horaire'];
    $film = $_POST['film'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $adresse = $_POST['adresse'];
    $codePostal = $_POST['codePostal'];
    $ville = $_POST['ville'];
    $numeroCarte = $_POST['numeroCarte'];
    $codeVerification = $_POST['codeVerification'];
    $dateExpiration = $_POST['dateExpiration'];
    
    $numeroTelephone = $_POST['tel'];
    $brumisateur = isset($_POST['brumisateur']) ? 'Brumisateur' : '';
    $odeur = isset($_POST['odeur']) ? 'Odeur' : '';
    $mouvements = isset($_POST['mouvements']) ? 'Mouvements de siège' : '';
    $light = isset($_POST['light']) ? 'Light show' : '';


    $error = false;

    // Vérifier si les champs obligatoires ont été remplis
    if (empty($nom) || empty($prenom) || empty($email) || empty($adresse) || empty($codePostal) || empty($ville) || empty($numeroCarte) || empty($dateExpiration) || empty($codeVerification) || empty($salon) || empty($heure) || empty($film)) {
        $error = true;
        echo "<script type='text/javascript'>alert('Veuillez remplir tous les champs');</script>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        echo "<script type='text/javascript'>alert('Veuillez entrer une adresse mail valide');</script>";
    }
    
    if (!ctype_digit($numeroTelephone) || strlen($numeroTelephone) != 10) {
        $error = true;
        echo "<script type='text/javascript'>alert('Veuillez entrer un numéro de téléphone valide (10 chiffres). Vous êtes à ".strlen($numeroTelephone)." avec ".$numeroTelephone."');</script>";
    }

    if (!ctype_digit($codePostal)) {
        $error = true;
        echo "<script type='text/javascript'>alert('Veuillez entrer un code postal valide (chiffres seulement)');</script>";
    }

    if (!preg_match('/^[0-9]{16}$/', $numeroCarte)) {
        $error = true;
        echo "<script type='text/javascript'>alert('Veuillez entrer un numéro de carte bleue valide (16 chiffres)');</script>";
    }
    
    
    if (!ctype_digit($codeVerification)) {
        $error = true;
        echo "<script type='text/javascript'>alert('Veuillez entrer un code de sécurité valide (chiffres seulement)');</script>";
    }
    

    if (!$error) {
        $file = fopen("reservation.txt", "a+");

        fwrite($file, "Salon : " . $salon . "\n");
        fwrite($file, "Créneau : " . $heure . "\n");
        fwrite($file, "Film : " . $film . "\n");
        fwrite($file, "Nom : " . $nom . "\n");
        fwrite($file, "Prénom : " . $prenom . "\n");
        fwrite($file, "Email : " . $email . "\n");
        fwrite($file, "Adresse : " . $adresse . "\n");
        if (!empty($numeroTelephone)) {
            fwrite($file, "Numéro de téléphone : " . $numeroTelephone ."\n");
        }
        fwrite($file, "Code postal : " . $codePostal . "\n");
        fwrite($file, "Ville : " . $ville . "\n");
        fwrite($file, "Numéro de carte : " . $numeroCarte . "\n");
        fwrite($file, "Code de vérification : " . $codeVerification . "\n");
        fwrite($file, "Date d'expiration : " . $dateExpiration . "\n");

        if (!empty($brumisateur)) {
            fwrite($file, "Option : Brumisateur\n");
        }
        if (!empty($odeur)) {
            fwrite($file, "Option : Odeur\n");
        }
        if (!empty($mouvements)) {
            fwrite($file, "Option : Mouvements\n");
        }
        if (!empty($light)) {
            fwrite($file, "Option : Lumières\n");
        }

        fwrite($file, "\n");
        fclose($file);
        echo "<div class=\"confirm-message\">Merci d'avoir réservé</div>";
    }}

?>
    </main>

    <?php require('fragments/footer.php');?>

</body>
</html>