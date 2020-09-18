{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{include file="admin/en/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Clients <small> Find client </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-users"></i> Clients
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
                                        {if $message eq null}{else}<div id="alert" class="alert alert-danger">{$message}</div>{/if}
			  		
				 <form class="form" action="addition.php?lang=en&act=getcastumer" method="POST">
					<div class="col-lg-3">
						
						<select class="form-control" name="searchway" id="searchway">
								<option value="">-- Choose -- </option>
                                                                <option value="1"{if $searchway eq 1}selected{else}{/if}>Castumer Name</option>
                                                                <option value="2"{if $searchway eq 2}selected{else}{/if}> Mobile Number</option>
                                                </select>
                                            </div>
                                                <div class="form-group input-group col-lg-9">
                                <input type="text" class="form-control"  maxlength="10"  name="phone" placeholder="Mobile Number "  />
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
                           </div>
					
				</form>			  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
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
