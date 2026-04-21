<?php 
include_once('./portal/classes/config.php');
require_once './portal/classes/forntend_function.php';

$obj= new Frontend();

$id=base64_decode($_GET['id']);
$getCourse=$obj->getCourseDataUsingId($id);
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
                <section>
                    <div class="breadcrum-sec">
                        <div class="inner">
                            <h1><?php echo $getCourse['coursename'];?> Course Details</h1>
                            <div class="breadcrum-link">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>Course Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="spacer-15"></div>

                <section>
                    <div class="info-sec p-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="info-inner">
                                        <div class="heading-comn">
                                            <h6 class="justify-content-center">Courses</h6>
                                            <h2><?php echo $getCourse['coursename'];?></h2>

                                            <?php echo $getCourse['shortdescription'];?>

                                            <?php echo $getCourse['coursedescription'];?>
                                        </div>

                                        <div class="listing-sec no-bg p-0">
                                            <div class="listing-inner p-0 m-0">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6 text-center">
                                                        <img src="./portal/attachment/course/<?php echo $getCourse['image'];?>" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="grey-bg cust-padding">
                                                            <div class="listing-header">
                                                                <h5><?php echo $getCourse['coursename'];?></h5>
                                                                <!--<h2 class="pricing">Rs <?php echo number_format(sprintf("%0.2f", $getCourse['price']),2,'.',',');?>/-</h2>-->
                                                            </div>
                                                            <!--<button class="btn primary lg mt-4">Buy now</button>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="spacer-15"></div>
            </main>
            <?php include_once 'footer.php' ?>
        </div>
        <?php include_once 'script.php' ?>
    </body>

</html>