<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Greyorange</title>
  
  <meta content="width=device-width, initial-scale=1.0" name="viewport">  
  <meta content="" name="keywords">
  <meta content="" name="description">
 <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
 
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
   
</head>
<body>
<style>
#dvLoading
{
   background:#fff url('images/loading.gif') no-repeat center center;
   height: 100%;
   width: 100%;
   position: fixed;
   z-index: 999999;
}
</style>
   <div id="dvLoading"></div>
<?php include('include/header.php');?>

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="">		
        <div class="carousel-inner">
		
          <div class="carousel-item active" style="background-color:#000;">
            <div class="carousel-container">
              <div class="carousel-content">

				
				<div class="video-container">
				 <video autoplay muted loop id="myVideo">
				  <source src="images/greyorange.mp4" type="video/mp4">
				 </video>
				</div>
				
				<div class="banner-content">
					<h2>Enabling Fully Automated Supply Chain</h2>
					<p>with intelligent order fulfillment systems</p> 		
				
              
				<a href="javascript:;" class="link-preview btn-get-started open-popup" >Watch Video</a>
				<div id="video-home-box" class="popup-home" style="display:none;">
				   <div class="watch-video col-sm-12 col-md-7 offset-md-3">
					<div class="cancel close-popup" >X</div>
					  <iframe id="playerID" width="100%" height="100%" src="https://www.youtube.com/embed/bnPn5qL1X5Q" frameborder="0" allowfullscreen>
					   </iframe>
				   </div>
				</div>	
				</div>
	        </div>
		</div>
	  </div>  
	</div>	
		
		<div class="down-page"><a href="#about" class="scrollto"><img src="images/down-arrow.png" alt="next" /></a></div>
		
      </div>
	  
	 <!--scroll-circle--> 
	   <div class="pager">
	    <ul id="pagers">
	      <li class="active"><a href="#intro" class="scrollto"><i class="fa fa-circle"></i></a></li>
	     <li> <a href="#about" class="scrollto"><i class="fa fa-circle"></i></a></li>
	     <li>  <a href="#fulfilment" class="scrollto"><i class="fa fa-circle"></i></a></li>
	     <li>  <a href="#greymetter" class="scrollto"><i class="fa fa-circle"></i></a></li>
	      <li> <a href="#case-study" class="scrollto"><i class="fa fa-circle"></i></a></li>
	     <li>  <a href="#news" class="scrollto"><i class="fa fa-circle"></i></a></li>
		 </ul>
	   </div>
	   
    </div>
  </section><!-- #intro -->

  
  

   <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Leading Next Gen Automation in Supply Chain</h3>
          <p>GreyOrange designs, manufactures, and deploys advanced robotic systems for<br/>
