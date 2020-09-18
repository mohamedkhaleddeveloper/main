{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{include file="admin/en/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Way Of Payment <small> Recording </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                      <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
					<div class="form-group">
						<label>Arabic Payment Name</label>
						<input class="form-control" name="namepa" id="namepa" >
					</div>	
                                         <div class="form-group">
						<label>English Payment Name</label>
						<input class="form-control" name="namepe" id="namepe" >
					</div>	
                                        <div class="form-group">
						<label>Insert the percentage (%)</label>
						<input class="form-control" name="numberp" id="numberp" >
					</div>	
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-right" type="submit" name="save">addition</button>
					</div>	
				</form>

			  </div>	
			  	{if $payment eq null}
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">It is not adding any Ways Of Payment</h3>
                                     <br/><br/><br/>
                                 {else}    
			  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-credit-card"></i> Ways Of Payment
                            </li>
                        </ol>
                      
                    </div>
			 </div>

			 <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                         <td><strong>No</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Edite </strong></td>
                                        <td><strong>State of activation </strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$payment key=k item=payment1}
                                        <tr>
                                                <td>{$k+1}</td>
                                                <td>{$payment1.namepe|upper}</td>
                                                 <td><a href="update.php?lang=en&act=paymentup&idp={$payment1.idp}"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
                                                    {if $payment1.deletp eq 0}
                                                        <td><form action="addition.php?lang=en&act=addpayment" method="POST">
                                                            <input type="hidden" name="idp" value="{$payment1.idp}"/>          
                                                            <input type="submit" class="btn btn-sm btn-success" name="active" value="Active">
                                                        </form> </td>
                                                {else}
                                                        <td><form action="addition.php?lang=en&act=addpayment" method="POST">
                                                            <input type="hidden" name="idp" value="{$payment1.idp}"/>          
                                                            <input type="submit" class="btn btn-sm btn-danger" name="unactive" value="Un Active ">
                                                        </form> </td>
                                                {/if}
                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  {/if}

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
                        url: 'payment-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namepa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Arabice Name");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namepa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("This name already exists");
                                    }
                                     if(data.msg == 3){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                       $("#alert").html("Please Insert English Name"); 
                                    }
                                     if(data.msg == 4){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("English Word Only");  
                                    }
                                    if(data.msg == 5){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("This name already exists"); 
                                    }
                                      if(data.msg == 6){
                                        $("#namepe").removeAttr( "style", "border-color: #a94442" );
                                        $("#numberp").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("Please Insert the percentage"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("Failed");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  It has been added to the Way Of Payment : </strong> ";
                                        var name = $("#namepe").val();
                                        var str2 = "<strong> successfully Thank you  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addairport";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
