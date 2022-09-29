<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<?php
include('database.php');
//session_start();
?>
<?php

if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('checkout.php','_self')</script>";
}

$em = $_SESSION['customer_email'];
$total2 = $_SESSION['total2'];
$total = $_SESSION['total'];
$shf = $_SESSION['shf'];
$tax = $_SESSION['tax'];
/*echo "<script>alert('<?php echo $em; ?>')</script>"*/

?>
<style>
select{
    background: url(http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png) no-repeat right 1rem center #ddd;
    -webkit-appearance: none;
}

input[type="button"] {
  -webkit-appearance: button;
  cursor: pointer;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.input-group {
  clear: both;
  margin: 15px 0;
  position: relative;
}

.input-group input[type='button'] {
  background-color: #eeeeee;
  width: auto;
  transition: all 300ms ease;
}


.input-group .button-minus,
.input-group .button-plus {
  font-weight: bold;
  padding: 0;
  position: relative;
}

.input-group .quantity-field {
  position: relative;
  height: 38px;
  left: -6px;
  text-align: center;
  width: 62px;
  display: inline-block;
  font-size: 13px;
  margin: 0 0 5px;
  resize: vertical;
}

.button-plus {
  left: -13px;
}

input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
}
</style>

<!-- MAIN -->
<!-- <main>
   <!-- HERO -->
<!--  <div class="nero" data-aos="slide-right"
  data-aos-offset="200"
  data-aos-delay="50"
  data-aos-duration="1000"
  data-aos-easing="ease-in-out"
  data-aos-mirror="true"
  data-aos-once="false"
  data-aos-anchor-placement="top-bottom">
    <div class="nero__heading">
      <span class="nero__bold">SHOP</span> Cart
    </div>
    <p class="nero__text">
    </p>
  </div>
</main>-->
<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <h2 style="text-align:right; font-size: 20px !important;"><a style="color: #ddb253" href="index.php">Home&nbsp;</a></h2>
                <h2 style="color: white !important; font-size: 20px !important;"> / Shipping Checkout</h2>
                <!--<ol>
                  <li><a href="index.html">Home</a></li>
                  <li>Customer Registration</li>
                </ol>-->
            </div>

        </div>
    </div>
</div>
<main id="main">
    <!-- <section class="breadcrumbs" style="color: white; background-color: black">-->
    <!--      <div class="container">-->
    <!---->
    <!--        <div class="d-flex justify-content-between align-items-center">-->
    <!--          <h2 class="textmove" style="text-align:right;"><a href="index.php">Home</a> / Cart</h2>-->
    <!--<ol>
      <li><a href="index.html">Home</a></li>
      <li>Customer Registration</li>-->
    <!--          </ol>-->
    <!--        </div>-->
    <!---->
    <!--      </div>-->
    <!--    </section>-->
</main>
<br/>
<br/>
<br/>

