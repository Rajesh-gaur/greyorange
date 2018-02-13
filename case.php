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
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet"> 

</head>
<body>
 <?php include('include/header.php');?>
  
  
  <div class="clear-fix"></div>
	<section class="inner-banner">
	  <div class="container">
	   <div class="inner-head">	       
		   <nav aria-label="breadcrumb">
		   <h1>Case Studies</h1>
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page"> Case Study</li>
			  </ol>
			</nav>
		</div>		
	    <img src="images/case-study-banner.jpg" alt="case" class="img-fluid"/>
	  </div>
	</section>


  <section id="case-study" class="case-study-section">
      <div class="container">
        <br/><br/>
        <div class="row">
           
          <div class="case-block col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="images/case2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>3PL DC for Global Leader</h4>
                  <span><a href="case-detail.php">Storage exclusions to improve fulfillment accuracy</a></span>
                </div>
              </div>
            </div>
          </div>

          <div class="case-block col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="images/case3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Omni-Channel Fulfillment</h4>
                  <span><a href="case-detail.php">Unified order picking and consolidation model for e-commerce, in-store pickup and store orders</a></span>                  
                </div>
              </div>
            </div>
          </div>
          <div class="case-block col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="images/case4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Parcel Sortation</h4>
                  <span><a href="case-detail.php">Delivering higher throughput parcel sortation for 3PL/ E-commerce/ Parcel Courier</a></span>                  
                </div>
              </div>
            </div>
          </div> 
		  
            <div class="case-block col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="images/case5.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Order Consolidation</h4>
                  <span><a href="case-detail.php">Unified order picking and consolidation model for e-commerce, in-store pickup and store orders</a></span>                  
                </div>
              </div>
            </div>
          </div>
     
         
        </div><!--row-->
      </div><!--container-->
	
       <?php include('include/key-customer.php');?>	  
  </section><!-- #case-study -->



   
   
 <?php include('include/footer.php');?>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>

  <script src="js/main.js"></script>
 

<script type="text/javascript">
 $(document).ready(function () {
	 $('#sidebarCollapse').on('click', function () {
		 $('#sidebar').toggleClass('active');
	 });
 });
</script>
  <script>
    $('document').ready(function(){
	 $('#header').addClass('inner-header');
     $('body').addClass('inner-page'); 
	});

	
  </script>
  
  
</body>
</html>
