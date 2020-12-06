<?php include("includes/header.php")?>



<div class="page-title">
	<div class="title_left">
		<h4>show form</h4>
	</div>

<br><br>




<table  class="table" id="bttaffble">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">image</th>
      <th scope="col">getamenities</th>
      <th scope="col">getassetseater</th>
      <th scope="col">getassetstypes</th>
      <th scope="col">getassetstatus</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
      <?php 
    $id =0;
    foreach($getassets as $assets) 
    {?>
            <tr>
      <th scope="row"><?php echo $id++  ?></th>
      <td><?php echo $assets['name'] ?></td>
      <td>t<?php echo $assets['address'] ?></td>
      <td><?php echo $assets['image'] ?></td>
      <td><?php echo $assets['getamenities'] ?></td>
      <td><?php echo $assets['getassetseater'] ?></td>
      <td><?php echo $assets['getassetstypes'] ?></td>
      <td><?php echo $assets['getassetstatus'] ?></td>

      <td><a href=" <?php echo base_url() ?>Admin/Dashboardcontroller/editassets/<?php echo $assets['id'] ?>" class="btn btn-info btn-small"> edit</a></td>
      <td><a href="<?php echo base_url() ?>Admin/Dashboardcontroller/delete/<?php echo $assets['id'] ?>" class="btn btn-danger btn-small"> delete</a></td>



      </tr>
      <?php





}
    ?>
    
  </tbody>

</table>








<?php include("includes/footer.php")?>   