<?php /* Smarty version 3.1.24, created on 2017-07-23 13:13:42
         compiled from "./templates/admin/ar/reportesdate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:350128245974a10623d828_20725121%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a399dd5da1b342f425d16fadf3f1c1f67b95464b' => 
    array (
      0 => './templates/admin/ar/reportesdate.tpl',
      1 => 1500815551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '350128245974a10623d828_20725121',
  'variables' => 
  array (
    'employex' => 0,
    'emnamema' => 0,
    'exto' => 0,
    'exfrom' => 0,
    'dayar1' => 0,
    'excount' => 0,
    'ex' => 0,
    'k' => 0,
    'ex1' => 0,
    'employee' => 0,
    'employee1' => 0,
    'sum_all_foreach' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5974a1062e9ab1_10172108',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5974a1062e9ab1_10172108')) {
function content_5974a1062e9ab1_10172108 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '350128245974a10623d828_20725121';
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
                                <i class="fa fa-file-text"></i> المصاريف
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['employex']->value == 0) {
} else { ?>
                             <li class="active">
                                <i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['emnamema']->value;
}?>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['exto']->value == $_smarty_tpl->tpl_vars['exfrom']->value) {?>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['dayar1']->value;?>

                                 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-downt"></i> التاريخ : <?php echo $_smarty_tpl->tpl_vars['exto']->value;?>

                            </li>
                            <?php } else { ?>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ من : <?php echo $_smarty_tpl->tpl_vars['exto']->value;?>
 /  إلى: <?php echo $_smarty_tpl->tpl_vars['exfrom']->value;?>

                            </li>
                            <?php }?>
                            <li class="active">
                                <i class="fa fa-files-o"></i> عدد الفواتير : <?php echo $_smarty_tpl->tpl_vars['excount']->value;?>

                            </li>
                             
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                
              <div class="col-lg-12">
                  <?php if ($_smarty_tpl->tpl_vars['ex']->value == Null) {?>
                      <h1 class="text-center">لايوجد فواتير بهذا التاريخ  </h1>
                      
                      <?php } else { ?>
                         
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                        <?php if ($_smarty_tpl->tpl_vars['employex']->value == 0) {?><td><strong>الاسم </strong></td><?php } else {
}?>
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                          <td><strong>الملاحظات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['ex']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ex1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ex1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ex1']->value) {
$_smarty_tpl->tpl_vars['ex1']->_loop = true;
$foreach_ex1_Sav = $_smarty_tpl->tpl_vars['ex1'];
?>
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['ex1']->value['billex'] == null) {?>لا يوجد رقم<?php } else {
echo $_smarty_tpl->tpl_vars['ex1']->value['billex'];
}?></td>
                                                <?php if ($_smarty_tpl->tpl_vars['employex']->value == 0) {?>
                                                <td>
                                                  
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
                                                             <?php if ($_smarty_tpl->tpl_vars['employee1']->value['idm'] == $_smarty_tpl->tpl_vars['ex1']->value['idem']) {
echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];
}?>
                                                        <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?> 
                                                   
                                                </td>
                                                <?php } else { ?>
                                                <?php }?>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ex1']->value['priceex'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ex1']->value['discountex'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ex1']->value['totalex'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ex1']->value['notsex'];?>
</td>

                                        </tr>
                                         <?php $_smarty_tpl->tpl_vars["sum_all_foreach"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum_all_foreach']->value+$_smarty_tpl->tpl_vars['ex1']->value['totalex'], null, 0);?>

                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['ex1'] = $foreach_ex1_Sav;
}
?>
                                <tr><td colspan="5">الأجـــــــــمـــــالي</td><td colspan="2"><?php echo $_smarty_tpl->tpl_vars['sum_all_foreach']->value;?>
</td></tr>
                                
                                </tbody>
                            </table>
			  
                                                  
                                        <?php }?>
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