<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CEH</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->

        <script>
            function scrollToContent() {
                var element = document.getElementById("content");
                var rect = element.getBoundingClientRect();
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                var finalScroll = rect.top + scrollTop - 100; // adjust the offset value as per your requirement
                window.scroll({
                    top: finalScroll,
                    behavior: 'smooth' // add smooth scrolling behavior
                });
            }
        </script>

        <head>

    <body>
    <body onload="scrollToContent()">
    
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1 style="color:#003300 ; font-size:38px ;"><strong>Contact Us</strong></h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span> Piyush Pise</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: piyushpise@gmail.com<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9322451385
                    </p>
                </div>
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span> Harsh Dubey</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: hdubey@gmail.com<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 7249208112
                    </p>
                </div>
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span> Aryan Moon</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: aryansunilmoon@gmail.com<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 8485875731
                    </p>
                </div>
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span>  Dikshak Bobade</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: dikshakbobade@gmail.com<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 8485875731
                    </p>
                </div>
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span>  Bhargav Bhujade</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: bhargavbhujade@gmail.com<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 7058542718
                    </p>
                </div>
            </div>
			 
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
