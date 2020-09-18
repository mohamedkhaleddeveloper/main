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
                                <i class="fa fa-file-text"></i> الفواتير
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : {$dayar1}
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-downt"></i> التاريخ : {$invdate}
                            </li>
                            <li class="active">
                                <i class="fa fa-files-o"></i> عدد الفواتير : {$invcount}
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                
              <div class="col-lg-12">
                  {if $inv eq Null}
                      <h1 class="text-center">لايوجد فواتير بهذا التاريخ  </h1>
                      
                      {else}
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                        <td><strong>اسم العميل</strong></td>
                                        <td><strong> رقم التليفون</strong></td>
                                        <td><strong>  اسم الفني</strong></td>
                                        <td><strong>نوع الفاتورة </strong></td>
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$inv  key=k item=inv1}
                                        <tr>
                                                <td>{$k+1}</td>
                                                <td>{$inv1.bill}</td>
                                                <td>{$inv1.nameca}</td>
                                                <td>{$inv1.phonec}</td>
                                                <td>
                                                    {if $inv1.employeeiddp eq 0}
                                                         {foreach from=$employee  item=employee1}
                                                             {if $inv1.employeeid eq $employee1.idm}{$employee1.namema}{/if}
                                                        {/foreach}
                                                    {else}
                                                         {foreach from=$employee  item=employee1}
                                                             {if $inv1.employeeiddp eq $employee1.idm}{$employee1.namema}{/if}
                                                         {/foreach}
                                                    {/if}  
                                                </td>
                                                <td>
                                                   {foreach from=$payment  item=payment1}
                                                       {if $inv1.payment eq $payment1.idp}{$payment1.namepa}{/if}
                                                    {/foreach}
                                                </td>
                                                <td>{$inv1.price}</td>
                                                <td>{$inv1.discount}</td>
                                                <td>{$inv1.totalc}</td>

                                        </tr>
                                {/foreach}
                                </tbody>
                            </table>
			  
						 <hr/>
                                                  {/if}
                                                  
                                                 	  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td colspan="5"><strong>الاجمالي</strong></td>
                                    <tr></tr>
                                    
                                    {foreach from=$totalPayment  item=totalPayment1}
                                        <td><strong>
                                                {$totalPayment1.1}
                                        </strong></td>        
                                        {/foreach}
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                        <tr>
                                               
                                                
                                                  {foreach from=$totalPayment  item=totalPayment1}
                                        <td><strong>
                                                {if $totalPayment1.3 eq null} 0 {else} {$totalPayment1.3} {/if}
                                        </strong></td>        
                                        {/foreach}
                                               

                                        </tr>
                               
                                </tbody>
                            </table>
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
