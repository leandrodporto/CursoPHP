<?php $this->layout('master', ['title' => $title]) ?>
<h2>Login</h2>

<?php echo getFlash('message'); 
if (!logged()):
?>
<form action="/login" method="post">
    <input type="text" name="email" placeholder="Seu email">
    <input type="password" name="password" placeholder="Sua Senha">
    <button type="submit">Login</button>
</form>
<?php else:?>
    <h2>Você já esta logado!</h2>
    <a href='/logout'>Logout</a>
<?php endif;?>    