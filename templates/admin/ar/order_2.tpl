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
                                <i class="fa fa-fw fa-file"></i> عمليه جديده
                            </li>
                        </ol>
						{foreach from=$castumer  item=castumer1}
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.nameca}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.phonec}
                            </div>
                        </div>  </div>
							{/foreach}
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumer}
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
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
						{foreach from=$castumer  item=castumer1}
							<input class="form-control" name="id"  value="{$castumer1.idc}"  type="hidden">
						{/foreach}
					<div class="form-group">
                                            <div class="col-lg-12">
                                                <div class="col-lg-2">
						<label>عنوان اخر</label>
						<select class="form-control" name="area" id="area">
								<option value="">-- اختر من هنا -- </option>
							{foreach from=$area  item=area1}
								<option value="{$area1.ida}">{$area1.nameaa}</option>
							{/foreach}
						</select>
                                                </div>
				
                                                 <div class="col-lg-2">
						<label>نوع الجهاز</label>
						<select class="form-control" name="device" id="device">
                                                        <option value="">-- اختر من هنا -- </option>
							{foreach from=$device  item=device1}
								<option value="{$device1.idv}">{$device1.nameva}</option>
							{/foreach}
						</select>
                                                 </div>
                                                 <div class="col-lg-2">
						<label>نوع الخدمه</label>
						<select class="form-control" name="service" id="service">
                                                        <option value="">-- اختر من هنا -- </option>
							{foreach from=$service  item=service1}
								<option value="{$service1.idserv}">{$service1.nservicea}</option>
							{/foreach}
						</select>
                                                 </div>
					
                                                 <div class="col-lg-2" id ="transarea2" style="display: none;">
						<label>منطقه النقل </label>
                                                <select class="form-control" name="transarea" id="transarea">
                                                     <option value=0>-- اختر من هنا -- </option>
							{foreach from=$area  item=area1}
								<option value="{$area1.ida}">{$area1.nameaa}</option>
							{/foreach}
						</select>
                                                 </div>
					
                                                 <div class="col-lg-2" id ="md" style="display: none;">
                                                        <label> رقم الموديل </label>
                                                         <input type="text" class="form-control"  id="md1" name="md" >
                                                 </div>
					
							
						
						 <div class="col-lg-2">
						<label>تاريخ  المعامله</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
                                                <div class="col-lg-1">
						<label>الوقت</label>
                                                    
					<select class="form-control" name="timeo" id="timeo">
								<option value="">اختر </option>
								<option value="1">1 </option>
								<option value="2">2</option>
                                                                <option value="3">3 </option>
								<option value="4">4</option>
                                                                <option value="5">5 </option>
								<option value="6">6</option>
                                                                <option value="7">7 </option>
								<option value="8">8</option>
                                                                <option value="9">9 </option>
								<option value="10">10</option>
                                                                <option value="10">11</option>
							</select>
						</div>
                                                 <div class="col-lg-1">
						<label>التوقيت</label>
                                                    
					<select class="form-control" name="timing" id="timing">
								<option value="">اختر </option>
								<option value="am">صباحا </option>
								<option value="pm">عصرا</option>								
							</select>
						</div>
                                                <div class="col-lg-12">
						<label>رقم تليفون اخر</label>
                                                  <input class="form-control" name="phoneo" id="phoneo" >
                                                </div>
                                                <div class="col-lg-12">
						<label>الملاحظات</label>
                                                <textarea class="form-control" rows="2" name="note"></textarea>
                                                </div>
						
							</div></div>

				
					 <br/><br/><br/><br/> <br/><br/><br/><br/>
					<button class="btn btn-primary btn-lg" type="submit" name="save" value="LOG IN">اضف عمليه جديده</button>
				</form>			  
			  </div>
				


            </div>
            <!-- /.container-fluid -->
            <div class="alert alert-warning text-right">
                 <strong>علما</strong> مواعيد العمل في الايام العادي من 9 صباحا حتى 11 مساءا ومن 4 عصرا حتى 8 مساءا <br/> مواعيد العمل في رمضان
            </div>
            
            <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
        </div>
                                                
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
	<script>
            
            
            $( "#service" ).change(function() {
                    if($( this ).val() == 3){
                        $( "#transarea2" ).show("slow");
                    }else{
                        $( "#transarea2" ).hide("slow");
                    }
            });
            
             $( "#service" ).change(function() {
                    if($( this ).val() == 4){
                        $( "#md" ).show("slow");
                    }else{
                        $( "#md" ).hide("slow");
                    }
            });
            
            
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#orderdate').datepicker({
				format: 'yyyy-mm-dd'
			});
			
        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
    
    

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
                        url: 'order-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#device").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل نوع الجهاز");
                                    }
                                     if(data.msg == 2){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الخدمه"); 
                                    } 
                                    
                                     if(data.msg == 3){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل مكان النقل"); 
                                    } 
                                    if(data.msg == 4){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#md1").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل رقم الموديل"); 
                                    } 
                                    if(data.msg == 5){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").removeAttr( "style", "border-color: #a94442" );
                                        $("#md1").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل التاريخ"); 
                                    } 
                                    
                                    if(data.msg == 6){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#timing").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل التوقيت "); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
										$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-left");
                                        $( "#alert" ).html("فشل اضافه المعامله");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه المعامله بنجاح</strong> ";
                                        var name = $("#name").val();
                                        var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str2 + str1);
                                            setTimeout(function () {
                                            window.location.href = "index.php";}, 2000);
                                    }
                        }
                });
        });
        </script>
	
</body>

</html>
