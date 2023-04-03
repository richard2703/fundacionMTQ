<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fundación MTQ</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>

        <!--Style CSS-->
        <link rel="stylesheet"  type="text/css" href="{{asset('/public/css/reset.css')}}" />
        <link rel="stylesheet"  type="text/css" href="{{asset('css/estilosLanding.css')}}"/>

        
    </head>
    <body class="container-fluid g-0">
                    
        <header class="row ">
            <nav class="navbar navMenu">
                <div class="col contLogo ms-5">
                  <a class="" href="#">
                    <img src="/img/logoslogan.svg" class="imgLogo" alt="Fundación MTQ" >
                  </a>
                </div>
                <!--Menú para pantallas grandes-->
                <div class="col d-none d-lg-block " >

                    <ul class=" nav justify-content-end">
                        
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Valores</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Acciones</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link ">Contacto</a>
                        </li>
                    </ul>
                </div>
            
                  <!--Menú para pantallas chicas-->
                  
                <div class="d-block d-lg-none contHamb">
                    <input type="checkbox" id="menuH" style="display: none;" />
                    <div class="hamburger">
                        <label for="menuH"class="_layer -top"></label>
                        <label for="menuH" class="_layer -mid"></label>
                        <label for="menuH" class="_layer -bottom"></label>
                    </div>
                    <div class="menuppal">
                        <ul><li class="nav-item"> <i class="bi bi-arrow-bar-right"></i></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Valores</a></li>
                            <li><a href="#">Acciones</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                     </nav>  
                </div>
        </header>
           
            <section id="carouselExampleAutoplaying " class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active ">
                    <img src="/img/banner1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item ">
                    <img src="/img/banner2.jpg" class="d-block w-100 " alt="...">
                  </div>
                  <div class="carousel-item ">
                    <img src="/img/banner3.jpg" class="d-block w-100 " alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </section>

            <section class="row nosotros justify-content-center py-5">
                <div class="col-10  my-4">
                    <!--<img src="/img/logobco.svg" class="imgLogo mx-auto d-block" alt="Fundación MTQ" >
                    <h2 class="titulos mt-5 mb-3 border-start">El Ser y el Hacer</h2>-->
                   <div class="row">
                    <div class="col-12">
                        <h2 class="titulos mt-5 mb-3 border-start">El Ser y el Hacer</h2>
                    </div>
                    <div class="col-11  col-md-6 ">
                        <p class="textos ">
                        Una fundación concebida a partir del valor humano de hacer el bien, ha dirigido sus esfuerzos
                        hacia personas con estado de vulnerabilidad, ya sea por su condición social, capacidades diferentes, nivel económico, estado de salud 
                        físico o psíquico, o una combinación de éstos y sin importar su sexo, edad, etnia o estado civil; con el propósito de mejorar su 
                        condición y que puedan aspirar a una situación de bienestar y una mejor calidad de vida.                    
                        </p></br>
                        <p class="textos">
                            Para cumplir con su inmutable objetivo <srtong class="textKeyword">Fundación MTQ</srtong> pone a su disposición  su capacidad técnica y financiera,
                            infraestructura para la vivienda, mantenimiento o mejora, alimentación, vestimenta, educación, atención médica, psicológica, 
                            asesoría legal y orientación para su reinserción social.
                        </P></br>               
                        
                    </div>
                    <div class="col-11  col-md-6">
                        <p class="textos">
                            En lo referente al plano legal, la asociación civil podrá celebrar todos los actos consernientes a contratos y operaciones
                            administrativas, civiles o mercantiles que sean necesarias o convenientes; así como realizar las funciones establecidas por la ley en la materia.
                        </p>
                    </div>
                   </div> 
                </div>                
            </section>

            <section class="row justify-content-center py-5">
                <div class="col-10 my-5">
                    <div class="row justify-content-center g-4 my-5">
                        <div class="col-12 col-md-4 my-5 scroll-container">
                            <div class="card h-100 cardValores scroll-element js-scroll fade-in-left">
                                <img src="/img/misionMorado.svg" class="imgValores" alt="...">
                                <div class="card-body">
                                <h5 class="card-title text-center textValores text-blur-out">MISIÓN</h5>
                                <p class="card-text text-center">
                                    Desarrollar, promover e impulsar todas las actividades para 
                                    la integración de personas vulnerables con el fin de mejorar su calidad de vida.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 scroll-container my-5">
                            <div class="card h-100 cardValores scroll-element js-scroll fade-in-bottom">
                                <img src="/img/visionMorado.svg" class="imgValores " alt="...">
                                <div class="card-body">
                                <h5 class="card-title text-center textValores text-blur-out">VISIÓN</h5>
                                <p class="card-text text-center">
                                    Ser una de las mejores asociaciones civiles en Jalisco, que otorgue herramientas 
                                    a todas aquellas personas 
                                    con vulnerabilidad para así ayudarles a integrarse a la sociedad.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 scroll-container my-5">
                            <div class="card h-100 cardValores scroll-element js-scroll fade-in-right">
                                <img src="/img/objetivoMorado.svg" class="imgValores" alt="...">
                                <div class="card-body">
                                <h5 class="card-title text-center textValores text-blur-out">OBJETIVO ESPECÍFICO</h5>
                                <p class="card-text text-center">
                                    Lograr que la sociedad conozca y valore las necesidades de los 
                                    diferentes proyectos de cada una de las personas que solicitan 
                                    el apoyo a la fundación y que esto permita poder integrarlos 
                                    a la sociedad y darles una mejor calidad de vida.</p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Card title</h5>
                            <p class="card-text text-center">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>-->
                        </div>
                    </div>
                </div>
            </section>


            <section class="row  cendi justify-content-center py-5 scroll-container">
                <div class="col-10  my-5">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <h1 class="h1cendi scroll-element js-scroll fade-in-left">Centro de Estimulación  para Personas </br>con
                                Discapacidad Intelectual </br>
                                <img src="/img/rallita.svg" width="80px;" class="mb-5" alt="...">
                            </h1>
                        </div>
                        <div class="col-6 pe-4 my-5">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Nulla fringilla accumsan sem, in luctus enim ultricies a. 
                                Praesent blandit tortor id justo auctor, quis pulvinar orci feugiat. 
                                Ut tincidunt bibendum congue. </br></br>
                                
                                Aliquam condimentum tortor diam, 
                                in vestibulum est consectetur ut. Vivamus tempor mauris in auctor aliquam. 
                                Phasellus quis congue mauris, vel aliquet massa. Nunc porta, lorem id 
                                pretium finibus, mauris magna vulputate nulla, et facilisis tellus odio vel neque. 
                            </p>
                        </div>

                        <div class="col-6 ps-4 my-5"> 
                            <img src="/img/cendi1.jpg" width="90%" class="imgCendi float-end bordemoradoA scroll-element js-scroll fade-in-right" alt="...">    
                        </div>
                        <div class="col-6 pe-4">
                            <img src="/img/cendi2.jpg" width="100%" class=" my-5 borderRosa scroll-element js-scroll fade-in-left" alt="...">
                            <img src="/img/cendi6.jpg" width="90%" class=" my-5 bordemoradoA float-end scroll-element js-scroll fade-in-left" alt="...">
                            <img src="/img/cendi5.jpg" width="80%" class="my-5 borderRosa float-end scroll-element js-scroll fade-in-left" alt="...">
                        </div>

                        <div class="col-6 ps-4 my-5">
                            <img src="/img/cendi3.jpg" width="90%" class="my-5 bordemoradoA scroll-element js-scroll fade-in-right" alt="...">
                            <img src="/img/cendi4.jpg" width="100%" class="my-5 borderRosa scroll-element js-scroll fade-in-right" alt="...">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Nulla fringilla accumsan sem, in luctus enim ultricies a. 
                                Praesent blandit tortor id justo auctor, quis pulvinar orci feugiat. 
                                Ut tincidunt bibendum congue. </br></br>
                                
                                Aliquam condimentum tortor diam, 
                                in vestibulum est consectetur ut. Vivamus tempor mauris in auctor aliquam. 
                                Phasellus quis congue mauris, vel aliquet massa. Nunc porta, lorem id 
                                pretium finibus, mauris magna vulputate nulla, et facilisis tellus odio vel neque. 
                            </p>
                        </div>
                    </div>

                </div>
            </section>
            <section class="row  lupita justify-content-center py-5 scroll-container">
                <div class="col-10  my-5">
                    <div class="row justify-content-between align-items-end">
                        <!--<div class="col-12">
                            <h1 class="h1cendi scroll-element js-scroll fade-in-left">Centro de Estimulación  para Personas </br>con
                                Discapacidad Intelectual </br>
                                <img src="/img/rallita.svg" width="80px;" class="mb-5" alt="...">
                            </h1>
                        </div>-->
                        <div class="col-4 pe-4 my-5">
                            <h1 class="h1cendi text-end scroll-element js-scroll fade-in-left">Lupita </br>
                                <img src="/img/rallita.svg" width="80px;" class="mb-2" alt="...">
                            </h1>
                            <p class="text-end">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Nulla fringilla accumsan sem, in luctus enim ultricies a. 
                                Praesent blandit tortor id justo auctor, quis pulvinar orci feugiat. 
                                Ut tincidunt bibendum congue.
   
                            </p>
                        </div>
                        <div class="col-8 ps-4 my-5"> 
                                <video width="100%"  autoplay muted loop playsinline>
                                <source src="/videos/lupita2.mp4" type="video/mp4">      
                              </video>
                        </div>
                        <div class="col-4 ps-4 my-5">
                            <img src="/img/lupita2.jpg" width="100%" class="my-3 bordemoradoA scroll-element js-scroll fade-in-right" alt="...">
                        </div>
                        <div class="col-4 ps-4 my-5">
                            <img src="/img/lupita1.jpg" width="100%" class="my-3 bordemoradoA scroll-element js-scroll fade-in-right" alt="...">
                        </div>
                        <div class="col-4 ps-4 my-5">
                            <p class="text-end">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Nulla fringilla accumsan sem, in luctus enim ultricies a. 
                                Praesent blandit tortor id justo auctor, quis pulvinar orci feugiat. 
                                Ut tincidunt bibendum congue.
   
                            </p>
                        </div>
                    </div>

                </div>

            </section>
            <footer class="row justify-content-center">  
                <div class="col-12 py-5">
                    <img src="/img/logobco.svg" width="100px" class="my-3 mx-auto d-flex " alt="...">
                    
                    <form class="row mb-3 justify-content-center">
                        <div class="col-4 ">
                            <label for="inputEmail3" class=" ">Email</label>
                            <input type="email" class="form-control" id="">
                            <button type="submit" class="btn btnEnviar">Enviar</button>
                        </div> 
                    </form>

                </div>


            </footer>
           
            





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    





       
    
