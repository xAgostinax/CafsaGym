<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CAFSa GYM</title>
    <meta name="google-site-verification" content="gXfWJlTA07OLzAKodcjZe2GAGHwNkO2ttKlI4e709xo" />
	 <!--Para renderizar en IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/Slideshow.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>
    <link href="img/favicon" rel="shortcut icon" type="image/x-icon">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <style>
    .intro-section{
          background-image: url(img/imagen.png);
          background-repeat: no-repeat;
          background-position: 110% 60%
    }

     </style>

     <script type="text/JavaScript">
     $(document).ready(function() {
    $('#myCarousel').carousel({
    interval: 10000
    })
    
    $('#myCarousel').on('slid.bs.carousel', function() {
        //alert("slid");
    }); 
    });

     </script>
</head>

<!--El id #page-top es parte de la funcion scrolling, data-spy y data-target forman parte de la funcion scrollspy de bootstrap -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">CAFSa GYM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="ul-custom nav navbar-nav ">

                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#nosotros">Nosotros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#actividades">Actividades</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#novedades">Novedades</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#articulos">Articulos</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                   <h1><img src="img/logo_opt.jpg" width="300" height="300" alt="..." class="img-circle"></h1>
                  
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <br>
                     <p class="intro"> Centro de Actividad Física para la Salud </p>
                <br>
                    <a class="btn btn-default page-scroll fantasma" href="#nosotros">Sobre Nosotros</a>
                </div>
            </div>

            
        </div>
    </section>
    
    <!-- About Section -->
    <section id="nosotros" class="nosotros-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Reseña Historica</h1>
                    <hr class="star-light">
                    <p class="resena">  
CAFSa comienza a gestarse allá por el año 2009, a través de clases que se dictaban en distintos hogares de personas de nuestra localidad, 
que por diferentes motivos decidieron realizar actividad física, luego durante el año 2010 y parte del 2011 el CENTRO CULTURAL que tiene 
Pérez Millán le abre las puertas  a la Prof. María Silvia Sosa, para que pudiera dictar clases en uno de los  salones con los que cuenta. 
En Abril del año 2012 CAFSa se muda a la calle Juan José Paso,  ya que se necesitaba un espacio más amplio para poder brindar un mejor
 servicio a los alumnos y permitir que fuera más la gente que se sumara a las actividades que se pretendían ofrecer.   Desde el año 2014 
 hasta la fecha,nos encontramos en calle Naciones Unidas. 
 Los alumnos que vienen al gimnasio son de nuestra localidad y de la localidad vecina “La Violeta”. 
                    </p>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="col-md-12">
                <div id="carousel-1" class="carousel slide" data-ride = "carousel">
                    <!--Indicadores -->
                    <ol class="carousel-indicators">
                        <!--ponemos el id del div -->
                        <li data-target ="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target ="#carousel-1" data-slide-to="1"></li>
                        <li data-target ="#carousel-1" data-slide-to="2"></li>
                        <li data-target ="#carousel-1" data-slide-to="3"></li>
                        <li data-target ="#carousel-1" data-slide-to="4"></li>
                        <li data-target ="#carousel-1" data-slide-to="5"></li>
                    </ol>
                    <!--Contenedor de los slide -->
                    <div class="carousel-inner" role = "listbox">
                        <div class="item active">
                            <img src="img/resena/1.jpg" class="img-responsive" alt="">
                            <div class="carousel-caption">
                                <h3>Este es nuestro Slide #1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>

                         <div class="item">
                            <img src="img/resena/2.jpg" class="img-responsive" alt="">
                        </div>

                         <div class="item">
                            <img src="img/resena/3.jpg" class="img-responsive" alt="">
                        </div>

                         <div class="item">
                            <img src="img/resena/4.JPG" class="img-responsive" alt="">
                        </div>

                         <div class="item">
                            <img src="img/resena/5.jpg" class="img-responsive" alt="">
                        </div>

                         <div class="item">
                            <img src="img/resena/6.jpg" class="img-responsive" alt="">
                        </div>

                    </div>

                     <!--Controles -->
                     <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                         <span class="sr-only">Anterior</span>
                     </a>

                      <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                         <span class="sr-only">Siguiente</span>
                     </a>
                </div>
            </div>
        </div>
     

        <!--Comienzo slide RESEÑA -->
<div class="container">
  <div class="row">
    
  </div>
