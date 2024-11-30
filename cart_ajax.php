  <?php require_once("config.php") ;
ini_set('display_errors',"1");?>
<?php
if(!empty($_SESSION['usr_info'])){

					$rs=mysqli_query($con,"SELECT c.qty, c.ct_id, i.name, i.price FROM cart c INNER JOIN item i ON c.item_id=i.item_id WHERE c.id=".$_SESSION['usr_info']['id']." AND c.status='0'")or die(mysqli_error($con));
					if(mysqli_num_rows($rs)>0){
						?>
                        <table style="width:100%">
                        <thead>
                        	<tr> 
                            	<th style="border:1px solid #F00; padding:5px;">Sr. No.</th>
                                <th width="250" style="border:1px solid #F00; padding:5px;">Name of the Item</th>
                                <th style="border:1px solid #F00; padding:5px;">Price</th>
                              <th style="border:1px solid #F00; padding:5px;">Quantity</th>                        
                              <th style="border:1px solid #F00; padding:5px;">Total</th>
                            </tr>
                            
                        </thead>
                        <tbody>
						<?php
						$i=1;
						$cart_tot=0;
						while($rec=mysqli_fetch_assoc($rs)){
							?>
                            <tr>
                            	<td style="border:1px solid #F00; padding:5px;"><?php echo $i ?>
                                
                                </td>
                                <td style="border:1px solid #F00; padding:5px;"><?php echo $rec['name'] ?><br>
                                <a href="javascript:void(0)" onClick="remove_cart(<?php echo $rec['ct_id'] ?>)">Remove Cart</a>
                                </td>
                                <td style="border:1px solid #F00; padding:5px;"><?php echo $rec['price'] ?></td>
                                <td style="border:1px solid #F00; padding:5px;" align="center"><input type="text" value="<?php echo $rec['qty'] ?>" id="qty" size="2" onBlur="update_cart(this.value+','+<?php echo $rec['ct_id'] ?>)" style="width:10%"></td>
                                <td style="border:1px solid #F00; padding:5px;"><?php echo $rec['price']*$rec['qty'] ?></td>
                                
                            </tr>
                    <?php
						$cart_tot +=$rec['price']*$rec['qty'];
							$i++;
						}
						?>
                        <tr>
                        	<td colspan="4" style="border:1px solid #F00; padding:5px; text-align:right">Cart Sub-Total</td>
                            <td colspan="4" style="border:1px solid #F00; padding:5px;"><?php echo $cart_tot; ?></td>
                        </tr>
                        <tr>
                        	<td colspan="4" style="border:1px solid #F00; padding:5px; text-align:right">GST 18%</td>
                            <td colspan="4" style="border:1px solid #F00; padding:5px;"><?php echo $gst=$cart_tot*.18; ?></td>
                        </tr>
                        <tr>
                        	<td colspan="4" style="border:1px solid #F00; padding:5px; text-align:right">Grand Total</td>
                            <td colspan="4" style="border:1px solid #F00; padding:5px;"><?php echo $g_total=round($gst+$cart_tot); ?></td>
                        </tr>
                        <tr>
                        	<td colspan="4" >&nbsp;</td>
                         <td><a href="check_out.php"><button class="sendButton">CHECKOUT</button></a></td>
                        </tr>
                        </tbody>
                        </table>
                        
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
}else{
	echo '<h2 style="text-align:center">Please login yourself</h2>';
}
				?>
