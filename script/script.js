$(document).ready(function () {

    $("#chatbot-send").click(function chatbotAnswer() {
        const phrase = $("#user-phrase").val();
        const phraseClear = $("#user-phrase");
        const chatbox = $("#chatbox");
        const typing = $("#typing");
        let percevalOutput = "c'est pas faux";
        if (phrase.includes("dispo")) {
            percevalOutput = "C'est pas quand y'a des infiltrations ça ?";
        } else if (phrase.includes("question")) {
            percevalOutput = "Vous, vous avez une idée derrière la main, j'en mettrais ma tête au feu !";
        } else if (phrase.includes("besoin")) {
            percevalOutput = "Y'a du grabuge alors on appelle les 2 couillons... On met les glandus à profit !";
        } else if (phrase.includes("aujourd")) {
            percevalOutput = "Je vais pas pouvoir rester aujourd'hui! Faut que je retourne à la ferme de mes vieux! Y a ma grand-mère qui a glissé sur une bouse! C'est le vrai merdier!";
        } else if (phrase.includes("appelez") || phrase.includes("nom")) {
            percevalOutput = "Dans le Languedoc, ils m'appellent Provençal. Mais c'est moi qui m'suis gouré en disant mon nom. Sinon, en Bretagne, c'est le Gros Faisan au sud, et au nord, c'est juste Ducon ..";
        } else if (phrase.includes("trouver")) {
            percevalOutput = "Probablement à la taverne";
        } else if (phrase.includes("désol")) {
            percevalOutput = "Mais cherchez pas à faire des phrases pourries... On en a gros, c'est tout !";
        } else if (phrase.includes("graal")) {
            percevalOutput = "Si Joseph d'Arimathie a pas été trop con, vous pouvez être sûr que le Graal, c'est un bocal à anchois.";
        } else if (phrase.includes("strat")) {
            percevalOutput = "Faut faire comme avec les scorpions qui se suicident quand ils sont entourés par le feu";
        } else if (phrase.includes("abrut") || phrase.includes("débil")) {
            percevalOutput = "Toi, un jour, je te crâme ta famille, toi.";
        } else if (phrase.includes("après demain")) {
            percevalOutput = "Après demain, à partir d'aujourd'hui ?";
        } else if (phrase.includes("12")) {
            percevalOutput = "13, 14, 15... Enfin tous les chiffres impairs jusqu'à 22.";
        }

        if (typeof phrase === "string" && phrase !== "") {
            chatbox.append("<div class='user-message'><span>" + phrase + "</span></div>");
            setTimeout(function() {typing.append("<span id='waiting'> Perceval écrit... </span>")}, 1000);
            setTimeout(function() {chatbox.append("<div class='perceval-message'><span>" + percevalOutput + "</span></div>")}, 3000);
            setTimeout(function() {$("#waiting").remove()}, 3000);
            phraseClear.val("");
            setTimeout(function() {$(".chatbot").scrollTop($(".chatbot")[0].scrollHeight)}, 1000);
            setTimeout(function() {$(".chatbot").scrollTop($(".chatbot")[0].scrollHeight)}, 3000);
            $(".chatbot").scrollTop($(".chatbot")[0].scrollHeight);
        }
    });

    $("#user-phrase").keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            const phrase = $("#user-phrase").val();
            const phraseClear = $("#user-phrase");
            const chatbox = $("#chatbox");
            const typing = $("#typing");
            let percevalOutput = "c'est pas faux";
            if (phrase.includes("disponibilit") || phrase.includes("disponibilités")) {
                percevalOutput = "C'est pas quand y'a des infiltrations ça ?";
            } else if (phrase.includes("question")) {
                percevalOutput = "Vous, vous avez une idée derrière la main, j'en mettrais ma tête au feu !";
            } else if (phrase.includes("besoin")) {
                percevalOutput = "Y'a du grabuge alors on appelle les 2 couillons... On met les glandus à profit !";
            } else if (phrase.includes("aujourd")) {
                percevalOutput = "Je vais pas pouvoir rester aujourd'hui! Faut que je retourne à la ferme de mes vieux! Y a ma grand-mère qui a glissé sur une bouse! C'est le vrai merdier!";
            } else if (phrase.includes("appelez") || phrase.includes("nom")) {
                percevalOutput = "Dans le Languedoc, ils m'appellent Provençal. Mais c'est moi qui m'suis gouré en disant mon nom. Sinon, en Bretagne, c'est le Gros Faisan au sud, et au nord, c'est juste Ducon ..";
            } else if (phrase.includes("trouver")) {
                percevalOutput = "Probablement à la taverne";
            } else if (phrase.includes("désol")) {
                percevalOutput = "Mais cherchez pas à faire des phrases pourries... On en a gros, c'est tout !";
            } else if (phrase.includes("graal")) {
                percevalOutput = "Si Joseph d'Arimathie a pas été trop con, vous pouvez être sûr que le Graal, c'est un bocal à anchois.";
            } else if (phrase.includes("strat")) {
                percevalOutput = "Faut faire comme avec les scorpions qui se suicident quand ils sont entourés par le feu";
            } else if (phrase.includes("abrut") || phrase.includes("débil")) {
                percevalOutput = "Toi, un jour, je te crâme ta famille, toi.";
            } else if (phrase.includes("après demain")) {
                percevalOutput = "Après demain, à partir d'aujourd'hui ?";
            } else if (phrase.includes("12")) {
                percevalOutput = "13, 14, 15... Enfin tous les chiffres impairs jusqu'à 22.";
            }
            if (typeof phrase === "string" && phrase !== "") {
                chatbox.append("<div class='user-message'><span>" + phrase + "</span></div>");
                setTimeout(function() {typing.append("<span id='waiting'> Perceval écrit... </span>")}, 1000);
                setTimeout(function() {chatbox.append("<div class='perceval-message'><span>" + percevalOutput + "</span></div>")}, 3000);
                setTimeout(function() {$("#waiting").remove()}, 3000);
                phraseClear.val("");
                setTimeout(function() {$(".chatbot").scrollTop($(".chatbot")[0].scrollHeight)}, 1000);
                setTimeout(function() {$(".chatbot").scrollTop($(".chatbot")[0].scrollHeight)}, 3000);
                $(".chatbot").scrollTop($(".chatbot")[0].scrollHeight);
            }
        }
    });

    $('#someTextBox').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){

        }
    });

    //Hover effect
    const chatbotMiniature = $("#chatbot-miniature");
    const chatbotDots = $("#chatbot-dots");

    chatbotMiniature.hover(function () {
        chatbotDots.css("background-color", "var(--second-color)");
    });
    chatbotMiniature.mouseleave(function () {
        chatbotDots.css("background-color", "var(--main-color)");
    });
    chatbotDots.hover(function () {
       chatbotDots.css("background-color", "var(--second-color)");
    });
    chatbotDots.mouseleave(function () {
        chatbotDots.css("background-color", "var(--main-color)");
    });
});