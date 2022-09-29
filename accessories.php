<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<style>
@media only screen and (min-width: 768px) {
#testacp
{
font-size: 5vw !important;
}
#testacpunit
{
font-size: 3vw !important;
}
}
@media only screen and (max-width: 768px) {
#testacp
{
font-size: 7.4vw !important;
}
#testacpunit
{
font-size: 4.8vw !important;
}
}
</style>
<div style="margin: 100px 0 20px 0; width: 100%">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <p style="text-align:right; text-decoration: none; font-size: 20px !important;"><a style="text-decoration: none; color: #ddb253 !important;" href="index.php">Home&nbsp;</a></p>
                <p style="color: white !important; font-size: 20px !important;"> / Accessories</p>
            </div>
        </div>
    </div>
</div>
<section>
    <div class='quotation_div'>
    <span class="img-container"> <!-- Inline parent element -->

      <img src="assets/kohaneon.png" id="accessoriesbannerimage" data-aos="fade-up" data-aos-duration="30000"
            alt="">
        <div class='overlay'>
            <h1 id="testacp" data-aos="fade-up" data-aos-duration="30000" class="accesstest"
                style="text-align: center; font-family: 'Roboto Serif' !important; color: #ddb253 !important;">Koha Accessories</h1>
			 <h2 id="testacpunit" class="white-text-size" data-aos="fade-up" data-aos-duration="30000" class="ptest"
                style="text-align: center;color:white;">Simple Appreciation for Vibrant Colors</h2>
        </div>
    </span>
    </div>
</section>
<br/>
<br/>
<br/>
<br/>
<div style="display: flex; text-align: center; justify-content: center;width: 100vw"><h6 class="link1" data-aos="fade-up" data-aos-duration="30000" style="color:white;text-align:center;font-size:20px;"> Visually Inspiring.Uniquely Artistic.</h6></div>
<br/>
<br/>

<div id="content" data-aos="fade-up"
     data-aos-offset="200"
     data-aos-delay="50"
     data-aos-duration="1000"
     data-aos-easing="ease-in-out"
     data-aos-mirror="true"
     data-aos-once="false"
     data-aos-anchor-placement="top-bottom"><!-- content Starts -->
    <div class="container "><!-- container Starts -->

        <!--<div class="col-md-12" >-->


        <!--</div>-->

        <div class="row">
            <div class="col-md-12 col-sm-12"><!-- col-md-9 Starts --->

                <div class="row" style="width: 100%">
                    <?php getAccesories(); ?>

                </div>
            </div><!-- row Ends -->
        </div>

       <!-- <center><!-- center Starts -->
         <!--   <div class="d-flex justify-content-center">
                <nav>
                    <ul class="pagination" style="text-align: center"><!-- pagination Starts -->

                     <!--   <?php //getPaginator(); ?>

                    </ul><!-- pagination Ends -->
             <!--   </nav>
            </div>
        </center><!-- center Ends -->


    </div><!-- col-md-9 Ends --->


</div><!--- wait Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->
<section>
    <div class='quotation_div'>
        <!--    <span class="img-container">-->

        <img src="assets/gallery footer.jpg" id="gallerybannerimage" data-aos="fade-up" data-aos-duration="30000"
             alt="">
        <div class='overlay'>
            <p class="white-text-size" data-aos="fade-up" data-aos-duration="30000"
               style="text-align: center;color:white;">NOT LIKE WHAT YOU SEE? OR GOT A PROJECT IN MIND?<br><a href="contactus.php" style="color:white;text-decoration:none;">LET'S HAVE A TALK!</a> KOHA ENCOURAGES AND EMPOWERS<br/>CREATORS' VISION.</p>
<!--            <div style="display: flex; justify-content: center;">-->
<!--                <button data-aos="fade-up" data-aos-duration="30000" style="border: 0; background-color: grey; color: white; border-radius: 6px;"><a href="https://www.thekoha.com/contactus.php" style="color:white;text-decoration:none;font-size:25px;">Contact Us</a></button>-->
<!--            </div>-->
        </div>
        <!--    </span>-->
    </div>
</section>
<br/>
<br/>
<br/>
<br/>
<?php

