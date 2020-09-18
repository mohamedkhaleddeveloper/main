{include file="admin/head.tpl" title=EtagCP}
{include file="admin/header.tpl"}
{include file="admin/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

			
			
                <!-- Page Heading -->
                <div class="row">
				
				  <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i> معامله جديده
                            </li>
                        </ol>
			{foreach from=$castumer  item=castumer1}
                            <div class="col-lg-4">
                           <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.nameca}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.phonec}
                            </div>
                        </div>  </div>
							{/foreach}
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumer}
                            </div>
                        </div></div>
						<h1 class="page-header">		
								
                        </h1>
                    </div>
				
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> العملاء
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                         <td><strong>م</strong></td>
					 <td><strong>رقم المعامله</strong></td>
                                         <td><strong>المنطقه</strong></td>
                                         <td><strong>نوع الجهاز </strong></td>
                                         <td><strong>الوقت</strong></td>				
					 <td><strong>تاريخ ادخال المعامله </strong></td>
                                         <td><strong>تاريخ تفعيل المعامله </strong></td>
                                         
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach from=$order  item=order1}
                                        <tr>
                                                <td>1</td>
                                                <td>{$order1.id}</td>
                                                <td>{$order1.name}</td>
                                                <td>{$order1.device}</td>
                                                <td>{IF $order1.timing eq am}صباحا{else}مساءا{/if}</td>
                                                <td>{$order1.enterdata}</td>
                                                <td>{$order1.dateo}</td>
                                         </tr>
                                    {/foreach}
                                </tbody>
                            </table>
			  
						  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
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
