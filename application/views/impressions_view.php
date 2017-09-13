<!-- /.col-lg-12 -->
<div class="col-lg-12">
<h1 class="h1">List Comment for "<small><?php echo $bookName;?> </small>"</h1>
<hr class="divider">
      <div class="row">
  <a class="btn btn-default" href="<?php echo base_url();?>Impressions/add/<?php echo $id;?>" >Add Comment</a> 
  <div><br/></div>
  <table id="table" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Comment</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
    <?php

    foreach ($data as $stt =>$cm) {
    echo'	<tr>';
      echo'   <td>'.$stt.'</td>';
      echo'   <td>'.$cm.'</td>';?>
     <td>
      <a class="btn btn-default" href="<?php echo base_url().'Impressions/edit/'.$stt;?>" >Edit</a> 
     <a class="btn btn-default" data-toggle="confirmation" 
   href="<?php echo base_url().'Impressions/deleteComment/'.$id.'/'.$stt;?>" data-singleton="true" data-popout="true">Delete</a>
			</td>
      <?php
    echo'	 </tr>';}?>


    </tbody>
  </table>
<button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>Home'">Back</button>
          
</div>
</div>