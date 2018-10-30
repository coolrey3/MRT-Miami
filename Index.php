<!DOCTYPE html>

<html>

<head>
    <title>Mobile Repair Techs</title>
    <link href="./styles/style.css" type="text/css" rel=stylesheet>
    <form action='footer.php' method='post'>
        <script src="JS/script.js"></script>
        <script language="php" type="text/php"> echo 'test this';</script>

</head>

<body>
    <div id="header">
        <h1>
            We Fix All your Electronic Devices for a great price!
        </h1>
    </div>

    <div id="body">
        <div id="device">
            <div id="devicetitle">
                <p> Do you need something of yours repaired?</p>
                <p> Click on your device to get stared!</p>
            </div>

            <div id="devicetable">
                <h2>Choose your device below to get started!</h2>
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

            <div id= "startoverbutton" onclick="startOver()">
                <button> Start Over</button>
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
            <a href="https://www.facebook.com">
                <button> Schedule an Appointment or FREE Quote Now!</button>
            </a>
        </div>
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