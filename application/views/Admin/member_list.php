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
          <i class="fa fa-table"></i> Data Member</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Confirm Password</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($member as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->firstname; ?></td>
			<td><?php echo $row->lastname; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->password; ?></td>
			<td><?php echo $row->confirmpassword; ?></td>
			<td>
				<?php echo anchor(site_url('Member/delete_member/'.$row->id),
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
