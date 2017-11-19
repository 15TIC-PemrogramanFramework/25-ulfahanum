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
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Diary</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>Diary</th>
			<th>Date of Diary</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($diary as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->isi_diary; ?></td>
			<td><?php echo $row->tanggal_diary; ?></td>
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
