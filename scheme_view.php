<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Scheme</title>
	
	<?php    $this->load->view('library');    ?>
	
    <script>
        $(document).ready(function() {
		
		    $("#product_name").load("http://52.66.23.135/cis/index.php/branch_order/loadproducts" , function(){});
		  ///  $("#table_distributor").load("http://52.66.23.135/cis/index.php/branch_order/load_scheme_data" , function(){});

            $('#distributor_btn').click(function(){
			   var  scheme_name  = $('#scheme_name').val();
			   var  product_name = $('#product_name').val();
			   var  quantity = $('#quantity').val();
			   var  duration = $('#duration').val();
			   var  start_time = $('#start_time').val();
			   var  end_time = $('#end_time').val();
			   var  dataStr = "scheme_name="+scheme_name+"&product_name="+product_name+"&quantity="+quantity +"&duration="+duration +"&start_time="+start_time +"&end_time="+end_time;
					  
				
				if(scheme_name=="") {
				   alert('Enter Scheme name');
				   $('#scheme_name').focus();
				   return false;
				}else{
				   $.ajax({
				      type:"post" ,
					  url: "http://52.66.23.135/cis/index.php/branch_order/addscheme/" ,
					  data:		dataStr ,
					  async:true ,
						success:function(st){ 
						    
							//'data saved successfully'
							$("#product_name").load("http://52.66.23.135/cis/index.php/branch_order/loadproducts" , function(){});
							location.reload();
							//$("#table_distributor").load("http://52.66.23.135/cis/index.php/branch_order/load_scheme_data" , function(){});
						}	
				   });
				}	
            });           
        });
    </script>
	
	<script>
function delete_scheme(ids) { 
    var x=confirm("Are you sure to delete record?");
	
  if (x == true) {
	  
	  $.ajax({
				      type:"post" ,
					  url: "http://52.66.23.135/cis/index.php/branch_order/delete_scheme/" ,
					  data: {"id":ids},
					  async:true ,
						success:function(st){ 
						    $("#product_name").load("http://52.66.23.135/cis/index.php/branch_order/loadproducts" , function(){});
							location.reload();
							
						}	
				   });
				   
    
  } else {
    return false;
  }
}
</script>

 </head>

 <body>


 <div id="wrapper">
        
		<?php $this->load->view('partial/navigation');  ?>
		
        <div id="page-wrapper">

            
<link href="http://52.66.23.135/cis/css/dcalendar.picker.css" rel="stylesheet" type="text/css">
<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                Add Scheme
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form">
						<div class="form-group">
                                <label>Scheme Name</label>
                                <input  type="text" class="form-control" id="scheme_name" name="scheme_name"/>
                            </div>
                            <div class="form-group">
                                <label>Product Name</label>
                                <select  id="product_name" class="form-control" name ="product_name">
								
                                </select>
                            </div>
							 <div class="form-group">
                                <label>Quantity</label>
                                <input  type="text" class="form-control" id="quantity" name="quantity"/>
                            </div>
                            <div class="form-group">
                                <label>Duration</label>
                                <select  id="duration" class="form-control" name ="duration">
								<option value="1_Month">1 Month</option>
								<option value="2_Month">2 Month</option>
								<option value="Quater">Quater</option>
								<option value="5_Month">5 Month</option>
								<option value="Half Yearly">Half Yearly</option>
								<option value="Yearly">Yearly</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Start Time</label>
                                <!--<input id="start_time" name ="start_time" class="form-control"  placeholder="Start Time">-->
								<?php //echo $this->calendar->generate();?>
								<input class="form-control" id="start_time" type="text" name="start_time">

<script src="http://52.66.23.135/cis/css/dcalendar.picker.js"></script>
<script>
$('#start_time').dcalendarpicker();
$('#calendar-start_time').dcalendar(); //creates the calendar
</script>
                            </div>
                            <!--<div class="form-group">
                                <label>End Time</label>
                                <input class="form-control" id="end_time" name ="end_time" placeholder="End Time">
                            </div>-->
							
							<div class="form-group">
                                <label>End Time</label>
                                <input class="form-control" id="end_time" type="text" name ="end_time">


<script>
$('#end_time').dcalendarpicker();
$('#calendar-end_time').dcalendar(); //creates the calendar
</script>
                            </div>

                            <button type="button" id="distributor_btn" class="btn btn-success">Submit Button</button>
                            <button type="reset" class="btn btn-info">Reset Button</button>
                        </form>
                    </div>

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>





<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                Scheme
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
				
				
				       <div id="table_distributor">
					   
					   
					   <script type="text/javascript">
			   $(function(){
			      $('#distributors_data_table').dataTable();
			   });
			   </script>
			  <table id="distributors_data_table" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  			  <thead>
                            <tr>
                                <th>Scheme Name</th>
								<th>Product Name</th>
								<th>Quantity</th>
                                <th>Duration</th>                               
                                <th>Start Date</th>                               
                                <th>End Date</th>                               
                                <th>Delete</th>                               
                            </tr>
                            </thead>
							<tbody>
							<?php   foreach($data->result() as $d) {  $result = str_replace(array(',', ' '), '_', $d->ids); ?>
									<tr class="odd gradeX">
										<td><?= $d->scheme_name;?></td>
										<td><?=  $d->pro_name;?> </td>
										<td><?= $d->quantity;?></td>
										<td><?= str_replace("_"," ",$d->duration);?> </td>
										<td><?=  $d->start_time;?> </td>
										<td><?=  $d->end_time;?> </td>
			<td><button type="button" class="delete_scheme btn btn-warning btn-circle" onclick = "delete_scheme(<?php echo $d->id;?>)"><i class="fa fa-times"></i></button></td>
									</tr>
                            <?php } ?>
							
                            </tbody>
			      </table>
				  
					   </div>					
				
                    
                </div>
                <!-- /.table-responsive -->



            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>



        </div>
         <!-- /#wrapper -->
 </div>

 </body>
</html>
