<style media="screen">
	.actived{
		border-bottom: 2px solid red !important;
    color: red !important;
  }
  .actived i{
    color: red !important;
  }
</style>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
        <a href="<?php echo base_url(); ?>first/" class="simple-text logo-normal texto-vermelho">
          Spotify Clone
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li >
            <a href="<?php echo base_url(); ?>first/">
              <i class="nc-icon nc-bank"  style="color: black;"></i>
              <p>inicio</p>
            </a>
          </li>

          <li >
            <a href="<?php echo base_url(); ?>products/" >
              <i class="fa fa-address-card" style="color: black;"></i>
              <p>Produtos</p>
            </a>
          </li>

					<li >
            <a href="<?php echo base_url(); ?>variants/" >
              <i class="fa fa-address-card" style="color: black;"></i>
              <p>Variaçoes</p>
            </a>
          </li>

            <li >
              <a href="<?php echo base_url(); ?>login/logout">
                <i class="nc-icon nc-bank" style="color: black;"></i>
                <p>Sair</p>
              </a>
            </li>

          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <a class="navbar-brand" href="<?php echo base_url()?>inicio/"><?php echo (!empty($title)) ? $title : "Spotify Clone"; ?></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <form style="display: none !important;">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <i class="nc-icon nc-zoom-split"></i>
                    </div>
                  </div>
                </div>
              </form>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link btn-magnify" href="#pablo">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Stats</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item btn-rotate dropdown">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Some Actions</span>
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-rotate" href="#pablo">
                    <i class="nc-icon nc-settings-gear-65"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Account</span>
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
