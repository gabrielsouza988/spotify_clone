<!-- <div class="wrapper"> -->
<!-- Sidebar Holder -->
<!-- <nav id="sidebar">
      <div class="logo" style="padding: 10px; margin-top: 10px; margin-left: 10px;">
        <a href="<?php echo base_url(); ?>first/" class="logo-normal">
          <img src="<?php echo base_url(); ?>assets/img/spotify.svg" alt="" width="130">
        </a>
      </div>

      <ul class="list-unstyled components">
        
        <li class="active">
          <a href="#menu">
            <i class="fa fa-home" style="padding: 10px;"></i>
              <b style="padding-left: 5px;">Início</b>
          </a>

        </li>
        <li>
          <a href="<?php echo base_url(); ?>#menu">
              <i class="fa fa-search" style="padding: 10px;"></i>
              <b style="padding-left: 5px;">Buscar</b>
          </a>

        </li>
        <li>
          <a href="<?php echo base_url(); ?>#menu">
          <i class="" style="padding: 10px;"><b>||\</b></i>
              <b style="padding-left: 5px;">Sua Biblioteca</b>
          </a>
        </li>
       
        <br>
        <li style="padding-left: 25px;">
          <h6 style="color: #cecccc;">PLAYLISTS</h6>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>#menu">
          <i class="fa fa-plus-square" style="padding: 10px;"></i>
              <b style="padding-left: 5px;">Criar playlist</b>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>#menu">
          <i class="fa fa-heart" style="padding: 10px;"></i>
              <b style="padding-left: 5px;">Músicas curtidas</b>
          </a>
        </li>

        <div style="border-bottom: 1px solid #282828; width: 80%; margin-left: 20px;">

        </div>
      </ul>
        
      
    </nav> -->

<div class="root">
  <nav class="nav-bar d-flex flex-column">
    <div class="nav-bar-header d-flex pl-4 pt-4 pb-4">
      <img class="logo" src="<?php echo base_url(); ?>assets/img/spotify.svg">
    </div>

    <ul class="navbar-nav list-unstyled">

      <li class="nav-item active">
        <a href="" class="nav-link d-flex align-itens-center">
          <!-- <i class="fa fa-home"></i> -->
          <img src="<?php echo base_url(); ?>assets/img/svg/inicio.svg" alt="">
          <span>Início</span>
        </a>
      </li><br><br>

      <li class="nav-item">
        <a href="" class="nav-link d-flex align-itens-center">
          <img src="<?php echo base_url(); ?>assets/img/svg/search.svg" alt="">
          <span>Buscar</span>
        </a>
      </li><br><br>

      <li class="nav-item">
        <a href="" class="nav-link d-flex align-itens-center">
          <img src="<?php echo base_url(); ?>assets/img/svg/biblioteca.svg" alt="">
          <span>Sua biblioteca</span>
        </a>
      </li><br><br>

      <li class="playlists">
        <h6>PLAYLISTS</h6>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link criar-playlist d-flex align-itens-center">
          <img src="<?php echo base_url(); ?>assets/img/svg/criarPlaylist.svg" alt="">
          <span>Criar playlist</span>
        </a>
      </li><br><br>

      <li class="nav-item">
        <a href="" class="nav-link musicas-curtidas d-flex align-itens-center">

          <img src="<?php echo base_url(); ?>assets/img/svg/coracao.svg" alt="">
          <span>Músicas curtidas</span>
        </a>
      </li><br><br>

      <div class="border-playlists"></div>
    </ul>

  </nav>

  <div class="top-bar">

  </div>

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

  <div class="player">

  </div>

</div>