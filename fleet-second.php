<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<link rel="icon" href="favicon.ico">
	<title>Vehicle Hub</title>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<link href="assets/css/plugins/swiper.min.css" rel="stylesheet">
	<link href="assets/css/plugins/intlTelInput.min.css" rel="stylesheet" >
	<link href="assets/css/plugins/remodal.min.css" rel="stylesheet" >
	<link href="assets/css/plugins/nouislider.min.css" rel="stylesheet" >
	<link href="assets/css/main-style.css" rel="stylesheet">



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Icon Font-->
	<link href="iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

	<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDP0J81P64u12NYEvovr9VZYOLLLNWXsE8",
    authDomain: "vehiclehub-9ac1e.firebaseapp.com",
    databaseURL: "https://vehiclehub-9ac1e.firebaseio.com",
    projectId: "vehiclehub-9ac1e",
    storageBucket: "vehiclehub-9ac1e.appspot.com",
    messagingSenderId: "291036890935"
  };
  firebase.initializeApp(config);
</script>
  <script type="text/javascript">

    /**
     * Function called when clicking the Login/Logout button.
     */
    // [START buttoncallback]
   function toggleSignIn() {
      if (!firebase.auth().currentUser) {
        // [START createprovider]
        var provider = new firebase.auth.GoogleAuthProvider();
        // [END createprovider]
        // [START addscopes]
        provider.addScope('https://www.googleapis.com/auth/contacts.readonly');
        // [END addscopes]
        // [START signin]
        firebase.auth().signInWithPopup(provider).then(function(result) {
          // This gives you a Google Access Token. You can use it to access the Google API.
          var token = result.credential.accessToken;
          // The signed-in user info.
          var user = result.user;
          // [START_EXCLUDE]
          //document.getElementById('quickstart-oauthtoken').textContent = token;
          // [END_EXCLUDE]
        }).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // The email of the user's account used.
          var email = error.email;
          // The firebase.auth.AuthCredential type that was used.
          var credential = error.credential;
          // [START_EXCLUDE]
          if (errorCode === 'auth/account-exists-with-different-credential') {
            alert('You have already signed up with a different auth provider for that email.');
            // If you are using multiple auth providers on your app you should handle linking
            // the user's accounts here.
          } else {
            console.error(error);
          }
          // [END_EXCLUDE]
        });
        // [END signin]
      } else {
        // [START signout]
        firebase.auth().signOut();
        // [END signout]
      }
      // [START_EXCLUDE]
      document.getElementById('quickstart-sign-in').disabled = true;
      
      // [END_EXCLUDE]
    }
    // [END buttoncallback]

    /**
     * initApp handles setting up UI event listeners and registering Firebase auth listeners:
     *  - firebase.auth().onAuthStateChanged: This listener is called when the user is signed in or
     *    out, and that is where we update the UI.
     */
    function initApp() {
      // Listening for auth state changes.
      // [START authstatelistener]
      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in.
          var displayName = user.displayName;
          var gemail = user.email;
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
          // [START_EXCLUDE]
         // document.getElementById('quickstart-sign-in-status').textContent = 'Signed in';
          document.getElementById('quickstart-sign-in').textContent = 'Sign out';
          //document.getElementById('quickstart-account-details').textContent = JSON.stringify(user, null, '  ');
          document.getElementById('quickstart-account-name').textContent = displayName;
         // document.getElementById('quickstart-account-pic').innerHTML= '<img src=photoURL />'; 
          document.getElementById("quickstart-account-pic").src=photoURL;

          //moible
           document.getElementById('quickstart-sign-in_m').textContent = 'Sign out';
          //document.getElementById('quickstart-account-details').textContent = JSON.stringify(user, null, '  ');
          document.getElementById('quickstart-account-name_m').textContent = displayName;
         // document.getElementById('quickstart-account-pic').innerHTML= '<img src=photoURL />'; 
          document.getElementById("quickstart-account-pic_m").src=photoURL;
          
          
          // [END_EXCLUDE]
        } else {
          // User is signed out.
          // [START_EXCLUDE]
         // document.getElementById('quickstart-sign-in-status').textContent = 'Signed out';
          	document.getElementById('quickstart-sign-in').textContent = 'Sign in with Google';
          //document.getElementById('quickstart-account-details').textContent = 'null';
           document.getElementById('quickstart-account-name').textContent = "Sign In >";
           document.getElementById("quickstart-account-pic").src="assets/images/img.png";

           //mobile
           document.getElementById('quickstart-sign-in_m').textContent = 'Sign in with Google';
          //document.getElementById('quickstart-account-details').textContent = 'null';
           document.getElementById('quickstart-account-name_m').textContent = "Sign In";
           document.getElementById("quickstart-account-pic_m").src="assets/images/img.png";         

          //document.getElementById('quickstart-oauthtoken').textContent = 'null';
          // [END_EXCLUDE]
        }
        // [START_EXCLUDE]
        document.getElementById('quickstart-sign-in').disabled = false
         document.getElementById('quickstart-sign-in_m').disabled = false;
                
 
        // [END_EXCLUDE]
      });

      // [END authstatelistener]


      document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);
      document.getElementById('quickstart-sign-in_m').addEventListener('click', toggleSignIn, false);
    }

    
     // function showimage() {


     //     var storageRef = firebase.storage().ref('VehiclePhotos/activa.png');
     //     //var spaceRef = storageRef.child('sweet_gift/vytcdc.png');
     //     firebase.storage().ref('VehiclePhotos/activa.png').getDownloadURL().then(function(url) {
     //         var test = url;
     //         //alert(url);
     //         for(var i=0;i<=10;i++)
     //         {
     //         	document.getElementById("test_pic"+i).src = test;
     //         }

     //     }).catch(function(error) {

     //     });


   //  }

    window.onload = function() {
      initApp();
      var count= 0;


       var date = "<?php $test = $_POST["P_date_input"]; echo $test;?>"; 
          console.log(date);  

       firebase.database().ref('Booking/').once('value').then(function(snapshot) {
       snapshot.forEach(function(userSnapshot1) {
        var bookinfo = userSnapshot1.val();
        var bookno = userSnapshot1.val().number;
         
            if (userSnapshot1.key === "30-03-2018" ) {

             console.log(bookinfo);

             }
            else
            {
          console.log(userSnapshot1.key);

            }
    
          });
      });



      firebase.database().ref('VehicleInfo/').once('value').then(function(snapshot) {
   		 snapshot.forEach(function(userSnapshot) {
        var username = userSnapshot.val();
         
          //console.log(userSnapshot.key);


        

         count++;
         var current = count;
         var rate = username.Rate.split('|');

         var before = document.getElementById("gallery").innerHTML;

         document.getElementById("gallery").innerHTML=before + '\
         	<div class="gallery__item col-xs-12 col-sm-6 col-xl-4">\
				<form action="checkout.php" method="post">\
					<figure class="gallery__item__image">\
						<a class="hover" href="checkout.php">\
										\
							<img  id="test_pic'+ count +'" src="#" alt="" /> \
							<i class="icon-arrow-down-sign-to-navigate2"></i>\
							<i class="icon-arrow-down-sign-to-navigate2"></i> \
						</a>\
					</figure> \
					<input type="hidden" name="number" value="'+userSnapshot.key+'">\
					<div class="gallery__item__content">\
						<h6>'+ username.BrandModel +'</h6>\
						<span class="cost">\
							<span>\
								<strong>Rs.'+rate[0]+'</strong>\
								/hour\
							</span>\
							<span>\
								<strong>Rs.'+(rate[0]*24)+'</strong>/day\
							</span>\
						</span>\
						<u><a class="link-gallery" id="buttonID'+count+'">\
						<span class="btn btn-mini">Book now</span></a></u>\
					</div>\
				</form>\
			</div>';

		var element = document.getElementById("buttonID"+count);
		element.href = "javascript:{changePage('buttonID"+count+"');}";

         //var spaceRef = storageRef.child('sweet_gift/vytcdc.png');
         firebase.storage().ref('VehiclePhotos/'+username.VUrl+'.png').getDownloadURL().then(function(url) {
             var test = url;
             //alert(url);
             	document.getElementById("test_pic"+current).src = test;

         }).catch(function(error) {

         });
       
   		//

   	});
		});
    };

    function changePage(ele) {
    	var id = document.getElementById(ele);
    	id.closest("form").submit();
    console.log('area element id = ' + id);
  	}

  </script>
