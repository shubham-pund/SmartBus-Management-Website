<?php
if(isset($_POST["ad"]))
{
header("Location:LoginPage.html");
exit;
}
else
{
}
?>


<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-image: url('earth.jpg');
      background-size: cover;

    }
  </style>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>WelcomePage</title>
</head>

<body>
  <form action="WelcomePage.php" method="Post">
    <div align="center"><img src="./Images/one (1).jpg" width="280" height="250" alt="1" /><img
        src="./Images/one (2).jpg" width="280" height="250" alt="2" /><img
        src="./Images/one (3).jpg" width="280" height="250" alt="3" /><img
        src="./Images/one (4).jpg" width="280" height="250" alt="4" /><img
        src="./Images/one (5).jpg" width="280" height="250" alt="5" /></div><br>
    <label></label>

    <marquee behavior="scroll" direction="left" font color="white" scrollamount="10" Faster... bgcolor="#ffffff"
      loop="-1" width="100%" height="20">

      Welcome To Our Page...</marquee>


    <div align="center">
      <pre align="center">&nbsp;</pre>
      <font size="30"><strong>
          <font color="white">MY SMART BUS </font>
        </strong></font>
    </div>
    <p align="center">&nbsp;</p>
    <p align="center">
      <font size="40">
        <!DOCTYPE html>
        <html>

        <head>
          <title>Title of the document</title>
          <style>
            .button {
              background-color: #4CAF50;
              /* Green */
              border: none;
              color: white;
              padding: 16px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 22px;
              margin: 4px 2px;
              -webkit-transition-duration: 0.4s;
              /* Safari */
              transition-duration: 0.4s;
              cursor: pointer;

            }

            .button1 {
              background-color: white;
              color: black;
              border: 2px solid #4CAF50;
            }

            .button1:hover {
              background-color: #4CAF50;
              color: white;
            }

            .button2 {
              background-color: white;
              color: black;
              border: 2px solid #008CBA;
            }

            .button2:hover {
              background-color: #008CBA;
              color: white;
          </style>
        </head>

        <body>
          <a href="../SmartBus/LoginPage.html" class="button button1"><b>Admin</b></a>
          <a href="../SmartBus/Home.html" class="button button2"><b>User</b></a>


        </body>

       

      </font>
    </p>
  </form>
</body>

</html>