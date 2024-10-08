  <?php $this->load->view('templates/navbar');?>  
  <main>
    <div class="slider" style="background:url(<?=base_url('dist/img/milk-4755234_1920.jpg')?>) center/cover">
      <div class="overlay-black-b p-5">
        <div class="pt-5">
          <h1 class="display-3 font-weight-bold font-1 text-white">Contact Us</h1>
        </div>
      </div>
    </div>

    <section class="cm-section p-4">
      <div class="row">
        <div class="col-lg-6 p-lg-5">
          <div class="shadow-lg bg-dark border p-lg-4 p-3">
            <div class="row">
              <div class="col-3">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-map-marker-alt fa-stack-1x text-dark"></i>
                </span>
              </div>
              <div class="col-9">
                <address>
                        28/3271 1st Floor Beedonpura Karol Bagh <br>
                        New Delhi-110005
                    </address>
              </div>
            </div>
          </div>
          <div class="shadow-lg bg-dark border p-lg-4 p-3 my-4">
            <div class="row">
              <div class="col-3">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-phone fa-stack-1x text-dark"></i>
                </span>
              </div>
              <div class="col-9">
                <a href="tel:919310587559" class="text-light">+91-9310587559</a>
              </div>
            </div>
          </div>
          <div class="shadow-lg bg-dark border p-lg-4 p-3">
            <div class="row">
              <div class="col-3">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-envelope fa-stack-1x text-dark"></i>
                </span>
              </div>
              <div class="col-9">
                <a href="mailto:cowshala.official@gmail.com" class="text-light">cowshala.official@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="shadow-lg border p-5">
            <div class="">
              <h2 class="font-1 mb-4">Write Us</h2>
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