<div id="content" data-aos="slide-right"
     data-aos-offset="200"
     data-aos-delay="50"
     data-aos-duration="1000"
     data-aos-easing="ease-in-out"
     data-aos-mirror="true"
     data-aos-once="false"
     data-aos-anchor-placement="top-bottom"><!-- content Starts -->
    <div class="container" ><!-- container Starts -->

        <div class="row">

           <div class="col-md-8 col-sm-12 col-xs-12" ><!-- col-md-12 Starts -->

            <div class="box" style="border:solid 1px #e6e6e6 !important;"><!-- box Starts -->

                <div class="box-header" style="background-color: #191c1f; color: white"><!-- box-header Starts -->

                    <center><!-- center Starts -->

                        <h2 style="font-size:24px !important;font-style:bold;color:#ddb253 !important;">Shipping Address</h2>



                    </center><!-- center Ends -->

                </div><!-- box-header Ends -->
                        <label id="bbvx">Address Type</label>
 <select class="form-control" name="address_category" id="add_category" required>
						<option value="New Address">New Address</option>
    <option value="Saved Address">Saved Address</option>
	</select>
                <form action="shippingcheckout.php" id="business" method="post" enctype="multipart/form-data" ><!-- form Starts -->
					<br/>
                    <div class="form-group" ><!-- form-group Starts -->

                        <label id="bbvx">Country/region</label>
						
                        <select class="form-control" name="scountry_actualname" required>
						<option value="">Please select your Country/Region</option>
    <option value="AFG">Afghanistan</option>
    <option value="ALA">Åland Islands</option>
    <option value="ALB">Albania</option>
    <option value="DZA">Algeria</option>
    <option value="ASM">American Samoa</option>
    <option value="AND">Andorra</option>
    <option value="AGO">Angola</option>
    <option value="AIA">Anguilla</option>
    <option value="ATA">Antarctica</option>
    <option value="ATG">Antigua and Barbuda</option>
    <option value="ARG">Argentina</option>
    <option value="ARM">Armenia</option>
    <option value="ABW">Aruba</option>
    <option value="AUS">Australia</option>
    <option value="AUT">Austria</option>
    <option value="AZE">Azerbaijan</option>
    <option value="BHS">Bahamas</option>
    <option value="BHR">Bahrain</option>
    <option value="BGD">Bangladesh</option>
    <option value="BRB">Barbados</option>
    <option value="BLR">Belarus</option>
    <option value="BEL">Belgium</option>
    <option value="BLZ">Belize</option>
    <option value="BEN">Benin</option>
    <option value="BMU">Bermuda</option>
    <option value="BTN">Bhutan</option>
    <option value="BOL">Bolivia, Plurinational State of</option>
    <option value="BES">Bonaire, Sint Eustatius and Saba</option>
    <option value="BIH">Bosnia and Herzegovina</option>
    <option value="BWA">Botswana</option>
    <option value="BVT">Bouvet Island</option>
    <option value="BRA">Brazil</option>
    <option value="IOT">British Indian Ocean Territory</option>
    <option value="BRN">Brunei Darussalam</option>
    <option value="BGR">Bulgaria</option>
    <option value="BFA">Burkina Faso</option>
    <option value="BDI">Burundi</option>
    <option value="KHM">Cambodia</option>
    <option value="CMR">Cameroon</option>
    <option value="CAN">Canada</option>
    <option value="CPV">Cape Verde</option>
    <option value="CYM">Cayman Islands</option>
    <option value="CAF">Central African Republic</option>
    <option value="TCD">Chad</option>
    <option value="CHL">Chile</option>
    <option value="CHN">China</option>
    <option value="CXR">Christmas Island</option>
    <option value="CCK">Cocos (Keeling) Islands</option>
    <option value="COL">Colombia</option>
    <option value="COM">Comoros</option>
    <option value="COG">Congo</option>
    <option value="COD">Congo, the Democratic Republic of the</option>
    <option value="COK">Cook Islands</option>
    <option value="CRI">Costa Rica</option>
    <option value="CIV">Côte d'Ivoire</option>
    <option value="HRV">Croatia</option>
    <option value="CUB">Cuba</option>
    <option value="CUW">Curaçao</option>
    <option value="CYP">Cyprus</option>
    <option value="CZE">Czech Republic</option>
    <option value="DNK">Denmark</option>
    <option value="DJI">Djibouti</option>
    <option value="DMA">Dominica</option>
    <option value="DOM">Dominican Republic</option>
    <option value="ECU">Ecuador</option>
    <option value="EGY">Egypt</option>
    <option value="SLV">El Salvador</option>
    <option value="GNQ">Equatorial Guinea</option>
    <option value="ERI">Eritrea</option>
    <option value="EST">Estonia</option>
    <option value="ETH">Ethiopia</option>
    <option value="FLK">Falkland Islands (Malvinas)</option>
    <option value="FRO">Faroe Islands</option>
    <option value="FJI">Fiji</option>
    <option value="FIN">Finland</option>
    <option value="FRA">France</option>
    <option value="GUF">French Guiana</option>
    <option value="PYF">French Polynesia</option>
    <option value="ATF">French Southern Territories</option>
    <option value="GAB">Gabon</option>
    <option value="GMB">Gambia</option>
    <option value="GEO">Georgia</option>
    <option value="DEU">Germany</option>
    <option value="GHA">Ghana</option>
    <option value="GIB">Gibraltar</option>
    <option value="GRC">Greece</option>
    <option value="GRL">Greenland</option>
    <option value="GRD">Grenada</option>
    <option value="GLP">Guadeloupe</option>
    <option value="GUM">Guam</option>
    <option value="GTM">Guatemala</option>
    <option value="GGY">Guernsey</option>
    <option value="GIN">Guinea</option>
    <option value="GNB">Guinea-Bissau</option>
    <option value="GUY">Guyana</option>
    <option value="HTI">Haiti</option>
    <option value="HMD">Heard Island and McDonald Islands</option>
    <option value="VAT">Holy See (Vatican City State)</option>
    <option value="HND">Honduras</option>
    <option value="HKG">Hong Kong</option>
    <option value="HUN">Hungary</option>
    <option value="ISL">Iceland</option>
    <option value="IND">India</option>
    <option value="IDN">Indonesia</option>
    <option value="IRN">Iran, Islamic Republic of</option>
    <option value="IRQ">Iraq</option>
    <option value="IRL">Ireland</option>
    <option value="IMN">Isle of Man</option>
    <option value="ISR">Israel</option>
    <option value="ITA">Italy</option>
    <option value="JAM">Jamaica</option>
    <option value="JPN">Japan</option>
    <option value="JEY">Jersey</option>
    <option value="JOR">Jordan</option>
    <option value="KAZ">Kazakhstan</option>
    <option value="KEN">Kenya</option>
    <option value="KIR">Kiribati</option>
    <option value="PRK">Korea, Democratic People's Republic of</option>
    <option value="KOR">Korea, Republic of</option>
    <option value="KWT">Kuwait</option>
    <option value="KGZ">Kyrgyzstan</option>
    <option value="LAO">Lao People's Democratic Republic</option>
    <option value="LVA">Latvia</option>
    <option value="LBN">Lebanon</option>
    <option value="LSO">Lesotho</option>
    <option value="LBR">Liberia</option>
    <option value="LBY">Libya</option>
    <option value="LIE">Liechtenstein</option>
    <option value="LTU">Lithuania</option>
    <option value="LUX">Luxembourg</option>
    <option value="MAC">Macao</option>
    <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
    <option value="MDG">Madagascar</option>
    <option value="MWI">Malawi</option>
    <option value="MYS">Malaysia</option>
    <option value="MDV">Maldives</option>
    <option value="MLI">Mali</option>
    <option value="MLT">Malta</option>
    <option value="MHL">Marshall Islands</option>
    <option value="MTQ">Martinique</option>
    <option value="MRT">Mauritania</option>
    <option value="MUS">Mauritius</option>
    <option value="MYT">Mayotte</option>
    <option value="MEX">Mexico</option>
    <option value="FSM">Micronesia, Federated States of</option>
    <option value="MDA">Moldova, Republic of</option>
    <option value="MCO">Monaco</option>
    <option value="MNG">Mongolia</option>
    <option value="MNE">Montenegro</option>
    <option value="MSR">Montserrat</option>
    <option value="MAR">Morocco</option>
    <option value="MOZ">Mozambique</option>
    <option value="MMR">Myanmar</option>
    <option value="NAM">Namibia</option>
    <option value="NRU">Nauru</option>
    <option value="NPL">Nepal</option>
    <option value="NLD">Netherlands</option>
    <option value="NCL">New Caledonia</option>
    <option value="NZL">New Zealand</option>
    <option value="NIC">Nicaragua</option>
    <option value="NER">Niger</option>
    <option value="NGA">Nigeria</option>
    <option value="NIU">Niue</option>
    <option value="NFK">Norfolk Island</option>
    <option value="MNP">Northern Mariana Islands</option>
    <option value="NOR">Norway</option>
    <option value="OMN">Oman</option>
    <option value="PAK">Pakistan</option>
    <option value="PLW">Palau</option>
    <option value="PSE">Palestinian Territory, Occupied</option>
    <option value="PAN">Panama</option>
    <option value="PNG">Papua New Guinea</option>
    <option value="PRY">Paraguay</option>
    <option value="PER">Peru</option>
    <option value="PHL">Philippines</option>
    <option value="PCN">Pitcairn</option>
    <option value="POL">Poland</option>
    <option value="PRT">Portugal</option>
    <option value="PRI">Puerto Rico</option>
    <option value="QAT">Qatar</option>
    <option value="REU">Réunion</option>
    <option value="ROU">Romania</option>
    <option value="RUS">Russian Federation</option>
    <option value="RWA">Rwanda</option>
    <option value="BLM">Saint Barthélemy</option>
    <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
    <option value="KNA">Saint Kitts and Nevis</option>
    <option value="LCA">Saint Lucia</option>
    <option value="MAF">Saint Martin (French part)</option>
    <option value="SPM">Saint Pierre and Miquelon</option>
    <option value="VCT">Saint Vincent and the Grenadines</option>
    <option value="WSM">Samoa</option>
    <option value="SMR">San Marino</option>
    <option value="STP">Sao Tome and Principe</option>
    <option value="SAU">Saudi Arabia</option>
    <option value="SEN">Senegal</option>
    <option value="SRB">Serbia</option>
    <option value="SYC">Seychelles</option>
    <option value="SLE">Sierra Leone</option>
    <option value="SGP">Singapore</option>
    <option value="SXM">Sint Maarten (Dutch part)</option>
    <option value="SVK">Slovakia</option>
    <option value="SVN">Slovenia</option>
    <option value="SLB">Solomon Islands</option>
    <option value="SOM">Somalia</option>
    <option value="ZAF">South Africa</option>
    <option value="SGS">South Georgia and the South Sandwich Islands</option>
    <option value="SSD">South Sudan</option>
    <option value="ESP">Spain</option>
    <option value="LKA">Sri Lanka</option>
    <option value="SDN">Sudan</option>
    <option value="SUR">Suriname</option>
    <option value="SJM">Svalbard and Jan Mayen</option>
    <option value="SWZ">Swaziland</option>
    <option value="SWE">Sweden</option>
    <option value="CHE">Switzerland</option>
    <option value="SYR">Syrian Arab Republic</option>
    <option value="TWN">Taiwan, Province of China</option>
    <option value="TJK">Tajikistan</option>
    <option value="TZA">Tanzania, United Republic of</option>
    <option value="THA">Thailand</option>
    <option value="TLS">Timor-Leste</option>
    <option value="TGO">Togo</option>
    <option value="TKL">Tokelau</option>
    <option value="TON">Tonga</option>
    <option value="TTO">Trinidad and Tobago</option>
    <option value="TUN">Tunisia</option>
    <option value="TUR">Turkey</option>
    <option value="TKM">Turkmenistan</option>
    <option value="TCA">Turks and Caicos Islands</option>
    <option value="TUV">Tuvalu</option>
    <option value="UGA">Uganda</option>
    <option value="UKR">Ukraine</option>
    <option value="ARE">United Arab Emirates</option>
    <option value="GBR">United Kingdom</option>
    <option value="USA">United States</option>
    <option value="UMI">United States Minor Outlying Islands</option>
    <option value="URY">Uruguay</option>
    <option value="UZB">Uzbekistan</option>
    <option value="VUT">Vanuatu</option>
    <option value="VEN">Venezuela, Bolivarian Republic of</option>
    <option value="VNM">Viet Nam</option>
    <option value="VGB">Virgin Islands, British</option>
    <option value="VIR">Virgin Islands, U.S.</option>
    <option value="WLF">Wallis and Futuna</option>
    <option value="ESH">Western Sahara</option>
    <option value="YEM">Yemen</option>
    <option value="ZMB">Zambia</option>
    <option value="ZWE">Zimbabwe</option>
