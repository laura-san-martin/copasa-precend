<?php

$title = "PRECEND";
$video = "https://www.youtube.com/embed/xvb9BqK0NZE";

include('../components/header.php'); ?>

<?php 

$conteudoTextual = [];

$conteudoTextual[0]['titulo'] = "<h2>Principais <br/>prazos</h2>";
$conteudoTextual[0]['texto'] = "<p>A Copasa analisa e emite parecer sobre projeto entregue, num prazo médio de 30 (trinta) dias. O estabelecimento deve informar a data da coleta pelo laboratório, com antecedência mínima de 10 (dez) dias, conforme previsto em contrato, para acompanhamento pela Copasa. Os prazos referentes ao licenciamento e a obtenção de alvará cabem ao Órgão Ambiental.</p><p>
A Copasa, durante o processo de avaliação, poderá emitir documento
informando a etapa em que se encontra o estabelecimento, caso seja solicitado.
Todas as solicitações de laudos, declarações, informações e vistorias, poderão ser enviadas para o e-mail precend@copasa.com.br.</p>";

?>

<div class="pt-4 pb-5 py-lg-5" ></div>
<section class="copasa__titulo-texto copasa__titulo-texto--color">
    <div class="copasa__titulo-texto__conteudo bg-pink color-pink mt-5 ">
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
            <?php foreach($conteudoTextual as $conteudo): ?>
                <div class="col-12">
                    <div class="copasa__texto__conteudo">
                        <?php echo $conteudo['titulo']; ?>
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