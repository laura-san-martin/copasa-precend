<?php

$opcoes = json_decode(
    '{
    "facebookLink": "https://www.facebook.com/copasaoficial",
    "youtubeLink": "https://www.youtube.com/user/TVCOPASAMG/",
    "twitterLink": "https://www.instagram.com/copasamg/",
    "instagramLink": "https://www.instagram.com/copasamg/",
    "videoPrecend": "https://www.youtube.com/embed/xvb9BqK0NZE",
    "videoEtapas": "https://www.youtube.com/embed/xvb9BqK0NZE",
    "videoDuvidas": "https://www.youtube.com/embed/xvb9BqK0NZE",
    "linkCopasa": "http://www.copasa.com.br/",
    "linkEsgoto": "http://www.copasa.com.br/wps/portal/internet/esgotamento-sanitario/o-sistema-de-esgoto",
    "linkLogin": "https://copasaatende.powerappsportals.com/",
    "linkConta": "https://copasaatende.powerappsportals.com/MyAccount/"
}', true
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://copasa-precend-wp.herokuapp.com/wp-json/copasa/apis/v1/opcoes",
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
  $opcoes = json_decode($response, true);
}

$title = "Dúvidas";
$video = $opcoes["videoDuvidas"];

include('../components/header.php'); ?>

<?php 

$conteudoTextual = [];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://copasa-precend-wp.herokuapp.com/wp-json/copasa/apis/v1/duvidas",
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
<?php foreach($conteudoTextual as $conteudo): ?>
    <div class="copasa__titulo-texto__conteudo bg-green color-green">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 copasa__titulo-texto__conteudo__texto">
                    <h2><b><?php echo $conteudo['titulo']; ?></b></h2>
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