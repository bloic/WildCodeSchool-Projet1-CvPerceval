$(document).ready(function () {
    $("#chatbot-send").click(function chatbotAnswer() {
        var phrase = $("#user-phrase").val();
        if (typeof phrase === "string" && phrase != "") {
            $("#chatbox").append("<div class='user-message'><span>" + phrase + "</span></div>");
            $("#chatbox").append("<div class='perceval-message'><span>C'est pas faux</span></div>");
            $("#user-phrase").val("");
        } else{
            $("#chatbox").append("<div class='perceval-message'><span>Merci d'écrire quelque chose</span></div>");
        }
    });
});