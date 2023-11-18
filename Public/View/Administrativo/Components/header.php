

<header>
    <nav class="navbar navbar-expand-lg" style="background-color: #63666A;" >
      <div class="container header" >
      <img src="<?=ROTA_GERAL?>/Public/Estilos/img/icone-user.png" alt="Avatar" class="avatar">
        <a class="navbar-brand" href="#" style="color: #91ceff; font-family: Lato; font-style: normal; font-weight: 700; letter-spacing: 3px;">OPTO</a>
        <div class="ms-auto">
          <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="<?=ROTA_GERAL?>/Public/Estilos/img/icone-user.png" alt="Avatar" class="avatar">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li>
                <a data-bs-toggle="modal" data-bs-target="#editProfileModal" class="dropdown-item">Editar Perfil</a></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-4 content">
    <div id="spinner" class="d-none spinner-border text-primary" role="status">
        <span class="visually-hidden">Carregando...</span>
    </div>
  
<!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProfileModalLabel">Editar Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="formularioEditarPerfil">
          <div class="mb-3">
            <label for="nameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nameInput">
          </div>
          <div class="mb-3">
            <label for="imageInput" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imageInput">
          </div>
          <div class="mb-3">
            <label for="addressInput" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="addressInput">
          </div>
          <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="phoneInput" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="phoneInput">
                </div>          
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="passwordInput">
                </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="enviarDados()">Salvar Alterações</button>
      </div>
    </div>
  </div>
</div>