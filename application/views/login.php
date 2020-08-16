<?php $this->load->view('elements/header');?>
<style media="screen">

</style>
<section class="container">
  <br>
  <div class="row align-centered login">
    <div class="col-md-4 login-border">
      <h3 class="azul-padrao text-xs-center pt-3">GoStore</h3>
      <h4 class="azul-padrao text-xs-center">Seja bem vindo</h4>
      <h1>Ola asdsadasdasdasd</h1>
      <form  action="<?php echo base_url(); ?>login" method="post">
        <div class="row">
          <div class="col-md-12">
            <label for="email">E-mail:</label>
            <input class="form-control" type="text" name="login" id="login"/>
            <span id="preencha_email" style="display: none; color: red;">Preencha campo e-mail</span>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label for="password">Senha:</label>
            <input class="form-control" type="password" name="senha" id="senha"/>
            <span id="preencha_senha" style="display: none; color: red;">Preencha campo senha</span>
          </div>
        </div>
         <div class="col-md-5">
          <br>
          <a href="<?php echo base_url()?>register/" class="float-md-left float-sm-left float-xs-left">Crie sua conta</a><br>
        </div>
        <div class="col-md-7">
          <br>
          <a href="#" class="float-md-right float-sm-left float-xs-left" data-toggle="modal" data-target="#esqueci_senha">Esqueci minha senha</a><br>
        </div>
        <div class="col-md-12">
          <br>
          <!-- <?php //if ($this->session->flashdata('error')): ?>
            <p class="alert alert-danger">Usuario ou senha invalidos(as)</p>
          <?php //endif ?> -->
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <br>
          <input class="btn btn-primary form-control" type="submit" id="entrar" name="entrar" value="Entrar"/>
        </div>
      </form>
    </div>
  </div>
  <br><br>
</section>

<!-- Modal -->
<div class="modal fade" id="esqueci_senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="display: inline;">Recuperar senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo base_url(); ?>login/esqueci_senha" method="post">
          <h6 style="display: inline;">Digite seu email</h6>
          <input type="email" name="email" style="width: 60%;"><br>
        </div>
        <div class="modal-footer">
          <button type="submit" name="esqueci_senha" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('elements/footer');?>
