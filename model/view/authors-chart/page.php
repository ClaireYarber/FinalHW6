<h1>authors chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($author = $authors->fetch_assoc()) {
  echo $author['num_sections'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$authors = selectauthors();
while ($author = $authors->fetch_assoc()) {
  echo "'" . $author['author_name'] . "', ";
}
?>
    ]
},
  });
</script>
