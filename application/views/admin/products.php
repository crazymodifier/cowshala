<?php

    $products = $this->logics->get_product_details();

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Main row -->
        <div class="table-responsive bg-white">
          <table class="data-table table table-bordered table-striped table-hoverable mb-0">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $count =1;
              foreach($products as $product) {?>
              <tr>
                <td><?=$count++?></td>
                <td><?=$product->image?></td>
                <td><?=$product->name?></td>
                <td></td>
                <td></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  