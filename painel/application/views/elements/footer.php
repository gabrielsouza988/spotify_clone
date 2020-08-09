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


  /* #bg {
    
  } */

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

  /* #fill {
    height: 5px;
    background-color: royalblue;
    border-radius: 20px;
  }

  #handle {
    width: 8px;
    height: 8px;
    background-color: royalblue;
    border-radius: 50%;
    margin-left: -5px;
    transform: scale(2);
  } */
</style>
<div class="col-md-12" style="overflow: hidden; background-color: #282828; position: fixed; bottom: 0; height: 6em;">

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
        <button id="play" onclick="playOrPauseSong()"><img src="<?php echo base_url(); ?>assets/img/Pause.png" /></button>
        <button id="next" onclick="next()"><img src="<?php echo base_url(); ?>assets/img/Next.png" height="90%" width="90%" /></button>
        

      </div>

      <div id="seek-bar">
        <div id="fill"></div>
        <div id="handle"></div>
      </div>
    </div>
  </div>
  <!-- <div >
      <audio controls="controls" style="height: 90px; width: 100%;">
        <source src="<?php echo base_url(); ?>assets/music/tribo-da-periferia.mp3" type="audio/ogg" />
        <source src="<?php echo base_url(); ?>assets/music/tribo-da-periferia.mp3" type="audio/mpeg" />
        Your browser does not support the audio element.
      </audio>
    </div> -->
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
</script>
</body>

</html>