</select>                  

                    </div><!-- form-group Ends -->
                    <br/>
					
                    <div class="form-group" ><!-- form-group Starts -->
                    <div class="row">
					<div class="col-md-6 form-group">
                        <label id="bbvx">First Name</label>

                        <input type="text" class="form-control" name="su_fname" required>

                    </div><!-- form-group Ends -->
					 <div class="col-md-6 form-group mt-3 mt-md-0">
					 <label id="bbvx">Last Name</label>

                        <input type="text" class="form-control" name="su_lname" required>

                    </div><!-- form-group Ends -->
					</div>
					</div>
                    <br/>
					<div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Address</label>

                        <input type="text" class="form-control" name="su_address" required>

                    </div><!-- form-group Ends -->
					<br>
					<div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Apartment, suite, etc.</label>

                        <input type="text" class="form-control" name="su_apt56">

                    </div><!-- form-group Ends -->
					<br/>
                    <div class="form-group"><!-- form-group Starts -->
                    <div class="row">
					<div class="col-md-4 form-group">
                        <label id="bbvx">City</label>

                        <input type="text" class="form-control" name="su_city" required>

                    </div><!-- form-group Ends -->
                     <div class="col-md-4 form-group mt-3 mt-md-0">

                        <label id="bbvx">State</label>

                        <input type="text" class="form-control" name="su_state" required>

                    </div><!-- form-group Ends -->
                    <div class="col-md-4 form-group mt-3 mt-md-1">

                        <label id="bbvx">Pincode</label>

                        <input type="text" class="form-control" name="su_pincode" required>

                    </div><!-- form-group Ends -->
					</div>
					</div>
                    <br/>
					<div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Phone</label>

                        <input type="number" maxlength="10" class="form-control" name="su_contact" required>

                    </div><!-- form-group Ends -->

                    <input type="hidden" name="testdetails" value="testdata">
					<br/>
					<div class="text-center"><!-- text-center Starts -->

                        <input type="submit" name="addshippinginfo" value="ADD" class="btn btn-primary">

                    </div><!-- text-center Ends -->
