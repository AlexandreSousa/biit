<?php
// não existe variável via url , a ligua é pt
if(!isset($_GET["lang"])){
    $lingua = "pt_br";
}else{
// senão a ligua é aquela selecionada pelo utilizador1
    $lingua = $_GET["lang"];
}

// impede que sejam carregados ficheiros diferentes
if($lingua=="pt_br" || $lingua=="en"){
// utiliza o valor da variável  $lingua para carregar o ficheiro
    include( 'i18n/'.$lingua.".php");
}
// cria os links para selecção das línguas
echo "<a href=\"". basename(__FILE__)."?lang=pt_br\" target=\"_self\">
Português </a>";
echo "&nbsp;&nbsp;";
echo "<a href=\"". basename(__FILE__)."?lang=en\" target=\"_self\">
English </a>";

//imprime o texto de acordo com a liguagem escolhida
echo "<br><hr><b>";
echo HELLO;
echo "</b>";

?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
  <meta charset="UTF-8">
  <title>Buscador Web</title>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link href="css/styler.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>

<div class="topo">Teste | Teste | Teste | Teste</div>

<div id="div">
<form method="post"action="" enctype="multipart/form-data" name="busca" id="busca">

Buscador: Biit

    <div class="row">
         <div class="col-lg-6">
            <div class="input-group">
                <input type="text" name="io" id="io" class="form-control">
      <span class="input-group-btn">
        <input class="btn btn-default" value="<?php echo GO ?>" type="submit">
      </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->

</form>
    Ola
</div>
    <?php ?>
</body>
</html>