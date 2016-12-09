<!-- 
 Site : http:www.smarttutorials.net
 @author muni
 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="jquery autocomplete invoice, jquery autocomplete invoice module, invoice using jqueryautocomplete, jquery invoice module  autocomplete, invoice using jquery autocomplete">
    <meta name="keywords" content="jquery autocomplete invoice, jquery autocomplete invoice module, invoice using jqueryautocomplete, jquery invoice module  autocomplete, invoice using jquery autocomplete">
    <meta name="author" content="muni">
    <link rel="icon" href="../../favicon.ico">

    <title>Invoice System Using jQuery Autocomplete</title>

    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700"> 
    <!-- Bootstrap core CSS -->
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<form name="form1" method="post" action="insert.php"> 
    <!-- Fixed navbar -->


    <!-- Begin page content -->
    <div class="container content">
    


      	<div class='row'>
      		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      			<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
							<th width="15%">Subject Name</th>
							<th width="38%">Archev Number</th>
							<th width="15%">Great</th>
							<th width="15%">poien</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input class="case" type="checkbox"/></td>
                            <td><input type="text" data-type="Subject name" placeholder="English" name="Subject" id="Subject_1" class="subject" ></td>
                            
							<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off"></td>
							<td><input type="text" data-type="productName" name="itemName[]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
							<td><input type="number" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
							<td><input type="number" name="quantity[]" id="quantity_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
							<td><input type="number" name="total[]" id="total_1" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
						</tr>
                        
                       
					</tbody>
				</table>
      		</div>
      	</div>
      	<div class='row'>
      		<div class='col-xs-12 col-sm-3 col-md-3 col-lg-3'>
      			<button class="btn btn-danger delete" type="button">- Delete</button>
      			<button class="btn btn-success addmore" type="button">+ Add More</button>
      		</div>
      		<div class='col-xs-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-sm-5 col-md-5 col-lg-5'>
                
	<center><p>
	  <label>
	  <input type="checkbox" name="checkbox" value="1">
	  </label>
	Are you agree </p></center>
	<center><p>
    	<label>
    		<input type="submit" name="Submit"  class="btn btn-info" value="Submit">
    	</label>
<label>
    		<input type="Reset" name="Submit2" value="Form clear">
    	</label>

  	</p></center>
               
				<form class="form-inline" >
					<div class="form-group">
						<label>Subtotal: &nbsp;</label>
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="number" name="a" class="form-control" id="subTotal" placeholder="Subtotal" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					</div>
			
			
		
</form>
		
			
				
			</div>
      	</div>
	
    </div>
     </form>
	<h2>&nbsp;</h2>
    <footer class="footer">
      <div class="container">
        <p class="text-muted text-center" style="color:#fff">Copyright By <a href="http://smarttutorials.net/" target="_blank" style="color:#bdc3c7">SmartTutorials.net</a>.</p>
      </div>
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/auto.js"></script>
  </body>
</html>




