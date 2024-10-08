  <div class="bg-black">
    <div class="px-lg-5 py-1 fa-sm">
      <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6 text-lg-right text-center">
          <!--<a href="<?=base_url('login')?>" class="text-light">Login</a> / -->
          <a href="<?=base_url('registration')?>" class="text-light">Register</a>
        </div>
      </div>
    </div>
  </div>
  <header class="my-header bg-white px-4 shadow border-bottom">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="navbar-brand">
          <img src="<?=base_url('dist/img/cowshala-logo.png')?>" alt="" height="60" class="py-1">
        </div>
        <div class="navigation my-auto">
          <nav class="vg-nav vg-nav-lg vg-nav-hover">
            <ul>
              <li class="nav-item"><a href="<?=base_url()?>" class="cm-nav-link">Home</a></li>
              <li class="nav-item"><a href="<?=base_url('why-us')?>" class="cm-nav-link">Why Us</a></li>
              <li class="nav-item"><a href="<?=base_url('our-plans')?>" class="cm-nav-link">Our Plans</a></li>
              <li class="dropdown">
                <a href="#" class="cm-nav-link">Products</a>
                <ul class="left">
                  <li class="nav-item"><a href="<?=base_url('products/a2-milk')?>" class="text-dark font-weight-bold">A2 Milk</a></li>
                  <li class="nav-item"><a href="<?=base_url('products/paneer')?>" class="text-dark font-weight-bold">Paneer</a></li>
                  <li class="nav-item"><a href="<?=base_url('products/bilona-ghee')?>" class="text-dark font-weight-bold">Bilona Ghee</a></li>
                  <li class="nav-item"><a href="<?=base_url('products/non-bilona-ghee')?>" class="text-dark font-weight-bold">Non Bilona Ghee</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="<?=base_url('about-us')?>" class="cm-nav-link">About Us</a></li>
              <li class="nav-item"><a href="<?=base_url('contact-us')?>" class="cm-nav-link">Contact Us</a></li>
              
            </ul>
          </nav>
        </div>
        <div class="navbar my-nav d-none d-lg-fle x">
          <ul class="nav">
            <li class="nav-item"><a href="<?=base_url()?>" class="nav-link cm-nav-link active">Home</a></li>
            <!-- <li class="nav-item"><a href="<?=base_url('products')?>" class=""></a></li> -->
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle cm-nav-link"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Products
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?=base_url('products/a2-milk')?>">A2 Milk</a></li>
                <li><a class="dropdown-item" href="<?=base_url('products/bilona-ghee')?>">Bilona Ghee</a></li>
                <li><a class="dropdown-item" href="<?=base_url('products/paneer')?>">Paneer</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="<?=base_url('about-us')?>" class="nav-link cm-nav-link">About Us</a></li>
            <li class="nav-item"><a href="<?=base_url('contact-us')?>" class="nav-link cm-nav-link">Contact Us</a></li>
            <li class="nav-item">
              <?php if(isset($_SESSION['logged_in'])) {?>
              <a href="<?=base_url('admin')?>" class="nav-link"><i class="fa-xs fa fa-lock mr-2"></i>Dashboard</a>   
              <?php } else {?>
              <a href="<?=base_url('login')?>" class="nav-link"><i class="fa-xs fa fa-lock mr-2"></i>Login</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>