<footer  class="container-fluid bg-navbar mt-5">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-12 text-center py-3 text-white">
                    <h2><?php echo $lang['tcontacto'] ?></h2>
                    <hr>
                </div>
                
                <div class="col-md-3 text-white">
                    <i class="fa fa-envelope-open"></i> <?php echo $lang['tseccionmx'] ?>
                    <p>
                        <a href="contact-mex.php?lang" class="text-secundario">
                            <?php echo $lang['temail'] ?>
                        </a>
                    </p>
                </div>
                <div class="col-md-3 text-white">
                    <i class="fa fa-envelope-open"></i> <?php echo $lang['tseccioninfo'] ?>
                    <p>
                        <a href="contact-inf.php?lang" class="text-secundario">
                            <?php echo $lang['temail2'] ?>
                        </a>
                    </p>
                </div>
                <div class="col-md-3 text-white">
                    <i class="fa fa-envelope-open"></i> <?php echo $lang['tseccionus'] ?>
                    <p>
                        <a href="contact-usa.php?lang" class="text-secundario">
                            <?php echo $lang['temail3'] ?>
                        </a>
                    </p>
                </div>

                
                <div class="col-md-3 text-white">
                    <i class="fa fa-envelope-open"></i> <?php echo $lang['tseccionca'] ?>
                    <p>
                        <a href="contact-can.php?lang" class="text-secundario">
                            <?php echo $lang['temail4'] ?>
                        </a>
                    </p>
                </div>
                
               
                <div class="navbar-brand col-md-12 d-flex m-2 py-3 justify-content-center">
                    <img class="img-fluid logo-blanco" src="../public/svg/logo.svg" alt="Logo">
                    <div class="d-navbar ms-3">
                        <h1 class="m-0 text-uppercase text-white">
                            <?php echo $lang['tcoalicion']; ?>
                        </h1>
                        <h1 class="m-0 text-uppercase text-white">
                            <?php echo $lang['tdefensa']; ?>
                        </h1>
                        <h1 class="m-0 text-uppercase text-white">
                            <?php echo $lang['teducacion']; ?>
                        </h1>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div class="container-fluid bg-navbar">
        <div class="row mx-2">
            <div class="col-md-12 text-center pt-3 pb-3">
                <p class="text-muted m-auto">
                    <small>
                        &copy; <?php echo $lang['titulop'] ?> , 1993 - <?php echo date('Y') ?> ,
                        <?php echo $lang['tderecho'] ?>
                    </small>
                </p>
            </div>
        </div>
    </div>


    <!-- JavaScript Icons Font Awesome -->
    <script src="../public/fontawesome/all.min.js"></script>
    <!-- JavaScript Bootstrap y JQuery  -->
    <script src="../public/jquery/jquery-3.5.1.min.js"></script>
    <script src="../public/bootstrap/bootstrap.bundle.min.js"></script>
    

    <!-- JavaScript BaseTable -->
    <script src="../public/dataTables/jquery.dataTables.min.js"></script>

    <!-- Cuenta Regresiva -->
    <script src="../public/js/simplyCountdown.min.js"></script>
	<script src="../public/js/countdown.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(element) {
            return new bootstrap.Tooltip(element);
        });
    });
    </script>

    <!-- Modal HTML -->
    <div id="correcto" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="bi-patch-check-fill"></i>
                    <h5 class="modal-title mx-3">Se envió correctamente...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal HTML -->
    <div id="error" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="bi-patch-exclamation-fill"></i>
                    <h5 class="modal-title mx-3">Oops! hubo un error...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>
   
    </body>

    </html>