<?php /* Smarty version 3.1.24, created on 2017-07-11 08:05:13
         compiled from "./templates/admin/ar/order.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1270643782596486b9047067_83100360%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c83781cfc82ab6ac7be288678b498b8037b8a2d' => 
    array (
      0 => './templates/admin/ar/order.tpl',
      1 => 1498314896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270643782596486b9047067_83100360',
  'variables' => 
  array (
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumer' => 0,
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
  'unifunc' => 'content_596486b90e9575_59439625',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596486b90e9575_59439625')) {
function content_596486b90e9575_59439625 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1270643782596486b9047067_83100360';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['nameca'];?>

                            </div>
                        </div>  </div>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
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
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['areaCastumer']->value;?>

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
							<input class="form-control" name="id"  id="idc" value="<?php echo $_smarty_tpl->tpl_vars['castumer1']->value['idc'];?>
"  type="hidden">
						<?php
$_smarty_tpl->tpl_vars['castumer1'] = $foreach_castumer1_Sav;
}
?>
					<div class="form-group">
                                            <div class="col-lg-12">
                                                <div class="col-lg-2">
						<label>عنوان اخر</label>
						<select class="form-control" name="area" id="area">
								<option value="">-- اختر من هنا -- </option>
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
"><?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
						</select>
                                                </div>
				
                                                 <div class="col-lg-2">
						<label>نوع الجهاز</label>
						<select class="form-control" name="device" id="device">
                                                        <option value="">-- اختر من هنا -- </option>
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
"><?php echo $_smarty_tpl->tpl_vars['device1']->value['nameva'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['device1'] = $foreach_device1_Sav;
}
?>
						</select>
                                                 </div>
                                                 <div class="col-lg-2">
						<label>نوع الخدمه</label>
						<select class="form-control" name="service" id="service">
                                                        <option value="">-- اختر من هنا -- </option>
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
"><?php echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['service1'] = $foreach_service1_Sav;
}
?>
						</select>
                                                 </div>
					
                                                 <div class="col-lg-2" id ="transarea2" style="display: none;">
						<label>منطقه النقل </label>
                                                <select class="form-control" name="transarea" id="transarea">
                                                     <option value=0>-- اختر من هنا -- </option>
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
"><?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
						</select>
                                                 </div>
					
                                                 <div class="col-lg-2" id ="md" style="display: none;">
                                                        <label> رقم الموديل </label>
                                                         <input type="text" class="form-control"  id="md1" name="md" >
                                                 </div>
					
                                                 <div class="col-lg-2" id ="pipe" style="display: none;">
                                                        <label> عدد الامتار </label>
                                                         <input type="text" class="form-control"  id="md2" name="metter" placeholder="EX : 5*70">
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
                                                <div class="col-lg-6">
						<label>رقم تليفون اخر</label>
                                                  <input class="form-control" name="phoneo" id="phoneo" >
                                                </div>
                                                <div class="col-lg-6">
						<label>الملاحظات</label>
                                                <textarea class="form-control" rows="2" name="note"></textarea>
                                                </div>
						
                                                
                                                 <div class="col-lg-1 row pull-left marginit">
                                                     <label> </label>
						<button class="btn btn-primary btn-lg " type="submit" name="save" value="LOG IN">اضف عمليه جديده</button>
                                                 <label> </label>
                                                </div>
							</div></div>

				
					 
                                         
					
				</form>			  
			  </div>
				


            </div>
            <!-- /.container-fluid -->
            <div class="alert alert-warning text-right">
                 <strong>ملحوظه</strong><br/> مواعيد العمل في الايام العادية من 9 صباحا حتى 11 مساءا -  ومن 4 عصرا حتى 8 مساءا <br/> مواعيد العمل في رمضان من 1 ظهرا حتى 5 عصرا  ومن 9 صباحا حتى 1 مساءا 
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
                                        $("#md2").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل عدد الامتار"); 
                                    } 
                                    if(data.msg == 6){
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").removeAttr( "style", "border-color: #a94442" );
                                        $("#md1").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل التاريخ"); 
                                    } 
                                    
                                    if(data.msg == 7){
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
                                        var idc = $("#idc").val();
                                        var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str2 + str1);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addorder&id="+idc;}, 2000);
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