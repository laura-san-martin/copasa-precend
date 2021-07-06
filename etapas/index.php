<?php

$title = "Etapas";
include('../components/header.php'); 
$video = $opcoes["videoPrecend"];

$conteudoEtapasFile = file_get_contents($_SERVER['DOCUMENT_ROOT'].$preUrl."/public/static/etapas.json");
$conteudoEtapas = json_decode($conteudoEtapasFile, true);

$count = 0;
?>

<section class="copasa__titulo-texto copasa__titulo-texto--video">
    <div class="copasa__titulo-texto__conteudo">
        <div class="container pt-4 pt-md-0 ">
            <div class="row">
                <div class="col-6 copasa__titulo-texto__conteudo__texto">
                    <h1><b>Etapas</b></h1>
                </div>
                <div class="col-6 pl-0 d-none d-md-block">
                    <?php include('../components/video.php'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="copasa__titulo-texto color-white">
<?php foreach($conteudoEtapas as $conteudo): ?>
    <?php if($count%2 == 0): ?>
    <div class="copasa__titulo-texto__conteudo">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 copasa__titulo-texto__conteudo__texto">
                    <img src="<?php echo $conteudo['arquivo']; ?>" />
                </div>
                <div class="col-12 col-md-6 copasa__titulo-texto__conteudo__texto">
                    <div>
                        <?php echo $conteudo['texto']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="copasa__titulo-texto__conteudo">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-1 copasa__titulo-texto__conteudo__texto copasa__titulo-texto__conteudo__texto--alt">
                    <div>
                        <?php echo $conteudo['texto']; ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 copasa__titulo-texto__conteudo__texto">
                    <img src="<?php echo $conteudo['arquivo']; ?>" />
                </div>
            </div>
        </div>
    </div>
    <?php endif;
    $count++; ?>
    <?php endforeach; ?>
</section>

<section class="copasa__menu--alt mt-5">
    <?php include('../components/menu.php'); ?>
</section>

<?php include('../components/footer.php'); ?>