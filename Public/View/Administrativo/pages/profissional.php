
        <div class="row">
            <div class="col-sm-10">
                <h1>Profissional</h1>
            </div>    
            <div class="col-sm-2">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
            </div>
        </div>

        <hr>
        <div class="row">
          <table class="table table-bordered">
              <thead>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>ações</th>
              </thead>
              <tr>
                  <td>joão</td>
                  <td>joão@email.com</td>
                  <td>75998279999</td>
                  <td>
                      <a href="" class="edit"><i class="bi bi-pencil-fill">Editar</i></a>
                      <a href="" class="delete"><i class="material-icons">Excluir</i></a>
                  </td>
              </tr>
              <tr>
                  <td>pedro</td>
                  <td>pedro@email.com</td>
                  <td>75998279999</td>
                  <td>
                      <a href="" class="edit"><i class="bi bi-pencil-fill">Editar</i></a>
                      <a href="" class="delete"><i class="material-icons">Excluir</i></a>
                  </td>
              </tr>
          </table>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de profissionais</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome do profissional:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cpf do profissional:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Area de Atuação:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telefone:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Endereço:</label>
            <input type="text" class="form-control" id="recipient-email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Formação:</label>
            <input type="text" class="form-control" id="recipient-email">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    
   
