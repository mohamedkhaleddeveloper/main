<?php /* Smarty version 3.1.24, created on 2017-07-14 14:57:40
         compiled from "./templates/admin/ar/reportsca.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13366757075968dbe422dc85_75715504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aab933ceab9773e946d51aeb0cae9a52eb50920' => 
    array (
      0 => './templates/admin/ar/reportsca.tpl',
      1 => 1500044238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13366757075968dbe422dc85_75715504',
  'variables' => 
  array (
    'way55' => 0,
    'way155' => 0,
    'castumerid' => 0,
    'way' => 0,
    'payment1' => 0,
    'castumer' => 0,
    'castumer1' => 0,
    'inv' => 0,
    'k' => 0,
    'inv1' => 0,
    'employee' => 0,
    'employee1' => 0,
    'payment' => 0,
    'invcredite' => 0,
    'invcredite1' => 0,
    'sum_all_foreach' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5968dbe434a523_92333976',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5968dbe434a523_92333976')) {
function content_5968dbe434a523_92333976 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13366757075968dbe422dc85_75715504';
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
                        
                           
                            <ol class="breadcrumb pull-left no-print">
                                
                                  <?php
$_from = $_smarty_tpl->tpl_vars['way55']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['way155'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['way155']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['way155']->value) {
$_smarty_tpl->tpl_vars['way155']->_loop = true;
$foreach_way155_Sav = $_smarty_tpl->tpl_vars['way155'];
?>
                                        
                                            <li class="active">
                                                <a href="addition.php?act=reportsca&payment=<?php echo $_smarty_tpl->tpl_vars['way155']->value['idp'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"_><button class="btn btn-primary" type="button"><?php echo $_smarty_tpl->tpl_vars['way155']->value['namepa'];?>
</button></a>
                                            </li>
                                <?php
$_smarty_tpl->tpl_vars['way155'] = $foreach_way155_Sav;
}
?>
                                 <li class="active">
                                                <a href="addition.php?act=reportsca&payment=8ff&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"_><button class="btn btn-primary" type="button">مسددة</button></a>
                                            </li>
                                        <li class="active">
                                                <a href="addition.php?act=reportsca&payment=0&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"_><button class="btn btn-primary" type="button">جميع الفواتير</button></a>
                                            </li>
                        </ol>
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i> تقرير الفواتير   &nbsp;:&nbsp;<?php if ($_smarty_tpl->tpl_vars['way']->value == 0) {?>  جميع الفواتير<?php } else {
echo $_smarty_tpl->tpl_vars['payment1']->value;
}?>
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
                           
                                      
						 <div class="col-lg-6">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['nameca'];?>

                            </div>
                        </div>  </div>
						<div class="col-lg-6">
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
						
						<h1 class="page-header">		
								
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

               
                  <?php if ($_smarty_tpl->tpl_vars['inv']->value == Null) {?>
                      <h1 class="text-center">لا يوجد فواتير  </h1>
                      
                      <?php } else { ?>
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                       <td><strong>التاريخ</strong></td>
                                        <td><strong>  اسم الفني</strong></td>
                                        <?php if ($_smarty_tpl->tpl_vars['way']->value == 0) {?><td><strong>نوع الفاتورة</strong></td><?php } else {
}?>
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                         <?php if ($_smarty_tpl->tpl_vars['way']->value == 8) {?>  <td><strong>سندات رقم </strong></td><?php }?>
                                                          
                                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['inv']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['inv1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['inv1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['inv1']->value) {
$_smarty_tpl->tpl_vars['inv1']->_loop = true;
$foreach_inv1_Sav = $_smarty_tpl->tpl_vars['inv1'];
?>
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['bill'];?>
</td>
                                                
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['idate'];?>
</td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['inv1']->value['employeeiddp'] == 0) {?>
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
                                                             <?php if ($_smarty_tpl->tpl_vars['inv1']->value['employeeid'] == $_smarty_tpl->tpl_vars['employee1']->value['idm']) {
echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];
}?>
                                                        <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
                                                    <?php } else { ?>
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
                                                             <?php if ($_smarty_tpl->tpl_vars['inv1']->value['employeeiddp'] == $_smarty_tpl->tpl_vars['employee1']->value['idm']) {
echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];
}?>
                                                         <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
                                                    <?php }?>  
                                                </td>
                                                 <?php if ($_smarty_tpl->tpl_vars['way']->value == 0) {?>
                                                <td>
                                                        
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
                                                             <?php if ($_smarty_tpl->tpl_vars['inv1']->value['payment'] == $_smarty_tpl->tpl_vars['payment1']->value['idp']) {?>
                                                             <?php if ($_smarty_tpl->tpl_vars['inv1']->value['payment'] == 5 && $_smarty_tpl->tpl_vars['inv1']->value['totalc'] == $_smarty_tpl->tpl_vars['inv1']->value['credit']) {?>مسددة  <?php } else {
echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];
}?>
                                                             <?php }?>
                                                             
                                                        <?php
$_smarty_tpl->tpl_vars['payment1'] = $foreach_payment1_Sav;
}
?>
                                                   </td><?php } else {
}?>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['price'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['discount'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['totalc'];?>
 </td>
                                                <?php if ($_smarty_tpl->tpl_vars['way']->value == 8) {?>  <td><strong>
                                                  <?php
$_from = $_smarty_tpl->tpl_vars['invcredite']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['invcredite1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['invcredite1']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_invcredite1s'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['invcredite1']->value) {
$_smarty_tpl->tpl_vars['invcredite1']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['total'];
$foreach_invcredite1_Sav = $_smarty_tpl->tpl_vars['invcredite1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['inv1']->value['idi'] == $_smarty_tpl->tpl_vars['invcredite1']->value['idicre']) {?>
                                                                 <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['last'] : null)) {?>
                                                                    <a href="addition.php?act=reportcridt&idcr=<?php echo $_smarty_tpl->tpl_vars['invcredite1']->value['idcrdite'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
&print=2" target="_blank"><button class="btn btn-default" type="button"> <?php echo $_smarty_tpl->tpl_vars['invcredite1']->value['idcrdite'];?>
</button></a>
                                                                 <?php } elseif ((isset($_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_invcredite1s']->value['first'] : null)) {?> 
                                                                 <a href="addition.php?act=reportcridt&idcr=<?php echo $_smarty_tpl->tpl_vars['invcredite1']->value['idcrdite'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
&print=2" target="_blank"><button class="btn btn-default" type="button"> <?php echo $_smarty_tpl->tpl_vars['invcredite1']->value['idcrdite'];?>
</button></a><?php } else { ?> 
                                                                     <a href="addition.php?act=reportcridt&idcr=<?php echo $_smarty_tpl->tpl_vars['invcredite1']->value['idcrdite'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
&print=2" target="_blank"><button class="btn btn-default" type="button"> <?php echo $_smarty_tpl->tpl_vars['invcredite1']->value['idcrdite'];?>
</button></a> -  
                                                                 <?php }?> 
                                                             <?php }?>
                                                             
                                                        <?php
$_smarty_tpl->tpl_vars['invcredite1'] = $foreach_invcredite1_Sav;
}
?>
                                                   </strong></td>
                                                <?php }?>
                                                <?php $_smarty_tpl->tpl_vars["sum_all_foreach"] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum_all_foreach']->value+$_smarty_tpl->tpl_vars['inv1']->value['totalc'], null, 0);?>

                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['inv1'] = $foreach_inv1_Sav;
}
?>
                                <tr><td colspan="<?php if ($_smarty_tpl->tpl_vars['way']->value == 0) {?>7<?php } else { ?>6<?php }?>">الأجـــــــــمـــــالي</td><td><?php echo $_smarty_tpl->tpl_vars['sum_all_foreach']->value;?>
</td><?php if ($_smarty_tpl->tpl_vars['way']->value == 8) {?><td></td><?php }?></tr>
                                
                                </tbody>
                            </table>
			  
						 <hr/>
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