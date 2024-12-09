<h1>Instructors chart</h1>
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
while ($instructor = $instructors->fetch_assoc()) {
  echo $instructor['num_sections'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$instructors = selectInstructors();
while ($instructor = $instructors->fetch_assoc()) {
  echo "'" . $instructor['instructor_name'] . "', ";
}
?>
    ]
},
  });
</script>
