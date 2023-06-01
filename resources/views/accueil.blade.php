<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="accueil.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

@include('tete')

    <div class="photo">
        <h2>ePlus</h2>
        <button><a href="{{ route('enchere.acheter') }}">Acheter!!!!</a></button>
    </div>

    <h4>N'hésitez pas à faire votre choix</h4>

    <div class="choix">
        <div class="achat">
            <button><a href="{{ route('enchere.acheter') }}">ACHETER</a></button>
        </div>
        
    </div>
    <h1>NOS ARTICLES!!!!!!</h1>
    <div class="article1">
        <div class="article11">
            <image src="IMAGES/téléchargement (5).jpg" height="100%" width="100%"></image>
        </div>
        <div class="article12">
            <image src="IMAGES/images (6).jpg" height="100%" width="100%"></image>
        </div>
        <div class="article13">
            <image src="IMAGES/images (1).jpg" height="100%" width="100%"></image>
        </div>
        <div class="article14">
            <image src="IMAGES/10-livres-de-mode-image-cover.jpg" height="100%" width="100%"></image>
        </div>
    </div>
    <div class="name1">
        <h3 id="MONTRES"><button><a href="{{route('enchere.montre')}}">MONTRES</a></button></h3>
        <h3 id="CHAINES"><button><a href="{{route('enchere.chaine')}}">CHAINES</a></button></h3>
        <h3 id="VOITURES"><button><a href="{{route('enchere.voiture')}}">VOITURES</a></button></h3>
        <h3 id="LIVRES"><button><a href="{{route('enchere.livre')}}">LIVRES</a></button></h3>
    </div>

    <div class="article2">
        <div class="article21">
            <image src="IMAGES/ART.jpg" height="100%" width="100%"></image>
        </div>
        <div class="article22">
            <image src="IMAGES/buffet-de-style-louis-xvi-1440-buffets-en-bois-0.jpg" height="100%" width="100%"></image>
        </div>
        <div class="article23">
            <image src="IMAGES/ZJRCWOGQT7D3DNZNUYQ53ZTWNI.jpg" height="100%" width="100%"></image>
        </div>
        <div class="article24">
            <image src="IMAGES/AnonymeItJoconde.jpg" height="100%" width="100%"></image>
        </div>
    </div>
    <div class="name2">
        <h3 id="ARTS"><button><a href="{{route('enchere.art')}}">ARTS</a></button></h3>
        <h3 id="MEUBLES"><button><a href="{{route('enchere.meuble')}}">MEUBLES</a></button></h3>
        <h3 id="SCULPTURES"><button><a href="{{route('enchere.sculpture')}}">SCULPTURES</a></button></h3>
        <h3 id="PORTRAITS"><button><a href="{{route('enchere.portrait')}}">PORTRAITS</a></button></h3>
    </div>
    <div class="article3">
        <div class="article31">
            <image src="IMAGES/instrument-musique-deluxe-grand-piano-hape-white_1200_1200-716199.jpg" height="100%" width="100%"></image>
        </div>
        <div class="article32">
            <image src="IMAGES/61UgUyZV1PL._AC_SX425_.jpg" height="100%" width="100%"></image>
        </div>
        <div class="article33">
            <image src="IMAGES/images (7).jpg" height="100%" width="100%"></image>
        </div>
        <div class="article34">
            <image src="IMAGES/images (8).jpg" height="100%" width="100%"></image>
        </div>
    </div>
    <div class="name3">
        <h3 id="MUSIQUES"><button><a href="{{route('enchere.musique')}}">MUSIQUES</a></button></h3>
        <h3 id="JOUETS"><button><a href="{{route('enchere.jouet')}}">JOUETS</a></button></h3>
        <h3 id="ELECTROMENAGERS"><button><a href="{{route('enchere.electromenager')}}">ELECTROMENAGERS</a></button></h3>
        <h3 id="COUVERTS"><button><a href="{{route('enchere.couvert')}}">COUVERTS</a></button></h3>
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