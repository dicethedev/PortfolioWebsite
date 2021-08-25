<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/CSS/style.css">

    <!-- Favicons -->
    <link href="assets/img/favicon2.png" rel="icon">

    <!-- === Font Style === -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- ===BOX ICONS === -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Blessing Samuel</title>
</head>

         <!-- alert messages Start -->
         <?php echo $alert; ?>
         <!-- alert messages End -->

<body>
    <!-- === HEADER AREA === -->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#home" class="nav__logo">BlessingSamuel</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <!--active-->
                    <li class="nav__item"><a href="#about" class="nav__link">About Me</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact Me</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <!-- <i class='bx bx-menu'></i> -->
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAK0lEQVRIiWNgGAWjgBbgP4V44C0YBQQBzcN8NFIHHuALb4chYcEoGAWkAQDE0kY7sKF+3gAAAABJRU5ErkJggg==" />
            </div>
        </nav>
    </header>



    <main class="l-main">
        <!-- === HOME === -->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hey, <br> I'm <span class="home__title-color">Blessing</span>
                    <br>Designer & <br> Developer
                </h1>
                <a href="/assets/pdf/MyCv.pdf" class="button">Resume</a>
            </div>

            <div class="home__social">
                <a href="https://twitter.com/dicethedev" class="home__social-icon"><i class='bx bxl-twitter'></i></a>
                <a href="https://instagram.com/dice.thedev" class="home__social-icon"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.youtube.com/channel/UCuTLcs8-cfr6WJ2O8BICJEA" class="home__social-icon"><i class='bx bxl-youtube'></i></a>
                <a href="https://github.com/dicethedev" class="home__social-icon"><i class='bx bxl-github'></i></a>

            </div>

            <div class="home__img">
                <img src="assets/img/profile1.png" alt="">
            </div>
        </section>

        <!-- === ABOUT === -->
        <section class="about section" id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/img/coder.jpg" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">I'm Blessing Samuel</h2>
                    <p class="about__text">Blessing (DicetheDev) Samuel loves programming, designing & working on projects. He does not love talking about himself in the 3rd person. He want to learn New things, because that's what brings joy to his life Up. He believe in team -->
                        success & growth, however he always put his best & maintain a strong team bonding for every project he get to work on.
                    </p>
                </div>
            </div>
        </section>
        <!-- === MY SKILLS === -->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Professional Skills</h2>
                    <p class="skills__text">I want to make things that make a difference.</p>


                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">Graphic Design</span>
                        </div>

                        <div>
                            <span class="skills__percentage">90%</span>
                        </div>

                        <div class="skills__bar skills__graphic-design"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>

                        <div>
                            <span class="skills__percentage">60%</span>
                        </div>

                        <div class="skills__bar skills__html"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>

                        <div>
                            <span class="skills__percentage">60%</span>
                        </div>

                        <div class="skills__bar skills__css"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>

                        <div>
                            <span class="skills__percentage">35%</span>
                        </div>

                        <div class="skills__bar skills__js"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">UX/UI</span>
                        </div>

                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>

                        <div class="skills__bar skills__ux"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-dev-to skills__icon'></i>
                            <span class="skills__name">PHP</span>
                        </div>

                        <div>
                            <span class="skills__percentage">55%</span>
                        </div>

                        <div class="skills__bar skills__php"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-dev-to skills__icon'></i>
                            <span class="skills__name">MySQL</span>
                        </div>

                        <div>
                            <span class="skills__percentage">55%</span>
                        </div>

                        <div class="skills__bar skills__mysql"></div>
                    </div>

                </div>

                <div>
                    <img src="" alt="" class="skills__img">
                </div>

            </div>
        </section>

        <!-- === WORKS === -->
        <section class="work section" id="work">
            <h2 class="section-title">Works</h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <img src="./assets/img/work-1.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="./assets/img/work-2.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="./assets/img/space.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/undraw_Designer_by46.png" alt="">
                </div>
                <div class="work__img">
                    <img src="./assets/img/Figma design.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="" alt="">
                </div>
            </div>
        </section>

     

        <!-- === CONTACT AREA === -->

      
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact Me</h2>

            <div class="contact__container bd-grid">

                <form action="" method="POST" class="contact__form">

                    <input type="text" name="name" placeholder="Your Name" class="contact__input">
                    <input type="mail" name="email" placeholder="Your Email" class="contact__input">
                    <input type="text" name="mobile" placeholder="Mobile" class="contact__input">

                    <textarea name="message" cols="0" rows="10" class="contact__input" placeholder="Your Message"></textarea>

                    <input type="submit" name="submit" value="Send" class="contact__button button">
                </form>

            </div>
        </section>
    </main>
               
       <!-- javascript is here - javascript  to stop Form Resubmission on Page Refresh -->
          <script type="text/javascript">
          if(window.history.replaceState){
              window.history.replaceState(null, null, window.location.href);
          }
          </script>

    <!-- ====================== SCROLL TOP ===================== -->
    <a href="#" class="scrolltop" id="scrolltop">
        <i class='bx bx-up-arrow-alt  scrolltop__icon'></i>
    </a>

    <!-- === FOOTER AREA === -->
    <footer class="footer">
        <p class="footer__title">Blessing Samuel</p>
        <div class="footer__social">
            <a href="https://facebook.com/blessing.omosehin.3" class="footer__icon"><i class='bx bxl-facebook-circle'></i></a>
            <a href="https://instagram.com/dice.thedev" class="footer__icon"><i class='bx bxl-instagram-alt'></i></a>
            <a href="https://www.youtube.com/channel/UCuTLcs8-cfr6WJ2O8BICJEA" class="footer__icon"><i class='bx bxl-youtube'></i></a>
            <a href="https://twitter.com/dice.thedev" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>

        <p>&#169 2021 Dice the Developer</p>
    </footer>

    <!-- === SCROLL REVEAL === -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- === MAIN JS === -->
    <script src="assets/JS/main.js"></script>
</body>

</html>
