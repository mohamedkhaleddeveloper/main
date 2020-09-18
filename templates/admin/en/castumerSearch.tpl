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
                                <i class="fa fa-user"></i> Clients
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                
              <div class="col-lg-12">
                  {if $castumer eq Null}
                      
                      <div class="alert alert-warning"><h1 class="text-center"">This client is please fill in the registration of the client </h1></div>
                      
                      <div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                     <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
					<div class="form-group">
                                            <label >Castumer Name (arabice)  </label>
						<input class="form-control" name="nameca" id="nameca" value="{if $name eq null}{else}{$name}{/if}">
					</div>
                                        <div class="form-group">
						<label > Castumer Name  (English)</label>
						<input class="form-control" name="namece" id="namece" value="{if $namece eq null}{else}{$namece}{/if}">
					</div>
					<div class="form-group">
						<label>mobile number</label>
                                                <input class="form-control"  maxlength="10"  name="phone" id="phone" value="{if $phone eq null}{else}{$phone}{/if}">
					</div>
					<div class="form-group">
						<label>Area</label>
						<select class="form-control" name="area" id="area">
								<option value="">-- Choose from here -- </option>
							{foreach from=$area  item=area1}
								<option value="{$area1.ida}">{$area1.nameae}</option>
							{/foreach}
						</select>
					</div>
					<button class="btn btn-primary btn-lg pull-right" type="submit" name="save" value="LOG IN">accession</button>
				</form>			  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
                  {else}
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>m</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="{$waycount+3}"><strong> process </strong></td> 
                                    </tr>
                                </thead>
                                <tbody>
										{foreach from=$castumer key=k  item=castumer1}
										<tr>
                                                                                        <td>{$k+1}</td>
											<td>{$castumer1.namece}</td>
											<td>{$castumer1.phonec}</td>
											<td>
                                                                                            {foreach from=$area  item=area1}
                                                                                                    {if  $area1.ida eq $castumer1.areac}{$area1.nameae}{/if}
                                                                                {/foreach}
                                                                                            
                                                                                        
                                                                                        </td>
                                                                                       
											<td colspan=><a href="addition.php?lang=en&act=addorder&id={$castumer1.idc}" target="_blank"><button class="btn btn-default" type="button"> New Order</button></a></td>
                                                                                        <td colspan=><a href="addition.php?lang=en&act=ordercastumer&st=0&idc={$castumer1.idc}" target="_blank"><button class="btn btn-warning" type="button"> On Going</button></a></td>
                                                                                        <td colspan=><a href="addition.php?lang=en&act=ordercastumer&st=1&idc={$castumer1.idc}" target="_blank"><button class="btn btn-default" type="button"> Finish</button></a></td>
                                                                                        <td colspan=><a href="addition.php?lang=en&act=ordercastumer&st=2&idc={$castumer1.idc}" target="_blank"><button class="btn btn-default" type="button"> Finish</button></a></td>
                                                                                        <td><a href="addition.php?lang=en&act=recredit&id={$castumer1.idc}" target="_blank"><button class="btn btn-success" type="button">  ADD Catch Receipt</button></a></td>
                                                                                        <td><a href="addition.php?lang=en&act=reportsca&payment=0&id={$castumer1.idc}" target="_blank"><button class="btn btn-success" type="button"> Receipts</button></a></td>
                                                                                </tr>
									{/foreach}
                                </tbody>
                            </table>
			  
						  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
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
    
    <script>
            // $( "#phone" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
        $('#castumer').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'castumer-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameca").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert name Of Arabic");
                                    }
                                     if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert name Of English");
                                    }
                                     if(data.msg == 3){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert name Of English Only");
                                    }
                                     if(data.msg == 4){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("Please Insert Mobile Number"); 
                                    }
                                    if(data.msg == 5){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل ارقام"); 
                                    } 
                                    if(data.msg == 6){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("THis mobile Number already exists "); 
                                    } 
                                    if(data.msg == 7){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
					$("#phone").removeAttr( "style", "border-color: #a94442" );
                                        $("#area").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Area"); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
										$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("Faild");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  Client: </strong> ";
                                        var name = $("#namece").val();
                                        var str2 = "<strong> has been added successfully </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "index.php?lang=en";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
</body>

</html>
