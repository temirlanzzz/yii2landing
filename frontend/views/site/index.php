<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
/** @var String $introtitle */
/** @var String $introimg */
/** @var String $introdescription */
/** @var String $servicetitles */
/** @var String $servicedescriptions */
/** @var String $serviceicons */
/** @var String $lang */
/** @var String $aboutdescription */
/** @var String $aboutimg */
/** @var String $teamtext1 */
/** @var String $teamtext2 */
/** @var String $teamtext2index */
/** @var String $expertnames */
/** @var String $expertpositions */
/** @var String $expertimages */
/** @var String $partnersmodels */
/** @var common\models\Request $requestmodel */
/** @var yii\widgets\ActiveForm $form */
if( sizeof($partnersmodels)%4!= 0){
    $partnersrows = sizeof($partnersmodels)/4 +1;
}else{
    $partnersrows = sizeof($partnersmodels)/4;
}

if($lang=='en') {
 $phonePlaceholder = "Your phone number";
 $NamePlaceholder = "Your name";
 $buttonName = "Send";
}
else if($lang=="kz") {
 $phonePlaceholder = "Телефон";
 $NamePlaceholder = "Аты-жөні";
 $buttonName = "Жіберу";
}
else {
$phonePlaceholder = "Ваш телефон";
 $NamePlaceholder = "Ваше имя";
 $buttonName = "Отправить";
}
$partnersrows=(int)$partnersrows;
$partners_index = 0;
$this->title = 'ESG Invest';
?>
<div class="container-fluid1" id="navbar-element" style="background: none;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="" style="width: 140px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?php 
                                if($lang=='en') 
                                    echo ("Home"); 
                                else if($lang=="kz") 
                                    echo ("Басты бет"); 
                                else 
                                    echo ("Главная");
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?php 
                                if($lang=='en') 
                                    echo ("About us"); 
                                else if($lang=="kz") 
                                    echo ("Біз туралы"); 
                                else 
                                    echo ("О нас");
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?php 
                                if($lang=='en') 
                                    echo ("Our services"); 
                                else if($lang=="kz") 
                                    echo ("Қызметтеріміз"); 
                                else 
                                    echo ("Услуги");
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?php 
                                if($lang=='en') 
                                    echo ("Partners"); 
                                else if($lang=="kz") 
                                    echo ("Серіктестер"); 
                                else 
                                    echo ("Партнеры");
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?php 
                                if($lang=='en') 
                                    echo ("Contacts "); 
                                else if($lang=="kz") 
                                    echo ("Бізбен байланыс"); 
                                else 
                                    echo ("Контакты");
                            ?>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item d-flex">

                        <a class="nav-link text-black mx-2 fs-18 lang-trigger text-uppercase <?= $lang=='ru' ? 'lang-active' : ''?>"
                            rel="alternate" hreflang="ru" href="">
                            RU
                        </a>
                        <a class="nav-link text-black mx-2 fs-18 lang-trigger text-uppercase <?= $lang=='en' ? 'lang-active' : ''?>"
                            rel="alternate" hreflang="en" href="">
                            EN
                        </a>
                        <a class="nav-link text-black mx-2 fs-18 lang-trigger text-uppercase <?= $lang=='kz' ? 'lang-active' : ''?>"
                            rel="alternate" hreflang="kz" href="">
                            KZ
                        </a>


                    </li>
                    <li class="nav-item d-flex">
                        <span class="d-block social-network-radius mx-1">
                            <a class="nav-link text-black-50 fs-18" aria-current="page" href="/about">
                                <i class="fab fa-facebook-f text-dark"></i>
                            </a>
                        </span>
                        <span class="d-block social-network-radius mx-1">
                            <a class="nav-link text-black-50 fs-18" aria-current="page" href="/about">
                                <i class="fab fa-linkedin-in text-dark"></i>
                            </a>
                        </span>
                        <span class="d-block social-network-radius mx-1">
                            <a class="nav-link text-black-50 fs-18" aria-current="page" href="/about">
                                <i class="fab fa-instagram text-dark"></i>
                            </a>
                        </span>

                    </li>


                </ul>
            </div>
        </div>

    </nav>
