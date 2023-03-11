<ul id="menu_list">
   <li><a href="/">Home</a></li>
   <?php if(!logged()):?>
   <li><a href="/login">Login</a></li>
   <li><a href="/user/create">Create</a></li>
   <?php endif;?>
</ul>
<div id="status_login">
    Bem vindo(a),
   <?php if(logged()): echo ' '.user()->firstName.' '.user()->lastName . " <a href='/logout'>Logout</a>"; else:?> 
    visitante
    <?php endif; ?>
</div>