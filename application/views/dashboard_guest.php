<?php $this->load->view('templates/headerguest');?>
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
				<?php } ?>
				</table>
				</div>
				<hr/>
			</div>
			</div>	
		</div>
	</div>
<?php $this->load->view('templates/footerguest'); ?>