<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">  
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashbored</title>

</head>
<body>
                <div class="container-fluide">
                     
                           <?php

                          include ('Aside_mobile.php');


                           ?>
                     
                  <!-- ///////////////////////////////////////////// -->
                  <div class="row" style="height: 100vh;">   

                                <?php

                                include ('Aside.php');
                                ?> 
                                 
                        <div class="col-lg-10 col-12 ">   
                            
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
                             
                             <div class="row p-4">     
                                        <div class="col-lg-6 col-12 px-3  my-3  col-xl-3 " style="height:140px;"> 
                                            <div  style="height:140px;border-radius: 10px;background-color: #F0F9FF;"> 
                                                <img src="svg2/student.svg" alt="image" class="mt-3 ml-3"> 
                                                <p class="text-secondary ml-3">student</p>  
                                                <div class="bg-light " style="width: 30px;position: relative;left: 170px;"> 
                                                    <img src="svg2/nbr.svg" alt="image" class="mt-2 float-end">   
                                         </div>
                                            </div>   
                                        </div>   
                                        <div class="col-lg-6 col-12 px-3  my-3 col-xl-3" style="height:140px;">  
                                            <div  style="height:140px;border-radius: 10px;background-color: #FEF6FB;">
                                                <img src="svg2/tag.svg" alt="image" class="mt-3 ml-3"> 
                                                <p class="text-secondary ml-3">course</p>  
                                                <div class="bg-light " style="width: 30px;position: relative;left: 170px;"> 
                                                    <img src="svg2/13.svg" alt="image" class="mt-2 float-end">  
                                                </div>
                                            </div>  
                                        </div>  
                                        <div class="col-lg-6  col-12 px-3  my-3 col-xl-3" style="height:140px;"> 
                                            <div  style="height:140px;border-radius: 10px;background-color:#FEFBEC;">

                                                <div  style="height:140px;border-radius: 10px;background-color: #FEF6FB;">
                                                    <img src="svg2/dolar.svg" alt="image" class="mt-3 ml-3"> 
                                                    <p class="text-secondary ml-3">Payements</p>  
                                                    <div class="bg-light " style="width: 30px;position: relative;left: 170px;"> 
                                                        <img src="svg2/565.svg" alt="image" class="mt-2 float-end">   
                                             </div>
                                                </div>  
                                            </div>  
                                        </div> 
                                        <div class="col-lg-6 col-12 px-3  my-3 col-xl-3" style="height:140px;"> 
                                            <div class="bg-primary " style="height:140px;border-radius: 10px;">
                                               
                                                    <img src="svg2/pers.svg" alt="image" class="mt-3 ml-3"> 
                                                    <p class="text-secondary ml-3">Users</p>   
                                                      <div class="bg-light d-block" style="width: 30px;position: relative;left: 170px;"> 
                                                                 <img src="svg2/3.svg" alt="image" class="mt-2 float-end">  
                                                      </div> 
                                                      
                                                     
                                                
                                            </div>  
                                        </div> 
                                       
                             </div>
                            
                        </div>
                      </div>  
                </div>

               

                <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>