</head>

<body class="page__fleet-sec">
<!-- <div class="tools">
	<span class="toggle"><img src="assets/images/color-icon.png" class="img-responsive" alt=""></span>
	<a href="#" class="color-blue">Blue</a>
	<a href="#" class="color-yellow">Yellow</a>
	<a href="#" class="color-turquoise">Turquoise</a>
	<a href="#" class="color-orange">Orange</a>
	<a href="#" class="color-orange-sec">Orange-second</a>
	<a href="#" class="color-lightblue">Lightblue</a>
	<a href="#" class="color-pink">Pink</a>
</div> -->
<!-- Loader -->
<div class="plash">
	<div id="scene">
		<span></span>
		<div id="road">
			<div id="stripes"></div>
		</div>
	</div>
	<div class="loading">Loading<span>...</span></div>
</div>
<!-- //Loader --> 
	<!-- Header -->
	<header class="site-header">
			<div class="mobile-top-panel"></div>
		<div class="mobile-top-panel__fixed">
			<div class="container">
				<div class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="menu-navigation navbar-collapse collapse">

					<!-- Left nav -->
							<ul class="menu-navigation__list nav navbar-nav">
									<li> <img src="assets/images/img.png" id="quickstart-account-pic_m" height="30" width="30"  class="img-circle" ></li>
									<li>  <a href="#" id="quickstart-account-name_m" > <span > sign in </span><i class="icon-arrow-down-sign-to-navigate"></i></a>

								<ul class="sub-menu dropdown-menu">
									<li ><a href="#" id="quickstart-profile_m">View Profile</a></li>	
									<li><a href="#" id="quickstart-sign-in_m">Sign out</a></li>	
								</ul>
							</li>
							<li></li>
							<li ><a href="index.html">Home</a></li>
							<li ><a href="about.html">About us</a></li>
							<li class="current"><a href="fleet-second.php" data-hover="Fleet">Fleet </a></li>
							<li><a href="rates.html">Rates</a></li>
							<li><a href="contacts.html">Contacts</a></li>
							
						</ul>

					</div><!--/.nav-collapse -->
				</div>
				<div class="social-list">
					<span class="social-list__text">Find us here:</span>
					<ul class="social-list__icons">
						<li><a href="https://www.facebook.com"><i class="icon-facebook-logo"></i></a></li>
						<li><a href="https://twitter.com/vehicle_hub"><i class="icon-twitter-letter-logo"></i></a></li>
						<li><a href="https://plus.google.com"><i class="icon-google-plus"></i></a></li>
						<li><a href="https://www.instagram.com/officialvehiclehub/"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-container_wrap container">
			<div class="header-container__flex">
				<div class="logo">
					<a href="index.html">
						
						<img src="assets/images/LOGO.svg" alt="" height="170px" width="150px">
