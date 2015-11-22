<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
$title = "Foundations";
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
                <h1 class="page-header">Foundations
                    
                </h1>
            </div>
        </div>

        <hr>
        <table id="searchTab" align="center" cellpadding="8" cellspacing="0" width="96%">
         <tbody><tr>
          <td bgcolor="#BCDCB1" valign="middle" width="33%"><strong>Name</strong></td>
          <td align="center" bgcolor="#BCDCB1" width="32%"><strong>Address</strong></td>
          <td align="center" bgcolor="#BCDCB1" width="23%"><strong>Contact Person</strong></td>
          <td align="center" bgcolor="#BCDCB1" width="12%"><strong>Details</strong></td>
          </tr>
        <tr height="2">
          <td colspan="4" bgcolor="#FFFFFF" valign="middle"></td>
          </tr>
         
                    <tr bgcolor="#DADADA">
                        <td><span class="current">Aboitiz Foundation, Inc.</span></td>
                        <td align="left"><span class="current">20/F NAC Tower, 32nd Street, Bonifacio Global City, Taguig City</span></td>
                        <td align="center"><span class="current">Mr. Augusto P.I. Carpio III / Mr. Danilo M. Cerence</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=1929">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="">
                        <td><span class="current">ABS-CBN Lingkod Kapamilya Foundation, Inc.</span></td>
                        <td align="left"><span class="current">ABS-CBN Foundation Bldg., Mother Ignacia St., Brgy. South Triangle, Diliman, Quezon City</span></td>
                        <td align="center"><span class="current">Ms. Clarissa G. Ocampo / Ms. Maribel Vergel de Dios</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=1931">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="#DADADA">
                        <td><span class="current">Adamson-Ozanam Educational Institutions, Inc.</span></td>
                        <td align="left"><span class="current">900 San Marcelino Street, Ermita, Manila</span></td>
                        <td align="center"><span class="current">Fr. Gregorio Bañaga, Jr., C.M. / Atty. Agnes Rivera</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=3190">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="">
                        <td><span class="current">AES Philippine Power Foundation, Inc.</span></td>
                        <td align="left"><span class="current">12/F Picadilly Star Building, 4th Ave. Cor. 27th St., Bonifacio Global City, Taguig City</span></td>
                        <td align="center"><span class="current">Ms. Cynthia V. Pantonal</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=3099">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="#DADADA">
                        <td><span class="current">AGAPP Foundation, Inc.</span></td>
                        <td align="left"><span class="current">Unit 300 3/F Regalia Tower A, 150 P. Tuazon Avenue, Cubao, Quezon City</span></td>
                        <td align="center"><span class="current">Ms. Aurora Pinky Aquino-Abelleda / Ms. Pier Angela S. Caguioa</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=1933">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="">
                        <td><span class="current">AIM Scientific Research Foundation, Inc.</span></td>
                        <td align="left"><span class="current">2/F Eugenio Lopez Foundation Bldg., 123 Paseo de Roxas, 1260 Makati City</span></td>
                        <td align="center"><span class="current">Dr. Steven J. DeKrey / Ms. Marvee Celi-Bonoan</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=1935">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="#DADADA">
                        <td><span class="current">Alliance Graduate School (formerlyAlliance Biblical Seminary)</span></td>
                        <td align="left"><span class="current">101 Dangay Street, Veterans Village, Project 7, Quezon City</span></td>
                        <td align="center"><span class="current">Dr. Jonathan Exiomo / Mr. Joselito R. Zafra</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=1936">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="">
                        <td><span class="current">Alliance Graduate School, Inc.</span></td>
                        <td align="left"><span class="current">101 Dangay St., Veterans Village, Project 7, Quezon City</span></td>
                        <td align="center"><span class="current">Dr. Jonathan V. Exiomo</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=3243">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="#DADADA">
                        <td><span class="current">Alouette Foundation of the Philippines, Inc.</span></td>
                        <td align="left"><span class="current">755 E. Cornejo Street, Malibay, 1300 Pasay City</span></td>
                        <td align="center"><span class="current">Mr. Abraham P. Mang-usan / Ms. Fatima F. Domenden</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=3266">NGO Details</a></span>
                        </td>
                        </tr>
                    <tr bgcolor="">
                        <td><span class="current">Alumni Association of Xavier School, Inc. </span></td>
                        <td align="left"><span class="current">64 Xavier Street, Greenhills West, San Juan, Metro Manila</span></td>
                        <td align="center"><span class="current">Atty. Ramon V. Lapez, Jr. / Mr. Jovito G. Ong</span></td>
                        <td align="center"><span class="current"> 
                                <a href="view-ngodetails.php?itemId=1937">NGO Details</a></span>
                        </td>
                        </tr>        <tr>
          <td bgcolor="#DADADA" valign="middle">&nbsp;</td>
          <td align="left" bgcolor="#DADADA">&nbsp;</td>
          <td align="center" bgcolor="#DADADA">&nbsp;</td>
          <td align="center" bgcolor="#DADADA">&nbsp;</td>
        </tr>
       
    </tbody></table>
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
