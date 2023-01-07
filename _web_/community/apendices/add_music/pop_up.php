<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../elements/default.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../../elements/default.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../elements/responsive.css">
    <link rel="stylesheet" href="../create_gp/style.css">
</head>
<body>
    <div class="layer">
        <div class="popup ">
            <div class="close_btn" onclick="add_music_pop_js()"><img src="https://img.icons8.com/fluent-systems-filled/48/000000/x.png"/></div>
            <center>
            <form action="#" method="POST">
                <h2>Adicionar música</h2>

                <label for="nome_musica">Nome da música: </label><input type="text" name="nome_musica" id="nome_musica" required><br><br>
                <label for="nome_musica">Nome da banda: </label><input type="text" name="nome_banda" id="nome_banda" required><br><br>
                <label for="arquivo_musica">Arquivo da música</label><input type="file" name="arquivo_musica" id="arquivo_musica" required accept=".mp3"><br><br>
                <p>*Certifique-se de que o arquivo está no formato MP3</p><br><br>
                <input type="submit" value="Enviar">
            </form>
            </center>
        </div>
    </div>

  <!--   <div class="popup" onclick="myFunction()">Click me!
    <span class="popuptext" id="myPopup">Popup text...</span>
    </div> -->

</body>
</html>