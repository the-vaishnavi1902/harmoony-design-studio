<?php
include('connection.php');
if(isset($_POST['Submit']))

{
//getting the post values
$name=$_POST['name'];
$email_address=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


//query for data insertion
$query=mysqli_query($db,"insert into contact_form(NAME,EMAIL_ADDRESS,SUBJECT,MESSAGE)value('$name','$email_address','$subject','$message')");
	if($query)
	{
	echo"<script>alert('You have successfully entered the data');</script>";
	echo"<script type='text/javascript'>document.location='index.php';</script>";
	}
	else
	{
	echo"<script>alert('Something went wrong. Please try again');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="zxx">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Interior & Furniture Multipurpose Html Template">
<meta name="keywords" content="Interior & Furniture Multipurpose Html Template">
<meta name="author" content="">
<title>interior &amp; furniture</title>
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
<!--css-->
<link href="assets/css/all-css.css" rel="stylesheet" type="text/css">
<link href="assets/css/set1.css" rel="stylesheet" type="text/css">
<link href="../Studio-Ux-Interior-Design/assets/css/bgvideo.css">
<!--css-->

  <style>
    /* Additional custom styles can be added here */
    /* Ensure images are responsive */
    img {
      max-width: 100%;
      height: auto;
    }
	
	
	@import url('https://fonts.googleapis.com/css2?family=Freestyle+Script&display=swap');

        .freestyle-text {
            font-family: 'Freestyle Script', cursive;
            font-size: 24px;
        }
		.modal-margin-top
		{
		margin-top:20px;
		}
  </style>
  
</head>
<body id="page-top">
<div id="preloader"></div>
<!--navbar-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#page-top"><img src="assets/img/FILN.png" alt="logo" title="" /></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#Projects">Projects</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#blog">Gallery</a></li>
        <li><a style="background:none" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--<nav id="mainNav" class="navbar navbar-default navbar-fixed-top d-flex">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="assets/img/FILN.png" alt="logo" title="" /></a> </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a class="page-scroll" href="#about">ABOUT US</a></li>
        <li><a class="page-scroll" href="#Projects">Projects</a></li>
        <li> <a class="page-scroll" href="#services">Services</a></li>
        <li><a class="page-scroll" href="#blog" >Gallery</a></li>
        <li><a class="page-scroll" style="background:none" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>-->
<!--navbar-->
<!--SLIDER-->
<header id="myCarousel" class="carousel slide">
  <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading">Harm<img src="assets/img/sign.png" style="height:150px;">ny <span>Design</span> Studio</h1>
      <h2><center><b>Transforming Spaces Harmonically</b></center></h2>
      <center><h3>Blend of creative journey from two dimension to three dimension makeup the harmony design studio.</h3></center>
      <center><p><h2>"No Culture Can Survive if Exclusive"</h2></p></center>
    </div>
  </div>

  <div id="bg-video">
    <video part="video" autoplay muted loop src="vdo/bgvideo.mp4" preload="metadata"></video>
  </div>
</header>
<!--<header id="myCarousel" class="carousel slide d-flex ">
  <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading" class="wow slideInDown">Harm<img src="assets/img/filo.png" style="height:150px;">ny <span>Design</span> Studio</h1>
      <u><h2><center><b>Transforming Spaces Harmonically</b></center></h2></u>
	  <center><h3>Blend of creative journey from two dimension to three dimension makeup the harmoony design studio.</h3></center>
     <center><p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"><center><h2>"No Culture Can Survive if Exclusive"</center></h2></p>
	  
      </div>
  </div>-->
  <!--Background-->
 
  <!--<div id="bg-video" class="d-flex" >
    <video  part="video" autoplay muted loop src="vdo/bgvideo.mp4" preload="metadata"></video>
  </div>
</header>-->
  <!-- Controls -->
<!--SLIDER-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><u><b>Interior Design</b></u></h4>
      </div>
      <div class="modal-body">
        <div class="row">
		<div class="freestyle-text"><font size="+4" color="#33CCFF"><center><u><b>
        Residential</b></u></center></font></div>
		
          <div class="col-md-4 col-sm-4 text-center"><img src="assets/img/view44.jpg" alt="" title="" class="img-responsive"></div>
		   <div class="col-md-4 col-sm-4"><img src="assets/img/view19.jpg" alt="" title="" class="img-responsive"></div>
		   
		    <div class="col-md-4 col-sm-4"><img src="assets/img/view101.jpg" alt="" title="" class="img-responsive"></div>
		   </div>
		   <hr>
		   <div class="row">
		  <div class="freestyle-text"><font size="+4" color="#33CCFF"><center><u><b>
        Commercial</b></u></center></font></div>
          <div class="col-md-4 col-sm-4 text-center"><img src="assets/img/acd.jpg" alt="" title="" class="img-responsive"></div>
		   <div class="col-md-4 col-sm-4"><img src="assets/img/view01.jpg" alt="" title="" class="img-responsive"></div>
		    <div class="col-md-4 col-sm-4"><img src="assets/img/view05.jpg" alt="" title="" class="img-responsive"></div>
		   
		   </div>
		  		<!--<font size="+1"><b>INTERIOR SERVICES: </b></font>
   <br>*False ceiling work
  <br> *Civil Work
  <br> *Fabrication Work
  <br> *Electric Work
   <br>*Carpentary Work
   <br>*Painting Work
  <br>*Plumbing Work
 <br>  *Consultation and Supervision
            <p>Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. With a keen eye for detail and a creative flair, an interior designer is someone who plans, researches, coordinates, and manages such enhancement projects. <br> Interior design is a multifaceted profession that includes conceptual development, space planning, site inspections, programming, research, communicating with the stakeholders of a project, construction management, and execution of the design. </p>-->
           
          
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title"><u><b>Architectural Plans</b></u></h4>
      </div>
      <div class="modal-body">
        <div class="row">
		<div class="freestyle-text"><font size="+4" color="#33CCFF"><center><u><b>
        Residential</b></u></center></font></div>
          <div class="col-md-4 col-sm-4 text-center"><img src="assets/img/arch4.jpg" alt="" title="" class="img-responsive"></div>
		   <div class="col-md-4 col-sm-4"><img src="assets/img/arch5.jpg" alt="" title="" class="img-responsive"></div>
		   
		    <div class="col-md-4 col-sm-4"><img src="assets/img/arch6.jpg" alt="" title="" class="img-responsive"></div>
		   </div>
		   <hr>
		   <div class="row">
		   <div class="freestyle-text"><font size="+4" color="#33CCFF"><center><u><b>
        Commercial</b></u></center></font></div>
          <div class="col-md-4 col-sm-4 text-center"><img src="assets/img/arch1.jpg" alt="" title="" class="img-responsive"></div>
		   <div class="col-md-4 col-sm-4"><img src="assets/img/arch2.jpg" alt="" title="" class="img-responsive"></div>
		    <div class="col-md-4 col-sm-4"><img src="assets/img/arch1.jpg" alt="" title="" class="img-responsive"></div>
		   
		   </div>
		   </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!--<h4 class="modal-title">Commercial Design</h4>-->
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><!--<img src="assets/img/com.jpeg" alt="" title="" class="img-responsive">--></div>
          <div class="col-md-5 col-sm-5">
            <!--<p><font size="+1">Commercial spaces must cater to a wide range of needs, including employee productivity, customer satisfaction, and brand identity. Therefore, a well-designed commercial space can have a significant impact on the success of a business. In this article, we will explore the importance of commercial interior design, its essential elements, and the design process involved in creating a functional and aesthetically pleasing space.</font></p>
<p align="left"><font size="+1"><img src="assets/img/icon1.png"><b><u>&nbsp;Here are some of the primary benefits of commercial interior design:</u></b></font></p>-->
<!--<p align="left"><font size="+1">1.Enhances Employee Productivity</font></p>
<p align="left"><font size="+1">2.Attracts and Retains Customers</font></p>
<p align="left"><font size="+1">3.Increases Brand Identity</font></p>
<p align="left"><font size="+1">4.Optimizes Space Usage</font></p>
<p><font size="+1">With the right commercial interior design, businesses can create a competitive advantage, enhance their brand identity, and increase their profitability.</font></p>-->
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal11" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <marquee behavior="scroll" direction="left"><div class="freestyle-text"><font size="+3" color="#33CCFF">Fusion Creations is now Harmoony Design Studio.</font> </marquee> </div>
      </div>
      <div class="modal-body">
       
		 <center><div id="bg-video">
    <video part="video" autoplay muted loop src="vdo/1.mp4" preload="metadata"></video>
  </div></center>
         
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal12" class="modal fade modal-margin-top" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <marquee behavior="scroll" direction="left"><div class="freestyle-text"> <font size="+3" color="#33CCFF">Fusion Creations is now Harmoony Design Studio. </marquee></font> </div>
      </div>
      <div class="modal-body">
       
		 <center><div id="bg-video">
    <video part="video" autoplay muted loop src="vdo/2.mp4" preload="metadata"></video>
  </div></center>
         
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal13" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <marquee behavior="scroll" direction="left"><div class="freestyle-text"> <font size="+3" color="#33CCFF">Fusion Creations is now Harmoony Design Studio. </font></marquee></div> 
      </div>
      <div class="modal-body">
       
		 <center><div id="bg-video">
    <video part="video" autoplay muted loop src="vdo/4.mp4" preload="metadata"></video>
  </div></center>
         
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal14" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <marquee behavior="scroll" direction="left"><div class="freestyle-text"> <font size="+3" color="#33CCFF">Fusion Creations is now Harmoony Design Studio.</font> </marquee></div> 
      </div>
      <div class="modal-body">
       
		 <center><div id="bg-video">
    <video part="video" autoplay muted loop src="vdo/4.mp4" preload="metadata"></video>
  </div></center>
         
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal15" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <marquee behavior="scroll" direction="left"><div class="freestyle-text"><font size="+3" color="#33CCFF"> Fusion Creations is now Harmoony Design Studio. </font></marquee> </div>
      </div>
      <div class="modal-body">
       
		 <center><div id="bg-video">
    <video part="video" autoplay muted loop src="vdo/5.mp4" preload="metadata"></video>
  </div></center>
         
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal16" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <marquee behavior="scroll" direction="left"> <div class="freestyle-text"><font size="+3" color="#33CCFF">Fusion Creations is now Harmoony Design Studio.</font> </marquee></div> 
      </div>
      <div class="modal-body">
       
		 <center><div id="bg-video">
    <video part="video" autoplay muted loop src="vdo/6.mp4" preload="metadata"></video>
  </div></center>
         
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">
     Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Architectural Services </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/extmain.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
       *CONCEPTUAL DESIGNING AND PLANNING.  
     <br> *FLOOR PLANS.  
      <br>*FURNITURE LAYOUT.  
      <br>*WORKING DRAWINGS.  
      <br>*SUBMISSION DRAWING FOR SANCTIONING.  
     <br> *CONSULTATION AND SUPERVISION. 
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog">
     Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Exterior Services </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/sss.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
       <br>*CONSULTATION AND SUPERVISION.  
      <br>*WORKING DRAWINGS.  
      <br>*ELEVATION DRAWINGS.  
     <br> *3D EXTERIOR VIEWS.  
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>


<div id="myModal7" class="modal fade" role="dialog">
  <div class="modal-dialog">
     Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Interior Work Services </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/view30.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
       *FURNITURE LAYOUT.  
     <br> *3D INTERIOR VIEWS.  
     <br> *2D WORKING DRAWINGS.  
     <br> *FALSE CEILING WORK.  
    <br>  *FABRICATION WORK.  
     <br> *ELECTRIC WORK.  
     <br> *CARPENTRY WORK.  
      <br>*PAINTING WORK.  
      <br>*PLUMBING WORK.  
     <br> *CONSULTATION AND SUPERVISION. 
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!--<main>-->
  <!--about-us-->
  <section class="what-we" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center" >
          <h2 class="wow fadeInDown"> About Us</h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay=".5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/view49.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Interior Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6><font size="+2">I) INTERIOR DESIGN - </font></h6>
                  <p><strong><font size="+1">A . 2D - Layouts </font></strong>
				  <br><strong><font size="+1">B . 3D - Layouts :- </font></strong> 
				<br><font size="+1"> <b>INTERIOR SERVICES : </b></font>
<br><font size="-1"> *False Ceiling Work
<br>*Civil Work
<br>*Fabrication Work
<br>*Electric Work
<br>*Carpentary Work
<br>*Painting Work
<br>*Plumbing Work
<br>*Consultation and Supervision</font> <!--<font size="+1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1.Residential - </b></font>Resedential design is the process of planning and developing a new home.It can also be defined as the art of furnishing, and arranging the interior and exterior of a building.
				  <font size="+1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>2.Commercial - </b></font>Commercial spaces must cater to a wide range of needs, including employee productivity, customer satisfaction, and brand identity.A well-designed commercial space can have a significant impact on the success of a business.--></p><!--Resedential design is the process of planning and developing a new home.It can also be defined as the art of decorating, furnishing, and arranging the interior and exterior of a building.In essence, residential design transforms living spaces into personalized sanctuaries, reflecting the inhabitant's personalities, tastes, and lifestyles.Residential design is a fancy way of saying home design.-->
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay="1s">
          <!--<div class="our-blog-item">
            <div class="blog-thumb"><img src="assets/img/exde.jpg"  alt="" title="" class="img-responsive" /></div>
            <h6>Architectural Plans</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                   <h6><font size="+2">II) ARCHITECTURAL  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANS- </font></h6>
                   <p><strong><font size="+1">A . 2D - Layouts </font></strong>
				  <br><strong><font size="+1">B . Exterior 3D Work :- </font></strong><img src="assets/img/Untitledo-removebg-preview.png"> </p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal2">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>-->
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay="1s">
          <div class="our-blog-item">
            <div class="blog-thumb"><img src="assets/img/krushi_vibhag.jpg"  alt="" title="" class="img-responsive" /></div>
            <h6>Architectural Plans</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                   <h6><font size="+2">II) ARCHITECTURAL PLANS - </font></h6>
                   <p><strong><font size="+1">A . 2D - Layouts </font></strong>
				  <br><strong><font size="+1">B . Exterior 3D Work :- </font></strong>
				  <br><font size="+1"> <b>Architectural Services : </b></font>
				<font size="-1">   
     <br> *Consultation and Supervision. </font>
	 
	 
				 <!--<font size="+1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1.Residential - </b></font>Resedential design is the process of planning and developing a new home.It can also be defined as the art of decorating, furnishing, and arranging the interior and exterior of a building.
				  <font size="+1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>2.Commercial - </b></font>Commercial spaces must cater to a wide range of needs, including employee productivity, customer satisfaction, and brand identity. Therefore, a well-designed commercial space can have a significant impact on the success of a business.--></p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal2">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--about-us-->
 <!--Projects-->
