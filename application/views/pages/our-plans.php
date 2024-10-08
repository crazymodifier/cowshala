<?php $this->load->view('templates/navbar');?>  
<main>
  <div class="slider" style="background:url(<?=base_url('dist/img/milk-4755234_1920.jpg')?>) center/cover">
      <div class="overlay-black-b p-5">
        <div class="pt-5">
          <h1 class="display-3 font-weight-bold font-1 text-white">Our Subscription Plans</h1>
        </div>
      </div>
    </div>
    
    <div class="p-lg-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img class="mw-100" src="<?=base_url('dist/img/trail-package.png')?>">
                    
                </div>
                <a href="subscription-plans?plan=0" class="btn btn-secondary">Subscribe Now</a>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="mw-100" src="<?=base_url('dist/img/1-package.png')?>">
                    
                </div> 
                <a href="subscription-plans?plan=1" class="btn btn-secondary">Subscribe Now</a>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="mw-100" src="<?=base_url('dist/img/2-package.png')?>">
                    
                </div> 
                <a href="subscription-plans?plan=2" class="btn btn-secondary">Subscribe Now</a>
            </div>
        </div>
    </div>
</main>