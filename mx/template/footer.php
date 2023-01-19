<footer>
    <div class="container">
        <h2 class="footer__title">
            <?php echo $lang['tcontacto'] ?>
        </h2>
        <div class="footer__box">
            <div class="footer__box-email">
                <img class="icono" src="../assets/svg/email.svg" alt="icono email">
                <?php echo $lang['tseccionmx'] ?>
                <p>
                    <a href="contacto.php?lang&idcorreo=1&texto=<?php echo $lang['tseccionmx'] ?>" class="footer__box-email__texto">
                        <?php echo $lang['temail'] ?>
                    </a>
                </p>
            </div>
            <div class="footer__box-email">
                <img class="icono" src="../assets/svg/email.svg" alt="icono email">
                <?php echo $lang['tseccioninfo'] ?>
                <p>
                    <a href="contacto.php?lang&idcorreo=2&texto=<?php echo $lang['tseccioninfo'] ?>" class="footer__box-email__texto">
                        <?php echo $lang['temail2'] ?>
                    </a>
                </p>
            </div>
            <div class="footer__box-email">
                <img class="icono" src="../assets/svg/email.svg" alt="icono email">
                <?php echo $lang['tseccionus'] ?>
                <p>
                    <a href="contacto.php?lang&idcorreo=3&texto=<?php echo $lang['tseccionus'] ?>" class="footer__box-email__texto">
                        <?php echo $lang['temail3'] ?>
                    </a>
                </p>
            </div>
            <div class="footer__box-email">
                <img class="icono" src="../assets/svg/email.svg" alt="icono email">
                <?php echo $lang['tseccionca'] ?>
                <p>
                    <a href="contacto.php?lang&idcorreo=4&texto=<?php echo $lang['tseccionca'] ?>" class="footer__box-email__texto">
                        <?php echo $lang['temail4'] ?>
                    </a>
                </p>
            </div>
        </div>
        <p class="footer__title-final">
            <small>
                &copy; <?php echo $lang['titulop'] ?> , 1993 - <?php echo date('Y') ?> ,
                <?php echo $lang['tderecho'] ?>
            </small>
        </p>
    </div>
</footer>


<!-- JavaScript Propios -->
<script src="../assets/js/apps.js" type="module"></script>
<script src="../assets/js/sweetalert2.all.min.js"></script>

</body>

</html>