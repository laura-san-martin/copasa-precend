<?php

$title = "PRECEND";
$video = "https://www.youtube.com/embed/xvb9BqK0NZE";

include('../components/header.php'); ?>

<?php 

$conteudoTextual = [];

$conteudoTextual[0]['titulo'] = "<h2>Para quem o<br/>PRECEND é destinado?</h2>";
$conteudoTextual[0]['texto'] = "<p>O programa visa o acompanhamento dos estabelecimentos comerciais, industriais e prestadores de serviços, que gerem efluentes com potencial para danificar a rede pública coletora de esgoto, prejudicar ou impedir o tratamento realizado nas Estações de Tratamento de Efluentes – ETEs da Copasa e/ou causar danos ao meio ambiente.</p>";

$conteudoTextual[1]['titulo'] = "<h2>Quando procurar a<br/>Copasa para falar sobre<br/>o PRECEND?</h2>";
$conteudoTextual[1]['texto'] = "<ul><li><p>Quando o estabelecimento gera efluente não doméstico e busca uma forma ambientalmente adequada de destiná-lo.</p></li><li><p>Quando o estabelecimento gera ou irá gerar efluente não doméstico e deseja uma nova ligação de esgoto.</p></li><li><p>Quando o estabelecimento está em processo de licenciamento e a Secretaria de Meio Ambiente/Prefeitura Municipal solicita o “Laudo de liberação das instalações sanitárias”.</p></li><li><p>Quando o estabelecimento está em processo de obtenção de alvará e a Secretaria de Meio Ambiente/Prefeitura Municipal solicita o “Laudo de liberação das instalações sanitárias”.</p></li></ul>";

?>
<div class="pt-4 pb-5 py-lg-5" ></div>
<section class="copasa__titulo-texto copasa__titulo-texto--color">
    <div class="copasa__titulo-texto__conteudo bg-pink color-pink mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 copasa__titulo-texto__conteudo__texto">
                    <h1>Para<br/><b>Quem</b></h1>
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