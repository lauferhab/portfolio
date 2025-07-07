<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portafolio</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="img/png" href="img/control-de-juegos-para-pc.png"/>

    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>

<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo" data-aos="zoom-in" data-aos-duration="1100">Laura <span>Ferrer</span></a>
        <nav class="navbar">
            <a data-aos="fade-up" data-aos-duration="1100" data-aos-delay="100" href="index.php" class="active" >HOME</a>
            <a data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200" href="#about">SOBRE MI</a>
            <a data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300" href="#education">EDUCACION</a>
            <a data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400" href="#skills">SKILLS</a>
            <a data-aos="fade-up" data-aos-duration="1100" data-aos-delay="500" href="#portfolio" >PORTFOLIO</a>

            <span class="active-nav"></span>
        </nav>
        <div class="header-controls">
            <div data-aos="fade-up" data-aos-duration="1100" data-aos-delay="100" class="dark-mode link">
                <div class="circle">
                    <ion-icon class="sun" name="sunny"></ion-icon>
                    <ion-icon class="moon" name="moon"></ion-icon>
                    <script src="./js/tema.js"></script>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1100" data-aos-delay="100" class="language-selector link">
                <button id="lang-es" aria-label="Cambiar a Español" class="active">
                    <img src="./img/espana.png" alt="Español" />
                </button>
                <button id="lang-en" aria-label="Switch to English">
                    <img src="./img/reino-unido.png" alt="English" />
                </button>
                <script src="./js/idioma.js"></script>
            </div>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h1 data-aos="fade-left" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="700" data-lang="saludo">
                <span id="saludo-text" class="saludo"></span> <span id="nombre" class="nombre"></span>
            </h1>
            <div class="typewriter"  data-aos="fade-right" data-aos-duration="1100" data-aos-delay="900" ><span class="typewriter-text"></span><label for="">|</label></div>
            <p data-aos="flip-up" data-aos-duration="1100" data-aos-delay="1100">Graduada en Ingeniería Informática y Tecnologías Virtuales.
                Especializada en Ciberseguridad.
            </p>

            <div class="btn-box" data-aos="zoom-in-left" data-aos-duration="1100" data-aos-delay="1700">
                <a href="#" class="btn">Descargar CV</a>
            </div>

            <div class="home-sci">
                <a href="#" data-aos="zoom-out" data-aos-duration="1100" data-aos-delay="1300"><i class='bx bxl-whatsapp' ></i></a>
                <a href="#" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="1400"><i class='bx bxs-envelope' ></i></a>
                <a href="#" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="1500"><i class='bx bxl-linkedin' ></i></a>
            </div>

            <!-- <div class="home-imgHover"></div> -->

        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <h2 class="heading" >Sobre <span>Mi</span></h2>
        <div class="about-img">
            <img src="img/laura.png"/>
            <span class="circle-spin"></span>
        </div>
        <div class="about-content">
            <h3>¡Ingeniera Informática!</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Sunt voluptatum iste similique mollitia rerum exercitationem nesciunt saepe enim reprehenderit, 
            deserunt odio obcaecati veritatis libero. Asperiores, saepe? At quidem labore aspernatur. 
            Ad, consectetur non quo veniam maxime, porro ratione debitis est minima, laboriosam voluptate cumque error eveniet et fuga mollitia sit.</p>
        </div>
    </section>

    <!-- education section design -->
    <section class="education" id="education">
        <h2 class="heading">Mi <span>Experiencia</span></h2>
        <div class="education-row">
            <div class="education-column">
                <div class="title"><span data-lang="educacion"></span></div>
                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar' ></i> 2025 - 2026</div>
                            <h3><a href="estudios/master2.html">Máster en Ciberseguridad Ofensiva - Campus Internacional de Ciberseguridad</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere vitae iure molestias. Quas tenetur blanditiis voluptatum sapiente, 
                            similique praesentium labore eum nihil libero facere atque. Recusandae, consequuntur!</p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar' ></i> 2023 - 2025</div>
                            <h3><a href="estudios/master2.html">Máster en Dirección de Ciberseguridad, Hacking Ético y Seguridad - EIP Business School</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere vitae iure molestias. Quas tenetur blanditiis voluptatum sapiente, 
                            similique praesentium labore eum nihil libero facere atque. Recusandae, consequuntur!</p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar' ></i> 2019 - 2023</div>
                            <h3><a href="estudios/master2.html">Grado en Ingeniería Informática y Tecnologías Virtuales- Universidad Loyola Andalucía</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere vitae iure molestias. Quas tenetur blanditiis voluptatum sapiente, 
                            similique praesentium labore eum nihil libero facere atque. Recusandae, consequuntur!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="education-column">
                <div class="title"><span data-lang="experiencia"></span></div>
                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar' ></i> 19 mayo 2025 - actualmente</div>
                            <h3>Ingeniera de Desarrollo Software - Informática Astron Multimedia, S.L.</h3>
                            <p data-lang="exp_astron_intro">Colaboración en proyectos técnicos para administraciones públicas con enfoque en seguridad y soporte.</p>
                              <ul>
                                <li data-lang="exp_astron_1">Elaboración documental del ENS.</li>
                                <li data-lang="exp_astron_2">Administración de sistemas, bases de datos y servidores.</li>
                                <li data-lang="exp_astron_3">Soporte técnico y programación.</li>
                              </ul>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar' ></i> 2021</div>
                            <h3>Auxiliar Administrativa - LauFerGar, S.L</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere vitae iure molestias. Quas tenetur blanditiis voluptatum sapiente, 
                            similique praesentium labore eum nihil libero facere atque. Recusandae, consequuntur!</p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar' ></i> 2022</div>
                            <h3>Auxiliar Administrativa - LauFerGar, S.L</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere vitae iure molestias. Quas tenetur blanditiis voluptatum sapiente, 
                            similique praesentium labore eum nihil libero facere atque. Recusandae, consequuntur!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- skills section design -->
    <section class="skills" id="skills">
    <h2 class="heading">Mis <span>Habilidades</span></h2>
        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">Hard Skills</h3>
                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>Programación Web <span>100%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills-column">
                <h3 class="title">Soft Skills</h3>
                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>Inglés <span>75%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio section -->
    <section class="portfolio" id="portfolio">
      <div class="content">
        <h2 class="heading">Mis <span>Portfolio</span></h2>
        <div class="boxes">
          <div class="box" >
            <div class="icon">
              <i class="fas fa-desktop"></i>
            </div>
            <h3 class="topic">Web Devlopment</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-paint-brush"></i>
            </div>
            <h3 class="topic">Graphic Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
          </div>
          <div class="box" >
            <div class="icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3 class="topic">Digital Marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
          </div>
          <div class="box" >
            <div class="icon">
              <i class="fab fa-android"></i>
            </div>
            <h3 class="topic">Icon Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
          </div>
          <div class="box" >
            <div class="icon">
              <i class="fas fa-camera-retro"></i>
            </div>
            <h3 class="topic">Photography</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-tablet-alt"></i>
            </div>
            <h3 class="topic">Apps Devlopment</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem quam odio, qui voluptatem eligendi?</p>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section design  -->
    <section class="contact" id="contact">
        <h2 class="heading">¡Contacta<span>me</span>!</h2>
        <form action="#">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Nombre Completo" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Dirección Email" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="number" placeholder="Número de Teléfono" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Asunto" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="textarea-field">
                <textarea name="" id="" cols="30" rows="10" placeholder="Tu menasje" required></textarea>
                <span class="focus"></span>
            </div>

            <div class="btn-box btns">
                <button class="btn">Enviar</button>
            </div>
        </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyrigth &copy 2023 | Todos los derechos reservados.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-up-arrow-alt' ></i></a>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="js/idioma.js"></script>
    <script src="js/tema.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({offset:0});
    </script>
</body>

</html>
