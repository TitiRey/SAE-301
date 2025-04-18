<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le Fantastique du Velay</title>
    <link/>
    <script>
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleinfo.css" />
  </head>
  <body>
  <header>
      <?php include 'header.php';?>
    </header>

    <div class="fond">
          <img class="imagefond" src="images/fond.jpg">
        <div class="grandtitre"><h1>Information sur le Festival.</h1></div>
      </div>
      
      <div class="sep"></div>

      <div id="conteneur">
           <div class="titre">
            <h1>Qu'est-ce que le Fantastique du Velay ?</h1>
              <h3>Festival de court-métrge fantastique, en hommage à Georges Méliès. </h3>
                Ce festival de court-métrage se déroule chaque année et commence cette année avec pour thème le fantastique. Pour cette première fois, on retrouve des invités de marque avec deux grands réalisateurs français qui nous font le plaisir d’être les parrains de l’événement, on retrouvera bien sûr des acteurs ainsi que des influenceurs. Pour cette première édition, nous mettrons à l’honneur Georges Méliès, un grand nom du cinéma puisqu’il est l’un des précurseurs dans le genre du fantastique au cinéma.
          </div>
        </div>
        <div id="conteneur">
          <div class="box"> 
            <div class="but">
              <h2>Information générale </h2> 
            </div>
              <span class="vertical"></span> 
                <div class="interbox">
                  <div class="titre"> Quand a lieu le Festival ? 
                    <button class="boutton" id="togg1"> <span>EN SAVOIR PLUS</span> </button> 
                    <div class="explication" id="d1">
                      Le festival aura lieu du 21/04/2023 au 23/04/2023 , et commencera à 18h30 le Vendredi et se finira le Samedi à 22h30.
                      <br>
                      Le programme est présent sur la page d’accueil de notre site internet si vous souhaiter plus d’information.
                    </div> 
                  </div> 

                  <div class="titre"> Où se trouve le Festival ?  
                    <button class="boutton" id="togg2">EN SAVOIR PLUS</button>
                    <div class="explication" id="d2">
                      Le Fantastique du Velay aura lieu au Théâtre du Puy-En-Velay. 
                      <br>
                      Adresse : Pl. du Breuil, 43000 Le Puy-en-Velay  
                    </div> 
                  </div> 
                </div>

          </div>
        </div> 
        <div id="conteneur">
            <div class="box"> 
              <div class="but">
                <h2>Participation au Festival</h2>  
              </div>
                <span class="vertical"></span> 
                  <div class="interbox">
                    <div class="titre"> Comment participer au festival ?
                      <button class="boutton" id="togg3">EN SAVOIR PLUS</button> 
                      <div class="explication" id="d3">
                        Pour participer à ce Festival de court-métrage, il vous suffit de créer un compte et de réserver vos billets sur notre site internet, vous pourrez choisir les jours où vous voulez aller et vous trouverez sur notre site tous les programmes prévus pour le festival.
                      </div> 
                    </div> 
                    <div class="titre"> Comment inscrire un film ?    
                        <button class="boutton" id="togg4">EN SAVOIR PLUS</button>
                        <div class="explication" id="d4">
                          Pour cette première édition, nous avons pris la décision de sélectionner les court-métrages en amont (avant le 14/04/2023), une annonce a été faite sur notre compte Instagram @Fantastique_du_Velay qui redirige sur notre mail pour ensuite réaliser une sélection.
                          <br>
                          Pour la prochaine édition, l’organisation fera en sorte que vous puissiez donner votre film avant le début de l’événement pour profiter de toutes les créations. 
                          <br>
                          Merci de votre compréhension. 
                        </div> 
                    </div> 
                  </div>

            </div> 
        </div>
        
        <footer>
      <?php include 'footer.php'; ?>
      </footer>

    <script src="java/javainfo.js"></script>
    <script src="java/script.js"></script>
  </body>
</html>
