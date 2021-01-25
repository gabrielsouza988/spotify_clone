
<!-- footer -->
<div class="player">
  <div class="col-xs-12">

    <div id="bg">
      <div id="blackLayer"></div>
      <div class="row">
        <div class="col-md-1">
            <?php foreach($currently_playing->item->album->images as $row): ?>
              <?php if($row->height == 640): ?>
                <img src="<?php echo $row->url; ?>" />
              <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="col-md-6" id="currently_playing">
          <div class="songTitle">
            <?php //foreach($currently_playing->item->album as $row): ?>
              <span>
                <a href=""><?php echo $currently_playing->item->name; ?></a>
              </span>
            <?php //endforeach; ?>
          </div>
          <br>
          <div id="artist_player" >
            <?php $last_key = count($currently_playing->item->artists); ?>
            <?php foreach($currently_playing->item->artists as $key => $row): ?>
              <a href=""><?php echo $row->name; ?></a><?php echo ($key != $last_key && $last_key != 1)?', ' : ''; ?> 
            <?php endforeach; ?>
          </div>
          </div>
        </div>
    <!-- </div> -->
    </div>

    <div id="main">


      <div id="player">
        <div id="buttons">

          <button id="pre" onclick="pre()">
            <i class="fa fa-step-backward text-white pr-2  size_pre_next"></i>
          </button>

          <button id="play" onclick="playOrPauseSong()">
            <i class="fa fa-play-circle text-white player_or_pause"></i>
          </button>

          <button id="pause" onclick="playOrPauseSong()">
            <i class="fa fa-pause-circle text-white player_or_pause"></i>
          </button>

          <button id="next" onclick="next()">
            <i class="fa fa-step-forward text-white pl-2 size_pre_next"></i>
          </button>
        </div>
      </div>
      <div id="seek-bar">
        <div id="fill"></div>
        <div id="handle"></div>
      </div>

    </div>
    <div id="div_volume" style="float: right; position: relative; top: -30px;">
      <div class="col-md-3" style="float: left; position: relative; right: -30px;">
        <i class="fa fa-volume-up text-white"></i>
      </div>
      <div class="col-md-9" style="position: relative; bottom: 3px;">
        <input type="range" id="volume" min="0" max="10" value="8">
      </div>
    </div>
    <div>
    </div>
  </div>
</div>
<!-- <script src="<?php echo base_url(); ?>assets/js/tether.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.1.0.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.mask.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskMoney.min.js"></script> -->

<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/spotify.js"></script>

<script type="text/javascript">
  var audio;

  //Hide Pause Initially
  $('#pause').hide();

  //Initializer - Play First Song
  initAudio($('#playlist li:first-child'));

  function initAudio(element) {
    var song = element.attr('song');
    var title = element.text();
    var cover = element.attr('cover');
    var artist = element.attr('artist');

    //Create a New Audio Object
    audio = new Audio('media/' + song);

    if (!audio.currentTime) {
      $('#duration').html('0.00');
    }

    $('#audio-player .title').text(title);
    $('#audio-player .artist').text(artist);

    //Insert Cover Image
    $('img.cover').attr('src', 'images/covers/' + cover);

    $('#playlist li').removeClass('active');
    element.addClass('active');
  }


  //Play Button
  $('#play').click(function() {
    audio.play();
    $('#play').hide();
    $('#pause').show();
    $('#duration').fadeIn(400);
    showDuration();
  });

  //Pause Button
  $('#pause').click(function() {
    audio.pause();
    $('#pause').hide();
    $('#play').show();
  });

  //Stop Button
  $('#stop').click(function() {
    audio.pause();
    audio.currentTime = 0;
    $('#pause').hide();
    $('#play').show();
    $('#duration').fadeOut(400);
  });

  //Next Button
  $('#next').click(function() {
    audio.pause();
    var next = $('#playlist li.active').next();
    if (next.length == 0) {
      next = $('#playlist li:first-child');
    }
    initAudio(next);
    audio.play();
    showDuration();
  });

  //Prev Button
  $('#prev').click(function() {
    audio.pause();
    var prev = $('#playlist li.active').prev();
    if (prev.length == 0) {
      prev = $('#playlist li:last-child');
    }
    initAudio(prev);
    audio.play();
    showDuration();
  });

  //Playlist Song Click
  $('#playlist li').click(function() {
    audio.pause();
    initAudio($(this));
    $('#play').hide();
    $('#pause').show();
    $('#duration').fadeIn(400);
    audio.play();
    showDuration();
  });

  //Volume Control
  $('#volume').change(function() {
    audio.volume = parseFloat(this.value / 10);
  });

  //Time Duration
  function showDuration() {
    $(audio).bind('timeupdate', function() {
      //Get hours and minutes
      var s = parseInt(audio.currentTime % 60);
      var m = parseInt((audio.currentTime / 60) % 60);
      //Add 0 if seconds less than 10
      if (s < 10) {
        s = '0' + s;
      }
      $('#duration').html(m + '.' + s);
      var value = 0;
      if (audio.currentTime > 0) {
        value = Math.floor((100 / audio.duration) * audio.currentTime);
      }
      $('#progress').css('width', value + '%');
    });
  }
  
</script>
</body>

</html>