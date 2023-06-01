<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="musique.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    @include('tete')
    
    <div class="photo">
        <h2>ePlus</h2>
        <button><a href="{{ route('enchere.acheter') }}">Acheter!!!!</a></button>
    </div>
    <h3>NOS INSTRUMENTS</h3>
    <div class="galerie1">
        <div class="galerie11">
            <img src="IMAGES/instrument-musique-deluxe-grand-piano-hape-white_1200_1200-716199.jpg" width="100%" height="100%">
            <h6>LOT 110</h6>
        </div>
        <div class="galerie12">
            <img src="IMAGES/instrument-musique.jpg" width="100%" height="100%">
            <h6> LOT 111</h6>
        </div>
        <div class="galerie13">
            <img src="IMAGES/81vrvazRjPL._AC_UL400_.jpg" width="100%" height="100%">
            <h6>LOT 112</h6>
        </div>
        <div class="galerie14">
            <img src="IMAGES/b4c4aa61-d4c9-4ec6-8b86-440134df0c3e.9a018f8188e15c29efcf6c292aed2d83.jpeg" width="100%" height="100%">
            <h6>LOT 113</h6>
        </div>
    </div>

    <div class="galerie2">
        <div class="galerie21">
            <img src="IMAGES/pngtree-modern-musical-instrument-piano-illustration-image_1425347.jpg" width="100%" height="100%">
            <h6>LOT 114</h6>
        </div>
        <div class="galerie22">
            <img src="IMAGES/téléchargement (14).jpg" width="100%" height="100%">
            <h6>LOT 115</h6>
        </div>
        <div class="galerie23">
            <img src="IMAGES/trompette-tt-width-1200-height-630-fill-0-crop-1-bgcolor-ffffff.jpg" width="100%" height="100%">
            <h6>LOT 116</h6>
        </div>
        <div class="galerie24">
            <img src="IMAGES/03ef9152d82e5bb58ebe9973fc1e07bc_L.jpg" width="100%" height="100%">
            <h6>LOT 117</h6>
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