<!DOCTYPE html>
<html>
  <head>
    <title>Lockscreen</title>
    <?php include "head.php"; ?>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="lockscreen-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="lock-box"><img class="rounded-circle user-image" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
        <h4 class="text-center user-name">John Doe</h4>
        <p class="text-center text-muted">Account Locked</p>
        <form class="unlock-form" action="dashboard.php">
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" autofocus>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-unlock fa-lg"></i>UNLOCK </button>
          </div>
        </form>
        <p><a href="index.php">Not John ? Login Here.</a></p>
      </div>
    </section>
    <?php include "script.php"; ?>
  </body>
</html>