<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatbot beta</title>
    <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script/script.js"></script>
</head>
<body>

</body>
</html>
<div id="aside-parent">
    <aside>
        <div id="chatbot">
            <div id="chatbot-top">
                <h2>Chatbot beta v0.9.9.8.2</h2>
                <a href="#chatbot-top" class="close-chatbot"><img id="close-button" src="img/close.png"
                                                                  alt="close icon"></a>
            </div>
            <div class="chatbox-top">
                <img src="img/perceval_miniature.jpg" alt="miniature chatbot">
                <h2>Perceval</h2>
                <div id="online"></div>
            </div>
            <div class="chatbot">

                <div class="perceval-message">
                    <span>Bonjour, je suis Perceval, posez-moi votre question</span>
                </div>
                <div id="chatbox"></div>
                <div id="typing"></div>
            </div>
            <div id="chatbox-bottom">
                <input id="user-phrase" type="text">
                <button id="chatbot-send">Envoyer</button>
            </div>
        </div>
        <div id="chatbot-button">
            <a href="#chatbot"><img id="chatbot-dots" src="img/dots.png"><img id="chatbot-miniature"
                                                                              src="img/perceval_miniature.jpg"
                                                                              alt="minature chatbot"></a>
        </div>
    </aside>
</div>


