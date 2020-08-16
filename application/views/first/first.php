<?php $this->load->view('elements/header'); ?>

<?php $this->load->view('elements/sidebar-lateral'); ?>


<div class="main">
    <div class="main-principal">
      <div class="row titulo-main-pricipal">
        <div class="col-md-12">
          <h2><a href="" class="d-flex align-itens-center">Tocado recentemente</a> </h2>
        </div>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo base_url(); ?>assets/img/perfil.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Projota</h5>
              <p class="card-text">Artista</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo base_url(); ?>assets/img/perfil.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Mano Brown</h5>
              <p class="card-text">Artista</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo base_url(); ?>assets/img/perfil.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Eminem</h5>
              <p class="card-text">Artista</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <img src="<?php echo base_url(); ?>assets/img/perfil.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Seu jorge</h5>
              <p class="card-text">Artista</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    
  </div>
  
</div>






<?php $this->load->view('elements/footer'); ?>