<?php $this->load->view('elements/header');?>
<section class="container">
  <br>
  <div class="row align-centered login">
    <div class="col-md-4 login-border">
      <h3 class="azul-padrao text-xs-center pt-3">GoStore</h3>
      <h4 class="azul-padrao text-xs-center">faça seu cadastro</h4>
      <form method="post" action="<?php echo base_url(); ?>register" >
        <div class="row">
          <div class="col-md-12">
            <label for="name">Nome:</label>
            <input class="form-control" type="text" name="nome" id="name" value="" />
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label for="email">E-mail:</label>
            <input class="form-control" type="text" name="email" id="email" value="" required/>
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
              <p id="email_cadastrado" style="display: none;" class="alert alert-danger">Ja existe uma conta vinculada com este email, faça login!</p>
            </div>
          </div>

        <div class="row">
          <div class="col-md-12">
            <label for="password">Senha:</label>
            <input class="form-control" type="password" name="password" id="password" required/>
            <span id="preencha_senha" style="display: none; color: red;">Preencha campo senha</span>
          </div>
        </div>
        <div class="col-md-12">
          <br>
          <a href="<?php echo base_url()?>login/" class="float-md-right float-sm-right float-xs-right">Ja tem conta? Faça login!</a><br>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <br>
          <input class="btn btn-primary form-control" type="submit" id="register" name="register" value="Cadastrar"/>
        </div>
        <?php if (isset($retorno)): ?>
          <p class="text-centered h6" style="color: red;"><?php echo $retorno; ?></p>
        <?php endif; ?>
      </form>
    </div>
  </div>
  <br><br>
</section>

<?php $this->load->view('elements/footer');?>

<script>
  $(document).on('change', '#email', function (){
  var email = $(this).val();
  $.ajax({
    url: 'http://localhost/Lista_de_tarefas/register/isset_register',
    method: 'POST',
    dataType: 'json',
    data: {email:email},
    success: function(data){
      $('#register').prop( "disabled", false );
      $('#email_cadastrado').hide('slow');
      $('#email_cadastrado').show(700, data['email']);
      $('#register').prop( "disabled", true );
      $('#email').show();

    }
  });
});
</script>
