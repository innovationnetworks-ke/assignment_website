<?php include 'process.php'; ?>
<!--  -->
<head>
<link rel="stylesheet" href="includes/bulma-0.9.1/bulma/css/bulma.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<section class="hero">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-8-tablet is-10-desktop is-5-widescreen">
		<h3 class="h3  text-center">USER REGISTRATION</h3>
          <form action="" class="box" method="POST">
            <div class="field">
              <label for="" class="label">Username</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="JohnDoe" class="input" name="user_name" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>
			<div class="field">
              <label for="" class="label">First Name</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="John" class="input" name="fname" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>
			<div class="field">
              <label for="" class="label">Last Name</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="Doe" class="input" name="lname" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>
			<div class="field">
              <label for="" class="label">E-mail :</label>
              <div class="control has-icons-left">
                <input type="email" placeholder="ngugi@gmail.com" class="input" name="email" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>
			<div class="field">
              <label for="" class="label">Date of Birth :</label>
              <div class="control has-icons-left">
                <input type="date" placeholder="01/01/1990" name="date" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-date"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" placeholder="*******" name="password1" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
			<div class="field">
              <label for="" class="label">Repeat Password</label>
              <div class="control has-icons-left">
                <input type="password" placeholder="*******" name="password2" class="input" required>
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
              <input type="submit" name="register" value="register" class="button is-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>