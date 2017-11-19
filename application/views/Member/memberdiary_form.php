<?php $this->load->view('templates/headermember'); ?>
<div id="pricing" class="color black">
<div class="container">
<div class="wrapper span12">
<div id="page-title">
<div id="page-title-inner">
<h2><span>Our Diary</span></h2>
<p align="center">"Share your story here.<b> No one</b> will judge you here."</p>
</div>	
<form action="<?php echo $action; ?>" method="post">
	<div id="contact-form">
		<label>Your Diary</label>
		<input type="text" name="isi_diary" class="form-control" value="<?php echo $isi_diary;?>" placeholder="What's on your mind?" required>
	</div>
		<div id="contact-form">
		<label>Date</label>
		<input type="text" name="tanggal_diary" class="form-control" value="<?php echo $tanggal_diary;?>" placeholder="Enter the date" required>
	</div>
	<input type="hidden" name="id_diary" value="<?php echo $id_diary; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('Diary') ?>" class="btn btn-default">Cancel</a>
</form>
</div>
</div>
</div>
</div>
<?php $this->load->view('templates/footermember'); ?>