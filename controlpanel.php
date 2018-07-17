<?php include 'header.php' ?>
<div class="control-panel-box">
  <h1>Insert Guest</h1>
  <form class="insert-guest" action="insertGuest.php" method="post">
    <label for="firstName">First Name</label>
        <input type="firstName" class="form-control" id="firstName" aria-describedby="firstName" name="firstName" placeholder="Enter first name">
    <label for="lastName">Last Name</label>
        <input type="lastName" class="form-control" id="lastName" aria-describedby="lastName" name="lastName" placeholder="Enter last name">
    <label for="password">Password</label>
        <input type="password" class="form-control" id="password" aria-describedby="password" name="password" placeholder="Enter password">
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
<?php include 'footer.php' ?>
