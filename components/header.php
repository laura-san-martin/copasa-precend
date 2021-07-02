<?php 
$preUrl = "";

$opcoes = json_decode(
    '{
    "facebookLink": "https://www.facebook.com/copasaminas",
    "youtubeLink": "https://www.youtube.com/user/TVCOPASAMG/",
    "twitterLink": "https://www.instagram.com/aquitemcopasa/",
    "instagramLink": "https://www.instagram.com/aquitemcopasa/",
    "linkedinLink": "https://www.instagram.com/aquitemcopasa/",
    "videoPrecend": "https://www.youtube.com/embed/xvb9BqK0NZE",
    "videoEtapas": "https://www.youtube.com/embed/xvb9BqK0NZE",
    "videoDuvidas": "https://www.youtube.com/embed/xvb9BqK0NZE",
    "linkCopasa": "http://www.copasa.com.br/",
    "linkEsgoto": "https://copasaportalprd.azurewebsites.net/copasa.portal",
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- PAGE TITLE -->
    <title>Copasa - <?php echo $title ?></title>
    <!-- FAVI ICON -->
    <link rel="shortcut icon" type="image/png" href="<?php echo $preUrl ?>/public/imgs/icons/favicon.ico">
    <!-- STYLES -->
    <link href="<?php echo $preUrl ?>/public/scripts/main.css" rel="stylesheet">
    <!-- SCRIPTS -->
    <script src="<?php echo $preUrl ?>/public/scripts/index.js" type="text/javascript"></script>
</head>
<body class="copasa" id="top">
    <!-- NAVIGATION -->
    <header>
        <nav class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex">
                        <svg class="navigation__menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                        <a class="navigation__logo scroll-to" href="<?php echo $preUrl ?>/">
                            <img src="<?php echo $preUrl ?>/public/imgs/logos/logo-precend.png" alt="Logo Copasa" />
                        </a>
                        <!-- MENU -->
                        <div class="navigation__sections">
                            <a href="<?php echo $opcoes["linkLogin"] ?>"  target="_blank">
                            <u>
                                Copasa Atende</u>
                            </a>
                            <a href="<?php echo $opcoes["linkConta"] ?>"  target="_blank">
                            <u>
                                Portal PRECEND</u>
                            </a>
                        </div>
                        <!-- SOCIAL -->
                        <div class="navigation__social">
                            <a class="navigation__social__icon" target="_blank" href="<?php echo $opcoes["facebookLink"] ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512">
                                    <path
                                        d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229" />
                                </svg>
                            </a>
                            <a class="navigation__social__icon"  target="_blank" href="<?php echo $opcoes["instagramLink"] ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                            <a class="navigation__social__icon" target="_blank" href="<?php echo $opcoes["twitterLink"] ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                </svg>
                            </a>
                            <a class="navigation__social__icon" target="_blank" href="<?php echo $opcoes["youtubeLink"] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                                </svg>
                            </a>
                            <a class="navigation__social__icon" target="_blank" href="<?php echo $opcoes["linkedinLink"] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="3FFF" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>