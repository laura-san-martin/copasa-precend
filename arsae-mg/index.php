<?php

$title = "PRECEND";
$video = "https://www.youtube.com/embed/xvb9BqK0NZE";

include('../components/header.php'); ?>

<?php 

$conteudoTextual = [];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://copasa-precend-wp.herokuapp.com/wp-json/copasa/apis/v1/resolucoes",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  
} else {
  $conteudoTextual = json_decode($response, true);
}

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