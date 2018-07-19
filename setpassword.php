<?php include 'header.php'; ?>

<form class="rsvp" action="update-guest-password.php" method="post">
  <div class="home">
    <h1>Please set your username and password</h1>
  </div>
  <label for="username">Username</label>
      <input type="username" class="form-control" id="username" aria-describedby="username" name="username" placeholder="Enter Username">
  <label for="password">Password</label>
      <input type="password" class="form-control" id="password" aria-describedby="password" name="password" placeholder="Enter Password">
      <input type="hidden" class="form-control" id="rsvpCode" aria-describedby="rsvpCode" name="rsvpCode" value="<?php echo $_GET ["rsvpCode"];?>">
      <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'footer.php' ?>
