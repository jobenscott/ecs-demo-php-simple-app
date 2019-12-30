<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple ECS App w/ AutoDeploy Pipeline</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Simple ECS App w/ AutoDeploy Pipeline</h1>
                <h2>well look at you!</h2>
                <p>Your PHP application is now running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                
                <h4 id="clock-counter"></h4>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
    <script type="text/javascript"> 
        function display_c(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
            var my_date = new Date()
            my_date=my_date.toUTCString();// changing the display to UTC string
            document.getElementById('clock-counter').innerHTML = my_date;
            display_c();
        }
    </script>
</html>
