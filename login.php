<?php
	include "dbcon.php";

	$qry = "SELECT * FROM `total`";
	$result = mysqli_query($con, $qry);
	$chart_data = '';
	$data=mysqli_fetch_assoc($result);
	while($row = mysqli_fetch_array($result))
	{
			$chart_data .= "{ date:'".$row["date"]."', total:'".$row["total"]."',}, ";
		}
		$chart_data = substr($chart_data, 0, -1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>COVID-19</title>
	<link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

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
        <!-- <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div> -->
    </div>
    <div class="main_content">
        <div class="header" style="margin-bottom:20px;margin-top:35px; margin-left:40px;">Admin Login</div>
        <div class="info">


          <form action="update.php" method="post" align="center">
                <table align="center" style="width:28%; margin-left:36%; margin-top:15%;" border="1">
                  <tr>
                    <td colspan="2" align="center" >Authenticate Yourself</td>
                  </tr>
                  <tr>
                    <td align="left">UID:</td>
                    <td>
                      <select class="" name="state" value="State">
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
                    <td align="left">Password:</td>
                    <td align="left"> <input type="password" name="password" value="" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"> <input type="submit" name="submit" value="Login"> </td>
                  </tr>
                </table>

              </form>



        </div>


    </div>
</div>




</body>
</html>
