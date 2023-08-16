<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fundación MTQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Solitreo&display=swap"
        rel="stylesheet">




    <!-- Styles -->
    <style>

    </style>

    <!--Style CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilosLanding.css') }}" />


</head>

<body class="container-fluid g-0">

    <header class="row d-flex ">

        <nav class="navbar navMenu">
            <div class="col-1">
                <a class="" href="#">
                    <img src="/img/logoslogan.svg" class="imgLogo" alt="Fundación MTQ">
                </a>
            </div>
            <!--Menú para pantallas grandes-->
            <div class="col-11 d-none d-md-block ">
                <ul class=" nav justify-content-end">
                    <li class="nav-item mx-2">
                        <a class="nav-link linkMenu" aria-current="page" href="#somos">¿Quiénes Somos?</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link linkMenu" href="#valores">Nuestros Valores</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link linkMenu" href="#proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link linkMenu" href="#ayudar">Quiero ayudar</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link linkMenu" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>

            <!--Menú para pantallas chicas-->
            <div class="d-block d-md-none me-5">
                <input type="checkbox" id="menuH" style="display: none;" />
                <div class="hamburger">
                    <label for="menuH"class="_layer -top"></label>
                    <label for="menuH" class="_layer -mid"></label>
                    <label for="menuH" class="_layer -bottom"></label>
                </div>
                <div class="menuppal text">
                    <ul>
                        <li class="nav-item text-end">
                        <li><a href="#somos" class="menuHamburgesa">¿Quiénes Somos?</a></li>
                        <li><a href="#valores"class="menuHamburgesa">Nuestros Valores</a></li>
                        <li><a href="#proyectos"class="menuHamburgesa">Proyectos</a></li>
                        <li><a href="#ayudar"class="menuHamburgesa">Quiero ayudar</a></li>
                        <li><a href="#contacto"class="menuHamburgesa">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <div id="carouselExampleFade" class="carousel slide carousel-fade g-0">
        <h1>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/banner1.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="/img/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/banner3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </h1>
    </div>

    <section class="row d-flex quienesSomos my-4" id="somos">
        <div class="col-12  mb-5 scroll-container">
            <div class="cont-titulo mx-auto d-block scroll-element js-scroll fade-in-top">
                <h2 class="tituloUno">¿Quiénes</br><span> Somos?</span></br>
                    <img src="/img/rallitaRosa.svg" class="rallita" alt="Rallita">
                </h2>
            </div>
        </div>

        </div>
        <div class="col-12">
            <div class="row justify-content-around mx-3">
                <div class="col-12 col-md-4 my-3 scroll-element js-scroll fade-in-left">
                    <img src="/img/quienesSomos2.jpg" width="100%" class="bordeMorado" alt="Quienes Somos 1">
                </div>
                <div class="col-12 col-md-4 my-3 scroll-element js-scroll fade-in-bottom">
                    <img src="/img/quienesSomos1.jpg" width="100%" class="bordeRosa" alt="Quienes Somos 2">
                </div>
                <div class="col-12 col-md-4 mt-3 scroll-element js-scroll fade-in-right">
                    <img src="/img/quienesSomos3.jpg" width="100%" class="bordeMorado" alt="Quienes Somos 3">
                </div>
            </div>
        </div>
        <div class="col-12 text-center mt-5 mb-4 my-3 scroll-container">
            <div class="scroll-element js-scroll fade-in-top">
                <img src="/img/logoFundacionGris.svg" class="logoGris" alt="LOgo findación gris">
            </div>
        </div>
        <div class="col-12 col-md-6 offset-md-3 my-2 scroll-container">
            <div class="">
                <p class="text-center">
                    ­Desde nuestros inicios en el año 2011, Fundación MTQ
                    ha causado un gran impacto en la vida de muchas familias Jaliscienses,
                    hemos dirigido nuestros esfuerzos hacia personas en estado de
                    vulnerabilidad, ya sea por su condición social, tipo de discapacidades,
                    nivel económico, estado de salud físico o psicológico o una combinación
                    de éstos, con el propósito de mejorar su calidad de vida. </br></br>

                    La base de nuestro trabajo reside en hacer el bien y en la dedicación
                    continua que aportamos a la variedad de causas en las que participamos.
                </p>
            </div>
            <div class="mx-auto d-block my-5 scroll-element js-scroll fade-in-top">
                <img src="/img/logoTransparencia.svg" class="mx-auto d-block logoGris" alt="Logo Transparencia">
                <P class="col-8 col-md-5 mx-auto my-4 d-block textInstitucionalidad">Recibimos la Acreditación
                    en Institucionalidad y
                    Transparencia</P>
            </div>
        </div>
    </section>

    <section class="row d-flex justify-content-center valores" id="valores">
        <div class="col-11  my-4 scroll-container">
            <div class="cont-titulo scroll-element js-scroll fade-in-top">
                <h2 class="tituloUnoBlanco ">Nuestros</br><span> Valores</span></br>
                    <img src="/img/rallitaRosa.svg" class="rallita" alt="Rallita">
                </h2>
            </div>
        </div>
        <div class="col-11">
            <div class="row">
                <div class="col-12 col-md-4">
                    <nav>
                        <div class="nav nav-tabs contValores" id="nav-tab" role="tablist">
                            <button class="nav-link btnValores active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Visión</button>
                            <button class="nav-link btnValores" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab"
                                aria-controls="nav-profile" aria-selected="false">Misión</button>
                            <button class="nav-link btnValores" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab"
                                aria-controls="nav-contact" aria-selected="false">Valores</button>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-md-8 tab-content mb-5 " id="nav-tabContent">
                    <div class="row flex-nowrap tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="card mb-3">
                            <div class="row justify-content-center g-0">
                                <div class="col-6 col-md-4">
                                    <img src="/img/vision.svg" class="img-fluid" alt="vision">

                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title titleValores">Visión</h5>
                                        <p class="card-text">Ser la asociación civil líder en otorgar las soluciones
                                            optimas e innovadoras acorde a las necesidades especificas de cada una de
                                            las causas que nos comprometemos, sustentada por un modelo de procuración
                                            autosuficiente y transparente que asegure el futuro de nuestros proyectos.
                                            Con esto consolidarnos como la primera opción viable y confiable para
                                            quienes buscan apoyar a las personas vulnerables.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  tab-pane fade" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="card mb-3">
                            <div class="row justify-content-center g-0">
                                <div class="col-6 col-md-4">
                                    <img src="/img/mision.svg" class="img-fluid" alt="Mision">

                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title titleValores">Misión</h5>
                                        <p class="card-text">Desarrollar, promover e impulsar todas las actividades
                                            para la integración de personas en estado de vulnerabilidad, con el fin de
                                            mejorar su calidad de vida.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  tab-pane fade" id="nav-contact" role="tabpanel"
                        aria-labelledby="nav-contact-tab" tabindex="0">
                        <div class="card mb-3">
                            <div class="row justify-content-center g-0">
                                <div class="col-6 col-md-4">
                                    <img src="/img/valores.svg" class="img-fluid" alt="valores">

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title titleValores">Valores</h5>
                                        <p class="card-text">
                                            Igualdad</br>
                                            Empatía</br>
                                            Compromiso</br>
                                            Cooperación </br>
                                            Confianza
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-0 p-0">
            <img src="/img/ondasRosas.png" width="100%" alt="ondas">
        </div>
    </section>

    <section class="row justify-content-center proyectos" id="proyectos">
        <div class="col-11  mb-5 scroll-container">
            <div class="cont-titulo scroll-element js-scroll fade-in-top">
                <h2 class="tituloDos "></br><span>Proyectos</span></br>
                    <img src="/img/rallitaRosa.svg" class="rallita" alt="Rallita">
                </h2>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-4 my-4 scroll-element js-scroll fade-in-left">
                    <div class="contentA mx-auto d-block ">
                        <div class="content">
                            <div class="contenTImagenMorado">
                                <img src="/img/educacion.jpg" class="imgProyectos" alt="Educacion">
                            </div>
                        </div>
                    </div>
                    <h4 class="subProyectos mt-3 text-center">Educación</h4>
                    <p>A través de nuestro programa de educación, tenemos la posibilidad de hacer cambios
                        reales y positivos en la vida de muchos pequeños.</br> </br>
                        Esta es una de las áreas clave de atención en Fundación MTQ y
                        un motivo de gran éxito para nuestra asociación.
                    </p>
                </div>
                <div class="col-12 col-md-8 col-lg-4 my-4 scroll-element js-scroll fade-in-bottom">
                    <div class="contentB mx-auto d-block">
                        <div class="content">
                            <div class="contenTImagenRosa">
                                <img src="/img/salud.jpg" class="imgProyectos" alt="Salud">
                            </div>
                        </div>
                    </div>
                    <h4 class="subProyectos mt-3 text-center">Salud</h4>
                    <p>
                        Sabemos que la salud es fundamental para el bienestar de las personas y para
                        el desarrollo de la sociedad, nuestro enfoque es ayudar a las personas en situación
                        de vulnerabilidad, brindándoles apoyo en los servicios médicos, medicinas y estudios que
                        necesiten.
                    </p>
                </div>
                <div class="col-12 col-md-8 col-lg-4 my-4 scroll-element js-scroll fade-in-right">
                    <div class="contentA mx-auto d-block">
                        <div class="content">
                            <div class="contenTImagenMorado">
                                <img src="/img/apoyo.jpg" class="imgProyectos" alt="Apoyo Humanitario">
                            </div>
                        </div>
                    </div>
                    <h4 class="subProyectos mt-3 text-center">Apoyo Humanitario</h4>
                    <p>Sabemos que la salud es fundamental para el bienestar de las personas
                        y para el desarrollo de la sociedad, nuestro enfoque es ayudar a las
                        personas en situación de vulnerabilidad, brindándoles apoyo en los
                        servicios médicos, medicinas y estudios que necesiten.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="col-12">
                    <h2 class="tituloDos pb-3 "></br><span>Proyecto Actual</span></br></h2>
                </div>

                <div class="col-lg-6 col-12 pb-4">
                    <div class="m-0 p-0">
                        <img src="/img/campaigns/refugioMit.png" style="width: 100%; display: block;" alt="mit">
                        <img src="/img/campaigns/fundaciones.png" style="width: 100%; display: block;"
                            alt="fundaciones">
                    </div>
                </div>
                <div class="col-lg-6 col-12 pb-4 text-center">
                    <p class="ProyectoActual pb-2">
                        Brinda comodidad y esperanza: ¡Dona un colchón y
                        cambia vidas! Tu generosidad puede convertirse en un descanso reparador para mujeres que están
                        reconstruyendo sus caminos.

                    </p>
                    <p class="ProyectoActual pb-2">
                        Cada donación nos acerca a un sueño más dulce y a la oportunidad de un nuevo comienzo.
                    </p>
                    <p class="ProyectoActual pb-2">
                        Únete a nosotros para crear un impacto real y tangible en estas vidas. ¡Dona hoy y ayuda a
                        construir
                        un futuro más cómodo y brillante para todas!
                    </p>
                    <p class="cuenta pt-5">
                        Aportaciones Economicas:
                    </p>

                    <p class="cuenta pt-3">
                        Cuenta: 0100 5888433</br>
                        Clabe: 044320010058884331</br>
                        Scotiabank
                    </p>

                </div>


            </div>
        </div>
    </section>
    <div class="m-0 p-0">
        <img src="/img/ondas.jpg" width="100%" alt="ondas">
    </div>

    <section class="row justify-content-center quienesSomos my-4">
        <div class="col-11  mb-5 scroll-container" id="ayudar">
            <div class="cont-titulo scroll-element js-scroll fade-in-top">
                <h2 class="tituloUno ">Quiero</br><span> Ayudar</span></br>
                    <img src="/img/rallitaRosa.svg" class="rallita" alt="Rallita rosa">
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-11 ">

                <div class="row scroll-container">
                    <div class="col-10 col-md-4 col-lg-3 my-4 scroll-element js-scroll fade-in-left">
                        <img src="/img/especie.png" width="85%" class="mx-auto d-block imgAyudar"
                            alt="icono especie">
                    </div>
                    <div class="col-12 col-md-8 col-lg-9 my-4 scroll-element js-scroll fade-in-right">
                        <h4 class="subProyectos mt-3">¡Las donaciones en especie son una forma valiosa de apoyar!</h4>
                        <p>
                            1. Alimentos y artículos de higiene personal: Las donaciones de alimentos no perecederos y
                            artículos de higiene personal, como jabón, pasta dental, papel higiénico y otros, son muy
                            útiles. Estas donaciones ayudarán a satisfacer las necesidades básicas y mejorar la calidad
                            de vida de las personas necesitadas.</br></br>
                            2. Ropa y calzado: Las donaciones de ropa y calzado ayudarán a las personas que viven en
                            situaciones de emergencia, como víctimas de desastres naturales y para personas sin hogar o
                            en situación de pobreza.
                        </p>
                    </div>
                    <div class="col-10 col-md-4 col-lg-3 my-4 scroll-element js-scroll fade-in-left">
                        <img src="/img/dinero.png" width="85%" class="mx-auto d-block" alt="icono dinero">
                    </div>
                    <div class="col-12 col-md-8 col-lg-9 my-4 scroll-element js-scroll fade-in-right">
                        <h4 class="subProyectos mt-3">¡Utilizamos los fondos de manera responsable y transparente!</h4>
                        <p>
                            Las donaciones económicas nos brindan la flexibilidad para utilizar los fondos en las áreas
                            más necesitadas y responder a las emergencias y crisis de manera más efectiva.</br></br>

                            Cuenta: 0100 5888433</br>
                            Clabe: 044320010058884331</br>
                            Scotiabank

                        </p>
                    </div>
                    <div class="col-10 col-md-4 col-lg-3 my-4 scroll-element js-scroll fade-in-left">
                        <img src="/img/alianza.png" width="85%" class="mx-auto d-block" alt="Icono Alianza">
                    </div>
                    <div class="col-12 col-md-8 col-lg-9 my-4 scroll-element js-scroll fade-in-right">
                        <h4 class="subProyectos mt-3">¡Tu empresa puede ser parte del cambio!</h4>
                        <p>
                            Buscamos aliados que compartan los valores y misión de Fundación MTQ
                            y estén dispuestos a contribuir positivamente con la comunidad. </br></br>
                            El trabajar en equipo con aliados estratégicos, nos permite potencializar
                            nuestros programas sociales para llegar más rápido a las metas establecidas.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="">
        <img src="/img/footer.jpg" width="100%" class=" g-0" alt="ondas moradas">
    </div>
    <footer class="row justify-content-center pie pb-5 scroll-container" id="contacto">
        <div class="">
            <h2 class="tituloFooter scroll-element js-scroll fade-in-top">
                Súmate a ayudar
            </h2>
        </div>
        <div class="col-10 col-md-6 mb-5 scroll-element js-scroll fade-in-top">
            <form>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-4 col-sm-2 col-form-label">Nombre</label>
                    <div class="col-8 col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-4 col-sm-2 col-form-label">Email</label>
                    <div class="col-8 col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btnAyudar float-end">Quiero ayudar</button>
            </form>
        </div>
        <div class="col-11 mt-5">
            <div class="row justify-content-center pb-5">

                <div class="col-9 col-md-1 my-4 mt-4">
                    <img src="/img/logoBlanco.svg" width="70%" class="logoBlanco"
                        alt="logo fundación MTQ blanco">
                </div>
                <div class="col-9 col-md-3 mt-4">
                    <nav class="mt-0 ">

                        <a href="#somos" class="menuFooter">
                            <p>¿Quiénes Somos?</p>
                        </a>
                        <a href="#valores" class="menuFooter">
                            <p>Nuestros Valores</p>
                        </a>
                        <a href="#proyectos" class="menuFooter">
                            <p>Proyectos</p>
                        </a>
                        <a href="#ayudar" class="menuFooter">
                            <p>Quiero Ayudar</p>
                        </a>
                        <a href="#contacto" class="menuFooter">
                            <p>Contacto</p>
                        </a>

                    </nav>

                </div>

                <div class="col-md-5 mt-4">
                    <h5 class="mb-3">Contacto</h5>
                    <div class="row d-flex">
                        <div class="col-2 col-lg-2">
                            <img src="/img/casa.svg" class="m-0 p-0 float-end imgDireccion" alt="casa">
                        </div>

                        <div class="col-10 col-lg-10 mb-3">
                            <p>José María Heredia 2405</br>
                                Lomas de Guevara</br>
                                C.P. 44657</br>
                                Guadalajara, Jalisco
                            </p>
                        </div>
                        <div class="col-2 col-lg-2">
                            <img src="/img/diadema.svg" width="40%" class="m-0 p-0 float-end imgDireccion"
                                alt="diadema">
                        </div>
                        <div class="col-10 col-lg-10">
                            <P>33 3630 6028 ext. 6105</P></br>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-3  d-block mt-4">
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=100070949806178" Target="_blank"><img
                                src="/img/facebook.svg" width="10%" class="float-end mx-2"
                                alt="liga a Facebook"></a>
                        <a href="#"><img src="/img/instagram.svg" width="10%" class="float-end mx-2"
                                alt="liga a Instagram"></a>
                        <a href="#"><img src="/img/twitter.svg" width="10%" class="float-end mx-2"
                                alt="Liga a Twitter"></a></br></br>
                    </div>
                    <div class="pt-3">
                        <p class="text-end">Fundación MTQ 2023</br>
                            Todos los derechos reservados</P>
                    </div>
                </div>
            </div>
        </div>


    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


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
            var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
            if (hasClass(elem, className)) {
                while (newClass.indexOf(' ' + className + ' ') >= 0) {
                    newClass = newClass.replace(' ' + className + ' ', ' ');
                }
                elem.className = newClass.replace(/^\s+|\s+$/g, '');
            }
        }

        function toggleClass(elem, className) {
            var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
            if (hasClass(elem, className)) {
                while (newClass.indexOf(" " + className + " ") >= 0) {
                    newClass = newClass.replace(" " + className + " ", " ");
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
