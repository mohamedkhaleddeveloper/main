<?php /* Smarty version 3.1.24, created on 2017-07-11 08:04:27
         compiled from "./templates/admin/ar/searchcastumer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3928386665964868b724fd7_10292773%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4a599850a53e777a2a9a0abd1e9dc53180c03fd' => 
    array (
      0 => './templates/admin/ar/searchcastumer.tpl',
      1 => 1497303648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3928386665964868b724fd7_10292773',
  'variables' => 
  array (
    'message' => 0,
    'searchway' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964868b8d00a4_75028840',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964868b8d00a4_75028840')) {
function content_5964868b8d00a4_75028840 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3928386665964868b724fd7_10292773';
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
                        <h1 class="page-header">
                            العملاء <small>البحث عن عميل</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> العملاء
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
                                        <?php if ($_smarty_tpl->tpl_vars['message']->value == null) {
} else { ?><div id="alert" class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }?>
			  		
				 <form class="form" action="addition.php?act=getcastumer" method="POST">
					<!--<div class="form-group">
						<label>جوال العميل</label>
						
					</div>
					<button class="btn btn-primary btn-lg" type="submit" name="save" value="LOG IN">بــــحــــــث</button>-->
                                       
                                            <div class="col-lg-3">
						
						<select class="form-control" name="searchway" id="searchway">
								<option value="">-- اختر طريقه البحث -- </option>
                                                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['searchway']->value == 1) {?>selected<?php } else {
}?>>اسم العميل</option>
                                                                <option value="2"<?php if ($_smarty_tpl->tpl_vars['searchway']->value == 2) {?>selected<?php } else {
}?>>رقم الجوال</option>
                                                </select>
                                            </div>
                                
                                        
					<div class="form-group input-group col-lg-9">
                                <input type="text" class="form-control"  maxlength="10"  name="phone" placeholder="ادخل الاسم او رقم الجوال "  />
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
                            </div>
					
				</form>			  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
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