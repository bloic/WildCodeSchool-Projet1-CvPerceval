<header>
    <div class="headerGlobal">
        <div class="headerBox visitCard">

            <div class="headerTitles">
                <h1 class="headerName">
                    <?php
                    $randomNumber = random_int(1,10);
                    if ($randomNumber <9){
                        echo 'Perceval le Gallois';
                    } else {
                        echo 'Provençal le Gaulois';
                    } ?>
                </h1>
                <h2 class="headerJob"> Chevalier Freelance </h2>
            </div>

            <p class="headerContact carrierPigeon"> 06.21.25.44.54 </p>
            <a href="mailto:julie.rebeyrolle@gmail.com"
               class="headerContact mailAdress">
                provencal@kaamelott.bzh
            </a>

            <a href="https://www.facebook.com/Perceval-le-Gallois-51306658378"
               target="_blank"><img src="/img/facebook.png"
                                    alt="facebook icon"
                                    class="socialMediaIcon"></a>

            <a href="https://www.linkedin.com/in/provencal-le-gaulois-824455160/"
               target="_blank"><img src="/img/linkedin.png"
                                    alt="linkedin icon"
                                    class="socialMediaIcon"></a>

            <a href="https://twitter.com/_Gerceval_"
               target="_blank"><img src="/img/twitter.png"
                                    alt="twitter icon"
                                    class="socialMediaIcon"></a>
        </div>
        <div class="headerBox">
            <img src="/img/Perceval_400x400.jpg"
                 alt="Picture of Perceval le Gallois"
                 class="makeItRound profilePicture">
        </div>
    </div>
</header>

