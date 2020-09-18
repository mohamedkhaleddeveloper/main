{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            الأجهزة <small>تعديل</small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                     {foreach from=$service  key=k item=service1}
                                      <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                      <input class="form-control" name="idserv" id="idu" value="{$service1.idserv}" type="hidden" >
					<div class="form-group">
						<label>اسم الخدمه</label>
						<input class="form-control" name="nservicea" id="nservicea" value="{$service1.nservicea}">
					</div>	
                                         <div class="form-group">
						<label>اسم الخدمه باللغه الاتجليزي</label>
						<input class="form-control" name="nservicee" id="nservicee" value="{$service1.nservicee}">
					</div>	
                                     <div class="form-group">
                                     <label>سعر الخدمه</label>
						<input class="form-control" name="coastserv" id="coastserv" value="{$service1.coast}">
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
                        url: 'serviceup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nservicea").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم الخدمه");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nservicea").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم الخدمه من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم الخدمه بالانجليزي	"); 
                                    }
                                       if(data.msg == 4){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
                                    }
                                     if(data.msg == 5){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم الخدمه من قبل"); 
                                    }
                                     if(data.msg == 6){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").removeAttr( "style", "border-color: #a94442" );
                                        $("#coastserv").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل سعر الخدمه	"); 
                                    }
                                     if(data.msg == 7){
                                        $("#nservicea").removeAttr( "style", "border-color: #a94442" );
                                        $("#nservicee").removeAttr( "style", "border-color: #a94442" );
                                        $("#coastserv").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل ارقام فقط	"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
										$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه جهاز");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم تعديل خدمه : </strong> ";
                                        var name = $("#nservicea").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addservice";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
