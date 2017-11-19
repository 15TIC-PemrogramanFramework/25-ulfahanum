<?php $this->load->view('templates/headermember'); ?>
<div id="pricing" class="color black">
<div class="container">
<div class="wrapper span12">
<div id="page-title">
<div id="page-title-inner">
<h2><span>Our Diary</span></h2>
<p align="center">"Share your story here.<b> No one</b> will judge you here."</p>
</div>	
</div>
<div id="contact-form">
<div style="margin-right: 20px; margin-bottom: 10px;">
<?php echo anchor(site_url('Diary/tambah_diary/'),
'<i class="fa fa-plus-circle">
</i> Add a new Diary', 'class="btn btn-primary"'); ?>
</div>
</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
<tr>
<th align="center">ID</th>
<th align="center">Diary</th>
<th align="center">Date of Diary</th>
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
<?php $this->load->view('templates/footermember'); ?>
<script type="text/javascript">
$(document).ready(function(){
$('#example').DataTable();
});
</script>
