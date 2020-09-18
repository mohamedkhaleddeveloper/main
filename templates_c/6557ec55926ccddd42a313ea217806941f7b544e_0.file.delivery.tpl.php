<?php /* Smarty version 3.1.24, created on 2017-07-11 12:55:19
         compiled from "./templates/admin/ar/delivery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2871780385964cab708a254_88238244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6557ec55926ccddd42a313ea217806941f7b544e' => 
    array (
      0 => './templates/admin/ar/delivery.tpl',
      1 => 1498317862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871780385964cab708a254_88238244',
  'variables' => 
  array (
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumer' => 0,
    'deviceNa' => 0,
    'iduser' => 0,
    'ido' => 0,
    'tech' => 0,
    'tech1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964cab70da102_68341915',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964cab70da102_68341915')) {
function content_5964cab70da102_68341915 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2871780385964cab708a254_88238244';
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
                                <i class="fa fa-fw fa-wrench"></i>  توصيل للعميل
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
						<label>اسم الفني</label>
                                                    <select class="form-control" name="idtech" id="idtech" >
                                                                <option value= 0 >-- اختر من هنا -- </option>
                                                            <?php
$_from = $_smarty_tpl->tpl_vars['tech']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tech1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tech1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tech1']->value) {
$_smarty_tpl->tpl_vars['tech1']->_loop = true;
$foreach_tech1_Sav = $_smarty_tpl->tpl_vars['tech1'];
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['tech1']->value['idm'];?>
"><?php echo $_smarty_tpl->tpl_vars['tech1']->value['namema'];?>
</option>
                                                            <?php
$_smarty_tpl->tpl_vars['tech1'] = $foreach_tech1_Sav;
}
?>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-lg-2">
						<label>التاريخ</label>
                                                  <input type="text" class="form-control"  id="orderdate" name="orderdate" >
                                                 </div>
                                                    <div class="col-lg-2">    
                                                    <label>الوقت</label>
                                                 
					<select class="form-control" name="timeodp" id="timeodp">
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
                                                 <div class="col-lg-2">
						<label>التوقيت</label>
                                                    
					<select class="form-control" name="timingdp" id="timingdp">
								<option value="">اختر </option>
								<option value="am">صباحا </option>
								<option value="pm">عصرا</option>								
							</select>
						</div>
                                                <div class="col-lg-4">
						<label>الملاحظات</label>
                                                <textarea class="form-control" rows="3" name="note" id="note"></textarea>
                                                </div>
                                                
                                               
						
							</div></div>

				
                                             
					<button class="btn btn-primary btn-lg pull-right" type="submit" name="save" value="LOG IN">addition</button>

        
                                 </form>			  
			  </div>
				


            </div>
            <!-- /.container-fluid -->
            <br/>
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
                        url: 'delivery-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#idtech").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك اختر الفني");
                                    }
                                     if(data.msg == 2){
                                        $("#idtech").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك ادخل تاريخ توصيل الجهاز"); 
                                    } 
                                     if(data.msg == 3){
                                        $("#idtech").removeAttr( "style", "border-color: #a94442" );
                                        $("#orderdate").removeAttr( "style", "border-color: #a94442" );
                                        $("#timingdp").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("من فضلك  توقيت توصيل الجهاز"); 
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
        <?php echo '</script'; ?>
>
	
</body>

</html>
<?php }
}
?>