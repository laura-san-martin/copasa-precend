<?php

$title = "Dúvidas";
$video = "https://www.youtube.com/embed/xvb9BqK0NZE";

include('../components/header.php'); ?>

<?php 

$conteudoTextual = [];

$conteudoTextual[0]['titulo'] = "<h2><b>Valores</b></h2>";
$conteudoTextual[0]['texto'] = "<h3>Quanto <br/><b>é cobrado?</b></h3><p>Não há cobranças pela participação no PRECEND. As cobranças são exclusivas para irregularidades, se acontecerem, conforme definido no contrato assinado pelo estabelecimento e pela Copasa.</p><p>As penalidades por irregularidade dizem respeito à destinação de efluente irregular à rede pública.</p><p>Os custos que o estabelecimento pode ter estão relacionados ao projeto, se necessário, e à contratação de laboratório, à sua escolha, para realização de análises de automonitoramento.</p>";

$conteudoTextual[1]['titulo'] = "<h2><b>Efluentes<br/>Líquidos</b></h2>";
$conteudoTextual[1]['texto'] = "<h3>Quando é<br/>necessário<br/>um sistema de<br/><b>pré-tratamento de<br/>efluentes líquidos?</b></h3><p>Durante a elaboração do projeto, é solicitada uma análise do efluente do estabelecimento. Somente a partir dessa análise poderá ser identificado o que será necessário para atendimento ao previsto na T.187/6.</p><p>Muitas vezes somente a alteração noprocesso produtivo ou dos produtos utilizados é suficiente para atendimento ao limite da norma, em outros casos, são necessárias caixas separadoras e retentoras, também podem ser necessários tratamentos maiores e específicos, sempre em função dos resultados da análise realizada.</p>";

$conteudoTextual[2]['titulo'] = "<h2><b>FATOR K</b></h2>";
$conteudoTextual[2]['texto'] = "<h3>O que é<br/><b>o Fator K?</b></h3><p>O Fator K é um cálculo de carga de poluição adotado na Norma Técnica 187/6. É utilizada uma tabela com valores de SST (Sólidos Suspensos Totais) e DQO (Demanda Química de Oxigênio).</p><p>Portanto, é um multiplicador que reflete o nível de poluição do efluente do estabelecimento e não há limite máximo. Para valores de SST < 300mg/L e DQO < 450mg/L, o fator é igual a 1, ou seja, não há cobrança extra.</p>";

$conteudoTextual[3]['titulo'] = "<h2><b>CONSULTORIA</b></h2>";
$conteudoTextual[3]['texto'] = "<h3>É necessário<br/>contratar uma<br/><b>empresa de engenharia<br/>e consultoria?</b></h3><p>A Copasa não exige responsável técnico de engenharia para descrição e apresentação do Projeto. Todas as instruções e informações “passo a passo” constam do Termo de Referência, e, desde que seguidas, podem dar origem ao Projeto do estabelecimento.</p><p>A responsabilidade pela solução adotada e pela qualidade do esgoto destinada à rede pública é do estabelecimento, ainda que a equipe técnica do PRECEND se disponha a orientar e contribuir, sempre que solicitada.</p>";

$conteudoTextual[4]['titulo'] = "<h2><b>MULTA</b></h2>";
$conteudoTextual[4]['texto'] = "<h3>Qual o<br/><b>valor da multa?</b></h3><p>A multa é um percentual aplicado sobre o valor do esgoto cobrado na última fatura. Consta no contrato assinado entre o estabelecimento e a Copasa o percentual da cobrança e as circunstâncias que a sanção é aplicada.</p>";

?>

<div class="pt-4 pb-5 py-lg-5" ></div>
<section class="copasa__titulo-texto copasa__titulo-texto--video--alt">
    <div class="copasa__titulo-texto__conteudo mt-5">
        <div class="container pt-4 pt-md-0 ">
            <div class="row">
                <div class="col-12 col-md-5 copasa__titulo-texto__conteudo__texto color-white">
                    <div>
                        <h1 class="big">Dúvidas</h1>
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
<?php foreach($conteudoTextual as $conteudo): ?>
    <div class="copasa__titulo-texto__conteudo bg-green color-green">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 copasa__titulo-texto__conteudo__texto">
                    <?php echo $conteudo['titulo']; ?>
                </div>
                <div class="col-12 col-md-7 d-flex copasa__titulo-texto__conteudo__texto">
                    <div><?php echo $conteudo['texto']; ?></div>
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