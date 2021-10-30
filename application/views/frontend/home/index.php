<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <img src="<?= base_url() ?>assets/img/img1.jpg" class="d-block w-100 overlay-image" alt="">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1>First slide label</h1>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <img src="<?= base_url() ?>assets/img/img2.jpg" class="d-block w-100 overlay-image" alt="">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1>Second slide label</h1>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <img src="<?= base_url() ?>assets/img/img3.jpg" class="d-block w-100 overlay-image" alt="">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1>Third slide label</h1>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
            <span class="carousel-control-prev-icon" aria-hidden="true">
            </span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="sr-only">Previous</span>
            <span class="carousel-control-next-icon" aria-hidden="true">
            </span>
        </a>
    </div>
</section>

<section class="profil">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="<?= base_url() ?>assets/img/logo.png" class="rounded mx-auto d-block" width="300px" alt="">
            </div>
            <div class="col-md-6">
                <h1>Profil</h1>
                <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto cupiditate voluptatibus consequatur molestiae a? Sint dignissimos nobis amet velit ipsa, quidem, aliquid quia itaque similique vel maiores repellat saepe odio.</p>
            </div>
        </div>
    </div>
</section>


<section class="coming_soon">

    <div class="container pt-3">
        <div class="row justify-content-center">
            <h1 class="blue">Coming</h1>
            <h1 class="purple">soon</h1>
        </div>

        <div class="row justify-content-around">
            <div class="col-md-6">
                <h3>Detail Kegiatan</h3>
            </div>
            <div class="col-md-6">
                <img src="<?= base_url() ?>assets/img/WEBINAR.jpg" style="max-height: 25rem;" alt="">
            </div>
        </div>
    </div>
</section>