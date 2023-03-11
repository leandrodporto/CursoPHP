<?php 

class update{
     
    public function index($params)
     {   
         return [
             'view' => 'update.php',
             'data' => ['title' =>'Update',    
                       ],    
         ];
 
     }

     public function show($table, $data){
        
     }
}