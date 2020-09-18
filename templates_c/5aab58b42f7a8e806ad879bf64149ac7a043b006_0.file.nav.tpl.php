<?php /* Smarty version 3.1.24, created on 2019-09-16 11:59:56
         compiled from "./templates/admin/ar/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:307025d7f5d1c775759_40555366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aab58b42f7a8e806ad879bf64149ac7a043b006' => 
    array (
      0 => './templates/admin/ar/nav.tpl',
      1 => 1497390892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307025d7f5d1c775759_40555366',
  'variables' => 
  array (
    'prs' => 0,
    'orderNowNav' => 0,
    'orderaActiveNav' => 0,
    'ordeRuningNav' => 0,
    'orderPenNav' => 0,
    'orderUnActive' => 0,
    'orderCancle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d7f5d1c8253e4_18807856',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d7f5d1c8253e4_18807856')) {
function content_5d7f5d1c8253e4_18807856 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '307025d7f5d1c775759_40555366';
if ($_smarty_tpl->tpl_vars['prs']->value == 1) {?>
   
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> الرئيسيه</a>
                    </li>
                                                        <li>
                                    <a href="addition.php?act=search"><i class="fa fa-fw fa-search"></i>البحث عن عميل</a>
                                </li>
                                   <li>
                                    <a href="celender.php"><i class="fa fa-fw fa-calendar"></i> المزامنه </a>
                                </li>
                                
                     <li>
                                    <a href="addition.php?act=orderdate"><i class="fa fa-fw fa-adjust"></i> معاملات اليوم  <span class="btn btn-xs btn-default marginit"><?php echo $_smarty_tpl->tpl_vars['orderNowNav']->value;?>
</span></a>   	
                                </li>
                                 <li>
                                    <a href="addition.php?act=orderactive"><i class="fa fa-fw fa-check-square"></i> معاملات مفعله  <span class="btn btn-xs btn-success marginit"><?php echo $_smarty_tpl->tpl_vars['orderaActiveNav']->value;?>
</span></a>   	
                                </li>
                                <li>
                                    <a href="addition.php?act=orderuning"><i class="fa fa-fw fa-cogs"></i> معاملات جاريه  <span class="btn btn-xs btn-primary marginit"><?php echo $_smarty_tpl->tpl_vars['ordeRuningNav']->value;?>
</span></a>   	
                                </li>                          
                                <li>
                                    <a href="addition.php?act=penorder"><i class="fa fa-fw fa-clock-o"></i> معاملات معلقه<span class=" btn btn-xs btn-warning marginit"><?php echo $_smarty_tpl->tpl_vars['orderPenNav']->value;?>
</span></a>
                                </li>
                                   <li>
                                    <a href="addition.php?act=orderunactive"><i class="fa fa-fw fa-times-circle"></i> معاملات  غير مفعله<span class=" btn btn-xs btn-warning marginit"><?php echo $_smarty_tpl->tpl_vars['orderUnActive']->value;?>
</span></a>
                                </li> 
                                 <li>
                                    <a href="addition.php?act=ordercancel"><i class="fa fa-fw fa-times-circle"></i> معاملات  ملغيه<span class=" btn btn-xs btn-danger marginit"><?php echo $_smarty_tpl->tpl_vars['orderCancle']->value;?>
</span></a>
                                </li>
                                
                                  <li>
                                      <a href="addition.php?act=expenses"><i class="fa fa-crosshairs"></i>&nbsp;&nbsp;مصاريف  &nbsp;</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=exreport"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp;تقريرمصروفات   &nbsp;</a>
                                </li>
                                  
                                 <li>
                                    <a href="addition.php?act=report"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp; تقرير فواتير يومي &nbsp;</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=reportst"><i class="fa fa-files-o"></i>&nbsp;&nbsp;تقرير فواتير  بتحديد فترة &nbsp;</a>
                                </li>
                               
                                
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-plus"></i> الإضافات <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                               
                                <li>
                                    <a href="addition.php?act=addcastumer"><i class="fa fa-fw fa-user"></i>إضافه عميل</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addemployee"><i class="fa fa-fw fa-user-md"></i>إاضافه موظف</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addarea"><i class="fa fa-fw fa-location-arrow"></i>إضافه منطقه </a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=adddevice"><i class="fa fa-fw fa-desktop"></i> إضافه جهاز</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addmark"><i class="fa fa-fw fa-bank"></i> إضافه ماركة جهاز</a>
                                </li>
                                  <li>
                                    <a href="addition.php?act=addservice"><i class="fa fa-fw fa-shield"></i> إضافه خدمه</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addcarer"><i class="fa fa-fw fa-joomla"></i> إضافه مهنه</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addcountry"><i class="fa fa-fw fa-area-chart"></i> إضافه دوله</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addairport"><i class="fa fa-fw fa-plane"></i> إضافه ميناء</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addpayment"><i class="fa fa-fw fa-credit-card"></i> إضافه طريقه دفع</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addreson"><i class="fa fa-fw fa-navicon"></i> إضافه اسباب</a>
                                </li>
                                 
                        </ul>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        
        
        <?php } else { ?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> الرئيسيه</a>
                    </li>
                                                        <li>
                                    <a href="addition.php?act=search"><i class="fa fa-fw fa-search"></i>البحث عن عميل</a>
                                </li>
                                   <li>
                                    <a href="celender.php"><i class="fa fa-fw fa-calendar"></i> المزامنه </a>
                                </li>
                     <li>
                                    <a href="addition.php?act=ordernow"><i class="fa fa-fw fa-adjust"></i> معاملات اليوم  <span class="btn btn-xs btn-default marginit"><?php echo $_smarty_tpl->tpl_vars['orderNowNav']->value;?>
</span></a>   	
                                </li>
                                 <li>
                                    <a href="addition.php?act=orderactive"><i class="fa fa-fw fa-check-square"></i> معاملات مفعله  <span class="btn btn-xs btn-success marginit"><?php echo $_smarty_tpl->tpl_vars['orderaActiveNav']->value;?>
</span></a>   	
                                </li>
                                <li>
                                    <a href="addition.php?act=orderuning"><i class="fa fa-fw fa-cogs"></i> معاملات جاريه  <span class="btn btn-xs btn-primary marginit"><?php echo $_smarty_tpl->tpl_vars['ordeRuningNav']->value;?>
</span></a>   	
                                </li>                          
                                <li>
                                    <a href="addition.php?act=penorder"><i class="fa fa-fw fa-clock-o"></i> معاملات معلقه<span class=" btn btn-xs btn-warning marginit"><?php echo $_smarty_tpl->tpl_vars['orderPenNav']->value;?>
</span></a>
                                </li>
                                   <li>
                                    <a href="addition.php?act=orderunactive"><i class="fa fa-fw fa-times-circle"></i> معاملات  غير مفعله<span class=" btn btn-xs btn-warning marginit"><?php echo $_smarty_tpl->tpl_vars['orderUnActive']->value;?>
</span></a>
                                </li> 
                                 <li>
                                    <a href="addition.php?act=ordercancel"><i class="fa fa-fw fa-times-circle"></i> معاملات  ملغيه<span class=" btn btn-xs btn-danger marginit"><?php echo $_smarty_tpl->tpl_vars['orderCancle']->value;?>
</span></a>
                                </li>
                                
                                
                                 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-plus"></i> التقارير <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                               
                                <li>
                                    <a href="addition.php?act=addcastumer"><i class="fa fa-fw fa-user"></i>يومي </a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addemployee"><i class="fa fa-fw fa-user-md"></i>فترة محدده</a>
                                </li>
                               
                                 
                        </ul>
                    </li>
                  
                                
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-plus"></i> الإضافات <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                               
                                <li>
                                    <a href="addition.php?act=addcastumer"><i class="fa fa-fw fa-user"></i>إضافه عميل </a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addemployee"><i class="fa fa-fw fa-user-md"></i>إاضافه موظف</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addarea"><i class="fa fa-fw fa-location-arrow"></i>إضافه منطقه </a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=adddevice"><i class="fa fa-fw fa-desktop"></i> إضافه جهاز</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addmark"><i class="fa fa-fw fa-bank"></i> إضافه ماركة جهاز</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addservice"><i class="fa fa-fw fa-shield"></i> إضافه خدمه</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addcarer"><i class="fa fa-fw fa-joomla"></i> إضافه مهنه</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addcountry"><i class="fa fa-fw fa-area-chart"></i> إضافه دوله</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addairport"><i class="fa fa-fw fa-plane"></i> إضافه ميناء</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addreson"><i class="fa fa-fw fa-navicon"></i> إضافه اسباب</a>
                                </li>
                                 
                        </ul>
                    </li>
                  
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <?php }
}
}
?>