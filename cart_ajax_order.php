<script type="text/javascript" src="js/check_out_validation.js"></script>
<?php require_once("config.php") ;
//ini_set('display_errors',"1");?>
<?php
$area_rs=mysqli_query($con,"SELECT * FROM `area`");

					$rs=mysqli_query($con,"SELECT c.*, i.* FROM cart c INNER JOIN item i ON c.item_id=i.item_id WHERE c.id=".$_SESSION['usr_info']['id']." AND  c.status='0'")or die(mysqli_error($con));
					if(mysqli_num_rows($rs)>0){
						?>
                        
                        <form name="check_out" action="check_out_action.php" method="post" id="chek_out">
                        <table style="border:1px solid #F00; width:50%; float:right;">
                        <thead>
                        	<tr> 
                            	
                                <th style="border:1px solid #F00; padding:5px; width:70%">Items Details</th>                        
                              <th style="border:1px solid #F00; padding:5px; width:20%">Total</th>
                            </tr>
                            
                        </thead>
                        <tbody>
						<?php
						$i=0;
						$cart_tot=0;
						while($rec=mysqli_fetch_assoc($rs)){
							?>
                            <tr>
                                <td style="border:1px solid #F00; padding:5px;"><?php echo $rec['name'].' x '.$rec['qty'] ?><br>
                               </td>    
                                <td style="border:1px solid #F00; padding:5px;"><?php echo $rec['price']*$rec['qty'] ?></td>
                              <input type="hidden" name="ct_<?php echo $i ?>" value="<?php echo $rec['ct_id']?>">  
                            </tr>
                    <?php
						$cart_tot +=$rec['price']*$rec['qty'];
							$i++;
						}
						?>
                        <tr>
                        	<td style="border:1px solid #F00; padding:5px; text-align:right">Cart Sub-Total</td>
                            <td style="border:1px solid #F00; padding:5px;"><?php echo $cart_tot; ?></td>
                        </tr>
                        <tr>
                        	<td style="border:1px solid #F00; padding:5px; text-align:right">GST 18%</td>
                            <td style="border:1px solid #F00; padding:5px;"><?php echo $gst=$cart_tot*.18; ?></td>
                        </tr>
                        <tr>
                        	<td style="border:1px solid #F00; padding:5px; text-align:right">Grand Total</td>
                            <td style="border:1px solid #F00; padding:5px;"><?php echo $g_total=round($gst+$cart_tot); ?></td>
                        </tr>
                        <tr>
                        	<td colspan="2"><h4>Payment Methods</h4><br>
                            <label>
									 <input type="radio" checked="checked" style="width:10px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;background-color:#f4f4f4 border:none;; padding:0; float:left">CASH ON DELIVERY
									 
                            <input type="hidden" name="no_item" value="<?php echo $i ?>">
                            <br>
                            <input type="submit" name="ok" value="SUBMIT" class="sendButton">                         
                            </label>
            
                            </td>
                           
                        </tr>
                        </tbody>
                        </table>
                        
                        
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Delivery <span>Details</span></h2>
							
							<div id="contact_form">	
													 
									 <label>
									 Contact Number*:  &nbsp;&nbsp;&nbsp;&nbsp;<span id="invalid-contact_no"></span>
									 <input type="text" placeholder="Your mobile number" name="contact_no" id="contact_no">
									 </label>
										
									 <label>
									 Select Area*: &nbsp;&nbsp;&nbsp;&nbsp;<span id="invalid-area_id"></span>
                                     
									 <select name="area_id" id="area_id" class="txt" onChange="find_sub_area(this.value)">
                                     <option value="" selected="selected">Select Area</option>
                                     <?php
									 while($area_rec=mysqli_fetch_assoc($area_rs)){
										 ?>
                                         <option value="<?php echo $area_rec['area_id'] ?>"><?php echo strtoupper($area_rec['area_name']); ?></option>
										 <?php
									 }
									 ?>
                                     </select>
                                     <label>
									 Select Location*: &nbsp;&nbsp;&nbsp;&nbsp;<span id="invalid-sub_id"></span>
                                     
									 <select name="sub_id" class="txt" id="sub_id">
                                     <option value="">Please select area</option>
                                     </select>
									 </label>
								 	<input type="hidden" name="no_item" value="<?php echo $i; ?>">								<label>
									 Delivery Address*:  &nbsp;&nbsp;&nbsp;&nbsp;<span id="invalid-delivery_address"></span>
									 <textarea  placeholder="Your Delivery Address" name="delivery_address" id="delivery_address"></textarea>
									 </label>  
                                          
							</div>
						</div>
					</div>
				</div>
			</article>
                        </form>
						<?php
						
					}
					else{
						?>
						<article id="content2">
                        <section>
                            <div class="wrapper">
                                <div class="col-full"><div class="wrap-col">
                                    <h2 style="text-align:center">No Cart Item Found</h2>
                                </div></div>
                            </div>
                        </section>
                    </article>
                    <?php
					}
				?>
