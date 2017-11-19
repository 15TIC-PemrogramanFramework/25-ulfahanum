<?php $this->load->view('templates/headeradmin'); ?>
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
 	<a href="<?php echo base_url().'Home/loginadmin' ?>">Dashboard</a>
        </li>
      </ol>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>Subject Post</label>
		<input type="text" name="subject_post" class="form-control" value="<?php echo $subject_post;?>" placeholder="Enter subject for post" required>
	</div>
	<div class="form-group">
		<label>Date of Post</label>
		<input type="text" name="tanggal_post" class="form-control" value="<?php echo $tanggal_post;?>" placeholder="Enter date of post" required>
	</div>
	<div class="form-group">
		<label>Post</label>
		<input type="text" name="isi_post" class="form-control" value="<?php echo $isi_post;?>" placeholder="Enter your post" required>
	</div>
	<input type="hidden" name="id_post" value="<?php echo $id_post; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('Post') ?>" class="btn btn-default">Cancel</a>
</form>
</div>
</div>
<?php $this->load->view('templates/footer'); ?>