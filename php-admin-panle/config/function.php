<?php
     session_start();
     require  'dbcon.php';

  /** validate strat */
     function validate($inputdata){

        global $conn;
        
        $validatedData =  mysqli_real_escape_string($conn,$inputdata);
        return trim ($validatedData);
     }
       /** validate end*/
      function webSitting($columnName){
       $setting = getById('setting',3);
       if($setting['status']== 200){
       return $setting['data'][$columnName];
           
       }

      }
      /** validate strat */
    
     function redirect($url,$status){
          $_SESSION['status']=$status;
     header('location:'.$url);
     exit();
     }
     /** validate strat */

     /** validate strat */
     function alertmassage(){
        if(isset($_SESSION['status'])){
          echo '<div class ="alert alert-success">
          
           <h6>'.$_SESSION['status'].'</h6> 
          </div>';
          unset($_SESSION['status']);
        }
     }
     /** validate strat */

     /** validate strat */

     function checkparamId($paramType){
         if(isset($_GET[$paramType])){
            if($_GET[$paramType] != null ){
                return $_GET[$paramType] ;    

            }else{
                return "NO ID Found!"; 
            }

         }else{
            return "NO ID IS GIVEN!";
         }
     }
     /** validate strat */
     /** validate strat */

     function getAll($tableName){

        global $conn;

        $table = validate($tableName);
        $query= "SELECT * FROM $table";
        $result = mysqli_query($conn,$query);
        return $result;
     }

     /** validate strat */
     /** validate strat */

     function getById($tablename,$id){

        global $conn ;

        $table = validate($tablename);
        $id = validate($id);

        $query = "SELECT * FROM $table WHERE id = '$id' LIMIT 1";
        $result = mysqli_query($conn,$query);

        if($result){
             if(mysqli_num_rows($result)== 1){
                   $row = mysqli_fetch_Array($result,MYSQLI_ASSOC);

                   $response = [
                    'status' => 200,
                    'massages' =>  'Fetched Data',
                    'data' =>  $row
                 ];
                 return  $response;


             }else{
                $response = [
                    'status' => 404,
                    'massages' => 'No record are found!'
                 ];
                 return  $response;
    

             }
        }else{
      
             $response = [
                'status' => 500,
                'massages' => 'Something went Wrong!'
             ];
             return  $response;

        }
     }
     function deleteQuery($tableName,$id){

        global $conn;
        $table = validate($tableName);
        $id = validate($id);
        $query = "DELETE FROM $table WHERE id ='$id' LIMIT 1";
        $result = mysqli_query($conn,$query);
        return $result;
     }
     function logoutSession(){

      unset($_SESSION['auth']);
      unset($_SESSION['loggedInUserRole']);
      unset($_SESSION['loggedInUser']);
     }

    
?>