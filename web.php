<!DOCTYPE html>
<html lang="en">
<head>
	<title>Responsive page</title>
	<meta charset="utf-8">
	<meta name="view-port" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
  	.dropdown-submenu
  	{
    	position: relative;
	}

	.dropdown-submenu .dropdown-menu
	{
    	top: 0;
    	left: 100%;
    	margin-top: -1px;
	}
	#header
  	{
  		margin-top:-10%;
  	}
	#abt
  	{
  		height:620px;
  	}
  	* 
  	{
    	box-sizing: border-box;
	}
	.img_grid
	{
	    display: -ms-flexbox; /* IE10 */
	    display: flex;
	    -ms-flex-wrap: wrap; /* IE10 */
	    flex-wrap: wrap;
	    padding: 0 4px;
	}
	/* Create four equal columns that sits next to each other */
	.column
	{
	    -ms-flex: 25%; /* IE10 */
	    flex: 25%;
	    max-width: 25%;
	    padding: 0 4px;
	}
	.column img
	{
	    margin-top: 8px;
	    vertical-align: middle;
	}

	/* Responsive layout - makes a two column-layout instead of four columns */
	@media screen and (max-width: 800px) 
	{
	    .column 
	    {
	        -ms-flex: 50%;
	        flex: 50%;
	        max-width: 50%;
	    }
	    #name
	    {

	    }
	}

	/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) 
	{
	    .column 
	    {
	        flex:100%;
	        max-width: 100%;
	    }
	}
	@media only screen and (max-width:414px)
	{
		#name
		{
			width:80%;
		}
		#email
		{
			width:80%;
		}
		#message
		{
			width:80%;
		}
	}
	footer
	{
		display:block;
		background-color: brown;
		color:white;
		height:100px;
	}
	#myBtn 
	{
	  display: none;
	  position: fixed;
	  bottom: 20px;
	  right: 30px;
	  z-index: 99;
	  font-size: 18px;
	  border: none;
	  outline: none;
	  background:#000;
	  color:#fff;
	  color: white;
	  cursor: pointer;
	  padding:9px 12px;
	  border-radius: 150px;
	}
	#contact
	{
		margin-left:2%;
	}
	.message
	{
		text-align:center;
	}

  </style>
