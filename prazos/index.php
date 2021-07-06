<?php

$title = "Prazos";
include('../components/header.php'); 

$conteudoPrazosFile = file_get_contents($_SERVER['DOCUMENT_ROOT'].$preUrl."/public/static/prazos.json");
$conteudoPrazos = json_decode($conteudoPrazosFile, true);

?>

<section class="copasa__titulo-texto copasa__titulo-texto--color">
    <div class="copasa__titulo-texto__conteudo bg-pink color-pink ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 copasa__titulo-texto__conteudo__texto">
                    <h1 class="py-5"><b>Prazos</b></h1>
                </div>
                <div class="col-12 col-md-6 d-none d-md-flex copasa__titulo-texto__conteudo__texto no-pseudo">
                    <img src='<?php echo $preUrl ?>/public/imgs/pics/copasa-banner-home.jpg' />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="copasa__texto">
    <div class="container">
        <div class="row">
            <?php foreach($conteudoPrazos as $conteudo): ?>
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