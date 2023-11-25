</div>
<footer>
    <div class="container">
      <p>&copy; 2023 Nome da Empresa. Todos os direitos reservados.</p>
    </div>
</footer> 
 
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
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


</body>
</html>