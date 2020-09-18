<?php /* Smarty version 3.1.24, created on 2017-07-15 13:11:26
         compiled from "./templates/admin/en/area.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:435606991596a147e611685_36059072%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '117869b592f30df4efd1b0c3be0cbe01fcbec0cc' => 
    array (
      0 => './templates/admin/en/area.tpl',
      1 => 1499588754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '435606991596a147e611685_36059072',
  'variables' => 
  array (
    'iduser' => 0,
    'group' => 0,
    'group1' => 0,
    'area' => 0,
    'k' => 0,
    'area1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_596a147e8f3b53_18029735',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596a147e8f3b53_18029735')) {
function content_596a147e8f3b53_18029735 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '435606991596a147e611685_36059072';
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
                        <h1 class="page-header">
                            Areas <small> Recording </small>
                        </h1
                      
                    </div>
                </div>  
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER['PHP_SELF']);<?php echo '?>';?>" method="POST">
                                        <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
					<div class="form-group">
						<label> Arabic Name</label>
						<input class="form-control" name="nameaa" id="nameaa" >
					</div>	
                                         <div class="form-group">
						<label>English Name</label>
						<input class="form-control" name="nameae" id="nameae" >
					</div>	
                                          <div class="form-group">
						<label>Groups</label>
						<select class="form-control" name="group" id="group">
								<option value="">-- Choose From Here-- </option>
							<?php
$_from = $_smarty_tpl->tpl_vars['group']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['group1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['group1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group1']->value) {
$_smarty_tpl->tpl_vars['group1']->_loop = true;
$foreach_group1_Sav = $_smarty_tpl->tpl_vars['group1'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['group1']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['group1']->value[0];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['group1'] = $foreach_group1_Sav;
}
?>
							
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-right" type="submit" name="save">addition</button>
					</div>	
				</form>

			  </div>	
			  	<?php if ($_smarty_tpl->tpl_vars['area']->value == null) {?>
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">It is not adding any Area</h3>
                                     <br/><br/><br/>
                                 <?php } else { ?>    
			  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-location-arrow"></i> Areas
                            </li>
                        </ol>
                      
                    </div>
			 </div>

			 <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Group</strong></td>
                                        <td><strong>Edite </strong></td>
                                        <td><strong>State of activation </strong></td>
                                    </tr>
                                </thead>
                                <tbody>
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
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['area1']->value['nameae'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['area1']->value['groupa'];?>
</td>
                                                 <td><a href="update.php?lang=en&act=areaup&ida=<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
                                                <?php if ($_smarty_tpl->tpl_vars['area1']->value['deleta'] == 0) {?>
                                                        <td><form action="addition.php?lang=en&act=addarea" method="POST">
                                                            <input type="hidden" name="ida" value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-success" name="active" value="active">
                                                        </form> </td>
                                                <?php } else { ?>
                                                        <td><form action="addition.php?lang=en&act=addarea" method="POST">
                                                            <input type="hidden" name="ida" value="<?php echo $_smarty_tpl->tpl_vars['area1']->value['ida'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-danger" name="unactive" value="Un active">
                                                        </form> </td>
                                                <?php }?>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>

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
                        url: 'area-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert Arabice Name");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("This name already exists");
                                    }
                                     if(data.msg == 3){
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("Please Insert English Name"); 
                                    }
                                     if(data.msg == 4){
                                        $("#nameaa").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameae").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger");
                                        $("#alert").html("English Word Only"); 
                                    }
                                     if(data.msg == 5){
                                        $("#nameae").removeAttr( "style", "border-color: #a94442" );
                                        $("#groupa").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("Please Insert Group"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("Faild");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong> It has been added to the Area : </strong> ";
                                        var name = $("#nameae").val();
                                        var str2 = "<strong>  successfully Thank you  </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?lang=en&act=addarea";}, 2000);
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