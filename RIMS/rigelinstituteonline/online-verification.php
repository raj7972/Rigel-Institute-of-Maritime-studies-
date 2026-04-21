<?php 

include_once('portal/classes/config.php');
require_once 'portal/classes/function.php';
$obj= new ADMIN();

if(isset($_POST['btncertificateReport']))
{
    $code= strtoupper($_POST['key']);
    $output = $obj->online_verification($code);

    $coursedata = $obj->getCourseDataUsingId($output['0']['course_id']);
    $coursename = $coursedata['coursename'];

}

if(isset($_GET['can']))
{

    $candidate_data = $obj->GETCANDIDATEDATABYID(base64_decode($_GET['can']));
    $code= $candidate_data['code'];
  	$coursedata = $obj->getCourseDataUsingId($candidate_data['course_id']);
    $coursename = $coursedata['coursename'];
    $output = $obj->online_verification($code);
  //echo '<pre>';print_r($coursename);die;
$add_date = new DateTime($candidate_data['ca_briefing_to']);

$add_date->modify('-1 day +5 year');
$expiry_date = $add_date->format('d-m-Y');
} 

//echo '<pre>';print_r($output);die;
?>
<!doctype html>
<html lang="en">
<?php include 'include/head.php' ?>
  <!-- Bootstrap 5 CSS CDN (if not already included) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<body data-layout="horizontal" data-topbar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'include/header.php' ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <!-- <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 text-dark">Welcome !</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!-- end page title -->

                    <style type="text/css">
                    .footer {
                        position: inherit;
                    }

                    .box_zoom {
                        transition: transform .2s;
                        /* Animation */
                        z-index: 1;
                        cursor: pointer;
                    }

                    .box_zoom:hover {
                        transform: scale(1.2);
                        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                    }

                    .page-center {
                        width: 100%;
                        height: 100%;
                        display: table;
                        position: relative;
                    }

                    .page-center .page-center-in {
                        width: 100%;
                        display: table-cell;
                        vertical-align: middle;
                        padding: 20px 0;
                    }

                    .sign-box {
                        width: 100%;
                        max-width: 322px;
                        margin: 0 auto;
                        background: #fff;
                        border: 1px solid #d8e2e7;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        -ms-border-radius: 5px;
                        border-radius: 5px;
                        padding: 20px;
                        position: relative;
                        text-align: center;
                    }

                    .sign-box .sign-title {
                        font-size: 18px;
                        font-weight: 600;
                        margin-top: 5px;
                        margin-bottom: 20px;
                        color: #333;
                    }

                    .form-horizontal .form-group {
                        margin-right: -15px;
                        margin-left: -15px;
                    }

                    .form-horizontal .control-label {
                        padding-top: 7px;
                        margin-bottom: 0;
                        text-align: right;
                    }

                    </style>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom_form_css">
                                <div class="card-body">
                                    <center>
                                        <div class="row mail-header">
                                            <div>
                                                <h3 style="font-family: initial;font-size: 40px;">Online Verification
                                                </h3>
                                            </div>
                                        </div>
                                    </center>
                                    <?php if($output!='') {?>

                                    <?php if($output['0']['status'] =='1') {?>
                                    <br>
                                          <style>
                                              .form-center-wrapper {
                                                  display: flex;
                                                  justify-content: center;
                                                  align-items: flex-start;
                                                  min-height: 100vh;
                                                  padding: 50px 15px;
                                                  background-color: #f8f9fa;
                                              }
                                              .form-container {
                                                  background: #ffffff;
                                                  padding: 30px;
                                                  border-radius: 10px;
                                                  box-shadow: 0 0 10px rgba(0,0,0,0.05);
                                                  width: 100%;
                                                  max-width: 600px;
                                              }
                                              .candidate-img {
                                                  max-width: 100%;
                                                  border-radius: 8px;
                                                  margin-bottom: 15px;
                                              }
                                              .note-box {
                                                  background-color: #e9ecef;
                                                  padding: 15px;
                                                  border-radius: 8px;
                                                  margin-top: 25px;
                                                  font-size: 15px;
                                              }
                                              .note-box b {
                                                  font-size: 16px;
                                              }
                                          </style>

                                          <div class="form-center-wrapper">
                                              <div class="form-container">
                                                  <form role="form">
                                                      <?php if (!empty($output[0]['candidates_photo'])) { ?>
                                                          <div class="text-center mb-4">
                                                              <label class="form-label d-block">Candidate Image</label>
                                                            <?php if($output[0]['admin_users_id'] == 27 ) { 
																?> 
                                                            		<img class="candidate-img" src="marinepro/attachment/Candidates/<?php echo $output[0]['candidates_photo']; ?>" width="200">
                                                               <?php
																} else {  ?>
                                                              <img class="candidate-img" src="portal/attachment/Candidates/<?php echo $output[0]['candidates_photo']; ?>" width="200">
                                                            <?php }  ?>
                                                          </div>
                                                      <?php } ?>

                                                      <?php if (!empty($output[0]['rand_no'])) { ?>
                                                          <div class="mb-3">
                                                              <label class="form-label">Certificate No.</label>
                                                              <input type="text" class="form-control" value="<?php echo $output[0]['rand_no']; ?>" disabled>
                                                          </div>
                                                      <?php } ?>

                                                      <?php if (!empty($output[0]['candidatesname'])) { ?>
                                                          <div class="mb-3">
                                                              <label class="form-label">Name</label>
                                                              <input type="text" class="form-control" value="<?php echo $output[0]['candidatesname']; ?>" disabled>
                                                          </div>
                                                      <?php } ?>

                                                      <?php if (!empty($output[0]['course_id'])) { ?>
                                                          <div class="mb-3">
                                                              <label class="form-label">Course Name</label>
                                                              <input type="text" class="form-control" value="<?php echo $coursename; ?>" disabled>
                                                          </div>
                                                      <?php } else { ?>
                                                          <div class="text-center text-danger fw-bold fs-5 my-3" style="font-family: monospace;">
                                                              This is not a valid Certificate Number.
                                                          </div>
                                                      <?php } ?>
	
                                                     

                                                      <?php if (!empty($output[0]['ca_briefing_to'])) { ?>
                                                          <div class="mb-3">
                                                              <label class="form-label">Date of issue</label>
                                                              <input type="text" class="form-control" value="<?php echo date('d-m-Y', strtotime($output[0]['ca_briefing_to'])); ?>" disabled>
                                                          </div>
                                                      <?php } ?>
                                                    
                                                    
                                                    <?php if (!empty($output[0]['ca_briefing_to'])) { ?>
                                                          <div class="mb-3">
                                                              <label class="form-label">Date of expiry</label>
                                                              <input type="text" class="form-control" value="<?php echo $expiry_date; ?>" disabled>
                                                          </div>
                                                      <?php } ?>

                                                      <div class="note-box">
                                                          <b>Note:</b>
                                                          <p class="mb-2">
                                                              If you cannot verify your certificate online, please send a scanned copy to
                                                              <span class="text-primary">info@rigelinstituteonline.com</span>.
                                                          </p>
                                                          
                                                      </div>
                                                  </form>
                                              </div>
                                          </div>



                                    <?php } else {?>
                                        <br>
                                        <br>
                                        <center>
                                            <div class="row mail-header">
                                                <div>
                                                    <h3 style="font-family: monospace;font-size: 40px;color:#FF0000;">Oops!
                                                        there is some technical issue.</h3>
                                                </div>
                                            </div>
                                        </center>

                                        <br><br><br>
                                        <div style="background-color:#C8D1D7;border-radius: 12px;">
                                            <b style="font-size: 18px;margin-left: 14px;">Note: </b>
                                            <span style="font-size: 15px;font-family: initial;margin-left: 14px;">
                                                If You Cannot verify Your Certificate Online Please Send Scan Copy To <span
                                                    style="color:#212A7A;">info@rigelinstituteonline.com</span> To verify
                                                Your Certificate. <br>
                                                
                                            </span>
                                        </div>
                                    <?php } ?>

                                    <?php } else {?>

                                    <div class="page-center">
                                        <div class="page-center-in">
                                            <form class="sign-box" role="form" method="post"
                                                style="max-width: 600px!important;padding: 18px!important;">

                                                <header class="sign-title">Certificate Number
                                                    <br><br>
                                                    <div class="form-group">
                                                        <input type="text" name="key" id="key" class="form-control"
                                                            placeholder="Enter Certificate Number" required="">
                                                    </div><br>

                                                    <div class="form-group clearfix form-group">
                                                        <div class="pull-center">
                                                            <button type="submit" onclick="getdata()"
                                                                name="btncertificateReport" id="btncertificateReport"
                                                                class="btn btn-success rounded">Submit</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <b style="font-size: 18px;">Note: </b>
                                                    <span style="font-size: 14px;font-family: monospace;">
                                                        If You Cannot verify Your Certificate Online Please Send Scan
                                                        Copy To <span
                                                            style="color:#212A7A;">info@rigelinstituteonline.com</span>
                                                       
                                                    </span>

                                                </header>

                                            </form>
                                        </div>
                                    </div>

                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <!--col_xl-12-->




                    </div> <!-- container-fluid -->
                </div><!-- End Page-content -->


            </div><!-- end main content-->
            <?php include 'include/footer.php' ?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->



    <?php include 'include/script.php' ?>
    <script>
    $('.loader-top').hide(); // default loader hide
    </script>
    <!-- Chart JS -->
    <script src="assets/libs/chart.js/chart.min.js"></script>
    <script src="assets/js/pages/chartjs.init.js"></script>
    <script src="assets/js/stock-prices.js"></script>
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/js/pages/apexcharts.init.js"></script>
</body>


</html>
<!-- 722 OG line HTML (after formating total line 546)-->

<script>
function getdata() {
    var code = $("#key").val();

    if (code === '' || code === 'undefined') {
        BootstrapDialog.show({
            title: 'Error' + " " + " " + 'Response',
            message: 'Certificate Key is mandatory please Enter.'
        });
    }
}
</script>