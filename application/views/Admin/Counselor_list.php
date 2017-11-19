 <?php $this->load->view('templates/headeradmin'); ?>
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
 	<a href="<?php echo base_url().'Home/loginadmin' ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top: 20px; margin-bottom: 10px;">
			<?php echo anchor(site_url('Post/tambah_post'),
				'<i class="fa fa-plus-circle">
			</i> Add a New Post', 'class="btn btn-primary"'); ?>
		</div>
	</div>
</div>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Counselor</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID Counselor</th>
			<th>Email</th>
			<th>Subject of Post</th>
			<th>Isi Counselor</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($counselor as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_counselor; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->subject_post; ?></td>
			<td><?php echo $row->isi_counselor; ?></td>
			<td>
				<?php echo anchor(site_url('Counselor/delete/'.$row->id_counselor),
				'<i class="fa fa-trash"> </i>',
				'class="btn btn-danger"'); ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});
</script>