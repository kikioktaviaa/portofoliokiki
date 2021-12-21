<?php
    include_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

        <!-- IKON -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <title> PORTOFOLIO WEBSITE </title>
    </head>
    <body>
        <!-- HEADER -->
        <header class="header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav-logo"> Kiki Oktavia </a>
                </div>

                <div class="nav-bar" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#home" class="nav__link active"> Home </a></li>
                        <li class="nav-item"><a href="#about" class="nav__link"> About </a></li>
                        <li class="nav-item"><a href="#skills" class="nav__link"> Skills </a></li>
                        <li class="nav-item"><a href="#portofolio" class="nav__link"> Portofolio </a></li>
                        <li class="nav-item"><a href="#contact" class="nav__link"> Contact </a></li>
                    </ul>
                </div>

                <div class="nav-toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!-- HOME -->
            <section class="home bd-grid" id="home">
                <div class="home-display">
                    <h1 class="home-title"> Hi, <br> I'am <span class="home-title-color"> Kiki </span></h1>
                    <br> 
                </div>
                    <a href="#contact" class="button">Contact Me</a>
                </div>

                <div class="home-img">    
                    <img src="header.png" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about-section " id="about">
                <h2 class="section-title"> About </h2>

                <div class="about-container bd-grid">
                    <div class="about-img">
                        <img src="aboutme.png" alt="">
                    </div>
                    
                    <div>
                        <h1 class="about-subtitle"> My Name is Kiki Oktavia </h1>
                        <p class="about-text"> I'm a Mathematics student who are active in participating in organizational/social activities such as volunteers, internship, and competitions. I always challenge myself to be better and do better. </p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills-section" id="skills">
                <h2 class="section-title"> Skills </h2>

                <div class="skills-container bd-grid">          
                    <div>
                        <h2 class="skills-subtitle"> My Skills </h2>
                        <div class="skills-data">
                            <div class="skills-names">
                                <i class='bx bxs-palette skills-icon'></i>
                                <span class="skills-name"> Design </span>
                            </div>
                            <div class="skills-bar skills-ds">

                            </div>
                            <div>
                                <span class="skills-percentage"> 85% </span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-names">
                                <i class='bx bxs-message-square-detail skills-icon'></i>
                                <span class="skills-name"> Writing </span>
                            </div>
                            <div class="skills-bar skills-wr">
                                
                            </div>
                            <div>
                                <span class="skills-percentage"> 90% </span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-names">
                                <i class='bx bx-library skills-icon' ></i>
                                <span class="skills-name"> Research </span>
                            </div>
                            <div class="skills-bar skills-rs">
                                
                            </div>
                            <div>
                                <span class="skills-percentage"> 85% </span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-names">
                                <i class='bx bxs-message-rounded-detail skills-icon'></i>
                                <span class="skills-name"> English </span>
                            </div>
                            <div class="skills-bar skills-eng">
                                
                            </div>
                            <div>
                                <span class="skills-percentage"> 80% </span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="skillku.png" alt="" class="skills-img">
                    </div>
                </div>
            </section>

            <!--===== PORTOFOLIO =====-->
            <section class="portofolio-section" id="portofolio">
                <h2 class="section-title"> Portofolio </h2>

                <div class="portofolio-container bd-grid">
                    <div class="portofolio-img">
                        <img src="portofolio1.png" alt="">
                    </div>
                    <div class="portofolio-img">
                        <img src="portofolio2.png" alt="">
                    </div>
                    <div class="portofolio-img">
                        <img src="portofolio3.png" alt="">
                    </div>
                    <div class="portofolio-img">
                        <img src="portofolio4.png" alt="">
                    </div>
                    <div class="portofolio-img">
                        <img src="portofolio5.png" alt="">
                    </div>
                    <div class="portofolio-img">
                        <img src="portofolio6.png" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact-section" id="contact">
                <h2 class="section-title"> Contact </h2>

                <div class="contact-container bd-grid">
                    <form method="post" action="contact.php" class="contact-form">
                        <input type="text" id="name" name="name" placeholder="Name" class="contact-input">
                        <input type="mail" id="email" name="email" placeholder="Email" class="contact-input">
                        <textarea type="text" id="message" name="message" placeholder="Message" id="" cols="0" rows="10" class="contact-input"></textarea>
                        <input type="submit" value="Send" class="contact-button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer-title"> Kiki Oktavia </p>
            <br>
            <div class="footer-socmed">
                <a href="https://www.linkedin.com/in/kikioktavia/" class="footer-icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://www.instagram.com/kiki.ok_/" class="footer-icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://kiii.medium.com/" class="footer-icon"><i class='bx bxl-medium' ></i></a>
                <br>
                <p>&#169; 2021 copyright all right reserved</p>
            </div>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="main.js"></script>
    </body>
</html>