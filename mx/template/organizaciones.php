<section class="organiza">
    <div class="container">
        <div class="organiza__box">
            <div class="organiza__box-texto">
                <h2 class="organiza__title"><?php echo $lang['torganiza'] ?></h2>
                <p><?php echo $lang['corganiza'] ?></p>
            </div>
            <div class="organiza__box-card">
                <!-- Carousel -->
                <div class="container-carousel" id="carouselOrganiza" data-interval="6000">

                    <?php
                        foreach ($organiza as $key => $value) {
                    ?>

                    <div class="carousel1">
                        <div class="organiza__card">
                            <h5 class="organiza_card-name"><?php echo $organiza[$key]['titulo'] ?></h5>
                            <img class="organiza__card-logo"
                                src="../admin/files/organiza/<?php echo $organiza[$key]['imagen'] ?>"
                                alt="logo <?php echo $organiza[$key]['titulo'] ?>">
                            <p class="organiza__card-type"><?php echo $organiza[$key]['tipo'] ?></p>
                            <div class="organiza__card-fone">
                                <img class="card-ico" src="../assets/img/fone.svg" alt="ico fone">
                                <p><?php echo $organiza[$key]['fone'] ?></p>
                            </div>
                            <div class="organiza__card-url">
                                <img class="card-ico" src="../assets/img/url.svg" alt="ico url">
                                <a href="<?php echo $organiza[$key]['url'] ?>" target="_blank">
                                    <p><?php echo $lang['visita'] ?></p>
                                </a>
                            </div>
                            <div class="organiza__card-home">
                                <img class="card-ico" src="../assets/img/home.svg" alt="ico home">
                                <p><?php echo $organiza[$key]['direc'] ?></p>
                            </div>
                        </div>
                    </div>

                    <?php
                                }
                            ?>

                    <a class="prev1">❮</a>
                    <a class="next1">❯</a>
                </div> <!-- end carousel -->
            </div>
        </div>
    </div>
</section>