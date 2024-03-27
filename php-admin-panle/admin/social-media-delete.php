<?php

   require '../config/function.php';

   $paraResult = checkparamId('id');

   if(is_numeric($paraResult)){
      
    $socialId = validate($paraResult);

    $socialMedia = getById('social',$socialId);
       if($user['status'] == 200){9603680197

           $socialMediaDeleteRes = deleteQuery('social',$socialId);
           if($socialMediaDeleteRes){
             
            redirect('social-media.php', 'User Deleted Duccessfully');

           }else{
            redirect('social-media.php', 'Somthing  whent wrong!');

           }

       }else{
        redirect('social-media.php', $socialMedia['message']);

       }
       
   }else{
    redirect('social-media.php',$paraResult);
   }
?>