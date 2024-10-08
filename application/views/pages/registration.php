<?php $this->load->view('templates/navbar');?> 
<main class="p-lg-5 bg-light">
  <div class="row">
    <div class="col-lg-5 pl-lg-5 m-auto">
      <?php if ($msg = $this->session->flashdata('success')) { ?>
        <div class="alert alert-success" role="alert">
          <?=$msg?>
        </div>
      <?php } else { ?>
      <h3 class="font-1 mb-3  font-weight-bold text-dark">Registration Form<span class="devider bg-dark"></span></h3>
      <?php 
        echo validation_errors();
      ?>
      <div class="card p-3">
        <div class="card-body">
          <form action="register-me" method="post">
            <div class="form-group">
              <label for="name">Your Name*</label>
              <input type="text" name="name" id="name" class="form-control" value="<?=set_value('name')?>" placeholder="Full Name*" required>
            </div>
            <div class="form-group">
              <label for="mobile">Your Mobile*</label>
              <input type="tel" name="mobile" id="mobile" class="form-control" value="<?=set_value('mobile')?>" placeholder="Mobile Number*" required>
            </div>
            <div class="form-group">
              <label for="email">Your Email*</label>
              <input type="email" name="email" id="email" class="form-control" value="<?=set_value('email')?>" placeholder="Email Address*" required>
            </div>
            <div><button type="submit" class="btn btn-dark btn-md">Submit</button></div>
          </form>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</main>