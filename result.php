<!DOCTYPE html>
<html lang="en">
    <!-- ================================================ 
            PROJECT NAME: STUDENT MARKSHEET 
            TECHNOLOGIES: HTML, CSS, BOOTSTRAP, PHP
            AUTHOR NAME: ArumdawoCode
            AUTHOR URL: github.com/Arumdawo
        ================================================= -->
    <!-- php code -->
    <?php
        $sname = isset($_GET['sname']);
        $fname = isset($_GET['fname']);
        $oname = isset($_GET['oname']);
        $sex = isset($_GET['sex']);
        $dob = isset($_GET['dob']);
        $status = isset($_GET['status']);
        $maths = isset($_GET['maths']);
        $english = isset($_GET['english']);
        $physics = isset($_GET['physics']);
        $chemistry = isset($_GET['chemistry']);
        $biology = isset($_GET['biology']);
        $compt = isset($_GET['compt']);
        $total = $maths + $english + $physics + $chemistry + $biology + $compt;
        $remark1 = 0;
        $remark2 = 0;
        $remark3 = 0;
        $remark4 = 0;
        $remark5 = 0; 
        $count = 0;

        // // gender
        // if($gender == "Male"){
        //     $gen = "S/o";
        // }elseif($gender == "Female"){
        //     $gen = "D/o";
        // }
        // // gender
    ?>
    <!-- php code -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Marksheet | ArumdawoCode</title>
        <meta name="description" content="ArumdawoCode">
        <meta name="keywords" content="ArumdawoCode">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    
    </head>
    <body>
        <!-- marks form -->
        <section id="mark_form" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="header-h">ArumdawoCode</h1>
                        <p class="header-p">Student Marksheet Form</p>
                    </div>
                </div>
                <!-- social media links -->
                <div class="row msg-row">
                    <div class="col-md-4 col-sm-4 mr-15">
                        <div class="media">
                            <!-- hour icon -->
                            <div class="media-left">
                                <div class="social-media bg-14 text-center">
                                    <span class="hour-icon fa fa-clock-o"></span>
                                </div>
                            </div>
                            <!-- hour icon -->

                            <!-- social media links -->
                            <div class="media-body">
                                <h4 class="white-bg regular">Social Media Links</h4>
                                <p class="white-sm regular bg-20 alt-p">
                                    Github:<a href="http://github.com/arumdawo" target="_blank"> ArumdawoCode</a>
                                </p>
                                <p class="white-sm regular bg-20 alt-p">
                                    Twitter:<a href="https://twitter.com/aminatdammy" target="_blank"> ArumdawoCode</a>
                                </p>
                                <p class="white-sm regular bg-20 alt-p">
                                    Linkedln:<a href="https://linkedin.com/in/oluwadamilolami-adeogun-a49562b3/" target="_blank"> ArumdawoCode</a>
                                </p>
                            </div>
                            <!-- social media links -->
                        </div>
                        <div class="media">
                            <!-- hour icon -->
                            <div class="media-left">
                                <div class="email bg-14 text-center">
                                    <span class="hour-icon fa fa-clock-o"></span>
                                </div>
                            </div>
                            <!-- hour icon -->    
                            <!-- email link -->
                            <div class="media-body">
                                <h4 class="white-bg regular">Email Address</h4>
                                <p class="white-sm regular bg-20 alt-p">
                                    Gmail:<a href="mailto:aminatstudies@gmail.com" target="_blank"> ArumdawoCode</a>
                                </p>
                            </div>
                            <!-- email link -->
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <table class="table table-sm table-hover">
                             <div class="col-md-12 text-center">
                        <h1>ArumdawoCode</h1>
                        <p>Student Marksheet Form</p>
                    </div>
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                 </div>
             </div>
                    <!-- form -->
            </div>
            <!-- social media links -->
        </section>
        <!-- / marks form -->
    </body>
</html>