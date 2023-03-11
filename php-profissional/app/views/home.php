<?php $this->layout('master', ['title' => $title]) ?>

<h2>Home</h2>
<ul id="users-home">
    <?php foreach($users as $user):?>
        <li><?php echo $user->firstName." ".$user->lastName;?> | <a href="/user/<?php echo $user->id;?>">Detalhes</a></li>
    <?php endforeach;?>    
</ul>
<?php $this->start('scripts') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    axios.defaults.headers = {
        "Content-type": "applicatio/json",
        X_REQUESTED_WITH: "XMLHttpRequest",
    }        

    async function loadUsers(){

        try{
            const {data} = await axios.get('/users');
            console.log(data);
        }catch(error){
            console.log(error);
    
             }
    } loadUsers()
</script>
<?php $this->stop() ?>