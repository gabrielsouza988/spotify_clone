<!--footer-->
<style>
  #player {
    display: flex;
    align-items: center;
    justify-content: center;
    /* margin-top: 10px; */
  }

  #buttons button {
    background: none;
    border: none;
    cursor: pointer;
  }

  #buttons button:target {
    background: none;
    border: none;
  }

  #bg img {
    padding-top: 15px;
    width: 60px;
    height: 70px;

  }

  #songTitle {
    display: inline;
    margin-left: 10px;
  }

  #songTitle a {
    color: white;
    text-transform: capitalize;
  }

  #main {
    width: 25%;
    border-radius: 15px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 999;

  }

  #seek-bar {
    width: 250px;
    height: 5px;
    background-color: #545353;
    display: flex;
    border-radius: 50px;
    /* float: right;
    position: relative;
    top: -20px; */
    margin-left: 35px;
    cursor: pointer;
  }

  #fill {
    height: 5px;
    background-color: #B3B3B3;
    border-radius: 20px;
  }

  #handle {
    width: 8px;
    height: 8px;
    background-color: white;
    border-radius: 50%;
    margin-left: -5px;
    /* transform: scale(2); */
  }

  #handle:hover {
    transform: scale(2);
  }

  input[type=range] {
   -webkit-appearance: none; /*Hides the slider so that custom slider can be made */
  width: 100%; /* Specific width is required for Firefox. */
  /* color: #4B907D; */
  border-radius: 45rem;
  height: 5px;
  background: #545353; /* Otherwise white in Chrome*/
  /* background-color: #1DB954; */
}

input[type=range]::-webkit-slider-thumb {
  /* -webkit-appearance: none; */
  /* background-color: #1DB954; */
}

input[type=range]:focus {
  /* outline: none; Removes the blue border. You should probably do some kind of focus styling for accessibility reasons though. */
  /* background-color: #1DB954; */
}

input[type=range]::-ms-track {
  width: 100%;
  cursor: pointer;

  /* Hides the slider so custom styles can be added */
   /* background: transparent; 
  border-color: transparent;
  color: transparent; */
}

/* Special styling for WebKit/Blink */
input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  /* border: 1px solid #000000; */
  height: 15px;
  width: 15px;
  /* border-radius: 100%; */
  /* background: #ffffff; */
  cursor: pointer;
  /* margin-top: -14px; You need to specify a margin in Chrome, but in Firefox and IE it is automatic */
  /*box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;  Add cool effects to your sliders! */
}

input[type=range]::-webkit-slider-thumb:hover {
  /* -webkit-appearance: none;*/
  border: 1px solid #000000; 
  height: 15px;
  width: 15px;
  border-radius: 100%;
  background: #ffffff; 
   cursor: pointer; 
  /* margin-top: -14px; You need to specify a margin in Chrome, but in Firefox and IE it is automatic */
  /*box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;  Add cool effects to your sliders! */
  /* background-color: #1DB954; */
}




</style>
<div class="col-xs-12" style="overflow: hidden; background-color: #282828; position: fixed; bottom: 0; height: 6em;">

  <div id="bg">
    <div id="blackLayer"></div>
    <img src="<?php echo base_url(); ?>assets/img/Poster1.jpg" />
    <div id="songTitle">
      <a href="">teste</a>
    </div>
  </div>

  <div id="main">

    <div id="player">
      <div id="buttons">
        <button id="pre" onclick="pre()"><img src="<?php echo base_url(); ?>assets/img/Pre.png" height="90%" width="90%" /></button>
        <button id="play" onclick="playOrPauseSong()"><img src="<?php echo base_url(); ?>assets/img/Play.png" /></button>
        <button id="pause" onclick="playOrPauseSong()"><img src="<?php echo base_url(); ?>assets/img/Pause.png"/></button>
        <button id="next" onclick="next()"><img src="<?php echo base_url(); ?>assets/img/Next.png" height="90%" width="90%" /></button>
      </div>


    </div>
        <div id="seek-bar">
          <div id="fill"></div>
          <div id="handle"></div>
        </div>

      </div>
      <div style="float: right; position: relative; top: -30px;">
      <div class="col-md-3" style="float: left; position: relative; right: -30px;">
        <i class="fa fa-volume-up"></i>
      </div>
      <div class="col-md-9" style="position: relative; bottom: 3px;">
        <input type="range" id="volume" min="0" max="10" value="5" >

      </div>
      </div>
  <!-- <div >
      <audio controls src="<?php echo base_url(); ?>assets/music/tribo-da-periferia.mp3"> 
        <source src="<?php echo base_url(); ?>assets/music/tribo-da-periferia.mp3" type="audio/ogg" />
        <source src="<?php echo base_url(); ?>assets/music/tribo-da-periferia.mp3" type="audio/mpeg" />
        Your browser does not support the audio element.
      </audio>
    </div>  -->
</div>

<script src="<?php echo base_url(); ?>assets/js/tether.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.0.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskMoney.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/gostore.js"></script>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {


    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
  });


  var audio;

//Hide Pause Initially
$('#pause').hide();
	
//Initializer - Play First Song
initAudio($('#playlist li:first-child'));
	
function initAudio(element){
	var song = element.attr('song');
    var title = element.text();
    var cover = element.attr('cover');
    var artist = element.attr('artist');

	//Create a New Audio Object
	audio = new Audio('media/' + song);
	
	if(!audio.currentTime){
		$('#duration').html('0.00');
	}

	$('#audio-player .title').text(title);
    $('#audio-player .artist').text(artist);
	
	//Insert Cover Image
	$('img.cover').attr('src','images/covers/' + cover);
	
	$('#playlist li').removeClass('active');
    element.addClass('active');
}


//Play Button
$('#play').click(function(){
	audio.play();
	$('#play').hide();
	$('#pause').show();
	$('#duration').fadeIn(400);
	showDuration();
});

//Pause Button
$('#pause').click(function(){
	audio.pause();
	$('#pause').hide();
	$('#play').show();
});
	
//Stop Button
$('#stop').click(function(){
	audio.pause();		
	audio.currentTime = 0;
	$('#pause').hide();
	$('#play').show();
	$('#duration').fadeOut(400);
});

//Next Button
$('#next').click(function(){
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
$('#prev').click(function(){
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
$('#playlist li').click(function () {
    audio.pause();
    initAudio($(this));
	$('#play').hide();
	$('#pause').show();
	$('#duration').fadeIn(400);
	audio.play();
	showDuration();
});

//Volume Control
$('#volume').change(function(){
	audio.volume = parseFloat(this.value / 10);
});
	
//Time Duration
function showDuration(){
	$(audio).bind('timeupdate', function(){
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
		$('#progress').css('width',value+'%');
	});
}

</script>
</body>

</html>