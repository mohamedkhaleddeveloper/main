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
                                <i class="fa fa-fw fa-wrench"></i>  التصليح بالورشه
                            </li>
                        </ol>
						{foreach from=$castumer  item=castumer1}
						 <div class="col-lg-3">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.nameca}
                            </div>
                        </div>  </div>
						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.phonec}
                            </div>
                        </div>  </div>
							{/foreach}
						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumer}
                            </div>
                        </div></div>
                            
                            						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الجهاز</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$deviceNa}
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
							<input class="form-control" name="ido"  value="{$ido}"  type="hidden">
						{/foreach}
					<div class="form-group">
                                            <div class="col-lg-12">
                                                
				
                                                 <div class="col-lg-2">
						<label>الحاله</label>
						<select class="form-control" name="repair" id="repair">
								<option value=0>-- اختار --</option>
								<option value=1>انهاء</option>
                                                                <option value=2>عدم الاصلاح</option>
						</select>
                                                </div>
                                                
                                                <div class="col-lg-2">
						<label>التاريخ</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
              
                                                <div class="col-lg-8">
						<label>الملاحظات</label>
                                                <textarea class="form-control" rows="3" name="note" id="note"></textarea>
                                                </div>
                                                
                                               
						
							</div></div>

				
                                             
					<button class="btn btn-primary btn-lg pull-right" type="submit" name="save" value="LOG IN">addition</button>
	<br/><br/><br/>
        
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
      <script src="js/bootstrap-datepicker.js"></script>
	<script>
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
                        url: 'repair-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#repair").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك اختر الحاله");
                                    }
                                     if(data.msg == 2){
                                        $("#repair").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل تاريخ انهاء العمل في الجهاز بالورشه"); 
                                    } 
                                     if(data.msg == 3){
                                        $("#repair").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#note").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل سبب عدم الاصلاح"); 
                                    } 
                                     
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger");
                                        $( "#alert" ).html("فشلت العمليه");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم انهاء العمل بالجهاز في الورشه بنجاح </strong> ";
                                        //var name = $("#name").val();
                                        //var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1);
                                            setTimeout(function () {
                                            window.location.href = "index.php";}, 2000);
                                    }
                        }
                });
        });
        </script>
	
</body>

</html>
