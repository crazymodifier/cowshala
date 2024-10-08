<?php
$product = $this->db->where('id',$product_id)->get('products')->row();;
    
?>

<main>
    <section class="cm-section pb-0 p-2 p-lg-5">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <form method="post" action="checkout">
                    <input type="hidden" name="amount" value="<?=$product->price?>">
                    <input type="hidden" name="package" value="<?=$product->name?>">
                    <div class="card">
                        <div class="form-group">
                            <label>Name*</label>
                            <input name="name" required type="text" placeholder="Enter Your Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email*</label>
                            <input name="email" required type="email" placeholder="Enter Your Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile*</label>
                            <input name="mobile" required type="tel" placeholder="Enter Your Mobile" class="form-control">
                        </div>
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>