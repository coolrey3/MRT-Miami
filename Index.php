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
                <p>Choose your device below to get started!</p>
                <table>
                    <thead>

                        <td>
                            <p>iPhone</p>
                        </td>

                        <td>
                            <p>Samsung</p>
                        </td>
                        <td>
                            <p>Tablet</p>
                        </td>

                        <td>
                            <p>Laptop</p>
                        </td>
                    </thead>

                    <tr>
                        <td>

                            <img src="Images/lcd.png">
                        </td>


                        <td>
                            <img src="Images/lcd.png">
                        </td>



                        <td>
                            <img src="Images/lcd.png">

                            <!--  <div id="selectdevice">
                            <div id="devicebg">
                            </div>
                        </div>
-->
                        </td>
                        <td>
                            <img src="Images/lcd.png">
                        </td>

                    </tr>
                </table>
            </div>
        </div>
        <div id="services">
            <h1> What we can help with!</h1>
        </div>
    </div>

    <div id="footer">

        <?php include('footer.php');?>

        <ul>
            <li><a href="Index.html">Home</a></li>
            <li>About Us</li>
            <li>Repairs</li>
            <li><a href="./info.php">Php Info</a></li>


        </ul>
    </div>
</body>

</html>