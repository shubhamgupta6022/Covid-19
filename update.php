<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COVID-19</title>
	<link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
   rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<!-- Javascript -->
<script>
   $(function() {
      // $( "#datepicker-1" ).datepicker( "option", "dateFormat", 'yy-mm-dd' );
      // $( ".selector" ).datepicker()
      $( "#datepicker-1" ).datepicker({
               showButtonPanel: true,
               changeMonth: true,
               dateFormat: 'yy-mm-dd'
           });
         });
   });
</script>



</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2 > <a href="index.php" style="color:#fff" style="margin-bottom: 0px; margin-top:0px;"><i class="far fa-arrow-alt-circle-left"></i></a> </h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-info-circle"></i>Heath Information</a></li>
            <li><a href="index.php"><i class="far fa-flag"></i>  Safety Measures</a></li>
            <li><a href="index.php"><i class="fas fa-table"></i>Data & insights</a></li>
            <li><a href="index.php"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="index.php"><i class="fas fa-hand-holding-usd"></i>Responsive efforts</a></li>

        </ul>
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header" style="margin-bottom:30px;margin-top:53.8px;margin-left: 40px;">Welcome</div>
        <div class="info">

          <form class="" action="update.php" method="post" enctype="multipart/form-data">
            <table align="center" style="width:18%; margin-left:35%; margin-top:5%;" border="1">
              <!-- <tr>
                <td colspan="2" align="center" ></td>
              </tr> -->
              <tr>
                <td align="left">State: </td>
                <td>
                  <select class="" name="state" value="">
                    <option>Select State</option>
                    <option>MAHARASHTRA</option>
                    <option>TAMIL NADU</option>
                    <option>DELHI</option>
                    <option>RAJASTHAN</option>
                    <option>TELANGANA</option>
                    <option>MADHYA PRADESH</option>
                    <option>UTTAR PRADESH</option>
                    <option >ANDHRA PRADESH</option>
                    <option >KERALA</option>
                    <option>GUJARAT</option>
                    <option>KARNATAKA</option>
                    <option>JAMMU AND KASHMIR</option>
                    <option>HARYANA</option>
                    <option>PUNJAB</option>
                    <option>WEST BENGAL</option>
                    <option>BIHAR</option>
                    <option>ODISHA</option>
                    <option>UTTARAKHAND</option>
                    <option>ASSAM</option>
                    <option>HIMACHAL PRADESH</option>
                    <option>CHANDIGARH</option>
                    <option>CHHATTISGARH</option>
                    <option>LADAKH</option>
                    <option>JHARKHAND</option>
                    <option>ANDAMAN AND NICOBAR ISLANDS</option>
                    <option>GOA</option>
                    <option>PUDUCHERRY</option>
                    <option>MANIPUR</option>
                    <option>ARUNACHAL PRADESH</option>
                    <option>DADRA AND NAGAR HAVELI</option>
                    <option>MIZORAM</option>
                    <option>TRIPURA</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td align="left">Confirmed: </td>
                <td align="left"> <input type="text" name="confirmed" value="" ></td>
              </tr>
              <tr>
                <td align="left">Active: </td>
                <td align="left"> <input type="text" name="active" value="" ></td>
              </tr>
              <tr>
                <td align="left">Recovered: </td>
                <td align="left"> <input type="text" name="recovered" value="" ></td>
              </tr>
              <tr>
                <td align="left">Death: </td>
                <td align="left"> <input type="text" name="death" value="" ></td>
              </tr>
              <tr>
                <td colspan="2" align="center"> <input type="submit" name="submit1" value="Submit"> </td>
              </tr>
            </table>
          </form>


        </div>

				<div id="live_data"></div>

    </div>
</div>




</body>
</html>

<script>
 $(document).ready(function(){
      function fetch_data()
      {
           $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                     $('#live_data').html(data);
                }
           });
      }
      fetch_data();
      $(document).on('click', '#btn_add', function(){
           var first_name = $('#first_name').text();
           var last_name = $('#last_name').text();
           if(first_name == '')
           {
                alert("Enter First Name");
                return false;
           }
           if(last_name == '')
           {
                alert("Enter Last Name");
                return false;
           }

<?php

      if (isset($_POST['submit1'])) {
      include ("dbcon.php");

      $state=$_POST['state'];
      $date=$_POST['date'];
      $newconfirmed=$_POST['confirmed'];
      $newactive=$_POST['active'];
      $newrecovered=$_POST['recovered'];
      $newdeath=$_POST['death'];

      $qry="INSERT INTO `cases`(`state`,`date`, `confirmed`, `active`, `recovered`, `death`)
            VALUES ('$state','$date','$newconfirmed','$newactive','$newrecovered','$newdeath') ";
      $run=mysqli_query($con,$qry);

      if($run==true){
        ?>
        <script>
          alert('Record updated');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('Error occured.\nTry again');
        </script>
        <?php
      }


    }
 ?>
