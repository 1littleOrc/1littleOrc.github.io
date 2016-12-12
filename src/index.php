<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>lesson 19</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <header>
    <div class="container">
    <!-- top line -->
      <div class="row top_line">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 top_line-logo">
          <div class="top_line-logo-image"><span>S</span>mart</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 top_line-menu">
          <a href="#" class="top_line-menu-burger">
            <div class="top_line-menu-burger-button"></div>
          </a>
        </div>
      </div>
    
    <!-- general screen text -->
    <div class="row first-screen">
      <div class="col-lg-offset-2 col-lg-8 wow fadeInUp">
        <h1><span>Smart</span> Agency Landign Page</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, fuga provident. Libero magni quibusdam labore ad iste saepe hic, maxime qui ipsum tempore beatae, volu tomi ptates        doloremque rerum aspernatur dolorum at!</p>
      </div>
    </div>
    
    <div class="row promo-form">
      <div class="col-xs-10 col-xs-offset-1 col-md-offset-3 col-md-6 col-lg-offset-0 col-lg-4 promo-form-bg">
        <form action="#" class="ajaxform">
          <div><span>Send</span> A Message</div>
          <input type="text" name="name" placeholder="Your Name">
          <input type="email" name="email" placeholder="Your Email" required="">
          <textarea rows="3" name="message" ="Your Message"></textarea>
          <button type="submit"><span>Send Message <i class="fa fa-long-arrow-right"></i></span></button>
        </form>
      </div>
    </div>

    </div>
  </header>
  
  <section class="work">
    <div class="container text-center work-process ">
      <div class="row">
        <div class="col-xs-12 service-header">
          <span>Working</span> Process
          <p class="service-header-p">Lorem ipsum dolor sit amet consectet ur adipiscing elit  Vestibulum bibend um vestibulum.</p>
        </div>
      </div> <!-- / Заголовок -->
  
      <div class="row">
        <div class="work-process-body">
          <div class="col-xs-12 col-sm-6 col-lg-3 work-process-body-box wow zoomInUp" data-wow-duration="2s" data-wow-delay="0s">
            <div class="tomi">
              <i class="fa fa-magnet fa-3x"></i>
              <span>Koc Koi Tomi</span>
              <p>Lorem ipsum is dummy lorem very dumy</p>
              <button class="btn know-more-btn" data-toggle="modal" data-target="#know-more"><span class="btn_plus"></span>Know More</button>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-3 work-process-body-box wow zoomInUp" data-wow-duration="2s" data-wow-delay="0s">
            <div class="koimona">
              <i class="fa fa-bug fa-3x"></i>
              <span>Koimona Set</span>
              <p>Lorem ipsum is dummy lorem very dumy</p>
              <button class="btn know-more-btn" data-toggle="modal" data-target="#know-more"><span class="btn_plus"></span>Know More</button>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-3 work-process-body-box wow zoomInUp" data-wow-duration="2s" data-wow-delay="0s">
            <div class="koire">
              <i class="fa fa-cogs fa-3x"></i>
              <span>Setting Koire</span>
              <p>Lorem ipsum is dummy lorem very dumy</p>
              <button class="btn know-more-btn" data-toggle="modal" data-target="#know-more"><span class="btn_plus"></span>Know More</button>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-3 work-process-body-box wow zoomInUp" data-wow-duration="2s" data-wow-delay="0s">
            <div class="lara">
              <i class="fa fa-camera-retro fa-3x"></i>
              <span>Ko Image Lara</span>
              <p>Lorem ipsum is dummy lorem very dumy</p>
              <button class="btn know-more-btn" data-toggle="modal" data-target="#know-more"><span class="btn_plus"></span>Know More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- section.featured>.container.text-center>.row>.col-lg-12.service-header>span+p.service-header-p -->
  
  <section class="featured">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12 service-header">
          <span>Featured</span> Works
          <p class="service-header-p">
            Lorem ipsum dolor sit amet consectet ur adipiscing elit  Vestibulum bibend um vestibulum.
          </p>
        </div>
      </div> <!-- // Заголовок -->
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/1.jpg" alt="">
                  <div class="overlay">
                      <h2>item 1</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div> 
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/2.jpg" alt="">
                  <div class="overlay">
                      <h2>item 2</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/3.jpg" alt="">
                  <div class="overlay">
                      <h2>item 3</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/4.jpg" alt="">
                  <div class="overlay">
                      <h2>item 4</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/5.jpg" alt="">
                  <div class="overlay">
                      <h2>item 5</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/6.jpg" alt="">
                  <div class="overlay">
                      <h2>item 6</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/7.jpg" alt="">
                  <div class="overlay">
                      <h2>item 7</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/8.jpg" alt="">
                  <div class="overlay">
                      <h2>item 8</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="hovereffect">
              <img class="img-responsive" src="img/gallery/9.jpg" alt="">
                  <div class="overlay">
                      <h2>item 9</h2>
                      <p><a href="#">LINK HERE</a></p> 
                  </div>
          </div>
      </div>
    </div>
  </section>

  <section class="provide">
     <div class="container text-center">
      <div class="row">
        <div class="col-xs-12 service-header">
          <span>Services</span> We Provide
          <p class="service-header-p">
            Lorem ipsum dolor sit amet consectet ur adipiscing elit  Vestibulum bibend um vestibulum.
          </p>
        </div>
      </div> <!-- // Заголовок -->

      <div class="row">
        <div class="col-md-2">
          <ul class="tabs_menu" role="tablist">
            <li class="tabs_menu_item" role="presentation" class="active">
              <a href="#app" aria-controls="app" role="tab" data-toggle="tab">
                <img class="img-responsive" src="img/buttons/1.png" alt="1">
              </a>
            </li>
            <li class="tabs_menu_item" role="presentation">
              <a href="#web" aria-controls="web" role="tab" data-toggle="tab">
                <img class="img-responsive" src="img/buttons/2.png" alt="2">
              </a>
            </li>
            <li class="tabs_menu_item" role="presentation">
              <a href="#promo" aria-controls="promo" role="tab" data-toggle="tab">
                <img class="img-responsive" src="img/buttons/3.png" alt="3">
              </a>
            </li>
          </ul>
        </div><!--  // боковое меню -->
        <div class="col-md-10 tab-content">
          <!-- .row>.col-lg-8>h4.provide-header{Modern App Design}+p+button^.col-lg-4>img[img/s-info-1.png] -->
          <div class="row provide-tab tab-pane fade active in" role="tabpanel" id="app">
            <div class="col-xs-12 col-md-8 col-lg-8 provide-tab-content">
              <h4>Modern App Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus earum totam ad sint error porro. Consectetur, sunt, aperiam. Magni rem optio distinctio illum consequuntur delectus nulla illo aperiam itaque cumque.
              <br><br>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel officia vitae eveniet quam rem unde facilis.</p>
              <button class="provide-btn" data-toggle="modal" data-target="#know-more"><span class="btn_plus"></span>Know More</button>
            </div>
            <div class="col-md-4">
              <img class="img-responsive provide-img" src="img/buttons/s-info-1.png" alt="watch">
            </div>
          </div> <!-- //element -->
          <div class="row provide-tab tab-pane fade" role="tabpanel" id="web">
            <div class="col-lg-8 provide-tab-content">
              <h4>Modern Web Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus earum totam ad sint error porro. Consectetur, sunt, aperiam. Magni rem optio distinctio illum consequuntur delectus nulla illo aperiam itaque cumque.
              <br><br>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel officia vitae eveniet quam rem unde facilis.</p>
              <button class="provide-btn" data-toggle="modal" data-target="#know-more"><span class="btn_plus"></span>Know More</button>
            </div>
            <div class="col-md-4">
              <img class="img-responsive  provide-img" src="img/buttons/s-info-2.png" alt="watch">
            </div>
          </div> <!-- //element -->
          <div class="row provide-tab tab-pane fade" role="tabpanel" id="promo">
            <div class="col-lg-8 provide-tab-content">
              <h4>Modern Promo Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus earum totam ad sint error porro. Consectetur, sunt, aperiam. Magni rem optio distinctio illum consequuntur delectus nulla illo aperiam itaque cumque.
              <br><br>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel officia vitae eveniet quam rem unde facilis.</p>
              <button class="provide-btn" data-toggle="modal" data-target="#know-more"><span class="btn_plus"></span>Know More</button>
            </div>
            <div class="col-md-4">
              <img class="img-responsive   provide-img" src="img/buttons/s-info-3.png" alt="watch">
            </div>
          </div> <!-- //element -->
        </div> <!-- контент -->
      </div>
  </section>

