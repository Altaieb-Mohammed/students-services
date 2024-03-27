<?php
 require '../config/function.php';

 if(isset($_POST['saveUser']))
 {
   $name = validate($_POST["name"]);
   $phone = validate($_POST["phone"]);
   $email= validate($_POST["email"]);
   $password = validate($_POST["password"]);
   $role = validate($_POST["role"]);
   $is_ban = validate($_POST["is_ban"] ) == true ? 1:0;
   
   if($name != ''|| $phone != '' || $email != '' || $password != '')
   {
      $query="INSERT INTO users (name,phone,email,password,is_ban,role) 
      VALUES ('$name','$phone','$email','$password','$is_ban','$role')";
      $result = mysqli_query($conn,$query);
      if($result)
      {
        redirect('users.php','User/admin succesfuly Added');
      }else
      {
        redirect('users-create.php','Soryy!! Somethings went wrong!');
      }
   }else
   {
     redirect('users-create.php','please fill all input fields ');
   }

 }
 if(isset($_POST['uptateUser'])){
       
   $name = validate($_POST["name"]);
   $phone = validate($_POST["phone"]);
   $email= validate($_POST["email"]);
   $password = validate($_POST["password"]);
   $role = validate($_POST["role"]);
   $is_ban = validate($_POST["is_ban"] ) == true ? 1:0;
   
   $userId = validate($_POST['userId']);
   if($name != ''|| $phone != '' || $email != '' || $password != '')
   {
      $query="UPDATE users SET
       name='$name',
       phone='$phone',
       email='$email',
       password='$password',
       is_ban='$is_ban',
       role='$role' WHERE id ='$userId' "; 
      
      $result = mysqli_query($conn,$query);
      if($result)
      {
        redirect('users.php','User/admin succesfuly added');
      }else
      {
        redirect('users-create.php','Soryy!! Somethings went wrong!');
      }
   }else
   {
     redirect('users-create.php','please fill all input fields ');
   }


 }else{


 }

 if(isset($_POST['saveSetting'])){

  $title = validate($_POST['title']);
  $title = validate($_POST['slug']);

  $small_description = validate($_POST['small_description']);
  $meta_deccription = validate($_POST['meta_description']);
  $meta_keyword = validate($_POST['meta_keyword']);


  $email1 = validate($_POST['email1']);
  $email2 = validate($_POST['email2']);
  $phone1 = validate($_POST['phone1']);
  $phone2 = validate($_POST['phone2']);
  $address = validate($_POST['address']);


  $settingId = validate($_POST['settingId']);
  if($settingId == 'insert'){


    $query = "INSERT INTO setting 
    (title ,slug,small_description,meta_description,meta_keyword,
    email1,email2,phone1,phone2,address)
    VALUES ('$title','$slug','$small_description','$meta_deccription',
    '$meta_keyword','$email1','$email2','$phone1','$phone2','$address')";
    $result =mysqli_query($conn,$query);
  }
      if(is_numeric($settingId)){
        $query = "UPDATE setting SET title = '$title',slug = '$slug',small_description = '$small_description'
        ,meta_description = '$meta_deccription',meta_keyword = '$meta_keyword',email1 = '$email1',
        email2 ='$email2',phone1 = '$phone1', phone2 = '$phone2',address = '$address' WHERE id = '$settingId' ";
       
       $result =mysqli_query($conn,$query);


      }
  if($result){

      redirect('settings.php','Settings Saved !');
  }else
  {
    redirect('settings.php','Someting whent Wrong !');
  }
  
 }


 if(isset($_POST['saveSocialMedia']))
 {
   $name = validate($_POST['name']);
   $url = validate($_POST['url']);
   $status = validate($_POST["status"] ) == true ? 1:0;
       
   if($name != '' || $url != '')
   {
      $query = "INSERT INTO social(name,url,status) VALUES ('$name','$url','$status')";
      $result = mysqli_query($conn,$query);
      if($result)
      {
        redirect('social-media.php','Social Media succesfuly Added');
      }else
      {
        redirect('social-media-create.php','Soryy!! Somethings went wrong!');
      }
   }else
   {
     redirect('social-media-create.php','please fill all input fields ');
   }

 }

 if(isset($_POST['updateSocialMedia'])){

  $name = validate($_POST['name']);
   $url = validate($_POST['url']);
   $status = validate($_POST["status"] ) == true ? 1:0;
   $socialMediaId = validate($_POST['socialMediaId']);  
   if($name != '' || $url != '')
   {
      $query = "UPDATE social SET name='$name',url='$url',status='$status' WHERE id ='$socialMediaId' LIMIT 1";
      $result = mysqli_query($conn,$query);
      if($result)
      {
        redirect('social-media.php','Social Media succesfuly Added');
      }else
      {
        redirect('social-media-edit.php?id='.$socialMediaId,'Soryy!! Somethings went wrong!');
      }
   }else
   {
     redirect('social-media-edit.php?id='.$socialMediaId,'please fill all input fields ');
   }


 }

 if(isset($_POST['saveService'])){
    $name = validate($_POST['name']);

    $slug = str_replace('','-',strtolower($name));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);

    if($_FILES['image']['size'] >0){
    $image = $_FILES['image']['name'];
    $imgFileType = strtolower($image,PATHINFO_EXTENSION);
    if($imageFileTypes != 'jpg' && $imageFileTypes  != 'jbeg' && $imageFileTypes !='png'){


      redirect('services.php','Sorry only Jbg.Jbeg,png images only');
    }

    $path = "../assets/uploads/services/";
    $imgExt = pathinfo($image,PATHINFO_EXTENSION);

    $filename = time().'.'.$imgExt;

    $finalImage = '/assets/uploads/services/'.$filename;
    }else{

      $finalImage = NULL;
    }
    $image= validate($_POST['image']);

    $meta_title = validate($_POST['meta_title']);
    $meta_description = validate($_POST['meta_description']);
    $meta_keyword = validate($_POST['meta_keyword']);

    $status = validate($_POST['status']) == true ? '1':'0';

    $query = "INSERT INTO services 
    (name,slug,small_description,long_description,image,meta_title,meta_description,meta_keyword,status) VALUES 
    ('$name','$slug','$small_description','$long_description','$finalImage','$meta_title','$meta_description','$meta_keyword','$status')";

    $result = mysqli_query($conn,$query);
    if($result){
      if($_FILES['image']['size'] >0){
      move_uploaded_file($_FILES['image']['tmp_name'],$path.$filename);
      }
      redirect('services.php','services successfuly Added ');
    }else
    {

      redirect('services.php','Something Whent Wrong!');
    }

 }

?>