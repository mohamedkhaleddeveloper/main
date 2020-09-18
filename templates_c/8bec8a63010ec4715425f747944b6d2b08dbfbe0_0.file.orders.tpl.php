<?php /* Smarty version 3.1.24, created on 2017-07-17 08:47:43
         compiled from "./templates/admin/ar/orders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:880862969596c79afee6370_83375627%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bec8a63010ec4715425f747944b6d2b08dbfbe0' => 
    array (
      0 => './templates/admin/ar/orders.tpl',
      1 => 1500281255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '880862969596c79afee6370_83375627',
  'variables' => 
  array (
    'action' => 0,
    'dayar1' => 0,
    'orderDate' => 0,
    'orderNowCount' => 0,
    'orderNowCountA' => 0,
    'orderNowAm' => 0,
    'k' => 0,
    'orderNowAm1' => 0,
    'area' => 0,
    'area1' => 0,
    'orderNowdDlAm' => 0,
    'orderNowDl1' => 0,
    'factor' => 0,
    'factor1' => 0,
    'orderdate22' => 0,
    'orderNowCountP' => 0,
    'orderNowPm' => 0,
    'orderNowPm1' => 0,
    'orderNowdDlPm' => 0,
    'orderNowdDlPm1' => 0,
    'orderactive' => 0,
    'orderNowCountAc' => 0,
    'orderNow' => 0,
    'resultEmployeeActive' => 0,
    'resultEmployeeActive1' => 0,
    'idm' => 0,
    'employeename' => 0,
    'actm' => 0,
    'ordershowAm' => 0,
    'ordershowAm1' => 0,
    'service' => 0,
    'service1' => 0,
    'iduser' => 0,
    'ordershowAmDl' => 0,
    'ordershowAmDl1' => 0,
    'orderNowCountPc' => 0,
    'ordershowPm' => 0,
    'ordershowPm1' => 0,
    'ordershowPmDl' => 0,
    'ordershowPmDl1' => 0,
    'day' => 0,
    'todayf' => 0,
    'resultEmployeeRun' => 0,
    'resultEmployeeRun1' => 0,
    'ordershowRun' => 0,
    'ordershowRun1' => 0,
    'now' => 0,
    'mark' => 0,
    'mark1' => 0,
    'arealoop' => 0,
    'arealoop1' => 0,
    'serviceOrder' => 0,
    'serviceOrder1' => 0,
    'castumename' => 0,
    'phonec' => 0,
    'areaCastumer' => 0,
    'orderunactiveCount' => 0,
    'orderunactive' => 0,
    'orderunactive1' => 0,
    'orderPen1' => 0,
    'orderpenCount' => 0,
    'orderpen' => 0,
    'orderpen1' => 0,
    'ordercancleCount' => 0,
    'ordercancle' => 0,
    'ordercancle1' => 0,
    'employee' => 0,
    'employee1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_596c79b0602265_58427589',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596c79b0602265_58427589')) {
function content_596c79b0602265_58427589 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/alsubtain/public_html/main/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '880862969596c79afee6370_83375627';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">
                
              
                
                <!------------------------------------------------- Order Date ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderdate') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['dayar1']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : <?php echo $_smarty_tpl->tpl_vars['orderDate']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات اليوميه
                            </li>
                          
                             <li class="active">
                                <i class="fa fa-fw fa-newspaper-o"></i> عدد العمليات  :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     <?php if ($_smarty_tpl->tpl_vars['orderNowCountA']->value == '0') {?> 
                                            <h1 class="text-center">لا يوجد عمليات هذا الصباح</h1> 
                                      <?php }?>
                                         
                                                                                      
                                                 
                                   
                                <?php if ($_smarty_tpl->tpl_vars['orderNowAm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="11"><strong>صباحا</strong></td></tr>
                                    <tr class="active text-center"><td colspan="11"><strong>جديد</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>تفعيل </strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['orderNowAm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderNowAm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderNowAm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderNowAm1']->value) {
$_smarty_tpl->tpl_vars['orderNowAm1']->_loop = true;
$foreach_orderNowAm1_Sav = $_smarty_tpl->tpl_vars['orderNowAm1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['ido'];?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderNowAm1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['nameva'];?>
</td>
                                                 <td>
                                                   
                                                   <?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['nservicea'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['orderNowAm1']->value['idserv'] == 3) {?> الى 
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['orderNowAm1']->value['areatransid']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>

                                                                <?php }?>
                                                         <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowAm1']->value['idserv'] == 4) {?> رقم الموديل: <?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['mdn'];?>
 <?php }?>
                                                    
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['nameaa'];?>
</td>
                                                <td><a href="addition.php?act=activeorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['idc'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderDate']->value;?>
"><button class="btn btn-sm btn-primary" type="button">تفعيل </button></a></td> 
                                                <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderNowAm1'] = $foreach_orderNowAm1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                          
                            <?php if ($_smarty_tpl->tpl_vars['orderNowdDlAm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>صباحا</strong></td></tr>
                                    <tr class="active text-center"><td colspan="13"><strong> توصيل وتركيب</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>النوع</strong></td>
                                        <td><strong>الخدمة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الفني</strong></td>
                                        <td><strong>تعديل </strong></td>
                                        <td><strong>تأكيد </strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
$_from = $_smarty_tpl->tpl_vars['orderNowdDlAm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderNowDl1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderNowDl1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderNowDl1']->value) {
$_smarty_tpl->tpl_vars['orderNowDl1']->_loop = true;
$foreach_orderNowDl1_Sav = $_smarty_tpl->tpl_vars['orderNowDl1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['ido'];?>
</td>
                                                 <td> <?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['timodp'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['timingdp'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['nameva'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['nservicea'];?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['poseplt'] == "fill") {?>كامل<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['poseplt'] == "indoor") {?>وحده داخلية<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['poseplt'] == "outdoor") {?>وحده خارجيه<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['poseplt'] == "part") {?>قطعه<?php }?>
                                                
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['nameaa'];?>
</td>
                                                <td><?php
$_from = $_smarty_tpl->tpl_vars['factor']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['factor1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['factor1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['factor1']->value) {
$_smarty_tpl->tpl_vars['factor1']->_loop = true;
$foreach_factor1_Sav = $_smarty_tpl->tpl_vars['factor1'];
?>
                                                         <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['employeeiddp'] == $_smarty_tpl->tpl_vars['factor1']->value['idm']) {?>
                                                             <?php echo $_smarty_tpl->tpl_vars['factor1']->value['namema'];?>
 
                                                         <?php }?>
                                                         
                                                <?php
$_smarty_tpl->tpl_vars['factor1'] = $foreach_factor1_Sav;
}
?>
                                                   </td>
                                                <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['process'] == 9) {?>
                                                     <td colspan="3"><button class="btn btn-sm btn-success" type="button">تم تأكيد الطلب بنجاح</td>
                                                <?php } else { ?>
                                                <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                                 <td> <form action="" method="POST">
                                                        <input type="hidden" name="idorder" value="<?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['ido'];?>
" />
                                                        <input type='hidden' name='orderdate' value='<?php echo $_smarty_tpl->tpl_vars['orderdate22']->value;?>
' />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="تأكيد">
                                                            </form> </td>
                                                             <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                                            <?php }?>
                                               
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderNowDl1'] = $foreach_orderNowDl1_Sav;
}
?>
                                </tbody>
                            </table>
                                 <hr/><hr/><hr/>
			  <?php }?>
                               
                                
                                 <?php if ($_smarty_tpl->tpl_vars['orderNowCountP']->value == '0') {?> 
                                            <h1 class="text-center">لا يوجد عمليات هذاالمساء</h1> 
                                       <?php }?>
                                         
                           
                                <?php if ($_smarty_tpl->tpl_vars['orderNowPm']->value == null) {?>
                                        
                                <?php } else { ?>
                                                       <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="11"><strong>مساءا</strong></td></tr>
                                    <tr class="active text-center"><td colspan="11"><strong>جديد</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>تفعيل </strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['orderNowPm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderNowPm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderNowPm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderNowPm1']->value) {
$_smarty_tpl->tpl_vars['orderNowPm1']->_loop = true;
$foreach_orderNowPm1_Sav = $_smarty_tpl->tpl_vars['orderNowPm1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['ido'];?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderNowPm1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>

                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['nameva'];?>
</td>
                                                <td>
                                                   
                                                   <?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['nservicea'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['orderNowPm1']->value['idserv'] == 3) {?> الى 
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['orderNowPm1']->value['areatransid']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>

                                                                <?php }?>
                                                         <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowPm1']->value['idserv'] == 4) {?> رقم الموديل: <?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['mdn'];?>
 <?php }?>
                                                    
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['nameaa'];?>
</td>
                                                <td><a href="addition.php?act=activeorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['idc'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderDate']->value;?>
"><button class="btn btn-sm btn-primary" type="button">تفعيل </button></a></td>
                                                       
                                                <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderNowPm1'] = $foreach_orderNowPm1_Sav;
}
?>
                                </tbody>
                            </table>
                                        
			  </div>
				
                        <?php }?>
                        
                        
                        
                             <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>مساءا</strong></td></tr>
                                    <tr class="active text-center"><td colspan="13"><strong> توصيل وتركيب</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>النوع</strong></td>
                                        <td><strong>الخدمة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الفني</strong></td>
                                        <td><strong>تعديل </strong></td>
                                        <td><strong>تأكيد </strong></td>
                                        <td><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
$_from = $_smarty_tpl->tpl_vars['orderNowdDlPm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderNowdDlPm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderNowdDlPm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value) {
$_smarty_tpl->tpl_vars['orderNowdDlPm1']->_loop = true;
$foreach_orderNowdDlPm1_Sav = $_smarty_tpl->tpl_vars['orderNowdDlPm1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['ido'];?>
</td>
                                                 <td> <?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['nameva'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['nservicea'];?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['poseplt'] == "fill") {?>كامل<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['poseplt'] == "indoor") {?>وحده داخلية<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['poseplt'] == "outdoor") {?>وحده خارجيه<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['poseplt'] == "part") {?>قطعه<?php }?>
                                                
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['nameaa'];?>
</td>
                                                <td><?php
$_from = $_smarty_tpl->tpl_vars['factor']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['factor1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['factor1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['factor1']->value) {
$_smarty_tpl->tpl_vars['factor1']->_loop = true;
$foreach_factor1_Sav = $_smarty_tpl->tpl_vars['factor1'];
?>
                                                         <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['employeeiddp'] == $_smarty_tpl->tpl_vars['factor1']->value['idm']) {?>
                                                             <?php echo $_smarty_tpl->tpl_vars['factor1']->value['namema'];?>
 
                                                         <?php }?>
                                                         
                                                <?php
$_smarty_tpl->tpl_vars['factor1'] = $foreach_factor1_Sav;
}
?>
                                                   </td>
                                                <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['process'] == 9) {?>
                                                     <td colspan="3"><button class="btn btn-sm btn-success" type="button">تم تأكيد الطلب بنجاح</td>
                                                <?php } else { ?>
                                                <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                                 <td> <form action="" method="POST">
                                                        <input type="hidden" name="idorder" value="<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['ido'];?>
" />
                                                        <input type='hidden' name='orderdate' value='<?php echo $_smarty_tpl->tpl_vars['orderdate22']->value;?>
' />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="تأكيد">
                                                            </form> </td>
                                                             <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                                            <?php }?>
                                               
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderNowdDlPm1'] = $foreach_orderNowdDlPm1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                <?php }?>
		<!------------------------------------------------- /Order Date ------------------------------------------------------>
			
		<!------------------------------------------------- Order Active ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderactive') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات المفعله
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['dayar1']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : <?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المفعله :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">
                                     <?php if ($_smarty_tpl->tpl_vars['orderNowCount']->value == '0') {?> 
                                            <h1 class="text-center">لا يوجد عمليات مفعله  </h1> 
                                     <?php } else { ?>
                                         
                                              <?php if ($_smarty_tpl->tpl_vars['orderNowCountAc']->value < '1') {?>
                                                       <h1 class="text-center">  لم يتم اجراء اي من العمليات</h1> 
                                              <?php } elseif ($_smarty_tpl->tpl_vars['orderNowCountAc']->value > '2') {?>
                                                          <h1 class="text-center">تم إجراء عدد   <?php echo $_smarty_tpl->tpl_vars['orderNowCountAc']->value;?>
  عمليات   </h1> 
                                              <?php } else { ?>
                                                    <h1 class="text-center">تم إجراء عدد   <?php echo $_smarty_tpl->tpl_vars['orderNowCountAc']->value;?>
  عمليه   </h1> 
                                                 <?php }?>
                                                                                                 
                                                 
                                     <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['orderNow']->value == null) {?>
                                      
                                <?php } else { ?>
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>اسم الفني</strong></td>
                                         <td><strong> المفعله صباحا	</strong></td>
                                          <td><strong> توصيل وتركيب صباحا	</strong></td>
                                           <td><strong>المفعله مساءا	</strong></td>
                                            <td><strong>توصيل وتركي مساءا	</strong></td>
                                          <td><strong>عرض العمليات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    <?php
$_from = $_smarty_tpl->tpl_vars['resultEmployeeActive']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['resultEmployeeActive1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['resultEmployeeActive1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value) {
$_smarty_tpl->tpl_vars['resultEmployeeActive1']->_loop = true;
$foreach_resultEmployeeActive1_Sav = $_smarty_tpl->tpl_vars['resultEmployeeActive1'];
?>
                                        <tr>   
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[1];?>
  </td>
                                                <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[3] == 0 && $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[4] == 0 && $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[5] == 0 && $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[6] == 0) {?>
                                                     <td colspan="5"> لا يوجد عمليات مفعله </td>
                                                <?php } else { ?> 
                                                    <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[3] == 0) {?>   
                                                        <td> لا يوجد عمليات مفعله </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[3];?>
</td>
                                                    <?php }?>
                                                     
                                                    <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[5] == 0) {?>   
                                                        <td> لا يوجد عمليات مفعله </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[5];?>
</td>
                                                    <?php }?>
                                                     <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[4] == 0) {?>   
                                                        <td> لا يوجد عمليات مفعله </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[4];?>
</td>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[6] == 0) {?>   
                                                        <td> لا يوجد عمليات مفعله </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[6];?>
</td>
                                                    <?php }?>
                                                 <td><a href="addition.php?act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[0];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=all"><button class="btn btn-sm btn-primary" type="button">عرض</button></a></td>                                               
                                                <?php }?>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['resultEmployeeActive1'] = $foreach_resultEmployeeActive1_Sav;
}
?>
                                
                                </tbody>
                            </table>
			  <?php }?>
                                <br/>
                                
                                
                              

                                  
                            
                       
                                    
                                        <br/>    <br/>    <br/>    <br/>
			  </div>
				
          
                                <?php }?>
                    <!------------------------------------------------- /Order Active ------------------------------------------------------>
                    
                    <!------------------------------------------------- Order Active Show ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'techactiveshow') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات المفعله
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['dayar1']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : <?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المفعله :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                              
                                
                                  
                                 <li class="active pull-left no-print">
                                                <a href="addition.php?act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=am"_><button class="btn btn-primary" type="button">صباحا</button></a>
                                            </li>
                                        <li class="active pull-left no-print">
                                                <a href="  addition.php?act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=pm"_><button class="btn btn-primary" type="button"> مساءا </button></a>
                                            </li>
                                              <li class="active pull-left no-print">
                                                <a href="  addition.php?act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=all"_><button class="btn btn-primary" type="button"> الكل </button></a>
                                            </li>
                                            
                                            
                       
                            
                        </ol>
                            
                            
                        
                    </div>
                </div>
                <!-- /.row -->
                <h1>اسم العامل : <?php echo $_smarty_tpl->tpl_vars['employeename']->value;?>
</h1>
				<!-- Order Now -->
				<?php if ($_smarty_tpl->tpl_vars['actm']->value == 'am' || $_smarty_tpl->tpl_vars['actm']->value == 'all') {?>  
                                     <?php if ($_smarty_tpl->tpl_vars['orderNowCountA']->value == '0') {?> 
                                            <h1 class="text-center">لا يوجد عمليات مفعله هذا الصباح</h1> 
                                     <?php } else { ?>
                                         
                                              <?php if ($_smarty_tpl->tpl_vars['orderNowCountAc']->value < '1') {?>
                                                       <h1 class="text-center">  لم يتم اجراء اي من العمليات</h1> 
                                              <?php } elseif ($_smarty_tpl->tpl_vars['orderNowCountAc']->value > '2') {?>
                                                          <h1 class="text-center">تم إجراء عدد   <?php echo $_smarty_tpl->tpl_vars['orderNowCountAc']->value;?>
  عمليات هذا الصباح  </h1> 
                                              <?php } else { ?>
                                                    <h1 class="text-center">تم إجراء عدد   <?php echo $_smarty_tpl->tpl_vars['orderNowCountAc']->value;?>
  عمليه هذا الصباح     </h1> 
                                                 <?php }?>
                                                                                                 
                                                 
                                     <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['ordershowAm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>صباحا جديد</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                         <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowAm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowAm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowAm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowAm1']->value) {
$_smarty_tpl->tpl_vars['ordershowAm1']->_loop = true;
$foreach_ordershowAm1_Sav = $_smarty_tpl->tpl_vars['ordershowAm1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['timeo'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['nameva'];?>
</td>
                                                 <td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['service1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['service1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['service1']->value) {
$_smarty_tpl->tpl_vars['service1']->_loop = true;
$foreach_service1_Sav = $_smarty_tpl->tpl_vars['service1'];
?>
                                                     <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == $_smarty_tpl->tpl_vars['ordershowAm1']->value['idservo']) {
echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];
}?>
                                                     <?php
$_smarty_tpl->tpl_vars['service1'] = $foreach_service1_Sav;
}
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['idservo'] == 3) {?> الى 
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['ordershowAm1']->value['areatransid']) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>

                                                                    <?php }?>
                                                             <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['idservo'] == 4) {?> رقم الموديل: <?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['mdn'];?>
 <?php }?>
                                                     
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['phonec'];?>
<br/> <?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['phoneo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['nameaa'];?>
</td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['process'] == 1) {?> 
                                                        <span class=" btn-sm btn-danger"> لم يشاهد</span>
                                                    <?php } else { ?>
                                                        <span class=" btn-sm btn-success"> شاهد </span> 
                                                    <?php }?>
                                                   
                                                </td>
                                               
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['process'] == 3) {?>
                                                        <td>
                                                         <span class=" btn-sm btn-success">جاريه  </span>
                                                           </td>
                                                            <td><a href="addition.php?act=workshop&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> الورشه</button></a></td>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['ordershowAm1']->value['process'] == 4) {?>
                                                        <td colspan="2"> <span class=" btn-sm btn-warning">بالورشه </span></td>
                                                      <?php } else { ?>
                                                          <td colspan="2" >
                                                        <form action="addition.php?act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['employeeid'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=all" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
                                                        <input type="hidden" name="idorder" value="<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="إجراء">
                                                    </form> 
                                                       </td>  
                                                        <?php }?>
                                                
                                                <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button">انهاء المعامله</button></a></td>
                                                <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowAm1'] = $foreach_ordershowAm1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                </div>
                                
                          <?php if ($_smarty_tpl->tpl_vars['ordershowAmDl']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="12"><strong>صباحا توصيل وتركيب</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowAmDl']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowAmDl1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowAmDl1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowAmDl1']->value) {
$_smarty_tpl->tpl_vars['ordershowAmDl1']->_loop = true;
$foreach_ordershowAmDl1_Sav = $_smarty_tpl->tpl_vars['ordershowAmDl1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['ido'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['timodp'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordershowAmDl1']->value['timingdp'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['nameva'];?>
</td>
                                                <td> 
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAmDl1']->value['poseplt'] == "part") {?>قطعه<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAmDl1']->value['poseplt'] == "indoor") {?>وحده داخليه<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAmDl1']->value['poseplt'] == "outdoor") {?>وحده خارجيه<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAmDl1']->value['poseplt'] == "full") {?>كامل<?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['phonec'];?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['phoneo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['nameaa'];?>
</td>
                                                
         
                                                
                                                <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button">انهاء المعامله</button></a></td>
                                                <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowAmDl1'] = $foreach_ordershowAmDl1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }
}?>
                                </div>
                              
                                <?php if ($_smarty_tpl->tpl_vars['actm']->value == 'pm' || $_smarty_tpl->tpl_vars['actm']->value == 'all') {?> 
                                 <?php if ($_smarty_tpl->tpl_vars['orderNowCountP']->value == '0') {?> 
                                            <h1 class="text-center">لا يوجد عمليات مفعله هذاالمساء</h1> 
                                     <?php } else { ?>
                                         
                                              <?php if ($_smarty_tpl->tpl_vars['orderNowCountPc']->value < '1') {?>
                                                       <h1 class="text-center">  لم يتم إجراء اي من العمليات</h1> 
                                              <?php } elseif ($_smarty_tpl->tpl_vars['orderNowCountPc']->value > '2') {?>
                                                          <h1 class="text-center">تم إجراء عدد   <?php echo $_smarty_tpl->tpl_vars['orderNowCountPc']->value;?>
  عمليات  هذا المساء </h1> 
                                              <?php } else { ?>
                                                    <h1 class="text-center">تم إجراء عدد   <?php echo $_smarty_tpl->tpl_vars['orderNowCountPc']->value;?>
  عمليه  هذا المساء </h1> 
                                                 <?php }?>
                                                                                                 
                                                 
                                     <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['ordershowPm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong> مساءا جديد</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                         <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowPm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowPm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowPm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowPm1']->value) {
$_smarty_tpl->tpl_vars['ordershowPm1']->_loop = true;
$foreach_ordershowPm1_Sav = $_smarty_tpl->tpl_vars['ordershowPm1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['timeo'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['nameva'];?>
</td>
                                                 <td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['service1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['service1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['service1']->value) {
$_smarty_tpl->tpl_vars['service1']->_loop = true;
$foreach_service1_Sav = $_smarty_tpl->tpl_vars['service1'];
?>
                                                     <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == $_smarty_tpl->tpl_vars['ordershowPm1']->value['idservo']) {
echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];
}?>
                                                     <?php
$_smarty_tpl->tpl_vars['service1'] = $foreach_service1_Sav;
}
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['idservo'] == 3) {?> الى 
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['ordershowPm1']->value['areatransid']) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['area1']->value['nameaa'];?>

                                                                    <?php }?>
                                                             <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['idservo'] == 4) {?> رقم الموديل: <?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['mdn'];?>
 <?php }?>
                                                     
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['phonec'];?>
  <br/> <?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['phoneo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['nameaa'];?>
</td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['process'] == 1) {?> 
                                                        <span class=" btn-sm btn-danger"> لم يشاهد</span>
                                                    <?php } else { ?>
                                                        <span class=" btn-sm btn-success"> شاهد </span> 
                                                    <?php }?>
                                                   
                                                </td>
                                               
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['process'] == 3) {?>
                                                        <td>
                                                         <span class=" btn-sm btn-success">جاريه  </span>
                                                           </td>
                                                           <td><a href="addition.php?act=workshop&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> الورشه</button></a></td>
                                                           
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['ordershowPm1']->value['process'] == 4) {?>
                                                        <td colspan="2"> <span class=" btn-sm btn-warning">بالورشه </span></td>
                                                      <?php } else { ?>
                                                          <td colspan="2">
                                                        <form action="addition.php?act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['employeeid'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=all" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
                                                        <input type="hidden" name="idorder" value="<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="إجراء">
                                                    </form> 
                                                       </td> 
                                                        <?php }?>
                                                
                                                <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button">انهاء المعامله</button></a></td>
                                                <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowPm1'] = $foreach_ordershowPm1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                          
                           <?php if ($_smarty_tpl->tpl_vars['ordershowPmDl']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="12"><strong>مساءا  توصيل وتركيب</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td colspan="5"><strong> المعامله</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowPmDl']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowPmDl1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowPmDl1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowPmDl1']->value) {
$_smarty_tpl->tpl_vars['ordershowPmDl1']->_loop = true;
$foreach_ordershowPmDl1_Sav = $_smarty_tpl->tpl_vars['ordershowPmDl1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['ido'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['timodp'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordershowPmDl']->value['timingdp'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['nameva'];?>
</td>
                                                 <td> 
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPmDl1']->value['poseplt'] == "part") {?>قطعه<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPmDl1']->value['poseplt'] == "indoor") {?>وحده داخليه<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPmDl1']->value['poseplt'] == "outdoor") {?>وحده خارجيه<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPmDl1']->value['poseplt'] == "full") {?>كامل<?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['phonec'];?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['phoneo'];?>
</td></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['nameaa'];?>
</td>
                                                
         
                                                
                                                <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button">انهاء المعامله</button></a></td>
                                                <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">الغاء المعامله</button></a></td>
                                     </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowPmDl1'] = $foreach_ordershowPmDl1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                </div>
                                    
                                        <br/>    <br/>    <br/>    <br/>
			 
				
                                <?php }?> <?php }?>
                    <!------------------------------------------------- /Order Active Show------------------------------------------------------>
                    
                   
                    <!------------------------------------------------- Order Runing ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderuning') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الجاريه  
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الجاريه :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                             
                               
                                <?php if ($_smarty_tpl->tpl_vars['orderNowCount']->value == null) {?>
                                   <br/><br/><br/><h1 class="text-center">لا يوجد اي عمليات جاريه بالورشه </h1><br/><br/><br/><br/><br/><br/><br/><br/>
                                <?php } else { ?>
                                         
                     <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>اسم الفني</strong></td>
                                         <td><strong>عدد العمليات 	</strong></td>
                                          <td><strong> العمليات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    <?php
$_from = $_smarty_tpl->tpl_vars['resultEmployeeRun']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['resultEmployeeRun1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['resultEmployeeRun1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['resultEmployeeRun1']->value) {
$_smarty_tpl->tpl_vars['resultEmployeeRun1']->_loop = true;
$foreach_resultEmployeeRun1_Sav = $_smarty_tpl->tpl_vars['resultEmployeeRun1'];
?>
                                        <tr>   
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['resultEmployeeRun1']->value[1];?>
  </td>
                                                <?php if ($_smarty_tpl->tpl_vars['resultEmployeeRun1']->value[3] == 0) {?>
                                                      <td> لا يوجد عمليات جاريه </td>
                                                   <td><button class="btn btn-sm btn-danger" type="button"><i class="fa fa-times"></i></button></a></td>
                                                <?php } else { ?> 
                                                    <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeRun1']->value[3];?>
</td>
                                                 <td><a href="addition.php?act=orderuningashow&id=<?php echo $_smarty_tpl->tpl_vars['resultEmployeeRun1']->value[0];?>
"><button class="btn btn-sm btn-primary" type="button">عرض</button></a></td>                                               
                                                <?php }?>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['resultEmployeeRun1'] = $foreach_resultEmployeeRun1_Sav;
}
?>
                                
                                </tbody>
                            </table>
			  <?php }?>
                                </div><br/>
                                
                                <?php }?>
                    <!------------------------------------------------- /Order Runing ------------------------------------------------------>
                    
                    
                        
                    <!------------------------------------------------- Order Runing Show Tech ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderuningashow') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الجاريه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الجاريه :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                          
                               
                        </ol>
                            
                            <ol class="breadcrumb">
                                <li class="active"></li>
                                <li class="active pull-left">
                                                <button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button> جاريه
                                                <button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button> الورشه
                                                <button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button> لم تم التصليح
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button> تم التلصيح 
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button>  التوصيل
                            </li>
                           
                               
                             </ol>
                    </div>
                </div>
                <!-- /.row -->
                <h1>اسم العامل : <?php echo $_smarty_tpl->tpl_vars['employeename']->value;?>
</h1>
				<!-- Order Now -->
				 <div class="table-responsive">

                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun']->value == null) {?>
                                    <h1 class="text-center">لا يوجد عمليات جاريه </h1>
                                <?php } else { ?>
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات الجاريه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الحاله</strong></td>
                                        <td colspan="5"><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowRun']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowRun1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowRun1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowRun1']->value) {
$_smarty_tpl->tpl_vars['ordershowRun1']->_loop = true;
$foreach_ordershowRun1_Sav = $_smarty_tpl->tpl_vars['ordershowRun1'];
?>
                                           <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
  </td>
                                                <td>
                                                    <?php ob_start();
echo strtotime($_smarty_tpl->tpl_vars['ordershowRun1']->value['orderdate']);
$_tmp1=ob_get_clean();
if ((($_smarty_tpl->tpl_vars['now']->value-$_tmp1)/86400) == 0) {?> اليوم <?php } else { ?>  <?php echo sprintf("%d",(($_smarty_tpl->tpl_vars['now']->value-strtotime($_smarty_tpl->tpl_vars['ordershowRun1']->value['orderdate']))/86400));?>
 يوم &nbsp; <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nameaa'];?>
</td>
                                                <td>
                                                     <?php
$_from = $_smarty_tpl->tpl_vars['mark']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mark1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mark1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['mark1']->value) {
$_smarty_tpl->tpl_vars['mark1']->_loop = true;
$foreach_mark1_Sav = $_smarty_tpl->tpl_vars['mark1'];
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idmark'] == $_smarty_tpl->tpl_vars['mark1']->value['idmark']) {
echo $_smarty_tpl->tpl_vars['mark1']->value['namemarka'];
}?>
                                                   
                                                    <?php
$_smarty_tpl->tpl_vars['mark1'] = $foreach_mark1_Sav;
}
?>
                                                     <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idmark'] == 0) {?>غير معرف<?php }?>
                                                      
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nameva'];?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idservo'] == 3) {?>نقل إل
                                                     <?php
$_from = $_smarty_tpl->tpl_vars['arealoop']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['arealoop1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['arealoop1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arealoop1']->value) {
$_smarty_tpl->tpl_vars['arealoop1']->_loop = true;
$foreach_arealoop1_Sav = $_smarty_tpl->tpl_vars['arealoop1'];
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['areatransid'] == $_smarty_tpl->tpl_vars['arealoop1']->value['ida']) {?> 
                                                            <?php echo $_smarty_tpl->tpl_vars['arealoop1']->value['nameaa'];?>

                                                    <?php }?>
                                                     <?php
$_smarty_tpl->tpl_vars['arealoop1'] = $foreach_arealoop1_Sav;
}
?>
                                                    <?php } else {
echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nservicea'];?>

                                                    <?php }?></td>
                                                <td>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "part") {?>قطعه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "indoor") {?>وحده داخليه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "outdoor") {?>وحده خارجيه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "full") {?>كامل<?php }?>
                                                </td>
                                                <td>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 3) {?><button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 4) {?><button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 5) {?><button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 6) {?><button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 7) {?><button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa-truck"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 8) {?><button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button><?php }?>
                                                </td>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 3) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="4"><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 4) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td><a href="addition.php?act=repair&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button">  <i class="fa fa-fw fa-wrench"></i>   </button></a></td>
                                                    <td><a href="addition.php?act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 5) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 6) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 7) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                
                                        </tr>
                                        <tr>
                                            <td>الخدمات المقدمه</td>
                                            <td colspan="15">
                                                 <?php
$_from = $_smarty_tpl->tpl_vars['serviceOrder']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['serviceOrder1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['serviceOrder1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['serviceOrder1']->value) {
$_smarty_tpl->tpl_vars['serviceOrder1']->_loop = true;
$foreach_serviceOrder1_Sav = $_smarty_tpl->tpl_vars['serviceOrder1'];
?>
                                                   
                                                    <?php if ($_smarty_tpl->tpl_vars['serviceOrder1']->value['idoservice'] == $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido']) {?>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['service1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['service1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_serviceff'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['service1']->value) {
$_smarty_tpl->tpl_vars['service1']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_serviceff']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_serviceff']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_serviceff']->value['total'];
$foreach_service1_Sav = $_smarty_tpl->tpl_vars['service1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == $_smarty_tpl->tpl_vars['serviceOrder1']->value['serviceido']) {?>
                                                               <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last'] : null)) {
echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];
} else { ?> <?php echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];?>
 -<?php }?>
                                                               
                                                            <?php }?>
                                                            <?php
$_smarty_tpl->tpl_vars['service1'] = $foreach_service1_Sav;
}
?>
                                                   <?php }?>
                                                 <?php
$_smarty_tpl->tpl_vars['serviceOrder1'] = $foreach_serviceOrder1_Sav;
}
?>
                                                
                                            </td>
                                        </tr>
                                         <tr ><td colspan="16"><hr/></td><tr>
                                        
                                       
                                <?php
$_smarty_tpl->tpl_vars['ordershowRun1'] = $foreach_ordershowRun1_Sav;
}
?>
                                   
                                </tbody>
                            </table>
			  <?php }?>
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                <?php }?>
                    <!------------------------------------------------- /Order Runing show Tech ------------------------------------------------------>
		
                                            
                    <!------------------------------------------------- Order Runing Show Castumer ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderruningcastumer') {?>
                <!-- Page Heading -->
                
              
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumename']->value;?>

                            </div>
                        </div>  </div>
						<div class="col-lg-4">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['phonec']->value;?>

                            </div>
                        </div>  </div>
							
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['areaCastumer']->value;?>

                            </div>
                        </div></div>
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الجاريه
                            </li>
                             
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الجاريه :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                          
                               
                        </ol>
                            
                            <ol class="breadcrumb">
                                <li class="active"></li>
                                <li class="active pull-left">
                                                <button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button> جاريه
                                                <button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button> الورشه
                                                <button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button> لم تم التصليح
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button> تم التلصيح 
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button>  التوصيل
                            </li>
                           
                               
                             </ol>
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">

                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun']->value == null) {?>
                                    <h1 class="text-center">لا يوجد عمليات جاريه </h1>
                                <?php } else { ?>
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات الجاريه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الحاله</strong></td>
                                        <td colspan="5"><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowRun']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowRun1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowRun1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowRun1']->value) {
$_smarty_tpl->tpl_vars['ordershowRun1']->_loop = true;
$foreach_ordershowRun1_Sav = $_smarty_tpl->tpl_vars['ordershowRun1'];
?>
                                           <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
  </td>
                                                <td>
                                                    <?php ob_start();
echo strtotime($_smarty_tpl->tpl_vars['ordershowRun1']->value['orderdate']);
$_tmp2=ob_get_clean();
if ((($_smarty_tpl->tpl_vars['now']->value-$_tmp2)/86400) == 0) {?> اليوم <?php } else { ?>  <?php echo sprintf("%d",(($_smarty_tpl->tpl_vars['now']->value-strtotime($_smarty_tpl->tpl_vars['ordershowRun1']->value['orderdate']))/86400));?>
 يوم &nbsp; <?php }?></td>
                                               <td> <?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['namema'];?>
  </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nameaa'];?>
</td>
                                                <td>
                                                     <?php
$_from = $_smarty_tpl->tpl_vars['mark']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mark1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mark1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['mark1']->value) {
$_smarty_tpl->tpl_vars['mark1']->_loop = true;
$foreach_mark1_Sav = $_smarty_tpl->tpl_vars['mark1'];
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idmark'] == $_smarty_tpl->tpl_vars['mark1']->value['idmark']) {
echo $_smarty_tpl->tpl_vars['mark1']->value['namemarka'];
}?>
                                                   
                                                    <?php
$_smarty_tpl->tpl_vars['mark1'] = $foreach_mark1_Sav;
}
?>
                                                     <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idmark'] == 0) {?>غير معرف<?php }?>
                                                      
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nameva'];?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idservo'] == 3) {?>نقل إل
                                                     <?php
$_from = $_smarty_tpl->tpl_vars['arealoop']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['arealoop1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['arealoop1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arealoop1']->value) {
$_smarty_tpl->tpl_vars['arealoop1']->_loop = true;
$foreach_arealoop1_Sav = $_smarty_tpl->tpl_vars['arealoop1'];
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['areatransid'] == $_smarty_tpl->tpl_vars['arealoop1']->value['ida']) {?> 
                                                            <?php echo $_smarty_tpl->tpl_vars['arealoop1']->value['nameaa'];?>

                                                    <?php }?>
                                                     <?php
$_smarty_tpl->tpl_vars['arealoop1'] = $foreach_arealoop1_Sav;
}
?>
                                                    <?php } else {
echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nservicea'];?>

                                                    <?php }?></td>
                                                <td>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "part") {?>قطعه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "indoor") {?>وحده داخليه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "outdoor") {?>وحده خارجيه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "full") {?>كامل<?php }?>
                                                </td>
                                                <td>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 3) {?><button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 4) {?><button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 5) {?><button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 6) {?><button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 7) {?><button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa-truck"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 8) {?><button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button><?php }?>
                                                </td>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 3) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="4"><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 4) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td><a href="addition.php?act=repair&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button">  <i class="fa fa-fw fa-wrench"></i>   </button></a></td>
                                                    <td><a href="addition.php?act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 5) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 6) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 7) {?>
                                                    <td><a href="addition.php?act=addserviceido&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                <?php }?>
                                                
                                        </tr>
                                        <tr>
                                            <td>الخدمات المقدمه</td>
                                            <td colspan="15">
                                                 <?php
$_from = $_smarty_tpl->tpl_vars['serviceOrder']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['serviceOrder1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['serviceOrder1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['serviceOrder1']->value) {
$_smarty_tpl->tpl_vars['serviceOrder1']->_loop = true;
$foreach_serviceOrder1_Sav = $_smarty_tpl->tpl_vars['serviceOrder1'];
?>
                                                   
                                                    <?php if ($_smarty_tpl->tpl_vars['serviceOrder1']->value['idoservice'] == $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido']) {?>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['service1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['service1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_serviceff'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['service1']->value) {
$_smarty_tpl->tpl_vars['service1']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_serviceff']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_serviceff']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_serviceff']->value['total'];
$foreach_service1_Sav = $_smarty_tpl->tpl_vars['service1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == $_smarty_tpl->tpl_vars['serviceOrder1']->value['serviceido']) {?>
                                                               <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last'] : null)) {
echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];
} else { ?> <?php echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];?>
 -<?php }?>
                                                               
                                                            <?php }?>
                                                            <?php
$_smarty_tpl->tpl_vars['service1'] = $foreach_service1_Sav;
}
?>
                                                   <?php }?>
                                                 <?php
$_smarty_tpl->tpl_vars['serviceOrder1'] = $foreach_serviceOrder1_Sav;
}
?>
                                                
                                            </td>
                                        </tr>
                                         <tr ><td colspan="16"><hr/></td><tr>
                                        
                                       
                                <?php
$_smarty_tpl->tpl_vars['ordershowRun1'] = $foreach_ordershowRun1_Sav;
}
?>
                                   
                                </tbody>
                            </table>
			  <?php }?>
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                <?php }?>
                    <!------------------------------------------------- /Order Runing show Castumer ------------------------------------------------------>
		
                    
                 <!------------------------------------------------- Order UnActive ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderunactive') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات اليوميه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الغير مفعله :  <?php echo $_smarty_tpl->tpl_vars['orderunactiveCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                <?php if ($_smarty_tpl->tpl_vars['orderunactive']->value == null) {?>
                                    <h1 class="text-center">لا  يوجد اي عمليات غير مفعله</h1>
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>اليوم</strong></td>
                                         <td><strong>التوقيت	</strong></td>
                                         <td><strong>التاريخ	</strong></td>
                                        <td><strong>المطلوب</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['orderunactive']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderunactive1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderunactive1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderunactive1']->value) {
$_smarty_tpl->tpl_vars['orderunactive1']->_loop = true;
$foreach_orderunactive1_Sav = $_smarty_tpl->tpl_vars['orderunactive1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['ido'];?>
  </td>
                                                 <td>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'],"%a");
$_tmp3=ob_get_clean();
if ($_tmp3 == 'Sat') {?>السبت<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'],"%a");
$_tmp4=ob_get_clean();
if ($_tmp4 == 'Sun') {?>الأحد<?php }?> 
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'],"%a");
$_tmp5=ob_get_clean();
if ($_tmp5 == 'Mon') {?>الاثنين<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'],"%a");
$_tmp6=ob_get_clean();
if ($_tmp6 == 'Tue') {?>الثلاثاء<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'],"%a");
$_tmp7=ob_get_clean();
if ($_tmp7 == 'Wed') {?>الاربعاء<?php }?> 
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'],"%a");
$_tmp8=ob_get_clean();
if ($_tmp8 == 'Thu') {?>الخميس<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'],"%a");
$_tmp9=ob_get_clean();
if ($_tmp9 == 'Fri') {?>الجمعه<?php }?> 
                                                </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderunactive1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>

                                                </td>
                                                 <td> <?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'];?>
  </td>
                                                <td>   عطل في  <?php echo $_smarty_tpl->tpl_vars['orderPen1']->value['nameva'];?>
  </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['nameaa'];?>
</td>
                                                
                                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderunactive1'] = $foreach_orderunactive1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                <br/>

				
                        <?php }?>
		      <!------------------------------------------------- /Order UnActive ------------------------------------------------------>
                      
                        <!------------------------------------------------- Order Pend ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'penorder') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الملغيه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات  المعلقه :  <?php echo $_smarty_tpl->tpl_vars['orderpenCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                <?php if ($_smarty_tpl->tpl_vars['orderpen']->value == null) {?>
                                    <h1 class="text-center">لا  يوجد اي عمليات معلقه </h1>
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>اليوم</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>التاريخ	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['orderpen']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderpen1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderpen1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderpen1']->value) {
$_smarty_tpl->tpl_vars['orderpen1']->_loop = true;
$foreach_orderpen1_Sav = $_smarty_tpl->tpl_vars['orderpen1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['ido'];?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['namema'];?>
  </td>
                                                 <td>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'],"%a");
$_tmp10=ob_get_clean();
if ($_tmp10 == 'Sat') {?>السبت<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'],"%a");
$_tmp11=ob_get_clean();
if ($_tmp11 == 'Sun') {?>الأحد<?php }?> 
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'],"%a");
$_tmp12=ob_get_clean();
if ($_tmp12 == 'Mon') {?>الاثنين<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'],"%a");
$_tmp13=ob_get_clean();
if ($_tmp13 == 'Tue') {?>الثلاثاء<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderpen']->value['orderdate'],"%a");
$_tmp14=ob_get_clean();
if ($_tmp14 == 'Wed') {?>الاربعاء<?php }?> 
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'],"%a");
$_tmp15=ob_get_clean();
if ($_tmp15 == 'Thu') {?>الخميس<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'],"%a");
$_tmp16=ob_get_clean();
if ($_tmp16 == 'Fri') {?>الجمعه<?php }?> 
                                                </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderunactive1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>

                                                </td>
                                                 <td> <?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'];?>
  </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['nameva'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['nameaa'];?>
</td>
                                                
                                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderpen1'] = $foreach_orderpen1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                <br/>

				
                        <?php }?>
		      <!------------------------------------------------- /Order Pend ------------------------------------------------------>
                      
                      <!------------------------------------------------- Order Cancle ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ordercancel') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> التاريخ  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-times-circle"></i>العمليات الملغيه
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات  الملغيه :  <?php echo $_smarty_tpl->tpl_vars['ordercancleCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                <?php if ($_smarty_tpl->tpl_vars['ordercancle']->value == null) {?>
                                    <h1 class="text-center">لا  يوجد اي عمليات ملغيه </h1>
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>اليوم</strong></td>
                                        <td><strong>التوقيت	</strong></td>
                                        <td><strong>التاريخ	</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>جوال </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>السبب </strong></td>
                                        <td><strong>ملاحظات</strong></td>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordercancle']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordercancle1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordercancle1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordercancle1']->value) {
$_smarty_tpl->tpl_vars['ordercancle1']->_loop = true;
$foreach_ordercancle1_Sav = $_smarty_tpl->tpl_vars['ordercancle1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['ido'];?>
  </td>
                                                <td> <?php if ($_smarty_tpl->tpl_vars['ordercancle1']->value['employeeid'] == 0) {?> لا يوجد<?php } else { ?>
                                                      <?php
$_from = $_smarty_tpl->tpl_vars['employee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['employee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['employee1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['employee1']->value) {
$_smarty_tpl->tpl_vars['employee1']->_loop = true;
$foreach_employee1_Sav = $_smarty_tpl->tpl_vars['employee1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['ordercancle1']->value['employeeid'] == $_smarty_tpl->tpl_vars['employee1']->value['idm']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];?>

                                                                <?php }?>
                                                         <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
                                                   
                                                    <?php }?>  </td>
                                                 <td>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'],"%a");
$_tmp17=ob_get_clean();
if ($_tmp17 == 'Sat') {?>السبت<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'],"%a");
$_tmp18=ob_get_clean();
if ($_tmp18 == 'Sun') {?>الأحد<?php }?> 
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'],"%a");
$_tmp19=ob_get_clean();
if ($_tmp19 == 'Mon') {?>الاثنين<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'],"%a");
$_tmp20=ob_get_clean();
if ($_tmp20 == 'Tue') {?>الثلاثاء<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'],"%a");
$_tmp21=ob_get_clean();
if ($_tmp21 == 'Wed') {?>الاربعاء<?php }?> 
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'],"%a");
$_tmp22=ob_get_clean();
if ($_tmp22 == 'Thu') {?>الخميس<?php }?>
                                                    <?php ob_start();
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'],"%a");
$_tmp23=ob_get_clean();
if ($_tmp23 == 'Fri') {?>الجمعه<?php }?> 
                                                </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderunactive1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>

                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['nameva'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['nameaa'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['namena'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['note'];?>
</td>
                                                
                                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordercancle1'] = $foreach_ordercancle1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                <br/>

				
                        <?php }?>
		      <!------------------------------------------------- /Order Cancle ------------------------------------------------------>
                   
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