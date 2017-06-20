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
                <div class="hablemos">
                    <h1>Hablemos :)</h1>
                </div>
            </div>


            <section id="contact">
                   <div class="container">
                       <div class="row">


                           </div>
                       </div>
                       <div class="row">
                           <div class="col-lg-6 col-lg-offset-2">
                               <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                               <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                               <form name="sentMessage" id="contactForm" novalidate>
                                   <div class="row control-group">
                                       <div class="form-group col-xs-12 floating-label-form-group controls">
                                           <label for="name">Nombre</label>
                                           <input type="text" class="form-control" placeholder="Cómo te llamas?" id="name" required data-validation-required-message="Necesito saber con quien hablo.">
                                           <p class="help-block text-danger"></p>
                                       </div>
                                   </div>
                                   <div class="row control-group">
                                       <div class="form-group col-xs-12 floating-label-form-group controls">
                                           <label for="email">Email</label>
                                           <input type="email" class="form-control" placeholder="Cuál es tu Email?" id="email" required data-validation-required-message="Sin esta parte esto no funciona.">
                                           <p class="help-block text-danger"></p>
                                       </div>
                                   </div>
                                   <div class="row control-group">
                                       <div class="form-group col-xs-12 floating-label-form-group controls">
                                           <label for="phone">Asunto</label>
                                           <input type="tel" class="form-control" placeholder="De qué vamos a conversar?." id="phone" required data-validation-required-message="Pon un tema.">
                                           <p class="help-block text-danger"></p>
                                       </div>
                                   </div>
                                   <div class="row control-group">
                                       <div class="form-group col-xs-12 floating-label-form-group controls">
                                           <label for="message">Mensaje</label>
                                           <textarea rows="5" class="form-control" placeholder="Elabore ;)." id="message" required data-validation-required-message="Cuál es la gracia si no se llena esto?."></textarea>
                                           <p class="help-block text-danger"></p>
                                       </div>
                                   </div>
                                   <br>
                                   <div id="success"></div>
                                   <div class="row">
                                       <div class="form-group col-xs-12">
                                           <button type="submit" class="btn btn-primary btn-sm">Enviar !</button>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </section>



<script src="js/contact_me.js"></script>
<script src="libs/js/jquery.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
