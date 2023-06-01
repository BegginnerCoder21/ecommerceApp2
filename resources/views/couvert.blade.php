<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="couvert.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    @include('tete')
    
    <div class="photo">
        <h2>ePlus</h2>
        <button><a href="{{ route('enchere.acheter') }}">Acheter!!!!</a></button>
    </div>
    <h3>NOS COUVERTS</h3>
    <div class="galerie1">
        <div class="galerie11">
            <img src="IMAGES/images (8).jpg" width="100%" height="100%">
            <h6>LOT 20</h6>
        </div>
        <div class="galerie12">
            <img src="IMAGES/images (11).jpg" width="100%" height="100%">
            <h6>LOT 21</h6>
        </div>
        <div class="galerie13">
            <img src="IMAGES/1.jpg" width="100%" height="100%">
            <h6>LOT 22</h6>
        </div>
        <div class="galerie14">
            <img src="IMAGES/téléchargement (10).jpg" width="100%" height="100%">
            <h6>LOT 23</h6>
        </div>
    </div>

    <div class="galerie2">
        <div class="galerie21">
            <img src="IMAGES/images (11).jpg" width="100%" height="100%">
            <h6>LOT 24</h6>
        </div>
        <div class="galerie22">
            <img src="IMAGES/61a9d45989d1f67f8cc9b68d29921a80bbd2bdbd1ceb8.jpg" width="100%" height="100%">
            <h6>25</h6>
        </div>
        <div class="galerie23">
            <img src="IMAGES/71aLZt3PTVS._AC_UL400_.jpg" width="100%" height="100%">
            <h6>26</h6>
        </div>
        <div class="galerie24">
            <img src="IMAGES/81aU1ki4+nL._AC_SS450_.jpg" width="100%" height="100%">
            <h6>LOT 27</h6>
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