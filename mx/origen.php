<!-- Header -->
<?php include './template/header.php'; ?>

<link rel="stylesheet" href="../assets/css/origen/1.header.css">
<link rel="stylesheet" href="../assets/css/origen/2.demanda.css">
<link rel="stylesheet" href="../assets/css/origen/3.linea.tiempo.css">

</head>

<body>

    <!-- barra de navegacion-->
    <?php include './template/barra.navegacion.php'; ?>

    <header class="container">
        <section class="origen-title">
            <h1>
                <?php echo $lang['thistoria'] ?>
            </h1>
            <h2 class="origen-subtitle">
                <?php echo $lang['thistoria1'] ?>
            </h2>
            <img src="../assets/img/origen.jpg" class="img-fluid" alt="origen">
        </section>

        <section class="origen-box">
            <div class="origen-box__texto">
                <p class="origen-texto"><?php echo $lang['chistoria'] ?></p>
                <p class="origen-texto"><?php echo $lang['chistoria1'] ?></p>
                <p class="origen-texto"><?php echo $lang['chistoria2'] ?></p>
            </div>
        </section>
    </header>

    <!-- Barra de Redes Sociales -->
    <?php include './template/redes.sociales.php' ?>

    <main class="container">
        <h2 class="tiempo-title">
            <?php echo $lang['thistoria2'] ?>
        </h2>
        <section class="timeline">
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
                        <a>⚫</a>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <a onclick="collapse('collapse-container<?php echo $ind ?>')" class="time__box-title">
                                <h4>                                     
                                    <?php echo $dato_h[$key][$i]['titulo'] ?> 
                                </h4> 
                                <img class="ico-btn" src="../assets/svg/down.svg" alt="icono abajo">                                
                            </a>
                        </div>
                        <div id="collapse-container<?php echo $ind ?>" class="visible">
                            <div class="timeline-body text-center">
                                <img class="img-fluid w-75"
                                    src="../admin/files/historia/<?php echo $dato_h[$key][$i]['imagen']  ?>" alt="">
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
            </ul>
            <div class="year">
                <img class="card-ico" src="../assets/img/bank-card-creditcard-svgrepo-com.svg"
                    alt="icono card informació" title="icono card informació">
            </div>
        </section>
    </main>

    <script>
        function collapse(elemento) {
            const collapseContainer = document.getElementById(`${elemento}`);
            collapseContainer.classList.toggle('visible');
        }
    </script>
    <?php include './template/footer.php'; ?>