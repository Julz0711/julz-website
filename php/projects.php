<div class="container mx-auto mt-5 mb-5 myContainer" id="smProjects">
    <h1 class="mb-5">Projects</h1>

    <p class="col-md-10 myHeader5">
        Check out some of my private projects as well as some group works from university.
    </p>

    <div class="mySpacer64"></div>


    <div class="pj_container row justify-content-between">

        <div class="pj_wrapper col-xl-4" id="pj1" data-bs-toggle="modal" data-bs-target="#modalPJ1">
            <img src="../img/cube.png">
            <div class="pj_desc" id="desc1">
                <h3>Blender Animation</h3>
                <p>Simple looping animation of my nickname</p>
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
            <img src="../img/squadUP2.png">
            <div class="pj_desc" id="desc3">
                <h3>Website Study Project</h3>
                <p>In this study work, we created as a group an imaginary company with fitting coorporate design and homepage.</p>
            </div>
        </div>

        <div class="pj_wrapper col-xl-5" id="pj4" data-bs-toggle="modal" data-bs-target="#modalPJ4">
            <img src="">
            <div class="pj_desc" id="desc4">
                <h3>JavaFx Study Project</h3>
                <p></p>
            </div>
        </div>

        <div class="pj_wrapper col-xl-6" id="pj5" data-bs-toggle="modal" data-bs-target="#modalPJ5">
            <img src="../img/dvl.png">
            <div class="pj_desc" id="desc5">
                <h3>OpenGL Study Project</h3>
                <p></p>
            </div>
        </div>

    </div>
</div>

<!-- Modal PJ1 -->
<div class="modal fade" id="modalPJ1" tabindex="-1" aria-labelledby="labelModalPJ1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModalPJ1">Blender Animation</h5>
                <button type="button" class="miniBtn" data-bs-dismiss="modal" aria-label="Close">&#9932;</button>
            </div>
            <div class="modal-body">
                With this simple short video I started animating in Blender. I am still relativly new to Blender and made this for this portfolio
                Website of mine. I played around with the Keyframes to flip the Lights on and off and rotate the Cube around itself. This helped me a lot
                to understand animating with Blender. In the future I wanna work more with animations and explore more different mechanics that Blender
                has to offer.

                <div class="pj_video_container">
                    <video class="pj_video" src="img/JulzLoopV2.mkv" type="video/mkv" loop muted>
                        Your browser does not support the video tag.
                    </video>
                    <div class="playpause"></div>
                </div>

                <div class="pj_img"><img src="../img/pj1_1.png"></div>
                <div class="pj_img"><img src="../img/pj1_2.png"></div>
                
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

                <div class="pj_video_container">
                    <video class="pj_video" src="img/24frameV3.mp4" type="video/mp4" loop muted>
                        Your browser does not support the video tag.
                    </video>
                    <div class="playpause"></div>
                </div>

                <div class="row">
                    <div class="pj_img pj_img_zoom col-xl-6">
                        <label>
                            <input type="checkbox" class="cl">
                            <img src="../img/pj2_1.png">
                        </label>
                    </div>
                    <div class="pj_img pj_img_zoom col-xl-6">
                        <label>
                            <input type="checkbox" class="cr">
                            <img src="../img/pj2_2.png">
                        </label>
                    </div>
                    <div class="pj_img pj_img_zoom col-xl-6">
                        <label>
                            <input type="checkbox" class="cl">
                            <img src="../img/pj2_3.png">
                        </label>
                    </div>
                    <div class="pj_img pj_img_zoom col-xl-6">
                        <label>
                            <input type="checkbox" class="cr">
                            <img src="../img/pj2_4.png">
                        </label>
                    </div>
                    <div class="pj_img pj_img_zoom col-xl-6">
                        <label>
                            <input type="checkbox" class="cl">
                            <img src="../img/pj2_5.png">
                        </label>
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

                        <div class="row justify-content-center align-items-center">
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cm">
                                    <img src="../img/squadUP/proto1.png">
                                </label>
                            </div>
                        </div>

                        <p><br>Another significant step of prototyping was the creation of our Persona. Our ideal user so to say. This was also a
                            lot of fun to do.<br></p>

                        <div class="row justify-content-center align-items-center">
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cm">
                                    <img src="../img/squadUP/proto2.png">
                                </label>
                            </div>
                        </div>

                        <p><br>The final part of creating the prototyp was making Wireframes and Gridlayouts to be ready to get to coding.
                            Now had all the infos and templates we needed to get started.</p>
                        </p>

                        <div class="row justify-content-center align-items-center">
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cl">
                                    <img src="../img/squadUP/proto3.png">
                                </label>
                            </div>
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cr">
                                    <img src="../img/squadUP/proto3.png">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mySpacer128"></div>

                    <div class="pj3_logo" id="logo">
                        <h4 class="pj_subheader">Logo</h4>
                        <p>The Logo as a very important aspect of every Coorporate identity, so we had a fitting but also easy to remember
                            design for squadUP. We decided to go with a striking arrow that allows replaces the letter 'A' in squad.</p>

                        <div class="row justify-content-center align-items-center">
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cm">
                                    <img class="bg-light" src="../img/squadUP/logo.png">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mySpacer128"></div>

                    <div class="pj3_impl" id="impl">
                        <h4 class="pj_subheader">Implementation</h4>
                        <p>With all the given design criterias we were now ready to realize. The Website is a one-pager with all the
                            important informations about squadUP. A contact form as well as a register form are accessable via the navigation
                            bar. We did not use any frameworks like React or Angular but vanilla html, css, javascript and php instead. We needed
                            php for login and register validations (so we also needed a database). Therefore ww created one in mySQL to save Usernames
                            hashed Passwords.</p>
                    </div>
                    <div class="mySpacer128"></div>

                    <div class="pj3_rslt" id="rslt">
                        <h4 class="pj_subheader">Result</h4>
                        <div class="row">
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cl">
                                    <img src="../img/squadUP/sup1.png">
                                </label>
                            </div>
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cr">
                                    <img src="../img/squadUP/sup2.png">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cl">
                                    <img src="../img/squadUP/sup3.png">
                                </label>
                            </div>
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cr">
                                    <img src="../img/squadUP/sup4.png">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cl">
                                    <img src="../img/squadUP/sup5.png">
                                </label>
                            </div>
                            <div class="pj_img pj_img_zoom col-xl-6">
                                <label>
                                    <input type="checkbox" class="cr">
                                    <img src="../img/squadUP/sup6.png">
                                </label>
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
                ...
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
                ...
            </div>
        </div>
    </div>
</div>