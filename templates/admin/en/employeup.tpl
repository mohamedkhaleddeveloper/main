{include file="admin/en/head.tpl" title=EtagCP}
{include file="admin/en/header.tpl"}
{include file="admin/en/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Employee <small>  Edite Info</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> Edite Employee Info
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              <div class="col-lg-12">
			  
					<div id="alert"></div>
			  		<div id="sent-form-msg" align="center"></div>
				 <form id="castumer" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                                {foreach from=$employee   key=k item=employee1}
                                                  <input class="form-control" name="idu" id="idu" value="{$iduser}" type="hidden" >
                                                  <input class="form-control" name="idm" id="idm" value="{$employee1.idm}" type="hidden" >
                                                    <div class="col-lg-3">
                                                       <label>Employee Arabic Full Name </label>
                                                        <input class="form-control" name="fnamema" id="fnamema" value="{$employee1.fnamema}">
                                                     </div>
                                                    <div class="col-lg-3">
                                                         <label >Employee English Full Name</label>
                                                        <input class="form-control " name="fnameme" id="fnameme" value="{$employee1.fnameme}">
                                                    </div>
                                                     <div class="col-lg-3">
                                                    <label>Employee Arabic NickName </label>
                                                        <input class="form-control" name="namema" id="namema" value="{$employee1.namema}">
                                                     </div>
                                                    <div class="col-lg-3">
                                                        <label >Employee English NickeName</label>
                                                        <input class="form-control " name="nameme" id="fnameme" value="{$employee1.nameme}">
                                                    </div>
                                                    <div class="col-lg-3">
                                                         <label>Mobile</label>
                                                        <input class="form-control"  maxlength="10"  name="mobilem" id="mobilem" value="{$employee1.mobilem}">
                                                    </div>
                                               
                                                  
                                                    <div class="col-lg-3">
                                                       <label>Carrer</label>
                                                            <select class="form-control" name="carerm" id="carerm">
                                                            <option value="">-- Choose From Here --</option>
                                                            {foreach from=$carer  item=carer1}
                                                                    <option value="{$carer1.idr}{if $carer1.idr eq $employee1.carerm}" selected {else}" {/if}>{$carer1.namere}</option>
                                                            {/foreach}
                                                    </select>
                                                   </div>
                                                  <div class="col-lg-3">
                                                       <label>Nationalty</label>
                                                              <select class="form-control" name="countrym" id="countrym">
                                                                  <option value="">-- Choose From Here --</option>
                                                                      {foreach from=$country  item=country1}
                                                                              <option value="{$country1.idy}{if $country1.idy eq $employee1.countrym}" selected {else}" {/if}>{$country1.nameye}</option>
                                                                      {/foreach}
                                                              </select>
                                                    </div>
                                                   <div class="col-lg-3">
                                                       <label> Passport No. </label>
                                                        <input class="form-control"    name="nopassport" id="nopassport" value="{$employee1.nopassport}">
                                                    </div>
                                                   
                                                    <div class="col-lg-4">
                                                        <label>Border No.</label>
                                                        <input class="form-control"   name="noborder" id="noborder" value="{$employee1.noborder}">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Iqama No. </label>
                                                        <input class="form-control"   name="noiqama" id="noiqama" value="{$employee1.noiqama}"> 

                                                   </div>
                                                   <div class="col-lg-4">
                                                           <label> Port of entry </label>
                                                            <select class="form-control" name="airportm" id="airportm">
                                                                <option value="">-- اختر من هنا -- </option>
                                                                    {foreach from=$airport  item=airport1}
                                                                            <option value="{$airport1.idair}{if $airport1.idair eq $employee1.airportm}" selected {else}"{/if}>{$airport1.nameaire}</option>
                                                                    {/foreach}
                                                            </select>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <label>Home address of the employee</label>
                                                        <input class="form-control"    name="adressm" id="adressm" value="{$employee1.adressm}">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Telephone number of his country</label>
                                                        <input class="form-control"    name="telem" id="telem" value="{$employee1.telem}">

                                                   </div>
                                                   <div class="col-lg-3">
                                                             <label>permessions</label>
                                                            <select class="form-control" name="premssionm" id="premssionm">
                                                                            <option value="">-- Choose From Here --</option>
                                                                            <option value="0{if $employee1.premssionm eq 0}" selected {else}"{/if}>Without permessions</option>
                                                                            <option value="1{if $employee1.premssionm eq 1}" selected {else}"{/if}>Manager</option> 
                                                                            <option value="2{if $employee1.premssionm eq 2}" selected {else}"{/if}>Employee</option>
                                                                            <option value="3{if $employee1.premssionm eq 3}" selected {else}"{/if}>Technical</option>
                                                                           
                                                            </select>
                                                    </div>
                                                   <div class="col-lg-3">
                                                           <label> State employee </label>
                                                            <select class="form-control" name="statusm" id="statusm">
                                                                             <option value="">-- Choose From Here --</option>
                                                                            <option value="0{if $employee1.statusm eq 0}" selected {else}"{/if}> Embarkation</option>
                                                                            <option value="1{if $employee1.statusm eq 1}" selected {else}"{/if}> A vacation </option>
                                                            </select>
                                                    </div>
                                              
					
                                       
					
                                                    
                                                    <div class="col-lg-2">
                                                        <label> Date of entry </label>
                                                  <input type="text" class="form-control"  id="entermsa" name="entermsa" value="{$employee1.entermsa}">
                                                  </div>
                                                 <div class="col-lg-2">
                                                         <label> direct Occupation </label>
                                                  <input type="text" class="form-control"  id="worktime" name="worktime" value="{$employee1.worktime}">
                                                  </div>
                                                 <div class="col-lg-2">
                                                        <label>Iqama Expiration</label>
                                                  <input type="text" class="form-control"  id="exiqamam" name="exiqamam" value="{$employee1.exiqamam}">
                                                  </div>
                                                 <div class="col-lg-2">
                                                       <label> Insurance Expiration</label>
                                                  <input type="text" class="form-control"  id="exinsurancem" name="xinsurancem" value="{$employee1.xinsurancem}">
                                                  </div>
                                                 <div class="col-lg-2">
                                                       <label>     license Expiration </label>
                                                  <input type="text" class="form-control"  id="exlincm" name="exlincm" value="{$employee1.exlincm}" >
                                                  </div>
                                                <div class="col-lg-2">
                                                         <label>Passport Expiration</label>
                                                 <input type="text" class="form-control"  id="expassportm" name="expassportm" value="{$employee1.expassportm}">
                                                  </div>
                                           
                                           {/foreach}
                                                    <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/>
                                        <div class="form-group">   
                                             <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/>
					<button class="btn btn-primary btn-lg pull-left" type="submit" name="save" value="LOG IN"> حفظ </button>
                                        </div>
				</form>			 
			  </div>
                                                
				
          

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap-datepicker.js"></script>
	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#entermsa').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                        window.prettyPrint && prettyPrint();
			$('#worktime').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                        window.prettyPrint && prettyPrint();
			$('#exiqamam').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                        window.prettyPrint && prettyPrint();
			$('#exinsurancem').datepicker({
				format: 'yyyy-mm-dd'
			});
			
                                                
                        window.prettyPrint && prettyPrint();
			$('#exlincm').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                         window.prettyPrint && prettyPrint();
			$('#expassportm').datepicker({
				format: 'yyyy-mm-dd'
			});
			
        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
    
    
  
    
         
    
    
 <script>
            // $( "#phone" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
            // $( "#name" ).attr( "style", "border-color: #a94442" );
        $('#castumer').submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: 'employeeup-ajax.php',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
                                    if(data.msg == 1){
                                        //document.getElementById("info1").innerHTML = "*";
                                        $("#fnamema").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل اسم الموظف");
                                    }
                                     if(data.msg == 2){
                                        $("#fnamema").removeAttr( "style", "border-color: #a94442" );
                                        $("#fnameme").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الموظف بالانجليزي"); 
                                    }
                                     if(data.msg == 3){
                                        $("#fnamema").removeAttr( "style", "border-color: #a94442" );
                                        $("#fnameme").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تأكد من الحروف انجليزيه من فضلك"); 
                                    }
                                    if(data.msg == 4){
                                        $("#fnameme").removeAttr( "style", "border-color: #a94442" );
                                        $("#namema").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم المستعار ");
                                    }
                                     if(data.msg == 5){
                                        $("#namema").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameme").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل الاسم المستعار بالانجليزي ");
                                    }
                                     if(data.msg == 6){
                                        $("#namema").removeAttr( "style", "border-color: #a94442" );
                                        $("#nameme").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                       $("#alert").html("تأكد من الحروف انجليزيه من فضلك"); 
                                   }
                                    if(data.msg == 7){
                                        $("#nameme").removeAttr( "style", "border-color: #a94442" );
                                        $("#carerm").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل مهنه الموظف "); 
                                    }
                                    if(data.msg == 8){
                                        $("#carerm").removeAttr( "style", "border-color: #a94442" );
                                        $("#premssionm").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل صلاحيات الموظف"); 
                                    }
                                    if(data.msg == 9){
                                        $("#premssionm").removeAttr( "style", "border-color: #a94442" );
                                        $("#noborder").attr( "style", "border-color: #a94442" );
                                        $("#nopassport").attr( "style", "border-color: #a94442" );
                                        $("#noiqama").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل رقم الاقامه او رقم  جواز السفر او رقم الحدود"); 
                                    }
                                    if(data.msg == 10){
                                        $("#premssionm").removeAttr( "style", "border-color: #a94442" );
                                        $("#nopassport").removeAttr( "style", "border-color: #a94442" );
                                        $("#noiqama").removeAttr( "style", "border-color: #a94442" );
                                        $("#noborder").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال رقم الحدود من قبل"); 
                                    }
                                    if(data.msg == 11){
                                        $("#premssionm").removeAttr( "style", "border-color: #a94442" );
                                        $("#noborder").removeAttr( "style", "border-color: #a94442" );
                                        $("#nopassport").removeAttr( "style", "border-color: #a94442" );
                                        $("#noiqama").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال رقم الإقامه من قبل"); 
                                    }
                                    if(data.msg == 12){
                                        $("#premssionm").removeAttr( "style", "border-color: #a94442" );
                                        $("#noborder").removeAttr( "style", "border-color: #a94442" );
                                        $("#noiqama").removeAttr( "style", "border-color: #a94442" );
                                        $("#nopassport").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("تم ادخال رقم الجواز من قبل"); 
                                    }
                                    if(data.msg == 13){
                                        $("#noborder").removeAttr( "style", "border-color: #a94442" );
                                        $("#nopassport").removeAttr( "style", "border-color: #a94442" );
                                        $("#noiqama").removeAttr( "style", "border-color: #a94442" );
                                        $("#statusm").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل حاله الموظف"); 
                                    }
                                    if(data.msg == 14){
                                        $("#statusm").removeAttr( "style", "border-color: #a94442" );
                                        $("#worktime").attr( "style", "border-color: #a94442" );
                                        $("#alert").attr("class", "alert alert-danger text-right");
                                        $("#alert").html("من فضلك ادخل تاريخ مباشرة العمل"); 
                                    }
                                    if(data.msg == 50){
                                        $( "#alert" ).fadeOut();
                                        $('#castumer').fadeOut();
					$( "#alert" ).fadeIn();
                                        $( "#alert" ).attr("class", "alert alert-danger text-right");
                                        $( "#alert" ).html("فشل اضافه العامل");
                                    }	
                                    if(data.msg == 0){
                                        $('#castumer').fadeOut();
                                        $( "#alert" ).fadeOut();
                                        var str1 = "<strong>  تم تعديل بيانات الموظف : </strong> ";
                                        var name = $("#namema").val();
                                        var str2 = "<strong> بنجاح </strong>";
                                        $( "#sent-form-msg" ).attr("class", "alert alert-success");
                                        $( "#sent-form-msg" ).html(str1 + name + str2);
                                            setTimeout(function () {
                                            window.location.href = "index.php";}, 2000);
                                    }
                        }
                });
        });
        </script>

	  
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	
</body>

</html>
