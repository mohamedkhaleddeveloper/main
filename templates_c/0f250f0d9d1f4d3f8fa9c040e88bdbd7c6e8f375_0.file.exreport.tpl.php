<?php /* Smarty version 3.1.24, created on 2017-07-11 18:35:59
         compiled from "./templates/admin/ar/exreport.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:100195594959651a8fd7ca86_60908427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f250f0d9d1f4d3f8fa9c040e88bdbd7c6e8f375' => 
    array (
      0 => './templates/admin/ar/exreport.tpl',
      1 => 1497441924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100195594959651a8fd7ca86_60908427',
  'variables' => 
  array (
    'message' => 0,
    'exfrom' => 0,
    'exto' => 0,
    'employee' => 0,
    'employee1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59651a8fde94d8_82479441',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59651a8fde94d8_82479441')) {
function content_59651a8fde94d8_82479441 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '100195594959651a8fd7ca86_60908427';
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
                                <i class="fa fa-fw fa-file"></i> تقرير مصاريف
                            </li>
                        </ol>
			
				
                   
                        <br/><br/><br/><br/>
                  <div class="col-lg-12">
                     
                                       <?php if ($_smarty_tpl->tpl_vars['message']->value == null) {
} else { ?><div id="alert" class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }?>	  		
				 <form class="form" action="addition.php?act=exreports" method="POST">
					
                                            <div class="col-lg-4">
                                                <label>التاريخ من </label>
                                                <input type="text" class="form-control"  id="orderdate" name="exfrom" value="<?php if ($_smarty_tpl->tpl_vars['exfrom']->value == Null) {
} else {
echo $_smarty_tpl->tpl_vars['exfrom']->value;
}?>" placeholder="ادخل التاريخ ">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>التاريخ إلى </label>
                                                <input type="text" class="form-control"  id="orderdate1" name="exto" value="<?php if ($_smarty_tpl->tpl_vars['exto']->value == Null) {
} else {
echo $_smarty_tpl->tpl_vars['exto']->value;
}?>" placeholder="ادخل التاريخ ">
                                            </div>
                                                                <div class="col-lg-2">
						<label> اختر اسم</label>
						<select class="form-control" name="emid" id="emid">
								<option value="">-- اختار اسم --</option>
								<option value= "0">الكل</option>
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
                                                <label> </label>
                                                <div class="row"><button class="btn btn-lg btn-primary" type="submit">بحث</button></div>
                                            </div>
                              
                                
                           
					
				</form>			 			  <br/><br/><br/><br/><br/><br/><br/><br/>
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
        
        	<?php echo '<script'; ?>
>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#orderdate1').datepicker({
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

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
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
	
</body>

</html>
<?php }
}
?>