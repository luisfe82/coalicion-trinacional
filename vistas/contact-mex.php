<!-- PHPmailer -->
<?php include '../config/PHPmailer.php'; ?>

<!-- Header -->
<?php include 'template/header.php'; ?>

<!-- barra de navegacion-->
<?php include 'template/barra-navegacion.php'; ?>

<!-- main -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="container-fluid">
            <div class="container">
                <div class="row border sombra p-2">

                    <div class="col-md-3 bg-light my-3">
                        <div class="contact-info">
                            <div class="col-5">
                                <img src="../public/img/correo.png" class="ing-fluid w-100" alt="">
                            </div>
                            <h2 class="text-terciario"><?php echo $lang['tcontacto'] ?></h2>
                            <h4 class="text-primario"><?php echo $lang['text-contact'] ?></h4>
                            <div class="col-md-12">
                                <img src="../public/img/mex.png" class="ing-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 bg-light my-3">
                        <div class="ms-5">                            
                            <form id="main-contact-form" class="contact-form" name="contact-form" action="contact-mex.php" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-sm-6"
                                        for="nombre"><?php echo $lang['tnombre'] ?></label>
                                    <div class="col-sm-11">
                                        <input type="hidden" required name="para" value="<?php echo $lang['temail'] ?>" placeholder="" id="para" required="">
                                        <input type="text" class="form-control" id="nombre"
                                            placeholder="<?php echo $lang['tnombre1'] ?>" name="nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-6"
                                        for="subject"><?php echo $lang['ttema'] ?></label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="subject" 
                                            placeholder="<?php echo $lang['ttema1'] ?>" name="subject">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2"
                                        for="email"><?php echo $lang['tcorreo'] ?></label>
                                    <div class="col-sm-11">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="<?php echo $lang['tcorreo1'] ?>" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2"
                                        for="mensaje"><?php echo $lang['tmensaje'] ?></label>
                                    <div class="col-sm-11">
                                        <textarea class="form-control" rows="5" id="mensaje" name="mensaje"
                                            placeholder="<?php echo $lang['tmensaje1'] ?>"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10 my-2">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary"><?php echo $lang['tenviar'] ?> -->
                                            <?php echo $lang['temail'] ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'template/footer.php'; ?>