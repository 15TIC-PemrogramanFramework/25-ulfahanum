<?php $this->load->view('templates/headermember');?>
	<div id="pricing" class="color black">
		<div class="container">
			<div class="wrapper span12">
			<div id="page-title">
				<div id="page-title-inner">
					<h2><span>POSTS</span></h2>
				</div>	
			</div>
			<div class="four-tables">
				<div class="row-fluid">	
				<table>
				<?php foreach ($post as $key => $row) { ?>
				<tr>
					<td>Subject of Post</td>
					<td>:</td>
					<td><?php echo $row->subject_post; ?></td>
				</tr>
				<tr>
					<td>Date of Post</td>
					<td>:</td>
					<td><?php echo $row->tanggal_post; ?></td>
				</tr>
				<tr>
					<td>Post</td>
					<td>:</td>
					<td><?php echo $row->isi_post; ?></td>
				</tr>
				<tr>
				<td>
				<?php echo anchor(site_url('Counselor/tambah_counselor/'.$row->id_post),
				'<i class="fa fa-plus-circle"></i> Comment', 'class="btn btn-primary"'); ?>
				</td>
				</tr>
				<?php } ?>
				</table>
				</div>
				<hr/>
			</div>
			</div>	
		</div>
	</div>
<?php $this->load->view('templates/footermember'); ?>