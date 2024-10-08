    <?php if(!empty($this->session->flashdata('alert'))) {?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-11">
                        <h5><?=$this->session->flashdata('alert')?></h5>
                    </div>
                    <div class="col-1">
                        <span type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                        </span>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <script>
        $('#exampleModal').modal();
    </script>
    <?php } ?>

  <script src="<?=base_url('plugins/slick/js/slick.js')?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <script src="<?=base_url('dist/js/')?>vgnav.min.js"></script>
  <script src="<?=base_url('dist/js/crazymodifier.js')?>"></script>

  <script>
    $('.counter-numbers').count();
    
  </script>
  <script>
    $(document).ready(function () {
      $('.vg-nav').vegasMenu({open: 'left'});
    });
  </script>
</body>
</html>