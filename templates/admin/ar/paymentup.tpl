{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            طريقه دفع <small>تعديل    </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                     {foreach from=$payment key=k item=payment1}
                                      <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                      <input class="form-control" name="idp" id="idp" value="{$payment1.idp}" type="hidden" >
					<div class="form-group">
						<label>اسم طريقه الدفع</label>
						<input class="form-control" name="namepa" id="namepa" value="{$payment1.namepa}">
					</div>	
                                         <div class="form-group">
						<label>اسم طريقه الدفع باللغه الانجليزيه</label>
						<input class="form-control" name="namepe" id="namepe" value="{$payment1.namepe}">
					</div>	
                                        <div class="form-group">
						<label>ادخل الرقم علما بأن الرقم سيتم حسابه بنسبه  %</label>
						<input class="form-control" name="numberp" id="numberp" value="{$payment1.numberp}">
					</div>	
                                        {/foreach}
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">حفظ</button>
					</div>	
				</form>

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
                        url: 'paymentup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namepa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namepa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال الاسم  من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  الاسم  بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
                                    }
                                    if(data.msg == 5){
                                        $("#namepa").removeAttr( "style", "border-color: #a94442" );
                                        $("#namepe").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال الاسم الانجليزيه  من قبل	"); 
                                    }
                                      if(data.msg == 6){
                                        $("#namepe").removeAttr( "style", "border-color: #a94442" );
                                        $("#numberp").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل النسبه	"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل تعديل طريقه الدفع");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم تعديل طريقه الدفع : </strong> ";
                                        var name = $("#namepa").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addpayment";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
