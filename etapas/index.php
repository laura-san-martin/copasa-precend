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

$title = "PRECEND";
$video = $opcoes["videoEtapas"];

include('../components/header.php'); ?>

<?php 

$conteudoTextual = [];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://copasa-precend-wp.herokuapp.com/wp-json/copasa/apis/v1/etapas",
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
<?php foreach($conteudoTextual as $conteudo): ?>
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
    <?php endforeach; ?>
</section>

<section class="copasa__menu--alt mt-5">
    <?php include('../components/menu.php'); ?>
</section>

<?php include('../components/footer.php'); ?>