{include file="tech/ar/head.tpl" title=EtagCP}
{include file="tech/ar/header.tpl"}
{include file="tech/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">
                
             
		
                    
                    <!------------------------------------------------- Order Active Show ------------------------------------------------------>
             {if $action eq 'techactiveshow'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات المفعله
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$day} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$todayf}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المفعله :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <h1>اسم العامل : {$employeename}</h1>
				<!-- Order Now -->
				
                                     {if $orderNowCount eq '0'} 
                                            <h1 class="text-center">لا يوجد عمليات مفعله هذا الصباح</h1> 
                                     {else}
                                         
                                              {if $orderNowCountAc lt '1'}
                                                       <h1 class="text-center">  لم يتم اجراء اي من العمليات</h1> 
                                              {elseif $orderNowCountAc gt '2'}
                                                          <h1 class="text-center">تم إجراء عدد   {$orderNowCountAc}  عمليات هذا الصباح  </h1> 
                                              {else}
                                                    <h1 class="text-center">تم إجراء عدد   {$orderNowCountAc}  عمليه هذا الصباح     </h1> 
                                                 {/if}
                                                                                                 
                                                 
                                     {/if}
                                {if $ordershow eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="12"><strong>{if $ordertiming eq am}صباحا {else}مساءا{/if}</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                        <td><strong>عطل في</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershow  key=k item=ordershow1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                {if $ordershow1.process eq 1} 
                                                    <td colspan="5">
                                                        <form action="addition.php?act=techactiveshow" method="POST" >
                                                            <input type="hidden" name="idorder" value="{$ordershow1.ido}" />
                                                            <input type="submit" class="btn btn-primary" name="see" value="شاهد">
                                                        </form> 
                                                    </td>
                                                    <td>{$ordershow1.nameaa}</td>
                                                    <td colspan="5"></td>
                                                {else}
                                                    <td>{$ordershow1.ido}</td>
                                                    <td>{$ordershow1.timeo} {if $ordershow1.timing eq am} صباحا{else}مساءا {/if}</td>
                                                    <td>{$ordershow1.nameva}</td>
                                                    <td>{$ordershow1.nameca}</td>
                                                    <td>{$ordershow1.phonec}</td>
                                                    <td>{$ordershow1.nameaa}</td>
                                                {if $ordershow1.process eq 3}
                                                    <td colspan="2">
                                                       <span class=" btn-sm btn-success">جاريه  </span>
                                                    </td>
                                                    <td> 
                                                     <td><a href="addition.php?act=workshop&id={$ordershow1.ido}&castumer={$ordershow1.idc}"><button class="btn btn-sm btn-primary" type="button"> الورشه</button></a></td>
                                                   </td>
                                                {elseif $ordershow1.process eq 4}
                                                    <td colspan="3"> <span class=" btn-sm btn-warning">بالورشه </span></td>
                                                {else}
                                                    <td colspan="3">
                                                        <form action="addition.php?act=techactiveshow" method="POST">
                                                        <input type="hidden" name="idorder" value="{$ordershow1.ido}" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="إجراء">
                                                        </form> 
                                                    </td>  
                                                {/if}
                                                <td><a href="addition.php?act=cancleorder&id={$ordershow1.ido}&castumer={$ordershow1.idc}"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                      {/if}
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                </div>
                               
                                </div>
                                    
                                        <br/>    <br/>    <br/>    <br/>
			 
				
                                {/if}
                    <!------------------------------------------------- /Order Active Show------------------------------------------------------>
                    
                  
                        
                    <!------------------------------------------------- Order Runing Show ------------------------------------------------------>
             {if $action eq 'orderuningashow'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الجاريه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$day} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : {$todayf}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الجاريه :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <h1>اسم العامل : {$employeename}</h1>
				<!-- Order Now -->
				 <div class="table-responsive">

                                {if $ordershowRun eq null}
                                    <h1 class="text-center">لا يوجد عمليات جاريه </h1>
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="9"><strong>العمليات الجاريه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>عطل في</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowRun  key=k item=ordershowRun1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordershowRun1.ido}  </td>
                                                <td>
                                                    {if (($now - {$ordershowRun1.orderdate|strtotime}) / 86400) eq 0}  اليوم  {else}  {($now - $ordershowRun1.orderdate|strtotime) / 86400} يوم &nbsp; {/if}</td>
                                                <td>    {$ordershowRun1.nameva}  </td>
                                                <td>{$ordershowRun1.nameca}</td>
                                                <td>{$ordershowRun1.phonec}</td>
                                                <td>{$ordershowRun1.nameaa}</td>
                                                <td><a href="addition.php?act=cancleorder&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-danger" type="button"> إالغاء  </button></a></td>  
                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                {/if}
                    <!------------------------------------------------- /Order Runing show ------------------------------------------------------>
		
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