<!--Script adicionales-->
<script>
    var theToggle = document.getElementById('toggle');


    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }

    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }

    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }

    function toggleClass(elem, className) {
        var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0 ) {
                newClass = newClass.replace( " " + className + " " , " " );
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }

    theToggle.onclick = function() {
    toggleClass(this, 'on');
    return false;
    }
</script>
<script>
    const scrollElements = document.querySelectorAll(".js-scroll");

    const elementInView = (el, dividend = 1) => {
      const elementTop = el.getBoundingClientRect().top;
    
      return (
        elementTop <=
        (window.innerHeight || document.documentElement.clientHeight) / dividend
      );
    };
    
    const elementOutofView = (el) => {
      const elementTop = el.getBoundingClientRect().top;
    
      return (
        elementTop > (window.innerHeight || document.documentElement.clientHeight)
      );
    };
    
    const displayScrollElement = (element) => {
      element.classList.add("scrolled");
    };
    
    const hideScrollElement = (element) => {
      element.classList.remove("scrolled");
    };
    
    const handleScrollAnimation = () => {
      scrollElements.forEach((el) => {
        if (elementInView(el, 1.25)) {
          displayScrollElement(el);
        } else if (elementOutofView(el)) {
          hideScrollElement(el)
        }
      })
    }
    
    window.addEventListener("scroll", () => { 
      handleScrollAnimation();
    });
</script>

    </body>
</html>