<!-- 
						<i class="icon-logo-vh"></i> -->
						Vehicle <span>Hub </span>
					</a>
				</div>
				<div class="social-list">
					<span class="social-list__text">Find us here:</span>
					<ul class="social-list__icons">

						<li><a href="https://www.facebook.com/officialVehicleHub/?modal=admin_todo_tour" target="_blank"><i class="icon-facebook-logo"></i></a></li>
						<li><a href="https://twitter.com/vehicle_hub" target="_blank"><i class="icon-twitter-letter-logo"></i></a></li>
						<li><a href="https://plus.google.com"><i class="icon-google-plus"></i></a></li>
						<li><a href="https://www.instagram.com/officialvehiclehub/" target="_blank"><i class="icon-instagram"></i></a></li>

					</ul>
				</div>
				<div class="phone_block">
					<span><i class="icon-telephone"></i> +91-9424122932</span>
					<small>Our Reservation Specialists 24/7</small>
				</div>
			</div>
		</div>
		<div class="header-navigation-wrap stickUp"> 
			<!-- Navbar fixed top -->
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="menu-navigation navbar-collapse collapse">

					<!-- Left nav -->
						<ul class="menu-navigation__list nav navbar-nav">
							<li ><a href="index.html" data-hover="Home">Home</a></li>
							<li><a href="about.html" data-hover="About us">About us</a></li>
							<li class="current"><a href="fleet-second.php" data-hover="Fleet">Fleet </li>
							<li><a href="rates.html" data-hover="Rates">Rates</a></li>
							<li><a href="tipstesti.html" data-hover="Testimonials">Tips</a></li>
							<li><a href="contacts.html" data-hover="Contacts">Contacts</a></li>
								
						<!--		<li> Firebase sign-in status: <span id="quickstart-sign-in-status">Unknown</span></li>
								 <pre><code id="quickstart-account-details">null</code></pre>
             					<pre><code id="quickstart-oauthtoken">null</code></pre>  -->
             					
             					<li></li>
             					
             					<li>  <a href="#" id="quickstart-account-name" > <span > sign in </span><i class="icon-arrow-down-sign-to-navigate"></i></a>
								<ul class="sub-menu dropdown-menu">
								
									<li ><a href="#" id="quickstart-profile" >View Profile</a></li>	
									<li><a href="#" id="quickstart-sign-in" >Sign out</a></li>	

								</ul>
								<li> <img src="assets/images/img.png" alt="" id="quickstart-account-pic" height="30" width="30"  class="img-circle" ></li>
								
							</li>
						</ul>

					</div><!--/.nav-collapse -->
				</div><!--/.container -->
			</div>
		</div>

	</header>
	<!-- // Header -->

	<!-- Content  -->
	<main id="page-content">
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Fleet</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="fleet.html" class="breadcrumbs__item-link">Fleet</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Breadcrumbs  -->
		

		<section class="isotop-box">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-3">
						<div class="filter-box">
							<h3>Info</h3>

							<div class="price-slider filter-widget">
								<h4 class="filter-widget__title">Pick Up location</h4>
							
								 <?php echo $_POST["location"]; ?><br>
							</div>
							<div class="price-slider filter-widget">
								<h4 class="filter-widget__title">Drop off location</h4>
								
								 <?php echo $_POST["location"]; ?><br>
							</div>
							<div class="price-slider filter-widget">
								<h4 class="filter-widget__title">Pick Up Date & Time</h4>
								
								 <?php 
								 echo "<h6> Date :- </h6> ";
								 echo   $_POST["P_date_input"] ; 
								 echo "<br>";
								 echo "<br>";
								 echo "<h6> Time :- </h6> ";
								 echo $_POST["P_time_input"]; 


								 ?><br>
							</div>
							
							<div class="price-slider filter-widget">
								<h4 class="filter-widget__title">Drop off Date & Time</h4>
								
								  <?php 
								 echo "<h6> Date :- </h6> ";
								 echo   $_POST["d_date_input"]; 
								 echo "<br>";
								 echo "<br>";
								 echo "<h6> Time :- </h6> ";
								 echo $_POST["d_time_input"]; 


								 ?><br><br>
							</div>
							<div align="center">
								
								<a href="bookclick.php" class="btn"> &nbsp; EDIT &nbsp; </a>

							 

							</div>

						</div>
					</div>
					<div class="col-sm-12 col-md-9">
						<div class="gallery row" id="gallery">


							

									
							 <!-- <div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
								<figure class="gallery__item__image">
									<a class="hover" href="checkout.php">
										
										<img  id="test_pic" src="#" alt="" /> 
										<i class="icon-arrow-down-sign-to-navigate2"></i>
										<i class="icon-arrow-down-sign-to-navigate2"></i> 
									</a>
								</figure> 

								<div class="gallery__item__content">
									<h6>Honda Activa</h6>
									<span class="cost"><span><strong>Rs.40</strong>/hour</span><span><strong>Rs.500</strong>/day</span></span>
									<u><a href="checkout.php" class="link-gallery">
									<span class="btn btn-mini">Book now</span></a></u>
								</div>
							</div>

							<div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
								<figure class="gallery__item__image">
									<a class="hover" href="checkout.php">
										<img src="assets/images/gallery/jupiter.png" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>TVS JUPITER</h6>
									<span class="cost"><span><strong>Rs.40</strong>/hour</span><span><strong>Rs.500</strong>/day</span></span>
									<u><a href="checkout.php" class="link-gallery">
									<span class="btn btn-mini">Book now</span></a></u>
								</div>
							</div>
							<div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
								<figure class="gallery__item__image">
									<a class="hover" href="checkout.php">
										<img src="assets/images/gallery/suzuki.png" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>SUZUKI ACCESS</h6>
									<span class="cost"><span><strong>Rs.40</strong>/hour</span><span><strong>Rs.500</strong>/day</span></span>
									<u><a href="checkout.php" class="link-gallery">
									<span class="btn btn-mini">Book now</span></a></u>
								</div>

							</div>
							<div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
								<figure class="gallery__item__image">
									<a class="hover" href="checkout.php">
										<img src="assets/images/gallery/aviator.png" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Honda Aviator</h6>
									<span class="cost"><span><strong>Rs.40</strong>/hour</span><span><strong>RS.500</strong>/day</span></span>
									<u><a href="checkout.php" class="link-gallery">
									<span class="btn btn-mini">Book now</span></a></u>
								</div>
							</div>
							<div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
								<figure class="gallery__item__image">
									<a class="hover" href="checkout.php">
										<img src="assets/images/gallery/pulsar200ns.png" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Pulsar 200 NS</h6>
									<span class="cost"><span><strong>Rs.60</strong>/hour</span><span><strong>Rs.650</strong>/day</span></span>
									<u><a href="checkout.php" class="link-gallery">
									<span class="btn btn-mini">Book now</span></a></u>
								</div>
							</div>
							<div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
								<figure class="gallery__item__image">
									<a class="hover" href="checkout.php">
										<img src="assets/images/gallery/pulsar200rs.png" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Pulsar 200 RS </h6>
									<span class="cost"><span><strong>Rs.60</strong>/hour</span><span><strong>Rs.650</strong>/day</span></span>
									<u><a href="checkout.php" class="link-gallery">
									<span class="btn btn-mini">Book now</span></a></u>
								</div>
							</div>
							<div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
								<figure class="gallery__item__image">
									<a class="hover" href="checkout.php">
										<img src="assets/images/gallery/avengers.png" alt="" />
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6>Bajaj Avengers 200</h6>
									<span class="cost"><span><strong>Rs.70</strong>/hour</span><span><strong>Rs.720</strong>/day</span></span>
									<u><a href="checkout.php" class="link-gallery">
									<span class="btn btn-mini">Book now</span></a></u>
								</div>
							</div>
						</div>  -->
 
						<!-- <div class="pagination">
							<ul>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
							</ul>
						</div> -->
					</div>
				</div> <!-- //row -->
			</div> <!-- //Container -->
		</section>

	</main>
	<!-- // Content  -->

	<!-- Footer -->
