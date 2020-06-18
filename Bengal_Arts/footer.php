	
	
	
<div class="footer_bottom">
    <div class="container">
        <div class="custom_container">
        <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="cssmenu">
                <div class="col-md-1 col-sm-1 col-xs-1 cssmenu_padding">
                    <a href="https://www.instagram.com/arts.bf/?hl=en"target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
                  <div class="col-md-1 col-sm-1 col-xs-1 cssmenu_padding">
                    <a href="https://www.facebook.com/BengalFoundationVAP/"target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                </div>
                  <div class="col-md-1 col-sm-1 col-xs-1 cssmenu_padding">
                    <a href="https://www.youtube.com/channel/UCpXzLuLD0d0MW7IxUsXFDqA"target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
                </div>
                  
				
            </div>
        </div>
            <div class="col-md-2"></div>
        <div class="col-md-4 col-sm-6">
            <div class="">
                
                    <form  id="newsletter_form" onsubmit="return validateForm()" action="newsletter.php" method="POST">
                        <div class="form-group contuct-text">
                            <p for="inputdefault" class="text-right"><a href="https://bengalarts.tumblr.com/"target="_blank">Notes</a> &nbsp; | &nbsp; <a href="#"  data-toggle="modal" data-target="#product_view">contact us</a></p>
                            <div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4>Newsletter Subscription</h4>
      </div>
      <div class="modal-body">
        <div for="message-text" class="form-control-label"style="font-weight: none;">Name</div>
        <input type="text" class="form-control" id="name" name="name" required="">
		<span class="error_form" id="name_error_message"></span>
      </div>
	  <div class="modal-body">
        <div for="message-text" class="form-control-label">Occupation</div>
        <input type="text" class="form-control" id="occupation" name="occupation" required="">
		<span class="error_form" id="occupation_error_message"></span>
      </div>
	  <div class="modal-body">
        <div for="message-text" class="form-control-label">Email Address</div>
        <input type="text" class="form-control" id="email" name="email" required="">
		<span class="error_form" id="email_error_message"></span>
      </div>
	  <div class="modal-body">
        <div for="message-text" class="form-control-label">Phone(optional)</div>
        <input type="text" class="form-control" id="phone" name="phone">
		<span class="error_form" id="phone_error_message"></span>
      </div>
	  
     <div class="modal-footer">
		<input type="submit" class="btn" name="submit" value="ok"/>
        
           
      </div>
    </div>
  </div>
</div>
<div class="text-right">
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#deleteProductModal" data-productid="3" data-productname="Product 3">Sign up for our newsletter</button>
</div>


<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span aria-hidden="true">&times;</span></a>
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Contact Us</h3>
						<div style="width:200px;margin-bottom:41px;">
                        Bengal Practice Studio, House 60, Road 7/A, Dhanmondi
						Dhaka 1209
                    </div>
					<div style="width:200px;margin-bottom:41px;">
                        Daily Star-Bengal Arts Precinct, 64-65 Kazi Nazrul Islam Avenue Dhaka 1215
                    </div>
					<div style="width:200px;margin-bottom:36px;">
                        Bengal Gallery of Fine Arts, House 42, Road 16 (new)
						Dhanmondi, Dhaka 1215
                    </div>
					
					<div style="width:240px;margin-bottom:41px;">
                        Phone	</br>+88	09617171015 (Ext-121)</br>
								+88	0255000342	   (Ext-121)</br>
								+88	01775617796 (Mobile)

                    </div>
					<div style="width:200px;margin-bottom:46px;text-transform:none;">
                        Email		artsprogramme@bengalfoundation.org
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>





                        </div>
                     </form>
            </div>
        </div>
    </div>
        </div>
</div>
</div>

