<?php

$title = "PRECEND";
$video = "https://www.youtube.com/embed/xvb9BqK0NZE";

include('../components/header.php'); ?>

<?php 

$documentos = [];

$documentos[0]['titulo'] = "Documento";
$documentos[0]['link'] = "https://consultideal.com.br/wp-content/uploads/2020/09/IDEAL-EBOOK-INDICADORES-DA-PANIFICA%C3%87%C3%83O-PRIMEIRO-SEMESTRE-2020.pdf";

$documentos[1]['titulo'] = "Documento";
$documentos[1]['link'] = "https://consultideal.com.br/wp-content/uploads/2020/09/IDEAL-EBOOK-INDICADORES-DA-PANIFICA%C3%87%C3%83O-PRIMEIRO-SEMESTRE-2020.pdf";

$documentos[2]['titulo'] = "Documento";
$documentos[2]['link'] = "https://consultideal.com.br/wp-content/uploads/2020/09/IDEAL-EBOOK-INDICADORES-DA-PANIFICA%C3%87%C3%83O-PRIMEIRO-SEMESTRE-2020.pdf";

$documentos[3]['titulo'] = "Documento";
$documentos[3]['link'] = "https://consultideal.com.br/wp-content/uploads/2020/09/IDEAL-EBOOK-INDICADORES-DA-PANIFICA%C3%87%C3%83O-PRIMEIRO-SEMESTRE-2020.pdf";

$documentos[4]['titulo'] = "Documento";
$documentos[4]['link'] = "https://consultideal.com.br/wp-content/uploads/2020/09/IDEAL-EBOOK-INDICADORES-DA-PANIFICA%C3%87%C3%83O-PRIMEIRO-SEMESTRE-2020.pdf";

$documentos[5]['titulo'] = "Documento";
$documentos[5]['link'] = "https://consultideal.com.br/wp-content/uploads/2020/09/IDEAL-EBOOK-INDICADORES-DA-PANIFICA%C3%87%C3%83O-PRIMEIRO-SEMESTRE-2020.pdf";

?>

<div class="mt-5 mb-4 pt-4 pb-5 py-lg-5" ></div>
<section class="copasa__titulo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="bg-green py-5">
                    <h1 class="text-center my-5 py-5"><b>Documentos</b></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="copasa__documentos pt-5">
    <div class="container">
        <div class="row">
            <?php $countDocumentos = 4;
             foreach($documentos as $documento): 
             $countDocumentos++;
             if($countDocumentos % 5 == 0){
                 echo '<div class="col-6 col-sm-3 col-lg-2 offset-lg-1">';
             }else{
                 echo '<div class="col-6 col-sm-3 col-lg-2">';
             }
             ?>
                <a class="copasa__documentos__item" href="<?php echo $documento['link']; ?>" download>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 1153 1569.6">
<path fill="#2660AB" d="M876.6,3.8l272.6,272.6c2.5,2.5,3.8,5.6,3.8,9.1c0,423.7,0,847.5,0,1271.2c0,7.1-5.8,12.9-12.9,12.9H12.9
	c-7.1,0-12.9-5.8-12.9-12.9V12.9C0,5.8,5.8,0,12.9,0h854.6C871.1,0,874.1,1.3,876.6,3.8L876.6,3.8z M1083.2,320.5H855.8
	c-7.1,0-12.9-5.8-12.9-12.9V69.8h-773v1430h1013.4V320.5L1083.2,320.5z"/>
<path fill="#2660AB" d="M179.9,421.5h542.8c1.7,0,3.1,1.4,3.1,3.1v45.5c0,1.7-1.4,3.1-3.1,3.1H179.9c-1.7,0-3.1-1.4-3.1-3.1v-45.5
	C176.8,422.9,178.2,421.5,179.9,421.5L179.9,421.5z"/>
<path fill="#2660AB" d="M179.9,587H973c1.7,0,3.1,1.4,3.1,3.1v45.5c0,1.7-1.4,3.1-3.1,3.1H179.9c-1.7,0-3.1-1.4-3.1-3.1v-45.5
	C176.8,588.4,178.2,587,179.9,587L179.9,587z"/>
<path fill="#2660AB" d="M179.9,752.5H973c1.7,0,3.1,1.4,3.1,3.1v45.5c0,1.7-1.4,3.1-3.1,3.1H179.9c-1.7,0-3.1-1.4-3.1-3.1v-45.5
	C176.8,753.9,178.2,752.5,179.9,752.5L179.9,752.5z"/>
<path fill="#2660AB" d="M179.9,918H973c1.7,0,3.1,1.4,3.1,3.1v45.5c0,1.7-1.4,3.1-3.1,3.1H179.9c-1.7,0-3.1-1.4-3.1-3.1v-45.5
	C176.8,919.4,178.2,918,179.9,918L179.9,918z"/>
<path fill="#2660AB" d="M179.9,1083.5H973c1.7,0,3.1,1.4,3.1,3.1v45.5c0,1.7-1.4,3.1-3.1,3.1H179.9c-1.7,0-3.1-1.4-3.1-3.1v-45.5
	C176.8,1084.9,178.2,1083.5,179.9,1083.5L179.9,1083.5z"/>
<path fill="#2660AB" d="M179.9,1249H973c1.7,0,3.1,1.4,3.1,3.1v45.5c0,1.7-1.4,3.1-3.1,3.1H179.9c-1.7,0-3.1-1.4-3.1-3.1v-45.5
	C176.8,1250.4,178.2,1249,179.9,1249L179.9,1249z"/>
</svg>
                    <p><?php echo $documento['titulo']; ?></p>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="copasa__menu--alt">
    <?php include('../components/menu.php'); ?>
</section>

<?php include('../components/footer.php'); ?>