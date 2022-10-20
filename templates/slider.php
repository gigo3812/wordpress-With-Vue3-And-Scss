<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item " :class="{'active' : activeSlider}">
            <img class="d-block w-100" src="<?php echo bloginfo('template_url') . '/assets/img/banner1.jpg'  ?>" alt="First slide">
        </div>
        <div class="carousel-item " :class="{'active' : !activeSlider}">
            <img class="d-block w-100" src="<?php echo bloginfo('template_url') . '/assets/img/banner2.jpg'  ?>" alt="First slide">
        </div>

    </div>
    <b @click='activeSlider=!activeSlider' class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">قبلی</span>
    </b>
    <b @click='activeSlider=!activeSlider' class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">بعدی</span>
    </b>
</div>