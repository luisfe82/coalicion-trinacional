<div id="forum" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">


        <?php 
            if (isset($foro[0])) {
        ?>
        <div class="carousel-item active">


            <a
                href="articulo.php?id=<?php echo $foro['0'] ?>&<?php echo str_replace(' ','-',$articulo[$foro['0']]['titulo']); ?>">
                <div class="card">
                    <img src="../admin/files/carousel/<?php echo $articulo[$foro['0']]['imagenbarner'] ?>"
                        class="img-fluid" alt="<?php echo $articulo[$foro['0']]['titulo'] ?>">
                    <div class="card-img-overlay d-flex justify-content-end">
                        <div class="text-white bg-primario align-self-end d-block">
                            <p class="card-title ">
                                <?php echo $articulo[$foro['0']]['titulo'] ?>
                            </p>
                            <p class="card-text">
                                <?php echo $articulo[$foro['0']]['pais'] ?>-<?php echo $articulo[$foro['0']]['fecha'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <?php
           }
        ?>


        <?php 
            if (isset($foro[1])) {
        ?>
        <div class="carousel-item">
            <div class="d-block w-100">


                <a
                    href="articulo.php?id=<?php echo $confe['1'] ?>&<?php echo str_replace(' ','-',$articulo[$confe['1']]['titulo']); ?>">
                    <div class="card">
                        <img src="../admin/files/carousel/<?php echo $articulo[$foro['1']]['imagenbarner'] ?>"
                            class="img-fluid" alt="<?php echo $articulo[$foro['1']]['titulo'] ?>">
                        <div class="card-img-overlay d-flex justify-content-end">
                            <div class="text-white bg-primario align-self-end d-block">
                                <p class="card-title ">
                                    <?php echo $articulo[$foro['1']]['titulo'] ?>
                                </p>
                                <p class="card-text">
                                    <?php echo $articulo[$foro['1']]['pais'] ?>-<?php echo $articulo[$foro['1']]['fecha'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>


            </div>
        </div>
        <?php 
            }
        ?>


        <?php 
            if (isset($foro[2])) {
        ?>
        <div class="carousel-item">
            <div class="d-block w-100">

                <a
                    href="articulo.php?id=<?php echo $confe['2'] ?>&<?php echo str_replace(' ','-',$articulo[$confe['2']]['titulo']); ?>">
                    <div class="card">
                        <img src="../admin/files/carousel/<?php echo $articulo[$foro['2']]['imagenbarner'] ?>"
                            class="img-fluid" alt="<?php echo $articulo[$foro['2']]['titulo'] ?>">
                        <div class="card-img-overlay d-flex justify-content-end">
                            <div class="text-white bg-primario align-self-end d-block">
                                <p class="card-title ">
                                    <?php echo $articulo[$foro['2']]['titulo'] ?>
                                </p>
                                <p class="card-text">
                                    <?php echo $articulo[$foro['2']]['pais'] ?>-<?php echo $articulo[$foro['2']]['fecha'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <?php
           }
        ?>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#forum" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#forum" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>