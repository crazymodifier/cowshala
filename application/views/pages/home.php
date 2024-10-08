  <?php $this->load->view('templates/navbar');?>  
  <main>
    <!-- Slider -->
    <?php $this->load->view('templates/slider');?>  
    <!-- About -->
    <section class="cm-section pb-0 p-2 px-lg-5 pt-lg-5"  style="background:linear-gradient(180deg, transparent 85%, #f8f9fa 20%)">
      <div class=" pt-lg-4 p-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 p-lg-5 text-light p-3" style="background:#292929">
              <h5 class="font-1">About the Company</h5>
              <h1 class="heading-1 my-2 font-1"><span>Cowshala</span><span class="devider"></span></h1>
              <p>Cowshala envisions to become the most-trusted brand name for A2 cow milk.  We envisage to make people aware about healthy dairy choices and what substantial difference it can make in their life. With our range of superlative dairy products, we have stepped in the milk industry to become the most organized player.</p>
              <p class="d-lg-block d-none">No wonder, Good health is a treasure today. If you have healthy, you are indeed rich in real terms. Good eating habits are mandatory for keeping up good health.  And, here, we relate with you. Cowshala has been set up with the mission to encourage people for picking up good food habits.</p>
              
              <a href="about-us" class="btn btn-light px-4 rounded-pill my-2">Know More...</a>
              <!-- <img src="" alt="" class="position-absolute"> -->
            </div>
            <div class="col-lg-6 mb-auto">
              <img src="<?=base_url('dist/img/cowshala-1.png')?>" alt="Cowshala" class="mw-100 d-none d-lg-inline" height="500">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process -->
    <?php $this->load->view('templates/process')?>

    <!-- Counter -->
    <?php $this->load->view('templates/counter')?>
    <!-- Why Us -->
    <?php $this->load->view('templates/why-us');?>
    <!-- Products -->
    <?php $this->load->view('templates/products');?>

    

    <!-- Plans -->
    
    <!-- delivery details -->
    
    <section class="cm-section p-4 bg-light">
        <div class="row">
            <!--<div class="col-lg-6">-->
            <!--    <div class="card shadow">-->
            <!--        <div class="card-body">-->
            <!--            <div class="row">-->
            <!--                <div class="col-lg-4">-->
            <!--                    <img scr="<?=base_url('dist/img/avatar3.png')?>" class="rounded-circle">-->
            <!--                </div>-->
            <!--                <div class='col-lg-8'>-->
            <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, exercitationem reiciendis, asperiores numquam fuga nam culpa quas voluptatum eaque omnis molestias corrupti reprehenderit sunt quis, praesentium dolor incidunt. Sint, recusandae.</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-lg-6 mx-auto">
              <div class="shadow-lg border p-4 p-lg-5">
                <div class="">
                  <h2 class="font-1 mb-4">Write To Us</h2>
                </div>
                <form action="send-message" method="post">
                  <div class="form-group">
                      <label>Your Name*</label>
                    <input type="text" name="name" id="name" placeholder="Your Full Name" required class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Your Email*</label>
                    <input type="email" name="email" id="email" placeholder="Your Email Address"required class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Your Mobile*</label>
                    <input type="tel" name="mobile" id="mobile" required placeholder="Your Mobile" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Your Messages*</label>
                      <textarea name="message" rows="4" placeholder="Type here..." class="form-control"></textarea>
                  </div>
                  <div class="form-group"><button class="btn btn-dark px-3">Submit <i class="fas fa-paper-plane ml-2"></i></button></div>
                </form>
              </div>
            </div>
        </div>
    </section>
  </main>