<?php $this->load->view('elements/header'); ?>
<?php $this->load->view('elements/sidebar-lateral'); ?>
<?php //var_dump($_SESSION['token']); ?>
<div class="main">
    <div class="main-principal">
      <div class="row titulo-main-pricipal pb-1">
        <div class="col-md-12">
          <h2 class="d-inline"><a href="" class="d-flex align-itens-center">Tocado recentemente</a> </h2>
          <a href="" class="color-gray float-md-right font-weight-bold">
            VER TUDO
          </a>
        </div>
      </div>
      <div class="row">
        <?php $count = 0; ?>
          <?php foreach($recent->items as $row): ?>
            <?php $count++; ?>
            <div class="col-md-3">
              <div class="card main-card" data-classe="play-hover-<?php echo $count; ?>">
                <div class="card-header">
                  <?php foreach($row->track->album->images as $image): ?>
                    <?php if($image->height == 640): ?>
                      <img src="<?php echo $image->url; ?>" class="">
                      <div class="div-play-hover play-hover-<?php echo $count; ?>">
                        <i class="fa fa-play icon-play-hover"></i>
                      </div>
                      <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="card-body">
                  <h6 class="card-title"><?php echo $row->track->album->name; ?></h6>
                  <?php $last_key = count($row->track->album->artists); ?>
                  
                  <?php foreach($row->track->album->artists as $key => $artist): ?>
                    <?php echo $artist->name ?><?php echo ($key != $last_key && $last_key != 1)?', ' : ''; ?> 
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
      </div>

      <div class="row titulo-main-pricipal pb-1">
        <div class="col-md-12">
          <h2 class="d-inline"><a href="" class="d-flex align-itens-center">Musicas mais ouvidas por você</a> </h2>
          <a href="" class="color-gray float-md-right font-weight-bold">
            VER TUDO
          </a>
        </div>
      </div>
      <div class="row">
          <?php foreach($tops_tracks_user->items as $row): ?>
            <?php $count++; ?>
            <div class="col-md-3">
              <div class="card main-card" data-classe="play-hover-<?php echo $count; ?>">
                <div class="card-header">
                  <?php foreach($row->track->album->images as $image): ?>
                    <?php if($image->height == 640): ?>
                      <img src="<?php echo $image->url; ?>" class="">
                      <div class="div-play-hover play-hover-<?php echo $count; ?>">
                        <i class="fa fa-play icon-play-hover"></i>
                      </div>
                      <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="card-body">
                
                  <h6><?php echo $row->track->album->name; ?></h6>

                  <?php $last_key = count($row->track->album->artists); ?>
                  
                  <?php foreach($row->track->album->artists as $key => $artist): ?>
                    <?php echo $artist->name ?><?php echo ($key != $last_key && $last_key != 1)?', ' : ''; ?> 
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        

      </div>

    </div>
    
  </div>
  
</div>
<!-- <?php $count = 0; ?>
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
        <?php endforeach; ?> -->
<?php $this->load->view('elements/footer'); ?>