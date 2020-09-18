{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file-text"></i> الفواتير
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$dayar1}
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-downt"></i> التاريخ : {$invdate}
                            </li>
                            <li class="active">
                                <i class="fa fa-files-o"></i> عدد الفواتير : {$invcount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                
              <div class="col-lg-12">
                  
                                    {if $creditpay eq Null}
                    
                                         <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                        <td><strong>اسم العميل</strong></td>
                                        <td><strong> رقم التليفون</strong></td>
                                        <td><strong>  اسم الفني</strong></td>
                                        <td><strong>نوع الفاتورة </strong></td>
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                      {else}
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                        <td><strong>اسم العميل</strong></td>
                                        <td><strong> رقم التليفون</strong></td>
                                        <td><strong>  اسم الفني</strong></td>
                                        <td><strong>نوع الفاتورة </strong></td>
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$creditpay  key=k item=creditpay1}
                                    
                                        <tr>
                                                <td>{$k+1}</td>
                                                <td>{$creditpay1.bill}</td>
                                                <td>{$creditpay1.nameca}</td>
                                                <td>{$creditpay1.phonec}</td>
                                                <td>
                                                    {if $creditpay1.employeeiddp eq 0}
                                                         {foreach from=$employee  item=employee1}
                                                             {if $creditpay1.employeeid eq $employee1.idm}{$employee1.namema}{/if}
                                                        {/foreach}
                                                    {else}
                                                         {foreach from=$employee  item=employee1}
                                                             {if $creditpay1.employeeiddp eq $employee1.idm}{$employee1.namema}{/if}
                                                         {/foreach}
                                                    {/if}  
                                                </td>
                                                <td>
                                                    <a href="addition.php?act=reportcridt&idcr={$creditpay1.idcr}&id={$creditpay1.castumerid}&print=1">مسدده  </a>
                                                        {foreach from=$payment  item=payment1}
                                                           {if $creditpay1.paymentcr eq  $payment1.idp}                                        
                                                             {$payment1.namepa}
                                                            {elseif $creditpay1.paymentcr eq 541}
                                                                شيك بنكي 
                                                           {/if}
                                                        {/foreach}
                                                    
                                                    
                                                </td>
                                                <td>{$creditpay1.price}</td>
                                                <td>{$creditpay1.discount}</td>
                                                <td>{$creditpay1.totalc}</td>

                                        </tr>
                                {/foreach}
                                
                                
			  {/if}
                  
                  {if $inv eq Null }
                      <h1 class="text-center">لايوجد فواتير بهذا التاريخ  </h1>
                      
                      {else}
                          
			
                                {foreach from=$inv  key=k item=inv1}
                                    {if $inv1.payment eq 5 AND  $inv1.totalc eq $inv1.credit}{else}
                                        <tr>
                                            
                                                <td>{$k + $countcri+1}</td>
                                                <td>{$inv1.bill}</td>
                                                <td>{$inv1.nameca}</td>
                                                <td>{$inv1.phonec}</td>
                                                <td>
                                                    {if $inv1.employeeiddp eq 0}
                                                         {foreach from=$employee  item=employee1}
                                                             {if $inv1.employeeid eq $employee1.idm}{$employee1.namema}{/if}
                                                        {/foreach}
                                                    {else}
                                                         {foreach from=$employee  item=employee1}
                                                             {if $inv1.employeeiddp eq $employee1.idm}{$employee1.namema}{/if}
                                                         {/foreach}
                                                    {/if}  
                                                </td>
                                                <td>
                                                   {foreach from=$payment  item=payment1}
                                                       {if $inv1.payment eq $payment1.idp}                                        
                                                       {$payment1.namepa}{/if}
                                                    {/foreach}
                                                </td>
                                                <td>{$inv1.price}</td>
                                                <td>{$inv1.discount}</td>
                                                <td>{$inv1.totalc}</td>

                                        </tr>
                                        {/if}
                                {/foreach}
                                </tbody>
                            </table>
			  
						 <hr/>
                                                  {/if}
                                                  
                                                 	  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td rowspan="1"><strong>الاجمالي</strong></td>
                                   
                                    
                                    {foreach from=$totalPayment  item=totalPayment1}
                                        <td><strong>
                                                {$totalPayment1.1}
                                        </strong></td>        
                                        {/foreach}
                                        
                                
                                
                                       
                                               
                                                
                                                  
                                        
                                                 <td rowspan="1"><strong>إجمالي المسددة </strong></td>

                                       {foreach from=$totalPaymentCredit  item=totalPaymentCredit1}
                                        <td><strong>
                                                {$totalPaymentCredit1.1}
                                        </strong></td>        
                                        {/foreach}
                         <tr>
                               
                                        <td ><strong></strong></td>
                                             {foreach from=$totalPayment  item=totalPayment1}
                                        <td><strong>
                                                {if $totalPayment1.3 eq null} 0 {else} {$totalPayment1.3} {/if}
                                        </strong></td>        
                                        {/foreach}
                                        
                                    
                                   
                                        
                                   
                               
                                
                                       
                                              <td  ><strong></strong></td> 
                                                
                                                  {foreach from=$totalPaymentCredit  item=totalPaymentCredit1}
                                        <td><strong>
                                                {if $totalPaymentCredit1.3 eq null} 0 {else} {$totalPaymentCredit1.3} {/if}
                                        </strong></td>        
                                        {/foreach}
                                        
                                               

                                        </tr>
                               
                                </tbody>
                            </table>
                                   
                                        
                                                               
                                                 	  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td colspan="15"><strong>الإجمال الصافي </strong></td>
                                   
                                    </tr><tr>
                                    {foreach from=$totalPayment  item=totalPayment1}
                                        <td><strong>
                                                {$totalPayment1.1}
                                        </strong></td>        
                                        {/foreach}
                                        
                                         <td><strong>
                                               شيك بنكي
                                        </strong></td>   
 
                                    <tr>
                               
                                      
                                             {foreach from=$totalPayment  item=totalPayment1}
                                      
                                                 {foreach from=$totalPaymentCredit  item=totalPaymentCredit1}
                                       
                                                {if  $totalPayment1.0 eq $totalPaymentCredit1.0}
                                                <td><strong>
                                                        
                                                {$totalPayment1.3 + $totalPaymentCredit1.3} 
                                                  </strong></td>   
                                              
                                       
                                                   
                                              {/if}
                                           
                                        {/foreach}
                                              {if $totalPayment1.0 eq '5'}
                                                  <td><strong>
                                                         {$totalPayment1.3} 
                                                  </strong></td>  
                                                   
                                                    {/if}
                                                
                                                    
                                        
                                          
                                        {/foreach}
                                          {foreach from=$totalPaymentCredit  item=totalPaymentCredit1}
                                       
                                                {if  $totalPaymentCredit1.0 eq '541'}
                                                <td><strong>
                                                        
                                                {if $totalPaymentCredit1.3 eq Null}0{else}{$totalPaymentCredit1.3}{/if} 
                                                  </strong></td>   
                                              
                                       
                                                   
                                              {/if}
                                               {/foreach}
                                      
                                        
                                      

                                        </tr>
                               
                                </tbody>
                            </table>
                                  
                                               
                                                <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td ><strong>الإجمالي النقدي </strong></td>
                                         <td><strong> المصروفات </strong></td>
                                          <td><strong> الصافي </strong></td>
                                    </tr><tr>
                               
                                      
                                             {foreach from=$totalPayment  item=totalPayment1}
                                      
                                                 {foreach from=$totalPaymentCredit  item=totalPaymentCredit1}
                                       
                                                {if  $totalPayment1.0 eq $totalPaymentCredit1.0 AND  $totalPaymentCredit1.0 eq '1'}
                                                <td><strong>
                                                        
                                                {$totalPayment1.3 + $totalPaymentCredit1.3} 
                                                  </strong></td>   
                                              
                                       
                                                   
                                              {/if}
                                           
                                        {/foreach}
                                                                                                  
                                        
                                          
                                        {/foreach}
                                        
                                           <td><strong>
                                                     
                                              {if $totaleExpense eq null}0{else}{$totaleExpense}{/if}
                                                  </strong></td>                                    
                                    

                                       
                               {foreach from=$totalPayment  item=totalPayment1}
                                      
                                                 {foreach from=$totalPaymentCredit  item=totalPaymentCredit1}
                                       
                                                {if  $totalPayment1.0 eq $totalPaymentCredit1.0 AND  $totalPaymentCredit1.0 eq '1'}
                                                <td><strong>
                                                        
                                                {($totalPayment1.3 + $totalPaymentCredit1.3) -  $totaleExpense} 
                                                  </strong></td>   
                                              
                                       
                                                   
                                              {/if}
                                           
                                        {/foreach}
                                                                                                  
                                        
                                          
                                        {/foreach}
                                         </tr>
                                         <tr><td>الصافي بالحروف العربيه</td><td colspan="2">&nbsp;{$totalFinal}&nbsp; ريال سعودي فقط لا غير &nbsp;</td></tr>
                                </tbody>
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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
  

	
</body>

</html>
