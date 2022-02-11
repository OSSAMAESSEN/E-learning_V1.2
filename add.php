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
                          
                        <main  style="height:126vh;; ;background-color: #E5E5E5;margin: 0px;margin-left: -14px; margin-right: -14px;padding: 20px;">  
                            <div class=" h-80 " style="width: 97%;"> 
                                <img src="svg/payement.svg" alt="image"> 
                                <img src="svg/dflish.svg" alt="image" class="float-right">  
                               
                                  <hr> 
                           </div>
                                   


                           <?php
                                        $connect=mysqli_connect("localhost","root","","e-class-db"); 
                                        if(isset($_POST['submit'])){
                                        $name          = $_POST['name']; 
                                        $payment       = $_POST['payment'];
                                        $billNumber    = $_POST['bill_number'];
                                        $amountPaid    = $_POST['amount_paid'];
                                        $balanceAmount = $_POST['balance_amount'];
                                        $Date          = $_POST['date'];
                                        $mysql         = "INSERT INTO `table`(`name`, `payment`, `bill_number`, `amount_paid`, `balance_amount`,`date`) VALUES ('$name','$payment',' $billNumber','$amountPaid','$balanceAmount','$Date')"; 
                                        mysqli_query($connect,$mysql);
                                        // header('location:select.php');
                                        // if(  mysqli_query($connect,$mysql)) {
                                        //     echo "bonjour $name";
                                        // }
                                    } 
                  
                  
                              ?>



                           <form action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="name">
                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Payment</label>
                                    <input type="text" name="payment" class="form-control"placeholder="payment">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNumber1">Bill_number</label>
                                    <input type="text" name="bill_number" class="form-control"placeholder="bill number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEnrollNumber1">Amount paid</label>
                                    <input type="text" name="amount_paid" class="form-control" placeholder="amount paid">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEnrollNumber1">Balance Amount</label>
                                    <input type="text" name="balance_amount" class="form-control" placeholder="balance amount">
                                </div>


                                <div class="form-group"> <!-- Date input -->
                                <label class="control-label" for="exampleInputDate1">Date of Admission</label>
                                <input class="form-control"  name="date" placeholder="MM/DD/YYY" type="text"/>
                            </div>
                    
                               
                                <input type="submit" name="submit" class="btn btn-primary text-light text-center"></input>
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