<footer class="site-footer">
		<section class="site-footer__top-panel">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<div class="top-panel__info">
							<i class="icon-Cancellation"></i>
							<strong>Free cancellation</strong> 
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="top-panel__info">
							<i class="icon-commerce"></i>
							<strong>No credit Vehicled fees</strong>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="top-panel__info">
							<i class="icon-phone"></i>
							<strong>24/7 Call Center</strong>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section  class="box-elements">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12 col-lg-3">
						<figure class="footer_logo"><a href="#"><span><em>Celebrating</em>25<strong>YEARS</strong></span><i class="icon-111"></i></a></figure>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<h5>Company</h5>
						<ul class="footer-list">
							<li><a href="about.html">About us</a></li>
							<li><a href="#">Emergency Contacts</a></li>
							<li><a href="contacts.html">Contact</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<h5>Customer Services</h5>
						<ul class="footer-list">
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Help renting a Vehicle</a></li>
							<li><a href="#">Terms and Conditions</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<div class="contact-info">
							<span class="phone_number"><i class="icon-telephone"></i> +91-9424122932	</span>
							
							<span class="location_info">
							<i class="icon-placeholder-for-map"></i>
							<em>Tri-Murti Chowk </em> 
							<em>Bharti Vidyapeeth , Katraj,</em> 
							<em>PUNE , 411043.</em> </span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="site-footer__bottom-panel">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="copyright">&copy; 2018 | <a href="#">Privacy Policy</a> | <a href="#">Rental policy</a></div>
					</div>
					<div class="col-xs-12 col-md-6"> 
						<div class="social-list">
							<ul class="social-list__icons">
								<li><a href="www.facebook.com"><i class="icon-facebook-logo"></i></a></li>
								<li><a href="www.twitter.com"><i class="icon-twitter-letter-logo"></i></a></li>
								<li><a href="https://plus.google.com"><i class="icon-google-plus"></i></a></li>
								<li><a href="https://www.linkedin.com"><i class="icon-linkedin-logo"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<a href="#" class="scrollup"><i class="icon-arrow-down-sign-to-navigate"></i></a>

	</footer>

	<!-- //Footer -->
	
	

