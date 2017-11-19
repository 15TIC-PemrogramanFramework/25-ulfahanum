<?php $this->load->view('templates/headeradmin');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url().'Home/loginadmin' ?>">Dashboard</a>
        </li>
      </ol>
      <div class="row">
        <div class="col-12">
          <p>Selamat datang <b><?php echo $this->session->userdata('username'); ?></b></p>
        </div>
      </div>
    </div>
    </div>
<?php $this->load->view('templates/footer'); ?>