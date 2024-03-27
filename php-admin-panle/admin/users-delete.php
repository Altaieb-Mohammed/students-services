<?php

   require '../config/function.php';

   $paraResult = checkparamId('id');

   if(is_numeric($paraResult)){
      
    $userId = validate($paraResult);

    $user = getById('users',$userId);
       if($user['status'] == 200){

           $userDelete = deleteQuery('users',$userId);
           if($userDelete){
             
            redirect('users.php', 'User Deleted Duccessfully');

           }else{
            redirect('users.php', 'Somthing  whent wrong!');

           }

       }else{
        redirect('users.php', $user['massage']);

       }
       
   }else{
    redirect('users.php',$paraResult);
   }
?>