<?php 
include("include/header.php");
?>
<script>
$(document).ready(function() {
    var text_max = 70;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#indextitle').keyup(function() {
        var text_length = $('#indextitle').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
	
	var text_max1 = 160;
    $('#textarea_feedback1').html(text_max1 + ' characters remaining');

    $('#indexdesc').keyup(function() {
        var text_length = $('#indexdesc').val().length;
        var text_remaining = text_max1 - text_length;

        $('#textarea_feedback1').html(text_remaining + ' characters remaining');
    });
});
</script>
<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
         <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i> Home</a></li>
         <li><a href="#">SEO</a></li>
         <li>Service/Product</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Service/Product</h6>
   <div class="heading-elements">
      <ul class="icons-list">
         <li><a data-action="collapse"></a></li>
         <li><a data-action="reload"></a></li>
         <li><a data-action="close"></a></li>
      </ul>
   </div>
</div>
<div class="panel-body">
    <form  action="dbfile.php"  method="post" enctype="multipart/form-data">
		 <?php 
			include("database.php");
			
			$query = "SELECT * FROM seo";
			$result = mysqli_query($mysqli,$query)or die(mysqli_error());
			if($row = mysqli_fetch_array($result))
			{
				extract($row);
			}
		?>
		<input type="hidden" name="id" value="<?php echo $seoid;?>">
		<fieldset>
		  <div class="row">
			 <div class="col-md-12">
				<div class="form-group">
				   <textarea type="text" name="servicetitle" id="servicetitle" rows="6" class="form-control" placeholder="Title"><?php echo $servicetitle;?></textarea>
				   <label>Title </label>
				   <div id="textarea_feedback" style="color:red"></div>	
				</div>
			 </div>
			 <div class="col-md-12">
				<div class="form-group">
				   <textarea type="text" name="servicedesc" id="servicedesc" rows="6" class="form-control" placeholder="Description"><?php echo $servicedesc;?></textarea>
				   <label>Description </label>
				   <div id="textarea_feedback1" style="color:red"></div>	
				</div>
			 </div>
			 <div class="col-md-12">
				<div class="form-group">
				   <textarea type="text" name="servicekeyword" id="servicekeyword" rows="6" class="form-control" placeholder="Keywords"><?php echo $servicekeyword;?></textarea>
				   <label>Keywords</label>
				</div>
			 </div>
				
		  </div>
		</fieldset>
		<div class="row">
		  <div class="col-md-5"></div>
		  <div class="col-md-1">	
			 <br>
			 <input type="submit" name="editserviceseo" value="Edit" class="btn btn-primary active" style="width:145%;" title="Submit Form">
		  </div>
	   </div>
    </form>
</div>
</div>
</div>

   <!-- /footer -->
   <?php include('include/footer.php')?>

</body>
</html>