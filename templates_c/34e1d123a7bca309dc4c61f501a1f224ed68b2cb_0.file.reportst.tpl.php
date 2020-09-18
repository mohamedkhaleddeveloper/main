<?php /* Smarty version 3.1.24, created on 2017-07-13 16:23:00
         compiled from "./templates/admin/ar/reportst.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:179362583959679e64260251_71571256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34e1d123a7bca309dc4c61f501a1f224ed68b2cb' => 
    array (
      0 => './templates/admin/ar/reportst.tpl',
      1 => 1497394710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179362583959679e64260251_71571256',
  'variables' => 
  array (
    'message' => 0,
    'datefrom' => 0,
    'dateto' => 0,
    'payment' => 0,
    'payment1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59679e642d4573_61350141',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59679e642d4573_61350141')) {
function content_59679e642d4573_61350141 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '179362583959679e64260251_71571256';
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
                                <i class="fa fa-fw fa-file"></i> تقرير مده محدده عن الصيانه
                            </li>
                        </ol>
			
				
                   
                        <br/><br/><br/><br/>
                  <div class="col-lg-12">
                     
                                       <?php if ($_smarty_tpl->tpl_vars['message']->value == null) {
} else { ?><div id="alert" class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }?>	  		
				 <form class="form" action="addition.php?act=reportdate" method="POST">
					
                                            <div class="col-lg-3">
                                                <label>التاريخ من </label>
                                                <input type="text" class="form-control"  id="orderdate" name="invdateon" value="<?php if ($_smarty_tpl->tpl_vars['datefrom']->value == Null) {
} else {
echo $_smarty_tpl->tpl_vars['datefrom']->value;
}?>" placeholder="ادخل التاريخ ">
                                            </div>
                                            <div class="col-lg-3">
                                                <label>التاريخ إلى </label>
                                                <input type="text" class="form-control"  id="orderdate1" name="invdateto" value="<?php if ($_smarty_tpl->tpl_vars['datefrom']->value == Null) {
} else {
echo $_smarty_tpl->tpl_vars['dateto']->value;
}?>" placeholder="ادخل التاريخ ">
                                            </div>
                                                                <div class="col-lg-3">
						<label> نوع الفاتورة</label>
						<select class="form-control" name="paymentid" id="paymentid">
								<option value="">-- اختارطريقة الدفع --</option>
								<option value= "0">الكل</option>
                                                                 <?php
$_from = $_smarty_tpl->tpl_vars['payment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['payment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['payment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['payment1']->value) {
$_smarty_tpl->tpl_vars['payment1']->_loop = true;
$foreach_payment1_Sav = $_smarty_tpl->tpl_vars['payment1'];
?>
                                                                     <option value="<?php echo $_smarty_tpl->tpl_vars['payment1']->value['idp'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
</option>
                                                    <?php
$_smarty_tpl->tpl_vars['payment1'] = $foreach_payment1_Sav;
}
?>
                                                                
						</select>
                                                </div>
                                            <div class="col-lg-3">
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