<?php /* Smarty version 3.1.24, created on 2017-07-16 14:54:40
         compiled from "./templates/admin/ar/ordersc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:688663508596b7e30d9b988_66206370%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '435ab737a2f647fae7e1531061ebd67c973d3cec' => 
    array (
      0 => './templates/admin/ar/ordersc.tpl',
      1 => 1500216876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '688663508596b7e30d9b988_66206370',
  'variables' => 
  array (
    'action' => 0,
    'st' => 0,
    'castumename' => 0,
    'phonec' => 0,
    'areaCastumer' => 0,
    'orderNowCount' => 0,
    'castumerid' => 0,
    'ordershowRun' => 0,
    'k' => 0,
    'ordershowRun1' => 0,
    'now' => 0,
    'mark' => 0,
    'mark1' => 0,
    'arealoop' => 0,
    'arealoop1' => 0,
    'serviceOrder' => 0,
    'serviceOrder1' => 0,
    'service' => 0,
    'service1' => 0,
    'invoices' => 0,
    'invoices1' => 0,
    'reson' => 0,
    'reson1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_596b7e310e9534_10822448',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596b7e310e9534_10822448')) {
function content_596b7e310e9534_10822448 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '688663508596b7e30d9b988_66206370';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">
                
              
                                    
                    <!------------------------------------------------- Order Runing Show Castumer ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ordercastumer' && $_smarty_tpl->tpl_vars['st']->value == 0) {?>
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
                            
                            
                              
                             <li class="active pull-left">
                                <td colspan=><a href="addition.php?act=addorder&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
" target="_blank"><button class="btn btn-default" type="button"> جـــــديــــدة</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=0&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-warning" type="button"> جارية</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=1&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-default" type="button"> انتهت</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=2&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-danger" type="button"> ملغية</button></a></td>
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
$_tmp1=ob_get_clean();
if ((($_smarty_tpl->tpl_vars['now']->value-$_tmp1)/86400) == 0) {?> اليوم <?php } else { ?>  <?php echo sprintf("%d",(($_smarty_tpl->tpl_vars['now']->value-strtotime($_smarty_tpl->tpl_vars['ordershowRun1']->value['orderdate']))/86400));?>
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
                                                <td><?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idservo'] == 3) {?>نقل إلى
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
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 0) {?><button class="btn btn-sm btn-default">غير مفعله</button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 1) {?><button class="btn btn-sm btn-default">مفعله</button><?php }?>
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
		
                                                        
                    <!------------------------------------------------- Order Runing Show Castumer ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ordercastumer' && $_smarty_tpl->tpl_vars['st']->value == 1) {?>
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
                                <i class="fa fa-fw fa-adjust"></i>العمليات المنتهيه
                            </li>
                             
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المنتهيه :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                            <li class="active pull-left">
                                <td colspan=><a href="addition.php?act=addorder&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
" target="_blank"><button class="btn btn-default" type="button"> جـــــديــــدة</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=0&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-warning" type="button"> جارية</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=1&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-default" type="button"> انتهت</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=2&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-danger" type="button"> ملغية</button></a></td>
                            </li>
                               
                        </ol>
                            
                           
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">

                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun']->value == null) {?>
                                    <h1 class="text-center">لا يوجد عمليات منتهيه </h1>
                                <?php } else { ?>
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات المنتهيه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم الفاتوره</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        
                                        
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
                                                 <td> 
                                                   <?php
$_from = $_smarty_tpl->tpl_vars['invoices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['invoices1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['invoices1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['invoices1']->value) {
$_smarty_tpl->tpl_vars['invoices1']->_loop = true;
$foreach_invoices1_Sav = $_smarty_tpl->tpl_vars['invoices1'];
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'] == $_smarty_tpl->tpl_vars['invoices1']->value['orderid']) {?> 
                                                            <?php echo $_smarty_tpl->tpl_vars['invoices1']->value['bill'];?>

                                                        <?php }?>
                                                    <?php
$_smarty_tpl->tpl_vars['invoices1'] = $foreach_invoices1_Sav;
}
?>
                                                     
                                                 
                                                     
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
                                                   <td>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "part") {?>قطعه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "indoor") {?>وحده داخليه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "outdoor") {?>وحده خارجيه<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "full") {?>كامل<?php }?>
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
                                                               <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last'] : null)) {?>
                                                                   <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == 3) {?> نقل  إلى
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
                                                                            
                                                                    <?php } else { ?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];?>

                                                                    <?php }?>
                                                               <?php } else { ?> 
                                                                    <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == 3) {?> نقل  إلى
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
 -
                                                                             <?php }?>
                                                                        <?php
$_smarty_tpl->tpl_vars['arealoop1'] = $foreach_arealoop1_Sav;
}
?>
                                                                            
                                                                    <?php } else { ?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];?>
 -
                                                                    <?php }?>
                                                               <?php }?>
                                                               
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
		
                    
                                                             
                    <!------------------------------------------------- Order Runing Show Castumer ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ordercastumer' && $_smarty_tpl->tpl_vars['st']->value == 2) {?>
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
                                <i class="fa fa-fw fa-adjust"></i>العمليات المنتهيه
                            </li>
                             
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المنتهيه :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                            <li class="active pull-left">
                                <td colspan=><a href="addition.php?act=addorder&id=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
" target="_blank"><button class="btn btn-default" type="button"> جـــــديــــدة</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=0&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-warning" type="button"> جارية</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=1&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-default" type="button"> انتهت</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=2&idc=<?php echo $_smarty_tpl->tpl_vars['castumerid']->value;?>
"><button class="btn btn-danger" type="button"> ملغية</button></a></td>
                            </li>
                               
                        </ol>
                            
                           
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">

                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun']->value == null) {?>
                                    <h1 class="text-center">لا يوجد عمليات ملغية </h1>
                                <?php } else { ?>
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات المنتهيه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        
                                        
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
$_tmp3=ob_get_clean();
if ((($_smarty_tpl->tpl_vars['now']->value-$_tmp3)/86400) == 0) {?> اليوم <?php } else { ?>  <?php echo sprintf("%d",(($_smarty_tpl->tpl_vars['now']->value-strtotime($_smarty_tpl->tpl_vars['ordershowRun1']->value['orderdate']))/86400));?>
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
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == null) {?>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nameva'];?>
</td>
                                                <?php } else { ?>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['nameva'];?>
</td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "part") {?>قطعه<?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "indoor") {?>وحده داخليه<?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "outdoor") {?>وحده خارجيه<?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'] == "full") {?>كامل<?php }?>
                                                    </td>
                                                <?php }?>
                                               
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
                                                               <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_serviceff']->value['last'] : null)) {?>
                                                                   <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == 3) {?> نقل  إلى
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
                                                                            
                                                                    <?php } else { ?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];?>

                                                                    <?php }?>
                                                               <?php } else { ?> 
                                                                    <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == 3) {?> نقل  إلى
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
 -
                                                                             <?php }?>
                                                                        <?php
$_smarty_tpl->tpl_vars['arealoop1'] = $foreach_arealoop1_Sav;
}
?>
                                                                            
                                                                    <?php } else { ?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['service1']->value['nservicea'];?>
 -
                                                                    <?php }?>
                                                               <?php }?>
                                                               
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
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['resono'] != 0) {?>
                                            <tr>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['reson']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['reson1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['reson1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['reson1']->value) {
$_smarty_tpl->tpl_vars['reson1']->_loop = true;
$foreach_reson1_Sav = $_smarty_tpl->tpl_vars['reson1'];
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['resono'] == $_smarty_tpl->tpl_vars['reson1']->value['idn']) {?> 
                                                         <td>السبب</td>
                                                 <td  colspan="3"><?php echo $_smarty_tpl->tpl_vars['reson1']->value['namena'];?>
</td>
                                                        
                                                     <?php }?>
                                                <?php
$_smarty_tpl->tpl_vars['reson1'] = $foreach_reson1_Sav;
}
?>
                                               
                                          
                                                
                                        <?php }?>
                                       
                                        <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['note'] != Null) {?>
                                            
                                                
                                                    
                                                <td>الملاحظات</td>
                                                 <td  colspan="11"> <?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['note'];?>
</td>
                                                         
                                                    
                                               
                                               
                                            </tr>
                                                
                                        <?php }?>
                                       
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
		
                    
                    <?php }
}
?>