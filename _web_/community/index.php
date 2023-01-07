<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinapse | Community</title>
    <link rel="stylesheet" href="../elements/default.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../elements/responsive.css">
    <link rel="icon" type="image/png" sizes="96x96" href="../../_midia_/fav/ms-icon-310x310.png">
    <script src="../elements/default.js"></script>
    <script src="apendices/add_music/script.js"></script>
    <link rel="stylesheet" href="apendices/add_music/style.css">
</head>
<body>
    
    <?php include_once('../elements/header.php')?>

    <div id="ad_music_pop" class="hidden"><?php include_once('apendices/add_music/pop_up.php')?></div>
    
    <div class="section-jukebox">
        <h2>Jukebox</h2><hr>

        <div class="item-juke">
            <h3>Nome da musica - nome da banda</h3>
            <audio src="../../_midia_/audio/IntroSong.mp3" preload="auto" controls></audio>
        </div>
        <hr>
        <div class="item-juke">
            <h3>Nome da musica - nome da banda</h3>
            <audio src="#" preload="auto" controls></audio>
        </div>
        <hr>
        <div class="item-juke">
            <h3>Nome da musica - nome da banda</h3>
            <audio src="#" preload="auto" controls></audio>
        </div>
        <hr>

        <div class="item-juke">
            <h3>Nome da musica - nome da banda</h3>
            <audio src="#" preload="auto" controls></audio>
        </div>
        <hr>

    </div>
    <div class="btn-add-juke" onclick="add_music_pop_js()"><a href="#header">+ Adicionar música</a></div>
    <!-- div ainda referente a jukebox -->
    <div class="btn-add-gp"><a href="apendices/create_gp/create_grupos.php" target="_blank">+ Criar grupo</a></div>
    <!-- div ainda referente ao escopo da seção de grupos -->

    <div class="section-gp" id="section-gp">
        
        <div class="escopo">
            <div class="item-escopo"><h2>Grupos de discussão</h2></div>
            <div class="item-escopo"><h2>Mensagens</h2></div>
            <div class="item-escopo"><h2>Ultima postagem</h2></div>
            
            <div class="item-escopo">
                <form action="#" method="post">
                    <input type="text" name="search" id="search" placeholder="pesquisar palavra chave">
                    <input type="submit" value="pesquisar">
                </form>
            </div>

        </div>

        <hr>
        
        <div class="item-gp">
            <div class="gp-name"><h1><a href="../groups/index.php" target="_blank"> PHP Masters</a></h1></div>
            <img src="https://images.unsplash.com/photo-1599507593499-a3f7d7d97667?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTl8fHB5dGhvbiUyMHByb2dyYW1taW5nfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" >
            <div class="gp-desc">Grupo destinado para discussões sobre a linguagem PHP</div>
            <div class="gp-status"><p>Público</p></div>
            <div class="gp-last">07/12/2020</div>
            <hr>
        </div>

         
        <div class="item-gp">
            <div class="gp-name"><h1><a href="#" target="_blank">Pythonistas</a></h1></div>
            <img src="https://images.unsplash.com/photo-1526379095098-d400fd0bf935?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" >
            <div class="gp-desc">Aqui o python reina glr, bora trocar uma ideia sobre essa linguagem maravilhosa</div>
            <div class="gp-status"><p style="color: red;">Privado</p></div>
            <div class="gp-last">07/12/2020</div>
            <hr>
        </div>

        <div class="item-gp">
            <div class="gp-name"><h1><a href="#" target="_blank">SQLIFE</a></h1></div>
            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=891&q=80" >
            <div class="gp-desc">Chat para a glr que curte um banco de dados, bora trocar uma ideia</div>
            <div class="gp-status"><p>Público</p></div>
            <div class="gp-last">07/12/2020</div>
            <hr>
        </div>

        <div class="item-gp">
            <div class="gp-name"><h1><a href="#" target="_blank">DesignersxX</a></h1></div>
            <img src="https://images.unsplash.com/photo-1509343256512-d77a5cb3791b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" >
            <div class="gp-desc">Grupo para desinger trocarem experiências</div>
            <div class="gp-status"><p>Público</p></div>
            <div class="gp-last">07/12/2020</div>
            <hr>
        </div>

        <div class="item-gp">
            <div class="gp-name"><h1><a href="#" target="_blank">DesignersxX</a></h1></div>
            <img src="https://images.unsplash.com/photo-1509343256512-d77a5cb3791b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" >
            <div class="gp-desc">Grupo para desinger trocarem experiências</div>
            <div class="gp-status"><p>Público</p></div>
            <div class="gp-last">07/12/2020</div>
            <hr>
        </div>

        <div class="item-gp">
            <div class="gp-name"><h1><a href="#" target="_blank">DesignersxX</a></h1></div>
            <img src="https://images.unsplash.com/photo-1509343256512-d77a5cb3791b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" >
            <div class="gp-desc">Grupo para desinger trocarem experiências</div>
            <div class="gp-status"><p>Público</p></div>
            <div class="gp-last">07/12/2020</div>
            <hr>
        </div>

        <div class="item-gp">
            <div class="gp-name"><h1><a href="#" target="_blank">DesignersxX</a></h1></div>
            <img src="https://images.unsplash.com/photo-1509343256512-d77a5cb3791b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" >
            <div class="gp-desc">Grupo para desinger trocarem experiências</div>
            <div class="gp-status"><p>Público</p></div>
            <div class="gp-last">07/12/2020</div>
            <hr>
        </div>

        <input id="carregar" type="button" value="Exibir mais grupos" />

    </div>
    <div class="btn-top"><a href="#section-gp"><img src="https://img.icons8.com/metro/52/000000/long-arrow-up.png" title="voltar para o topo"/></a></div>
    <!-- div ainda referente ao escopo da seção de grupos -->


    <?php include_once('../elements/footer.php')?>

</body>
</html>

<!-- 
===================================SCRIPT MOSTRAR MAIS=========================================
=============================================================================================== -->

<script>
    var quantidade = 3;
    var carregar = document.getElementById("carregar");
    var conteudos = document.querySelectorAll(".item-gp");
    conteudos = [].slice.call(conteudos);
    conteudos.forEach(function (conteudo, indice) {
    conteudo.classList.add("hide");
    });

    var onCarregarClick = function (event) {
    for (var indice = 0; indice < quantidade; indice++) {
        var conteudo = conteudos.shift();
        if (conteudo)
        conteudo.classList.remove("hide");
        if (conteudos.length == 0) {
        carregar.classList.add("hide");
        return;
        }
    }
    }
    carregar.addEventListener("click", onCarregarClick);
    carregar.dispatchEvent(new Event("click"));
</script>
