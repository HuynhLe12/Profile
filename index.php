<!DOCTYPE html>
<html lang-"en">
<head>
    <meta charset-"UTF-8">
    <meta http-equiv-"X-UA-Compatible" content-"IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <link href="style.css" rel='stylesheet' type='text/css' />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.
min.css">
    <link rel="stylesheet" href="style.css" />
    <title>My Profile</title>
</head>
<body>
    <header>
 
        <nav class="nav" id="nav-menu">
            <ion-icon name="close-outline" class="header_close" id="close-menu"></ion-icon>
            <ul class="nav_list">
                <li class="nav_item"><img src="HappyNewyear.jpg" alt=""></li>
                <li class="nav_item"><a href="#about" class="nav_link">About me</a></li>
                <li class="nav_item"><a href="#skill" class="nav_link">Skills</a></li>
                <li class="nav_item"><a href="#education" class="nav_link">Education</a></li>
                <li class="nav_item"><a href="#contact" class="nav_link">Contact</a></li>
            </ul>
        </nav>
        <ion-icon name="menu-outline" class="header_toggle" id="toggle-menu"></ion-icon>
    </header>
    
    <section>
        <div class="slide">
            <div class="intro">
                <span class="hello">Hello, my name is</span> </br>
                <span class="name">Huynh</span></br>
                <span class="socials">
                    <a href="https://www.facebook.com/profile.php?id=100047943883548"><i class="card-icon-slide fb fa fa-facebook"></i></a>
                </span>
                <span class="socials">
                    <a href="https://github.com/HuynhLe12"><i class="card-icon-slide gh fa fa-github"></i></a>
                </span>
            </div>
             
            <img src="images/slide.jpg"  >
        </div>
    </section>

    <section style="height: fit-content;">
        <div class="about" id="about">
            <div class="wrap">
                <div class="title">
                    ABOUT ME
                 </div>
                  
                 <div class="content-about">

                    <div class="blog-slider">
                      <div class="blog-slider__wrp">
                        <div class="blog-slider__item">
                          <div class="blog-slider__img">
                            <img src="https://images.unsplash.com/photo-1569124589354-615739ae007b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
                          </div>
                          <div class="blog-slider__content">
                            <div class="blog-slider__title">Summary</div>
                            <div class="blog-slider__text">My name is Le Cong Huynh. I am currently studying information technology transfer at the University of Greenwich. My goal is to become a full-stack developer. I like to learn new things to improve my understanding and bring the highest efficiency to my life and work. I don't have experience in real-world projects at the enterprise, but I have a basic knowledge of programming. Moreover, I also built some websites during my studies at the University of Greenwich. Communication skills, teamwork, and information-seeking skills are skills that I have been trained in since I was at university. They are also one of the skills I had to use a lot during my studies. Swimming or reading stories in a quiet place is my favorite thing to do at the end. They bring me peace of mind and peace of mind. </br>
                            It is me. Thanks for reading.</br>
                            </div>        
                          </div>
                        </div>
                      </div>
                    </div>

                 </div>
            </div>
        </div>
    </section>

    <section>
        <div class="skill" id="skill">
            <div class="wrap-skill">
                <div class="title-skill">
                    SKILLS
                 </div>
                  
                 <div class="content-skill">
                    <div class="container">
                        <div class="card">
                            <div class="box">
                                 <div class="content">
                                   <h2>01</h2>
                                   <h3>PROGRAMMING LANGUAGE</h3>
                                    <ul class="skill-detail a">
                                        <li class="skill-item">Php</li>
                                        <li class="skill-item">C#</li>
                                        <li class="skill-item">Javascript</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                 <div class="content">
                                   <h2>02</h2>
                                   <h3>FRAMEWORKS</h3>
                                    <ul class="skill-detail b">
                                        <li class="skill-item">Laravel</li>
                                        <li class="skill-item">ASP.NET MVC</li>
                                        <li class="skill-item">NodeJS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                 <div class="content">
                                   <h2>03</h2>
                                   <h3>DATABASE</h3>
                                    <ul class="skill-detail c">
                                        <li class="skill-item">Microsoft SQL Server</li>
                                        <li class="skill-item">MySQL</li>
                                        <li class="skill-item">PostgreSQL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        
    </section>

    <section>
        <div class="education" id="education">
            <div class="wrap-education">
                <div class="title-education">
                    EDUCATION
                 </div>
                  
                 <div class="content-education">
                     <div class="blog-slider-edu">
                      <div class="blog-slider__wrp-edu">
                        <div class="blog-slider__item-edu">
                          <div class="blog-slider__img-edu">
                            <img src="images/logo.jpg" alt="">
                          </div>
                          <div class="blog-slider__content-edu">
                            <div class="blog-slider__title-edu">UNIVERSITY of GREENWICH</div>
                            <div class="blog-slider__text-edu">Major: IT</div> 
                            <div class="blog-slider__text-edu">07/2019 - 05/2023</div>        
                          </div>
                        </div>
                      </div>
                    </div>

                 </div>
            </div>
        </div>
        
    </section>

    <section>
        <div class="contact" id="contact">
            <div class="wrap-contact">
                <div class="title-contact">
                    CONTACT ME
                 </div>
                  
                 <div class="content-contact">
                    <div class="contact-info">
                      <div class="card-contact">
                        <i class="card-icon far fa-envelope"></i>
                        <p>conghuynh9c@gmail.com</p>
                      </div>

                      <div class="card-contact">
                        <i class="card-icon fas fa-phone"></i>
                        <p>+84945565714</p>
                      </div>

                      <div class="card-contact">
                        <i class="card-icon fas fa-map-marker-alt"></i>
                        <p>Tan Phu, Ho Chi Minh City</p>
                      </div>
                    </div>
                 </div>
            </div>
        </div>
        
    </section>

 
    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
</body>
</html>