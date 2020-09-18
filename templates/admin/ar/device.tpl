{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            الأجهزة <small>تسجيل جهاز جديد</small>
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
						<label>اسم الجهاز</label>
						<input class="form-control" name="nameva" id="nameva" >
					</div>	
                                         <div class="form-group">
						<label>اسم الجهاز باللغه الاتجليزي</label>
						<input class="form-control" name="nameve" id="nameve" >
					</div>	
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">اضف</button>
					</div>	
				</form>

			  </div>	
			  	{if $device eq null}
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">لم يتم اضافه اي جهاز  بالبرنامج</h3>
                                     <br/><br/><br/>
                                 {else}    
			  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-desktop"></i> الاجهزه
                            </li>
                        </ol>
                      
                    </div>
			 </div>

                          <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>الرقم</strong></td>
                                        <td><strong>اسم الجهاز</strong></td>
                                       <td><strong>تعديل </strong></td>
                                        <td><strong>حاله التفعيل </strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$device  key=k item=device1}
                                        <tr>
                                                <td>{$k+1}</td>
                                                <td >{$device1.nameva}</td>
                                                 <td><a href="update.php?act=deviceup&idv={$device1.idv}"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
                                                {if $device1.deletv eq 0}
                                                        <td><form action="addition.php?act=adddevice" method="POST">
                                                            <input type="hidden" name="idv" value="{$device1.idv}"/>          
                                                            <input type="submit" class="btn btn-sm btn-success" name="active" value="مفعله">
                                                        </form> </td>
                                                {else}
                                                        <td><form action="addition.php?act=adddevice" method="POST">
                                                            <input type="hidden" name="idv" value="{$device1.idv}"/>          
                                                            <input type="submit" class="btn btn-sm btn-danger" name="unactive" value="غير مفعله ">
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
                        url: 'device-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameva").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم الجهاز");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameva").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم الجهاز من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#nameva").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameve").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم الجهاز بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#nameva").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameve").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
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
                                        var str1 = "<strong>  تم اضافه جهاز : </strong> ";
                                        var name = $("#nameva").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=adddevice";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