<section class="faq">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12 service-header">
          <span>Frequently</span> Asked Question
          <p class="service-header-p">
            Lorem ipsum dolor sit amet consectet ur adipiscing elit  Vestibulum bibend um vestibulum.
          </p>
        </div>
  
        <div class="row panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0 acrdn-tab">
            <div class="panel panel-default pd">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a class="accordion-toggle nounderline" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         Collapsible Group Item #1
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-10 col-xs-offset-1  col-md-6 col-md-offset-0 acrdn-tab">
            <div class="panel panel-default pd">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a class="accordion-toggle nounderline" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                         Collapsible Group Item #2
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
       
          <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0 acrdn-tab">
            <div class="panel panel-default pd">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a class="accordion-toggle nounderline" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                         Collapsible Group Item #3
                  </a>
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0 acrdn-tab">
            <div class="panel panel-default pd">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a class="accordion-toggle nounderline" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                         Collapsible Group Item #4
                  </a>
                </h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </section>
  <div class="row">
    <div class="container">
      <div class="col-lg-12">
        <div class="container text-center">
          <div class="row">
            <div class="col-xs-12 service-header">
              <span>Clients</span> Said
              <p class="service-header-p">
                Lorem ipsum dolor sit amet consectet ur adipiscing elit  Vestibulum bibend um vestibulum.
              </p>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="feedback-slider">
                  <div class="feedback-slider-item">
                    <div class="feedback-slider-item-box">
                      <img class="img-circle center-block feedback-slider-img" src="img/users/user-1.jpg" alt="">
                        <div class="feedback-slider-item-box-shadow">
                          <p>“This was my first time renting from car rental. The service rep help me find the best rental to suit my needs. I will definitely rent with this company again”</p>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <p><span>Kita Say</span>, HK Director</p>
                        </div>
                    </div>
                  </div>
                  <div class="feedback-slider-item">
                    <div class="feedback-slider-item-box">
                      <img  class="img-circle center-block feedback-slider-img
 feedback-slider-img" src="img/users/user-2.jpg" alt="">
                        <div class="feedback-slider-item-box-shadow">
                          <p>“This was my first time renting from car rental. The service rep help me find the best rental to suit my needs. I will definitely rent with this company again”</p>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <p><span>Kita Say</span>, HK Director</p>
                        </div>
                    </div>
                  </div>
                  <div class="feedback-slider-item">
                    <div class="feedback-slider-item-box"">
                      <img  class="img-circle center-block feedback-slider-img
 feedback-slider-img" src="img/users/user-3.jpg" alt="">
                        <div class="feedback-slider-item-box-shadow">
                          <p>“This was my first time renting from car rental. The service rep help me find the best rental to suit my needs. I will definitely rent with this company again”</p>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <p><span>Kita Say</span>, HK Director</p>
                        </div>
                    </div>
                  </div>
                  <div class="feedback-slider-item">
                    <div class="feedback-slider-item-box"">
                      <img  class="img-circle center-block feedback-slider-img
 feedback-slider-img" src="img/users/user-4.jpg" alt="">
                        <div class="feedback-slider-item-box-shadow">
                          <p>“This was my first time renting from car rental. The service rep help me find the best rental to suit my needs. I will definitely rent with this company again”</p>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <p><span>Kita Say</span>, HK Director</p>
                        </div>
                    </div>
                  </div>
                  <div class="feedback-slider-item">
                    <div class="feedback-slider-item-box"">
                      <img  class="img-circle center-block feedback-slider-img
 feedback-slider-img" src="img/users/user-5.jpg" alt="">
                        <div class="feedback-slider-item-box-shadow">
                          <p>“This was my first time renting from car rental. The service rep help me find the best rental to suit my needs. I will definitely rent with this company again”</p>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <p><span>Kita Say</span>, HK Director</p>
                        </div>
                    </div>
                  </div>
                  <div class="feedback-slider-item">
                    <div class="feedback-slider-item-box">
                      <img  class="img-circle center-block feedback-slider-img" src="img/users/user-6.jpg" alt="">
                        <div class="feedback-slider-item-box-shadow">
                          <p>“This was my first time renting from car rental. The service rep help me find the best rental to suit my needs. I will definitely rent with this company again”</p>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <p><span>Kita Say</span>, HK Director</p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="row">
      <div class="container">
        <div class="col-xs-12">
          <button class="btn footer-btn" data-toggle="modal" data-target="#myModal">Contact Us</button>
        </div>
      </div>
    </div>
  </footer>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="modal-content">
        <div class="row">
          <div class="col-xs-offset-10 col-xs-2">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 
          col-md-offset-2 col-lg-12 col-lg-offset-0">
          <form  class="ajaxform">
              <h4 class="modal-header"><span>Get</span> Call</h4>
              <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email" required="">
                <textarea rows="3" placeholder="Your Message"></textarea>
                <button type="submit"><span>Send Message <i class="fa fa-long-arrow-right"></i></span></button>
                <br><br>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<div class="modal fade" id="know-more" tabindex="-1" role="dialog" aria-labelledby="know-moreLabel">
    <div class="modal-dialog" role="document">
      <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <div class="modal-content">
              <div class="row">
                <div class="col-xs-offset-10 col-xs-2">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 
                col-md-offset-2 col-lg-12 col-lg-offset-0">
                  <form  class="ajaxform">
                    <h4 class="modal-header"><span>Take</span> Prices</h4>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                      <input type="email" placeholder="Your Email" required="">
                      <button type="submit"><span>Get Prices <i class="fa fa-download" aria-hidden="true"></i></span></button>
                      <br><br>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="thanks-modal" tabindex="-1" role="dialog" aria-labelledby="thanks-modalLabel">
    <div class="modal-dialog" role="document">
      <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <div class="modal-content">
              <div class="row">
                <div class="col-xs-offset-10 col-xs-2">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 
                col-md-offset-2 col-lg-12 col-lg-offset-0">
                  <h4 class="modal-header"><span>Thank</span> You</h4>
                  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <p class="text-center">Мы вам перезвоним</p>
                    <br><br>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.feedback-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: true,
        prevArrow: '<i class="fa feedback-slider-arrows feedback-slider-arrow-left fa-chevron-left"></i>',
        nextArrow: '<i class="fa feedback-slider-arrows feedback-slider-arrow-right fa-chevron-right"></i>',
        dots: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>
  <script>
    new WOW().init();
  </script>
  <script>
    $(document).ready(function() {
      $(".ajaxform").submit(function() {
        $.ajax({
          type: "POST",
          url: "mail.php",
          data: $(this).serialize()
        }).done(function() {
          $(this).find("input").val("");
          //alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
          $("#thanks-modal").modal("show");
          $(".ajaxform").trigger("reset");
        });
        return false;
      });
      
    });
  </script>

  </body>
</html>