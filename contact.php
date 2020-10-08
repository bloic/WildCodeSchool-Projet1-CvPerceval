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
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10699.367759358312!2d1.9077365!3d47.9007445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa4b8c639629241c!2sLe%20Manoir%20Pub!5e0!3m2!1sfr!2sfr!4v1601562502687!5m2!1sfr!2sfr"
                    width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </div>
    </div>


    <div id="contact-flex-right">

        <?php
        if(!empty($_GET['message']) && $_GET['message'] === 'success')  {
            ?>
            <div class="contact-flex-message">
                <p class = "formValidation">
                <?='J\'ai bien reçu votre demande. Merci de me considérer en tant que tel. Je vous recontacte après-demain à partir d\'aujourd\'hui pour que nous en discutions plus en serre-taille.';?></p>
            </div>
            <?php
        }
        ?>

        <form action="#contact-flex" method="post" class="formMessage" novalidate>

            <label for="surname" class="messageLabel">Nom</label>
            <input id="surname"
                   name="surname"
                   type="text"
                   placeholder="Ex : Arthur Leroi*"
                   class="messageInput"
                   value="<?= $_SERVER['REQUEST_METHOD'] === 'POST' ? htmlentities($data['surname']) : '' ;?>"
            >
            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors['surname1'])) {
                ?><span class="errorMessage"><?= $errors['surname1'];?></span><?php
            }
            ?>


            <label for="phone" class="messageLabel">Pigeon Voyageur</label>
            <input id="phone"
                   name="phone"
                   type="tel" placeholder="Ex : 06 69 69 69 69*"
                   class="messageInput"
                   value="<?= $_SERVER['REQUEST_METHOD'] === 'POST' ? htmlentities($data['phone']) : '' ;?>"
            >
            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors['phone1'])) {
                ?><span class="errorMessage"><?= $errors['phone1'];?></span><?php
            }
            ?>


            <label for="email" class="messageLabel">E-mail</label>
            <input id="email"
                   name="email"
                   type="email"
                   placeholder="Ex : recruteur2chevalier@hotmail.fr*"
                   class="messageInput"
                   value="<?= $_SERVER['REQUEST_METHOD'] === 'POST' ? htmlentities($data['email']) : '' ;?>"
            >
            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors['email1'])) {
                ?><span class="errorMessage"><?= $errors['email1'];?></span><?php
            } else if (!empty($errors['email2'])) {
                ?><span class="errorMessage"><?= $errors['email2'];?></span><?php
            }
            ?>


            <label for="motive" class="messageLabel">Objet</label>
            <input id="motive"
                   name="motive"
                   type="text"
                   placeholder="Ex : J'ai une quête à vous proposer*"
                   class="messageInput"
                   value="<?= $_SERVER['REQUEST_METHOD'] === 'POST' ? htmlentities($data['motive']) : '' ;?>">
            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors['motive1'])) {
                ?><span class="errorMessage"><?= $errors['motive1'];?></span><?php
            }
            ?>


            <label for="textarea" class="messageLabel">Message</label>
            <textarea name="message"
                      id="textarea"
                      placeholder="Votre message"
                      class="messageInput"><?= $_SERVER['REQUEST_METHOD'] === 'POST' ? htmlentities($data['message']) : '' ;?></textarea>
            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors['message1'])) {
                ?><span class="errorMessage"><?= $errors['message1'];?></span><?php
            }
            ?>


            <div class="contact-button">
                <button>Envoyer</button>
            </div>
        </form>
    </div>
</section>

<footer>
    <div class="footer-div">
        <a>Mentions Légales</a>
    </div>
    <div class="footer-div">
        <div id="social-media">
            <p>Suivez-moi sur les réseaux</p>
            <a href="https://www.facebook.com/Perceval-le-Gallois-51306658378" target="_blank">
                <img src="img/facebook.png"
                     alt="Facebook">
            </a>
            <a href="https://www.linkedin.com/in/provencal-le-gaulois-824455160/" target="_blank">
                <img src="img/linkedin.png"
                     alt="Linkedin">
            </a>
            <a href="https://twitter.com/_Gerceval_" target="_blank">
                <img src="img/twitter.png"
                     alt="Twitter">
            </a>
        </div>
    </div>
</footer>
