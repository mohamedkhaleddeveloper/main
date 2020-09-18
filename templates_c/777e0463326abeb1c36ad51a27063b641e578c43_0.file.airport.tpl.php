<?php /* Smarty version 3.1.24, created on 2017-07-13 16:23:04
         compiled from "./templates/admin/ar/airport.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:180243667859679e68ac60e0_21714835%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777e0463326abeb1c36ad51a27063b641e578c43' => 
    array (
      0 => './templates/admin/ar/airport.tpl',
      1 => 1498168432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180243667859679e68ac60e0_21714835',
  'variables' => 
  array (
    'iduser' => 0,
    'airport' => 0,
    'airport1' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59679e68b6f4a0_76821640',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59679e68b6f4a0_76821640')) {
function content_59679e68b6f4a0_76821640 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '180243667859679e68ac60e0_21714835';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ميناء <small>إضافه ميناء جديد </small>
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
					<div class="form-group">
						<label>اسم الميناء</label>
						<input class="form-control" name="nameaira" id="nameaira" >
					</div>	
                                         <div class="form-group">
						<label> اسم الميناء باللغه الانجليزيه</label>
						<input class="form-control" name="nameaire" id="nameaire" >
					</div>	
					<div class="form-group">
						<button class="btn btn-primary btn-lg pull-left" type="submit" name="save">اضف</button>
					</div>	
				</form>

			  </div>	
			  	<?php if ($_smarty_tpl->tpl_vars['airport']->value == null) {?>
                                     <br/><br/><br/><br/>
                                     <h3 class="text-center">لم يتم اضافه اي ميناء  بالبرنامج</h3>
                                     <br/><br/><br/>
                                 <?php } else { ?>    
			  <div class="row">
                    <div class="col-lg-12">
					<br/>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-plane"></i> الموانئ
                            </li>
                        </ol>
                      
                    </div>
			 </div>

			 <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>الرقم</strong></td>
                                        <td><strong>الاسم</strong></td>
                                        <td><strong>تعديل </strong></td>
                                        <td><strong>حاله التفعيل </strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['airport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['airport1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['airport1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['airport1']->value) {
$_smarty_tpl->tpl_vars['airport1']->_loop = true;
$foreach_airport1_Sav = $_smarty_tpl->tpl_vars['airport1'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['airport1']->value['nameaira'] == null) {
} else { ?>
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['airport1']->value['nameaira'], 'UTF-8');?>
</td>
                                                <td><a href="update.php?act=airportup&idair=<?php echo $_smarty_tpl->tpl_vars['airport1']->value['idair'];?>
"><button class="btn btn-primary" type="button"><i class="fa fa-pencil-square-o"></i|></button></a></td>
                                                    <?php if ($_smarty_tpl->tpl_vars['airport1']->value['deletair'] == 0) {?>
                                                        <td><form action="addition.php?act=addairport" method="POST">
                                                            <input type="hidden" name="idair" value="<?php echo $_smarty_tpl->tpl_vars['airport1']->value['idair'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-success" name="active" value="مفعله">
                                                        </form> </td>
                                                <?php } else { ?>
                                                        <td><form action="addition.php?act=addairport" method="POST">
                                                            <input type="hidden" name="idair" value="<?php echo $_smarty_tpl->tpl_vars['airport1']->value['idair'];?>
"/>          
                                                            <input type="submit" class="btn btn-sm btn-danger" name="unactive" value="غير مفعله">
                                                        </form> </td>
                                                <?php }?>
                                        </tr>
                                        <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['airport1'] = $foreach_airport1_Sav;
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
                        url: 'airport-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaira").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم الميناء");
                                    }
                                    if(data.msg == 2){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#nameaira").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم المياء من قبل");
                                    }
                                     if(data.msg == 3){
                                        $("#nameaira").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameaire").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل  اسم الميناء بالانجليزي	"); 
                                    }
                                     if(data.msg == 4){
                                        $("#nameaira").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameaire").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك تأكد من ان الحروف انجليزيه	"); 
                                    }
                                    if(data.msg == 5){
                                        $("#nameaira").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameaire").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال اسم الميناء من قبل	"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه مهنه");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم اضافه الميناء : </strong> ";
                                        var name = $("#nameaira").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "addition.php?act=addairport";}, 2000);
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