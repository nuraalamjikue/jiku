
<div class="container-fluid">
  <div class="row">
       <div class="col-md-6">
             <ul class="nav nav-pills" role="tablist">
            <li role="presentation" class="active"><a href="index.php">Home <span class="badge">42</span></a></li>
            <li role="presentation"><a href="index.php">Profile</a></li>
            <li role="presentation"><a href="data_view.php">Messages <span class="badge">3</span></a></li>
           </ul>
      
      </div>
  <div class="col-md-6">.col-md-6</div>

  </div>
</div>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "test_all_input");  
 $query = "SELECT * FROM all_input ORDER BY name DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Table Column and Row Highlight by using Jquery CSS</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>       
           <style>  
           .change_table_row  
           {  
                background-color:#f1f1f1;  
           }  
           </style>  
      </head>  
      <body>  
           <div class="container" id="print-content">  
                <form>
                <h1 align="center">Table Column and Row Highlight by using Jquery CSS</h1><br />  
                <table class="table table-bordered">  
                     <tr bgcolor="#f1f1f1">  
                          <th width="10%" class="table-data1">Subject Name</th>  
                          <th width="55%" class="table-data2">Archev Number</th>  
                          <th width="35%" class="table-data3">Great</th>  
                          <th width="35%" class="table-data3">poien</th>  
                          <th width="35%" class="table-data3">Total</th>  
                     </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <tr class="table-row">  
                         <td class="table-data1"><?php echo $row["fname"]; ?></td> 
                         
                          <td class="table-data1"><?php echo $row["name"]; ?></td>  
                          <td class="table-data2"><?php echo $row["description"]; ?></td>  
                          <td class="table-data3"><?php echo $row["sex"]; ?></td>  
                          <td class="table-data3"><?php echo $row["dist"]; ?></td>  
                       
                     </tr>  
                     <?php  
                     }  
                     ?>  
                </table>  
                    </form>
           </div>  
          

  <input type="button" onclick="printDiv('print-content')" value="print a div!"/>


          <script type="text/javascript">

function printDiv(divName) {

 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
          </script>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('.table-row').hover(function(){  
           $(this).addClass('change_table_row');  
      }, function(){  
           $(this).removeClass('change_table_row');  
      });  
      var class_name = '';  
      $('th').hover(function(){  
           class_name = $(this).attr('class');  
           $('.'+class_name).addClass('change_table_row');  
      }, function(){  
           $('.'+class_name).removeClass('change_table_row');  
      });  
      $('td').hover(function(){  
           class_name = $(this).attr('class');  
           $('.'+class_name).addClass('change_table_row');  
      }, function(){  
           $('.'+class_name).removeClass('change_table_row');  
      });  
 });  
 </script>  