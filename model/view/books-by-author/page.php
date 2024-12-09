<h1>Books by author</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      <th>Year</th>
      <th>Month</th>
      <th>Day</th>
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
