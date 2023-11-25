
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Card 1</h5>
            <p class="card-text">Some information here</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Card 2</h5>
            <p class="card-text">Some information here</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Some information here</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Some information here</p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Pie Chart</h5>
            <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Line Chart</h5>
            <canvas id="lineChart"></canvas>
            </div>
        </div>
    </div>
</div>




 <!-- Chart.js -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
<script>
    // Pie Chart
    var pieChartCanvas = document.getElementById('pieChart').getContext('2d');
    var pieChartData = {
      labels: ['Label 1', 'Label 2', 'Label 3'],
      datasets: [{
        data: [30, 50, 20],
        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
      }]
    };
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieChartData
    });

    // Line Chart
    var lineChartCanvas = document.getElementById('lineChart').getContext('2d');
    var lineChartData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June'],
      datasets: [{
        label: 'Dataset 1',
        data: [12, 19, 3, 5, 2, 3],
        borderColor: '#FF6384',
        fill: false
      }, {
        label: 'Dataset 2',
        data: [7, 11, 5, 8, 3, 7],
        borderColor: '#36A2EB',
        fill: false
      }]
    };
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData
    });
  </script>

