<?php include("includes/header.php")?>



<div class="page-title">
	<div class="title_left">
		<h4>Form Elements</h4>
	</div>

	<div class="title_right">
		<div class="col-md-5 col-sm-5   form-group pull-right top_search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Go!</button>
				</span>
			</div>
		</div>
	</div>
</div>

<br><br>

<div class="row">
	<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Design <small>different form elements</small></h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
        <br>
        
      <form action="<?php base_url() ?>insertassets" method="post" enctype="multipart/form-data">
          

					<div class="row">
          
						<div class="col-md-6 col-lg-6 col-sm-12">
							<div class="form-group ">
								<label for="">Name</label>
								<input class="form-control resetblank" placeholder="Enter name" type="text" id="name" name="name"
									value="">
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-sm-12">
							<div class="form-group ">
								<label for="">Address</label>
								<input class="form-control resetblank" placeholder="Enter address" type="text" id="address"
									name="address" value="">
							</div>
						</div>
            <div class="col-md-6 col-lg-6 col-sm-12">
							<div class="form-group ">
								<label for="">image</label>
								<input class="form-control resetblank" type="file" id="image" name="image" value="">
							</div>
						</div>
						



						<div class="col-md-6 col-lg-6 col-sm-12">
							<div class="form-group ">
								<label for="getassetstypes">Asset type</label>
								<select class="custom-select" name="getassetstypes" id="getassetstypes">


									<?php 
    foreach($getassetstypes as $assetstypes )
    {
      ?>

									<option value="<?php echo $assetstypes ["id"] ?>"><?php echo $assetstypes ["title"] ?></option>
									<?php 
 
    };
    
  ?>
								</select>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-sm-6">
							<div class="form-group ">
								<label for="getassetseater">Asset Seater</label>
								<select class="custom-select" name="getassetseater" id="getassetseater">


									<?php 
    foreach($getassetseater as $assetseater )
    {
      ?>

									<option value="<?php echo $assetseater ["id"] ?>"><?php echo $assetseater ["title"] ?></option>
									<?php 
 
    };
    
  ?>
								</select>
							</div>
						</div>



						<div class="col-md-6 col-lg-6 col-sm-6">
							<div class="form-group ">
								<label for="getassetstatus">Status</label>
								<select class="custom-select" name="getassetstatus" id="getassetstatus">


									<?php 
    foreach($getassetstatus as $assetstatus )
    {
      ?>

									<option value="<?php echo $assetstatus ["id"] ?>"><?php echo $assetstatus ["title"] ?></option>
									<?php 
 
    };
    
  ?>
								</select>
							</div>
						</div>

					</div>
					<br><br>




					<div class="shadow-sm col-md-12 col-lg-12 col-sm-12 bg-white rounded">
						<div class="shadow-none p-3 mb-5 bg-light rounded">
							<h6>Amenities</h6>
							<div class="form-group">

								<?php 
             foreach($getamenities as $amenities )
              {
               ?>
               


								<input type="checkbox" id="id" name="getamentities[]" value="<?php echo  $amenities["id"]; ?>" />

								<?php echo $amenities["title"]; ?>
								<label style="font-size: large;" for="getamentities"><?php $amenities['title'] ?></label>

								<?php

                 };

                 ?>
							</div>
						</div>
					</div>



					<br><br>

					<div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<div class="form-group ">
								<textarea name="htmldescription" rows="5"></textarea>
								<script>
									CKEDITOR.replace('htmldescription');

								</script>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<button type="submit" class="btn btn-outline-info btn-block ">Submit</button>
						</div>
					</div>


			</div>
		</div>

	</form>
	</div>
</div>
</div>






<?php include("includes/footer.php")?>
