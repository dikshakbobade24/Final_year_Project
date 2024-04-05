<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CEH</title>
    <?php require 'utils/styles.php'; ?>
    <!--css links. file found in utils folder-->
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
<style>
    /* Large rounded green border */
    hr.blueline {
        border: 10px solid #00004d;
        border-radius: 5px;
    }
    </style>
<body style="background-color:#b3e0ff ">
<?php require 'utils/header.php'; ?>
<hr class="blueline">
<div class="col-md-12">
    <h1>About Us</h1>

    <p id="bj">.</p>

    <p id="bj">


        <p id="bj"> </p>

    </div>
    <hr class="blueline">
    <div id="content"> <!-- add id for the smooth scrolling to target -->
        <?php require 'utils/footer.php'; ?>
    </div>
</body>
</html>