</div>
           <!-- Fin de Slide reseña-->
    </section>

    <!-- SECCION ACTIVIDADES -->
    <section id="actividades" class="actividades-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1>Actividades</h1>
                    <hr class="star-primary"></hr>    

        <!--SE ABRE PRIMER FILA DE ACTIVIDADES-->
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/ritmo01(OPT).jpg" width="150" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>Jornadas de Ritmos </strong>
                                </h4>
                                <p class="pieFotoAct">Para niñas, adolescentes y adultos.</p>   
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/natacion01 (OPT).jpg" width="150" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>Natación</strong>
                                </h4>
                                <p class="pieFotoAct">En invierno y durante la temporada de verano.</p>
                           </div>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/afa01(OPT).jpg" width="150" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>AFA (Actividad física adaptada)</strong>
                                </h4>
                                <p class="pieFotoAct">Problemas de columna, sobrepeso u obesidad</p>   
                            </div>
                        </div>

                    </div>

                    <!-- SE CIERRA PRIMER FILA DE ACTIVIDADES -->
                    
                    <!-- SE ABRE SEGUNDA FILA DE ACTIVIDADES -->

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/musculacion01 (OPT)" width="150" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>Clases de Musculación</strong>
                                </h4>
                            </div>
                        </div>

              
                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/deportistas02 (OPT)" width="150" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>Preparación Física para Deportistas</strong>
                                </h4>   
                            </div>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/escuelita01(OPT).jpg" width="150" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>Escuelita Deportiva</strong>
                                </h4>     
                            </div>
                        </div>
                    </div>

                    <!-- SE CIERRA SEGUNDA FILA DE ACTIVIDADES -->

                    <!-- SE ABRE TERCERA FILA DE ACTIVIDADES -->

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/embarazadaOPT2.jpg" width="120" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>Gimnasia para Embarazadas</strong>
                                </h4>
                                
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/coloniaOPT.jpg" width="150" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>Colonia de Invierno</strong>
                                </h4>  
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="center">
                                <img src="img/señoras02(OPT).jpg" width="150" height="150" alt="Responsive image" class="img-circle img-thumbnail">
                                <h4>
                                    <strong>Gimnasia para Señoras</strong>
                                </h4>
                            </div>
                        </div>
     
                    </div>

                    </div>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- SE CIERRA TERCERA FILA DE ACTIVIDADES -->
        </div>               
        
    </section>

    <!-- Contact Section -->
    <section id="novedades" class="novedades-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Seccion Novedades</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="articulos" class="articulos-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Seccion Articulos</h1>
                </div>
            </div>
        </div>
    </section>

     <!-- SECCION CONTACTO -->
    <section id="contacto" class="contacto-section">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h1>Contacto</h1>
                <hr class="star-light">
            </div>

        <div class="col-lg-12 col-lg-offset-1">
           <form class="form-horizontal">
                <div class="form-group form-group-lg">
                    <label for="inputEmail3" class="col-sm-2 label-custom control-label ">Nombre</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Ingrese su Nombre">
                    </div>
                </div>

                <div class="form-group form-group-lg">
                    <label for="inputEmail3" class="col-sm-2 control-label label-custom">Email</label>
                    <div class="col-sm-6">
                          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Ingrese su Email">
                    </div>
                </div>

                <div class="form-group form-group-lg">
                  <label for="inputEmail3" class="col-sm-2 control-label label-custom">Asunto</label>
                  <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Ingrese el Asunto">
                  </div>
                </div>

                <div class="form-group form-group-lg">
                  <label for="inputEmail3" class="col-sm-2 control-label label-custom">Mensaje</label>
                  <div class="col-sm-6">
                        <textarea class="form-control" rows="5" placeholder="Escriba su Consulta" ></textarea>
                  </div>
                </div>
          
                <div class="form-group">

                   <div class="col-lg-12 ">
                       <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-default btn-lg">
                   </div>
                </div>

            </form>
        </div>

        </div>
    </section>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <script type="text/JavaScript">
    var currentImage;
var currentIndex = -1;
var interval;
function showImage(index){
    if(index < $('#bigPic img').length){
        var indexImage = $('#bigPic img')[index]
        if(currentImage){   
            if(currentImage != indexImage ){
                $(currentImage).css('z-index',2);
                clearTimeout(myTimer);
                $(currentImage).fadeOut(250, function() {
                    myTimer = setTimeout("showNext()", 3000);
                    $(this).css({'display':'none','z-index':1})
                });
            }
        }
        $(indexImage).css({'display':'block', 'opacity':1});
        currentImage = indexImage;
        currentIndex = index;
        $('#thumbs li').removeClass('active');
        $($('#thumbs li')[index]).addClass('active');
    }
}

function showNext(){
    var len = $('#bigPic img').length;
    var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
    showImage(next);
}

var myTimer;

$(document).ready(function() {
    myTimer = setTimeout("showNext()", 3000);
    showNext(); //Load first image
    $('#thumbs li').bind('click',function(e){
        var count = $(this).attr('rel');
        showImage(parseInt(count)-1);
    });
});
    </script>

</body>

	
</body>
</html>