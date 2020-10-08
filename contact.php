<section id="contact-flex">

    <div id="contact-flex-left">
        <h2>Contactez-moi</h2>
        <h3 class="title-light icon-mail"> E-mail</h3>
        <p class="text-light">provencal@kaamelott.bzh</p>
        <h3 class="title-light icon-phone"> Pigeon Voyageur </h3>
        <p class="text-light">06.21.25.44.54</p>
        <h3 class="title-light icon-home">Adresse</h3>
        <div id="contact-address">
            <p class="text-light" id="contact-p">Si vous êtes face à la cathédrale, que le soleil est sur la droite
                au-dessus du nuage en forme de miche de pain, c’est que le nord est derrière vous, allez donc au sud
                sud-ouest et à 47,3° sur la droite.</p>
        </div>
        <h3 class="title-light icon-home">Réseaux Sociaux</h3>
        <div id="contact-social-media">
            <a href="https://www.facebook.com/Perceval-le-Gallois-51306658378" target="_blank"><img
                        src="img/facebook.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com/in/provencal-le-gaulois-824455160/" target="_blank"><img
                        src="img/linkedin.png" alt="Linkedin"></a>
            <a href="https://twitter.com/_Gerceval_" target="_blank"><img src="img/twitter.png" alt="Twitter"></a>
        </div>
    </div>

    <div id="contact-flex-right">
        <form action="message.php" method="post" class="formIndex" novalidate>
            <label for="surname">Nom</label>
            <input id="surname" name="surname" type="text" class="formInput" placeholder="Ex : Arthur Leroi*" required>
            <label for="phone">Pigeon Voyageur</label>
            <input id="phone" name="phone" type="tel" class="formInput" placeholder="Ex : 06 69 69 69 69*" required>
            <label for="email">E-mail</label>
            <input id="email" name="email" type="email" class="formInput" placeholder="Ex : recruteur2chevalier@hotmail.fr*" required>
            <label for="motive">Objet</label>
            <input id="motive" name="motive" type="text" class="formInput" placeholder="Ex : J'ai une quête à vous proposer*" required>
            <label for="textarea">Message</label>
            <textarea name="message" id="textarea" class="formInput" placeholder="Votre message" required></textarea>
            <div id="contact-button">
                <button>Envoyer</button>
            </div>
        </form>
    </div>
</section>

<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10699.367759358312!2d1.9077365!3d47.9007445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa4b8c639629241c!2sLe%20Manoir%20Pub!5e0!3m2!1sfr!2sfr!4v1601562502687!5m2!1sfr!2sfr"
            width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
</section>

<footer>
    <div class="footer-div">
        <a>Mentions Légales</a>
    </div>
    <div class="footer-div">
        <div id="social-media">
            <p>Suivez-moi sur les réseaux</p>
            <a href="https://www.facebook.com/Perceval-le-Gallois-51306658378" target="_blank"><img
                        src="img/facebook.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com/in/provencal-le-gaulois-824455160/" target="_blank"><img
                        src="img/linkedin.png" alt="Linkedin"></a>
            <a href="https://twitter.com/_Gerceval_" target="_blank"><img src="img/twitter.png" alt="Twitter"></a>
        </div>
    </div>
</footer>
