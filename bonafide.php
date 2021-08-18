<?php
session_start();
$bname=$_SESSION['s1name'];
$brollno=$_SESSION['s1rollno'];
$bfathername=$_SESSION['s1fathername'];
$bstartyear=$_SESSION['s1startyear'];
$bgradyear=$_SESSION['s1gradyear'];

?>
<html>

<body>
<div style = 'border-style:solid; 
         width:1000px; 
         color:black;'>

<img src='download.png' width=200 height=200 align='left'> <h1 style=text-align:left>Vidya Jyothi Institute of Technology</h1>
<h4 style=text-align:left> An Autonomous Institution</h4>
<h5 style=text-align:left> AzizNagar Gate c.B Post ,Hyderabad ,500075 ,TS,INDIA ,Ph no-91-81413235309/235399.</h5>
<h5 style text-align:left>(Accredited by NAAC & NBA ,Approved by AICTE New Delhi & permenantly Affilated to JNTUH)</h5>
<h2 style=text-decoration:underline > BONAFIDE CERTIFICATE</h2>
<h4 style=text-align:left > N0: 15078</h4>

<h4 style=text-align:centre>Date:

<?php
echo date("Y/m/d") . "<br>";?> </h4>

<p> This is to certify that Mr./Miss .<?php echo $bname; ?> S/o.,D/o. <?php echo $bfathername; ?>  is /was a bonafide Student of this Institute with Roll No. <?php echo $brollno; ?> </p>
<p>He/She is Studying/Studied B.tech /M.tech/M.B.A. during the Academic Year <?php echo $bstartyear; ?> to <?php echo $bgradyear; ?> .</p>
<br>
<br>
<p style="text-align:right">Principal &nbsp &nbsp &nbsp</p>
<p style="text-align:right"><b>Signature &nbsp &nbsp  &nbsp </b></p>

</div>
</body>
</html>


