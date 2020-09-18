{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            المناطق <small>تعديل  </small>
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

            <div class="col-lg-12">

                    <div id="alert"></div>
                    <div id="sent-form-msg" align="center"></div>
                        <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                            {foreach from=$area key=k item=area1}
                                 <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                <input class="form-control" name="idarea" id="idarea" value="{$area1.ida}" type="hidden" >
                                <div class="form-group">
                                        <label>اسم المنطقه بالعربي </label>
                                        <input class="form-control" name="nameaa" id="nameaa" value="{$area1.nameaa}">
                                </div>	
                                 <div class="form-group">
                                        <label> اسم المنطقه بالانجليزي</label>
                                        <input class="form-control" name="nameae" id="nameae" value="{$area1.nameae}">
                                </div>	
                                {/foreach}
                                 <div class="form-group">
						<label>المجموعه</label>
						<select class="form-control" name="group" id="group">
								<option value="">-- اختر من هنا -- </option>
							{foreach from=$group  item=group1}
								<option value="{$group1.0}{if $area1.groupa eq $group1.0}" selected {else}" {/if}">{$group1.0}</option>
							{/foreach}
							
						</select>
					</div>
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
                        url: 'areaup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم المنطقه");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال هذه المنطقه من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم المنطقه بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
                                    }
                                     if(data.msg == 5){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال هذه المنطقه من قبل");
                                    }
                                    if(data.msg == 6){
                                        $("#nameae").removeAttr( "style", "border-color: #a94442" );
                                        $("#groupa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل المجموعه"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه منطقه");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه منطقة  : </strong> ";
                                        var name = $("#nameaa").val();
                                        var str2 = "<strong>   بنجاح  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addarea";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
