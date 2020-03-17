@extends('base')

@section('content')



<!-- Home -->
<section class="hero-wrap js-fullheight" style="background-image: url('images/Background2.jpg');" data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                <p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <!-- <a href="https://vimeo.com/45830194"
                        class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
                        <span class="ion-ios-play play mr-2"></span>
                        <span class="watch">Watch Video</span>
                    </a> -->

                    <!-- <img class='justify-content-center align-items-center mr-3'src='images/logo.png'> -->
                </p>
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Positive change is only
                    a platform away!</h1>

            </div>

        </div>
    </div>
</section>

<!-- About  -->
<section class="ftco-section ftco-services ftco-no-pt">
    <div class="container">
        <div class="row services-section">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span> <img src='images/vision.jpg' style='width :5rem;'></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Our Vision</h3>
                        <p>To bring positive change to the landscape of human capital in Syria.</p>
                        <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span><img src='images/mission.jpg' style='width :5rem;'></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Our Mission</h3>
                        <p>To strengthen the effectiveness and efficiency of human capital by providing development
                            opportunities and customizable solutions for training, capacity building, and organizational
                            development</p>
                        <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services text-center d-block">
                    <div class="icon"><span><img src='images/values.png' style='width :5rem;'></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Our Values</h3>
                        <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp• Quality &nbsp
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p>
                        <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp• Inspiration
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p>
                        <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp• Impact &nbsp
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who we are  -->
<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="who_we_are">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-8 pl-lg-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class=''>Who we are</h2>
                        <p> Investing in the human capital has never been as important in Syria as it is today. Out of
                            all production inputs, the human capital is one that was severely damaged after 8 years of
                            conflict, and for the country to rise again, both economically and socially, a new
                            generation of professionals and business leaders need to be equipped with the right tools to
                            make change happen.</p>
                        <p> This is why we founded Platform Human Capital Development. We wanted to create a place where
                            professionals could teach and learn, a place where leaders could share their experiences,
                            and a place where change-makers could network with likeminded individuals, and bring success
                            and growth to the places where they work.</p>
                        <p> This is what makes Platform Human Capital Development different from any other training
                            institute or agency. We are committed to drive positive change around us and leave a
                            sustainable impact. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What we do  -->
<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="what_we_do">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-8 pl-lg-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2>What we do!</h2>
                        <p> We provide customized solutions to serve the needs of corporates, NGOs, and government
                            entities in Syria. Our services range from finding the right person, to helping the person
                            work right. Our unique marketing approach allows us to look at each customer as an
                            individual experience where we can create impact and make a real difference. We believe
                            everyone can do, and we're there just to unleash their potential.</p>
                    </div>
                    <a class='btn btn-secondary' href="what-we-do"> More about what we do</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Gallery -->
<!-- <section class="ftco-section ftco-project bg-light" data-section="projects">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Project Gallery</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 testimonial">
                <div class="carousel-project owl-carousel">
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="images/project-1.jpg" class="img-fluid" alt="Colorlib Template">
                                <a href="images/project-1.jpg"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="images/project-2.jpg" class="img-fluid" alt="Colorlib Template">
                                <a href="images/project-2.jpg"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="images/project-3.jpg" class="img-fluid" alt="Colorlib Template">
                                <a href="images/project-3.jpg"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="images/project-4.jpg" class="img-fluid" alt="Colorlib Template">
                                <a href="images/project-4.jpg"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="images/project-5.jpg" class="img-fluid" alt="Colorlib Template">
                                <a href="images/project-5.jpg"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="images/project-6.jpg" class="img-fluid" alt="Colorlib Template">
                                <a href="images/project-6.jpg"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Office Interior Design</a></h3>
                                <span>Interior Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Team  -->
<section class="ftco-section" data-section="team">
    <div class="container-fluid p-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-8 heading-section  ftco-animate">
                <h2>Our team</h2>
                <p>Our team is a diverse pool of international and local professionals and expert facilitators who
                    combine academic knowledge with real-world practice and experience.
                </p>
                <p>Our international team includes partner organizations and individuals who are engaged in our
                    activities on-demand and based on need.</p>
                <p>Here you can meet our local team:</p>
            </div>
        </div>
        <div class="row no-gutters">

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/team/1.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Co-Founder and Managing Partner</span>
                            <h3 class="mb-4">Salah Moussalli
                            </h3>
                            <div class="faded">
                                <p>Entrepreneur and professional in social development</p>
                                <p>MBA from Syrian Virtual University, MD from University of Aleppo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/team/2.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Administration and Finance Manager</span>
                            <h3 class="mb-4">Najla Murad
                            </h3>
                            <div class="faded">
                                <p>Experienced in Banking and Sales</p>
                                <p>BA in Financial and Banking Sciences from University of Aleppo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/team/3.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Trainer</span>
                            <h3 class="mb-4">Amira Hussien</h3>
                            <div class="faded">
                                <p>Professional in customer service and corporate social responsibility</p>
                                <p>BA in Financial and Banking Sciences from University of Aleppo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/team/4.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Trainer</span>
                            <h3 class="mb-4">Jiana Ashji</h3>
                            <div class="faded">
                                <p>Professional Youth Empowerment and Social Development</p>
                                <p>MSA, DEd, BEc from University of Aleppo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/team/5.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Trainer</span>
                            <h3 class="mb-4">Mustafa Watar</h3>
                            <div class="faded">
                                <p>Experienced in Business Development and Project Management </p>
                                <p>EMBA in Strategy and Leadership from Synergy University Dubai, BA in Business Administration from University of Aleppo </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/team/6.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Trainer</span>
                            <h3 class="mb-4">Nezha Deiri</h3>
                            <div class="faded">
                                <p>Professional in PSS, Protection, and Humanitarian programs management</p>
                                <p>BA in Sociology from University of Aleppo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/team/7.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Trainer</span>
                            <h3 class="mb-4">Toufik Wazzaz</h3>
                            <div class="faded">
                                <p>Professional in Youth Empowerment and Social Development </p>
                                <p>MBA from Syrian Virtual University, BSc. in Water Engineering from University of Aleppo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/team/8.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Trainer</span>
                            <h3 class="mb-4">Yehya Fallaha</h3>
                            <div class="faded">
                                <p>Entrepreneur and Graphic Designer</p>
                                <p>BA in Drawing and Painting from University of Aleppo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact -->
<section class="ftco-section contact-section ftco-no-pb" data-section="contact">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact</span>
                <h2 class="mb-4">Contact Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="contact_form" class="bg-light p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>

<!-- Contact info -->
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            
            <!-- <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-4">Address</h3>
                    <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div> -->
            
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img style='width: 3rem;' src='images/Phone.png' >
                    </div>
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                    <img style='width: 3rem;' src='images/Email.png' >
                    </div>
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="mailto:info@platformhcd.com">info@platformhcd.com</a></p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                    <img style='width: 3rem;' src='images/Internet.png' >
                    </div>
                    <h3 class="mb-4">Website</h3>
                    <p><a href="http://platformhcd.com">platformhcd.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
