<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>NewOxxy Tecnologia</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="fresco/fresco.js"></script>
<link rel="stylesheet" type="text/css" href="fresco/fresco.css" />

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="contactform/contactform.js"></script>


</head>
<body>
<nav class="main-nav-outer" id="test"><!--Inicio-Menu-->
	<div class="container">
        <ul class="main-nav">        	            
            <li class="small-logo"><a href="../index.html#two"><img src="img/small-logo2.png" alt=""></a></li>            
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--Fim-Menu-->



<section class="main-section" id="Sobre"><!--Inicio-sobre-nos-->
	<div class="container">
    	<h2>Área Restrita</h2>
    	<h6>A NewOxxy tem o compromisso de fornecer meios para que seus clientes possam ter uma gestão sistêmica e eficiente dos números de sua empresa.</h6>
        <div class="row">
        	<div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">                	
                	<div class="service-list-col2">
                        
						<div class="form"><!--inicio-form-->                	
                    <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-text" id="name" placeholder="Seu E-mail" data-rule="minlen:4" data-msg="Por favor entre com um e-mail valido." />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Sua Senha" data-rule="email" data-msg="Senha precisa de mais de 4 caracteres. " />
                            <div class="validation"></div>
                        </div>                      
                        <div class="text-center"><button type="submit" class="input-btn">Acessar</button></div>
                    </form>
                </div><!--fim-form-->	
						
                    </div>
                </div>                            
            </div>
            <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="img/macbook-pro.png" alt="">
            </figure>
        
        </div>
	</div>
</section><!--Fim-sobre-nos-->

<footer class="footer"><!--inicio-rodape-->
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
        <span class="copyright">&reg; NewOxxy. Todos direitos Reservados</span>
    </div>
</footer><!--Fim-rodape-->


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>