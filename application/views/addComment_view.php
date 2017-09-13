
<!-- /.col-lg-12 -->
<div class="col-lg-12">

      
<h1 class="h1">Add Comment for "<small><?php echo $bookName;?> </small>"</h1>
<hr class="divider">
<div class="row">
<form method="post" class="form-horizontal" action="<?php echo base_url('Impressions/addCommentFun');?>" >
  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
  <div class="form-group">
    
    <label class="control-label col-sm-2" for="comment">Comment</label>
    <div class="col-sm-10">
    <textarea type="text" class="form-control" rows="5" name="comment"></textarea>
    </div>
  </div>
  <div class="form-group">
  <div class="col-sm-2">
  </div>
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
  </div>
  
</form>
<button class="btn btn-default" onclick="location.href='<?php echo base_url('Impressions/listComment/'.$id);?>'">Back</button>
</div>
</div>