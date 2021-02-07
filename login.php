<?php require 'process.php'; ?>	
<head>
<link rel="stylesheet" href="includes/bulma-0.9.1/bulma/css/bulma.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<section class="hero ">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-10-tablet is-6-desktop is-4-widescreen">
          <form action="" class="box" method="POST">
            <div class="field">
              <label for="" class="label">Username</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="JohnDoe" class="input" name="user_name" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-user"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" placeholder="*******" name="password" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="checkbox">
                <input type="checkbox">
               Remember me
              </label>
            </div>
            <div class="field">
              <input type="submit" class="button is-success" value="Login" name="login">

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>