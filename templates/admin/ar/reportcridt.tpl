{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

			
			
                <!-- Page Heading -->
                <div class="row">
				
                                    
                  <div class="col-lg-12">
                      <table class="table">
                           {foreach from=$credit   key=k item=credit1}
                           {if $print eq 1}<br/><br/><br/><br/><br/><br/><br/><br/><br/>{else}
                               <tr>
                            
                              <td><img src="img/logo.png"/></td>
                             <td colspan="2"> <h1 class="text-right">مؤسسة السبطين التجارية</h1></td>
                          </tr>
                          {/if}
                           <tr>
                             <td colspan="3">  <h1 class="text-center">سند قبض </h1></td>
                          </tr>
                         
                           <tr>
                              <td colspan="3"><button class="btn btn-lg btn-default" type="button">  #{$credit1.pricecr}# ريال سعودي </button> </td>
                             
                          </tr>
                          <tr>
                              <td colspan="3">اسم العميل  /{$namecastumer}</td>
                              
                          </tr>
                            <tr>
                              <td colspan="3">مبلغا وقدره  / {if $totalcre eq '0'}صفر{else}{$totalcre}{/if}  ريال سعودي فقط لا غير</td>
                             
                          </tr>
                           <tr>
                              <td colspan="3">طريقة الدفع  / 
                                   {foreach from=$payment  item=payment1}
                                       {if $payment1.idp eq $credit1.paymentcr} {$payment1.namepa} 
                                       {elseif $credit1.paymentcr eq '541'}
                              <td>شيك رقم / {$credit1.checkno}  -  
                               بنك  / {$credit1.bankname}  -  
                                تاريخ  / {$credit1.bankdate} </td>
                              
                                       
                                       {/if}
                                          
                                   {/foreach}
                                  </td>
                             
                          </tr>
                          
                           <tr>
                              
                               
                          </tr>
                          
                          
                          
                           
                       
                          <tr>
                             <td colspan="3"> وذلك عن دفع الفواتير التاليه</td> 
                             
                          </tr>
                            <tr>
                             <td colspan="3"> <table class="table">
                              
                                     <tr>
                                         <td>رقم الفاتورة</td>
                                         <td>رقم العملية</td>
                                         <td>المبلغ </td>
                                     </tr>
                                     {foreach from=$invoice   key=k item=invoice1}
                                     <tr>
                                         <td>
                                              {foreach from=$inv   key=k item=inv1}  
                                               {if $inv1.idi eq $invoice1.idicre}
                                                  {$inv1.bill}
                                                 
                                                </td>
                                         
                                         <td>
                                           
                                              
                                                   {$inv1.orderid}
                                                </td>
                                               
                                                {/if}
                                                
                                           {/foreach}
                                         <td>{$invoice1.amount} </td>
                                     </tr>
                                     {/foreach}
                                 </table></td> 
                             
                          </tr>
                          
                          <tr>
                              <td colspan="2">التاريخ / {$credit1.crdate}  </td>
                                    
                              <td>  المستلم/ {$username}  </td>
                              
                          </tr>
                          {/foreach}
                      </table>
                                       	 			
			  </div>
				
               
                   
             
				


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	
</body>

</html>
