<?php /* Smarty version 3.1.24, created on 2017-07-11 12:47:04
         compiled from "./templates/admin/en/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7003281915964c8c85277a4_71232735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e613eb35cfe81a83d1edf84f19f4a55c1976d0' => 
    array (
      0 => './templates/admin/en/index.tpl',
      1 => 1485356952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7003281915964c8c85277a4_71232735',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964c8c859e9c6_29213698',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964c8c859e9c6_29213698')) {
function content_5964c8c859e9c6_29213698 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7003281915964c8c85277a4_71232735';
echo $_smarty_tpl->getSubTemplate ("admin/en/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>