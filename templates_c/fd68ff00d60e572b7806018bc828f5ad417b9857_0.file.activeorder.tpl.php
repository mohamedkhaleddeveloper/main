<?php /* Smarty version 3.1.24, created on 2017-07-17 05:19:27
         compiled from "./templates/admin/en/activeorder.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1711974963596c48df559bd4_10564524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd68ff00d60e572b7806018bc828f5ad417b9857' => 
    array (
      0 => './templates/admin/en/activeorder.tpl',
      1 => 1498315268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711974963596c48df559bd4_10564524',
  'variables' => 
  array (
    'castumer' => 0,
    'castumer1' => 0,
    'areaCastumere' => 0,
    'deviceCastumere' => 0,
    'iduser' => 0,
    'ido' => 0,
    'tech' => 0,
    'tech1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_596c48df9367e6_04384906',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596c48df9367e6_04384906')) {
function content_596c48df9367e6_04384906 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1711974963596c48df559bd4_10564524';
echo $_smarty_tpl->getSubTemplate ("admin/en/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-file"></i> Activation operation 
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
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Name</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['namece'];?>

                            </div>
                        </div>  </div>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Mobile Number</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['castumer1']->value['phonec'];?>

                            </div>
                        </div>  </div>
							<?php
$_smarty_tpl->tpl_vars['castumer1'] = $foreach_castumer1_Sav;
}
?>
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Area</h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php echo $_smarty_tpl->tpl_vars['areaCastumere']->value;?>

                            </div>
                        </div></div>
						
						<div class="col-lg-12">
						<div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Device</h3>
                            </div>
                            <div class="panel-body text-center">
							<?php echo $_smarty_tpl->tpl_vars['deviceCastumere']->value;?>

                            </div>
                        </div>  </div>
						<h1 class="page-header">		
								
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
							<input class="form-control" name="ido" id="name" value="<?php echo $_smarty_tpl->tpl_vars['ido']->value;?>
"  type="hidden">
                                                        
						
					<div class="form-group">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Technical</label>
                                                        <select class="form-control" name="idtech" id="idtech" >
                                                                    <option value="">-- Choose from here -- </option>
                                                             <?php
$_from = $_smarty_tpl->tpl_vars['tech']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tech1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tech1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tech1']->value) {
$_smarty_tpl->tpl_vars['tech1']->_loop = true;
$foreach_tech1_Sav = $_smarty_tpl->tpl_vars['tech1'];
?>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['tech1']->value['idm'];?>
"><?php echo $_smarty_tpl->tpl_vars['tech1']->value['nameme'];?>
</option>
                                                            <?php
$_smarty_tpl->tpl_vars['tech1'] = $foreach_tech1_Sav;
}
?>
                                                    </select>
                                                </div>
                                               
                                                 <div class="col-lg-4">
                                                      <label> &nbsp;</label> 
                                                    <button class="form-control btn btn-primary btn-mini" type="submit" name="save" value="LOG IN">Active </button>
                                                    </select>
                                                </div>    
                                            </div>
                                        </div>

					
				</form>			  <br/><br/><br/><br/><br/><br/>			  <br/><br/><br/><br/><br/><br/>
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

	<?php echo '<script'; ?>
>
 
            // $( "#phone" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
        $('#castumer').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'activeorder-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#idtech").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Choose Technical");
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger");
                                        $( "#alert" ).html("فشل تفعيل  المعامله");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  The activation process successfully </strong> ";
                                        //var name = $("#factor").val();
                                        //var str2 = "<strong> شكرا </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1);
                                            setTimeout(function () {
                                            window.location.href = "index.php?lang=en";}, 2000);
                                    }
                        }
                });
        });
        <?php echo '</script'; ?>
>
	
</body>

</html>
<?php }
}
?>