include("includes/footer.php");

?>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/preloader.js"></script>
<script src="koha.js"></script>
<script src="js/init-round.js"></script>
<script src="js/main.js"></script>
<script src="js/plugin.js"></script>

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script>

    $(document).ready(function () {

/// Hide And Show Code Starts ///

        $('.nav-toggle').click(function () {

            $(".panel-collapse,.collapse-data").slideToggle(700, function () {

                if ($(this).css('display') == 'none') {

                    $(".hide-show").html('Show');

                } else {

                    $(".hide-show").html('Hide');

                }

            });

        });

/// Hide And Show Code Ends ///

/// Search Filters code Starts ///

        $(function () {

            $.fn.extend({

                filterTable: function () {

                    return this.each(function () {

                        $(this).on('keyup', function () {

                            var $this = $(this),

                                search = $this.val().toLowerCase(),

                                target = $this.attr('data-filters'),

                                handle = $(target),

                                rows = handle.find('li a');

                            if (search == '') {

                                rows.show();

                            } else {

                                rows.each(function () {

                                    var $this = $(this);

                                    $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();

                                });

                            }

                        });

                    });

                }

            });

            $('[data-action="filter"][id="dev-table-filter"]').filterTable();

        });

/// Search Filters code Ends ///

    });


</script>


<script>


    $(document).ready(function () {

        // getProducts Function Code Starts

        function getProducts() {

            // Manufacturers Code Starts

            var sPath = '';

            var aInputs = $('li').find('.get_manufacturer');

            var aKeys = Array();

            var aValues = Array();

            iKey = 0;

            $.each(aInputs, function (key, oInput) {

                if (oInput.checked) {

                    aKeys[iKey] = oInput.value

                }
                ;

                iKey++;

            });

            if (aKeys.length > 0) {

                var sPath = '';

                for (var i = 0; i < aKeys.length; i++) {

                    sPath = sPath + 'man[]=' + aKeys[i] + '&';

                }

            }

// Manufacturers Code ENDS

// Products Categories Code Starts

            var aInputs = Array();

            var aInputs = $('li').find('.get_p_cat');

            var aKeys = Array();

            var aValues = Array();

            iKey = 0;

            $.each(aInputs, function (key, oInput) {

                if (oInput.checked) {

                    aKeys[iKey] = oInput.value

                }
                ;

                iKey++;

            });

            if (aKeys.length > 0) {

                for (var i = 0; i < aKeys.length; i++) {

                    sPath = sPath + 'p_cat[]=' + aKeys[i] + '&';

                }

            }

// Products Categories Code ENDS

            // Categories Code Starts

            var aInputs = Array();

            var aInputs = $('li').find('.get_cat');

            var aKeys = Array();

            var aValues = Array();

            iKey = 0;

            $.each(aInputs, function (key, oInput) {

                if (oInput.checked) {

                    aKeys[iKey] = oInput.value

                }
                ;

                iKey++;

            });

            if (aKeys.length > 0) {

                for (var i = 0; i < aKeys.length; i++) {

                    sPath = sPath + 'cat[]=' + aKeys[i] + '&';

                }

            }

            // Categories Code ENDS

            // Loader Code Starts

            $('#wait').html('<img src="images/load.gif">');

// Loader Code ENDS

// ajax Code Starts

            $.ajax({

                url: "load.php",

                method: "POST",

                data: sPath + 'sAction=getProducts',

                success: function (data) {

                    $('#Products').html('');

                    $('#Products').html(data);

                    $("#wait").empty();

                }

            });

            $.ajax({
                url: "load.php",
                method: "POST",
                data: sPath + 'sAction=getPaginator',
                success: function (data) {
                    $('.pagination').html('');
                    $('.pagination').html(data);
                }

            });

// ajax Code Ends

        }

        // getProducts Function Code Ends

        $('.get_manufacturer').click(function () {

            getProducts();

        });


        $('.get_p_cat').click(function () {

            getProducts();

        });

        $('.get_cat').click(function () {

            getProducts();

        });


    });

</script>
<script>document.title = "KOHA | Accessories";</script>
</body>

</html>
