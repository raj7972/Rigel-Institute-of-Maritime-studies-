<?php 
include_once('./portal/classes/config.php');
require_once './portal/classes/forntend_function.php';

$obj= new Frontend();

$getCourse=$obj->getRandumCourse();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once 'head.php' ?>

    <body>
        <div class="main-sec">

            <!-- HEADER -->
                <?php include_once 'header.php' ?>
            <!-- HEADER -->

            <main class="fixed-height-top">
                <style type="text/css">
                    .text_limit2{
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                    }

                    .text_limit4{
                        padding-top: 10px;
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;
                    }
                </style>
                <section>
                    <div class="carousel-sec">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./assets/background/carosuel-img.png" class="d-block w-100 right-img" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carosuel-right-sec">
                                            <div class="carosuel-inner">
                                                <h1>Best Maritime Education</h1>
                                                <p>The Rigel Institute of Maritime Studies (RIMS) is an online Platform that helps seafarers to manage their maritime education and save time and money. The website is designed by professional specialists and guided by a maritime expert with good experience.</p>
                                                <div class="btn-parnt">
                                                <a href="https://rigelinstituteonline.com/contact-us.php"><button class="btn primary white">Join now</button></a>
                                                </div>
                                            </div>
                                               
                                        </div>
                                    </div>
                                </div>                        
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./assets/background/carosuel-img.png" class="d-block w-100 right-img" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carosuel-right-sec">
                                            <div class="carosuel-inner">
                                                <h1>Best Maritime Education</h1>
                                                <p>The Rigel Institute of Maritime Studies (RIMS) is an online Platform that helps seafarers to manage their maritime education and save time and money. The website is designed by professional specialists and guided by a maritime expert with good experience.</p>
                                                <div class="btn-parnt">
                                                <a href="https://rigelinstituteonline.com/contact-us.php"><button class="btn primary white">Join now</button></a>
                                                </div>
                                            </div>
                                               
                                        </div>
                                    </div>
                                </div>    
                              </div>
                              <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./assets/background/carosuel-img.png" class="d-block w-100 right-img" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carosuel-right-sec">
                                            <div class="carosuel-inner">
                                                <h1>Best Maritime Education</h1>
                                                <p>The Rigel Institute of Maritime Studies (RIMS) is an online Platform that helps seafarers to manage their maritime education and save time and money. The website is designed by professional specialists and guided by a maritime expert with good experience.</p>
                                                <div class="btn-parnt">
                                                    <a href="https://rigelinstituteonline.com/contact-us.php"><button class="btn primary white ">Join now</button></a>
                                                </div>
                                                
                                            </div>
                                               
                                        </div>
                                    </div>
                                </div>    
                              </div>
                            </div>
                           <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </button>
                          </div>
                    </div>
                </section>
                <div class="spacer-15"></div>
                <section>
                    <div class="info-sec">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="info-inner">
                                        <div class="heading-comn">
                                            <h6>About Rigel Institute of Maritime Studies</h6>
                                        </div>

                                       <!--  <h6>
                                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor 
                                        </h6> -->
                                        <p>Rigel Institute of Maritime Studies, established in March 2020, enhances the skills of seafarers through specialized marine training. It aims to meet international standards and regulations for competent seafarers, offering state-of-the-art facilities and fostering a spirit of mutual learning in the rapidly evolving shipping industry. The institute contributes to the efficient transport sector, crucial for a country like India with significant maritime access.</p>
                                       
                                        <div class="btn-parnt mb-5"> <a href="https://rigelinstituteonline.com/contact-us.php"><button class="btn primary ">Join now</button></a></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="./assets/images/boat1.png" alt="" class="img-fluid" style="height: 100%;">
                                        </div>
                                        <div class="col-6">
                                                <div class="row">
                                                    <img src="./assets/images/boat3.png" alt="" class="img-fluid">
                                                    <img src="./assets/images/boat2.png" alt="" class="img-fluid mt-3">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="spacer-15"></div>
                <section>
                    <div class="listing-sec">
                        <div class="container">
                            <div class="heading-comn">
                                <h6>Courses</h6>
                                <h2>The Services we offer</h2>
                            </div>    
                            <div class="row">
                                <!-- <div class="col-md-6">
                                    <div class="listing-inner">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="./assets/images/cources1.png" alt="" class="img-fluid ">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="listing-header">
                                                    <h5>Heading title</h5>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
                                                </div>
                                                <ul>
                                                    <li>Lorem ipsum dolor</li>
                                                    <li>Lorem ipsum dolor</li>
                                                    <li>Lorem ipsum dolor</li>
                                                    <li>Lorem ipsum dolor</li>
                                                </ul>
                                                <div class="btn-parnt">
                                                <button class="btn primary sm mt-4">Join now</button></div>
                                            </div>
                                        </div>

                                    </div>
                                </div> -->

                                <?php foreach ($getCourse as $key => $value) { ?>
                                    <div class="col-md-6">
                                        <div class="listing-inner">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="./portal/attachment/course/<?php echo $value['image'];?>" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="listing-header">
                                                        <h5><?php echo $value['coursename'];?></h5>
                                                        <span class="text_limit2"><?php echo $value['coursedescription'];?></span>
                                                    </div>
                                                    <br>
                                                    <div class="listing-header">
                                                        <span class="text_limit4"><?php echo $value['shortdescription'];?></span>       
                                                    </div>
                                                    <!-- <span class="text_limit2"><?php //echo $value['shortdescription'];?></span> -->
                                                    
                                                    <div class="btn-parnt">
                                                    <a href="course-detail.php?id=<?php echo base64_encode($value['course_id'])?>" class="btn primary sm mt-4">Know More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>
                               
                            </div>  
                            <a href="courses.php" class="link-btn">View more</a>
                        </div>
                    </div>
                </section>
                <div class="spacer-15"></div>
                <section>
                    <div class="slider-sec">
                        <div class="m-auto">
                            <div class="heading-comn text-center">
                                <h6 class="justify-content-center">Alumini</h6>
                                <h2>Students Testimonial</h2>
                            </div>
                            <div id="carouselExampleControls2" class="carousel slide py-2" data-ride="carousel" style="background: url(./assets/background/list-bg.png);">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="img-sec">
                                                <img src="./assets/icons/mask.png" class="d-block profile-icon" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="carosuel-right-sec">
                                                <div class="carosuel-inner">
                                                    <div class="listing-header">
                                                        <img src="./assets/icons/testimonial.png" alt="" class="testimonial-icon">
                                                        <h5>Manoj Kumar</h5>
                                                        <!-- <p class="text-grey">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p> -->
                                                        <p>I have found Rigel Institute course on google when i am searching my course Bridge and Engine room resource management course at that time Rigel Institute course website helps me to find the course and institute for the same.</p>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                                   
                                            </div>
                                            <!-- <img src="../assets/background/carosuel-img.png" class="d-block w-100" alt="..."> -->
                                        </div>
                                    </div>  
                                    
                                  <div class="carousel-item ">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="img-sec">
                                                <img src="./assets/icons/mask.png" class="d-block profile-icon" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="carosuel-right-sec">
                                                <div class="carosuel-inner">
                                                    <div class="listing-header">
                                                        <img src="./assets/icons/testimonial.png" alt="" class="testimonial-icon">
                                                        <h5>Maniraj Shenava</h5>
                                                        <!-- <p class="text-grey">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p> -->
                                                        <p>I am searching course crowd and crisis management and my search ended on Rigel Institute course and the support which i got from them is tremendous.</p>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                                   
                                            </div>
                                            <!-- <img src="../assets/background/carosuel-img.png" class="d-block w-100" alt="..."> -->
                                        </div>
                                    </div>  
                                    
                                  <div class="carousel-item ">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="img-sec">
                                                <img src="./assets/icons/mask.png" class="d-block profile-icon" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="carosuel-right-sec">
                                                <div class="carosuel-inner">
                                                    <div class="listing-header">
                                                        <img src="./assets/icons/testimonial.png" alt="" class="testimonial-icon">
                                                        <h5>Mohammad Raza</h5>
                                                        <!-- <p class="text-grey">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p> -->
                                                        <p>Rigel Institute help me to do my course online from Dubai they have very good support and team and courses available to do any time and any where. Thanks team Rigel Institute course.</p>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                                   
                                            </div>
                                            <!-- <img src="../assets/background/carosuel-img.png" class="d-block w-100" alt="..."> -->
                                        </div>
                                    </div> 

                                    <div class="carousel-item ">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <div class="img-sec">
                                                    <img src="./assets/icons/mask.png" class="d-block profile-icon" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="carosuel-right-sec">
                                                    <div class="carosuel-inner">
                                                        <div class="listing-header">
                                                            <img src="./assets/icons/testimonial.png" alt="" class="testimonial-icon">
                                                            <h5>Amit Patil</h5>
                                                            <p>Rigel Institute course provides variety of courses and you can book your seat within few minutes with proper details they have good team and reputed institute tie up which will fulfil the requirements of seafarers. thanks for the support of team Rigel Institute course.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <div class="img-sec">
                                                    <img src="./assets/icons/mask.png" class="d-block profile-icon" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="carosuel-right-sec">
                                                    <div class="carosuel-inner">
                                                        <div class="listing-header">
                                                            <img src="./assets/icons/testimonial.png" alt="" class="testimonial-icon">
                                                            <h5>Rabeindra Yathushan</h5>
                                                            <p>I have found Rigel Institute course on google when i am searching my course Bridge and Engine room resource management course at that time Rigel Institute course website helps me to find the course and institute for the same.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 





                                  </div>
                                  <!-- <div class="carousel-item">
                                    <img src="..." class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="..." class="d-block w-100" alt="...">
                                  </div> -->
                                  
                               <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls2" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-target="#carouselExampleControls2" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </button>
                                </div>
                              </div>
                        </div>
                    </div>
                </section>
                <div class="spacer-15"></div>
                <section>
                    <div class="form-parent">
                        <div class="container">
                            <div class="row align-items-center" style="justify-content: space-around;" >
                                <div class="col-md-5">
                                    <div class="cross-info">
                                        <ul>
                                            <li>
                                                <div>
                                                    <h3>
                                                        25+
                                                    </h3>
                                                    <h6>Total Staff</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>
                                                        10+
                                                    </h3>
                                                    <h6>Total Courses</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>
                                                        5+
                                                    </h3>
                                                    <h6>Total Classrooms</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>
                                                        2+
                                                    </h3>
                                                    <h6>Total Offices</h6>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-sec">
                                        <h3>Join us</h3>
                                        <div class="input-ui">
                                            <input type="email" placeholder="Enter Email">
                                            <p class="error-msg">Error</p>
                                        </div>
                                        <div class="input-ui">
                                            <select name="" id="">
                                                <option value="">Courses</option>
                                                <option value="">Courses</option>
                                            </select>
                                            <p class="error-msg">Error</p>
                                        </div>
                                        <div class="input-ui">
                                            <textarea name="" id="" ></textarea>
                                            <p class="error-msg">Error</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-left">
                                                <div class="btn-sec">
                                                    <button class="btn primary ">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <?php include_once 'footer.php' ?>
        </div>
        <?php include_once 'script.php' ?>
    </body>
</html>