<div class="remodal" data-remodal-id="modal">
	<a data-remodal-action="close" class="remodal-close"></a>
  <!-- // order-details-form  -->
<form action="#" class="order-details-form" name="contactform" method="post" novalidate>
						<div class="inner-form">
						<h3>Order Form</h3>
							<div class="inner-form__elements">
								<div class="inner-half">
									<h5>New Reservation</h5>
									<div class="location">
										<input type="text" name="location" placeholder="Your pickup location">
										<i class="icon-placeholder-for-map"></i>
									</div>
									<div class="text-element stop-location">
										<a href="#" class="add" id="add-stop"><i class="icon-plus-black-symbol"></i> <span>Click here to add a stop</span></a>
										<a href="#" class="link-right">airports</a>
									</div>
									<div class="location-drop-off">
										<input type="text" name="location-drop-off" placeholder="Enter drop-off location">
										<i class="icon-placeholder-for-map"></i>
									</div>
									<div class="text-element checkbox-div">
										<div class="wishes">
											<input type="checkbox" name="option1" value="a1"> I would like the driver to wait and take me back<br>
											 	<input type="checkbox" name="option2" value="a2"> I would like to go by the hours
											</div>
										<a href="#" class="link-right">airports</a>
									</div>
									
									<div class="inner-half__width">
										<div class="input-date">
											<input type="text" name="input-date" placeholder="Pick-up date">
											<i class="icon-calendar-with-a-clock-time-tools"></i>
										</div>
										<div class="input-time">
											<input type="text" name="input-time" placeholder="Pick-up time">
											<i class="icon-clock"></i>
										</div>
									</div>
									
									
									

									<div class="passengers-luggage">
										<div class="passengers">
											<span>Passengers*</span>
											<select name="passengers">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
										<div class="luggage">
											<span>Luggage*</span>
											<select name="luggage">
												<option value="0">0</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
										<div class="carseat">
											<span></span>
											<input type="checkbox" name="carseat" value="a2"> Car Seat
										</div>
									</div>
								</div>
								<div class="inner-half">
									<h5>Passenger's Contact Info</h5>
									<div class="inner-half__width">
										<div class="first-name">
											<input type="text" name="first-name" placeholder="First Name*">
										</div>
										<div class="last-name">
											<input type="text" name="last-name" placeholder="Last Name*">
										</div>
									</div>

									<div class="inner-half__width">
										<div class="your-phone">
											<input type="tel" id="phone" placeholder="Your phone">
										</div>
										<div class="email">
											<input type="text" name="email" placeholder="E-mail">
										</div>
									</div>
									<div class="specialreguests">
										<textarea name="specialreguests" placeholder="Special Requests"></textarea>
										<span class="textarea-text">(Maximum characters: 250. You have 250 characters left)</span>
									</div>
									<div class="payment">
										<span>Payment</span>
										<select name="your-phone">
											<option value="Pay with Cash">Pay with Cash</option>
											<option value="PayPal">PayPal</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
								</div>
							</div>
							<button type="submit" class="btn">CONTINUE</button> 
						</div>
					</form>
	<!-- // order-details-form  -->
</div>

	<script src="assets/js/jquery.1.12.4.min.js"></script>







	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery.smartmenus.min.js"></script>
	<script src="assets/js/plugins/jquery.smartmenus.bootstrap.js"></script>
	<script src="assets/js/plugins/swiper.min.js"></script>
	<script src="assets/js/plugins/stickup.min.js"></script>
	<script src="assets/js/plugins/intlTelInput.min.js"></script>
	<script src="assets/js/plugins/remodal.js"></script>
	<script src="assets/js/plugins/tool.js"></script>
	<script src="assets/js/plugins/nouislider.min.js"></script>
	<script src="assets/js/plugins/wnumb.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>