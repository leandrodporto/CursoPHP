<h2>Pagina Inicial</h2>

<?=get('message')?>

<a class="btn btn-primary" href="?page=create_user">Cadastrar Novo</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $users = all('users');
            foreach ($users as $user):
        ?> 

        <tr>
            <td><?=$user->id;?></td>
            <td><?=$user->name;?></td>
            <td><?=$user->email;?></td>
             <td>
                <a class="btn btn-success" href="?page=edit_user&id=<?=$user->id;?>">Editar</a>
             </td> 
             <td>
                <a class="btn btn-danger" href="?page=delete_user&id=<?=$user->id;?>">Deletar</a>
             </td>  
        </tr>
     <?php endforeach;?>   
    </tbody>
</table>
