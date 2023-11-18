</div>
<footer>
    <div class="container">
      <p>&copy; 2023 Nome da Empresa. Todos os direitos reservados.</p>
    </div>
</footer> 
 
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Chart.js -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
<!-- Core theme JS-->
<script src="<?=ROTA_GERAL?>/Public/Estilos/js/scripts.js"></script>
<script>
    $(document).ready(function() {
      $(".dropdown-toggle").click(function() {
        $(this).siblings(".dropdown-menu").toggleClass("show");
      });

      $(document).click(function(e) {
        if (!$(e.target).closest(".dropdown").length) {
          $(".dropdown-menu").removeClass("show");
        }
      });
    });
</script>

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


<script src="<?=ROTA_GERAL?>/Public/Estilos/js/send.js"></script>
<script>
    function enviarDados() {
        var dados = {
        nome: $('#nome').val(),
        imagem: $('#imagem').val(),
        endereco: $('#endereco').val(),
        telefone: $('#telefone').val(),
        senha: $('#senha').val()
        };
        
        enviarRequisicao(dados, "<?=ROTA_GERAL?>/Profile/update/<?=$_SESSION['code']?>");
    }
</script>

</body>
</html>