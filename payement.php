<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.css"> 
    <title>Payement</title>  
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
                          
                        <main class="" style="height:126vh;; ;background-color: #E5E5E5;margin: 0px;margin-left: -14px; margin-right: -14px;padding: 20px;">  
                            <div class=" h-80 " style="width: 97%;"> 
                                <img src="svg/payement.svg" alt="image"> 
                                <img src="svg/dflish.svg" alt="image" class="float-right">  
                               
                                  <hr> 
                           </div>
                                   
                                   
                                   
                            <?php
                                $connect=mysqli_connect("localhost","root","","e-class-db");
                                $select="SELECT * FROM `table` ";  
                                mysqli_query($connect, $select); 
                            ?> 
            <div class="table-responsive"> 
              <table class="table ">   
                   
                      <tr class="text-muted">  
                         
            
                        <td >Name </td> 
                        <td >payment</td>
                        <td >Bill Number</td>
                        <td >Amount Paid</td>
                        <td >Balance Amount</td>
                        <td >Date</td>
                        <td></td>  
                      </tr> 
                   
                   
                      <?php
                           foreach(mysqli_query($connect, $select) as $stud){  
                      ?>   
                          <tr > 
                               
                            <td ><?php echo $stud['name'];  ?> </td>  
                            <td ><?php echo $stud['payment'];  ?></td>
                            <td ><?php echo $stud['bill_number'] ; ?></td>
                            <td ><?php echo $stud['amount_paid'];  ?></td>
                            <td ><?php echo $stud['balance_amount'];  ?></td>
                            <td ><?php echo $stud['date'];  ?></td>
                            <td>
                               <div class="p-2">
                                   <img src="svg/dflish.svg" alt="">
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
                 

                     


               <!-- /////////////////////////////////////////////////////////////////////// -->
        </div> 
                 
              
    </div>

  

   <!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 