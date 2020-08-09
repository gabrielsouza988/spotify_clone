<?php $this->load->view('elements/header'); ?>
    
<?php $this->load->view('elements/sidebar-lateral'); ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <h4><strong>Tocado recentemente</strong> </h4>
        </div>
    </div>
    <div class="row">

        <div class="col-md-3">
            <div class="card">
                <div style="padding: 20px 15px;"> 
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
                <div style="padding: 20px 15px;"> 
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
                <div style="padding: 20px 15px;"> 
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
                <div style="padding: 20px 15px;"> 
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


<?php $this->load->view('elements/footer'); ?>