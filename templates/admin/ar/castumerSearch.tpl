{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}

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
                  {if $castumer eq Null}
                      <h1 class="text-center"">عفوا هذا العميل غير مسجل لدينا  يمكنك تسجيل العميل الان </h1>
                      
                      <div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
					<div class="form-group">
                                            <label>اسم العميل</label>
                                             <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
						<input class="form-control" name="nameca" id="nameca" value="{if $name eq null}{else}{$name}{/if}" >
					</div>
                                        <div class="form-group">
						<label>اسم العميل باللغه الانجليزيه</label>
						<input class="form-control" name="namece" id="namece"  value="{if $namece eq null}{else}{$namece}{/if}">
					</div>
					<div class="form-group">
						<label>جوال</label>
                                                <input class="form-control"  maxlength="10"  name="phone" id="phone" value="{if $phone eq null}{else}{$phone}{/if}">
					</div>
					<div class="form-group">
						<label>العنوان</label>
						<select class="form-control" name="area" id="area">
								<option value="">-- اختر من هنا -- </option>
							{foreach from=$area  item=area1}
								<option value="{$area1.ida}">{$area1.nameaa}</option>
							{/foreach}
						</select>
					</div>
					<button class="btn btn-primary btn-lg" type="submit" name="save" value="LOG IN">اضف</button>
				</form>			  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
                  {else}
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                    <td colspan="4"><strong>المعاملات</strong></td>
                                    <td colspan="2"><strong>الحسابات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
									{foreach from=$castumer key=k  item=castumer1}
										<tr>
                                                                                        <td>{$k+1}</td>
											<td>{$castumer1.nameca}</td>
											<td>{$castumer1.phonec}</td>
											<td>
                                                                                            {foreach from=$area  item=area1}
                                                                                                    {if  $area1.ida eq $castumer1.areac}{$area1.nameaa}{/if}
                                                                                {/foreach}
                                                                                            
                                                                                        
                                                                                        </td>
                                                                                       
											<td colspan=><a href="addition.php?act=addorder&id={$castumer1.idc}" target="_blank"><button class="btn btn-default" type="button"> جـــــديــــدة</button></a></td>
                                                                                        <td colspan=><a href="addition.php?act=ordercastumer&st=0&idc={$castumer1.idc}" target="_blank"><button class="btn btn-warning" type="button"> جارية</button></a></td>
                                                                                        <td colspan=><a href="addition.php?act=ordercastumer&st=1&idc={$castumer1.idc}" target="_blank"><button class="btn btn-default" type="button"> انتهت</button></a></td>
                                                                                        <td colspan=><a href="addition.php?act=ordercastumer&st=2&idc={$castumer1.idc}" target="_blank"><button class="btn btn-danger" type="button"> ملغية</button></a></td>
                                                                                        <td><a href="addition.php?act=reportsca&payment=0&id={$castumer1.idc}" target="_blank"><button class="btn btn-success" type="button"> الفواتير</button></a></td>
                                                                                        <td><a href="addition.php?act=recredit&id={$castumer1.idc}" target="_blank"><button class="btn btn-success" type="button">إضافه سند قبض</button></a></td>
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
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم باللغه العربيه");
                                    }
                                     if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم باللغه الانجليزي");
                                    }
                                     if(data.msg == 3){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف باللغه الانجليزي");
                                    }
                                     if(data.msg == 4){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل رقم الجوال"); 
                                    }
                                    if(data.msg == 5){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل ارقام"); 
                                    } 
                                    if(data.msg == 6){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
                                        $("#phone").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال هذا الرقم مسبقا "); 
                                    } 
                                    if(data.msg == 7){
                                        $("#nameca").removeAttr( "style", "border-color: #a94442" );
                                        $("#namece").removeAttr( "style", "border-color: #a94442" );
					$("#phone").removeAttr( "style", "border-color: #a94442" );
                                        $("#area").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك اختر المنطقه"); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("فشل اضافه العميل");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه العميل : </strong> ";
                                        var name = $("#nameca").val();
                                        var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "index.php";}, 2000);
                                    }
                        }
                });
        });
        </script>

	
	
</body>

</html>
