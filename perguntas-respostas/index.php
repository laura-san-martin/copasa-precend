<?php

$title = "Dúvidas";
include('../components/header.php'); 
$video = $opcoes["videoPrecend"];

$conteudoDuvidasFile = file_get_contents($_SERVER['DOCUMENT_ROOT'].$preUrl."/public/static/duvidas.json");
$conteudoDuvidas = json_decode($conteudoDuvidasFile, true);
?>

<section class="copasa__titulo-texto copasa__titulo-texto--video--alt">
    <div class="copasa__titulo-texto__conteudo">
        <div class="container pt-4 pt-md-0 ">
            <div class="row">
                <div class="col-12 col-md-5 copasa__titulo-texto__conteudo__texto color-white">
                    <div>
                        <h1>Perguntas <br/>e respostas</h1>
                        <h4>Mais informações<br/>
                        <b>sobre o PRECEND</b></h4>
                    </div>
                </div>
                <div class="col-7 pl-0 d-none d-md-block">
                    <?php include('../components/video.php'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="copasa__titulo-texto copasa__titulo-texto--color">
<?php foreach($conteudoDuvidas as $conteudo): ?>
    <div class="copasa__titulo-texto__conteudo bg-green color-green">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 copasa__titulo-texto__conteudo__texto">
                    <h2><b><?php echo $conteudo['titulo']; ?></b></h2>
                </div>
                <div class="col-12 col-md-7 d-flex copasa__titulo-texto__conteudo__texto">
                    <div class="justify-h3"><?php echo $conteudo['texto']; ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>

<section class="copasa__menu--alt">
    <?php include('../components/menu.php'); ?>
</section>

<?php include('../components/footer.php'); ?>