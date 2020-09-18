{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            المهن <small>أضافه مهنه جديد </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                      {foreach from=$carer key=k  item=carer1}
                                      <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                       <input class="form-control" name="idr" id="idr" value="{$carer1.idr}" type="hidden" >
					<div class="form-group">
						<label>اسم المهنه</label>
						<input class="form-control" name="namera" id="namera" value="{$carer1.namera}">
					</div>	
                                         <div class="form-group">
						<label>اسم المهنه باللغه الانجليزيه</label>
						<input class="form-control" name="namere" id="namere" value="{$carer1.namere}">
					</div>	
					<div class="form-group">
                                                {/foreach}
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
                        url: 'carerup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namera").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم المهنه");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameقa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم المهنه من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#namera").removeAttr( "style", "border-color: #a94442" );
                                        $("#namere").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم المهنه بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#namera").removeAttr( "style", "border-color: #a94442" );
                                        $("#namere").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
                                    } if(data.msg == 5){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#namera").removeAttr( "style", "border-color: #a94442" );
                                        $("#namere").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم المهنه من قبل");
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
										$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه مهنه");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه مهنه : </strong> ";
                                        var name = $("#namera").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addcarer";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
