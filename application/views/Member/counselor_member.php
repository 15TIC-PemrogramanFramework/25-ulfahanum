<?php $this->load->view('templates/headermember');?>
	<div id="pricing" class="color black">
		<div class="container">
			<div class="wrapper span12">
			<div id="page-title">
				<div id="page-title-inner">
					<h2><span>COUNSELOR</span></h2>
				</div>	
			</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
		<tr>
			<th>Email</th>
			<th>Subject of Post</th>
			<th>Isi Counselor</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($counselor as $key => $row) { ?>
		<tr>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->subject_post; ?></td>
			<td><?php echo $row->isi_counselor; ?></td>
		</tr>
		<?php } ?>
	</tbody>
				</table>
				</div>
				<hr/>
			</div>
			</div>	
		</div>
	</div>
<?php $this->load->view('templates/footermember'); ?>