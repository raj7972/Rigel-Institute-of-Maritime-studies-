<?php 
include_once('./portal/classes/config.php');
require_once './portal/classes/forntend_function.php';

$obj= new Frontend();

$getCourse=$obj->getAllCoursData();
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
            <div class="breadcrum-sec">
                <div class="inner">
                    <h1>Training Cource</h1>
                    <div class="breadcrum-link">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Course</li>
                        </ul>
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
                    <h2>Maritime Courses</h2>
                </div>    
                <div class="row">
                    <?php foreach ($getCourse as $key => $value) { ?>
                        <div class="col-md-6">
                            <div class="listing-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="portal/attachment/course/<?php echo $value['image'];?>" alt="" class="img-fluid">
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
                                        <!-- <span class="text_limit4"><?php //echo $value['shortdescription'];?></span> -->
                                        
                                        <div class="btn-parnt">
                                        <a href="course-detail.php?id=<?php echo base64_encode($value['course_id'])?>" class="btn primary sm mt-4">Know More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
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