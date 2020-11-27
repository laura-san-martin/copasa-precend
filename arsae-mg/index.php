<?php

$title = "PRECEND";
$video = "https://www.youtube.com/embed/xvb9BqK0NZE";

include('../components/header.php'); ?>

<?php 

$conteudoTextual = [];

$conteudoTextual[0]['titulo'] = "<h2>A ARSAE-MG</h2>";
$conteudoTextual[0]['texto'] = "<p class='text-justify'>A Agência Reguladora de Serviços de Abastecimento e Esgotamento Sanitário do Estado de Minas Gerais (ARSAE-MG) objetiva regulamentar a prestação de serviços de abastecimento de água e de esgotamento sanitário de todas as operadoras de saneamento atuantes no estado de Minas Gerais.</p><p class='text-justify'>A Copasa segue as regulamentações determinadas pela ARSAE-MG para desenvolver seus processos e serviços. Dentre as regulamentações da ARSAE-MG para o controle de efluentes não domésticos, se destacam:</p>";

$conteudoTextual[1]['titulo'] = "<h2>Resolução ARSAE MG nº 40/2013</h2>";
$conteudoTextual[1]['texto'] = "<p class='text-justify'>Art. 45 Não é permitido despejar na rede coletora de esgoto, sem tratamento prévio, efluente não doméstico que contenha substância que, por sua natureza, possa danificá-la, obstruí-la, ou interferir no processo de depuração de Estação de Tratamento de Esgoto ou causar dano ao meio ambiente, ao patrimônio público ou a terceiro.</p><p class='text-justify'>§ 1° O efluente não doméstico, para ser lançado diretamente na rede coletora de esgoto, deverá obedecer a características biológicas e físico-químicas definidas em norma específica do prestador, homologada pela ARSAE-MG.</p><p class='text-justify'>§ 2° Constatado que o efluente não doméstico não atende às normas específicas para o lançamento na rede pública de esgoto, a autoridade ambiental competente deverá ser informada pelo prestador.<br/>Art. 117 Considera-se conduta irregular do usuário passível de sanção pelo prestador:<br/>X – Lançamento na rede de esgoto de efluentes não domésticos que, por suas características, exijam tratamento prévio;</p><p class='text-justify'>Assim, a Copasa recebe os efluentes não domésticos no seu sistema público de esgotos e os encaminha, conjuntamente com os efluentes domésticos, às estações de tratamento. Portanto, é fundamental que os estabelecimentos garantam o atendimento aos padrões de lançamento determinados pela T.187/6, documento homologado pela ARSAE.</p>";

$conteudoTextual[2]['titulo'] = "<h2>Resolução ARSAE MG nº 117/2018</h2>";
$conteudoTextual[2]['texto'] = "<p class='text-justify'>Homologa a Norma Técnica T.187/6 – Lançamento de Efluentes não Domésticos no Sistema de Esgotamento Sanitário da Companhia de Saneamento de Minas Gerais – COPASA MG.<br/>Uma vez acompanhada pelo PRECEND, a destinação do esgoto do estabelecimento é considerada ambientalmente monitorada, o que pode ser atestado pela Copasa aos Órgãos ambientais.</p>";

?>

<div class="pt-4 pb-5 py-lg-5" ></div>
<section class="copasa__titulo-texto copasa__titulo-texto--color">
    <div class="copasa__titulo-texto__conteudo bg-yellow color-yellow  mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 copasa__titulo-texto__conteudo__texto">
                    <h1>Resolução<br/><b>ARSAE-MG</b></h1>
                </div>
                <div class="col-12 col-md-6 d-flex copasa__titulo-texto__conteudo__texto">
                    <h4 class="text-md-center">Resolução<br/>nº 40/2013</h4>
                    <h4 class="text-right text-md-center">Resolução<br/>nº 117/2018</h4>
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