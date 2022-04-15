<div class="container mx-auto myContainer" id="smProjects">
    <h1 class="mb-5 head-anim">Projects</h1>

    <div class="myContent">
        <p class="col-md-10 myHeader5">
            Check out some of my private projects as well as some group works from university.
        </p>

        <div class="pj_container row justify-content-between">

            <div class="pj_wrapper col-xl-4" id="pj1" data-bs-toggle="modal" data-bs-target="#modalPJ1">
                <img src="../img/blender/cover.png">
                <div class="pj_desc" id="desc1">
                    <h3>My 3D Projects</h3>
                    <p>A collection of smaller projects.</p>
                </div>
            </div>

            <div class="pj_wrapper col-xl-7" id="pj2" data-bs-toggle="modal" data-bs-target="#modalPJ2">
                <img src="../img/render1.png">
                <div class="pj_desc" id="desc2">
                    <h3>Blender Rainy Night</h3>
                    <p>Realistic night scene created in Blender 3.0</p>
                </div>
            </div>

            <div class="pj_wrapper col-xl-12" id="pj3" data-bs-toggle="modal" data-bs-target="#modalPJ3">
                <img src="../img/squadUP/cover.png">
                <div class="pj_desc" id="desc3">
                    <h3>Website Study Project</h3>
                    <p>In this study work, we created as a group an imaginary company with fitting coorporate design and homepage.</p>
                </div>
            </div>

            <div class="pj_wrapper col-xl-5" id="pj4" data-bs-toggle="modal" data-bs-target="#modalPJ4">
                <img src="../img/poc/title.png">
                <div class="pj_desc" id="desc4">
                    <h3>JavaFx Study Project</h3>
                    <p>Vending Machine Interface with Java FXML</p>
                </div>
            </div>

            <div class="pj_wrapper col-xl-6" id="pj5" data-bs-toggle="modal" data-bs-target="#modalPJ5">
                <img src="../img/dvl.png">
                <div class="pj_desc" id="desc5">
                    <h3>OpenGL Study Project</h3>
                    <p>A videogame based on image processing</p>
                </div>
            </div>

        </div>
    </div>

    <div class="inside-modal">
        <img src="" alt="" class="full-img" />
        <p class="img-caption"></p>
    </div>

    <!-- Modal PJ1 -->
    <div class="modal fade" id="modalPJ1" tabindex="-1" aria-labelledby="labelModalPJ1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="labelModalPJ1">My 3D Projects</h5>
                    <button type="button" class="miniBtn" data-bs-dismiss="modal" aria-label="Close">&#9932;</button>
                </div>
                <div class="pj_menu">
                    <ul>
                        <li><a href="#blndr-spacy">Blender Spaceship</a></li>
                        <li><a href="#blndr-name">Blender Name Animation</a></li>
                        <li><a href="#blndr-can">Blender Can Advertisment</a></li>
                        <li><a href="#models">Various Models</a></li>
                    </ul>
                </div>
                <div class="modal-body">

                    <div class="mySpacer64"></div>
                    <h4 class="pj_subheader" id="blndr-spacy">Blender Spaceship</h4>
                    My st recent work with Blender was creating the intro for my portfolio website. From the beginning I really wanted an effect were something
                    'flies into the viewer'. I really like the space vibe so I thought a spaceship would be fitting. After struggling with the implementation with
                    javascript and gsap I nearly gave up and this awesome project would have almost not be on here. But after lots of research and tweeking I
                    finally got the image sequence working and the final outcome is very satisfying. I also think that is easy to see my progress in 3D modelling/rendering.

                    <div class="mySpacer64"></div>

                    <div class="gallery">
                        <div class="img-container">
                            <img src="../img/blender/spacy1.png" alt="Blender Scene of the Intro" data-original="../img/blender/spacy1.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/spacy2.png" alt="Spaceship Model isolated" data-original="../img/blender/spacy2.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/spacy3.png" alt="Exploding Planet" data-original="../img/blender/spacy3.png">
                        </div>
                    </div>

                    <div class="mySpacer128"></div>

                    <h4 class="pj_subheader" id="blndr-name">Blender Name Animation</h4>
                    With this simple short video I started animating in Blender. I am still relativly new to Blender and initialy made this for this portfolio
                    Website of mine (but it did not make it). I played around with the Keyframes to flip the Lights on and off and rotate the Cube around itself. This helped me a lot
                    to understand animating with Blender. In the future I wanna work more with animations and explore more different mechanics that Blender
                    has to offer.

                    <div class="mySpacer64"></div>

                    <div class="row justify-content-center">
                        <div class="pj_video_container">
                            <video class="pj_video" src="img/blender/JulzLoopV2.mp4" type="video/mp4" loop muted>
                                Your browser does not support the video tag.
                            </video>
                            <div class="playpause"></div>
                        </div>
                    </div>

                    <div class="mySpacer64"></div>

                    <div class="gallery">
                        <div class="img-container">
                            <img src="../img/blender/pj1_2.png" alt="Blender Scene of the Cube" data-original="../img/blender/pj1_2.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/pj1_1.png" alt="Differnet View of the Scene" data-original="../img/blender/pj1_1.png">
                        </div>
                    </div>

                    <div class="mySpacer128"></div>

                    <h4 class="pj_subheader" id="blndr-can">Blender Can Advertisment</h4>
                    After some first experiments with animation I wanted to take the next step so I tried to make a snippet of an advertisment, where water
                    flows around some obstacles and splashes against a soda can.

                    <div class="mySpacer64"></div>

                    <div class="gallery">
                        <div class="img-container">
                            <img src="../img/blender/placeholder.png" alt="placeholder" data-original="../img/blender/placeholder.png">
                        </div>

                        <div class="img-container">
                            <img src="../img/blender/placeholder.png" alt="placeholder" data-original="../img/blender/placeholder.png">
                        </div>
                    </div>

                    <div class="mySpacer128"></div>

                    <h4 class="pj_subheader" id="models">Various Models</h4>
                    The following images will show you a few personal models that I created, as well as 3D project from university where
                    we used softwares like Autodesk Maya, Autodesk Solidworks and Autodesk Alias.

                    <div class="mySpacer64"></div>

                    <p class="myHeader5">Maya Project: Diorama</p>
                    In my first semester in university we had 3D Modelling and got the task to create a <dfn title="a model representing a scene with three-dimensional figures, 
                either in miniature or as a large-scale museum exhibit.">Diorama</dfn>. There was not any more information given, so we had creative freedom.
                    I wanted to make a city intersection with a beach on the other side. I wanted to give it that 80's Miami vibe. It was my first real experience with
                    3D modelling so I was very happy with my results.

                    <div class="mySpacer64"></div>

                    <div class="gallery">
                        <div class="img-container">
                            <img src="../img/blender/diorama1.png" alt="Diorama Rendering with Maya Arnold" data-original="../img/blender/diorama1.png">
                        </div>

                        <div class="img-container">
                            <img src="../img/blender/diorama2.png" alt="Different Angle of the Diorama" data-original="../img/blender/diorama2.png">
                        </div>
                    </div>

                    <div class="mySpacer64"></div>

                    <p class="myHeader5">Solidworks Project: Pencil Sharpener</p>
                    In the following semester we worked with the CAD tool Solidworks and our task was to build a realistic pencil sharpener.
                    As a group we decided to go a little bit creative and went for a hourglass design and the results are very impressing.

                    <div class="mySpacer64"></div>

                    <div class="gallery">
                        <div class="img-container">
                            <img src="../img/blender/sharpy1.jpeg" alt="Rendering of the pencil Sharpener" data-original="../img/blender/sharpy1.jpeg">
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/sharpy2.jpg" alt="Isolation of sharpening tool" data-original="../img/blender/sharpy2.jpg">
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/sharpy3.jpg" alt="Top View of the pencil Sharpener" data-original="../img/blender/sharpy3.jpg" />
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/sharpy4.jpg" alt="Technical Drawing" data-original="../img/blender/sharpy4.jpg" />
                        </div>
                    </div>

                    <div class="mySpacer64"></div>

                    <p class="myHeader5">Alias Project: Household Appliance</p>
                    Last semester we had another subject in CAD. This time it was more <dfn title="a mathematical model used in computer graphics for generating and 
                representing curves and surfaces">nurbs</dfn> orientated so it got more tricky. The first two images are results from an exciting product and
                    the following a concept of mine for a vacuum cleaner.

                    <div class="mySpacer64"></div>

                    <div class="gallery">
                        <div class="img-container">
                            <img src="../img/blender/blenderRender1.jpg" alt="A Blender created in Alias (standing)" data-original="../img/blender/blenderRender1.jpg">
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/blenderRender2.jpg" alt="A Blender created in Alias (laying)" data-original="../img/blender/blenderRender2.jpg">
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/vacuumRender1.jpg" alt="A Vacuum Cleaner created in Alias" data-original="../img/blender/vacuumRender1.jpg" />
                        </div>
                        <div class="img-container">
                            <img src="../img/blender/vacuumRender2.png" alt="A Vacuum Cleaner created in Alias with Accessories" data-original="../img/blender/vacuumRender2.png" />
                        </div>
                    </div>

                    <div class="mySpacer64"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PJ2 -->
    <div class="modal fade" id="modalPJ2" tabindex="-1" aria-labelledby="labelModalPJ2" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="labelModalPJ2">Blender Rainy Night</h5>
                    <button type="button" class="miniBtn" data-bs-dismiss="modal" aria-label="Close">&#9932;</button>
                </div>
                <div class="modal-body">
                    With this scene I had the vision of a rainy night scene somewhere in Japan. I added rain, plants, neon lights,
                    street lights and traffic lights to bring life into the scene in which mainly different shaped houses are.
                    With the help of some paddles and Windows a ton of reflections accured. I also added a weak fog for more realistic
                    lighting. <br><br>
                    However, all these lights presented a major challenge: I still wanted to create a 10-second animation in the
                    shortest possible render time. I had to reach the sweet spot between the sample rate and the denoising, so that a total
                    of 240 images were completed as quickly as possible. I also learned a lot about modelling in general, materials with all there components
                    and what render settings are really the most important. <br><br>
                    This was by far my most time consuming blender project but it was worth every minute. I enjoyed it alot and I hope the results can speak
                    for themselves:

                    <div class="mySpacer64"></div>

                    <div class="row justify-content-center">
                        <div class="pj_video_container">
                            <video class="pj_video" src="img/24frameV3.mp4" type="video/mp4" loop muted>
                                Your browser does not support the video tag.
                            </video>
                            <div class="playpause"></div>
                        </div>
                    </div>

                    <div class="mySpacer64"></div>

                    <div class="gallery" id="g2">
                        <div class="img-container">
                            <img src="../img/pj2_1.png" alt="Blender Scene of the rainy night" data-original="../img/pj2_1.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/pj2_2.png" alt="Blender Scene of the rainy night" data-original="../img/pj2_2.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/pj2_3.png" alt="Blender Scene of the rainy night" data-original="../img/pj2_3.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/pj2_4.png" alt="Blender Scene of the rainy night" data-original="../img/pj2_4.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/pj2_5.png" alt="Blender Scene of the rainy night" data-original="../img/pj2_5.png">
                        </div>
                    </div>

                    <div class="mySpacer64"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PJ3 -->
    <div class="modal fade" id="modalPJ3" tabindex="-1" aria-labelledby="labelModalPJ3" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="labelModalPJ3">Website Study Project</h5>
                    <button type="button" class="miniBtn" data-bs-dismiss="modal" aria-label="Close">&#9932;</button>
                </div>
                <div class="pj_menu">
                    <ul>
                        <li><a href="#proto">Prototyping</a></li>
                        <li><a href="#logo">Logo</a></li>
                        <li><a href="#impl">Implementation</a></li>
                        <li><a href="#rslt">Result</a></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="pj3_content">
                        <div class="pj3_proto" id="proto">
                            <div class="mySpacer64"></div>
                            <h4 class="pj_subheader">Prototyping</h4>
                            <p>The first steps were to gather some design criterias, so we know in which direction we wanted to go with
                                the project. We came up with squadUP, an App for freetime teambuilding for all kinds of sports.
                                So that if you would like to play for example football, but you don't have any people to play with,
                                it's still possible to find team mates to meet up.
                                <br>
                            </p>

                            <p><br>Then we thought about key features, as well as the health aspects our product gives. It can boost your physical
                                health, because of more motivation through team mates and bonuses given by squadUP for using the app. But it
                                can also help the mental health for people that are for example to shy to just go the sport court and connect
                                with people via an app.<br></p>

                            <p><br>We then created a moodboard, to visualize colors, forms, images and fonts to get an even better idea of our vision.
                                Along the work we made different tweeks to colors and fonts, but the basics of the moodboard helped a lot through
                                the project.<br></p>

                            <div class="mySpacer64"></div>

                            <div class="gallery">
                                <div class="img-container">
                                    <img src="../img/squadUP/proto1.png" alt="squadUP Moodboard" data-original="../img/squadUP/proto1.png">
                                </div>
                            </div>

                            <div class="mySpacer64"></div>

                            <p><br>Another significant step of prototyping was the creation of our Persona. Our ideal user so to say. This was also a
                                lot of fun to do.<br></p>

                            <div class="mySpacer64"></div>

                            <div class="gallery">
                                <div class="img-container">
                                    <img src="../img/squadUP/proto2.png" alt="squadUP Persona" data-original="../img/squadUP/proto2.png">
                                </div>
                            </div>

                            <div class="mySpacer64"></div>

                            <p><br>The final part of creating the prototyp was making Wireframes and Gridlayouts to be ready to get to coding.
                                Now had all the infos and templates we needed to get started.</p>
                            </p>

                            <div class="mySpacer64"></div>

                            <div class="gallery">
                                <div class="img-container">
                                    <img src="../img/squadUP/proto3.png" alt="squadUP Wireframe" data-original="../img/squadUP/proto3.png">
                                </div>
                                <div class="img-container">
                                    <img src="../img/squadUP/proto4.png" alt="squadUP Gridlayouit" data-original="../img/squadUP/proto4.png">
                                </div>
                            </div>

                            <div class="mySpacer64"></div>

                        </div>
                        <div class="mySpacer128"></div>

                        <div class="pj3_logo" id="logo">
                            <h4 class="pj_subheader">Logo</h4>
                            <p>The Logo as a very important aspect of every Coorporate identity, so we had a fitting but also easy to remember
                                design for squadUP. We decided to go with a striking arrow that allows replaces the letter 'A' in squad.</p>

                            <div class="mySpacer64"></div>

                            <div class="gallery">
                                <div class="img-container">
                                    <img src="../img/squadUP/logo.png" alt="squadUP Logo" data-original="../img/squadUP/logo.png">
                                </div>
                            </div>

                            <div class="mySpacer64"></div>
                        </div>

                        <div class="mySpacer128"></div>

                        <div class="pj3_impl" id="impl">
                            <h4 class="pj_subheader">Implementation</h4>
                            <p>With all the given design criterias we were now ready to realize. The Website is a one-pager with all the
                                important informations about squadUP. A contact form as well as a register form are accessable via the navigation
                                bar. We did not use any frameworks like React or Angular but vanilla html, css, javascript and php instead. We needed
                                php for login and register validations (so we also needed a database). Therefore we created such in mySQL to save Usernames
                                and hashed Passwords. I implemented most of the php and javascript, as well as the base stylesheets.</p>
                        </div>

                        <div class="mySpacer128"></div>

                        <div class="pj3_rslt" id="rslt">
                            <h4 class="pj_subheader">Result</h4>

                            <div class="gallery" id="g2">
                                <div class="img-container">
                                    <img src="../img/squadUP/sup1.png" alt="squadUP Landing Page" data-original="../img/squadUP/sup1.png">
                                </div>
                                <div class="img-container">
                                    <img src="../img/squadUP/sup2.png" alt="squadUP Part of the Intro" data-original="../img/squadUP/sup2.png">
                                </div>
                                <div class="img-container">
                                    <img src="../img/squadUP/sup3.png" alt="squadUP Event Section" data-original="../img/squadUP/sup3.png">
                                </div>
                                <div class="img-container">
                                    <img src="../img/squadUP/sup4.png" alt="squadUP About Us in Light Mode" data-original="../img/squadUP/sup4.png">
                                </div>
                                <div class="img-container">
                                    <img src="../img/squadUP/sup5.png" alt="squadUP Register Form" data-original="../img/squadUP/sup5.png">
                                </div>
                                <div class="img-container">
                                    <img src="../img/squadUP/sup6.png" alt="squadUP Contact Form" data-original="../img/squadUP/sup6.png">
                                </div>
                            </div>

                            <div class="mySpacer64"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PJ4 -->
    <div class="modal fade" id="modalPJ4" tabindex="-1" aria-labelledby="labelModalPJ4" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="labelModalPJ4">JavaFX Study Project</h5>
                    <button type="button" class="miniBtn" data-bs-dismiss="modal" aria-label="Close">&#9932;</button>
                </div>
                <div class="modal-body">
                    <div class="mySpacer64"></div>

                    This study project was all about creating an application with <dfn title="FXML is an XML-based user interface markup language created by Oracle 
                Corporation for defining the user interface of a JavaFX application.">Java FXML</dfn> and a mySQL database. We worked in a group of four
                    and decided to build a vending machine interface where you can navigate through a wide variety of different delicious baked goods and drinks.
                    Our vision was making bakeries more accessible and faster to shop at. Just a few simple button clicks get you a perfect breakfast.
                    I mainly focused on designing the layout, buttons and the app structure. I worked a lot with a scene builder to position and style the components correctly.

                    <div class="mySpacer64"></div>

                    <p>Disclaimer: This project was made at a german university. Therefore all the texts are german.</p>

                    <div class="gallery" id="g2">
                        <div class="img-container">
                            <img src="../img/poc/poc1.png" alt="This is the Piece of Cake start screen." data-original="../img/poc/poc1.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/poc/poc2.png" alt="All available food and drink categories." data-original="../img/poc/poc2.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/poc/poc3.png" alt="Detailed view of a selected caterory." data-original="../img/poc/poc3.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/poc/poc4.png" alt="Search option made with own written algorithm." data-original="../img/poc/poc4.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/poc/poc5.png" alt="Shopping cart window." data-original="../img/poc/poc5.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/poc/poc7.png" alt="Exit screen with best wishes." data-original="../img/poc/poc7.png">
                        </div>
                    </div>

                    <div class="mySpacer64"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PJ5 -->
    <div class="modal fade" id="modalPJ5" tabindex="-1" aria-labelledby="labelModalPJ5" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="labelModalPJ5">OpenGL Study Project</h5>
                    <button type="button" class="miniBtn" data-bs-dismiss="modal" aria-label="Close">&#9932;</button>
                </div>
                <div class="modal-body">
                    <div class="mySpacer64"></div>
                    For this Project we worked with Java and <dfn title="OpenGL is a cross-language, multi-platform API for rendering 2D and 3D computer graphics.">OpenGL</dfn>.
                    The task was to create an application where you utilize image processing
                    and 3D technology. We wanted to expand our knowledge and went a little bit overboard by implementing a game called 'Das
                    Verrückte Labyrinth' (translted to 'the haunted maze') that allows you to navigate with your hands through a haunted maze by
                    pointing in the direction where you want to go. The player walks from checkpoint to checkpoint and chooses his next path at intersections.
                    For playing the game a camera is highly recommended but not necessary because we also made buttons with the same functionality.
                    We worked in a group of three and my main tasks were designing the layout, generating 3D objects and implementing them into our scene,
                    building different algorithms, fine tuning the code and making audio clips for the narrator. Yes, the game has a crazy narrator that follows
                    you around and hits you with different voice prompts at every intersection to give the game an even scarier vibe.

                    <div class="mySpacer64"></div>

                    <p>Disclaimer: This project was made at a german university. Therefore all the texts are german.</p>

                    <div class="gallery" id="g2">
                        <div class="img-container">
                            <img src="../img/dvl/dvl1.png" alt="This is the main menu of 'Das verrückte Labyrinth'." data-original="../img/dvl/dvl1.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/dvl/dvl2.png" alt="Here you can see me playing the game. This is the camera panel that shows where the hands have to be placed." data-original="../img/dvl/dvl2.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/dvl/dvl3.png" alt="These are some 3D assets I created in Blender." data-original="../img/dvl/dvl3.png">
                        </div>
                        <div class="img-container">
                            <img src="../img/dvl/dvl4.png" alt="The map of the haunted maze." data-original="../img/dvl/dvl4.png">
                        </div>
                    </div>

                    <div class="mySpacer64"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="endTrigger"></div>
</div>