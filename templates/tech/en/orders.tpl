{include file="tech/en/head.tpl" title=EtagCP}
{include file="tech/en/header.tpl"}
{include file="tech/en/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">
                
             
		
                    
                    <!------------------------------------------------- Order Active Show ------------------------------------------------------>
             {if $action eq 'techactiveshow'}
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>Active operations 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayen} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$todayf}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Active operations  :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <h1><i class="fa fa-fw fa-user-md fa-2x"></i> Technical Name: {$employeenamee|capitalize}</h1>
				<!-- Order Now -->
				
                                     {if $orderNowCount eq '0'} 
                                            <h1 class="text-center"> No operations have been activated </h1> 
                                     {else}
                                         
                                              {if $orderNowCountAc lt '1'}
                                                       <h1 class="text-center">   It is not to have any operations  </h1> 
                                              {elseif $orderNowCountAc gt '2'}
                                                          <h1 class="text-center"> It was conducted  {$orderNowCountAc} operations</h1> 
                                              {else}
                                                    <h1 class="text-center">  It was conducted {$orderNowCountAc}  process  </h1> 
                                                 {/if}
                                                                                                 
                                                 
                                     {/if}
                                {if $ordershow eq null}
                                        
                                {else}
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="12"><strong>{if $ordertiming eq am}Morinig {else}Afternon{/if}</strong></td></tr>
                                    <tr class="active text-center">
                                         <td><strong>No.</strong></td>
                                        <td><strong>operation No </strong></td>
                                         <td><strong>Time</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5"><strong> process</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershow  key=k item=ordershow1}
                                        <tr>    
                                                <td>{$k+1}</td>
                                                {if $ordershow1.process eq 1} 
                                                    <td colspan="5">
                                                        <form action="addition.php?lang=en&act=techactiveshow" method="POST" >
                                                            <input type="hidden" name="idorder" value="{$ordershow1.ido}" />
                                                            <input type="submit" class="btn btn-primary" name="see" value="show">
                                                        </form> 
                                                    </td>
                                                    <td>{$ordershow1.nameae}</td>
                                                    <td colspan="5"></td>
                                                {else}
                                                    <td>{$ordershow1.ido}</td>
                                                    <td>{$ordershow1.timeo} {$ordershow1.timing}</td>
                                                    <td>{$ordershow1.nameve}</td>
                                                    <td>{$ordershow1.namece}</td>
                                                    <td>{$ordershow1.phonec}</td>
                                                    <td>{$ordershow1.nameae}</td>
                                                {if $ordershow1.process eq 3}
                                                    <td colspan="2">
                                                       <span class=" btn-sm btn-success"> Preparing  </span>
                                                    </td>
                                                    <td> 
                                                        <td><a href="addition.php?lang=en&act=workshop&id={$ordershow1.ido}&castumer={$ordershow1.idc}"><button class="btn btn-sm btn-primary" type="button"> Work Shop</button></a></td>
                                                   </td>
                                                {elseif $ordershow1.process eq 4}
                                                    <td colspan="3"> <span class=" btn-sm btn-warning">Workhop </span></td>
                                                {else}
                                                    <td colspan="3">
                                                        <form action="addition.php?lang=en&act=techactiveshow" method="POST">
                                                        <input type="hidden" name="idorder" value="{$ordershow1.ido}" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="prepare">
                                                        </form> 
                                                    </td>  
                                                {/if}
                                                
                                                <td><a href="addition.php?lang=en&act=cancleorder&id={$ordershow1.ido}&castumer={$ordershow1.idc}"><button class="btn btn-sm btn-danger" type="button">Cancle </button></a></td>
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
                                <i class="fa fa-fw fa-adjust"></i> Running processes 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : {$dayen} 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : {$todayf}

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Running processes  :  {$orderNowCount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <h1><i class="fa fa-fw fa-user-md fa-2x"></i> Technical Name: {$employeenamee|capitalize}</h1>
				<!-- Order Now -->
				 <div class="table-responsive">

                                {if $ordershowRun eq null}
                                    <h1 class="text-center"> No Found  Running processes </h1>
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="9"><strong>العمليات الجاريه</strong></td></tr>
                                    <tr class="active text-center">
                                         <td><strong>No.</strong></td>
                                        <td><strong>operation No </strong></td>
                                         <td><strong>Duration</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="2"><strong> Process</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowRun  key=k item=ordershowRun1}
                                        <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordershowRun1.ido}  </td>
                                                <td>{if (($now - {$ordershowRun1.orderdate|strtotime}) / 86400) eq 0} Today {else} {($now - $ordershowRun1.orderdate|strtotime) / 86400} Day &nbsp; {/if}</td>
                                                <td>{$ordershowRun1.nameve}</td>
                                                <td>{$ordershowRun1.namece}</td>
                                                <td>{$ordershowRun1.phonec}</td>
                                                <td>{$ordershowRun1.nameae}</td>
                                                <td><a href="addition.php?lang=en&act=cancleorder&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-danger" type="button"> Cancle  </button></a></td>  
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
