<div class="row">
  <div class="col">
<h1>Books</h1>
  </div>
  <div class="col-auto">
<?php
include "new-form.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($book = $books->fetch_assoc()) {
  include "book.php";
}
?>
    </tbody>
  </table>
</div>
