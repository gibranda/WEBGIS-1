<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Saving...</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <script language="JavaScript" src="inputsscript.js"/></script>
    </head>

  <body>

    <div class="container">
    <header> <h1>You Entered Following information</h1>
    </header>
    <div id='coordinate' class="form" style=" width: 100%; float:left">
    
<?php
    session_start();
    $allowed=$_SESSION['allowed'];
    if(!$allowed){
          echo '<p style=" font-size:  x-large; color: red" ><b>You must be fill the form first<br>
          <a href="Registration.php">Click here</a></b></p><br>';
        }
    else 
    {

    //              Prepration of input data
    $srid = 932643; //utm 43
    $data1 = "";
    $data2 ="";
    $data2 = $_POST['X'];
    $i=0;
    $s = $_POST['Submit'];
    if($s){
        $l=count($_POST['X']);

    
    for ($i=0;  $i<$l; $i++){
        $data1 .=$data2[0+$i]." ".$data2[1+$i].',' ;
        $i++;
        }
    $pacel = $data1.$data2[0].' '.$data2[1];// in sotring format
    }

    ///////// Processing \\\\\\\\\\\\\\\\
    $fdata = $_POST['in'];
    //     echo implode($fdata,',')."<br>";
    $newdata="";
    
    if($fdata){
              $j= count($fdata);
    
    for($i=0;$i<$j; $i++){ 
        $newdata .=" '".$fdata[$i]." ' ,";

    }
    /////// Data Presentation
      echo '<p style=" font-size:  large; color: red" ><br>You Entered Following information<br></p>'."<br>";
      echo "<b>Form Data<br></b>".$newdata."<br><b>Parcel coordinated</b><br>".$data1;
    /////////////////////
    $parceldata= "(ST_GeomFromText('POLYGON(($pacel))',$srid))";

    $newdata.=" '".date("Y-m-d")." ' ,".$parceldata;

    $sql1 = "INSERT INTO New_Applications values ($newdata);";//Form data quary

    //      echo "Sql<br>". $sql1;
    echo '<br>';
    }}
  ?>
    
  <?php  
      echo "abc";
    // PostGIS Connection
    //  include_once('geoPHP/geoPHP.inc');
    // $dbconn = pg_connect("host=localhost port=5432 dbname=mydb user=postgres password=msgis");
    // $result1 = pg_query($dbconn,$sql1);
    // if(!$result1){
    // echo '<p style=" font-size:  large; color: red" >Form not Saved.<br> Either you did not fill form or there any mistake!!!</p>';

    // } else {
    // echo '<p style=" font-size:  large; color: red" >Form Saved!!!!</p>';
    // }
    // pg_close($dbconn);}
    // session_destroy();
  ?>


    </div>
  </div>
  </div>
</body>
</html>
