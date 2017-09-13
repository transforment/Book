<!-- /.col-lg-12 -->
<div class="col-lg-12">
<h1 class="h1">Add a New Book </h1>
<hr class="divider">
      <div class="row">

<form method="post" class="form-horizontal" action="<?php echo base_url('Home/addBookFun');?>" >
  <div class="form-group">
    <label class="control-label col-sm-2" for="Bookname">Bookname</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Bookname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Publisher">Publisher name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Publisher">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Page">Num of Pages</label>
    <div class="col-sm-10">
    <input type="number" min="0" step="1" class="form-control" name="Page">
    </div>
  </div>
  <div class="form-group">
  <div class="col-sm-2">
  </div>
<div class="col-sm-10">
  <button type="submit" class="btn btn-primary">Add Book</button>
  </div>
  </div>
</form>
<button class="btn btn-default" onclick="location.href='<?php echo base_url();?>Home'">Back</button>
</div>
</div>