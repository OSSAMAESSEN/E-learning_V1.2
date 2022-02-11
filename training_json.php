<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.css"> 
    <title>Course</title>
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


                
               <div class="col-lg-10">

                        
                        
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
                          
                        <main style="height:126vh; background-color: #eef0f0 ;margin: 0px;margin-left: -14px; margin-right: -14px;padding: 20px;">  
                            <div class=" h-80 " style="width: 97%; "> 
                                <img src="svg/student_list.svg" alt="image">  
                                <div class=" d-inline-block float-right rounded-2 " style="background-color: #00C1FE;width: 150px;">
                                    <p class="text-light text-center" style="height: 16px;">ADD NEW STUDENT</p> 

                                </div>
                                  <hr> 
                                  <?php
                    
                                          $data=file_get_contents('data.json');
                                          $students=json_decode($data,true);    
                                 ?> 
                                <div class="table-responsive"> 
                                  <table class="table ">   
                                      
                                          <tr class="text-muted">  
                                            <td></td> 
                                          
                                            <td >Name </td> 
                                            <td >Email</td>
                                            <td >phone</td>
                                            <td >Enroll number</td>
                                            <td >Date of admission</td>
                                            <td></td>  
                                          </tr> 
                                      
                                      
                                            <?php 
                                            
                                              foreach ($students as $student) {   
                                                
                                            ?> 
                                              <tr > 
                                                <td><img src="svg/imgdach.svg" alt=""></td>  
                                                <td ><?php echo $student['name'];  ?> </td>  
                                                <td ><?php echo $student['payment_schedule'];  ?></td>
                                                <td ><?php echo $student['bill_number'] ; ?></td>
                                                <td ><?php echo $student['amount_paid'];  ?></td>
                                                <td ><?php echo $student['date'];  ?></td>
                                                <td>
                                                  <div class="p-2">
                                                      <img src="svg/modifier.svg" alt="">
                                                      <img src="svg/suprimer.svg" alt=""> 
                                                  </div>
                                                </td>
                                              </tr> 
                                              
                                              <?php
                                              } 
                                              ?>
                                          
                                    </table>   
                                </div>
                        
                          
    
                          
                        </main>    


               </div> 
                 

                     


               
        </div> 
                 
              
    </div>

  

   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>