<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
$title = "Groups";
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
         <h1 class="page-header">Groups
         <form action = "#" >
                        <button  class = "btn-lg" >Create Group</button>
                     </form></h1>
                    
                     
        <!-- /.row -->
   <div class="row">
            <div class="col-md-3 portfolio-item">
                <td><a href="#">
                    <img class="img-responsive" src="placeholder/barangay.jpg" alt="">
                </a>
            </div>    
            <div class = "col-content">
                <table>
                <tr><td>
                    <a href="#"><h2>Barangay 123 Outreach Team</h2></a>
                    <form action = "join_group.php">
                        <button  class = "btn-lg" >Join Group</button>
                    </form>
                    <p>A dedicated group from Barangay 123 to reach out to the less fortunate.

                        </p>
                </td></tr>
                </table>
            </div>
            
        </div>
        <!-- Projects Row -->
     
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="placeholder/schhol.jpg" alt="">
                </a>
            </div>
                <div class = "col-content">
                    <table>
                        <tr></td>
                    <a href="#"><h2>Local School Section 1</h2></a>
                    <form action = "join_group.php">
                        <button  class = "btn-lg" >Join Group</button>
                    </form>
                    <p>Local School NSTP Program for Section 1<br>
                        <b>Head:</b>Ms. Reyes<br>
                        NSTP program handled with Advocad. Section 1 students<br>
                        must join this group.
                          
                    </p>
                </td></tr>
                </table>
            </div>  
        </div>
        <!-- /.row -->
          <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="placeholder/family.jpg" alt="">
                </a>
            </div>
                <div class = "col-content">
                    <table>
                        <tr></td>
                    <a href="#"><h2>Reyes Family Clan Outreach</h2></a>
                    <form action = "join_group.php">
                        <button  class = "btn-lg" >Join Group</button>
                    </form>
                    <p>Mga kapwa Reyes, dito tayo mag tipo!
                    </p>
                </td></tr>
                </table>
            </div>  
        </div>
      

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
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
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
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
