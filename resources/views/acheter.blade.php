<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="acheter.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>

@include('tete')
  <div class="photo">
    <h2>ePlus</h2>
    <button><a href="{{ route('enchere.acheter') }}">Acheter!!!!</a></button>
  </div>

  <h3>MONTRES</h3>
  <div class="galerie1">
    <div class="montre1">
      <img src="IMAGES/téléchargement (5).jpg" width="150px" height="150px">
      <h6>LOT 10</h6>
      <p>Une montre de qualité ,de luxe ,originale, pour des gens spéciaux que
        vous etes
      </p>
      <h6>45.000fr</h6>
      <button><a href="{{ route('enchere.encherir1') }}">Deposer enchére</a></button>
    </div>
    <div class="montre2">
      <img src="IMAGES/téléchargement (6).jpg" width="150px" height="150px">
      <h6>LOT 11</h6>
      <p>Une montre de qualité ,de luxe ,originale, pour des gens spéciaux que
        vous etes</p>
      <h6>50.000fr</h6>
      <button><a href="{{route('enchere.encherir2')}}">Deposer enchére</a></button>
    </div>
    <div class="montre3">
      <img src="IMAGES/téléchargement (7).jpg" width="150px" height="150px">
      <h6>LOT 12</h6>
      <p>Une montre de qualité ,de luxe ,originale, pour des gens spéciaux que
        vous etes</p>
      <h6>50.000fr</h6>
      <button><a href="{{route('enchere.encherir3')}}">Deposer enchére</a></button>
    </div>
    <div class="montre4">
      <img src="IMAGES/téléchargement (9).jpg" width="150px" height="150px">
      <h6>LOT 13</h6>
      <p>Une montre de qualité ,de luxe ,originale, pour des gens spéciaux que
        vous etes</p>
      <h6>50.000fr</h6>
      <button><a href="{{route('enchere.encherir4')}}">Deposer enchére</a></button>
    </div>
  </div>

  <h3>ARTS</h3>
  <div class="galerie2">
    <div class="montre1">
      <img src="IMAGES/ART.jpg" width="150px" height="150px">
      <h6>LOT 30</h6>
      <p>L'art est toute une passion ,un tableau reprentatif pour vous
        ouvrir l'esprit de créativité
      </p>
      <h6>40.000fr</h6>
      <button><a href="{{route('enchere.encherir5')}}">Deposer enchére</a></button>
    </div>
    <div class="montre2">
      <img src="IMAGES/images (2).jpg" width="150px">
      <h6>LOT 31</h6>
      <p>L'art est toute une passion ,un tableau reprentatif pour vous
        ouvrir l'esprit de créativité</p>
      <h6>45.000fr</h6>
      <button><a href="{{route('enchere.encherir6')}}">Deposer enchére</a></button>
    </div>
    <div class="montre3">
      <img src="IMAGES/images (3).jpg" width="150px">
      <h6>LOT 32</h6>
      <p>L'art est toute une passion ,un tableau reprentatif pour vous
        ouvrir l'esprit de créativité</p>
      <h6>45.000fr</h6>
      <button><a href="{{route('enchere.encherir7')}}">Deposer enchére</a></button>
    </div>
    <div class="montre4">
      <img src="IMAGES/unnamed.jpg" width="150px" height="150px">
      <h6>LOT 33</h6>
      <p>L'art est toute une passion ,un tableau reprentatif pour vous
        ouvrir l'esprit de créativité</p>
      <h6>45.000fr</h6>
      <button><a href="{{route('enchere.encherir8')}}">Deposer enchére</a></button>
    </div>
  </div>

  <h3>LIVRES</h3>
  <div class="galerie3">
    <div class="montre1">
      <img src="IMAGES/61ISZF20qqL._AC_UL200_SR200,200_.jpg" width="150px" height="150px">
      <h6>LOT 50</h6>
      <p>Un livre de qualité , de luxe très édifiant pour votre savoir
      </p>
      <h6>40.000fr</h6>
      <button><a href="{{route('enchere.encherir9')}}">Deposer enchére</a></button>
    </div>
    <div class="montre2">
      <img src="IMAGES/71-twY4dsdL.jpg" width="150px" height="150px">
      <h6>LOT 51</h6>
      <p>Un livre de qualité , de luxe très édifiant pour votre savoir</p>
      <h6>45.000fr</h6>
      <button><a href="{{route('enchere.encherir10')}}">Deposer enchére</a></button>
    </div>
    <div class="montre3">
      <img src="IMAGES/10-livres-de-mode-image-cover.jpg" width="150px" height="150px">
      <h6>LOT 52</h6>
      <p>Un livre de qualité , de luxe très édifiant pour votre savoir</p>
      <h6>40.000fr</h6>
      <button><a href="{{route('enchere.encherir11')}}">Deposer enchére</a></button>
    </div>
    <div class="montre4">
      <img src="IMAGES/2357640049.jpg" width="150px" height="150px">
      <h6>LOT 53</h6>
      <p>Un livre de qualité , de luxe très édifiant pour votre savoir</p>
      <h6>40.000fr</h6>
      <button><a href="{{route('enchere.encherir12')}}">Deposer enchére</a></button>
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
        <div class="facebook"> <a href=""><img src="IMAGES/Facebook_f_logo_(2019).svg.png" height="30px"></a></div>
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