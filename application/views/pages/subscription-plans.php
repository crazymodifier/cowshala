    <?php $this->load->view('templates/navbar');?>
    
    <main class="p-lg-5 bg-light">
        
        
        <div class="row">
            <div class="col-lg-8 pr-lg-5">
                <?php if(isset($_REQUEST['plan']) && $_REQUEST['plan'] == '0') {
                    $package = $_REQUEST['plan'];
                ?>
                <h1 class="display-1 font-1"><span>Our Launch offer</span></h1>
                <ol class="h4 font-1">
                    <li>5-Day Trail Pack</li>
                    <li>1 L milk @ Rs. 80 everyday for 5-days at your doorstep</li>
                    <li>Sign Up Bonus (Get 500 voucher* just when you sign-up with us)</li>
                    <li>(500 pe 500) Get Rs. vocuher* on your first purchase of Rs. 500 and above.</li>
                </ol>
                <?php } elseif(isset($_REQUEST['plan']) && $_REQUEST['plan'] == '1') {
                    $package = $_REQUEST['plan'];
                ?>
                <h1 class="display-1 font-1"><span>Health Eco Package</span></h1>
                <ol class="h4 font-1">
                    <li>1 Liter of A2 milk daily</li>
                    <li>Paneer (200gm) twice a month</li>
                    <li>Bilona Ghee (100 ml) once a month</li>
                    <li>A2 Desi Ghee (250gm) once a month</li>
                </ol>
                <?php } elseif(isset($_REQUEST['plan']) && $_REQUEST['plan'] == '2') {
                    $package = $_REQUEST['plan'];
                ?>
                <h1 class="display-1 font-1"><span>Health Plus Package</span></h1>
                <ol class="h4 font-1">
                    <li>2 Liter of A2 milk daily</li>
                    <li>Paneer (200gm) twice a month</li>
                    <li>Bilona Ghee (100 ml) once a month</li>
                    <li>A2 Desi Ghee (500gm) once a month</li>
                </ol>
                <?php } else{redirect();}?>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <?php if(!empty($this->session->flashdata('error'))) echo validation_errors() ?>
                        
                        <form method="post" action="subscribe-now">
                            <input type="hidden" name="package" value="<?=$package?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="tel" name="mobile" class="form-control" placeholder="Enter your mobile" required>
                            </div>
                            <?php if( $_REQUEST['plan'] != '0') {?>
                            <div class="form-group">
                                <label>Coupon Code</label>
                                <input type="text" name="coupon" name="coupon-code" class="form-control" placeholder="Enter coupon code">
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                
                                <button class="btn btn-secondary">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    