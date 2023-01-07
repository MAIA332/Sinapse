<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinapse | Criar Grupos</title>
    <link rel="stylesheet" href="../../../elements/default.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../../elements/responsive.css">
    <link rel="icon" type="image/png" sizes="96x96" href="../../../../_midia_/fav/ms-icon-310x310.png">
    <script src="../../../elements/default.js"></script>
</head>
<body>
    <center>
    <div class="container_principal">
        <h1 class="title">Criar grupo</h1>
        <hr>

        <form action="#" method="POST">

            <label for="nome_gp">Nome do grupo: </label><input type="text" name="nome_gp" id="nome_gp" required><br><br>
            
            <label>Acesso do grupo: </label>
            <label for="private">Privado</label><input type="checkbox" name="private" id="private" class="checkgroup">
            <label for="public">Público</label><input type="checkbox" name="public" id="public" class="checkgroup">
            
            <input type="password" name="senha_gp" id="senha_gp" placeholder="senha do gupo privado" class="senha_gp"><br><br>

            <label for="img_gp">Imagem de capa: </label><input type="file" name="img_gp" id="img_gp" required accept="image/*"><br><br>
            <label for="email_moderador">Email do moderador: </label><input type="email" name="email_moderador" id="email_moderador" required><br><br>
            <label for="tel_moderador">Telefone do moderador: </label><input type="number" name="tel_moderador" id="tel_moderador" required><br><br>

            <textarea name="descricao_gp" id="descricao_gp" cols="80" rows="10" placeholder="Descrição do grupo"></textarea><br><br>
            <p>Obs: As solicitações levam até 1 dia útil para serem avaliadas</p>
            <input type="submit" value="Enviar Solicitação">
        </form>
    </div>
    </center>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

$(function(){
       $('input.checkgroup').click(function(){
          if($(this).is(":checked")){
             $('input.checkgroup').attr('disabled',true);
             $(this).removeAttr('disabled');
          }else{
             $('input.checkgroup').removeAttr('disabled');
          }
       })
    })

</script>