<script>
		$("#name_error_message").hide();
		$("#occupation_error_message").hide();
		$("#email_error_message").hide();
		$("#phone_error_message").hide();

		var error_name = false;
		var error_occupation = false;
		var error_email = false;
		var error_phone = false;

		$("#name").focusout(function(){
            check_name();
         });
		 $("#occupation").focusout(function(){
            check_occupation();
         });
		 $("#email").focusout(function(){
            check_email();
         });
		 $("#phone").focusout(function(){
            check_phone();
         });
		 
		 function check_name() {
            var pattern = /^[a-zA-Z ]*$/;
			var name_length = $("#name").val().length;
            var name = $("#name").val();
            if (pattern.test(name) && name !== '' && name_length <= 30) {
               $("#name_error_message").hide();
               $("#name").css("border-bottom","2px solid #34F458");
            } else {
               $("#name_error_message").html("only Characters and length 30");
               $("#name_error_message").show();
               $("#name").css("border-bottom","2px solid #F90A0A");
               error_name = true;
            }
         }
		 function check_occupation() {
            var pattern = /^[a-zA-Z]*$/;
			var occupation_length = $("#occupation").val().length;
            var occupation = $("#occupation").val();
            if (pattern.test(occupation) && occupation !== '' && occupation_length < 15) {
               $("#occupation_error_message").hide();
               $("#occupation").css("border-bottom","2px solid #34F458");
            } else {
               $("#occupation_error_message").html("Should contain only Characters");
               $("#occupation_error_message").show();
               $("#occupation").css("border-bottom","2px solid #F90A0A");
               error_occupation = true;
            }
         }
		 function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }
		 
		 function check_phone() {
            var pattern = /(0)\d{10}/;
			var phone_length = $("#phone").val().length;
            var phone = $("#phone").val();
            if (pattern.test(phone) && phone_length==11 ) {
               $("#phone_error_message").hide();
               $("#phone").css("border-bottom","2px solid #34F458");
            }else if(phone == '')
			{
				$("#phone_error_message").hide();
               $("#phone").css("border-bottom","2px solid #34F458");
			}
			else {
               $("#phone_error_message").html("only number and length 11");
               $("#phone_error_message").show();
               $("#phone").css("border-bottom","2px solid #F90A0A");
               error_phone = true;
            }
         }
		 
		 $("#newsletter_form").submit(function() {
            error_name = false;
			error_occupation = false;
            error_email = false;            
            error_phone = false;

            check_name();
            check_occupation();
            check_email();
            check_phone();

            if (error_name === false && error_occupation === false && error_email === false && error_phone === false) {               
               return true;
            } else {
               return false;
            }


         });

</script>



	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="vendor/jquery.min.js"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	    			<!-- Google CDN jQuery with fallback to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- plugin script -->
	<script src="js/jquery.mThumbnailScroller.js"></script>
	
	<script>
		(function($){
			$(window).load(function(){
				
				$("#content-1").mThumbnailScroller({
					axis:"y",
					type:"hover-precise"
				});
				
				$("#content-2").mThumbnailScroller({
					axis:"y",
					type:"click-thumb",
					theme:"buttons-out"
				});
				
				$("#content-3").mThumbnailScroller({
					type:"click-50",
					theme:"buttons-in"
				});
				
				$("#content-4").mThumbnailScroller({
					theme:"hover-classic"
				});
				
				$("#content-5").mThumbnailScroller({
					type:"hover-precise"
				});
				
				$("#content-6").mThumbnailScroller({
					type:"click-25",
				});
				
			});
		})(jQuery);
	</script>
	
	
	
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/flexslider/jquery.flexslider-min.js"></script>
	<script src="vendor/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
	<script src="vendor/gmap/gmap3.infobox.min.js"></script>
	<script src="vendor/masonry/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/masonry/masonry.pkgd.min.js"></script>
	<script src='js/calendar-angular.min.js'></script>
    <script src='js/calendar-angular-translate.js'></script>
	
    
    

    
<script src="flipbook/jquery.jbooklet.js"></script>
	<script>
    $(function() {
      $('#mybook').booklet();
    });
  </script>

    <script src="js/calendar.js"></script>
	<!-- Theme Initializer -->
	<script src="js/theme.plugins.js"></script>
	<script src="js/theme.js"></script>
           <script src="js/custom.js"></script>
    <script src="js/lightslider.js"></script>

    <script type="text/javascript">
	  jQuery(document).ready(function() {
	    	jQuery("ul#bottom-slider").lightSlider({
	        item: 4,
	        autoWidth: true,
	        slideMove: 1, // slidemove will be 1 if loop is true
	        slideMargin: 5,

	        keyPress: true,
        	controls: true,
        	prevHtml: '<span><i class="fa fa-chevron-left"></i></span>',
        	nextHtml: '<span><i class="fa fa-chevron-right"></i></span>',

	        enableTouch:true,
	        enableDrag:true,
	        pager: false,
	        loop:true
	    });
	  });
	</script>

		   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
		   	<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
						</script>
	  <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>






<!--gallery script-->

        <script>

            var images = [
                'https://unsplash.it/1300/800?image=875',
                'https://unsplash.it/1300/800?image=874',
                'https://unsplash.it/1300/800?image=872',
                'https://unsplash.it/1300/800?image=868',
                'https://unsplash.it/1300/800?image=839',
                'https://unsplash.it/1300/800?image=838'
            ];

            $(function() {
                $('#gallery7').imagesGrid({
                    images: [
                        'https://unsplash.it/660/440?image=875',
                'https://unsplash.it/660/990?image=874',
                'https://unsplash.it/660/440?image=872',
                'https://unsplash.it/750/500?image=868',
                'https://unsplash.it/660/990?image=839',
                'https://unsplash.it/660/455?image=838'
                    ],
                    align: true,
                    getViewAllText: function(imgsCount) { return 'View all' }
                });

            });

        </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 

	
	
</body>

</html>