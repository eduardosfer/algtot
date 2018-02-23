
<!--Modal de visualização e edição de dado-->
<div id="verDados" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="gridSystemModalLabel">

 <div class="modal-dialog" role="document">

    <div class="modal-content">

       <div class="modal-header" style="background-color: #4cae4c; color: white;">
        <a  class="close"  href="<?php echo $_SERVER['REQUEST_URI']; ?>" aria-label="Close"><span aria-hidden="true">&times;</span></a>
        <h4 class="modal-title" id="gridSystemModalLabel">Perfil: <?php echo $_SESSION['usuario']; ?></h4>
      </div>

      <form name="alterarUsuario" action="../controle/Usuario.php" method="post">

        <div class="modal-body">

          <br>

         <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">
               <span class="glyphicon glyphicon-user"></span>
            </span>
            <input type="text" class="form-control" value="<?php echo $_SESSION['usuario'];?>" disabled placeholder="Usuário" pattern="[a-zA-Z0-9]+" title="Insira um nome de usuário: Apenas letras e números: Maximo 20 caracteres" aria-describedby="sizing-addon2">          
          </div>

          <br>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span>
            <input name="email" id="email" type="email" class="form-control" disabled pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $_SESSION['email'];?>" placeholder="email" title="Este e-mail pode ser utilizado para recuperar a senha da sua conta" aria-describedby="sizing-addon2">
            <span class="input-group-btn">
              <button id="editarEmail" class="btn btn-default" title="Clique para editar o e-mail do usuário" onclick="editarInput(document.getElementById('editarEmail'), document.getElementById('email'))" type="button"><span class="glyphicon glyphicon-edit"></span> Editar</button>
            </span>
          </div>

          <br>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">
               <span class="glyphicon glyphicon-lock"></span>
            </span>
            <input name="senha" id="senha" type="password" pattern="\S+" minlength="3" maxlength="20" class="form-control" disabled required placeholder="Digite a senha atual" title="Digite a senha atual: Maximo 20 caracteres, exceto espaços em branco" aria-describedby="sizing-addon2">
              <span class="input-group-btn">
                <button id="editarSenha" value="editarSenha" class="btn btn-default" title="Clique para editar a senha" onclick="editarInput(document.getElementById('editarSenha'), document.getElementById('senha'))" type="button"><span class="glyphicon glyphicon-edit"></span> Editar</button>
              </span>
          </div>

          <br>

          <div id="altSenha" style="display:none;">

              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">
                  <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input name="novaSenha" id="novaSenha" type="password" pattern="\S+" oninput="validarSenha(document.getElementById('novaSenha'),document.getElementById('confirmarSenha'),document.getElementById('acaoEditar'))" minlength="3" maxlength="20" class="form-control" disabled required placeholder="Digite a nova senha" title="Digite a nova senha: Maximo 20 caracteres, exceto espaços em branco" aria-describedby="sizing-addon2">
              </div>


              <br>

              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">
                  <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input name="confirmarSenha" id="confirmarSenha" type="password" pattern="\S+" oninput="validarSenha(document.getElementById('novaSenha'),document.getElementById('confirmarSenha'),document.getElementById('acaoEditar'))" minlength="3" maxlength="20" class="form-control" disabled required placeholder="Confirme a nova senha" title="Confirme a senha digitada acima, exceto espaços em branco" aria-describedby="sizing-addon2">
              </div>
              <br>
              <div id="alertaSenhaIncorreta" class="alert alert-danger text-center" style="display:none;" title="Senhas não conferem!" role="alert">Senhas não conferem!</div>
        </div>

        <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-calendar"></span></span>
            <input name="data" type="date" class="form-control" disabled value="<?php echo $_SESSION['data'];?>" placeholder="data" title="Esta é a data de cadastramento da conta." aria-describedby="sizing-addon2">
        </div>

      </div>


      <div class="modal-footer">
        <div class="row">
          <div class="col-sm-2">
            <a data-toggle="modal" data-target="#excluirConta" href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir Conta</a>
          </div>
          <div class="col-sm-5  col-sm-offset-5">
              <a name="cancelar" href="<?php echo isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'principal.php'; ?>" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
            <button name="acao" id="acaoEditar" type="button" value="AlterarUsuario" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Salvar</button>
          </div>
        </div>
      </div>

    </form>

  </div>

</div><!-- /.modal-content -->

</div><!--Fim modal-->
