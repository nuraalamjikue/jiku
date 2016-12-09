

<?php
/*------------ Conect DB----------------*/
define('MYSQL_USER', 'root');
define('MYSQL_PASS', '');
define('MYSQL_DB', 'test_all_input');
define('MYSQL_HOST', 'localhost');
  $con = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
		if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
  mysql_select_db(MYSQL_DB, $con);

/*------------ End Conect DB----------------*/



/*Insert values into database*/

if(isset($_POST['Submit']))
{
	
	
$count = count($_POST['itemName']);
$query_values = array();
for($i=0; $i<$count; $i++){
$c1 = mysql_real_escape_string($_POST['itemNo'][$i]);
$c2 = mysql_real_escape_string($_POST['itemName'][$i]);
$c3 = mysql_real_escape_string($_POST['price'][$i]);
$c4 = mysql_real_escape_string($_POST['quantity'][$i]);
$c5 = mysql_real_escape_string($_POST['total'][$i]);

$query_values[] = " ('$c1','$c2','$c3','$c4','$c4') ";
}
$values = implode(',', $query_values);
    
$sql = "INSERT INTO all_input (name, description, sex, dist,fname ) VALUES $values";
    
        $result = mysql_query($sql) or die(mysql_error());
       echo "Data Inserted ";  
   }  
  

 else  
 {  
      echo "Please Enter Name";  
 } 




?>


<!--menu strat -->
<div class="container">
  <div class="row">
       <div class="col-md-6">
             <ul class="nav nav-pills" role="tablist">
            <li role="presentation" class="active"><a href="index.php">Home <span class="badge">42</span></a></li>
            <li role="presentation"><a href="fsearch.php">Profile</a></li>
            <li role="presentation"><a href="data_view.php">Messages <span class="badge">3</span></a></li>
           </ul>
      
      </div>
  <div class="col-md-6">.col-md-6</div>

  </div>
</div>

<div class="container">
  <div class="row">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/img1.jpg" alt="...">
      <div class="carousel-caption">
        dgdfgdfgdf
      </div>
    </div>
    <div class="item">
      <img src="img/img2.jpg" alt="...">
      <div class="carousel-caption">
        ddddddddddddddddddddddddddd
      </div>
    </div>   
      <div class="item">
      <img src="img/img3.jpg" alt="...">
      <div class="carousel-caption">
        ddddddddddddddddddddddddddd
      </div>
    </div>
    dfgdgd
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </div>
  </div>



 <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   