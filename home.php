<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
$title = "Home";
require 'header.php';

?>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php if ($usertype == 'Found') echo 'foundhome.php'; else echo 'home.php';?>">ADVOCON</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   					<li>
                       <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="user.php">User Profile</a>
                    </li>
                    <li>
                        <a href="foundation.php">Foundations</a>
                    </li>
					     <li>
                        <a href="groups.php">Groups</a>
                    </li>
					<li>
                        <a href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Home
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <td><a href="eventmap.php">
                    <img class="img-responsive" src="placeholder/s1.png" alt="">
                </a>
            </div>    
            <div class = "col-content">
                <table>
                <tr><td>
                
                    <a href="grp_hakbang.php"><h2>Unang Hakbang Year End Party</h2></a>
                    <p>A party for Unang Hakbang students.  Food and Drinks are free for the students <br>
                        Don't forget to bring your happiness and holiday spirit!<br><br>
                        <b>Organizers: </b><a href = "grp_hakbang.php"> Unang Hakbang Foundation</a><br>
                        <b>Date: </b> December 20, 2015<br>
                        <b>Venue:</b>Quezon City Unang Hakbang 123 St.

                    </p>
                </td></tr>
                </table>
            </div>
            
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="eventmapadap.php">
                    <img class="img-responsive" src="placeholder/s2.png" alt="">
                </a>
            </div>
                <div class = "col-content">
                    <table>
                        <tr></td>
                    <a href="eventmapadap.php"><h2>AGAP Foundation Anniversary</h2></a>
                    <p>AGAP's Foundation yearly event organized by AGAP, co-sponsored by Org X and Org Y.<br>
                        Every year, a school that is recieving aid from the AGAP Foundation will serve<br>
                        Host for our yearly event.<br><br>
                        <b>Organizer: </b> <a href = "grp_AGAP.php">AGAP Foundation</a><br>
                        <b>Date: </b> Nov 26,2015<br>
                        <b>Venue:</b> Pasay City <br>
                          
                    </p>
                </td></tr>
                </table>
            </div>  
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="eventmap.php">
                    <img class="img-responsive" src="placeholder/screenshot.png" alt="">
                </a>
            </div>
            <div class = "col-content">
                <table><tr><td>
                    <a href="eventmap.php"><h2>Street cleaning</h2></a>
                    <p>
                        Street cleaning movement. Do this in your neighborhood!<br>
                        Keep your environment clean and green! Continue sharing the<br>
                        Idea that the area should always be tidy<br><br>

                        <b>Organizer: </b> <a href = "grp_hakbang.php">Unang Hakbang Foundation</a><br>
                        <b>Date: </b> Everyday<br>
                        <b>Venue:</b> Everywhere <br>
                    </p>
                </td></tr>
               </table>
                </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <!--ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                   
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul-->
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team Gannit 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>