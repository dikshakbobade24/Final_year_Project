<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CEH</title>
        <?php require 'utils/styles.php';?>
            </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
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
    </head>
    <body onload="scrollToContent()">
        <div class="content">
        <div class="container">
        <div class="col-md-12">
        <h1 style="color:#222222; font-size:48px; font-weight:bold; text-align:center; 
                        font-family: 'Poppins', sans-serif; letter-spacing: 2px; 
                       text-transform: uppercase; margin-bottom: 40px;
                       text-shadow: 2px 2px #ccc;">
                <strong>Register Your Favorite Events</strong>
            </h1>
        </div>
    </div>
</div> 

            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="row"><!--technical content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="https://source.unsplash.com/random/540x337.8/?coding" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong>Technical Events</strong></u></h1><!--title-->
                            <p><!--content-->
                                EMBRACE YOUR TECHNICAL SKILLS BY PARTICIPATING IN OUR DIFFERENT TECHNICAL EVENTS!
                            </p>
                            
                            <br><br>
                        <?php $id=1;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Technical Events</a>'
                        ?>
                             </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                        <img src="https://source.unsplash.com/random/540x337.8/?gamer" class="img-responsive">

                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Gaming Events</u></strong></h1><!--title-->
                            <p><!--content-->
                                EMBRACE YOUR GAMING SKILLS BY PARTICIPATING IN OUR DIFFERENT GAMING EVENTS!
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=2;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Gaming Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
         

            
            <div class="row">
            <hr>
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="https://source.unsplash.com/random/540x337.8/?stage" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Off-Stage Events</u></strong></h1><!--title-->
                            <p><!--content-->
                                 EMBRACE YOUR TALENT BY PARTICIPATING IN OUR DIFFERENT OFF-STAGE EVENTS!
                            </p>
                            
                            
                            <br><br><br>
                            <?php 
                            $id=3;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Off-Stage Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
  
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>