<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription</title>
    <link/>
    <script>
    </script>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>
    <form action="recup.php" method="post">
        <div>
          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="nom" required/>
        <div>
        <div>
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom" required/>
        <div>
        <div>
          <label for="mail">E-mail :</label>
          <input type="text" id="mail" name="mail" required/>
        </div>
        <div>
            <label for="tel">Numéro de téléphone :</label>
            <input type="tel" id="tel" name="tel" maxlength="10" pattern="[0-9]{10}" required />
            <p>Format d'écriture: 0606060606</p>
        </div>  
        <div>
          <label for="mdp">Mot de passe :</label>
          <input type="password" id="mdp" name="mdp" minlength="8" maxlength="30" required/>
          <p>Format requis :</p> 
          <ul>
            <li>Minimum 8 caractères</li>
            <li>Maximum 30 caractères</li>
          </ul>
        </div>
        <div>
            <input type="submit" value="Inscrivez-vous">
        </div>
        <a href="connexion.html">Connectez-vous</a>
      </form>
      <footer>
        <?php include 'footer.php'; ?>
      </footer>
    <script src="java/script.js"></script>
  </body>
</html>