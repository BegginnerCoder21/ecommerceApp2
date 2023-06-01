<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
    <link href="accueil.css" rel="stylesheet">
    <link href="essai.css" rel="stylesheet">
</head>

<body>
<div class="accueil">
    <div class="logo">
        <img src="IMAGES/ePlus (1).png" height="75px" width="80px">
    </div>
    <div class="recherche">
        <ul>
            <li><a href="{{ route('enchere.acceuil') }}">ACCUEIL</a></li>
            @if (Route::has('login'))
                @auth
                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('SE DECONNECTER') }}
                            </x-dropdown-link>
                        </form>
                    @else
                        <li><a href="{{ route('login') }}">SE CONNECTER</a></li>
                @endauth
                
            @endif
            <li><a href="">A PROPOS</a></li>
            <form action="" method="get">
                <input type="text" name="q" />
                <input type="submit" value="Rechercher" />
                
            </form>
        </ul>
    </div>
</div>
<div class="suite">
    <ul>
        <li><a href="{{ route('enchere.acheter') }}">Acheter</a></li>
        <li><label for="categorie" class="cat">
                Categorie </label>

            <select name='produit' id='categorie' class='cate'>
                <option class="level-0" value="montre"><a href="">Montre</a></option>
                <option class="level-0" value="chaine"><a href="">Chaine</a></option>
                <option class="level-0" value="vehicule"><a href="">vehicule</a></option>
                <option class="level-0" value="livre"><a href="">livre</a></option>
                <option class="level-0" value="art"><a href="">art</a></option>
                <option class="level-0" value="meuble"><a href="">meuble</a></option>
                <option class="level-0" value="sculpture"><a href="">sculpture</a></option>
                <option class="level-0" value="portrait"><a href="">portrait</a></option>
                <option class="level-0" value="musique"><a href="">musique</a></option>
                <option class="level-0" value="jouets"><a href="">jouets</a></option>
                <option class="level-0" value="electromenager"><a href="">electromenager</a></option>
                <option class="level-0" value="couvert"><a href="">couvert</a></option>
            </select>
        </li>
        <li><a href="">Guide</a></li>
    </ul>

</div>

    <div class="photo1">
    </div>
       @include('encherir')
    
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
</body>

</html>