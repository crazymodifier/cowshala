<?php 
  $this->load->view('templates/navbar');
  // $this->load->view('templates/slider');
?>
  <section class="" style="background:#ffffff url(<?=base_url('dist/img/kisspng-coffee-milk-cattle-chocolate-milk-cream-milk-5a94e7838f22f8.2731985815197080355863.png')?>) center/auto no-repeat">
      <div class="overlay-white-8 p-4 p-lg-5">
        <div class="container-fluid py-4">
          <div class="row">
            
            <div class="col-lg-12 pt-4">
              <div class="row g-0">
                <div class="col-lg-6 pr-lg-5 my-auto order-2 order-md-1">
                  <h1 class="font-1 my-2"><span><?=$product->name?></span><span class="devider bg-dark"></span></h1>
                  <div class="pr-lg-5">
                    <?=$product->description?>
                  </div>
                  
                  
                  
                </div>
                <div class="col-lg-6 order-1 order-md-2">
                  <div class="embed-responsive embed-responsive-4by3">
                    <div class="embed-responsive-item" style="background:url(<?=base_url('dist/img/').$product->image?>) center/contain no-repeat"></div>
                  </div>
                </div>
              </div>
            </div>
            <?php $price_tag = $this->logics->price_tags($product->id);
                  
                  foreach($price_tag as $tag){ ?>
                <div class="col-lg-4 col-sm-6 col-6 text-center">
                      
                  <h2><i class="fa fa-rupee-sign mr-2 fa-sm"></i><?=$tag->price?> per <?=$tag->qty?> <?=$tag->scale?></h2>
                  <a class="btn btn-dark px-4 rounded-pill my-2" href="../order-now/<?=$product->id?>">Buy Now</a>
                  
                </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Why Us -->
    <?php $this->load->view('templates/why-us'); ?>

    <!-- Process -->
    <?php $this->load->view('templates/process')?>

    <!-- Counter -->
    <?php $this->load->view('templates/counter')?>
