<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<div class="container-fluid my-5">
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 my-5">
                        <div class="text-center my-3">
                            <h1 class="text-uppercase"><?php echo $lang['thistoria'] ?></h1>
                            <h5 class="text-terciario"><?php echo $lang['thistoria1'] ?></h5>
                        </div>
                        <div class="text-center">
                            <img src="../public/img/origen.jpg" class="img-thumbnail" alt="origen">
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="row justify">
                            <p class="col-sm-4 my-4"><?php echo $lang['chistoria'] ?></p>
                            <p class="col-sm-4 my-4"><?php echo $lang['chistoria1'] ?></p>
                            <p class="col-sm-4 my-4"><?php echo $lang['chistoria2'] ?></p>
                        </div>
                    </div>

                    <div class="col-md-12 demanda my-5">
                        <div class="text-center my-3">
                            <h3 class="text-uppercase text-terciario""><?php echo $lang['thistoria3'] ?></h3>
                        </div>
                        <div class=" row">
                                <div class="col-md-6">
                                    <ul class="justify">
                                        <li><?php echo $lang['lhistoria1'] ?></li>
                                        <li><?php echo $lang['lhistoria2'] ?></li>
                                        <li><?php echo $lang['lhistoria3'] ?></li>
                                        <li><?php echo $lang['lhistoria4'] ?></li>
                                        <li><?php echo $lang['lhistoria5'] ?></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="justify">
                                        <li><?php echo $lang['lhistoria6'] ?></li>
                                        <li><?php echo $lang['lhistoria7'] ?></li>
                                        <li><?php echo $lang['lhistoria8'] ?></li>
                                        <li><?php echo $lang['lhistoria9'] ?></li>
                                        <li><?php echo $lang['lhistoria10'] ?></li>
                                    </ul>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="text-center my-3">
                            <h2 class="text-uppercase text-terciario"><?php echo $lang['thistoria2'] ?></h2>
                        </div>
                    </div>

                    <?php                        
                        $ind=0;
                        foreach ($dato_h as $key => $value) {                            
                    ?>
                    <div class="year"><?php echo $key ?></div>

                    <ul class="timeline">

                        <?php 
                        for ($i = 0; $i < count($dato_h[$key]); $i++) {
                            $ind =$ind + 1;
                            if (($ind % 2) == 0) {
                                $derecho="timeline-inverted";
                            } else {
                                $derecho="";
                            }
                        ?>
                        <li class="<?php echo $derecho; ?>">
                            <div class="timeline-badge">
                                <a><i class="fa fa-circle" id=""></i></a>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <a data-bs-toggle="collapse" href="#collapse<?php echo $ind; ?>" role="button"
                                        aria-expanded="false" aria-controls="collapse<?php echo $ind; ?>">                                        
                                        <h4><i class="fa fa-angle-double-down"></i> <?php echo $dato_h[$key][$i]['titulo'] ?></h4>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse<?php echo $ind; ?>">
                                    <div class="timeline-body text-center">
                                        <img class="img-fluid w-75" src="../admin/files/historia/<?php echo $dato_h[$key][$i]['imagen']  ?>" alt="">
                                        <p><?php echo $dato_h[$key][$i]['contenido']  ?></p>
                                    </div>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right"><?php echo $dato_h[$key][$i]['pie'] ?></p>
                                </div>
                            </div>
                        </li>

                        
                        <?php
                            }
                        }
                        ?>
                        <div class="year"><i class="fa fa-users-cog fa-2x"></i></div>
                        <!-- <li class="clearfix no-float"></li> -->
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php include 'template/footer.php'; ?>