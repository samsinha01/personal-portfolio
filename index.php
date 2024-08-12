<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal Portfolio</title>

        <!-----------------font-awsome-link----------------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!------------------AOS Link--------------------->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!---------------------bootstrap-link------------------->
        <link rel="stylesheet" href="css/bootstrap5.css">

        <!----------------self-inserted-links-------------->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/cus-bootstrap.css">
    </head>
    <body class="bg-secondary">
        <nav class="p-5 mb-5 mt-5"></nav>
        <main>
            <article class="mb-5 position-relative" >
                <!---------------------background-cursor-animation-js------------------->
                <div id="particles-js" class="position-absolute zoom-in-element"></div>
                
                <div id="front_view"></div>
                <section id="home" class="position-relative">
                    <p class="zoom-in-element">PERSONAL</p>
                    <P class="zoom-in-element">RESUME</P>

                    <div class="dis-flex justify-center position-relative front-view">
                        <div class="my-name zoom-in-element">
                            <h3>My Self, <br><span class="text-yellow">Sameer Sinha</span></h3>
                        </div>
                        
                        <!-----------------------------Personal-Image---------------------------->
                        <div class="personal-img w-100 position-relative zoom-in-element">
                            <img src="img/edit img1.jpeg" alt="personal-img" width="100%" height="100%">
                        </div>

                        <div class="my-profession text-white zoom-in-element">
                            <h3>I am a <br><span class="text-yellow font-cursive">Developer</span></h3>
                        </div>
                    </div>

                    <div class="my-desc zoom-in-element">
                        <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum excepturi architecto, soluta totam eligendi pariatur. Corrupti harum, expedita quasi dolore, doloremque voluptatum quaerat.</p>
                        <div class="cv_btn mt-3">
                            <a href="/img/SameerSinhaResume.pdf" download>Download CV</a>
                        </div>

                        <div class="sm-btn-div mt-4 dis-flex justify-sp-even">
                            <button class="sm-btn">
                                <span class="svgContainer">
                                    <a href="https://github.com/samsinha01" target="_blank">
                                        <svg fill="white" viewBox="0 0 496 512" height="1.6em"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                                    </a>
                                </span>
                                <span class="BG github"></span>
                            </button>

                            <button class="sm-btn">
                                <span class="svgContainer">
                                    <a href="www.linkedin.com/in/sameer-sinha-546b4a280" target="_blank">
                                        <svg viewBox="0 0 448 512" height="1.6em" xmlns="http://www.w3.org/2000/svg" class="svgIcon" fill="white">
                                            <path
                                                d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"
                                            ></path>
                                        </svg>
                                    </a>
                                </span>
                                <span class="BG linkedin"></span>
                            </button>

                            <button class="sm-btn">
                                <span class="svgContainer">

                                    <a href="https://api.whatsapp.com/send?phone=919770661844&text=Hi, I am visiting your website and I want to develop website ">
                                        <svg viewBox="0 0 448 512" fill="white" height="1.6em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                            </path>
                                        </svg>
                                    </a>
                                </span>
                                <span class="BG wtsap"></span>
                            </button>
                            
                        </div>
                    </div>

                        
                    <div class="text-center mt-3 goto-btn zoom-in-element">
                        <a href="#goto">
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </div>
                    
                </section>
                <!--------------------about-section------------------>
                <section class="about" id="goto">   <!-----------------add id="goto"----------------->
                    <div class="container">
                        <div class="inner-about">
                            <div id="sec-heading" class="text-center m-5">
                                <h2 class="m-0">About</h2>
                                <p class="m-0">About</p>
                            </div>

                            <div class="about-row">
                                <div class="about-aside">
                                    <div class="tech-card position-relative m-2" data-aos="zoom-in-down">
                                        <p class="p-2 pt-4 pb-4">HTML</p>
                                    </div>
                                    <div class="tech-card position-relative m-2" data-aos="zoom-in-down">
                                        <p class="p-4">CSS</p>
                                    </div>
                                    <div class="tech-card position-relative m-2" data-aos="zoom-in-up">
                                        <p class="p-4">JS</p>
                                    </div>
                                    <div class="tech-card position-relative m-2" data-aos="zoom-in-up">
                                        <p class="p-4">PHP</p>
                                    </div>
                                </div>

                                <div class="about-bside" data-aos="zoom-in">
                                    <p class="text-gray">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias veniam earum minus, culpa ducimus aliquid rerum eveniet debitis tenetur exercitationem officia quidem asperiores architecto, enim sit ut voluptatibus laudantium soluta!</p>

                                    <!-- ----------------Personal-details-side---------------- -->
                                    <div class="personal-detail">
                                        <table>
                                            <tbody class="text-white">
                                                <tr class="dot-border-top">
                                                    <td><Strong>Name <t/>:</Strong></td>
                                                    <td class="text-gray">Sameer Sinha</td>
                                                </tr>
                                                <tr class="dot-border-top">
                                                    <td><Strong>Age <t/>:</Strong></td>
                                                    <td class="text-gray">20</td>
                                                </tr>
                                                <tr class="dot-border-top">
                                                    <td><Strong>Language <t/>:</Strong></td>
                                                    <td class="text-gray">English, Hindi</td>
                                                </tr>
                                                <tr class="dot-border-top">
                                                    <td><Strong>Phone No <t/>:</Strong></td>
                                                    <td class="text-gray">+91 9770661844</td>
                                                </tr>
                                                <tr class="dot-border-top ">
                                                    <td><strong>Email <t/>:</strong></td>
                                                    <td class="text-gray">anuragsinha.20411@gmail.com</td>
                                                </tr>
                                                <tr class="dot-border-top">
                                                    <td><strong>Address <t/>:</strong></td>
                                                    <td class="text-gray">Mahrana Pratap dist.-Bilaspur,Chhattishgarh</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="my_resume">
                    <div class="container">
                        <div class="inner-resume">
                            <div id="sec-heading" class="text-center m-5" data-aos="zoom-in">
                                <h2 class="m-0">Achievements</h2>
                                <p class="m-0 text-white">My <span class="text-yellow">Resume</span></p>
                            </div>

                            <div class="resume-row row">
                                <div class="resume-aside col-lg-6">
                                    <h3 class="text-center text-white" data-aos="zoom-in">Education</h3>

                                    <div class="resume-block">

                                        <div class="resume-card p-3 pt-4 mt-5 position-relative" data-aos="zoom-in">
                                            <h4 class="text-yellow">12th Science (maths)  <span class="text-gray">- First Division</span></h4>
                                            <p class="text-gray">>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, eligendi labore repellendus repudiandae aliquam quos?</p>

                                            <p class="resume-card-heading text-gray bg-primary">2019 - 2020</p>
                                        </div>

                                        <div class="resume-card p-3 pt-4 mt-5 position-relative" data-aos="zoom-in">
                                            <h4 class="text-yellow">Bachelor of Graduation <span class="text-gray">- First Division</span></h4>
                                            <p class="text-gray">>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, eligendi labore repellendus repudiandae aliquam quos?</p>

                                            <p class="resume-card-heading text-gray bg-primary">2020 - 2023</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="resume-bside col-lg-6">
                                    <h3 class="text-center text-white" data-aos="zoom-in">Experience</h3>

                                    <div class="resume-block">
                                        
                                        <div class="resume-card p-3 pt-4 mt-5 position-relative" data-aos="zoom-in">
                                            <h4 class="text-yellow">12th Science (maths)  <span class="text-gray">- First Division</span></h4>
                                            <p class="text-gray">>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, eligendi labore repellendus repudiandae aliquam quos?</p>

                                            <p class="resume-card-heading text-gray bg-primary">JUNE 15, 2019 - 2020</p>
                                        </div>

                                        <div class="resume-card p-3 pt-4 mt-5 position-relative" data-aos="zoom-in">
                                            <h4 class="text-yellow">12th Science (maths)  <span class="text-gray">- First Division</span></h4>
                                            <p class="text-gray">>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, eligendi labore repellendus repudiandae aliquam quos?</p>

                                            <p class="resume-card-heading text-gray bg-primary">JUNE 15, 2019 - 2020</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!---------------------------my=projects-img----------------------->
                <section id="project">
                    <div class="container">
                        <div class="inner-project">
                            <div id="sec-heading" class="text-center m-5" data-aos="zoom-in">
                                <h2 class="m-0">Portfolio</h2>
                                <p class="m-0 text-white">My <span class="text-yellow">Project</span></p>
                            </div>
                        </div>

                        <div class="project-row dis-flex flex-wrap" id="project_row">
                            
                        </div>
                    </div>
                </section>
                
                <!----------------------Contact-Us-Section-------------------->
                <section id="contact">
                    <div class="container">
                        <div class="inner-contact">
                            <div id="sec-heading" class="text-center m-5" data-aos="zoom-in">
                                <h2 class="m-0">CONTACT</h2>
                                <p class="m-0 text-white">Get in <span class="text-yellow">Touch</span></p>
                            </div>

                            <div class="row">
                                <div class="contact-aside col-md-6">
                                    <h2 class="text-white font-serif">CONTACT</h2>
                                    <p class="text-gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. A enim nulla magni neque blanditiis error, at atque quam, eaque fuga accusamus delectus distinctio vel. Maiores ullam molestias hic esse nihil.</p>
                                    
                                    <div>
                                        <h4 class="text-white font-serif m-0">Address</h4>
                                        <p class="text-gray">Bilaspur, Chhattishgarh</p>
                                    </div>

                                    <div>
                                        <h4 class="text-white font-serif m-0">Phone</h4>
                                        <p class="text-gray">+91 9770661844</p>
                                    </div>

                                    <div>
                                        <h4 class="text-white font-serif m-0">E-mail</h4>
                                        <p class="text-gray">anuragsinha.20411@gmail.com</p>
                                    </div>
                                    <div class="sm-btn-div mt-4 dis-flex justify-sp-even">
                                        
                                        <button class="sm-btn">
                                            <span class="svgContainer">
                                                <a href="https://github.com/samsinha01" target="_blank">
                                                    <svg fill="white" viewBox="0 0 496 512" height="1.6em"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                                                </a>
                                            </span>
                                            <span class="BG github"></span>
                                        </button>

                                        <button class="sm-btn">
                                            <span class="svgContainer">
                                                <a href="www.linkedin.com/in/sameer-sinha-546b4a280" target="_blank">
                                                    <svg viewBox="0 0 448 512" height="1.6em" xmlns="http://www.w3.org/2000/svg" class="svgIcon" fill="white">
                                                        <path
                                                            d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"
                                                        ></path>
                                                    </svg>
                                                </a>
                                            </span>
                                            <span class="BG linkedin"></span>
                                        </button>

                                        <button class="sm-btn">
                                            <span class="svgContainer">
                                                <a href="https://api.whatsapp.com/send?phone=919770661844&text=Hi, I am visiting your website and I want to develop website ">
                                                    <svg viewBox="0 0 448 512" fill="white" height="1.6em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </span>
                                            <span class="BG wtsap"></span>
                                        </button>
                                        
                                    </div>
                                </div>

                                <div class="contact-bside col-md-6">
                                    <h2 class="text-center text-white font-serif">CONTACT FORM</h2>

                                    <div class="contact-inputs">
                                        <input type="text" placeholder="Enter Name" id="name">
                                    </div>

                                    <div class="contact-inputs">
                                        <input type="email" placeholder="Enter Email" id="email">
                                    </div>

                                    <div class="contact-inputs">
                                        <textarea name="message" placeholder="enter Message" id="message"></textarea>
                                    </div>

                                    <div class="contact-btn">
                                        <button onclick="goToWhatsapp()">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </article>
        </main>

        <script src="js/main.js"></script>
        <script src="js/particles.js"></script>
        <script src="js/app.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>