automation in warehouses, fulfillment centers and distribution centers</p>
        </header>

        <div class="row about-cols">
		<div class="col-md-8 offset-md-2 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="images/recognitions.png" alt="" class="img-fluid">              
              </div>			  
              <div class="offset-md-2 col-sm-8 about-btns">
			    <a href="about-company.php" class="btn know-btn">Know More</a>			  
			    <a href="contact.php" class="btn connect-btn">Connect with us</a>
              </div>			  
            </div>
          </div>
        </div>
      </div>
    </section><!-- #about -->

	<section id="fulfilment">
	   <div id="ful-slide1" class="carousel slide" data-ride="carousel">
		  <ul class="carousel-indicators">
			<li data-target="#ful-slide1" data-slide-to="0" class="active"></li>
			<li data-target="#ful-slide1" data-slide-to="1"></li>
		  </ul>
		  <div class="carousel-inner">
			
			<div class="carousel-item active">
			  <a href="butler.php"><img src="images/banner-1.jpg" alt="grey orange" class="img-fluid"></a>
			  <!--<div class="carousel-caption">
				<h2>Butler</h2>
				<h3>Decision Science Driven</h3>
				<p>Goods-to-Person system</p>
				<p>  <a href="butler.php" class="btn know-btn">Know More</a>	</p>
			  </div> -->  
			</div>
			<div class="carousel-item">
			   <a href="sorter.php"><img src="images/banner-2.jpg" alt="grey orange" class="img-fluid"></a>
			  <!--<div class="carousel-caption">
				<h2>Sorter</h2>
				<h3>Need-Based and Cost Optimized</h3>
				<p>Sortation Product</p>
				<p>  <a href="sorter.php" class="btn know-btn">Know More</a>	</p>
			  </div> -->    
			</div>
		  </div>
		 
		</div>

	</section><!--fulfilment-->
	
	<section id="greymetter" class="wow fadeIn">	
	   <div class="grey-bg">
		<div class="grey-titles">
		  <div class="container"><h1>The next-gen AI driven software platform</h1></div>
		</div> 
		  <div class="container text-center">  
			<h3>Industry Engine | Core Operating Platform | Execution Engine</h3>
			<a class="cta-btn" href="greymatter.php">Know More</a>
		  </div>
		</div>  
	</section><!--#greymetter-->

 

  <section id="case-study" class="home-case-study">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Case Studies</h3>
          <p>Across The Globe</p>
        </div>

        <div class="row">

          <div class="case-block col-lg-4 col-md-6 wow fadeInUp">
            <div class="member imagebox">
               <a href="ecommerce-fulfillment.php"><img src="images/ecommerce-fulfill.jpg" class="img-fluid" alt="">
			  <span class="overlay"></span></a>   
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Vertical Ecommerce Fulfillment</h4>
                  <span><a href="ecommerce-fulfillment.php">Japan’s largest home furnishing chain (400 stores),
fulfilling online orders from over 10,000 SKUs</a></span> 
                  <div class="case-home-readmore"><a href="ecommerce-fulfillment.php">Read More</a></div>  
                </div>
              </div>
            </div>
          </div>
           
          <div class="case-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member imagebox">
              <a href="order-consolidation.php"><img src="images/order-consolidation.jpg" class="img-fluid" alt="">
			   <span class="overlay"></span></a>   
              <div class="member-info">
                <div class="member-info-content">
                 <h4>Order Consolidation</h4>
                  <span><a href="order-consolidation.php">Delivered
