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
                                <i class="fa fa-fw fa-file"></i> Finish Operation
                            </li>
                        </ol>
						{foreach from=$castumer  item=castumer1}
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Name</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.namece}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Mobile</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.phonec}
                            </div>
                        </div>  </div>
							{/foreach}
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Area</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumere}
                            </div>
                        </div></div>
						<h1 class="page-header">		
								
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="invoices" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
				<input class="form-control" name="ido" value="{$ido}"  type="hidden">
                                <input class="form-control" name="pro" value="{$pro}"  type="hidden">
                            <div class="col-lg-12">
                                    <div class="col-lg-3">                
					<div class="form-group">
						<label> Bill Number </label>
						<input class="form-control" name="bill" id="bill" >
					</div>
                                    </div>
                                    <div class="col-lg-2">        
					<div class="form-group">
						<label> Amount </label>
						<input class="form-control" name="price" id="price" >
					</div>
                                    </div>
                                    <div class="col-lg-2"> 
					<div class="form-group">
						<label> Discount  </label>
						<input class="form-control" name="discount" id="discount" >
					</div>
                                    </div>
                                    <div class="col-lg-2"> 
					<div class="form-group">
						<label> Expenses </label>
						<input class="form-control" name="expenses" id="expenses" >
					</div>
                                    </div>
                                    <div class="col-lg-3"> 
					<div class="form-group">
						<label> sum </label>
						<input class="form-control" name="total" id="total" readonly>
					</div>
                                    </div>  
                            </div>
					
					<div class="form-group">
						<label>طريقه الدفع</label>
                                                <div class="col-lg-12">
                                                    {foreach from=$payment  item=payment1}
                                                        {if $payment1.namepe eq visa}
                                                    <div class="col-lg-1 text-center">
                                                       <label >{$payment1.namepe}</label>
                                                       <label><i class='fa fa-cc-visa fa-3x blue'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="{$payment1.numberp}/{$payment1.idp}" type="radio">
                                                    </div>
                                                        {/if}
                                                         {if $payment1.namepe eq 'master card'}
                                                     <div class="col-lg-1 text-center">
                                                       <label >{$payment1.namepe|substr:0:6}</label>
                                                       <label><i class='fa fa-cc-mastercard fa-3x'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="{$payment1.numberp}/{$payment1.idp}"  type="radio">
                                                    </div>
                                                         {/if}
                                                         {if $payment1.namepe eq cash}
                                                     <div class="col-lg-1 text-center">
                                                       <label >{$payment1.namepe}</label>
                                                       <label><i class='fa fa-money fa-3x'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="{$payment1.numberp}/{$payment1.idp}"  type="radio">
                                                    </div>
                                                         {/if}
                                                         
                                                          {if $payment1.namepe eq mada}
                                                     <div class="col-lg-1 text-center">
                                                        <label >{$payment1.namepe}</label>
                                                       <label><i class='fa fa-credit-card fa-3x mada'></i></label>
                                                       <input id="optionsRadiosInline1" class="form-control" name="payment" value="{$payment1.numberp}/{$payment1.idp}"  type="radio">
                                                    </div>
                                                         {/if}
                                                    {/foreach}
                                                </div>
					</div>
                                        <div class="form-group">
						<label> Total </label>
						<input class="form-control" name="total1" id="total1" readonly>
					</div>   
					<div class="form-group">
						<label> Nots </label>
						<textarea class="form-control" rows="3" name="note"></textarea>
					</div>
					<button class="btn btn-success btn-lg" type="submit" name="save" value="LOG IN">انهاء المعامله</button>
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
 
    <script type="text/javascript">
    $(document).ready(function(){
        $("#price").keyup(function(){
                var price   =  $("#price").val();
                $("#discount").keyup(function(){
                        var discount   =  $("#discount").val();
                        $("#expenses").keyup(function(){
                            var expenses   =  $("#expenses").val();
                                    $("#expenses").change(function(){
                                        var pricei = parseInt(price);
                                        var discounti = parseInt(discount);
                                        var expensesi = parseInt(expenses);
                                        var t = discounti + expensesi;
                                        var sum  = pricei - t;
                                        $("#total").val(sum);
                                    })
                                $( "input" ).on( "click", function() {
                                    var pricei = parseInt(price);
                                    var discounti = parseInt(discount);
                                    var expensesi = parseInt(expenses);
                                    var t = discounti + expensesi;
                                    var sum  = pricei - t;
                                    var value =  $( "input:checked" ).val();
                                    var value1 = value.split("/");
                                    var valueP = value1[0];
                                    if(valueP == 0){
                                        $("#total").val(sum);
                                    }
                                    var percent = (sum * valueP) /100;
                                    var sum1 =  sum - percent;
                                    $("#total1").val(sum1);
                                }); 
                        });
                });	
        });
    })
</script>

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
        $('#invoices').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'invoices-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#bill").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("Please Insert Bill Number");
                                    }
                                     if(data.msg == 2){
                                        $("#bill").removeAttr( "style", "border-color: #a94442" );
                                        $("#price").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("Amount Numbers Only"); 
                                    }
                                    if(data.msg == 3){
                                        $("#price").removeAttr( "style", "border-color: #a94442" );
                                        $("#discount").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("Discount  Numbers Only"); 
                                    } 
                                    if(data.msg == 4){
                                        $("#discount").removeAttr( "style", "border-color: #a94442" );
                                        $("#expenses").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger ");
                                        $("#alert").html("Expenses Numbers Only"); 
                                    } 
                                    if(data.msg == 5){
                                        $("#expenses").removeAttr( "style", "border-color: #a94442" );
                                        $("#payment").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Way Of Payment"); 
                                    } 
                                    if(data.msg == 6){
                                        $("#expenses").removeAttr( "style", "border-color: #a94442" );
                                        $("#payment").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Way Of Payment"); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#invoices').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("[Failed");
                                    }	
                                    if(data.msg == 0){
                                        $('#invoices').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong> The transaction has been successfully completed</strong> ";
                                        //var name = $("#name").val();
                                        //var str2 = "<strong> شكرا لك </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1);
                                            setTimeout(function () {
                                            window.location.href = "index.php?lang=en";}, 2000);
                                    }
                        }
                });
        });
        </script>
	
</body>

</html>