<section class="no-padding" id="Projects">
  <div class="container-fluid">
  <div class="row no-gutter popup-gallery">
  <center><br><img src="assets/img/projects1.png"></center>
   <br><p align="center"><font color="#CC33FF"><b><u><marquee behavior="scroll" bgcolor="#FFFFFF" direction="left" scrollamount="8" height="40px"> Fusion Creations is now Harmoony Design Studio. </marquee></u></b></font></p>
  
	    <div class="col-lg-4 col-sm-6 wow fadeIn">
		
          <div class="grid">
		 
            <figure class="effect-ruby"><center><div id="bg-video">
    
  </div></center> <img src="assets/img/portfolio/fullsize/view50.jpg" alt="" title="" />
              <figcaption>
			  
                <h2><b><u>New Project</u></b></h2>
                <a data-toggle="modal" data-target="#myModal11"> New Project </a> </figcaption>
            </figure>
          </div>
        </div>
		
        <div class="col-lg-4 col-sm-6 wow fadeIn" >
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/view43.jpg" alt="" title="" />
              <figcaption>
                <h2><b><u>New Project</u></b></h2>
                <a data-toggle="modal" data-target="#myModal12"> New Project </a> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn" >
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/view31.jpg" alt="" title="" />
              <figcaption>
               <h2><b><u>New Project</u></b></h2>
                <a data-toggle="modal" data-target="#myModal13"> New Project </a> </figcaption>
            </figure>
          </div>
        </div>
		
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <br><figure class="effect-ruby"> <img src="assets/img/View 011.jpg" alt="" title="" />
              <figcaption>
                <h2><b><u>Renew Project</u></b></h2>
                <a data-toggle="modal" data-target="#myModal14"> Renew Project </a> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <br><figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/ex.jpeg" alt="" title="" />
              <figcaption>
                <h2><b><u>Renew Project</u></b></h2>
                <a data-toggle="modal" data-target="#myModal15"> Renew Project </a> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <br><figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/view12.jpg" alt="" title="" />
              <figcaption>
                <h2><b><u>Renew Project</u></b></h2>
                <a data-toggle="modal" data-target="#myModal16"> Renew Project </a> </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Projects-->
  <!--services-->
  <section id="services">
    <div class="container">
      <div class="heading ">
        <div class="row">
          <div class="text-center col-sm-10 services1 col-center">
            <h3 class="wow fadeInDown">Services</h3>
            <p class="wow fadeInDown">We aim at giving vision to a 2D image by giving client the overview
			and feel of the space be it interior or exterior. 3D creates the masses, colours, textures, lights and shadows to give you the exact ambience.</p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeIn">
            <div class="service-info">
              <div class="grid">
                <figure class="effect-milo"> <img src="assets/img/extmain.jpg" class="img-responsive" alt="" title="" />
                  <figcaption>
                    
                    <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>
                </figure>
				<font color="#FFFFFF" size="+1"><br><b>Architectural Services</b></font>
              </div>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"><img src="assets/img/MRUDULA BHATKAR 1.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  
                  <a data-toggle="modal" data-target="#myModal6">View more</a> </figcaption>
              </figure>
			  <font color="#FFFFFF" size="+1"><br><b>Exterior Services</b></font>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/view30.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  
                  <a data-toggle="modal" data-target="#myModal7">View more</a> </figcaption>
              </figure>
			  <font color="#FFFFFF" size="+1"><br><b>Interior Work Services</b></font>
            </div>
          </div>
         <!-- <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"><img src="assets/img/dd.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                 
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/ee.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">

            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/ff.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>
              </figure>
            </div>
          </div>-->
        </div>
      </div>
    </div>
  </section>
  <!--services-->
  <!--blog-->
   <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-10 col-center">
          <h2 class="wow fadeInDown">Gallery</h2>
          <p class="wow fadeInDown"></p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img class="img-responsive" src="assets/img/R.gif" alt="" title="" />
		
		
              <div class="post-meta"></div>
              
            </div>
            <div class="entry-header">
              <h3></h3>
              </div>
            <div class="entry-content">
              
              <p></p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img class="img-responsive" src="assets/img/v.gif" alt="" title="" />
              <div class="post-meta"></div>
             
            </div>
            <div class="entry-header">
              <h3></h3>
              </div>
            <div class="entry-content">
              
              <p></p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img class="img-responsive" src="assets/img/giphy.gif" alt="" title="" />
              <div class="post-meta"></div>
              
            </div>
            <div class="entry-header">
              <h3></h3>
              </div>
            <div class="entry-content">
              
              <p></p>
            </div>
          </div>
  </section>
  <!--blog-->
  <!--contact-->
  <section id="contact" class="contact-us">
    <div class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-10 col-center">
            <h2 class="wow fadeInDown"> Contact Us</h2>
            
          </div>
        </div>
        <div class="contact-form" >
          <div class="row">
            <div class="col-sm-6 wow fadeIn">
              <form id="main-contact-form" name="contact-form" method="post" action="index.php">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="name" class="form-control" placeholder="Name"  type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="email" class="form-control" placeholder="Email Address" type="email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input name="subject" class="form-control" placeholder="Contact No." required  type="text">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                </div>
                <div>
                  <button name="Submit" type="Submit" class="submit-bt2">Send Now </button>
                </div>
              </form>
            </div>
            <div class="col-sm-6 wow fadeIn">
              <div class="contact-info">
                
                <br>
                <ul class="address">
                <li><i class="fa fa-map-marker"></i><span>Address : </span> Pune</li>
                  
                  <li><i class="fa fa-envelope"></i><span>Email : </span><a href="mailto:contact@StudioUX.com"> &nbsp;harmoonydesignstudio@gmail.com</a></li>
                  
                 </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact-->
</main>
<!--main-->
<footer>
  <!--footer-div-->
  <div class="footer">
    <div class="container-fluid">
	
      <div class="col-md-8 col-sm-8 footer-c"><p style="float:left">CODE CRAFTER SERVICES</p></div>
	  
      <div class="col-md-4  col-sm-4 footer-c text-right">
        <div class="social-icons"><a href="https://www.instagram.com/harmoony_design_studio?igsh=eTRjZWJpeTA4ZzYx"><img src="assets/img/insta1.png"><!--<i class="fa fa-instagram fa-lg">--></i></a></div>
      </div>
    </div>
  </div>
  <!--footer-div-->
</footer>
<!-- jQuery -->
<script  src="assets/js/jquery-2.2.4.js"></script>
<script  src="assets/js/scrolltopcontrol.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/creative.min.js"></script>
<!-- jQuery -->
</body>


</html>
