{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}

         <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                           
                            <ol class="breadcrumb pull-left no-print">
                                
                                  {foreach from=$way55 item=way155}
                                        
                                            <li class="active">
                                                <a href="addition.php?act=reportsca&payment={$way155.idp}&id={$castumerid}"_><button class="btn btn-primary" type="button">{$way155.namepa}</button></a>
                                            </li>
                                {/foreach}
                                 <li class="active">
                                                <a href="addition.php?act=reportsca&payment=8ff&id={$castumerid}"_><button class="btn btn-primary" type="button">مسددة</button></a>
                                            </li>
                                        <li class="active">
                                                <a href="addition.php?act=reportsca&payment=0&id={$castumerid}"_><button class="btn btn-primary" type="button">جميع الفواتير</button></a>
                                            </li>
                        </ol>
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i> تقرير الفواتير   &nbsp;:&nbsp;{if $way eq 0}  جميع الفواتير{else}{$payment1}{/if}
                            </li>
                        </ol>
                            
                         
                              {foreach from=$castumer  item=castumer1}
                           
                                      
						 <div class="col-lg-6">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.nameca}
                            </div>
                        </div>  </div>
						<div class="col-lg-6">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
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
                      <h1 class="text-center">لا يوجد فواتير  </h1>
                      
                      {else}
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                       <td><strong>التاريخ</strong></td>
                                        <td><strong>  اسم الفني</strong></td>
                                        {if $way eq 0}<td><strong>نوع الفاتورة</strong></td>{else}{/if}
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                         {if $way eq 8}  <td><strong>سندات رقم </strong></td>{/if}
                                                          
                                                       
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$inv  key=k item=inv1 name=foo}
                                        <tr>
                                                <td>{$k+1}</td>
                                                <td>{$inv1.bill}</td>
                                                
                                                <td>{$inv1.idate}</td>
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
                                                 {if $way eq 0}
                                                <td>
                                                        
                                                     {foreach from=$payment  item=payment1}
                                                             {if $inv1.payment eq $payment1.idp}
                                                             {if $inv1.payment eq 5 And $inv1.totalc eq $inv1.credit}مسددة  {else}{$payment1.namepa}{/if}
                                                             {/if}
                                                             
                                                        {/foreach}
                                                   </td>{else}{/if}
                                                <td>{$inv1.price}</td>
                                                <td>{$inv1.discount}</td>
                                                <td>{$inv1.totalc} </td>
                                                {if $way eq 8}  <td><strong>
                                                  {foreach from=$invcredite  item=invcredite1 name="invcredite1s"}
                                                            {if $inv1.idi eq $invcredite1.idicre}
                                                                 {if $smarty.foreach.invcredite1s.last}
                                                                    <a href="addition.php?act=reportcridt&idcr={$invcredite1.idcrdite}&id={$castumerid}&print=2" target="_blank"><button class="btn btn-default" type="button"> {$invcredite1.idcrdite}</button></a>
                                                                 {elseif $smarty.foreach.invcredite1s.first} 
                                                                 <a href="addition.php?act=reportcridt&idcr={$invcredite1.idcrdite}&id={$castumerid}&print=2" target="_blank"><button class="btn btn-default" type="button"> {$invcredite1.idcrdite}</button></a>{else} 
                                                                     <a href="addition.php?act=reportcridt&idcr={$invcredite1.idcrdite}&id={$castumerid}&print=2" target="_blank"><button class="btn btn-default" type="button"> {$invcredite1.idcrdite}</button></a> -  
                                                                 {/if} 
                                                             {/if}
                                                             
                                                        {/foreach}
                                                   </strong></td>
                                                {/if}
                                                {assign var="sum_all_foreach" value=$sum_all_foreach+$inv1.totalc}

                                        </tr>
                                {/foreach}
                                <tr><td colspan="{if $way eq 0}7{else}6{/if}">الأجـــــــــمـــــالي</td><td>{$sum_all_foreach}</td>{if $way eq 8}<td></td>{/if}</tr>
                                
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
