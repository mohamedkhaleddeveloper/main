<?php /* Smarty version 3.1.24, created on 2017-07-11 07:45:47
         compiled from "./templates/admin/en/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3893495635964822bcde7e3_95638470%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1a3754882c1b8ab2bf19744611a1927e6973df1' => 
    array (
      0 => './templates/admin/en/nav.tpl',
      1 => 1497471834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3893495635964822bcde7e3_95638470',
  'variables' => 
  array (
    'prs' => 0,
    'orderNowNav' => 0,
    'orderaActiveNav' => 0,
    'ordeRuningNav' => 0,
    'orderUnActive' => 0,
    'orderPenNav' => 0,
    'orderCancle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964822bcff650_48896621',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964822bcff650_48896621')) {
function content_5964822bcff650_48896621 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3893495635964822bcde7e3_95638470';
if ($_smarty_tpl->tpl_vars['prs']->value == 1) {?>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php?lang=en"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                                                        <li>
                                    <a href="addition.php?lang=en&act=search"><i class="fa fa-fw fa-search"></i> Find client</a>
                                </li>
                                  <li>
                                    <a href="celender.php?lang=en"><i class="fa fa-fw fa-calendar"></i> Celender </a>
                                </li>
                     <li>
                                    <a href="addition.php?lang=en&act=orderdate"><i class="fa fa-fw fa-adjust"></i>  Today operations <span class="btn btn-xs btn-default marginit"><?php echo $_smarty_tpl->tpl_vars['orderNowNav']->value;?>
</span></a>   	
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=orderactive"><i class="fa fa-fw fa-check-square"></i>  active operations   <span class="btn btn-xs btn-success marginit"><?php echo $_smarty_tpl->tpl_vars['orderaActiveNav']->value;?>
</span></a>   	
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=orderuning"><i class="fa fa-fw fa-cogs"></i>  Ongoing operations  <span class="btn btn-xs btn-primary marginit"><?php echo $_smarty_tpl->tpl_vars['ordeRuningNav']->value;?>
</span></a>   	
                                </li> 
                                 <li>
                                    <a href="addition.php?lang=en&act=orderunactive"><i class="fa fa-fw fa-times-circle"></i> Operations inactive  <span class=" btn btn-xs btn-warning marginit"><?php echo $_smarty_tpl->tpl_vars['orderUnActive']->value;?>
</span></a>
                                </li> 
                                <li>
                                    <a href="addition.php?lang=en&act=penorder"><i class="fa fa-fw fa-clock-o"></i> Operations Pending <span class=" btn btn-xs btn-warning marginit"><?php echo $_smarty_tpl->tpl_vars['orderPenNav']->value;?>
</span></a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=ordercancel"><i class="fa fa-fw fa-times-circle"></i> Canceled operations <span class=" btn btn-xs btn-danger marginit"><?php echo $_smarty_tpl->tpl_vars['orderCancle']->value;?>
</span></a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=expenses"><i class="fa fa-crosshairs"></i> expenses  </a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=report"><i class="fa fa-file-text-o"></i> Report </a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=reportst"><i class="fa fa-files-o"></i> Reports </a>
                                </li>
                               
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-plus"></i> Additions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                               
                                <li>
                                    <a href="addition.php?lang=en&act=addcastumer"><i class="fa fa-fw fa-user"></i>  Client   </a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addemployee"><i class="fa fa-fw fa-user-md"></i>  employees</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addarea"><i class="fa fa-fw fa-location-arrow"></i>   Area </a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=adddevice"><i class="fa fa-fw fa-desktop"></i>  Device</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addmark"><i class="fa fa-fw fa-bank"></i> Brand company</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addservice"><i class="fa fa-fw fa-shield"></i>  Service</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addcarer"><i class="fa fa-fw fa-joomla"></i>  Occupations</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addcountry"><i class="fa fa-fw fa-area-chart"></i>  Country</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addairport"><i class="fa fa-fw fa-plane"></i>   Ports</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addpayment"><i class="fa fa-fw fa-credit-card"></i>  payment</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addreson"><i class="fa fa-fw fa-navicon"></i> Reasons </a>
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
                        <a href="index.php?lang=en"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                                                        <li>
                                    <a href="addition.php?lang=en&act=search"><i class="fa fa-fw fa-search"></i> Find client</a>
                                </li>
                                 <li>
                                    <a href="celender.php?lang=en"><i class="fa fa-fw fa-calendar"></i> Celender </a>
                                </li>
                     <li>
                                    <a href="addition.php?lang=en&act=ordernow"><i class="fa fa-fw fa-adjust"></i>  Today operations <span class="btn btn-xs btn-default marginit"><?php echo $_smarty_tpl->tpl_vars['orderNowNav']->value;?>
</span></a>   	
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=orderactive"><i class="fa fa-fw fa-check-square"></i>  active operations   <span class="btn btn-xs btn-success marginit"><?php echo $_smarty_tpl->tpl_vars['orderaActiveNav']->value;?>
</span></a>   	
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=orderuning"><i class="fa fa-fw fa-cogs"></i>  Ongoing operations  <span class="btn btn-xs btn-primary marginit"><?php echo $_smarty_tpl->tpl_vars['ordeRuningNav']->value;?>
</span></a>   	
                                </li> 
                                 <li>
                                    <a href="addition.php?lang=en&act=orderunactive"><i class="fa fa-fw fa-times-circle"></i> Operations inactive  <span class=" btn btn-xs btn-warning marginit"><?php echo $_smarty_tpl->tpl_vars['orderUnActive']->value;?>
</span></a>
                                </li> 
                                <li>
                                    <a href="addition.php?lang=en&act=penorder"><i class="fa fa-fw fa-clock-o"></i> Operations Pending <span class=" btn btn-xs btn-warning marginit"><?php echo $_smarty_tpl->tpl_vars['orderPenNav']->value;?>
</span></a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=ordercancel"><i class="fa fa-fw fa-times-circle"></i> Canceled operations <span class=" btn btn-xs btn-danger marginit"><?php echo $_smarty_tpl->tpl_vars['orderCancle']->value;?>
</span></a>
                                </li>
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-plus"></i> Additions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                               
                                <li>
                                    <a href="addition.php?lang=en&act=addcastumer"><i class="fa fa-fw fa-user"></i>  Client   </a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addemployee"><i class="fa fa-fw fa-user-md"></i>  employees</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addarea"><i class="fa fa-fw fa-location-arrow"></i>   Area </a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=adddevice"><i class="fa fa-fw fa-shield"></i>  Device</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addmark"><i class="fa fa-fw fa-bank"></i> Brand company</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addservice"><i class="fa fa-fw fa-shopping-bagp"></i> Service</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addcarer"><i class="fa fa-fw fa-joomla"></i>  Occupations</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addcountry"><i class="fa fa-fw fa-area-chart"></i>  Country</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addairport"><i class="fa fa-fw fa-plane"></i>   Ports</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addreson"><i class="fa fa-fw fa-navicon"></i> Reasons </a>
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