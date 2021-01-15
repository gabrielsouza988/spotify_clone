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
        <?php $count = 0; ?>
        <?php foreach($new_releases->albums->items as $row): ?>
          <?php $count++; ?>
          <div class="col-md-3">
            <div class="card main-card" data-classe="play-hover-<?php echo $count; ?>">
              <div class="card-header">
                <?php foreach($row->images as $image): ?>
                  <?php if($image->height == 640): ?>
                    <img src="<?php echo $image->url; ?>" class="">
                    <div class="div-play-hover play-hover-<?php echo $count; ?>">
                      <i class="fa fa-play icon-play-hover"></i>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
              </div>
              <div class="card-body">
                <h6 class="card-title"><?php echo $row->name; ?></h6>
                <p class="card-text">Artista</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
    
  </div>
  
</div>

<?php $this->load->view('elements/footer'); ?>