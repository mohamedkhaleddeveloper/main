{include file="admin/ar/head.tpl" title=EtagCP}
{include file="admin/ar/header.tpl"}
{include file="admin/ar/nav.tpl"}
        <div id="page-wrapper">

            <div class="container-fluid">
                
              
                                    
                    <!------------------------------------------------- Order Runing Show Castumer ------------------------------------------------------>
             {if $action eq 'ordercastumer' AND $st eq 0}
                <!-- Page Heading -->
                
              
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumename}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$phonec}
                            </div>
                        </div>  </div>
							
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumer}
                            </div>
                        </div></div>
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات الجاريه
                            </li>
                             
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات الجاريه :  {$orderNowCount}
                            </li>
                            
                            
                              
                             <li class="active pull-left">
                                <td colspan=><a href="addition.php?act=addorder&id={$castumerid}" target="_blank"><button class="btn btn-default" type="button"> جـــــديــــدة</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=0&idc={$castumerid}"><button class="btn btn-warning" type="button"> جارية</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=1&idc={$castumerid}"><button class="btn btn-default" type="button"> انتهت</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=2&idc={$castumerid}"><button class="btn btn-danger" type="button"> ملغية</button></a></td>
                            </li>
                              

                        </ol>
                            
                            <ol class="breadcrumb">
                                <li class="active"></li>
                                <li class="active pull-left">
                                                <button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button> جاريه
                                                <button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button> الورشه
                                                <button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button> لم تم التصليح
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button> تم التلصيح 
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button>  التوصيل
                            </li>
                           
                               
                             </ol>
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">

                                {if $ordershowRun eq null}
                                    <h1 class="text-center">لا يوجد عمليات جاريه </h1>
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات الجاريه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الحاله</strong></td>
                                        <td colspan="5"><strong>المعاملات</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowRun  key=k item=ordershowRun1}
                                           <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordershowRun1.ido}  </td>
                                                <td>
                                                    {if (($now - {$ordershowRun1.orderdate|strtotime}) / 86400) eq 0} اليوم {else}  {(($now - $ordershowRun1.orderdate|strtotime) / 86400)|string_format:"%d"} يوم &nbsp; {/if}</td>
                                               <td> {$ordershowRun1.namema}  </td>
                                                <td>{$ordershowRun1.nameaa}</td>
                                                <td>
                                                     {foreach from=$mark  key=k item=mark1}
                                                    {if $ordershowRun1.idmark eq $mark1.idmark}{$mark1.namemarka}{/if}
                                                   
                                                    {/foreach}
                                                     {if $ordershowRun1.idmark eq 0}غير معرف{/if}
                                                      
                                                </td>
                                                <td>{$ordershowRun1.nameva}</td>
                                                <td>{if $ordershowRun1.idservo eq 3}نقل إلى
                                                     {foreach from=$arealoop  item=arealoop1}
                                                        {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                            {$arealoop1.nameaa}
                                                    {/if}
                                                     {/foreach}
                                                    {else}{$ordershowRun1.nservicea}
                                                    {/if}</td>
                                                <td>
                                                {if $ordershowRun1.poseplt eq "part"}قطعه{/if}
                                                {if $ordershowRun1.poseplt eq "indoor"}وحده داخليه{/if}
                                                {if $ordershowRun1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                {if $ordershowRun1.poseplt eq "full"}كامل{/if}
                                                </td>
                                                <td>
                                                {if $ordershowRun1.process eq 0}<button class="btn btn-sm btn-default">غير مفعله</button>{/if}
                                                {if $ordershowRun1.process eq 1}<button class="btn btn-sm btn-default">مفعله</button>{/if}
                                                {if $ordershowRun1.process eq 3}<button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button>{/if}
                                                {if $ordershowRun1.process eq 4}<button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button>{/if}
                                                {if $ordershowRun1.process eq 5}<button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button>{/if}
                                                {if $ordershowRun1.process eq 6}<button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button>{/if}
                                                {if $ordershowRun1.process eq 7}<button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa-truck"></li></button>{/if}
                                                {if $ordershowRun1.process eq 8}<button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-truck"></li></button>{/if}
                                                </td>
                                                {if $ordershowRun1.process eq 3}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="4"><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 4}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td><a href="addition.php?act=repair&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button">  <i class="fa fa-fw fa-wrench"></i>   </button></a></td>
                                                    <td><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 5}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 6}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td><a href="addition.php?act=delivery&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> توصيل  </button></a></td>
                                                    <td><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                {if $ordershowRun1.process eq 7}
                                                    <td><a href="addition.php?act=addserviceido&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> خدمه اخرى  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=addpart&id={$ordershowRun1.ido}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> قطعه غيار  </button></a></td>
                                                    <td colspan="2"><a href="addition.php?act=finishorder&id={$ordershowRun1.ido}&pro={$ordershowRun1.process}&castumer={$ordershowRun1.idc}"><button class="btn btn-sm btn-primary" type="button"> انهاء </button></a></td>
                                                {/if}
                                                
                                        </tr>
                                        <tr>
                                            <td>الخدمات المقدمه</td>
                                            <td colspan="15">
                                                 {foreach from=$serviceOrder  key=k item=serviceOrder1 }
                                                   
                                                    {if $serviceOrder1.idoservice eq $ordershowRun1.ido}
                                                        {foreach from=$service  key=k item=service1 name=serviceff}
                                                            {if $service1.idserv eq $serviceOrder1.serviceido}
                                                               {if $smarty.foreach.serviceff.last}{$service1.nservicea}{else} {$service1.nservicea} -{/if}
                                                               
                                                            {/if}
                                                            {/foreach}
                                                   {/if}
                                                 {/foreach}
                                                
                                            </td>
                                        </tr>
                                         <tr ><td colspan="16"><hr/></td><tr>
                                        {*{if $ordershowRun1.note eq Null}{else}
                                         <tr >
                                             <td colspan="2">الملاحظات</td>
                                             <td colspan="13">{$ordershowRun1.note}</td> 
                                         </tr>
                                         <tr><td colspan="15"></td><hr/></tr>
                                        {/if}*}
                                       
                                {/foreach}
                                   
                                </tbody>
                            </table>
			  {/if}
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                {/if}
                    <!------------------------------------------------- /Order Runing show Castumer ------------------------------------------------------>
		
                                                        
                    <!------------------------------------------------- Order Runing Show Castumer ------------------------------------------------------>
             {if $action eq 'ordercastumer' && $st eq 1}
                <!-- Page Heading -->
                
              
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumename}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$phonec}
                            </div>
                        </div>  </div>
							
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumer}
                            </div>
                        </div></div>
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات المنتهيه
                            </li>
                             
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المنتهيه :  {$orderNowCount}
                            </li>
                            
                            <li class="active pull-left">
                                <td colspan=><a href="addition.php?act=addorder&id={$castumerid}" target="_blank"><button class="btn btn-default" type="button"> جـــــديــــدة</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=0&idc={$castumerid}"><button class="btn btn-warning" type="button"> جارية</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=1&idc={$castumerid}"><button class="btn btn-default" type="button"> انتهت</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=2&idc={$castumerid}"><button class="btn btn-danger" type="button"> ملغية</button></a></td>
                            </li>
                               
                        </ol>
                            
                           
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">

                                {if $ordershowRun eq null}
                                    <h1 class="text-center">لا يوجد عمليات منتهيه </h1>
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات المنتهيه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم الفاتوره</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowRun  key=k item=ordershowRun1}
                                           <tr>    
                                                <td> {$k+1}  </td>
                                                 <td> 
                                                   {foreach from=$invoices  item=invoices1}
                                                        {if $ordershowRun1.ido eq $invoices1.orderid} 
                                                            {$invoices1.bill}
                                                        {/if}
                                                    {/foreach}
                                                     
                                                 
                                                     
                                                 </td>
                                                <td> {$ordershowRun1.ido}  </td>
                                                <td>
                                                    {if (($now - {$ordershowRun1.orderdate|strtotime}) / 86400) eq 0} اليوم {else}  {(($now - $ordershowRun1.orderdate|strtotime) / 86400)|string_format:"%d"} يوم &nbsp; {/if}</td>
                                               <td> {$ordershowRun1.namema}  </td>
                                                <td>{$ordershowRun1.nameaa}</td>
                                                <td>
                                                     {foreach from=$mark  key=k item=mark1}
                                                    {if $ordershowRun1.idmark eq $mark1.idmark}{$mark1.namemarka}{/if}
                                                   
                                                    {/foreach}
                                                     {if $ordershowRun1.idmark eq 0}غير معرف{/if}
                                                      
                                                </td>
                                                <td>{$ordershowRun1.nameva}</td>
                                                   <td>
                                                {if $ordershowRun1.poseplt eq "part"}قطعه{/if}
                                                {if $ordershowRun1.poseplt eq "indoor"}وحده داخليه{/if}
                                                {if $ordershowRun1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                {if $ordershowRun1.poseplt eq "full"}كامل{/if}
                                                </td>
                                                <td>{if $ordershowRun1.idservo eq 3}نقل إل
                                                     {foreach from=$arealoop  item=arealoop1}
                                                        {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                            {$arealoop1.nameaa}
                                                    {/if}
                                                     {/foreach}
                                                    {else}{$ordershowRun1.nservicea}
                                                    {/if}</td>
                                             
                                    
                                        </tr>
                                        <tr>
                                            <td>الخدمات المقدمه</td>
                                            <td colspan="15">
                                                 {foreach from=$serviceOrder  key=k item=serviceOrder1 }
                                                   
                                                    {if $serviceOrder1.idoservice eq $ordershowRun1.ido}
                                                        {foreach from=$service  key=k item=service1 name=serviceff}
                                                            {if $service1.idserv eq $serviceOrder1.serviceido}
                                                               {if $smarty.foreach.serviceff.last}
                                                                   {if $service1.idserv eq 3} نقل  إلى
                                                                        {foreach from=$arealoop  item=arealoop1}
                                                                            {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                                                 {$arealoop1.nameaa}
                                                                             {/if}
                                                                        {/foreach}
                                                                            
                                                                    {else}
                                                                        {$service1.nservicea}
                                                                    {/if}
                                                               {else} 
                                                                    {if $service1.idserv eq 3} نقل  إلى
                                                                        {foreach from=$arealoop  item=arealoop1}
                                                                            {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                                                 {$arealoop1.nameaa} -
                                                                             {/if}
                                                                        {/foreach}
                                                                            
                                                                    {else}
                                                                        {$service1.nservicea} -
                                                                    {/if}
                                                               {/if}
                                                               
                                                            {/if}
                                                            {/foreach}
                                                   {/if}
                                                 {/foreach}
                                                
                                            </td>
                                        </tr>
                                         <tr ><td colspan="16"><hr/></td><tr>
                                        {*{if $ordershowRun1.note eq Null}{else}
                                         <tr >
                                             <td colspan="2">الملاحظات</td>
                                             <td colspan="13">{$ordershowRun1.note}</td> 
                                         </tr>
                                         <tr><td colspan="15"></td><hr/></tr>
                                        {/if}*}
                                       
                                {/foreach}
                                   
                                </tbody>
                            </table>
			  {/if}
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                {/if}
                    <!------------------------------------------------- /Order Runing show Castumer ------------------------------------------------------>
		
                    
                                                             
                    <!------------------------------------------------- Order Runing Show Castumer ------------------------------------------------------>
             {if $action eq 'ordercastumer' && $st eq 2}
                <!-- Page Heading -->
                
              
						 <div class="col-lg-4">
						<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">الاسم</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$castumename}
                            </div>
                        </div>  </div>
						<div class="col-lg-4">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">رقم التليفون او الجوال</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$phonec}
                            </div>
                        </div>  </div>
							
						<div class="col-lg-4">
												<div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">المنطقه</h3>
                            </div>
                            <div class="panel-body text-center">
                                {$areaCastumer}
                            </div>
                        </div></div>
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>العمليات المنتهيه
                            </li>
                             
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> عدد العمليات المنتهيه :  {$orderNowCount}
                            </li>
                            
                            <li class="active pull-left">
                                <td colspan=><a href="addition.php?act=addorder&id={$castumerid}" target="_blank"><button class="btn btn-default" type="button"> جـــــديــــدة</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=0&idc={$castumerid}"><button class="btn btn-warning" type="button"> جارية</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=1&idc={$castumerid}"><button class="btn btn-default" type="button"> انتهت</button></a></td>
                                <td colspan=><a href="addition.php?act=ordercastumer&st=2&idc={$castumerid}"><button class="btn btn-danger" type="button"> ملغية</button></a></td>
                            </li>
                               
                        </ol>
                            
                           
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">

                                {if $ordershowRun eq null}
                                    <h1 class="text-center">لا يوجد عمليات ملغية </h1>
                                {else}
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="16"><strong>العمليات المنتهيه</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>م</strong></td>
                                        <td><strong>رقم العمليه</strong></td>
                                         <td><strong>مده العمل	</strong></td>
                                        <td><strong>اسم الفني </strong></td>
                                        <td><strong>المنطقه</strong></td>
                                        <td><strong>الماركة</strong></td>
                                        <td><strong>الجهاز</strong></td>
                                        <td><strong>القطعه</strong></td>
                                        <td><strong>الخدمه</strong></td>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                {foreach from=$ordershowRun  key=k item=ordershowRun1}
                                           <tr>    
                                                <td> {$k+1}  </td>
                                                <td> {$ordershowRun1.ido}  </td>
                                                <td>
                                                    {if (($now - {$ordershowRun1.orderdate|strtotime}) / 86400) eq 0} اليوم {else}  {(($now - $ordershowRun1.orderdate|strtotime) / 86400)|string_format:"%d"} يوم &nbsp; {/if}</td>
                                               <td> {$ordershowRun1.namema}  </td>
                                                <td>{$ordershowRun1.nameaa}</td>
                                                <td>
                                                     {foreach from=$mark  key=k item=mark1}
                                                    {if $ordershowRun1.idmark eq $mark1.idmark}{$mark1.namemarka}{/if}
                                                   
                                                    {/foreach}
                                                     {if $ordershowRun1.idmark eq 0}غير معرف{/if}
                                                      
                                                </td>
                                                {if $ordershowRun1.poseplt eq null}
                                                    <td colspan="2">{$ordershowRun1.nameva}</td>
                                                {else}
                                                    <td>{$ordershowRun1.nameva}</td>
                                                    <td>
                                                        {if $ordershowRun1.poseplt eq "part"}قطعه{/if}
                                                        {if $ordershowRun1.poseplt eq "indoor"}وحده داخليه{/if}
                                                        {if $ordershowRun1.poseplt eq "outdoor"}وحده خارجيه{/if}
                                                        {if $ordershowRun1.poseplt eq "full"}كامل{/if}
                                                    </td>
                                                {/if}
                                               
                                                <td>{if $ordershowRun1.idservo eq 3}نقل إل
                                                     {foreach from=$arealoop  item=arealoop1}
                                                        {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                            {$arealoop1.nameaa}
                                                    {/if}
                                                     {/foreach}
                                                    {else}{$ordershowRun1.nservicea}
                                                    {/if}</td>
                                             
                                    
                                        </tr>
                                        <tr>
                                            <td>الخدمات المقدمه</td>
                                            <td colspan="15">
                                                 {foreach from=$serviceOrder  key=k item=serviceOrder1 }
                                                   
                                                    {if $serviceOrder1.idoservice eq $ordershowRun1.ido}
                                                        {foreach from=$service  key=k item=service1 name=serviceff}
                                                            {if $service1.idserv eq $serviceOrder1.serviceido}
                                                               {if $smarty.foreach.serviceff.last}
                                                                   {if $service1.idserv eq 3} نقل  إلى
                                                                        {foreach from=$arealoop  item=arealoop1}
                                                                            {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                                                 {$arealoop1.nameaa}
                                                                             {/if}
                                                                        {/foreach}
                                                                            
                                                                    {else}
                                                                        {$service1.nservicea}
                                                                    {/if}
                                                               {else} 
                                                                    {if $service1.idserv eq 3} نقل  إلى
                                                                        {foreach from=$arealoop  item=arealoop1}
                                                                            {if $ordershowRun1.areatransid eq $arealoop1.ida} 
                                                                                 {$arealoop1.nameaa} -
                                                                             {/if}
                                                                        {/foreach}
                                                                            
                                                                    {else}
                                                                        {$service1.nservicea} -
                                                                    {/if}
                                                               {/if}
                                                               
                                                            {/if}
                                                            {/foreach}
                                                   {/if}
                                                 {/foreach}
                                                
                                            </td>
                                        </tr>
                                        
                                        {if $ordershowRun1.resono ne 0}
                                            <tr>
                                                {foreach from=$reson  item=reson1}
                                                    {if $ordershowRun1.resono eq $reson1.idn} 
                                                         <td>السبب</td>
                                                 <td  colspan="3">{$reson1.namena}</td>
                                                        
                                                     {/if}
                                                {/foreach}
                                               
                                          
                                                
                                        {/if}
                                       
                                        {if $ordershowRun1.note ne Null}
                                            
                                                
                                                    
                                                <td>الملاحظات</td>
                                                 <td  colspan="11"> {$ordershowRun1.note}</td>
                                                         
                                                    
                                               
                                               
                                            </tr>
                                                
                                        {/if}
                                       
                                {/foreach}
                                   
                                </tbody>
                            </table>
			  {/if}
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                {/if}
                    <!------------------------------------------------- /Order Runing show Castumer ------------------------------------------------------>
		
                    
                    