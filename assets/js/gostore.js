$(document).on('click', '#tab01', function (){
  $('#conteudo-tab-1').show();
  $('#conteudo-tab-2').hide();
  $('#conteudo-tab-3').hide();
  $('#conteudo-tab-4').hide();
  $(this).addClass('active');
  $('#tab02').removeClass('active');
  $('#tab03').removeClass('active');
  $('#tab04').removeClass('active');
});
$(document).on('click', '#tab02', function (){
  $('#conteudo-tab-1').hide();
  $('#conteudo-tab-2').show();
  $('#conteudo-tab-3').hide();
  $('#conteudo-tab-4').hide();
  $(this).addClass('active');
  $('#tab01').removeClass('active');
  $('#tab03').removeClass('active');
  $('#tab04').removeClass('active');
});
$(document).on('click', '#tab03', function (){
  $('#conteudo-tab-1').hide();
  $('#conteudo-tab-2').hide();
  $('#conteudo-tab-3').show();
  $('#conteudo-tab-4').hide();
  $(this).addClass('active');
  $('#tab01').removeClass('active');
  $('#tab02').removeClass('active');
  $('#tab04').removeClass('active');
});
$(document).on('click', '#tab04', function (){
  $('#conteudo-tab-1').hide();
  $('#conteudo-tab-2').hide();
  $('#conteudo-tab-3').hide();
  $('#conteudo-tab-4').show();
  $(this).addClass('active');
  $('#tab01').removeClass('active');
  $('#tab02').removeClass('active');
  $('#tab03').removeClass('active');
});

$(document).on('click', '#price', function (){
	$('#price').mask('000.000.000.000.000,00', { reverse : true});
});

$(document).on('click', '#color_plus', function (){
  $('.color_add').append('<br>\
    <input type="text" name="color[]" value="" placeholder="Cor" class="form-control" id="color">\
  ');
});

$(document).on('click', '#size_plus', function (){
  $('.size_add').append('<br>\
    <input type="text" name="size[]" value="" placeholder="Tamanho" class="form-control" id="size">\
  ');
});

$(document).on('click', '#modal_amount_color', function (){
  var id = $(this).data('id');
  $('#id_color').val(id);
});

$(document).on('click', '#modal_amount_size', function (){
  var id = $(this).data('id');
  $('#id_size').val(id);
});

$('.newimgum').bind("click", function () {
  $('#picimgum').click();
});

$(document).on("change", "#picimgum", function () {
  readURLum(this);
});

function readURLum(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#imgum').attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
     $('#save').show();
  }
}
