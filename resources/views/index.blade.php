@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>ASOCIACIÓN ALCANZANDO ESTRELLAS</h1>
                            <p class="p-heading p-large">Somos una institución  sin fines de lucro, de proyección Social, que propicia el desarrollo integral a la niñez, adolescencia y familias  indígenas en pobreza y pobreza extrema.</p>
                            <a class="btn-solid-lg page-scroll" href="/#intro">DESCUBRE MAS</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">INTRO</div>
                        <h2>"No basta con amar a los niños, es preciso que ellos se den cuenta que son amados"</h2>
                        <div class="testimonial-author">Sectores que Atendemos:</div>
                        <menu>
                            <li>Niñez y juventud que trabaja</li>
                            <li>Niños de famiias desintegradas</li>
                            <li>Niñez y adolescencia en pobreza y pobreza extrema</li>
                            <li>Madres y Hermanos de los niños y niñas</li>
                            <li>Niños que soliciten apoyo en casos especiales</li>
                            <li>Mujeres que necesiten apoyo como asesoria legal, orientacion en problemas familiares.</li>
                        </menu>                                               
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/intro-office.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Logros Destacados<br></h2>
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Desempeño Académico</h4>
                            <p>85% al 92% de las niñas, niños y adolescentes apoyados apueban el grado.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Baja Deserción Escolar</h4>
                            <p>Se ha reducido la desercion escolar de las niñas, niñs y adolescentes que atendemos as 1.76%</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-chart-pie fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Superación Emocional</h4>
                            <p>Niñas, niños, adolescentes, madres y padres, han superado problemas emocionales, con una actitud de esfuerzo haci la vida.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">SERVICIOS</div>
                    <h2>Programas de apoyo que la asociación<br> otorga a niños y adultos.</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-1.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Apoyo Escolar</h3>
                            <p>Comprende varias acciones como:</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Dotación de útiles escolares</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Talleres de reforzamiento:</div>
                                        <ul>
                                            <li>Escolar</li>
                                            <li>biblioteca</li> 
                                        </ul>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Servicio de Internet</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">visitas:</div>
                                    <ul>
                                        <li>Escolares</li>
                                        <li>Domiciliares</li> 
                                    </ul>
                                </li>
                            </ul>                            
                        </div>
                        
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Apoyo en Salud</h3>
                            <p>Los servicios médicos que se ofren son los siguientes;</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Formación en Salud</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Desparasitación</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Suplementación</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Referencias a:</div>
                                        <ul>
                                            <li>Chequeo Médico</li>
                                            <li>Jornadas</li>
                                        </ul>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Refacción Nutritiva</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Dotación de Víveres</div>
                                </li>
                            </ul>                            
                        </div>                        
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Atención psicológica </h3>
                            <p>Atención Emocional</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Terapias Individuales a:</div>
                                    <ul>
                                        <li>Niñas</li>
                                        <li>Niños</li>
                                        <li>Madres</li>
                                        <li>Padres</li>
                                    </ul>                        
                                </li>                                
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Terapias Grupales</div>
                                </li>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Talleres de Formación</div>
                                </li>
                            </ul>                           
                        </div>                        
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    


    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>!Cambiando Vidas!<br>Estas son historias de algunos de nuestros beneficiarios</h2>
                    <p class="p-heading">(ATENCION: Las historias son reales, los medios multimedia, fotos, videos, de estas historias son por referencia para cuidar la integridad de la persona)</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Llego a la asociación con problemas de aprendizaje, se trató y se hayo la causa dada por problemas de violencia intrafamiliar al tratarla a ella y a su familia comenzó un buen rendimiento en sus clases y aprobó el grado ahora tiene una familia más estable y mayor comunicación con sus padres.</div>
                                            <div class="testimonial-author">Gloria, Una estrella con un brillo mas intenso.</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Rosa una jóven de escasos recursos, la segunda de nueve hijos por su situación económica abandono la escuela para tener que generar ingresos para su familia, gracias al apoyo y concientización a los padres hoy la mamá esta consiente y apoya a su hija, la que dejo de trabajar y estudia teniendo un buen rendimiento, siendo en el 2011 niña independencia y una de las niñas promesa (Selección de niños lideres para capacitación de salud mental como agente multiplicador)</div>
                                            <div class="testimonial-author">La revelacion de una promesa</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Amalia la segunda de cuatro hijos a su ingreso presentaba problemas de aprendizaje, al tratarse se estableció que eran por  problemas familiares después de recibir apoyo psicológico y orientacion escolar ahora es una niña sobresaliente y abanderada en la escuela que asiste.</div>
                                            <div class="testimonial-author">La luz que que no se apaga.</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">At the beginning I thought the prices are a little high for what they offer but they over deliver each and every time.</div>
                                            <div class="testimonial-author">Ronald Spice - Owner</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I recommend Aria to every business owner or growth leader that wants to take his company to the next level.</div>
                                            <div class="testimonial-author">Lindsay Rune - Manager</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">My goals for using Aria's services seemed high when I first set them but they've met them with no problems.</div>
                                            <div class="testimonial-author">Ann Black - Consultant</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->




    <!-- ACTIVIDADES -->
    <div id="actividades" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">ACTIVIDADES</div>
                    <h2>Ultimas actividades</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>MOSTRAR TODAS</span></a>
                        <a class="button" data-filter=".salud"><span>Salud</span></a>
                        <a class="button" data-filter=".educacion"><span>Educacion</span></a>
                        <a class="button" data-filter=".recreacion"><span>Recreacion</span></a>
                        <a class="button" data-filter=".otras"><span>Otras</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item otras">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>Rifa 2016</span></div><img src="images/actividad-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item recreacion">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>Dia de Campo, Tactic A.V.</span></div><img src="images/actividad-2.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item otras">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>Cena de recaudacion de fondos</span></div><img src="images/actividad-3.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item otras educacion">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>Ganadores cobancito 2016</span></div><img src="images/actividad-4.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item educacion">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span>Escuela de madres</span></div><img src="images/actividad-5.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item otras educacion">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span>Apoyo Carrera Internacional</span></div><img src="images/actividad-6.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item salud">
                            <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span>Atencion de odontologia</span></div><img src="images/actividad-7.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item recreacion">
                            <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span>Dia de campo</span></div><img src="images/actividad-8.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item educacion recreacion">
                            <a class="popup-with-move-anim" href="#project-9"><div class="element-item-overlay"><span>Taller de manualidades</span></div><img src="images/actividad-9.jpg" alt="alternative"></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-1.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Rifa 2016</h3>
                <hr class="line-heading">
                <h6>Entrega de premio</h6>
                <p>Entrega del premio de la rifa realizada el 4/7/2016 </p>
                <p>Ganador: Luis Eduardo Ac Rodriguez Licuadora.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Classic Industry</h3>
                <hr class="line-heading">
                <h6>Prueba de seccion</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-3.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>BoomBap Audio</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-4.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Van Moose</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-5.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Joy Moments</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-6.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Spark Events</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-7.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Casual Wear</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-8.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Zazoo Apps</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->}

    <!-- Lightbox -->
    <div id="project-9" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/actividad-9.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Zazoo Apps</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>-->
                <!--<a class="btn-solid-reg" href="#your-link">DETAILS</a>--> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- end of project lightboxes -->


    <!-- Team -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Team Of Consultants</h2>
                    <p class="p-heading">We're only as strong and as knowledgeable as our team. So here are the men and women which help customers meet goals and grow companies</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-1.png" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large">John Whitelong</p>
                        <p class="job-title">General Manager</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-2.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Veronique Smith</p>
                        <p class="job-title">Business Developer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-3.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Chris Zimerman</p>
                        <p class="job-title">Online Marketer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-4.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Mary Villalonga</p>
                        <p class="job-title">Community Manager</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of team -->
@endsection