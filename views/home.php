<?php if(isset($_GET['error'])) { ?>
<div class="alert alert-danger mb-md-3 mt-md-3" role="alert">
  Usuário e/ou senha inválido(s).
</div>
<?php } ?>
<h1 style="text-align:center;">Bem-vindos a Corvo cursos</h1>
<form method="post" action="login.php">
    <label for="usuario" class="badge badge-secondary">Usuário:</label>
    <input class="form-control mb-md-3" type="text" name="usuario" placeholder="Usuário">
    <label for="usuario" class="badge badge-secondary">Senha:</label>
    <input class="form-control mb-md-3" type="password" name="senha" placeholder="Senha">
    <input class="btn btn-success" type="submit" value="Login">
</form>