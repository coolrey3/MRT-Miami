<!DOCTYPE html>

<html>

<head>
    <title>Mobile Repair Techs</title>
    <link href="./styles/style.css" type="text/css" rel=stylesheet>
    <script src="JS/script.js"></script>
    <script language="php" type="text/php"> echo 'test this';</script>

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>

<body>
    <div id="header">
        <h1>
            We Fix All your Electronic Devices for a great price!
        </h1>
    </div>

    <div id="body">
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><a href="#devicetable" target="_self"><img src="data1/images/banner.jpg" alt="Repairs" title="Repairs" id="wows1_0"/></a></li>
		<li><a href="#services"><img src="data1/images/repairs.jpg" alt="Services" title="Services" id="wows1_1"/></a></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Repairs"><span><img src="data1/tooltips/banner.jpg" alt="Repairs"/>1</span></a>
		<a href="#" title="Services"><span><img src="data1/tooltips/repairs.jpg" alt="Services"/>2</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">responsive slider</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->            <div id="devicetitle">
                <h2>Choose your device below to get started!</h2>
            </div>

            <div id="devicetable">
                <table>
                    <thead>

                        <th>
                            <p>Smartphone</p>
                        </th>

                        <th>
                            <p>Tablet</p>
                        </th>
                        <th>
                            <p>Computer</p>
                        </th>

                        <th>
                            <p>Game Console</p>
                        </th>
                    </thead>

                    <tr>
                        <td>

                            <div id="smartphones" onclick="smartphonesFunction()">
                                <img src="Images/Smartphones.png">
                            </div>
                        </td>


                        <td>
                            <img src="Images/iPad.png">
                        </td>



                        <td>
                            <img src="Images/iMac.png">

                            <!--  <div id="selectdevice">
                            <div id="devicebg">
                            </div>
                        </div>
-->
                        </td>
                        <td>
                            <img src="Images/control.png">
                        </td>

                    </tr>
                </table>
            </div>

            <!-- start custom code -->

            <div id="smartphonestable" style="display:none;text-align:center;">
                <h1>Choose your type of Smartphone!</h1>
                <table>
                    <thead>

                        <th>
                            <p>iPhone</p>
                        </th>

                        <th>
                            <p>Samsung</p>

                        </th>
                        <th>
                            <p>Other Smartphone</p>
                        </th>
                    </thead>

                    <tr>
                        <td>

                            <img src="Images/Smartphones.png" onclick="iphonesFunction()">
                        </td>


                        <td>
                            <img src="Images/samsung.png">
                        </td>



                        <td>
                            <img src="Images/other-smartphone.png">


                    </tr>
                </table>

                <!-- end custom code -->

            </div>

            <!-- start iphone table -->

            <div id="iphonestable" style="display:none;text-align:center;">
                <h1>Choose your iPhone model!</h1>
                <table>
                    <thead>

                        <th>
                            <p>iPhone 5/5s/5c</p>
                        </th>

                        <th>
                            <p>iPhone 6/6s/6+</p>

                        </th>
                        <th>
                            <p>iPhone 7/7+</p>
                        </th>
                        <th>
                            <p>iPhone 8/8+</p>
                        </th>
                        <th>
                            <p>iPhone X/Xs</p>
                        </th>

                    </thead>

                    <tr>
                        <td>

                            <img src="Images/Smartphones.png">
                        </td>


                        <td>
                            <img src="Images/samsung.png">
                        </td>



                        <td>
                            <img src="Images/other-smartphone.png">
                        </td>

                        <td>
                            <img src="Images/other-smartphone.png">
                        </td>

                        <td>
                            <img src="Images/other-smartphone.png">
                        </td>


                    </tr>
                </table>
            </div>

            <div id="startoverbutton">
                <button onclick="startOver()"> Start Over</button>
            </div>
        </div>

        <!-- end iphone table -->

        <!-- start services table -->


        <div id="services">
            <h1> What we can help with!</h1>
            <div id="servicestable">
                <table>
                    <thead>
                    </thead>


                    <tr>
                        <td>
                            <p>Repair Services</p>

                            <ul>
                                <li>Broken Screen</li> -
                                <li>Broken Home Button</li> -
                                <li>Battery Replacement</li> -
                                <li>Charger Port Repair</li> -
                                <li>Water Damage</li> -
                                <li>No Sound</li> -
                                <li> And More!</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <img src="Images/banner.jpg">
                        </td>

                    </tr>
                </table>

            </div>
            <a href="#appointment">
                <button> Schedule an Appointment or FREE Quote Now!</button>
            </a>
        </div>
    </div>

    <div id="appointment">
        <h2>Fill out the form below to schedule an appointment or free quote!</h2>
    </div>
    <div id="footer">

        <?php include('../Frontend/footer.php');?>

    </div>

    <script>
        function smartphonesFunction() {
            document.getElementById("devicetable").style.display = "none";
            document.getElementById("smartphonestable").style.display = "grid"
        }
    </script>

    <script>
        function iphonesFunction() {
            document.getElementById("smartphonestable").style.display = "none";
            document.getElementById("iphonestable").style.display = "grid";
        }
    </script>
    <script>
        function startOver() {
            document.getElementById("devicetable").style.display = "grid";
            document.getElementById("smartphonestable").style.display = "none"
            document.getElementById("iphonestable").style.display = "none";

        }
    </script>
</body>

</html>