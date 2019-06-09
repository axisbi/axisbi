<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/stylep.css">

    <title>Axis Analytics</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




    <!-- Custom styles for this template -->
    <style>



body, html{
width: 100%;
height: 100%;
font-family: sans-serif;
font-size:22px;
line-height: 1.3;
}
.bg_video{
position: fixed;
right: 0;
bottom: 0;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -1000;
background-size: cover;
filter: blur(15px);
}
.body{
padding:20px;
background: rgba(255,255,255,0.9);
margin: 30% auto 20px auto;
max-width: 960px;
border-radius: 10px;
}
.body h1{
font-family: Georgia, serif;
font-size:40px;
}
.body p{
margin: 1.6em 0;
}


    </style>
</head>

    <body class="fundo">

        <video class="bg_video" Autoplay muted loop src="media/fundo.mp4"></video>
        <input type="button" class="btn btn-sm btn-success" id="btsair" value="  Sair  " onclick="sair()"/>

        <div class="container">
            <a class="links" id="paracadastro"></a>
            <a class="links" id="paralogin"></a>

            <div class="content">
                <!--FORMULÁRIO DE LOGIN-->
                <div id="login">
                    <form method="post" action="#">
                        <img class="imgcenter" src="img/logo.png" alt="logo">
                        <div class="pp">

                            <p>
                                <input id="nome_usuario" name="nome_usuario" required="required" type="text" placeholder="LOGIN" />
                            </p>
                            <br>
                            <p>
                                <input type="password" id="nome_senha" name="nome_senha" required="required" placeholder="SENHA" />
                            </p>
                            <text id="bla"></text>

                            <p>
                                <input class="btn" type="submit" value="Acessar" onclick="return logar();" />
                                <br>
                                <a href="#">Equeci a minha senha.</a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</body>





<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

<script>
    function logar() {
        var nome_usuario2 = $("input[name=nome_usuario]").val();
        var senha2 = $("input[name=nome_senha]").val();

        $.ajax({
            type: "post",
            data: {"nm_usr":nome_usuario2, "key_usr":senha2},
            dataType: "html",
            url:"php/login.php",

            success: function(result){
                if(result != 'ERRO'){
                    window.location.replace("painel/index.php");
                } else {
                    $("#bla").html('');
                    $("#bla").append("Usuário ou senha inválido! <br>");
                    $("#bla").append("<br>");
                    $("#bla").css({color:"red"});

                }

            },
            beforeSend: function(){

            },
            complete: function(msg){

            }

        });


        return false;

    }
</script>

<script>
    function sair() {
        window.location.replace("index.html");
    }
</script>


</html>