</form><!-- form Ends -->
                    <!-- form-group Ends -->
					 <?php
            $get_shipdata = "select * from customers where customer_email='$em'";
            $run_shipdata = mysqli_query($con,$get_shipdata);
            $row_shipdata = mysqli_fetch_array($run_shipdata);
			$check_shipdata = mysqli_num_rows($run_shipdata);
			$bc_name = $row_shipdata['customer_name'];
			$bc_lname = $row_shipdata['customer_lname'];
			$bc_email = $row_shipdata['customer_email'];
			$bc_contact = $row_shipdata['customer_contact'];
			$bc_address = $row_shipdata['customer_address'];
			$bc_state = $row_shipdata['customer_state'];
			$bc_city = $row_shipdata['customer_city'];
			$bc_pincode = $row_shipdata['customer_pincode'];
			$bc_country = $row_shipdata['customer_country'];
			if($check_shipdata>0)
			{
			?>
			
					   <form action="shippingcheckout.php" id="business2" method="post" enctype="multipart/form-data" ><!-- form Starts -->
					<br/>
                    <div class="form-group" ><!-- form-group Starts -->

                        <label id="bbvx">Country/region</label>
						
                    <input type="text" class="form-control" value="<?php echo $bc_country; ?>" name="scountry_actualname" readonly>

                    </div><!-- form-group Ends -->
                    <br/>
					
                    <div class="form-group" ><!-- form-group Starts -->
                    <div class="row">
					<div class="col-md-6 form-group">
                        <label id="bbvx">First Name</label>

                        <input type="text" class="form-control" value="<?php echo $bc_name; ?>" name="su_fname" readonly>

                    </div><!-- form-group Ends -->
					 <div class="col-md-6 form-group mt-3 mt-md-0">
					 <label id="bbvx">Last Name</label>

                        <input type="text" class="form-control" value="<?php echo $bc_lname; ?>" name="su_lname" readonly>

                    </div><!-- form-group Ends -->
					</div>
					</div>
                    <br/>
					<div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Address</label>

                        <input type="text" class="form-control" value="<?php echo $bc_address; ?>" name="su_address" readonly>

                    </div><!-- form-group Ends -->
					<br>
					<div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Apartment, suite, etc.</label>

                        <input type="text" class="form-control" name="su_apt56">

                    </div><!-- form-group Ends -->
					<br/>
                    <div class="form-group"><!-- form-group Starts -->
                    <div class="row">
					<div class="col-md-4 form-group">
                        <label id="bbvx">City</label>

                        <input type="text" class="form-control" value="<?php echo $bc_city; ?>" name="su_city" readonly>

                    </div><!-- form-group Ends -->
                     <div class="col-md-4 form-group mt-3 mt-md-0">

                        <label id="bbvx">State</label>

                        <input type="text" class="form-control" value="<?php echo $bc_state; ?>" name="su_state" readonly>

                    </div><!-- form-group Ends -->
                    <div class="col-md-4 form-group mt-3 mt-md-1">

                        <label id="bbvx">Pincode</label>

                        <input type="text" class="form-control" value="<?php echo $bc_pincode; ?>" name="su_pincode" readonly>

                    </div><!-- form-group Ends -->
					</div>
					</div>
                    <br/>
					<div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Phone</label>

                        <input type="number" maxlength="10" class="form-control" value="<?php echo $bc_contact; ?>" name="su_contact" readonly>

                    </div><!-- form-group Ends -->

                    <input type="hidden" name="testdetails" value="testdata">
					<br/>
					<div class="text-center"><!-- text-center Starts -->

                        <input type="submit" name="addshippinginfo" value="ADD" class="btn btn-primary">

                    </div><!-- text-center Ends -->
</form><!-- form Ends -->
			<?php } ?>
                    <!-- form-group Ends -->
                    <br/>
            </div><!-- box Ends -->
  <div class="box-footer" style="border-radius: 20px;background-color: #000000; color: white; border: 0px!important;display: block;
    justify-content: space-evenly;
    align-items: center;
    flex-grow: 1;margin:0px !important;padding:0px !important;"><!-- box-footer Starts -->

                            <div class="pull-left"><!-- pull-left Starts -->

                                <a href="cart.php" class="btn btn-secondary">

                                    <i class="fa fa-chevron-left"></i> Return to cart

                                </a>

                            </div><!-- pull-left Ends -->
							 <?php

                    $session_email = $_SESSION['customer_email'];

                    $select_customer = "select * from customers where customer_email='$em'";

                    $run_customer = mysqli_query($con,$select_customer);

                    $row_customer = mysqli_fetch_array($run_customer);

                    $customer_id = $row_customer['customer_id'];


                    ?>
                            <div class="pull-right"><!-- pull-right Starts -->
							<a href="order.php?c_id=<?php echo $customer_id; ?>">
                           <button class="btn btn-secondary" type="submit" id="update_shipinfo" name="shipset" value="testshipping">
                                Continue to shipping <i class="fa fa-chevron-right"></i> 
                                </button>
								</a>
                                <!--<a href="checkout.php" class="btn btn-primary">-->
                                <!---->
                                <!--Proceed to checkout <i class="fa fa-chevron-right"></i>-->
                                <!---->
                                <!--</a>-->

                            </div><!-- pull-right Ends -->

                        </div><!-- box-footer Ends -->
        </div><!-- col-md-12 Ends -->
		
            <div class="col-md-4 col-sm-12 col-xs-12" style="padding: 0 20px"><!-- col-md-3 Starts -->

                <div class="box" id="order-summary" style="background-color: #2c3034;color: white; border-radius: 20px; border: 0px; border-color: black"><!-- box Starts -->

                    <div class="box-header" style="background-color: #2c3034; color: white; border-radius: 20px 20px 0 0 ; border: 0px"><!-- box-header Starts -->

                        <h3 style="text-align: center;font-weight:bold !important;color:#ffffff !important;">Order Summary</h3>

                    </div><!-- box-header Ends -->
					
                    <!--<p class="text-muted">
                        Shipping and additional costs are calculated based on the values you have entered.
                    </p>-->

                    <div class="table-responsive" style="padding: 0 20px"><!-- table-responsive Starts -->

                        <table class="table"><!-- table Starts -->

                            <tbody><!-- tbody Starts -->

                            <tr>

                                <td style="color: ghostwhite;font-weight:bold !important;border-bottom:none !important;"> Order Subtotal </td>

                                <th style="border-bottom:none !important;"> &#X20B9;<?php echo $total2; ?>.00 </th>

                            </tr>

                            <tr>

                                <td style="color: ghostwhite;border-bottom:none !important;"> Shipping and handling </td>

                                <th style="border-bottom:none !important;">&#X20B9;<?php echo $shf; ?>.00</th>

                            </tr>

                            <tr>

                                <td style="color: ghostwhite;border-bottom:none !important;">Tax</td>

                                <th style="border-bottom:none !important;"><?php echo $tax; ?>&nbsp;&#37;</th>

                            </tr>

                            <tr class="total">

                                <td style="color: white;border-bottom:none !important;">Total</td>

                                <th style="color: white;border-bottom:none !important;">&#X20B9;<?php echo $total; ?></th>

                            </tr>

                            </tbody><!-- tbody Ends -->

                        </table><!-- table Ends -->

                    </div><!-- table-responsive Ends -->
                    
                </div><!-- box Ends -->

            </div><!-- col-md-3 Ends -->


        </div>


    </div><!-- col-md-9 Ends -->

