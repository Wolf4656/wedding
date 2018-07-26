<?php
  include 'header.php';
  include 'select.php';

  $results = Select::selectGuests();
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  <?php
    for($i = 0;$i < mysqli_num_rows($results); $i++){
    $content = $results->fetch_assoc();
  ?>
    <tr>
      <td><?php echo $content["fullName"]; ?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

<?php include 'footer.php' ?>
