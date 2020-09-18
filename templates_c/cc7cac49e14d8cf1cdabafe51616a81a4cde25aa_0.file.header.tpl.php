<?php /* Smarty version 3.1.24, created on 2017-07-11 07:45:47
         compiled from "./templates/admin/en/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:813192985964822bcb5261_33189697%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7cac49e14d8cf1cdabafe51616a81a4cde25aa' => 
    array (
      0 => './templates/admin/en/header.tpl',
      1 => 1497208240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813192985964822bcb5261_33189697',
  'variables' => 
  array (
    'stay1' => 0,
    'stayar' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964822bcdb1e0_89782680',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964822bcdb1e0_89782680')) {
function content_5964822bcdb1e0_89782680 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '813192985964822bcb5261_33189697';
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="index.php?lang=en"><i class="fa fa-cogs" aria-hidden="true"></i> ALSUBTAIN Campny</a>
            </div>
            
            
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                 <li class="dropdown">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['stay1']->value;
if ($_smarty_tpl->tpl_vars['stayar']->value == Null) {
} else { ?>?<?php echo $_smarty_tpl->tpl_vars['stayar']->value;
}?>
                    "><i class="fa fa-language"></i> &nbsp;عربي &nbsp; </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> <i class="fa fa-user"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile &nbsp;</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Setting &nbsp;</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php?lang=en"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                

            </ul><?php }
}
?>