<main class="bg-light d-flex vh-100">
  <div class="m-auto col-4">
    <form action="<?=base_url('Login/login_me')?>" class="m-5 card p-3" method="post">
      <div class="form-group mb-3">
        <input type="text" name="email" class="form-control" placeholder="Username">
      </div>
      <div class="form-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      <div class="text-center"><button class="btn btn-success">Submit</button></div>
    </form>
  </div>
</main>