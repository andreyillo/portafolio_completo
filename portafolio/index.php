<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Andres Lozano</title>
    <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="all">
        <header>
            <div class="container">
                <nav id="nav-ul">
                    <ul class="nav-ul">
                        <li class="nav-li active">
                            <i class="fas fa-user"></i>
                            <a href="#about" class="link" data-filter="content-about">Sobre Mi</a> 
                        </li>
                        <li class="nav-li">
                            <i class="fas fa-poll-h"></i>
                            <a href="#resume" class="link" data-filter="content-resume">Resumen</a> 
                        </li>
                        <li class="nav-li">
                            <i class="fas fa-pencil-alt"></i>
                            <a href="#portfolio" class="link" data-filter="content-portfolio">Formulario</a> 
                        </li>
                        <li class="nav-li">
                            <i class="fas fa-pencil-alt"></i>
                            <a href="#java" class="link" data-filter="content-java">JavaScript</a> 
                        </li>
                        <li class="nav-li">
                            <i class="fab fa-stack-exchange"></i>
                            <a href="#blog" class="link" data-filter="content-blog">Manual</a> 
                        </li>
                         <li class="nav-li">
                            <i class="fas fa-envelope"></i>
                            <a href="#contact" class="link" data-filter="content-contact">Contactame</a> 
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

       
        <!-- SECCI??N DE CONTENIDO  -->
        <section>
            <div class="container main-container">
                <!-- SECCI??N DE PERFIL -->
                <div class="profile">
                    <div class="profile-image">
                        <img src="images/1.jpg" border:black 3px solid; alt="man">
                    </div>
                    <div class="profile-content">
                        <h2>Andres Mauricio Lozano Ramirez</h2>
                        <p class="text-effect">2142329</p>
                        <div class="profile-cta my-border">
                            <div><a href="https://github.com/andreyillo/resumen-poo">GitHub De Tareas</a></div>
                            <div><a href="https://github.com/andreyillo?tab=repositories">GitHub De Trabajos</a></div>
                           
                        </div>
                    </div>
                </div>

                <!-- SECCION DEL CONTENIDO -->
                <div class="content-all">
                    <!-- SOBRE MI -->
                    <div class="content content-about" id="about">
                        <div class="content-header">
                            <h2><span>Sobre</span> Mi</h2>
                        </div>
                        <div class="content-details">
                            <img src="images/andres.jpg" alt="profile">
                            <p><span class="text">Hola! soy</span><span class="name"> Andres Mauricio Lozano Ramirez</span></p>
                            <p>
                                Dise??ador web de colombia, soacha. Tengo una gran experiencia en el dise??o y creaci??n de sitios web, y tambien me gustar experimentar grandes conocimientos al ambito dise??ador en la web. Me encanta hacer deportes,escuchar musica,leer libros .
                            </p>
                        </div>
                    </div>

                     <!--CONTENIDO RESUMEN -->
                    <div class="content content-resume" id="resume">
                        <div class="content-header">
                            <h2><span>Mi</span> Resumen</h2>
                        </div>
                        <div class="content-details">
                            <div class="resume">
                                <div class="my-resume education">
                                    <div class="title">
                                        <h3>Educacion</h3>
                                    </div>
                                    <div class="details">
                                        <div class="specific-details">
                                            <p class="year">2010-2019</p>
                                            <div class="year-details">
                                                <p class="year-title">
                                                    Tecnico en programacion de software
                                                </p>
                                                <p class="year-desc">
                                                   durante en el grado decimo y once comenzo hacer una peque??a carrera como tecnico en programacion de software practicamente casi viendo los mismos temas que estoy viendo actualmente fue una gran experiencia en mi vida estudiar aquella carrera
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-resume experience">
                                    <div class="title">
                                        <h3>Experiencia</h3>
                                    </div>
                                    <div class="details">
                                        <div class="specific-details">
                                            <p class="year">2018-2021</p>
                                            <div class="year-details">
                                                <p class="year-title">
                                                   Tecnologo En Analisis Y Desarrolllo De Sistema De Informacion
                                                </p>
                                                <p class="year-desc">
                                                Durante mi desarrollo como tecnico y tecnologo estudiante progrmacion de sistemas e aprendido a fundamentarme mas en el ambito desarrollador
                                                en los sitios web ya que uno aprende a implemetrar y analizar un poco mas sobre lo que uno va desarrollando
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- A??ADIR UNA L??NEA -->
                            <div class="content-line"></div>
                           <!-- MIS HABILIDADES -->
                            <div class="my-skills">
                                <div class="title">
                                    <h3>MIS HABILIDADES</h3>
                                </div>
                                <div class="skills">
                                    <div class="skill">
                                        <img src="images/html.png" alt="">
                                        <p>HTML</p>
                                    </div>
                                    <div class="skill">
                                        <img src="images/css logo.png" alt="">
                                        <p>CSS</p>
                                    </div>
                                    <div class="skill">
                                        <img src="images/js.jpg" alt="">
                                        <p>JavaScript</p>
                                    </div>
                                    <div class="skill">
                                        <img src="images/xampp.png" alt="">
                                        <p>Xampp</p>
                                    </div>
                                    <div class="skill">
                                        <img src="images/git.png" alt="">
                                        <p>GitHub</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <!-- PORTAFOLIO DE CONTENIDOS DEL FORMULARIO  Y EL CRUD-->
                    <div class="content content-portfolio" id="portfolio">
                        <div class="content-header">
                            <h2><span>Mi</span> Formulario</h2>
                        </div>
                        <div class="content-details">
                            <div class="portfolio">
                                <div class="portfolio-item">
                                   <img src="images/portfolio.png" alt=""> 
                                   <p class="portfolio-title">
                                     Formulario De Vehiculos
                                   </p>
                                   <p class="portfolio-desc">
                                   Aqui encontraremos un peque??o formulario de lo que estamos desarrollando es este caso es un formualrio de
                                   registar vehiculos al parqueadero donde le pedira ciertas cosas al registrarse
                                   </p>
                                   <a href="../vista/index1.php">&rarr; Ver Formulario</a>
                                </div>
                                </div> 
                            </div>
                              <div class="content-details">
                            <div class="portfolio">
                                <div class="portfolio-item">
                                   <img src="images/portfolio.png" alt=""> 
                                   <p class="portfolio-title">
                                    Crud De Los Vehiculos
                                   </p>
                                   <p class="portfolio-desc">
                                    Aqui es donde podemos ver todos los registros de los vehiculos que han estado registrados en el parqueadero en cual podemos
                                    ver,eliminarlos y actualizar el vehiculo mediante el crud
                                   </p>
                                   <a href="../vista/index.php">&rarr; Ver Crud</a>
                                </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- TRES TRABAJOS JAVSCRIPT-->
        <div class="content content-java" id="java">
                        <div class="content-header">
                            <h2><span>Mi</span> JavaScript</h2>
                        </div>
                        <div class="content-details">
                            <div class="java">
                                <div class="portfolio-item">
                                   <img src="images/portfolio.png" alt=""> 
                                   <p class="portfolio-title">
                                     JavaScript De Clases
                                   </p>
                                   <p class="portfolio-desc">
                                   En este caso en javascript elabora una clase y extenderlas es decir una herencia basada en mi proyecto que es parking_zone
                                   utilizando metodos get y set ademas extanciarlos y tambien elborando su composicion.
                                   </p>
                                   <a href="https://github.com/andreyillo/resumen-poo/tree/master/Clases">&rarr; Ver Clases</a>
                                </div>
                                </div> 
                            </div>
                              <div class="content-details">
                            <div class="java">
                                <div class="portfolio-item">
                                   <img src="images/portfolio.png" alt=""> 
                                   <p class="portfolio-title">
                                   JavaScript De Funciones
                                   </p>
                                   <p class="portfolio-desc">
                                    Aqui les voy a mostrar algunos de mis trabajos que he elaborado en javascript con funcion flecha en este caso
                                    les voy a ense??ar como hizo la funcion flecha pra sumar,sacar promedio,numero mayor,etc.
                                   </p>
                                   <a href="https://github.com/andreyillo/resumen-poo/tree/master/FUNCIONES">&rarr; Ver Funciones</a>
                                </div>
                                </div> 
                    
                            </div>
                            <div class="content-details">
                            <div class="java">
                                <div class="portfolio-item">
                                   <img src="images/portfolio.png" alt=""> 
                                   <p class="portfolio-title">
                                   JavaScript De Poo
                                   </p>
                                   <p class="portfolio-desc">
                                    Aqui les voy a mostrar otro metodo orientado en poo utilizando variables var y for tambien incluyendo algunos ejercicios
                                    tales como sumar,dividir,restar,etc.
                                   </p>
                                   <a href="https://github.com/andreyillo/resumen-poo/tree/master/POO">&rarr; Ver Poo</a>
                                </div>
                                </div> 
                            </div>
                            </div>
                    
    
                    <!-- CONTENIDO DEL MANUAL -->
                    <div class="content content-blog" id="blog">
                        <div class="content-header">
                            <h2><span>Manual</span> De Usuario</h2>
                        </div>
                        <div class="content-details">
                            <div class="blog">
                                <div class="blog-post">
                                    <p class="post-title">Como Desarrollar Un Manual De Usuario</p>
                                    <p class="post-desc">
                                    Se trata de una gu??a que ayuda a entender el funcionamiento de algo, o bien que educa a sus lectores acerca de un tema de forma ordenada y concisa.
                                    </p>
                                    <a href="../portafolio/usuario/usuario.php">&rarr; Ver Pasos Manual Usuario</a>
                                </div>
                            </div>
                              <div class="content-header">
                            <h2><span>Manual</span> De  Software</h2>
                        </div>
                        <div class="content-details">
                            <div class="blog">
                                <div class="blog-post">
                                    <p class="post-title">Como Desarrollar Un Manual De Software </p>
                                    <p class="post-desc">
                                    es el conjunto de informaci??n que nos dice qu?? hacen los sistemas, c??mo lo hacen y para qui??n lo hacen
                                    </p>
                                    <a href="../portafolio/software/software.php">&rarr; Ver Pasos Manual Software</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENIDO CONTACTO-->
                    <div class="content content-contact" id="contact">
                        <div class="content-header">
                            <h2><span>Contact</span> Me</h2>
                        </div>
                        <div class="content-details">
                            <div class="contact">
                                <div class="contact-details">
                                    <p class="title">Direcci??n</p>
                                    <p>Colombia, SOACHA</p>
                                    <img src="images/white-line.PNG" alt="">
                                </div>
                                <div class="contact-details">
                                    <p class="title">Correo</p>
                                    <p>amlozano055@misena.edu.co</p>
                                </div>
                                <div class="contact-details">
                                    <p class="title">Telefono</p>
                                    <p>+317 57 16178</p>
                                </div>
                                <div class="contact-details">
                                    <p class="title">Lanza libre</p>
                                    <p>Disponible</p>
                                </div>
                            </div>
                            <div class="content-line"></div>
                          <!-- FORMULARIO DE CONTACTO -->
                            <div class="contact-form">
                                <div class="title">
                                    <h3>FORMULARIO DE CONTACTO</h3>
                                </div>
                                <form action="">
                                    <div class="form-input">
                                        <input type="text" placeholder="Nombre">
                                        <input type="email" placeholder="Correo Electronico">
                                    </div>
                                    <textarea cols="30" rows="10" placeholder="Escriba Aqui Tu Mensaje"></textarea>
                                    <input type="submit" value="Enviar mensaje">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>

    <script src="java/script.js"></script>
</body>
</html>


