{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{include file="admin/en/nav.tpl"}

         <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i>  Report Bills:   {if $way eq 0}All{else}{$payment1}{/if}
                            </li>
                        </ol>
						{foreach from=$castumer  item=castumer1}
						 <div class="col-lg-6">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Name</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.namece}
                            </div>
                        </div>  </div>
						<div class="col-lg-6">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Mobile Or Phon Number</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.phonec}
                            </div>
                        </div>  </div>
							{/foreach}
						
						<h1 class="page-header">		
								
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                  {if $inv eq Null}
                      <h1 class="text-center">No Bills </h1>
                      
                      {else}
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Bill No</strong></td>
                                        <td><strong>  Tech Name </strong></td>
                                        <td><strong>Date</strong></td>
                                        {if $way eq 0}<td><strong> Kind Bill</strong></td>{else}{/if}
                                         <td><strong>Amount</strong></td>
					 <td><strong>Discount </strong></td>
                                         <td><strong>Total</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$inv  key=k item=inv1 name=foo}
                                        <tr>
                                                <td>{$k+1}</td>
                                                <td>{$inv1.bill}</td>
                                                <td>
                                                    {if $inv1.employeeiddp eq 0}
                                                         {foreach from=$employee  item=employee1}
                                                             {if $inv1.employeeid eq $employee1.idm}{$employee1.nameme}{/if}
                                                        {/foreach}
                                                    {else}
                                                         {foreach from=$employee  item=employee1}
                                                             {if $inv1.employeeiddp eq $employee1.idm}{$employee1.nameme}{/if}
                                                         {/foreach}
                                                    {/if}  
                                                </td>
                                                <td>{$inv1.idate}</td>
                                                {if $way eq 0}
                                                <td>
                                                     {foreach from=$payment  item=payment1}
                                                             {if $inv1.payment eq $payment1.idp}{$payment1.namepe}{/if}
                                                        {/foreach}
                                                   </td>{else}{/if}
                                                <td>{$inv1.price}</td>
                                                <td>{$inv1.discount}</td>
                                                <td>{$inv1.totalc}</td>
                                                
                                                {assign var="sum_all_foreach" value=$sum_all_foreach+$inv1.totalc}

                                        </tr>
                                {/foreach}
                                <tr><td colspan=" {if $way eq 0}7{else}6{/if}">Total</td><td>{$sum_all_foreach}</td></tr>
                                
                                </tbody>
                            </table>
			  
						 <hr/>
                                                  {/if}
                                                  
                                                 	
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
