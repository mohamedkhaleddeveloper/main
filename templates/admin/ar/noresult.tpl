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
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                         <td><strong>المنطقه</strong></td>
										 <td><strong>معامله جديده </strong></td>
                                         <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
									{foreach from=$castumer  item=castumer1}
										<tr>
											<td>{$castumer1.namec}</td>
											<td>{$castumer1.phone}</td>
											<td>{$castumer1.name}</td>
											<td><a href="addition.php?act=addorder&id={$castumer1.idc}"><button class="btn btn-primary" type="button">معامله جديده</button></a></td>
											<td><a href="addition.php?act=allorder&id={$castumer1.idc}"><button class="btn btn-default" type="button">المعاملات السابقه</button></a></td>
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
