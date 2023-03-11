<h2>Contato</h2>

<?=get('message')?>

<form action="/pages/forms/contato.php" method="POST" role="form">
    
    <div class="form-group">
        <label for="name">Nome</label>
        <input name="name" type="text" class="form-control"  placeholder="Digite seu nome">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control"  placeholder="Digite seu email">
    </div>
    <div class="form-group">
        <label for="">Assunto</label>
        <input name= "subject" type="text" class="form-control"  placeholder="Digite o assunto">
    </div>

    <div class="form-group">
        <label for="message">Mensagem</label>
        <textarea name="message" cols="30" rows="10" placeholder="Digite aqui sua mensagem" class=form-control></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>