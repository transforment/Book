<div class="col-lg-12">
<h1 class="h1" class="panel-title">Edit Book</h1>
<hr class="divider">
      <div class="row">
      <form method="post" class="form-horizontal" action="<?php echo base_url('Home/editBookFun');?>" >
  <div class="form-group">
  <input type="hidden" class="form-control" name="id" value="<?php echo($data[0]['id']);?>">
    <label class="control-label col-sm-2" for="Bookname">Bookname</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Bookname" value="<?php echo($data[0]['name']);?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Publisher">Publisher name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Publisher" value="<?php echo($data[0]['publisher']);?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" min="0" step="1" for="Page">Num of Pages</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" name="Page" value="<?php echo($data[0]['page']);?>">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-2">
  </div>
<div class="col-sm-10">
  <button type="submit" class="btn btn-primary">Edit</button>
  </div>
  </div>
</form>
<button class="btn btn-default" onclick="location.href='<?php echo base_url();?>Home'">Back</button>
</div>
</div>