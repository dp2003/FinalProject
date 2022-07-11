<?php  
 $connect = mysqli_connect("localhost", "root", "", "bangles");  
 $query = "SELECT choice, count(*) as id FROM comments GROUP BY choice";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <style>
 .chart{
     padding-left: 500px;
 }
 .sidenav {
  height: 100%;
  width: 210px;              
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #b3cccc;
  overflow-x: hidden;
  padding-top: 30px;
}

.sidenav a {
  padding: 16px 6px 6px 32px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
div.polaroid {
  float: left;
  padding: 10px 10px 25px 10px;
  width: 450px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-right: 50px;
  margin-left: 70px;

}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 14px;}
}
</style>
      <head>  
           <title>Website Analysis</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']}); //google chart will be loaded on your webpage....corechart (bar, column, line, area, stepped area, bubble, pie, donut, combo, candlestick, histogram, scatter)
           google.charts.setOnLoadCallback(drawChart); //reference to  function drawChart( 
           function drawChart() //this is a javascript function function drawChart()
           {  
                var data = google.visualization.arrayToDataTable([ //wraps data into a javascript class
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["choice"]."', ".$row["id"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Reviews provided by Users',   
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  //load piechaat library from google chart library
                chart.draw(data, options); //display piechart on specified elements 
           }  
           </script>  
      </head>  
      <body> 
          <title>Profiles</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="col-md-6">
<div class="row">
<div class="col-md-6">
<div class="sidenav">
  <a><img src="JaLogo.png" width="160px" style="padding-right: 15px;"></a>
  <a href="Profile.php">Profile</a>
  <a href="Users.php">Users</a>
  <a href="Categories.php">Categories</a>
  <a href="AddPro.php">Add products</a>
  <a href="UpdatePro.php">Update products</a>
  <a href="DelProducts.php">Remove products</a>
  <a href="PaymentDetails.php">Payment details</a>
  <a href="Analysis.php">Survey</a>
  <a href="SA.php">Sentiment Analysis</a>
</div>
</div>
</div>
</div class="main">
           <br /><br />  
           <div style="width:900px;">  
                <center><h3>Website Analysis</h3> </center> 
                <br />  <center>
                <div class="chart" id="piechart" style="width: 1500px; height: 600px;"></div></center>
           </div>  
      </body>  
 </html>  