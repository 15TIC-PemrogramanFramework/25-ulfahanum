<?php $this->load->view('templates/headermember'); ?>
<div id="pricing" class="color black">
<div class="container">
<div class="wrapper span12">
<div id="page-title">
<div id="page-title-inner">
<h2><span>Counselor</span></h2>
<p align="center">"Please do enter the email you registered with and the subject of post you chose."</p>
</div>	
<form action="<?php echo $aksi; ?>" method="post">
	<div id="contact-form">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Your Email" required>
	</div>
	<div id="contact-form">
		<label>Subject of Post</label>
		<input type="text" name="subject_post" class="form-control" value="<?php echo $subject_post;?>" placeholder="The subject of post" required>
	</div>
	<div id="contact-form">
		<label>Your Opinion</label>
		<input type="text" name="isi_counselor" class="form-control" value="<?php echo $isi_counselor;?>" placeholder="What's your opinion?" required>
	</div>
	<input type="hidden" name="id_counselor" value="<?php echo $id_counselor; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $btn ?></button>
	<a href="<?php echo site_url('Post/postmember') ?>" class="btn btn-default">Cancel</a>
</form>
</div>
</div>
</div>
</div>
<?php $this->load->view('templates/footermember'); ?>