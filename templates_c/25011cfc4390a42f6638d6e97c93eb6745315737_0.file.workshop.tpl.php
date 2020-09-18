<?php /* Smarty version 3.1.24, created on 2017-07-11 12:38:29
         compiled from "./templates/admin/ar/workshop.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4707767365964c6c5af3b22_29478860%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25011cfc4390a42f6638d6e97c93eb6745315737' => 
    array (
      0 => './templates/admin/ar/workshop.tpl',
      1 => 1499590876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4707767365964c6c5af3b22_29478860',
  'variables' => 
  array (
    'prs' => 0,
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumer' => 0,
    'deviceNa' => 0,
    'iduser' => 0,
    'ido' => 0,
    'employee' => 0,
    'employee1' => 0,
    'service' => 0,
    'service1' => 0,
    'area' => 0,
    'area1' => 0,
    'mark' => 0,
    'mark1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964c6c5bd5668_10495082',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964c6c5bd5668_10495082')) {
function content_5964c6c5bd5668_10495082 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4707767365964c6c5af3b22_29478860';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['prs']->value == 3) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("tech/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-cog"></i>  الورشه
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
						 <div class="col-lg-3">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['nameca'];?>

                            </div>
                        </div>  </div>
						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['phonec'];?>

                            </div>
                        </div>  </div>
							<?php
$_smarty_tpl->tpl_vars['castumer1'] = $foreach_castumer1_Sav;
}
?>
						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['areaCastumer']->value;?>

                            </div>
                        </div></div>
                            
                            						<div class="col-lg-3">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الجهاز</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['deviceNa']->value;?>

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
							<input class="form-control" name="ido"  value="<?php echo $_smarty_tpl->tpl_vars['ido']->value;?>
"  type="hidden">
						<?php
$_smarty_tpl->tpl_vars['castumer1'] = $foreach_castumer1_Sav;
}
?>
					<div class="form-group">
                                            <div class="col-lg-12">
                                                
				
                                                 <div class="col-lg-2">
						<label>اختار الفني</label>
						<select class="form-control" name="tech" id="tech">
								<option value="">-- اختار --</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['employee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['employee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['employee1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['employee1']->value) {
$_smarty_tpl->tpl_vars['employee1']->_loop = true;
$foreach_employee1_Sav = $_smarty_tpl->tpl_vars['employee1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['employee1']->value['idm'];?>
"><?php echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
						</select>
                                                </div>
                                                
                                               <div class="col-lg-2">
						<label>الخدمه</label>
						<select class="form-control" name="service" id="service">
								<option value="">-- اختار --</option>
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
                                                         <input type="text" class="form-control"  id="metter" name="metter" placeholder="EX : 5*70">
                                                 </div>
					
                                                
                                                <div class="col-lg-2">
						<label>الماركة</label>
						<select class="form-control" name="mark" id="mark">
								<option value="">-- اختار --</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['mark']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mark1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mark1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mark1']->value) {
$_smarty_tpl->tpl_vars['mark1']->_loop = true;
$foreach_mark1_Sav = $_smarty_tpl->tpl_vars['mark1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['mark1']->value['idmark'];?>
"><?php echo $_smarty_tpl->tpl_vars['mark1']->value['namemarka'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['mark1'] = $foreach_mark1_Sav;
}
?>
						</select>
                                                </div>
					
					
							
						
						 <div class="col-lg-2">
						<label>التاريخ</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
                                               
                                                 <div class="col-lg-2">
						<label>الجهاز او القطعه</label>
                                                    
					<select class="form-control" id="device" name="device">
								<option value=""> -- اختار -- </option>
                                                                <option value="part">القطعه</option>
								<option value="indoor">وحده داخليه </option>
								<option value="outdoor">وحده خارجيه</option>
                                                                <option value="full">كامل</option>
							</select>
						</div>
                                                
                                                 <div class="col-lg-2">
						<label>الوقت الافتراضي للتصليح</label>
                                                    
					<select class="form-control" id="dftime" name="dftime">
                                                               	<option value=0>-- اختر --</option>
								<option value="1">1 يوم</option>
                                                                <option value="2">2 يوم</option>
                                                                <option value="3">3 ايام</option>
                                                                <option value="4">4 ايام</option>
                                                                <option value="5">5 ايام</option>
                                                                <option value="6">6 ايام</option>
                                                                <option value="7">7 ايام</option>
                                                                <option value="8">8 ايام</option>
                                                                <option value="9">9 ايام</option>
                                                                <option value="10">10 ايام</option>
                                                                <option value="11">11 ايام</option>
                                                                <option value="12">12 ايام</option>
                                                                <option value="13">13 ايام</option>
                                                                <option value="14">14 ايام</option>
							</select>
						</div>
                                                
                                                
                                                 <div class="col-lg-4">
						<label>رقم الموديل</label>
                                                  <input type="text" class="form-control"  id="mdn" name="mdn" >
                                                 </div>
                                                
                                                 <div class="col-lg-4">
						<label>الرقم التسلسلي </label>
                                                  <input type="text" class="form-control"  id="sn" name="sn" >
                                                 </div>
                                                
                                                <div class="col-lg-12">
						<label>الملاحظات</label>
                                                <textarea class="form-control" rows="3" name="note"></textarea>
                                                </div>
                                                 <div class="col-lg-1 pull-left">
                                                <label> </label>
                                               <button class="btn btn-primary btn-lg " type="submit" name="save" value="LOG IN">بدأ العمل</button>
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
                        url: 'workshop-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#tech").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك اختر الفني");
                                    }
                                     if(data.msg == 2){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك اختر الخدمه"); 
                                    } 
                                      if(data.msg == 3){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#transarea").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل مكان النقل"); 
                                    } 
                                    if(data.msg == 4){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#md1").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل رقم الموديل"); 
                                    } 
                                     if(data.msg == 5){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#md2").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل عدد الامتار"); 
                                    } 
                                      if(data.msg == 6){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#mark").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك اختر ماركة الجهاز"); 
                                    } 
                                     if(data.msg == 7){
                                         $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#mark").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل تاريخ دخول الجهاز الى الورشه"); 
                                    } 
                                      if(data.msg == 8){
                                         $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#mark").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#device").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك اختر القطعه"); 
                                    } 
                                    if(data.msg == 9){
                                        $("#tech").removeAttr( "style", "border-color: #a94442" );
                                        $("#service").removeAttr( "style", "border-color: #a94442" );
                                        $("#mark").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#device").removeAttr( "style", "border-color: #a94442" );
                                        $("#dftime").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك اختر الوقت الافتراضي للتصليح"); 
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
                                        var str1 = "<strong>  تم ادخال الجهاز الورشه بنجاح </strong> ";
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
        <?php echo '</script'; ?>
>
	
</body>

</html>
<?php }
}
?>