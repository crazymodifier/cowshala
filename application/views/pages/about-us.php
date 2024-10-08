<?php $this->load->view('templates/navbar');?>  
  <main>
    <!-- Slider -->
    <div class="slider" style="background:url(<?=base_url('dist/img/milk-4755234_1920.jpg')?>) center/cover">
      <div class="overlay-black-b p-5">
        <div class="pt-5">
          <h1 class="display-3 font-weight-bold font-1 text-white">About Us</h1>
        </div>
      </div>
    </div>

    <!-- About -->
    <section class="cm-section py-0">
      <div class="row">
        <div class="col-lg-6 py-5">
          <h2 class="font-1 h1">Cowshala</h2>
          <p>Cowshala envisions to become the most-trusted brand name for A2 cow milk.  We envisage to make people aware about healthy dairy choices and what substantial difference it can make in their life. With our range of superlative dairy products, we have stepped in the milk industry to become the most organized player. </p>
          <p>No wonder, Good health is a treasure today. If you have healthy, you are indeed rich in real terms. Good eating habits are mandatory for keeping up good health.  And, here, we relate with you. Cowshala has been set up with the mission to encourage people for picking up good food habits.</p>
          <p>Milk and related products covers an important section of our diet. Milk is one of the purest and natural forms of food. Dairy products have immense health benefits. But are you sure, the ones which you are consuming are the best for you?  You cannot afford to compromise your health by consuming the same old products, when you have got healthier choices. </p>
          <p>Cowshala strives to deliver at your doorstep, superior quality A2 milk, paneer and desi ghee prepared by the traditional bilona method.</p>
        </div>
        <div class="col-lg-6 d-none d-md-block"><img src="<?=base_url('dist/img/cowshala-1.png')?>" alt="" class="position-absolute" style="bottom:0"></div>
      </div>
    </section>

    <!-- Why Us -->
    <?php $this->load->view('templates/why-us');?>
    
    <!-- Process -->
    <?php $this->load->view('templates/process')?>

  </main>