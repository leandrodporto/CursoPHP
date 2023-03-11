<?=get('message')?>

<?php 

   $user = find('users', 'id', $_GET['id']);
?>

<form action="/pages/forms/update_user.php" method="POST" role="form">   

    
<input type="hidden" name="id" value="<?=$user->id?>">

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" value="<?=$user->name?>" placeholder="">
    </div>

    <div class="form-group">
        <label for="lastName">Sobrenome</label>
        <input type="text" class="form-control" name="lastName" value="<?=$user->lastName?>" placeholder="">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email"value="<?=$user->email?>" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>