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
                                <i class="fa fa-fw fa-wrench"></i>  Delivery
                            </li>
                        </ol>
						{foreach from=$castumer  item=castumer1}
						 <div class="col-lg-3">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Name</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.namece}
                            </div>
                        </div>  </div>
						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Mobile Or Phone Number</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumer1.phonec}
                            </div>
                        </div>  </div>
							{/foreach}
						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Area</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumere}
                            </div>
                        </div></div>
                            
                            						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الجهاز</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$deviceNe}
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
                                     <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
						{foreach from=$castumer  item=castumer1}
							<input class="form-control" name="ido"  value="{$ido}"  type="hidden">
						{/foreach}
					<div class="form-group">
                                            <div class="col-lg-12">
                                                
				
                                                 <div class="col-lg-2">
						<label>Tech Name </label>
                                                    <select class="form-control" name="idtech" id="idtech" >
                                                                <option value= 0 >-- Choose -- </option>
                                                            {foreach from=$tech  item=tech1}
                                                                <option value="{$tech1.idm}">{$tech1.nameme}</option>
                                                            {/foreach}
                                                    </select>
                                                </div>
                                                
                                                <div class="col-lg-2">
						<label>Date</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
                                                    <div class="col-lg-2">    
                                                    <label>Time</label>
                                                 
					<select class="form-control" name="timeodp" id="timeodp">
								<option value="">Choose </option>
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
                                                 <div class="col-lg-2">
						<label>Timig</label>
                                                    
					<select class="form-control" name="timingdp" id="timingdp">
								<option value="">Choose </option>
								<option value="am">Am </option>
								<option value="pm">Pm</option>								
							</select>
						</div>
                                                <div class="col-lg-4">
						<label>Nots</label>
                                                <textarea class="form-control" rows="3" name="note" id="note"></textarea>
                                                </div>
                                                
                                               
						
							</div></div>

				
                                          <br/> <br/> <br/> <br/> <br/> <br/>   
					<button class="btn btn-primary btn-lg pull-right" type="submit" name="save" value="LOG IN">addition</button>

        
                                 </form>			  
			  </div>
				


            </div>
            <!-- /.container-fluid -->
            <br/>
            <div class="alert alert-warning text-left">
                 <strong>Note</strong><br/> Note working hours in normal days from 9 am to 11 pm - from 4 pm to 8 pm <br/>
                        working hours in Ramadan from 1 pm to 5 pm  -  from 9 pm to 1 am
            </div>
            
            
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
                        url: 'delivery-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#idtech").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Choose Tech");
                                    }
                                     if(data.msg == 2){
                                        $("#idtech").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Inser Date"); 
                                    } 
                                     if(data.msg == 3){
                                        $("#idtech").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#timingdp").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Choose Timing"); 
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
                                        var str1 = "<strong>  تم تحديد موعد التوصيل بنجاح  </strong> ";
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
