<?php /* Smarty version 3.1.24, created on 2019-09-16 11:59:56
         compiled from "./templates/admin/ar/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:290335d7f5d1c6bbe90_83413617%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6ad5c78ccc60cf97078336e44b5439f977ba32' => 
    array (
      0 => './templates/admin/ar/header.tpl',
      1 => 1498044318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290335d7f5d1c6bbe90_83413617',
  'variables' => 
  array (
    'username' => 0,
    'iduser' => 0,
    'stay1' => 0,
    'stay2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d7f5d1c731192_79665781',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d7f5d1c731192_79665781')) {
function content_5d7f5d1c731192_79665781 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '290335d7f5d1c6bbe90_83413617';
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-cogs" aria-hidden="true"></i> مؤسسه السبطين  التجاريه</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-left top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> <i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="update.php?act=upu&id=<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
"><i class="fa fa-fw fa-gear"></i> تغيير كلمة المرور</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> تسجيل خروج</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['stay1']->value;
if ($_smarty_tpl->tpl_vars['stay2']->value == Null) {?>?lang=en <?php } else { ?>?lang=en&<?php echo $_smarty_tpl->tpl_vars['stay2']->value;
}?>"><i class="fa fa-language"></i> &nbsp; English   &nbsp; </a>
                </li>
            </ul><?php }
}
?>