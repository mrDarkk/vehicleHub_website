
<html>
<!-- Mirrored from stepform.cidcode.net/timon-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2018 08:47:37 GMT -->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">
    <meta name="description" lang="en" content="Timon Step Form Wizard - With Timon - Step Form Wizard you will have power combo of 21 different styles, 8 different transition effects, validation in your step form, titles and subtitles with multiple step, also Timon - Step Form Wizard has predefined set of form sizes from tiny to large. You can easily create and customize any form to fit your needs">
    <meta name="keywords" lang="en" content="timon,checkout, configuration, form, jquery plugin, multi step, multistep, navigation, registration, responsive, slider form, step, step by step, steps, tabs, wizard">
    <meta name="robots" content="index, follow">
    <title>Vehicle Hub</title>
        <link href="assets/css/plugins/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link href="assets/css/plugins/nivo-slider.css" rel="stylesheet">
    <link href="assets/css/plugins/swiper.min.css" rel="stylesheet">
    <link href="assets/css/plugins/intlTelInput.min.css" rel="stylesheet" >
    <link href="assets/css/plugins/remodal.min.css" rel="stylesheet" >
    <link href="assets/css/plugins/animate.css" rel="stylesheet">
   <!-- <link href="assets/css/main-pay.css" rel="stylesheet"> -->

   <link href="assets/css/main-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> 


      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Icon Font-->




    <link href="iconfont/style.css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href='http://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!--Import Multi Step Indicator css-->
    <link href="assets/css/gsi-step-indicator.min.css" rel="stylesheet" />

    <!--Import  Step Form Wizard css-->
    <link href="assets/css/tsf-step-form-wizard.min.css" rel="stylesheet" />
    <!--Import  demo css-->
    <link href="assets/css/demo.min.css" rel="stylesheet" />

    <link href="assets/plugin/parsley/css/parsley.min.css" rel="stylesheet" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--Plugin for validation-->
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  
  
      <link rel="stylesheet" href="css/style.css">
 

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js'></script>

  

    <script  src="js/index.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
    <!--  <script src="assets/js/main.js"></script> -->
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
    

//



      function Savebook()
      {
          console.log("sjhfjkagfh");
      }

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
          document.getElementById('quickstart-account-name1').value = displayName;
          document.getElementById('quickstart-account-email1').value = gemail;
          document.getElementById('quickstart-account-email').textContent = gemail;
         // document.getElementById('quickstart-account-pic').innerHTML= '<img src=photoURL />'; 
          document.getElementById("quickstart-account-pic").src=photoURL;
             document.getElementById('log_btn').disabled = false;
           
          
          // [END_EXCLUDE]
        } else {
          // User is signed out.
          // [START_EXCLUDE]
         // document.getElementById('quickstart-sign-in-status').textContent = 'Signed out';
          document.getElementById('quickstart-sign-in').textContent = 'Sign in with Google';
          //document.getElementById('quickstart-account-details').textContent = 'null';
           document.getElementById('quickstart-account-name').textContent = "Username";
            document.getElementById('quickstart-account-email').textContent = "Username@gmail.com";
            document.getElementById('quickstart-account-name1').value = "djfdsjfjsg";
          document.getElementById('quickstart-account-email1').value = "dkjfsdjbk";
           document.getElementById("quickstart-account-pic").src="assets/images/img.png";         
           
            document.getElementById('log_btn').disabled = true;
          //document.getElementById('quickstart-oauthtoken').textContent = 'null';
          // [END_EXCLUDE]
        }
        // [START_EXCLUDE]
        document.getElementById('quickstart-sign-in').disabled = false;
        
         
      

        // [END_EXCLUDE]
      });

      // [END authstatelistener]

// Reference messages collection



      document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);
    }



    window.onload = function() {
      initApp();

      var number1 = "<?php $test = $_POST["number"]; echo $test;?>";     
      console.log(number1);

      var fleetInfo = new Object();


firebase.database().ref('VehicleInfo/'+number1).once('value').then(function(snapshot) {
   		 snapshot.forEach(function(userSnapshot) {
         
         console.log(userSnapshot.key + ":" + userSnapshot.val());

         switch(userSnapshot.key)
         {
         	case "BrandModel":
         		fleetInfo.BrandModel = userSnapshot.val();
         		break;

         	case "Rate":
         	//var rate = username.Rate.split('|');
         		fleetInfo.Rate = userSnapshot.val().split('|');
         		break;

         	case "TotalBookings":
         		fleetInfo.TotalBookings = userSnapshot.val();
         		break;

         	case "VUrl":
         		fleetInfo.VUrl = userSnapshot.val();
             document.getElementById('productinfo').value = fleetInfo.BrandModel ;
              document.getElementById('productprice').value = fleetInfo.Rate[0] * 4 ;
             

         		document.getElementById("book_pay").innerHTML= '<div class="model-details-box__info">\
                                                                <h3>'+ fleetInfo.BrandModel +'</h3>\
                                                                <h6>VEHICLE BILLING</h6>\
                                                                <table class="details-car">\
                                                                    <tr>\
                                                                        <th> <h2>YOU PAY '+ fleetInfo.Rate[0] * 4 +'</h2></th>\
                                                                        <th></th>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td>Pick-Up Date/Time </td>\
                                                                        <td>12/02/2018 12:00pm</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td>Drop-Off Date/Time</td>\
                                                                        <td>12/02/2018 12:00pm</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td>Self Pickup</td>\
                                                                        <td>Bvdu pune</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td>Duration</td>\
                                                                        <td> 3 hours</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td>Amount :</td>\
                                                                        <td>300</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td>Discount</td>\
                                                                        <td>10</td>\
                                                                    </tr>\
                                                                </table>\
                                                              </div>\
                                                            <div class="model-slider-wrapper">\
                                                                <br>\
                                                                <ul id="lightSlider" class="model-slider">\
                                                                    <li data-thumb="assets/images/model-thumb-1.jpg">\
                                                                       <img  id="test_pic" src="#" alt="" />\
                                                                    </li>\
                                                                </ul>\
                                                            </div>';


         firebase.storage().ref('VehiclePhotos/'+fleetInfo.VUrl+'.png').getDownloadURL().then(function(url) {
             // alert(url);
               document.getElementById("test_pic").src = url;

         }).catch(function(error) {

         });

         		break;
         }
		});
   		});
	};
  </script>

