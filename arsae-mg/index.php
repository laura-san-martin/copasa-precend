<?php

$title = "Resoluções";
include('../components/header.php'); 
$video = $opcoes["videoPrecend"];

$conteudoResolucoesFile = file_get_contents($_SERVER['DOCUMENT_ROOT'].$preUrl."/public/static/resolucoes.json");
$conteudoResolucoes = json_decode($conteudoResolucoesFile, true);


?>

<section class="copasa__titulo-texto copasa__titulo-texto--color">
    <div class="copasa__titulo-texto__conteudo bg-yellow color-yellow ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 copasa__titulo-texto__conteudo__texto">
                    <h1>Resolução<br/><b>ARSAE-MG</b></h1>
                </div>
                <div class="col-12 col-md-6 d-flex copasa__titulo-texto__conteudo__texto">
                    <h4 class="text-md-center">Resolução<br/>ARSAE-MG 130/2019</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="copasa__texto">
    <div class="container">
        <div class="row">
            <?php foreach($conteudoResolucoes as $conteudo): ?>
                <div class="col-12">
                    <div class="copasa__texto__conteudo">
                        <h2><?php echo $conteudo['titulo']; ?></h2>
                        <?php echo $conteudo['texto']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="copasa__menu--alt">
    <?php include('../components/menu.php'); ?>
</section>

<?php include('../components/footer.php'); ?>