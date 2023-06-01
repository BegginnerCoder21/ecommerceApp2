<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="inscription.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>

  @include('tete')
  <div class="photo">
    <h2>ePlus</h2>
    <button><a href="{{ route('enchere.acheter') }}">Acheter!!!!</a></button>
  </div>
  <div class="formulaire">

    <div class="image">
      <h1>Bienvenue</h1>
    </div>
    <div class="formules">
      <h3>Vos coordonnées</h3>
      <div class="formule">
        <div class="formule1">
          <form action=" " method="">
            <label for="nom" required>Nom</label><br>
            <input type="text" name="nom" id="nom" required><br>
            <label for="prenom">Prenoms</label><br>
            <input type="text" name="prenom" id="prenom" required><br>
            <label for="cni">N°CNI</label><br>
            <input type="" name="cni" id="cni" required><br>
            <label for="adresse">Adresse</label><br>
            <input type="text" name="adresse" id="adresse" required><br>
            <label for="ville">Ville</label><br>
            <input type="text" name="ville" id="ville" required><br>
            <label for="profession">Profession</label><br>
            <input type="text" name="profession" id="profession" required>

          </form>
        </div>
        <div class="formule2">
          <form action="">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required><br>
            <label for="date">Date de naissance</label><br>
            <input type="date" name="date" id="date" required><br>
            <label for="numero">Numero</label><br>
            <input type="tel" name="numero" id="numero" required><br><br>
            <label for="sexe">Sexe</label>
            <select name="sexe" id="sexe">
              <option value="femme">femme</option>
              <option value="homme">homme</option>
            </select><br><br>
            <label for="mot">Mot de passe</label><br>
            <input type="password" name="mot" id="mot" required><br>
            <label for="mot">confirmer</label><br>
            <input type="password" name="mot" id="mot" required>

          </form>
        </div>

      </div>
      <div class="bouton">
        <input type="submit" value="envoyer" id="bouton">
      </div>
    </div>
  </div>
  <div class="texte">
    <marquee behavior="scroll">
      <p>
        ePlus est un site de vente aux enchères permettant à plusieurs personnes
        d'acheter et de vendre sans pour autant éffectuer un quelconque deplacement.
        ePlus , la satisfaction des clients est notre priorité !!!!
        ePlus à votre service
      </p>
    </marquee>
  </div>
  <footer>

    <div class="contact">
      <h5> CONTACT</h5>
      <div class="reseaux">
        <div class="insta"> <a href=""><img src="IMAGES/kisspng-logo-clip-art-instagram-white-5b477209b0ca16.3084680215314089057241.jpg" height="30px"></a></div>
        <div class="facebook"> <a href=""><img src="IMAGES/téléchargement (2).png" height="30px"></a></div>
      </div>
    </div>
    <div class="service">
      <h5> SERVICE </h5>
      vente aux enchères<br>
      vendre<br>
      acheter<br>
      18h/24h
    </div>
    <div class="paiement">
      <h5>MODE DE PAIEMENT</h5>
      <div class="paie">
        <div class="moov"><a href=""><img src="IMAGES/téléchargement.png" height="30px"></a></div>
        <div class="orange"><a href=""><img src="IMAGES/OrangeMoney.jpg" height="30px"></a></div>
        <div class="mtn"><a href=""><img src="IMAGES/téléchargement (1).png" height="30px"></a></div>
      </div>
    </div>

  </footer>
</body>

</html>