</head>
<body >

        <header class="site-header">
       <!--  -->
        </div>
        <div class="header-container_wrap container">
            <div class="header-container__flex">
                <div class="logo">
                    <a href="index.html">
                        
                        <img src="assets/images/LOGO.svg" alt="" height="100px" width="150px">

                    </a>
                </div>
            
                <div class="phone_block">
                    
                    <h3> +91-9424122932</h3>
                      <h5>Our Reservation Specialists 24/7</h5>
                </div>
            </div>
            <hr>
        </div>

    </header>
    

    <div class="demo-settings" data-open="true">
       
        <div class="settings-main">
            <label>Step effect</label>
            <select class="form-control" id="stepEffect">
                <option value="basic" selected="selected">basic</option>
                <option value="bounce">bounce</option>
                <option value="slideRightLeft">slideRightLeft</option>
                <option value="slideLeftRight">slideLeftRight</option>

                <option value="flip">flip</option>
                <option value="transformation">transformation</option>
                <option value="slideDownUp">slideDownUp</option>
                <option value="slideUpDown">slideUpDown</option>
            </select>
            <br />
            <label for="stepTransition">
                Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked />
            </label>
            <br />
            <label for="showButtons">
                Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked />
            </label>
            <br />
            <label for="showStepNum">
                Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked />
            </label>


        </div>
    </div>

    <div class="container">
        <!-- <div class="row"> <h1>Validation examples</h1></div> -->
        <div class="row"><div id="result" class="code-example"></div></div>
        <div >
            
            <!-- BEGIN STEP FORM WIZARD -->
            <div class="tsf-wizard tsf-wizard-1">
                <!-- BEGIN NAV STEP-->
                <div class="tsf-nav-step">
                    <!-- BEGIN STEP INDICATOR-->
                    <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                        <li class="current" data-target="step-1">
                            <a href="#0">
                                <span class="number">1</span>
                                <span class="desc">
                                    <label>Log In</label>
                                    <span>Log In</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-2">
                            <a href="#0">
                                <span class="number">2</span>
                                <span class="desc">
                                    <label>Booking Summary</label>
                                    <span>Booking Summary</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-3">
                            <a href="#0">
                                <span class="number">3</span>
                                <span class="desc">
                                    <label>Payment</label>
                                    <span>Payment</span>
                                </span>
                            </a>
                        </li>
                      
                    </ul>
                    <!-- END STEP INDICATOR--->
                </div>
                <!-- END NAV STEP-->
                <!-- BEGIN STEP CONTAINER -->

                <div class="tsf-container">
                    <!-- BEGIN CONTENT-->
                    <form class="tsf-content" action="PayUMoney_form.php" method="POST">

                        <!--<form class="tsf-form">-->
                        <!-- BEGIN STEP 1-->
                        <div class="tsf-step step-1 active">
                            <fieldset>
                                
                                        <main id="page-content">
                                        <div class="breadcrumbs">
                                            <div class="container">
                                                <div >
                                                    <div class="col-xs-12">
                                                        <div class="breadcrumbs__title">Log In</div>
                                                        <div class="breadcrumbs__items">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // Breadcrumbs  -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="model-details-box" align="center">
                                                        <img src="assets/images/img.png" alt="Login" id="quickstart-account-pic" height="100" width="100"  class="img-circle"  >
                                                        <h1 id="quickstart-account-name">username</h1>
                                                        <h3 id="quickstart-account-email">username@example.com</h3>

                            
                                                         <br>
                                                        <button class="btn"  id="quickstart-sign-in"> sign In</button> 

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </main>

                            </fieldset>
                        </div>
                        <!-- END STEP 1-->
                        <!-- BEGIN STEP 2-->
                       <div class="tsf-step step-2">
                            <fieldset>
                              
                               <main id="page-content">
                                        <div class="breadcrumbs">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="breadcrumbs__title">Booking Summary</div>
                                                        <div class="breadcrumbs__items">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // Breadcrumbs  -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="model-details-box">
                                    
                                                        <div class="model-details-box__inner" id="book_pay" >
                                                          <!--   <div class="model-details-box__info">
                                                                <h3>Hyundai i30</h3>
                                                                <h6>VEHICLE FEATURES</h6>
                                                                <table class="details-car">
                                                                    <tr>
                                                                        <th>Hyundai i30</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Number of Passengers:</td>
                                                                        <td>4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Luggage Capacity:</td>
                                                                        <td>3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Doors:</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Transmission:</td>
                                                                        <td>Standard</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Stereo:</td>
                                                                        <td>AM/FM w/ CD player</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Air Conditioning:</td>
                                                                        <td>A / C</td>
                                                                    </tr>
                                                                </table>
                                                              </div>
                                                            <div class="model-slider-wrapper">
                                                                <br>
                                                                <ul id="lightSlider" class="model-slider">
                                                                    <li data-thumb="assets/images/model-thumb-1.jpg">
                                                                        <img src="assets/images/model-slide-1.jpg" alt="" />
                                                                    </li>
                                                        
                                                                </ul>
                                                            </div> -->
                                                            <center> <h3>Loading.....</h3> </center>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                       <!--  </div> -->
                            </fieldset>
                        </div> 
                        <!-- END STEP 2-->
                       <div class="tsf-step step-3">
                            <fieldset>
                                
                                        <main id="page-content">
                                        <div class="breadcrumbs">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="breadcrumbs__title">Payment</div>
                                                        <div class="breadcrumbs__items">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // Breadcrumbs  -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="model-details-box">
                                    
                                                        <center>
                                                          
                                                           <form action="PayUMoney_form.php" method="POST">
                                                             
                                                            <input type="hidden"  id="quickstart-account-email1" name="Bemail">
                                                           <input type="hidden"  id="quickstart-account-name1" name="Bname">
                                                             <input type="hidden"  id="productinfo" name="Bproduct">
                                                              <input type="hidden"  id="productprice" name="Bprice">
                                                              <h3>Phone Number</h3>
                                                             <input type="text" id="phoneno" name="Bphone">


                                                           </form>

                                                          <!-- <input type="text"  id="quickstart-account-name1"> -->
                                                         
                                                          
                                                        </center>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </main>

                            </fieldset>
                        </div>
                        <!--</form>-->
                    </form>
                    <!-- END CONTENT-->
                    <!-- BEGIN CONTROLS-->
                    <div class="tsf-controls ">
                        <!-- BEGIN PREV BUTTTON-->
                        <button type="button" data-type="prev" class="btn btn-left tsf-wizard-btn">
                            <i class="fa fa-chevron-left"></i> PREV
                        </button>
                        <!-- END PREV BUTTTON-->
                        <!-- BEGIN NEXT BUTTTON-->
                        <button type="button" data-type="next" class="btn btn-right tsf-wizard-btn" id="log_btn" onclick="">
                            NEXT <i class="fa fa-chevron-right"></i>
                        </button>
                        <!-- END NEXT BUTTTON-->
                        <!-- BEGIN FINISH BUTTTON-->
                     <!--    <button type="submit" data-type="finish"  onclick="Savebook()" class="btn btn-right tsf-wizard-btn"> -->
                          <button  data-type="finish"   class="btn btn-right tsf-wizard-btn">
                            FINISH
                        </button>
                        <!-- END FINISH BUTTTON-->
                    </div>
                    <!-- END CONTROLS-->
                </div>
                <!-- END STEP CONTAINER -->


            </div>
            <!-- END STEP FORM WIZARD -->
            <div class="clearfix"></div>
           
        </div>
        <br /><br />
        <footer>
           
        </footer>
    </div>

    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <script src="assets/js/demo.js"></script>
    <!--Plugin for validation-->
    <!--<script src="assets/plugin/validate/jquery.validate.js"></script>-->
    <script src="assets/plugin/parsley/js/parsley.js"></script>

    <script src="assets/js/tsf-wizard-plugin.js"></script>

    <script>
        $(function () {
            pageLoadScript();
        });
    

        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style1';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');


          tsf1=  $('.tsf-wizard-1').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'top',
                validation: true,
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: 'auto',
                // onNextClick: function (e, from, to, validation) {
                //     $('#result').append('<br/>onNextClick from ' + from +
                //         ' - to ' + to + ' validation ' + validation)
                // },
                // onPrevClick: function (e, from, to) {
                //     $('#result').append('<br/>onPrevClick from ' + from + ' - to ' + to)
                // },
                // onFinishClick: function (e, validation) {
                //     $('#result').append('<br/>onFinishClick validation ' + validation)
                // }
            });         


        }
    </script>

</body>



<!-- Mirrored from stepform.cidcode.net/timon-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2018 08:47:38 GMT -->
</html>
