{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{if $prs eq 3}
    {include file="tech/en/nav.tpl"}
{else}
    {include file="admin/en/nav.tpl"}
{/if}

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-cog"></i>  Work Shop Opration
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
                                <h3 class="panel-title text-center">Mobile Number</h3>
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
                                <h3 class="panel-title text-center">Device</h3>
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
						<label>Technical</label>
						<select class="form-control" name="tech" id="tech">
								<option value="">-- Choose --</option>
							{foreach from=$employee  item=employee1}
								<option value="{$employee1.idm}">{$employee1.nameme|upper}</option>
							{/foreach}
						</select>
                                                </div>
                                                
                                               <div class="col-lg-2">
						<label>Service</label>
						<select class="form-control" name="service" id="service">
								<option value="">-- Choose --</option>
							{foreach from=$service  item=service1}
								<option value="{$service1.idserv}">{$service1.nservicee|upper}</option>
							{/foreach}
						</select>
                                                </div>
                                                
                                                  <div class="col-lg-2" id ="transarea2" style="display: none;">
						<label>Transfer Area</label>
						<select class="form-control" name="transarea" id="transarea">
                                                      <option value="">-Choose from here-</option>
							{foreach from=$area  item=area1}
								<option value="{$area1.ida}">{$area1.nameae}</option>
							{/foreach}
						</select>
                                                 </div>
					
                                                 <div class="col-lg-2" id ="md" style="display: none;">
                                                        <label> Model No</label>
                                                         <input type="text" class="form-control"  id="md1" name="md" >
                                                 </div>
                                                
                                                <div class="col-lg-2" id ="pipe" style="display: none;">
                                                        <label>  Pipe Metters</label>
                                                         <input type="text" class="form-control"  id="metter" name="metter" placeholder="EX : 5*70">
                                                 </div>
                                              
                                                
                                                <div class="col-lg-2">
						<label>Brand Comapny</label>
						<select class="form-control" name="mark" id="mark">
								<option value="">-- Choose --</option>
							{foreach from=$mark  item=mark1}
								<option value="{$mark1.idmark}">{$mark1.namemarke|upper}</option>
							{/foreach}
						</select>
                                                </div>
					
					
							
						
						 <div class="col-lg-2">
						<label>Date</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
                                               
                                                 <div class="col-lg-2">
						<label>Device Or Part</label>
                                                    
					<select class="form-control" id="device" name="device">
								<option value=""> -- Choose -- </option>
                                                                <option value="part">Part</option>
								<option value="indoor">In Door </option>
								<option value="outdoor">Out Door</option>
                                                                <option value="full">Full</option>
							</select>
						</div>
                                                
                                                 <div class="col-lg-2">
						<label>Default time for repair</label>
                                                    
					<select class="form-control" id="dftime" name="dftime">
                                                               	<option value=0>-- Choose --</option>
								<option value="1">1 day</option>
                                                                <option value="2">2 days</option>
                                                                <option value="3">3 days</option>
                                                                <option value="4">4 days</option>
                                                                <option value="5">5 days</option>
                                                                <option value="6">6 days</option>
                                                                <option value="7">7 days</option>
                                                                <option value="8">8 days</option>
                                                                <option value="9">9 days</option>
                                                                <option value="10">10 days</option>
                                                                <option value="11">11 days</option>
                                                                <option value="12">12 days</option>
                                                                <option value="13">13 days</option>
                                                                <option value="14">14 days</option>
							</select>
						</div>
                                                
                                                 <div class="col-lg-6">
						<label>Model Number</label>
                                                  <input type="text" class="form-control"  id="mdn" name="mdn" >
                                                 </div>
                                                
                                                 <div class="col-lg-6">
						<label>Serial Number</label>
                                                  <input type="text" class="form-control"  id="sn" name="sn" >
                                                 </div>
                                                
                                                <div class="col-lg-12">
						<label>Nots</label>
                                                <textarea class="form-control" rows="3" name="note"></textarea>
                                                </div>
                                                  <div class="col-lg-1 pull-right">
						<label> </label>
                                               <button class="btn btn-primary btn-lg " type="submit" name="save" value="LOG IN">addition</button>
						</div>
							</div></div>

				
          
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
                        url: 'workshop-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#tech").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Choose Technical");
                                    }
                                     if(data.msg == 2){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Choose service"); 
                                    } 
                                     if(data.msg == 3){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Transfer Area"); 
                                    } 
                                    if(data.msg == 4){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#md1").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Model Number"); 
                                    } 
                                    if(data.msg == 5){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#metter").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Metters"); 
                                    } 
                                      if(data.msg == 6){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#mark").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Choose Brand Company"); 
                                    } 
                                     if(data.msg == 7){
                                         $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#mark").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Date"); 
                                    } 
                                      if(data.msg == 8){
                                         $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#mark").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#device").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Choose Part Or decvice"); 
                                    } 
                                    if(data.msg == 9){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#mark").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#dftime").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Choose Default time for repair"); 
                                    } 
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger");
                                        $( "#alert" ).html("Failed");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  The operation completed successfully been Add In Work Shop </strong> ";
                                        //var name = $("#name").val();
                                        //var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1);
                                            setTimeout(function () {
                                            window.location.href = "index.php?lang=en";}, 2000);
                                    }
                        }
                });
        });
        </script>
	
</body>

</html>
