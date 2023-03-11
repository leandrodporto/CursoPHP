<?=get('message')?>

<form action="/pages/forms/create_user.php" method="POST" role="form">

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="">
    </div>
    <div class="form-group">
        <label for="lastName">Sobrenome</label>
        <input type="text" class="form-control" name="lastName" placeholder="">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>