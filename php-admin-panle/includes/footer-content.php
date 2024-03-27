<div class="py-5 bg-light border-top">

       <div class="container">
           <div class="row">
                <div class="col-md-4">
                    <h4 class ="footer-heading">
                       <?= webSitting('title') ?? 'Meta Desc'; ?>
                    </h4>
                    <hr>
                    <p>
                    <?= webSitting('small_description') ?? 'Meta Desc'; ?>
                    </p>
                </div>

                <div class="col-md-4">
                     <h4 class ="footer-heading">
                      Folow Us 
                    </h4> 
                    <hr>
                     <ul>
                        <?php 
                        
                        $socialMedia = getAll('social');
                        if($socialMedia){
                        if(mysqli_num_rows($socialMedia) >0){
                                foreach($socialMedia as $socialItem){
                                  ?>

                                   <li>

                                      <a href="<?= $socialItem['url']?>"><?= $socialItem['name']?></a>
                                   </li>

                                  <?php

                                }

                        }else{
                           echo "<li>No Social Media</li>";

                        }
                    
                    }
                    else{
                        echo "<li>Something Whent Wrong!</li>";

                     }
                        ?>
                
                     </ul>
                </div>
                
                <div class="col-md-4">
                     <h4 class ="footer-heading">
                      Contact Information 
                    </h4> 
                    <hr>
                    <p>
                        Address : <?= webSitting('address') ?? ' '; ?>
                        Email : <?= webSitting('email1') ?? ' '; ?>, <?= webSitting('email2') ?? ' '; ?>
                        Phone No : <?= webSitting('phone1') ?? ' '; ?>, <?= webSitting('phone2') ?? ' '; ?>
                    </p>
                </div>
           </div>
       </div>
</div>