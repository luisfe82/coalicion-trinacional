<div class="tabs-container" id="tabs-acciones">

    <div class="tab-buttons">
        <button class="tab-button active" id="button-acciones">Acciones</button>
        <button class="tab-button" id="button-acciones">Colaboraciones</button>
        <button class="tab-button" id="button-acciones">Campañas</button>
        <button class="tab-button" id="button-acciones">Foros</button>
        <button class="tab-button" id="button-acciones">Conferencias</button>
        <button class="tab-button" id="button-acciones">Solidaridad</button>
    </div>

    <div class="tab-panels">
        <div class="tab-panel active" id="panel-acciones">
            <!-- Carousel -->
            <div class="container-carousel-galeria" id="carouselAcciones" data-interval="8000">

                <?php                       
                    for ($i=1; $i <= count($galeria); $i++) { 
                        if (isset($galeria[$i]) && $galeria[$i]['categoria'] == "Acciones" || $galeria[$i]['categoria'] == "Actions") {     
                ?>

                <div class="carouselAcciones"><!-- nombre de clase debe ser igual que id carousel -->
                    <img class="img-galeria" src="../admin/files/galeria/<?php echo $galeria[$i]['imagen'] ?>"
                        alt="<?php echo $galeria[$i]['titulo'] ?>" onclick="openModal(this)">
                </div>

                <?php
                        }
                    } 
                ?>

                <a class="prev-galeria" title="prev">◁ Prev</a>
                <a class="next-galeria" title="next">Next ▷</a>
            </div> <!-- end carousel -->
        </div>

        <div class="tab-panel" id="panel-acciones">
            <!-- Carousel -->
            <div class="container-carousel-galeria" id="carouselColaboracion" data-interval="8000">

                <?php                       
                    for ($i=1; $i <= count($galeria); $i++) { 
                        if (isset($galeria[$i]) && $galeria[$i]['categoria'] == "Colaboraciones" || $galeria[$i]['categoria'] == "Collaborations") {     
                ?>

                <div class="carouselColaboracion"><!-- nombre de clase debe ser igual que id carousel -->
                    <img class="img-galeria" src="../admin/files/galeria/<?php echo $galeria[$i]['imagen'] ?>"
                        alt="<?php echo $galeria[$i]['titulo'] ?>" onclick="openModal(this)">
                </div>

                <?php
                        }
                    } 
                ?>

                <a class="prev-galeria" title="prev">◁ Prev</a>
                <a class="next-galeria" title="next">Next ▷</a>
            </div> <!-- end carousel -->
        </div>

        <div class="tab-panel" id="panel-acciones">
            <!-- Carousel -->
            <div class="container-carousel-galeria" id="carouselCampania" data-interval="8000">

                <?php                       
                    for ($i=1; $i <= count($galeria); $i++) { 
                        if (isset($galeria[$i]) && $galeria[$i]['categoria'] == "Campañas" || $galeria[$i]['categoria'] == "Bells") {     
                ?>

                <div class="carouselCampania"><!-- nombre de clase debe ser igual que id carousel -->
                    <img class="img-galeria" src="../admin/files/galeria/<?php echo $galeria[$i]['imagen'] ?>"
                        alt="<?php echo $galeria[$i]['titulo'] ?>" onclick="openModal(this)">
                </div>

                <?php
                        }
                    } 
                ?>

                <a class="prev-galeria" title="prev">◁ Prev</a>
                <a class="next-galeria" title="next">Next ▷</a>
            </div> <!-- end carousel -->
        </div>
        <div class="tab-panel" id="panel-acciones">
            <!-- Carousel -->
            <div class="container-carousel-galeria" id="carouselForos" data-interval="8000">

                <?php                       
                    for ($i=1; $i <= count($galeria); $i++) { 
                        if (isset($galeria[$i]) && $galeria[$i]['categoria'] == "Foros" || $galeria[$i]['categoria'] == "Forums") {     
                ?>

                <div class="carouselForos"><!-- nombre de clase debe ser igual que id carousel -->
                    <img class="img-galeria" src="../admin/files/galeria/<?php echo $galeria[$i]['imagen'] ?>"
                        alt="<?php echo $galeria[$i]['titulo'] ?>" onclick="openModal(this)">
                </div>

                <?php
                        }
                    } 
                ?>

                <a class="prev-galeria" title="prev">◁ Prev</a>
                <a class="next-galeria" title="next">Next ▷</a>
            </div> <!-- end carousel -->
        </div>
        <div class="tab-panel" id="panel-acciones">
            <!-- Carousel -->
            <div class="container-carousel-galeria" id="carouselConferencias" data-interval="8000">

                <?php                       
                    for ($i=1; $i <= count($galeria); $i++) { 
                        if (isset($galeria[$i]) && $galeria[$i]['categoria'] == "Conferencias" || $galeria[$i]['categoria'] == "Conferences") {     
                ?>

                <div class="carouselConferencias"><!-- nombre de clase debe ser igual que id carousel -->
                    <img class="img-galeria" src="../admin/files/galeria/<?php echo $galeria[$i]['imagen'] ?>"
                        alt="<?php echo $galeria[$i]['titulo'] ?>" onclick="openModal(this)">
                </div>

                <?php
                        }
                    } 
                ?>

                <a class="prev-galeria" title="prev">◁ Prev</a>
                <a class="next-galeria" title="next">Next ▷</a>
            </div> <!-- end carousel -->
        </div>
        <div class="tab-panel" id="panel-acciones">
            <!-- Carousel -->
            <div class="container-carousel-galeria" id="carouselSolidaridad" data-interval="8000">

                <?php                       
                    for ($i=1; $i <= count($galeria); $i++) { 
                        if (isset($galeria[$i]) && $galeria[$i]['categoria'] == "Solidaridad" || $galeria[$i]['categoria'] == "Solidarity") {     
                ?>

                <div class="carouselSolidaridad"><!-- nombre de clase debe ser igual que id carousel -->
                    <img class="img-galeria" src="../admin/files/galeria/<?php echo $galeria[$i]['imagen'] ?>"
                        alt="<?php echo $galeria[$i]['titulo'] ?>" onclick="openModal(this)">
                </div>

                <?php
                        }
                    } 
                ?>

                <a class="prev-galeria" title="prev">◁ Prev</a>
                <a class="next-galeria" title="next">Next ▷</a>
            </div> <!-- end carousel -->            
        </div>
    </div>

</div>

<!-- onclick="openModal(this)" -->

<!-- Modal -->
<div id="modal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modal-img">
    <div id="caption"></div>
</div>

<script>
    // Obtener elementos
    var modal = document.getElementById("modal");
    var modalImg = document.getElementById("modal-img");
    var captionText = document.getElementById("caption");
    var close = document.getElementsByClassName("close")[0];

    // Abrir el modal
    function openModal(img) {
        modal.style.display = "block";
        modalImg.src = img.src;
        captionText.innerHTML = img.alt;
    }

    // Cerrar el modal
    close.onclick = function() {
        modal.style.display = "none";
    }
</script>