higher throughput order consolidation for vertical e-commerce.</a></span>
                    <div class="case-home-readmore"><a href="order-consolidation.php">Read More</a></div>    
                </div>
              </div>
            </div>
          </div>

          <div class="case-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member imagebox">
              <a href="parcel-sortation.php"><img src="images/case1.jpg" class="img-fluid" alt="">
			   <span class="overlay"></span> </a>  
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Parcel Sortation</h4>
                  <span><a href="parcel-sortation.php">Delivered higher throughput parcel sortation for 3PL/E-Commerce/Parcel Courier</a></span>
                  <div class="case-home-readmore"><a href="parcel-sortation.php">Read More</a></div> 				  
                </div>
              </div>
            </div>
          </div>  
     
        <div class="col-sm-12 text-center"><a class="cta-btn btn" href="case.php">View More</a></div>
		  
        </div><!--row-->
      </div><!--container-->

   <?php include('include/key-customer.php');?>
  </section><!-- #case-study -->


  <section id="news">
     <div class="container">
	   <div class="row">
	    <div class="col-sm-6 col-md-4">
	      <div class="news-container">
		<div id="news-cousial" class="ht-tm-element carousel slide" data-ride="carousel">
		   <div class="row"> 
			<div class="col-sm-8 col-md-9"><h2>News</h2></div>		
		    <div class="col-sm-4 col-md-3 cousial-btn">
				<a class="carousel-control-prev" href="#news-cousial" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a> 
			  
				<a class="carousel-control-next" href="#news-cousial" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			 </div>
			</div> 
			 
			<div class="carousel-inner" role="listbox">
			  <div class="carousel-item">
				<img class="img-thumbnail d-block img-fluid" src="images/gallery.jpg" alt="First slide">
				 <div class="news-block">
				   <h3>GreyOrange™ launches next-gen AI, GreyMatter™</h3>
				    <div class="date"><strong>TOKYO, 6 Dec 2017</strong></div>
				   <p>Automation and robotics company, GreyOrange, announced the release of its next-generation software platform, 
				   GreyMatterTM, at the launch of the latest warehouse of the Nitori Holdings Group (TSE 9843).</p>
				 </div>  
			  </div>
			  <div class="carousel-item active">
				<img class="img-thumbnail d-block img-fluid" src="images/gallery.jpg" alt="Second slide">
				 <div class="news-block">
				   <h3>GreyOrange™ launches next-gen AI, GreyMatter™</h3>
				   <div class="date"><strong>TOKYO, 6 Dec 2017</strong></div>
				   <p>Automation and robotics company, GreyOrange, announced the release of its next-generation software platform, 
				   GreyMatterTM, at the launch of the latest warehouse of the Nitori Holdings Group (TSE 9843).</p>
				 </div> 				
			  </div>
			   <div class="view-all-news"><a href="#">View All News</a></div>
			</div>
			
		 </div><!--#news-cousial-->
		 </div><!--row-->
		</div><!--col-sm-6 col-md-4-->
		
		 <div class="events col-sm-6 col-md-8">		 
		 <h2>Events</h2>
		     <img class="img-thumbnail img-fluid" src="images/events.jpg" alt="Third slide">
			 <div class="row events-block">
			  <div class="col-sm-9 col-md-9">
			    <div class="event-block">
				   <h3>Indonesia Transport Supply Chain & Logistics</h3>
				  <div class="date"><strong>10-12 October 2017</strong></div>
				   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				   Morbi tincidunt augue vitae eros facilisis, ac auctor justo imperdiet.</p>
			   </div>
			   </div>
			    <div class="event-address col-sm-3 col-md-3">
				  <p>Booth B1,<br/> Jakarta International Expo Kemayoran, Indonesia</p>
                  <div class="calender-add"><a href="#"><i class="fa fa-plus-circle"></i> Add to Calendar</a></div>
				</div>			   
			 </div><!--row events-block--> 		 
		    <div class="view-all-news"><a href="events.php">View All News</a></div>
		 </div><!--events-->
		
	   </div><!--row--> 		
	 </div><!--container--> 		
   </section><!--#news-->   
   
  <?php include('include/footer.php');?>  
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="js/main.js"></script>
  <script> 
	var lastId,
		topMenu = $("#pagers"),
		topMenuHeight = topMenu.outerHeight()+0,
		menuItems = topMenu.find("a"),
		scrollItems = menuItems.map(function(){
		  var item = $($(this).attr("href"));
		  if (item.length) { return item; }
		});
	$(window).scroll(function(){
	   var fromTop = $(this).scrollTop()+topMenuHeight;
	   var cur = scrollItems.map(function(){
		 if ($(this).offset().top < fromTop)
		   return this;
	   });
	   cur = cur[cur.length-1];
	   var id = cur && cur.length ? cur[0].id : "";   
	   if (lastId !== id) {
		   lastId = id;
		   menuItems
			 .parent().removeClass("active")
			 .end().filter("[href='#"+id+"']").parent().addClass("active");
	   }                   
	});
	
	$(document).ready(function () {
		 $('#sidebarCollapse').on('click', function () {
			 $('#sidebar').toggleClass('active');
			 
		 });
	 });


</script>


<script type="text/javascript">
//video popup code here 
var src = $('#video-home-box').children('iframe').attr('src');
$('.open-popup').click(function(e) {
    e.preventDefault();
    var videoURL = $('#playerID').prop('src');
    videoURL += "?autoplay=1";
    $('#playerID').prop('src',videoURL);
    $('.popup-home').fadeIn(200);
});

$('.close-popup').click(function(e) {
    e.preventDefault();
    var videoURL = $('#playerID').prop('src');
    videoURL = videoURL.replace("?autoplay=1", "");
    $('#playerID').prop('src','');
    $('#playerID').prop('src',videoURL);
    $('.popup-home').fadeOut(300);
});
	$('.btn-get-started').click(function(){
	  $('.down-page').hide();	
	});
	$('#video-home-box .cancel').click(function(){
		 $('.down-page').show();		
	});

	
	
</script>
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
jQuery(window).load(function(){
  jQuery('#dvLoading').fadeOut(2000);
});



</script>
</body>
</html>
