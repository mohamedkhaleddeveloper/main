<?php /* Smarty version 3.1.24, created on 2017-07-11 12:46:41
         compiled from "./templates/admin/en/order.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5625972615964c8b1231cd6_19936908%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea80fde781a4ad59177d5e3723a546b17f583c17' => 
    array (
      0 => './templates/admin/en/order.tpl',
      1 => 1498315260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5625972615964c8b1231cd6_19936908',
  'variables' => 
  array (
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumere' => 0,
    'iduser' => 0,
    'area' => 0,
    'area1' => 0,
    'device' => 0,
    'device1' => 0,
    'service' => 0,
    'service1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964c8b12b07f2_80732617',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964c8b12b07f2_80732617')) {
function content_5964c8b12b07f2_80732617 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5625972615964c8b1231cd6_19936908';
echo $_smarty_tpl->getSubTemplate ("admin/en/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i>  New Operation
                            </li>
                        </ol>
						<?php
$_from = $_smarty_tpl->tpl_vars['castumer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['castumer1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['castumer1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['castumer1']->value) {
$_smarty_tpl->tpl_vars['castumer1']->_loop = true;
$foreach_castumer1_Sav = $_smarty_tpl->tpl_vars['castumer1'];
?>
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Name</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['namece'];?>

                            </div>
                        </div>  </div>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Mobile Number</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['phonec'];?>

                            </div>
                        </div>  </div>
							<?php
$_smarty_tpl->tpl_vars['castumer1'] = $foreach_castumer1_Sav;
}
?>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Area</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['areaCastumere']->value;?>

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
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
                                     <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
						<?php
$_from = $_smarty_tpl->tpl_vars['castumer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['castumer1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['castumer1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['castumer1']->value) {
$_smarty_tpl->tpl_vars['castumer1']->_loop = true;
$foreach_castumer1_Sav = $_smarty_tpl->tpl_vars['castumer1'];
?>
							<input class="form-control" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['castumer1']->value['idc'];?>
"  type="hidden">
						<?php
$_smarty_tpl->tpl_vars['castumer1'] = $foreach_castumer1_Sav;
}
?>
					<div class="form-group">
                                            <div class="col-lg-12">
                                                <div class="col-lg-2">
						<label>Area</label>
						<select class="form-control" name="area" id="area">
								<option value="">-Choose from here-</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"><?php echo $_smarty_tpl->tpl_vars['area1']->value['nameae'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
						</select>
                                                </div>
				
                                                 <div class="col-lg-2">
						<label>Device</label>
						<select class="form-control" name="device" id="device">
                                                        <option value="">-Choose from here-</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['device']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['device1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['device1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['device1']->value) {
$_smarty_tpl->tpl_vars['device1']->_loop = true;
$foreach_device1_Sav = $_smarty_tpl->tpl_vars['device1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['device1']->value['idv'];?>
"><?php echo $_smarty_tpl->tpl_vars['device1']->value['nameve'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['device1'] = $foreach_device1_Sav;
}
?>
						</select>
                                                 </div>
                                                
                                                 <div class="col-lg-2">
						<label>Service</label>
						<select class="form-control" name="service" id="service">
                                                        <option value="">-Choose from here-</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['service1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['service1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['service1']->value) {
$_smarty_tpl->tpl_vars['service1']->_loop = true;
$foreach_service1_Sav = $_smarty_tpl->tpl_vars['service1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['service1']->value['idserv'];?>
"><?php echo $_smarty_tpl->tpl_vars['service1']->value['nservicee'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['service1'] = $foreach_service1_Sav;
}
?>
						</select>
                                                 </div>
					
                                                <div class="col-lg-2" id ="transarea2" style="display: none;">
						<label>Transfer Area</label>
						<select class="form-control" name="transarea" id="transarea">
                                                      <option value="">-Choose from here-</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"><?php echo $_smarty_tpl->tpl_vars['area1']->value['nameae'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
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
						<label>Date of the transaction</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
                                                <div class="col-lg-1">
						<label>Time</label>
                                                    
					<select class="form-control" name="timeo" id="timeo">
								<option value="">Choose</option>
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
						<label>Timig</label>
                                                    
					<select class="form-control" name="timing" id="timing">
								<option value="">Choose </option>
								<option value="am">Am </option>
								<option value="pm">Pm</option>								
							</select>
						</div>
                                                 <div class="col-lg-6">
						<label>Another Phone No</label>
                                                  <input class="form-control" name="phoneo" id="phoneo" >
                                                </div>
                                                <div class="col-lg-6">
						<label>Nots</label>
                                                <textarea class="form-control" rows="1" name="note"></textarea>
                                                </div>
						
							</div>

				
					 <div class="col-lg-1 row pull-right marginit">
                                                     <label> </label>
						<button class="btn btn-primary btn-lg pull-right" type="submit" name="save" value="LOG IN">addition</button>
                                                 <label> </label>
                                                </div></div>
							
					
	<br/><br/><br/>
                                 </form>			  
			  </div>
				


            </div>
            <!-- /.container-fluid -->
          
            
             <div class="alert alert-warning text-left">
                 <strong>Note</strong><br/> Note working hours in normal days from 9 am to 11 pm - from 4 pm to 8 pm <br/>
                        working hours in Ramadan from 1 pm to 5 pm  -  from 9 pm to 1 am
            </div>
        </div>
                                                
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
 

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
            
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
             $( "#service" ).change(function() {
                    if($( this ).val() == 6){
                        $( "#pipe" ).show("slow");
                    }else{
                        $( "#pipe" ).hide("slow");
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
	<?php echo '</script'; ?>
>
    
    

    <!-- Morris Charts JavaScript -->
    <?php echo '<script'; ?>
 src="js/plugins/morris/raphael.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/plugins/morris/morris-data.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
 
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
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Kind Of Device");
                                    }
                                     if(data.msg == 2){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Kind Of Service"); 
                                    } 
                                    if(data.msg == 3){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Transfer Area"); 
                                    } 
                                    if(data.msg == 4){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#md1").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Model Number"); 
                                    } 
                                    if(data.msg == 5){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#metter").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Metters"); 
                                    } 
                                     if(data.msg == 6){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Date"); 
                                    } 
                                     if(data.msg == 7){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").removeAttr( "style", "border-color: #a94442" );
                                        $("#timing").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Time"); 
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
                                        var str1 = "<strong>  The operation completed successfully been added </strong> ";
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
        <?php echo '</script'; ?>
>
	
</body>

</html>
<?php }
}
?>