<!-- /.col-lg-12 -->
<div class="col-lg-12">

      <div class="row">
     
<p class="h1" class="panel-title">Book list </p>
<hr class="divider">
  <a class="btn btn-default" href="<?php echo base_url();?>Home/add" >Add Book</a> 
  <div><br/></div>
  <table id="table" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Bookname</th>
        <th>Publisher name</th>
        <th>Page</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
    <?php

    foreach($q->result_array() as $row){
    echo'	<tr>';
      echo'   <td>'.$row['id'].'</td>';
      echo'   <td>'.$row['name'].'</td>';
      echo'   <td>'.$row['publisher'].'</td>';
      echo'   <td>'.$row['page'].'</td>';?>
     <td>
      <a class="btn btn-default" href="<?php echo base_url().'Home/edit/'.$row['id'];?>" >Edit</a> 
     <a class="btn btn-default" data-toggle="confirmation" 
   href="<?php echo base_url().'Home/deleteBook/'.$row['id'];?>" data-singleton="true" data-popout="true">Delete</a>
         <a class="btn btn-primary" href="<?php echo base_url().'Impressions/listComment/'.$row['id'];?>" >Comment</a> 
			</td>
      <?php
    echo'	 </tr>';}?>


    </tbody>
  </table>

          
</div>
</div>