<?php
   ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ERROR | E_PARSE | E_WARNING );
    
require_once ('includes/config.php');
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


/**
 * envio da busca
 */

$busca = $_POST['busca'];
$idf = "%$busca%";

if(isset($busca)) {
    $qr_busca = $db->query("SELECT * FROM id_sites WHERE `desciption` LIKE CONVERT(_utf8 '$idf' USING latin1)");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="pt-br">
  <meta charset="UTF-8">
  <title>Buscador Deep Web Sinta</title>
    <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link href="css/styler.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>

<ul class="nav ">


    <a href="<?php echo  basename(__FILE__)."?lang=pt_br" ?>"><span class="label label-success">PT-BR</span>
    <a href="<?php echo  basename(__FILE__)."?lang=en" ?>"><span class="label label-primary">EN</span></a>
    <span class="label label-default">????</span>
    <span class="label label-info">????</span>
    <span class="label label-warning">????</span>


</ul>

<hr>

<b>

<?php
echo $qt_busca = $qr_busca->num_rows;
if($qt_busca > 0){

  }else{ ?>
        <div id="div">
    <?php
    }
    ?>
<form role="form" method="post"action="" enctype="multipart/form-data" name="busca" id="busca">
    <div class="form-group">
        <label for="searchBar">Buscador Sintag</label>
        <div class="input-group" style="width: 400px;"><!--Estava faltando essa div-->
            <input type="text" class="form-control" name="busca" id="searchBar" placeholder="Procurar por:" />
            <span class="input-group-btn"><!--Estava faltando esse span-->
                <button style="height: 34px;" type="submit" class="btn btn-info" value="Procurar">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </div>
</form>
<a href="#">Sinalizar</a><a href="#">#</a><a href="#">#</a><a href="#">#</a>



    <?php if($qt_busca > 0){ ?>
    <hr>

        <?php
   while($row = $qr_busca->fetch_array()){
       
       ?>
         <b><a href="http://<?php echo $row['title'];?> " target="_blank" style="font-size: 12px; color: #2a6496;"><?php echo $row['title'].'<br>'; ?></a></b>
         <i><font size="2"> <?php echo utf8_encode($row['desciption']).'<br>'; ?></font></i>
         <b><a><a href="http://<?php echo $row['url'];?>" target="_blank"  style="font-size: 12px; color: green;"><?php echo $row['url'].'<br>'; ?></a> </b>
        
        <?php
        }
  
    }
   ?>
   
<?php
if($qt_busca > 0){

  }else{ ?>
        </div">
    <?php
    }
    ?>
   
</body>
</html>
