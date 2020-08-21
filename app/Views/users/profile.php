<section class="section-padding">
<div class="container">
  <div class="row">
    <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container login-page-content login-form">
          <div class="login-form">

          
          </div>
        <h3><?= $user['fullname'] ?></h3>
        <hr>
        <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        <form class="" action="<?= base_url('/profile')?>" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="firstname">Full Name</label>
               <input type="text" class="form-control" name="fullname" id="fullname" value="<?= set_value('fullname', $user['fullname']) ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="birthdate">Date Of bith</label>
               <input type="text" class="form-control" name="birthdate" id="birthdate" value="<?= set_value('birthdate', $user['birthdate']) ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
               <label for="phone_number">Phone Number</label>
               <input type="text" class="form-control" readonly id="phone_number" value="<?= $user['phone_number'] ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
               <label for="polling_station">Polling Station</label>
               <input type="text" class="form-control" readonly id="polling_station" value="<?= $user['polling_station'] ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
               <label for="location">Location</label>
               <input type="text" class="form-control" readonly id="location" value="<?= $user['location'] ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" name="password" id="password" value="">
             </div>
           </div>
           <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="password_confirm">Confirm Password</label>
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
            </div>
          </div>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
          </div>

          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</section>
