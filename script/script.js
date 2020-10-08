$(document).ready(function () {

    $("#chatbot-send").click(function chatbotAnswer() {
        const phrase = $("#user-phrase").val();
        const phraseClear = $("#user-phrase");
        const chatbox = $("#chatbox");
        const typing = $("#typing");
        let percevalOutput = "c'est pas faux";
        if (phrase.includes("disponibilité") || phrase.includes("disponibilités")) {
            percevalOutput = "C'est pas quand y'a des infiltrations ça ?";
        }
        if (typeof phrase === "string" && phrase !== "") {
            chatbox.append("<div class='user-message'><span>" + phrase + "</span></div>");
            setTimeout(function() {typing.append("<span id='waiting'> Perceval écrit... </span>")}, 1000);
            setTimeout(function() {chatbox.append("<div class='perceval-message'><span>" + percevalOutput + "</span></div>")}, 3000);
            setTimeout(function() {$("#waiting").remove()}, 3000);phraseClear.val("");
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
            if (phrase.includes("disponibilité") || phrase.includes("disponibilités")) {
                percevalOutput = "C'est pas quand y'a des infiltrations ça ?";
            }
            if (typeof phrase === "string" && phrase !== "") {
                chatbox.append("<div class='user-message'><span>" + phrase + "</span></div>");
                setTimeout(function() {typing.append("<span id='waiting'> Perceval écrit... </span>")}, 1000);
                setTimeout(function() {chatbox.append("<div class='perceval-message'><span>" + percevalOutput + "</span></div>")}, 3000);
                setTimeout(function() {$("#waiting").remove()}, 3000);
                phraseClear.val("");
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