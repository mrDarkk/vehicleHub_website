<?php

$MERCHANT_KEY = "kTigSKBv";
$SALT = "ODCvfIYLlt";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>




  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>

<!-- lkafhjwhjerhej -->


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




<!-- sdnfhfjrjhegjerg -->
  </head>
  <body onload="submitPayuForm()">

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
    <center>
    <div class="breadcrumbs">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="breadcrumbs__title">Pay - Rs. 200 /-</div>
                                                        <div class="breadcrumbs__items">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table cellpadding="40px" cellspacing="40px">
        <tr>
          <td></td>
        </tr>
        <tr>
          <!-- <td>Amount: </td> -->
        <!--   <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td> -->
        
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
            <td><input type="hidden" name="amount" value="200" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><input name="productinfo"  value="<?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?>"></input></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>
        <tr>  </tr>
        <tr>

          <?php if(!$hash) { ?>
          <td colspan="4" align="center"><input type="submit" value="Submit" /></td>
           
          <?php } ?>
        </tr>
      </table>
    </form>
    </center>
  </body>
</html>
