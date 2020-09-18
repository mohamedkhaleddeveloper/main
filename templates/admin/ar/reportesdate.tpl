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
                                <i class="fa fa-file-text"></i> المصاريف
                            </li>
                            {if $employex  eq 0 }{else}
                             <li class="active">
                                <i class="fa fa-user"></i> {$emnamema}{/if}
                            </li>
                            {if $exto eq $exfrom}
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$dayar1}
                                 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-downt"></i> التاريخ : {$exto}
                            </li>
                            {else}
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ من : {$exto} /  إلى: {$exfrom}
                            </li>
                            {/if}
                            <li class="active">
                                <i class="fa fa-files-o"></i> عدد الفواتير : {$excount}
                            </li>
                             
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                
              <div class="col-lg-12">
                  {if $ex eq Null}
                      <h1 class="text-center">لايوجد فواتير بهذا التاريخ  </h1>
                      
                      {else}
                         
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                        {if $employex  eq 0 }<td><strong>الاسم </strong></td>{else}{/if}
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                          <td><strong>الملاحظات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$ex  key=k item=ex1}
                                        <tr>
                                                <td>{$k+1}</td>
                                                <td>{if $ex1.billex eq null}لا يوجد رقم{else}{$ex1.billex}{/if}</td>
                                                {if $employex  eq 0 }
                                                <td>
                                                  
                                                         {foreach from=$employee  item=employee1}
                                                             {if $employee1.idm eq $ex1.idem}{$employee1.namema}{/if}
                                                        {/foreach} 
                                                   
                                                </td>
                                                {else}
                                                {/if}
                                                <td>{$ex1.priceex}</td>
                                                <td>{$ex1.discountex}</td>
                                                <td>{$ex1.totalex}</td>
                                                <td>{$ex1.notsex}</td>

                                        </tr>
                                         {assign var="sum_all_foreach" value=$sum_all_foreach+$ex1.totalex}

                                        </tr>
                                {/foreach}
                                <tr><td colspan="5">الأجـــــــــمـــــالي</td><td colspan="2">{$sum_all_foreach}</td></tr>
                                
                                </tbody>
                            </table>
			  
                                                  
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
