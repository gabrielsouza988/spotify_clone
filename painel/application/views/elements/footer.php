<!--footer-->

  <div class="col-md-12" style="background-color: #282828; position: fixed; bottom: 0; height: 6em;">
    <div >
      <audio controls="controls" style="height: 90px; width: 100%;">
        <source src="<?php echo base_url(); ?>assets/music/tribo-da-periferia.mp3" type="audio/ogg" />
        <source src="<?php echo base_url(); ?>assets/music/tribo-da-periferia.mp3" type="audio/mpeg" />
        Your browser does not support the audio element.
      </audio>
    </div>
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
