<?php /* Smarty version 3.1.24, created on 2017-07-11 07:40:50
         compiled from "./templates/admin/ar/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1049563423596481027d9977_57728819%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c491089a3142f928352124b64fa2f002a79f696' => 
    array (
      0 => './templates/admin/ar/header.tpl',
      1 => 1498047918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049563423596481027d9977_57728819',
  'variables' => 
  array (
    'username' => 0,
    'iduser' => 0,
    'stay1' => 0,
    'stay2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_596481027e3e60_40059910',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596481027e3e60_40059910')) {
function content_596481027e3e60_40059910 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1049563423596481027d9977_57728819';
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