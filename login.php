<?php include 'header.php'; ?>
<form class="rsvp" action="log.php" method="post">
  <label for="userName">Username</label>
      <input type="username" class="form-control" id="username" aria-describedby="username" name="username" placeholder="Enter Username">
  <label for="password">Password</label>
      <input type="password" class="form-control" id="password" aria-describedby="password" name="password" placeholder="Enter Password">
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include 'footer.php'; ?>
