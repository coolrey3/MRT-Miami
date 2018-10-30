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

                            <div id="smartphones" onclick="myFunction()">
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

                            <img src="Images/Smartphones.png">
                        </td>


                        <td>
                            <img src="Images/samsung.png">
                        </td>



                        <td>
                            <img src="Images/other-smartphone.png">

                            <!--  <div id="selectdevice">
                            <div id="devicebg">
                            </div>
                        </div>
-->

                    </tr>
                </table>

                <!-- end custom code -->

            </div>
            <div id="services">
                <h1> What we can help with!</h1>
                <div id="servicestable">
                    <table>
                        <thead>

                            <th>
                                <p>Break/Fix</p>
                            </th>

                            <th>
                                <p>Custom Desktop Builds</p>

                            </th>
                        </thead>

                        <tr>
                            <td>

                                <img src="Images/tools.png">
                            </td>


                            <td>
                                <ol>
                                    <li>Broken Screen</li>
                                    <li>Broken Home Button</li>
                                    <li>Battery Replacement</li>
                                    <li>Charger Port Repair</li>
                                    <li>Water Damage</li>
                                    <li> And More!</li>
                                </ol>
                            </td>


                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div id="footer">

            <?php include('../Frontend/footer.php');?>

            <ul>
                <li><a href="Index.html">Home</a></li>
                <li>About Us</li>
                <li>Repairs</li>
                <li><a href="./info.php">Php Info</a></li>


            </ul>
        </div>

        <script>
            function myFunction() {
                document.getElementById("devicetable").style.display = "none";
                document.getElementById("smartphonestable").style.display = "grid"
            }

        </script>
</body>

</html>
