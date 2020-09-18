<?php /* Smarty version 3.1.24, created on 2017-07-11 07:45:47
         compiled from "./templates/admin/en/head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12348526545964822bc8b157_78183037%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153c17c533358a55cb3866f057ba994e25ad0b66' => 
    array (
      0 => './templates/admin/en/head.tpl',
      1 => 1497306960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12348526545964822bc8b157_78183037',
  'variables' => 
  array (
    'titleco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5964822bcb3005_46983685',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5964822bcb3005_46983685')) {
function content_5964822bcb3005_46983685 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12348526545964822bc8b157_78183037';
?>
<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['titleco']->value;?>
</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/cssen/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Core CSS RTL-->

    <!-- Custom CSS -->
    <link href="css/cssen/sb-admin.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/cssen/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head><?php }
}
?>