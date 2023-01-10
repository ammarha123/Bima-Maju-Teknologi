<?php
include("config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
 <?php
            	$query = $con->query("
			   SELECT    COUNT(*) 
			   FROM      log_user_visit 
			   WHERE     YEAR(user_visit) = '2023' 
			   GROUP BY  MONTH(user_visit)
			   ");
			   foreach($query as $data) {
			   $user_visit[] = $data['user_visit'];
			   $count[] = $data['count'];
			   }
                $query_run=mysqli_query($con,$query);
                $check = mysqli_num_rows($query_run)>0;
                if ($check) {
                    while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
				
            
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                 <a href="img/<?php echo $row['image']?>" class="portfolio-lightbox preview-link">
                  <img src="img/<?php echo $row['image']?>"class="img-fluid rounded mx-auto d-block" style="width:400px;height:300px;" alt="">
                </a>
                <h2></h2>
                <h4><a href=""><?php echo $row['title']?></a></h4>
              <p><?php echo $row['description']?></p>
              </div>
              
            </div>
                    <?php
                    }
                  }
                  else
                  {
                    echo "no data record found";
                  }
                  ?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>