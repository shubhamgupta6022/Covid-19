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
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
					<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

					<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
					 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
					 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
					 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

		</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2 > <a href="login.php" style="color:#fff">COVID-19</a> </h2>
        <ul>
            <li><a href="#info"><i class="fas fa-info-circle"></i>Heath Information</a></li>
            <li><a href="#safety"><i class="far fa-flag"></i>  Safety Measures</a></li>
            <li><a href="#data"><i class="fas fa-table"></i>Data & insights</a></li>
            <li><a href="#blog"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="#funds"><i class="fas fa-hand-holding-usd"></i>Responsive efforts</a></li>

        </ul>
        <!-- <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div> -->
    </div>
    <div class="main_content" style="margin-left:250px">
        <div class="header">Corona Virus Information</div>



				<!-- Health Info -->
				<section id="info" style="margin-left:20px;margin-top:20px;"><br>

					<div class="row">
						<div class="col-lg-6">
							<h1>What is COVID-19?</h1>
							<h6 align="justify">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.<br>

									<br>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.<br>
									<br>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.<br>
									<br>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).<br>
									<br>At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</h6><br>
							</div>



								<div class="col-lg-6 container video-thumbnail">

										<div class="card border-secondary  mb-3" style="height:380px;width:480px; margin-top: 30px;margin-left:40px ;border-radius:2%;border: 1px solid #D3D3D3;">
											  <div class="card-body text-success">
													<!-- <a href="https://www.youtube.com/watch?v=OZcRD9fV7jo&feature=emb_logo" > -->
													<iframe width="440" height="290" style="border-radius:2%" src="https://www.youtube-nocookie.com/embed/OZcRD9fV7jo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													<!-- <iframe src="https://www.youtube.com/watch?v=OZcRD9fV7jo&feature=emb_logo" width="100%" style="margin:auto; border-radius:2%;" align="center"></iframe> -->
											  </div>
											  <div class="card-footer bg-transparent border-secondary">WHO: Coronavirus - questions and answers (Q&A)</div>
											</div>

								</div>
						</div>


						<div class="row">
							<div class="col-lg-6">
								<br>
								<h1>Symptoms</h1><br>
								<h6 align="justify">Reported illnesses have ranged from mild symptoms to severe illness and death for confirmed coronavirus disease 2019 (COVID-19) cases.<br><br>

										These symptoms may appear 2-14 days after exposure (based on the incubation period of MERS-CoV viruses).<br><br>

										<ul>
												<li>&nbsp&nbsp  Fever</li>
												<li>&nbsp&nbsp	 Cough</li>
												<li>&nbsp&nbsp  Shortness of breath</li>
										</ul>
									</h6>
								</div>


						</div>

						<div class="row">
							<div class="col-md-4">
								<img src="images/s1.jpg" class="symy" alt="">
							</div>

							<div class="col-md-4">
								<img src="images/s2.jpg" class="symy" alt="">
							</div>

							<div class="col-md-4">
								<img src="images/s3.jpg" class="symy" alt="">
							</div>

						</div>

				</section>



				<!-- Saftey measures -->
				<section id="safety" style="margin-left:20px;margin-top:20px;"><br>

						<div class="row">
							<div class="col-lg-6" align="justify">
								<br>
								<h1>Safety Measures</h1>
								<br>

								<b>1. Wash your hands frequently</b> <br><br>
								Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.<br><br>

								<b>Why?</b> Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.<br><br>

								<br>
								<b>2. Maintain social distancing</b>
								<br><br>
								Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing.<br><br>

								<b>Why?</b> When someone coughs or sneezes they spray small liquid droplets from their nose or mouth which may contain virus. If you are too close, you can breathe in the droplets, including the COVID-19 virus if the person coughing has the disease.<br><br>


								<br> <b>3. Avoid touching eyes, nose and mouth</b>
								<br><br> <b>Why?</b> Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus to your eyes, nose or mouth. From there, the virus can enter your body and can make you sick.

								<br>
								<br><br> <b>4. Practice respiratory hygiene</b>
								<br><br>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately.

								<br><br> <b>Why?</b> Droplets spread virus. By following good respiratory hygiene you protect the people around you from viruses such as cold, flu and COVID-19.

								<br>
								<br><br> <b>5. If you have fever, cough and difficulty breathing, seek medical care early</b>
								<br><br>Stay home if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention and call in advance. Follow the directions of your local health authority.

								<br><br> <b>Why?</b> National and local authorities will have the most up to date information on the situation in your area. Calling in advance will allow your health care provider to quickly direct you to the right health facility. This will also protect you and help prevent spread of viruses and other infections.

							</div>

							<div class="col-lg-6">
								<br><br>
								<div class="card border-secondary  mb-3" style="height:380px;width:480px; margin-top: 30px;margin-left:40px ;border-radius:2%;border: 1px solid #D3D3D3;">
										<div class="card-body text-success">
											<!-- <a href="https://www.youtube.com/watch?v=OZcRD9fV7jo&feature=emb_logo" > -->
											<iframe width="440" height="290" style="border-radius:2%" src="https://www.youtube-nocookie.com/embed/qF42gZVm1Bo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!-- <iframe src="https://www.youtube.com/watch?v=OZcRD9fV7jo&feature=emb_logo" width="100%" style="margin:auto; border-radius:2%;" align="center"></iframe> -->
										</div>
										<div class="card-footer bg-transparent border-secondary">How is the new coronavirus affecting people who get it?</div>
									</div>

									<br><br>
									<div class="card border-secondary  mb-3" style="height:410px;width:480px; margin-top: 30px;margin-left:40px ;border-radius:2%;border: 1px solid #D3D3D3;">
											<div class="card-body text-success">
												<!-- <a href="https://www.youtube.com/watch?v=OZcRD9fV7jo&feature=emb_logo" > -->
												<iframe width="440" height="290" style="border-radius:2%" src="https://www.youtube.com/embed/Y9VgmhxtJFk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
											<div class="card-footer bg-transparent border-secondary">Together we can fight with #COVID19. Take precautions to protect yourself & your loved ones.</div>
										</div>

							</div>
						</div>
						<br><br>

				</section>



				<!-- Data insights starts -->

				<?php

    include "dbcon.php";

    $url="https://api.covid19india.org/data.json";
    $url_json=file_get_contents($url);
    $array=json_decode($url_json,true);

    foreach($array as $row){

        $array_state=$array["statewise"];

      }
   ?>


				<section id="data" >
					<br>
					<h1 style="margin-top:20px;margin-bottom:20px;margin-left:20px;" align="center">Data & Insights</h1>
					<br>
					<div class="row">

						<div class="col-md-6">
							<table class="table table-sm  table-striped" style="margin-left: 20px;width:100%;height:100px;font-size:13px;" >
							<thead>
									<tr>

										<th scope="col">State</th>
										<th scope="col">Confirmed</th>
										<th scope="col">Active</th>
										<th scope="col">Recovered</th>
										<th scope="col">Deaths</th>
									</tr>
							</thead>
						<tbody>

							<?php for($i=1;$i<=37;$i++) {?>
        <tr>
          <td><?php echo $array_state[$i]['state']; ?> </td>
          <td><?php echo $array_state[$i]['confirmed']; ?></td>
          <td><?php echo $array_state[$i]['active']; ?></td>
          <td><?php echo $array_state[$i]['recovered']; ?></td>
          <td><?php echo $array_state[$i]['deaths']; ?></td>
      </tr>
    <?php }?>

		<tr>
			<td><b><?php echo $array_state[0]['state']; ?> </b></td>
			<td><b><?php echo $array_state[0]['confirmed']; ?></b></td>
			<td><b><?php echo $array_state[0]['active']; ?></b></td>
			<td><b><?php echo $array_state[0]['recovered']; ?></b></td>
			<td><b><?php echo $array_state[0]['deaths']; ?></b></td>
	</tr>


						</tbody>
					</table>
				</div>

					<div class="col-md-6">
						<div class="container" style="width:500px;">

								<br /><br />
								<div id="chart"></div>
					</div>
					</div>
	    </div>
			<br><br>
	</section>



	<!-- Blogs start -->
		<section id="blog" style="width:80%;margin-left:10%; margin-bottom: 50px;margin-bottom:50px;" align="center">
					<br>
					<h1>Blogs</h1>
					<br>
								<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">

					    <div class="carousel-item" >
					      <img src="images/i2.jpg" style="width:400px;height:500px" class="d-block w-100" alt="...">
					      <div class="carousel-caption d-none d-md-block">
					        <h5 >We need better social protection to safeguard the poor from COVID-19</h5>
					        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
					      </div>
					    </div>

							<div class="carousel-item active">
					      <img src="images/i1.png"  style="width:400px;height:500px" class="d-block w-100" alt="..." >
					      <div class="carousel-caption d-none d-md-block">
					        <h5 >How COVID-19 will change how we work FOREVER</h5>
					        <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
					      </div>
					    </div>

					    <div class="carousel-item">
					      <img src="images/i3.jpg" class="d-block w-100" style="width:400px;height:500px;" alt="...">
					      <div class="carousel-caption d-none d-md-block">
					        <h5 >COVID-19 Pandemic and the Middle East and Central Asia: Region Facing Dual Shock</h5>
					        <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
					      </div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>


					<div class="row" style="margin-top:60px;">
						<div class="col-md-3">
							<img src="images/b1.png" alt="" style="width:300px;height:200px;border-radius:2%">
							<div class="row" >

									<h6 style="margin-top:13px;font-size:13px;line-height:8px;margin-left:13px" align="left">Modi’s Covid-19 lockdown speech<a href="https://theprint.in/opinion/modi-covid-19-lockdown-doesnt-learn-from-mistakes/387689/" style="font-size:8px;line-height:8px;margin-left:1px;margin-top:3px;" align="right">Read more...</a>	</h6>

								<!-- <button type="button" class="btn btn-primary btn-sm" align="right" style="margin-left:10px;">Read</button> -->
							</div>

						</div>
						<div class="col-md-3" style="margin-left:96px; margin-right:96px;">
							<img src="images/b3.png" alt="" style="width:300px;height:200px;border-radius:2%">
							<h6 style="margin-top:13px;font-size:13px;line-height:8px;margin-left:0px" align="left">Schools & Colleges shut down<a href="https://en.unesco.org/covid19/educationresponse" style="font-size:8px;line-height:8px;margin-left:1px;margin-top:3px;" align="right">Read more...</a>	</h6>


						</div>
						<div class="col-md-3">
							<img src="images/b2.png" alt="" style="width:300px;height:200px;border-radius:2%">

								<h6 style="margin-top:13px;font-size:13px;line-height:8px;margin-right:30px;" align="left">Shrink in global economy<a href="https://economictimes.indiatimes.com/news/international/business/global-economy-could-shrink-by-almost-1-in-2020-due-to-covid-19-pandemic-united-nations/articleshow/74943235.cms?from=mdr" style="font-size:8px;line-height:8px;margin-left:1px ;margin-top:3px;" align="right">Read more...</a>	</h6>

						</div>
						<div class="col-lg-12">
							<hr>
						</div>
					</div>


					<div class="row" style="margin-top:25px;">
						<div class="col-md-3">
							<img src="images/b4.png" alt="" style="width:300px;height:200px;border-radius:2%">
							<div class="row" >

									<h6 style="margin-top:13px;font-size:13px;line-height:8px;margin-left:13px" align="left">Hit the hardest to poor people<a href="https://www.aljazeera.com/news/2020/04/india-covid-19-lockdown-means-food-work-rural-poor-200402052048439.html" style="font-size:8px;line-height:8px;margin-left:1px;margin-top:3px;" align="right">Read more...</a>	</h6>

								<!-- <button type="button" class="btn btn-primary btn-sm" align="right" style="margin-left:10px;">Read</button> -->
							</div>

						</div>
						<div class="col-md-3" style="margin-left:96px; margin-right:96px;">
							<img src="images/b5.png" alt="" style="width:300px;height:200px;border-radius:2%">
							<h6 style="margin-top:13px;font-size:13px;line-height:8px;margin-left:0px" align="left">Shortage of Ventilators<a href="https://www.weforum.org/agenda/2020/04/covid-19-ventilator-shortage-manufacturing-solution/" style="font-size:8px;line-height:8px;margin-left:1px;margin-top:3px;" align="right">Read more...</a>	</h6>


						</div>
						<div class="col-md-3">
							<img src="images/b6.png" alt="" style="width:300px;height:200px;border-radius:2%">

								<h6 style="margin-top:13px;font-size:13px;line-height:8px;margin-right:30px;" align="left">Learning from experience<a href="https://www.thelancet.com/journals/lancet/article/PIIS0140-6736(20)30686-3/fulltext" style="font-size:8px;line-height:8px;margin-left:1px ;margin-top:3px;" align="right">Read more...</a>	</h6>

						</div>
						<div class="col-lg-12">
							<hr>
						</div>
					</div>

		</section>


			<!-- Responsive efforts -->
			<section id="funds" style="width:80%;margin-left:10%; margin-bottom: 50px; margin-bottom:50px;" align="center"><br>

				<h1 align="center">Responsive Efforts</h1>
				<br><br><br><br>


				<section id="rcorners2">
					<div class="row">
						<div class="col-md-6">
							<img src="images/funds.png" style="width:382px;height:302px;border-radius:2%;margin-left:2px;" alt="">
						</div>
						<div class="col-md-6" align="left" >
							<h6 style="margin-right: 5px;">Go to direct link or pay via google pay or paytm for PM FUNDS and other NGO partners </h6>
							<br><br>
							<h6  style="margin-right: 90px;"><a href="https://www.pmindia.gov.in/en/?query#">PM FUNDS: </a> Prime Minister’s Citizen Assistance and Relief in Emergency Situations Fund</h6>
							<h6 style="margin-right: 90px;"> <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/donate">WHO:</a>WHO FUNDS</h6>
							<h6 style="margin-right: 90px;"> <a href="https://www.giveindia.org/">Give India:</a>Support COVID-19 hit families</h6>
							<h6 style="margin-right: 90px;"> <a href="https://www.seedsindia.org/">SEEDS:</a>Serving the most vulnerable and invisible</h6>


							<button type="button" class="btn btn-primary" align="left" onclick="window.location.href = 'https://pay.google.com/intl/en_in/about/';" style="margin-top:5px;">Donate via Google Pay</button>
							<button type="button" class="btn btn-primary" align="right" onclick="window.location.href = 'https://paytm.com/';" style="margin-top:5px;">Donate via Paytm</button>



						</div>
					</div>
				</section>
			<br><br>
				<br><br><br><br>

			</section>

</div>

</body>
</html>

<!-- Code For Line Chart -->
<!-- <script>

	new Morris.Line({
	  // ID of the element in which to draw the chart.
	  element: 'myfirstchart',
	  // Chart data records -- each entry in this array corresponds to a point on
	  // the chart.
		data:[<?php echo $chart_data; ?>],
	  xkey:'date',
	  ykeys:['total'],
	  labels:['Total Cases'],
	  xLabelAngle: 60
	});

</script> -->


<!-- FUNCTION TO SHOW BAR GRAPH -->
<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['total'],
 labels:['Total Confirmed Cases'],

});
</script>

<!-- FUNCTION TO SCROLL -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
