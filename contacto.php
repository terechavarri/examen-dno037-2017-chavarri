<?php include('header.php');?>

<div class="container">
<div class="row">
<div class="col-sm-12 col-md-10 col-md-offset-1">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"data-interval="3000">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/final.jpg" alt="">
        </div>
        <div class="item">
          <img src="images/vacas.jpg" alt="">
        </div>
        <div class="item">
          <img src="images/piedra.jpg" alt="">
        </div>
        <div class="item">
          <img src="images/video.jpg" alt="">
        </div>
  </div>
</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="main-text hidden-xs">
                <div class="text-center">
                    <h1>Hablemos :)</h1>
                </div>
            </div>


<section id="contact">

           <div class="row">
               <div class="col-lg-8 col-lg-offset-2">
                   <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                   <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                   <form name="sentMessage" id="contactForm" novalidate>
                       <div class="row control-group">
                           <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label for="name">Nombre</label>
                               <input type="text" class="form-control" placeholder="Como te llamas?" id="name" required data-validation-required-message="Necesito saber con quién estoy hablando.">
                               <p class="help-block text-danger"></p>
                           </div>
                       </div>
                       <div class="row control-group">
                           <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label for="email">Email</label>
                               <input type="email" class="form-control" placeholder="Tu dirección de Email." id="email" required data-validation-required-message="Sin esto no funciona.">
                               <p class="help-block text-danger"></p>
                           </div>
                       </div>
                       <div class="row control-group">
                           <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label for="phone">Asunto</label>
                               <input type="tel" class="form-control" placeholder="De qué vamos a hablar?" id="subject" required data-validation-required-message="Si no me dices no te puedo ayudar.">
                               <p class="help-block text-danger"></p>
                           </div>
                       </div>
                       <div class="row control-group">
                           <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label for="message">Mensaje</label>
                               <textarea rows="5" class="form-control" placeholder="Elabore ;)" id="message" required data-validation-required-message="Si no llenas esto cuál es la gracia?."></textarea>
                               <p class="help-block text-danger"></p>
                           </div>
                       </div>
                       <br>
                       <div id="success"></div>
                       <div class="row">
                           <div class="form-group col-xs-12">
                               <button type="submit" class="btn btn-primary btn-md">Enviar!</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </section>

   <?php
//if "email" variable is filled out, send email
if (isset($_REQUEST['email']))  {

//Email information
$admin_email = "holayosoy@teresachavarri.cl";
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$comment = $_REQUEST['message'];

//send email
mail($admin_email, "$subject", $comment, "From:" . $email);

//Email response
echo "Muchitas gracias!";
}

//if "email" variable is not filled out, display the form
else  {
  echo "no se mandó :(";
}
?>

<script src="libs/js/jquery.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
