<section id="contact-flex">
    <div id="contact-flex-left">
        <h2>Contactez-moi</h2>
        <h3> E-mail</h3>
        <p>percevallegallois@kaamelott.bzh</p>
        <h3> Pigeon Voyageur </h3>
        <p>06.21.25.44.54</p>
        <h3>Adresse</h3>
        <p>Lorem ipsum</p>
    </div>
    <div id="contact-flex-right">
        <form action="">
            <label for="surname">Nom</label>
            <input id="surname" name="surname" type="text" placeholder="Nom*" required>
            <label for="firstname">Prénom</label>
            <input id="firstname" name="firstname" type="text" placeholder="Prénom*" required>
            <label for="phone">Téléphone</label>
            <input id="phone" name="phone" type="tel" pattern="[0-9]{10}" placeholder="Téléphone*" required>
            <label for="email">E-mail</label>
            <input id="email" name="email" type="email" placeholder="E-mail*" required>
            <label for="motive"></label>
            <select name="motive" id="motive" required>
                <option>J'ai une quête à vous proposer</option>
                <option>Demande de renseignement</option>
                <option>Autre</option>
            </select>
            <label for="textarea"></label>
            <textarea name="textarea" id="textarea" placeholder="Votre message"></textarea>
            <button>Envoyer</button>
        </form>
    </div>
</section>
