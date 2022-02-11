<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.css"> 
    <title>Add Student</title>  
</head>
<body>
    <div class="container-fluide" style="width: 100%;">
        
               
        
          <?php

          include ('Aside_mobile.php');


          ?>
        
        <div class="row" style="height: 100vh;">

          <?php

          include ('Aside.php');
          ?>    
  
              

               
           
               <div class="col-lg-10 col-12">
                        
                        <nav class="navbar ">   
                            <div class="container-fluid"> 
                            <img src="svg/flish.svg" alt="image"> 
                            <form class="d-flex"> 
                                <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">  
                                <img src="svg/recherche.svg" style="position: relative;right:30px">
                            <img src="svg/run.svg" alt="image"> 
                            </form>
                            </div>
                        </nav> 
                        <!-- ///////////////////////////////////////////////////////////////////////// -->
                          
                        <main  style="height:127vh;; ;background-color: #E5E5E5;margin: 0px;margin-left: -14px; margin-right: -14px;padding: 20px;">  
                            <div  style="width: 97%;"> 
                                <!-- <img src="svg/payement.svg" alt="image">  -->
                                <h3>Update Student</h3>
                                <img src="svg/dflish.svg" alt="image" class="float-right mt-3">  
                               
                                  <hr> 
                           </div>
                           
                           <?php  

                                $connect=mysqli_connect("localhost","root","","e-class-db");
                                $id=$_GET['id'];
                        
                            if(isset($_GET['id'])){
                                $id=$_GET['id'];
                                $mysql="SELECT * from `student-list` where id='$id'";
                                $q=mysqli_query($connect, $mysql);
                                $students=mysqli_fetch_assoc($q);
                                $name            = $students['name']; 
                                $email           = $students['Email'];
                                $phone           = $students['Phone'];
                                $enrollNumber    = $students['Enroll_number'];
                                $DateOfadmition  = $students['Date_of_Admition'];
   
                                }
                                       
                                       
                                // if(isset($_POST['submit'])){
                                //     $updat="UPDATE `student-list` SET `name`='$_POST[name]',`Email`='$_POST[Email]',`Phone`='$_POST[Phone]',`Enroll_number`='$_POST[Enroll_number]',`Date_of_Admition`='$_POST[Date_of_Admition]' WHERE id='$id'";
                                //     $q=mysqli_query($connect, $mysql);
                                // }
                                    // $q=mysqli_query($connect,$mysql);
                                    // $students=mysqli_fetch_assoc($q);
                                    // $name            = $students['name']; 
                                    // $email           = $students['Email'];
                                    // $phone           = $students['Phone'];
                                    // $enrollNumber    = $students['Enroll_number'];
                                    // $DateOfadmition  = $students['Date_of_Admition'];


                                    // $id=$_GET['id'];
                                    // if(isset($_POST['submit'])){
                                    // $updat="UPDATE `student-list` SET `name`='$_POST[name]',`Email`='$_POST[Email]',`Phone`='$_POST[Phone]',`Enroll_number`='$_POST[Enroll_number]',`Date_of_Admition`='$_POST[Date_of_Admition]' WHERE id='$id'";
                                    // mysqli_query( $connect,$updat); 


                                    


                                       
                                
                                
                              ?>





                                   


                           
                
                           <form action="add_stdent.php?<?php if(isset($_GET['id'])){echo "id=update";} ?>" method="POST">
                           <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="..." value="<?php if(isset($_GET['id'])){echo $name;} ?>">
                    
                                </div>
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" name="Email" class="form-control"placeholder="..." value="<?php if(isset($_GET['id'])){echo $email;} ?>">
                                </div>
                                <div class="form-group">
                                    <label >Phone</label>
                                    <input type="text" name="Phone" class="form-control"placeholder="..." value="<?php if(isset($_GET['id'])){echo $phone;} ?>">
                                </div>
                                <div class="form-group">
                                    <label >Enroll number</label>
                                    <input type="text" name="Enroll_number" class="form-control" placeholder="..." value="<?php if(isset($_GET['id'])){echo $enrollNumber;} ?>">
                                </div>
                
                                <div class="form-group"> <!-- Date input -->
                                <label class="control-label" >Date of Admition</label>
                                <input class="form-control"  name="Date_of_Admition" placeholder="MM/DD/YYY" type="text" value="<?php if(isset($_GET['id'])){echo $DateOfadmition;} ?>" />
                            </div>
                    
                            <!-- <input type="submit" name="submit" class="btn btn-primary text-light text-center"></input> -->
                                 <button type="submit" name="submit" class="btn btn-primary text-light text-center">Update</button>
                                 <!-- <a href="Students_liste.php" class="btn btn-info text-light text-center" >Back</a> -->
                                 </form>      
              
                        </main>    


               </div> 
                 

                     


               <!-- /////////////////////////////////////////////////////////////////////// -->
        </div> 
                 
              
    </div>

  

   <!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 