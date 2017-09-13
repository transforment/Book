
<div class="col-lg-12">
<h1 class="h1">Edit Comment for "<small><?php echo $bookName;?> </small>"</h1>
<hr class="divider">

      <div class="row">
<h1 class="panel-title"> </h1>
<form method="post" class="form-horizontal" action="<?php echo base_url('Impressions/editCommentFun');?>" >
  
    <input type="hidden" class="form-control" name="id" value="<?php echo($data[0]['id']);?>">
    <input type="hidden" class="form-control" name="book_id" value="<?php echo($data[0]['book_id']);?>">

    <div class="form-group">
    <label class="control-label col-sm-2" for="comment">Comment</label>
    <div class="col-sm-10">
    <textarea type="text" class="form-control" rows="5" name="comment" ><?php echo($data[0]['name']);?></textarea>
    </div>
  </div>

  <div class="form-group">
  <div class="col-sm-2">
  </div>
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Edit Comment</button>
    </div>
  </div>
  
</form>
<button class="btn btn-default" onclick="location.href='<?php echo base_url('Impressions/listComment/'.$data[0]['book_id']);?>'">Back</button>
</div>
</div>