</div>
<section class="mt-0">
    <div class="container-fluid max-w-1600 py-5 position-relative">
        <img class="img-vector" src="/assets/images/Vector1.png">
        <img class="img-vector" src="/assets/images/Vector3.png">
        <div class="container pt-100">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 py-4 px-4">
                    <h1 class="mb-5p position-relative">
                        <p><?=$introtitle?></p>
                        <span class="d-block big-underline-orange"></span>
                    </h1>

                    <div class="my-5 fs-18">
                        <p><?=$introdescription?></p>
                    </div>
                    <a href="" class="btn bg-orange-button">
                        Оставить заявку
                    </a>
                </div>
                <div class="col-md-6 py-4 order-first order-sm-last">
                    <img class="w-100" src="<?=$introimg?>" alt="">
                </div>
            </div>
        </div>

    </div>
</section>
<section id="services">
    <div class="container-fluid first-blog d-flex container position-relative min-h-550 align-items-center my-2">
        <div class="position-absolute min-h-550 bg-orange-1 bg-orange-80 z--10 border-r-t-50 bg-orange-sm t-0 l-0">
        </div>
        <div class="container py-5 z-10">
            <div class="row" style="padding-top: 11%; margin-top: -40px;">
                <div class="col-md-12 text-center py-4">
                    <h1 class="fw-bold mb-0">
                        <?php 
                            if($lang=='en') 
                                echo ("Our services"); 
                            else if($lang=="kz") 
                                echo ("Қызметтеріміз"); 
                            else 
                                echo ("Услуги");
                        ?>
                    </h1>
                    <span class="big-underline-orange-5"></span>

                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 my-2 d-flex align-items-end justify-content-end order-last order-sm-first">
                            <button class="arrow-button prev-card">
                                <i class="fas fa-angle-left"></i>
                            </button>
                            <button class="arrow-button next-card">
                                <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                        <div class="col-md-10 my-2">
                            <div class="swiper card-swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-be10d9ba86f4fcdfc" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <?php 
                                        for($i=0; $i<sizeof($servicetitles); $i++){?>
                                            <div class="swiper-slide swiper-slide-active" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=($i+1)?>" style="cursor: pointer; width: 325.333px; margin-right: 50px;">
                                                <div class="card bg-white max-h-150 min-h-150 px-2 py-5">
                                                <span class="card-icon-container" style="background-color: #d3e8e0">
                                                    <img class="w-60" src="<?=$serviceicons[$i]?>" alt="">
                                                </span>
                                                <h5 class="card-title fw-bold text-uppercase fs-16">
                                                    <?=$servicetitles[$i]?>
                                                </h5>
                                                </div>
                                            </div>
                                    <?php }?>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                            <?php for($i=0; $i<sizeof($servicedescriptions); $i++){?>
                                <div class="modal fade" id="staticBackdrop<?=($i+1)?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>
                                                    <?=$servicedescriptions[$i]?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/assets/images/Ellipse13.png" style="position: absolute;right: 0; bottom: 0;max-width: 320px">
    </div>
</section>
<section id="about">
    <div class="container-fluid first-blog position-relative">
        <img src="/assets/images/Ellipse14.png" style="position:absolute;left: 0;max-width: 300px; max-height: 100vh;z-index: -10">
        <div class="row" style="padding-top: 11%; margin-top: -40px;">
            <div class="col-md-6 py-4 d-flex align-items-center justify-content-center">
                <img src="<?=$aboutimg?>" style="width: 90%">
            </div>
            <div class="col-md-6 py-4 px-md-5">
                <h1 class="mb-5p fs-bold">
                    <?php 
                        if($lang=='en') 
                            echo ("About us"); 
                        else if($lang=="kz") 
                            echo ("Біз туралы"); 
                        else 
                            echo ("О нас");
                    ?>
                </h1>
                <span class="d-block big-underline-orange-5"></span>
                <div class="py-4">
                    <p><?=$aboutdescription?></p>
                </div>
                <a href="" class="btn bg-black-button mt-2">
                    <?php 
                        if($lang=='en') 
                            echo ("More"); 
                        else if($lang=="kz") 
                            echo ("Толығырақ"); 
                        else 
                            echo ("Подробнее");
                    ?>
                </a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid first-blog d-flex container position-relative min-h-550 align-items-center my-2">
        <div class="position-absolute min-h-550 bg-orange-2 bg-orange-80 z--10 border-l-t-50 bg-orange-sm t-0 r-0"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 py-4">
                    <h2 class="fw-bold mb-0">
                        <?php 
                            if($lang=='en') 
                                echo ("Our team consists of experienced experts:"); 
                            else if($lang=="kz") 
                                echo ("Біздің команда-тәжірибелі сарапшылар:"); 
                            else 
                                echo ("Наша команда - это опытные эксперты:");
                        ?>
                    </h2>
                    <span class="big-underline-orange-5"></span>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9 offset-md-3 my-2">
                            <div class="swiper card-swiper-2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-dfd9e07c7da4afb2" aria-live="polite">
                                       
                                    <?php 
                                    $team2_index=0;
                                    for ($team_index=0;$team_index<sizeof($teamtext1);$team_index++){?>
                                        <div class="swiper-slide" role="group" aria-label="3 / 3" style="width: 288.667px; margin-right: 50px;">
                                     
                                            <div class="card bg-white max-h-250 min-h-250 px-2 py-2 d-grid align-items-center">
                                            
                                            <p class="card-subtext fs-14" style="font-size:100%;">
                                                <i class="fas fa-check" style="color:green"></i>
                                                <?=$teamtext1[$team_index]?>
                                            </p>
                                            <?php if(in_array($team_index, $teamtext2index)){?>
                                                <p class="card-subtext fs-14" style="font-size:100%;">
                                                    <i class="fas fa-check" style="color:green"></i>
                                                    <?=$teamtext2[$team2_index]?>
                                                </p>
                                                <?php $team2_index++;}?>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <div class="col-md-12 d-flex align-items-end justify-content-start my-4 ">
                                <button class="arrow-button prev-card-2">
                                    <i class="fas fa-angle-left"></i>
                                </button>
                                <button class="arrow-button next-card-2">
                                    <i class="fas fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <?php for($i =0; $i<sizeof($expertnames); $i++){?>
                <div class="col-md-4">
                    <div class="card border-0 p-5">
                        <div class="card-rounded-image glowning-border-orange" 
                             style="background-image: url(<?=$expertimages[$i]?>);cursor: pointer"
                             data-bs-toggle="modal" data-bs-target="#exampleModal<?=$i?>"> 
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold"> <?=$expertnames[$i]?></h5>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal<?=$i?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold"><?=$expertnames[$i]?> </h5>
                                    <p class="card-text"><?=$expertpositions[$i]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>

<section id="partners">
    <div class="container py-5">
        <div class="row" style="padding-top: 11%; margin-top: -40px;">
            <div class="col-md-12 py-4">
                <h2 class="fw-bold mb-0">
                    <?php 
                        if($lang=='en') 
                            echo ("They trust us:"); 
                        else if($lang=="kz") 
                            echo ("Серіктестер:"); 
                        else 
                            echo ("Нам доверяют:");
                    ?>
                </h2>
                <span class="big-underline-orange-5"></span>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <?php for($j=0; $j<sizeof($partnersmodels); $j++){?>
                    <div class="swiper-slide" role="group" aria-label="<?=$j?> / 4" style="width: 286.5px; margin-right: 50px;">
                        <div class="card border-0">
                            <div class="card-image">
                                <img class="align-self-center w-80" src="<?=$partnersmodels[$j]['img']?>" >
                            </div>
                            <div class="card-body mt-4 text-center w-100 align-self-center">
                                <h5 class="card-title fw-bold">
                                    <a href="<?=$partnersmodels[$j]['link']?>">
                                        <?=$partnersmodels[$j]['name']?>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container-fluid first-blog d-flex container position-relative min-h-550 align-items-center">
        <div class="position-absolute min-h-550 bg-orange-2 w-100 z--10 border-r-t-30 bg-orange-sm t-0 r-0"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="fw-bold my-4 text-center">
                    
                        <?php 
                            if($lang=='en') 
                                echo ("Leave a request:"); 
                            else if($lang=="kz") 
                                echo ("Өтініш қалдыру:"); 
                            else 
                                echo ("Оставить заявку:");
                        ?>
                    </h2>
                    
                    <?php $form = ActiveForm::begin(); ?>
                        <div class="mb-3">
                            <?= $form->field($requestmodel, 'name',['options'=>['class'=> 'form-control', 'tag' => false]])
                                     ->textInput(['placeholder'=>$NamePlaceholder])->label( FALSE ); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $form->field($requestmodel, 'phone', ['options'=>['class'=> 'form-control', 'tag' => false]])
                                     ->textInput(['placeholder'=>$phonePlaceholder])->label( FALSE ); ?>

                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <?php 
                                    if($lang=='en') 
                                        echo ("I accept the terms of the transfer of information"); 
                                    else if($lang=="kz") 
                                        echo ("Мен ақпарат беру шарттарын қабылдаймын"); 
                                    else 
                                        echo ("Я принимаю условия передачи информации");
                                ?>
                                    
                            </label>
                        </div>
                        <div class="form-group">
                            <?= Html::submitButton($buttonName, ['class' => 'btn bg-black-button w-100', 'id' => 'btn-send']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://ssdc.kz/assets/js/my-script.js"></script>
<script>
if ($(window).width() >= 1000) {
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

            document.getElementById("navbar-element").style.background = "#ffffff";
        } else {

            document.getElementById("navbar-element").style.background = "none";
        }
    }
}
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script type="text/javascript">
toastr.options = {
    "closeButton": true,
    "closeClass": "toast-close-button",
    "closeDuration": 300,
    "closeEasing": "swing",
    "closeHtml": "<button><i class=\"icon-off\"><\/i><\/button>",
    "closeMethod": "fadeOut",
    "closeOnHover": true,
    "containerId": "toast-container",
    "debug": false,
    "escapeHtml": false,
    "extendedTimeOut": 10000,
    "hideDuration": 1000,
    "hideEasing": "linear",
    "hideMethod": "fadeOut",
    "iconClass": "toast-info",
    "iconClasses": {
        "error": "toast-error",
        "info": "toast-info",
        "success": "toast-success",
        "warning": "toast-warning"
    },
    "messageClass": "toast-message",
    "newestOnTop": false,
    "onHidden": null,
    "onShown": null,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "progressBar": true,
    "progressClass": "toast-progress",
    "rtl": false,
    "showDuration": 300,
    "showEasing": "swing",
    "showMethod": "fadeIn",
    "tapToDismiss": true,
    "target": "body",
    "timeOut": 5000,
    "titleClass": "toast-title",
    "toastClass": "toast"
};
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
    integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    $('#phone-1').inputmask({
        "mask": "+7 (999) 999-9999"
    });

    $('#exampleCheck1').click(function() {
        if ($('#exampleCheck1').is(':checked')) {
            $('#btn-send').prop('disabled', false)
        } else {
            $('#btn-send').prop('disabled', true)
        }
    })

})
</script>
<script src="/js/my-script.js"></script>