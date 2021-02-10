                      
                      <!-- esto es lo que muestra el capcha -->

                            <div class="col-12 text-center">
                                <font class="" size= "3" color= "black" >Por favor, ingrese ahora el captcha</font>
                            </div>
             
                            <div class="col-12 text-center">

                              <img id='captcha' src="captcha/captcha.php?rand=<?php echo rand(); ?>"><br>

                              <input id="captcha" name="captcha" class="browser-default form-control" style="border: none; background-color: rgb(181, 184, 177);width: 200px;" type="text" placeholder="Codigo de Seguridad">
                          </br>
                              <span style="color: red;">
                                  <?php echo $mensaje; ?>
                              </span>
                            </div>

                            <div class="col-12 text-center" >
                              <a href="javascript:void(0);" style="margin-left: -50px;">
                                <img class="img-fluid" id="recarga" src="<?php echo constant('URL').privado."captcha/refresh.png"; ?>" style="width: 30px;" >
                                </a>
                              <font class="" size= "3" color= "black" >Recargar Captcha</font>
                            </div>

                            <input type="hidden" name="boton" id="boton" value="validar">


                            <!-- esto de aqui es como va la estructura para validarlo -->

<?php

if (!empty($_POST['boton'])) 
{

    if (!empty($_POST['captcha'])) 
    {

        $capt = sha1($_POST['captcha']);

        if ($capt == $_COOKIE['captcha']) 
        {
          // aqui donde va el codigo de si el usuario, contraseña y capcha son correctos 
          require_once "vista/inicio/inicio.php";
        }

    } else  
    {
        $mensaje = 'Captcha Inconrrecto, Inntente de Nuevo.';
        require_once "vista/login/login.php";
    }

} else 
{
    $mensaje = 'Captcha Vacio, Inntente de Nuevo.';
    require_once "vista/login/login.php";
}
?>