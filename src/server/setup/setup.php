<!DOCTYPE html>
<html>
    <head>
        <!-- META -->
        <meta charset="utf-8">

        <!-- TITLE -->
        <title>S H E - Setup</title>

        <!-- CSS -->
        <link href="../style/style.css" rel="stylesheet" type="text/css">

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- SCRIPT -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="setup.js"></script>


    </head>
    <body>
        <div class="setup setup_outer">
            <div class="setup setup_headline">
                <h2>SETUP - STEP <span class="setup setup_step">1</span>/4</h2>
                <div class="setup setup_img"></div>
            </div>
            <div class="setup setup_wrapper">
                <div class="setup setup_slider">
                    <div class="setup setup_slide setup_welcome">
                        <div class="setup setup_slide_inner">
                            <h3>CHOOSE A NAME</h3>
                            <div class="setup setup_content">
                                <p>
                                    Choose a name for your SHE Base Station. This name will be used to access our intuitve web interface.
                                    This name can be changed later if needed.
                                </p>
                                <input type="text" name="server_name" class="setup setup_server_name setup_text_input" minlength="4" id="server_name"/>
                                <h3>Your future url:</h3>
                                <p class="setup setup_dns"><span id="server_dns"></span>.she</p>
                            </div>
                        </div>
                        <div class="next" id="next1"><i class="fa fa-caret-right" style="font-size: 150px; color: #4FC3F7"></i></div>
                    </div>

                    <div class="setup setup_slide setup_welcome">
                        <div class="prev" id="prev1"><i class="fa fa-caret-left" style="font-size: 150px; color: #4FC3F7"></i></div>
                        <div class="setup setup_slide_inner">
                            <h3>NETWORK CONFIG</h3>
                            <div class="setup setup_content">
                                <p>
                                    Choose a name for your SHE Base Station. This name will be used to access our intuitve web interface.
                                    This name can be changed later if needed.
                                </p>
                            </div>
                        </div>
                        <div class="next" id="next1"><i class="fa fa-caret-right" style="font-size: 150px; color: #4FC3F7"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php



 ?>
