       <?php
                    
                    $data=file_get_contents('data.json');
                      $array=json_decode($data,true); 
           ?>  
            <?php
                     foreach($array as $table){  
                        
             ?>             
                   <table>
                        <tr>
                            <td><?php echo  $table['name']?></td> 
                            <td><?php echo  $table['payment_schedule']?></td> 
                            <td><?php echo  $table['bill_number']?></td> 
                            <td><?php echo  $table['amount_paid']?></td>
                            <td><?php echo  $table['date']?></td>  
                        </tr>
                   </table> 
             <?php
                }       
            ?>