</div><!-- container Ends -->

<br/>
<br/>
<br/>
<br/>
<script>
$('#add_category').on('change', function () {
    if(this.value === "New Address"){
        $("#business").show();
		$("#business2").hide();
    } else {
        $("#business2").show();
		$("#business").hide();
    }
});
$('#add_category').change();
</script>
<?php
include("database.php");
session_start();

if(!empty($_POST['testdetails']) && $_POST['testdetails'] == 'testdata'){

    $scountry_actualname = $_POST['scountry_actualname'];

    $su_fname = $_POST['su_fname'];

    $su_lname = $_POST['su_lname'];

    $su_address = $_POST['su_address'];

    $su_apt56 = $_POST['su_apt56'];

    $su_city = $_POST['su_city'];

    $su_state = $_POST['su_state'];

    $su_pincode = $_POST['su_pincode'];

    $su_contact = $_POST['su_contact'];
	$em = $_SESSION['customer_email'];
	$select_shipdetails = "select * from shippinginfodata where customer_email='$em'";
$run_shipdetails = mysqli_query($con,$select_shipdetails);
$count = mysqli_num_rows($run_shipdetails);
if($count>0)
{
 $insert_shippinginfo = "update shippinginfodata set customer_email='$em', country='$scountry_actualname', sfname='$su_fname', slname='$su_lname', saddress='$su_address', sapartment='$su_apt56', scity='$su_city', sstate='$su_state', spincode='$su_pincode', sphone='$su_contact' where customer_email='$em'";
 $test_shippinginfo = mysqli_query($con,$insert_shippinginfo);
}
else if($count==0)
{
    $insert_shippinginfo = "insert into shippinginfodata (customer_email, country, sfname, slname, saddress, sapartment, scity, sstate, spincode, sphone) values ('$em','$scountry_actualname','$su_fname','$su_lname','$su_address','$su_apt56','$su_city','$su_state','$su_pincode','$su_contact')";
 $test_shippinginfo = mysqli_query($con,$insert_shippinginfo);
}
}
?>

<?php

include("includes/footer.php");

?>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/preloader.js"></script>
<script src="koha.js"></script>
<script src="js/init-round.js"></script>
<script src="js/main.js"></script>
<script src="js/plugin.js"></script>

<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
</body>
</html>