</head>
<body>
	<!--navbar-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--Website Name-->
				<a class="navbar-brand" href="#">PHOTOGRAPHY</a>
			</div><!--navbar-header-->
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">HOME</a></li>
					  <!--dropdown navbar for photos-->
					  <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">PHOTOS<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="dropdown">
								<li><a href="#">PORTRAIT</a></li>								
							  <li class="dropdown-submenu">
						        <a class="test" tabindex="-1" href="#">NATURE&nbsp;&nbsp;&nbsp;<span class="caret"></span></a>
						        <ul class="dropdown-menu">
						          <li><a tabindex="-1" href="#wild">WILDLIFE</a></li>
						          <li><a tabindex="-1" href="#">BIRD</a></li>
						          <li><a tabindex="-1" href="#">SCAPE</a></li>
						      	</ul><!-- sub dropdown-menu-->
						      </li><!--dropdown-submenu-->
						    </li><!--sub dropdown-->
						</ul><!--main dropdown-menu-->
					  </li><!--main dropdown-->
					<li><a href="#abt">ABOUT</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</ul><!--nav navabr-nav-->
			</div><!--collapse navbar-collapse-->
		</div><!--container-fluid-->
	</nav><!--navbar navbar-inverse-->
	<div class="row" id="header">
		<div class="col-sm-12">
  		<img src="http://blog.themancompany.com/wp-content/uploads/2016/01/Photography-Camera-HD-Wallpaper1-1-1140x713.jpg" style="width:100%;">
  		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div id="wild" class="container-fluid">

				<!-- Photo Grid -->
				<div class="row img_grid"> 
				  <div class="column">
				    <img src="https://www.wcs.org/assets/wcsorg/our-work/wildlife/elephants-7e841b5564de97a8e484ecb76a6d9e54.jpg" style="width:100%">
				    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Panthera_tiger_in_a_marshy_area_in_captivity.jpg/1200px-Panthera_tiger_in_a_marshy_area_in_captivity.jpg" style="width:100%">
				    <img src="http://www.lewa.org/uploads/tx_lewaslider/slider-image-1.jpg" style="width:100%">
				    <img src="http://mirpurifoundation.org/wp-content/uploads/2017/04/wildlife.jpg" style="width:100%">
				  </div>
				  <div class="column">
				    <img src="http://webneel.com/daily/sites/default/files/images/daily/09-2013/3-deer-wildlife-photography.jpg" style="width:100%">
				    <img src="http://cdn.thecoolist.com/wp-content/uploads/2016/06/The-Royal-Family-Masai-Mara-Kenya-Federico-Veronesi-The-Coolist.jpg" style="width:100%">
				    <img src="http://www.rajras.in/wp-content/uploads/2016/11/Jessore.jpg" style="width:100%">
				    <img src="http://www.oipa.org/international/wp-content/uploads/2016/07/bears.jpg" style="width:100%">
				  </div>  
				  <div class="column">
				    <img src="http://envirocivil.com/wp-content/uploads/2012/07/asdasd.jpg" style="width:100%">
				    <img src="http://webneel.com/daily/sites/default/files/images/daily/09-2013/19-wildlife-photography.jpg" style="width:100%">
				    <img src="https://s3.ap-southeast-1.amazonaws.com/images.deccanchronicle.com/dc-Cover-fa1r2lo3pv1svb4t2qmhjnapf0-20170515065010.Medi.jpeg" style="width:100%">
				    <img src="https://www.holidify.com/blog/wp-content/uploads/2016/01/1399311137_large.jpeg" style="width:100%">
				  </div>
				  <div class="column">
				    <img src="http://im.hunt.in/cg/jaipur/City-Guide/wildlife.JPG" style="width:100%">
				    <img src="http://www.visitwales.com/~/media/83ff5aa561f240a38e6e1f14e41b5df8.ashx?as=0&h=361&w=642" style="width:100%">
				    <img src="http://www.gujaratexpert.com/wp-content/uploads/2017/11/Pania-Wildlife-Sanctuary-1.jpg" style="width:100%">
				    <img src="https://www.outlookindia.com/outlooktraveller/wp-content/uploads/2018/03/Red-Panda-singalila-national-park-west-bengaljpg-1024x681.jpg" style="width:100%">
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="abt" class="container-fluid">
		<b>ABOUT</b>
		<span>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br><br>
		<span><b>PHOTOGRAPHY EXPERIENCE</b></span><br>
		<span>PORTRAIT</span>
		<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60%</div>
		</div>
		<span>NATURE</span>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">30%</div>
		</div>		
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div id="contact" class="container-fluid">
				<h2>CONTACT</h2>
				<span class="glyphicon glyphicon-map-marker" style="size:30%;">&nbsp;Jain Galli Gokak,Dist:BELGAVI</span><br><br>
				<span class="glyphicon glyphicon-earphone">&nbsp;phone:93672162721</span><br><br>
				<span class="glyphicon glyphicon-envelope">&nbsp;Email:</span><br><br>
				<div id="map" style="width:100%;height:500px"></div>
				<div class="message">
				   <form>
					<h2>Send Message</h2>
					<input type="text" id="name" name="name" placeholder="Name" class="well well-sm" style="width:50%;"><br>
					<input type="text" id="email" name="email" placeholder="Email" class="well well-sm" style="width:50%;"><br>
					<input type="text" id="subj" name="subj" placeholder="Subject" class="well well-sm" style="width:50%;"><br>
					<input type="text" id="message" name="message" placeholder="Message" class="well well-sm" style="width:50%;"><br>
				
					<button onclick="store()" type="button">submit</button>

					<script  type="text/javascript">
					  function store(){
					     var inputEmail= document.getElementById("email");
					     localStorage.setItem("email", inputEmail.value);
					    }
					</script>
				   </form>
				</div>
			</div>
		</div>
	</div>


	<script>
		 // set map properties
		function myMap()
		{
		  var myCenter = new google.maps.LatLng(15.8497, 74.4977);
		  var mapCanvas = document.getElementById("map");
		  var mapOptions = {center: myCenter, zoom: 5};
		  var map = new google.maps.Map(mapCanvas, mapOptions);
		  //create map Marker at postion of latlang specified
		  var marker = new google.maps.Marker({position:myCenter}); 
		  
		  marker.setMap(map);
		  
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK6ulWjN6uVPvkjVg5zlpPCYwu2egAETU&callback=myMap"></script>

	<script>
		$(document).ready(function(){
		  $('.dropdown-submenu a.test').on("click", function(e){
		    $(this).next('ul').toggle();
		    e.stopPropagation();
		    e.preventDefault();
		  });
		});
	</script>


	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<footer>
				<span>Follow on</span> 
			</footer>
		</div>
	</div>

	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="glyphicon glyphicon-chevron-up"></i></button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			        document.getElementById("myBtn").style.display = "block";
			    } else {
			        document.getElementById("myBtn").style.display = "none";
			    }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			    document.body.scrollTop = 0;
			    document.documentElement.scrollTop = 0;
			}
		</script>


</body>
</html>

