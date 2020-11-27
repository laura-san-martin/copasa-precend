<?php

$title = "PRECEND";
$video = "https://www.youtube.com/embed/xvb9BqK0NZE";

include('../components/header.php'); ?>

<?php 

$conteudoTextual = [];

$conteudoTextual[0]['titulo'] = "<img src='".$preUrl."/public/imgs/pics/copasa-banner-home.jpg' />";
$conteudoTextual[0]['texto'] = "<h3>Solicitação do “Laudo de<br/>liberação dasinstalações<br/>sanitárias”</h3><p>Cliente procura a Copasa, através do telefone 115 ou agência de atendimento, para solicitação do documento destinado ao Órgão Ambiental.</p>";

$conteudoTextual[1]['titulo'] = "<img src='".$preUrl."/public/imgs/pics/copasa-banner-home.jpg' />";
$conteudoTextual[1]['texto'] = "<h3>Vistoria inicial<br/>da Copasa</h3><p>Copasa irá identificar a necessidade ou não de ingresso no programa PRECEND. Para os imóveis dispensados de ingresso será emitido um laudo que será entregue pessoalmente na agência de atendimento da Copasa e poderá ser levado ao Órgão Ambiental.</p>";

$conteudoTextual[2]['titulo'] = "<img src='".$preUrl."/public/imgs/pics/copasa-banner-home.jpg' />";
$conteudoTextual[2]['texto'] = "<h3>Solicitação de ingresso e<br/>liberação de documento para<br/>órgão ambiental</h3><p>Por e-mail, o estabelecimento informará dados básicos, como razão social, endereço e CNPJ, e terá seu ingresso oficial.<br/>Nesse momento, a Copasa fornecerá um documento para que o estabelecimento informe ao Órgão Ambiental que iniciou o processo e receberá o prazo para elaboração do Projeto.<br/>Também receberá como resposta para o e-mail todas as orientações para desenvolvimento do projeto que deverá ser entregue à Copasa: Termo de Referência e Norma Técnica T. 187/6.</p>";

$conteudoTextual[3]['titulo'] = "<img src='".$preUrl."/public/imgs/pics/copasa-banner-home.jpg' />";
$conteudoTextual[3]['texto'] = "<h3>Elaboração de<br/>Projeto Técnico</h3><p>Deverá ser elaborado um Projeto Técnico, conforme orientações recebidas por e-mail, no qual o estabelecimento irá demonstrar para a Copasa as principais redes: doméstica, não doméstica e pluvial, os processos realizados no local, os produtos utilizados, os controles existentes e como pretende se ajustar para atendimento aos limites previstos na Norma Técnica T.187/6.</p>";

$conteudoTextual[4]['titulo'] = "<img src='".$preUrl."/public/imgs/pics/copasa-banner-home.jpg' />";
$conteudoTextual[4]['texto'] = "<h3>Assinatura<br/>de contrato </h3><p>Aprovado o projeto, a Copasa e o estabelecimento assinarão um contrato, onde constarão as obrigações das partes e possíveis sanções em caso de descumprimento.</p>";

$conteudoTextual[5]['titulo'] = "<img src='".$preUrl."/public/imgs/pics/copasa-banner-home.jpg' />";
$conteudoTextual[5]['texto'] = "<h3>Automonitoramento<br/>e acompanhamento </h3><p>Uma das obrigações previstas em contrato é a realização de uma coleta, periódica, pelo estabelecimento, e encaminhamento dos resultados para acompanhamento pela Copasa.</p><p>A coleta e análise deverão ser realizadas por laboratório acreditado/homologado pela Rede Metrológica ou INMETRO. A Copasa avaliará os resultados e fará fiscalizações para acompanhamento das coletas e análises, conforme previsto em contrato.</p>";

?>

<div class="pt-4 pb-5 py-lg-5" ></div>
<section class="copasa__titulo-texto copasa__titulo-texto--video">
    <div class="copasa__titulo-texto__conteudo mt-5">
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
<?php foreach($conteudoTextual as $conteudo): ?>
    <div class="copasa__titulo-texto__conteudo">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 copasa__titulo-texto__conteudo__texto">
                    <?php echo $conteudo['titulo']; ?>
                </div>
                <div class="col-12 col-md-6 copasa__titulo-texto__conteudo__texto">
                    <div>
                        <?php echo $conteudo['texto']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>

<section class="copasa__menu--alt mt-5">
    <?php include('../components/menu.php'); ?>
</section>

<?php include('../components/footer.php'); ?>