<?php 
require_once 'class.castumer.php'; 
if($pos == 1 Or $pos == 2){
			if(isset($_GET['day'])){
				$day = $_GET['day'];
			}else{
				$day = date("j");
			}
			if(isset($_GET['month'])){
				$month = $_GET['month'];
			}else{
				$month = date("m");
			}
			if(isset($_GET['year'])){
				$year = $_GET['year'];
			}else{
				$year = date("Y");
			}
			
			$currentTimeStamp = strtotime("$year-$month-$day");
			$monthName = date("F", $currentTimeStamp);
                        $monthNameAr = daten::monthAr($monthName);
			$numDays = date("t", $currentTimeStamp);
			$counter = 0;
                        
                       
                        
                        if($en == 'en'){
?>

<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>celender</title>

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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
                <a class="navbar-brand " href="index.php?lang=en"><i class="fa fa-cogs" aria-hidden="true"></i> ElOtl Campny</a>
            </div>
            
            
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                 <li class="dropdown">
                 <a href="celender.php"><i class="fa fa-language"></i> &nbsp;عربي &nbsp; </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> <i class="fa fa-user"></i>&nbsp; <?php echo $usernameme; ?> </a>
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
                

            </ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php?lang=en"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                                                        <li>
                                    <a href="addition.php?lang=en&act=search"><i class="fa fa-fw fa-search"></i> Find client</a>
                                </li>
                                 <li>
                                    <a href="celender.php?lang=en"><i class="fa fa-fw fa-calendar"></i> Celender </a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=orderdate"><i class="fa fa-fw fa-adjust"></i>  Today operations <span class="btn btn-xs btn-default marginit"><?php echo $ordernow; ?></span></a>   	
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=orderactive"><i class="fa fa-fw fa-check-square"></i>  active operations   <span class="btn btn-xs btn-success marginit"><?php echo $orderactive; ?></span></a>   	
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=orderuning"><i class="fa fa-fw fa-cogs"></i>  Ongoing operations  <span class="btn btn-xs btn-primary marginit"><?php echo $orderuning; ?></span></a>   	
                                </li> 
                                 <li>
                                    <a href="addition.php?lang=en&act=orderunactive"><i class="fa fa-fw fa-times-circle"></i> Operations inactive  <span class=" btn btn-xs btn-warning marginit"><?php echo $orderunactive; ?></span></a>
                                </li> 
                                <li>
                                    <a href="addition.php?lang=en&act=penorder"><i class="fa fa-fw fa-clock-o"></i> Operations Pending <span class=" btn btn-xs btn-warning marginit"> <?php echo $orderpen; ?></span></a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=ordercancel"><i class="fa fa-fw fa-times-circle"></i> Canceled operations <span class=" btn btn-xs btn-danger marginit"><?php echo $ordercancle; ?></span></a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=report"><i class="fa fa-file-text-o"></i> Report </a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=reportst"><i class="fa fa-files-o"></i> Reports </a>
                                </li>
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-plus"></i> Additions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                               
                                <li>
                                    <a href="addition.php?lang=en&act=addcastumer"><i class="fa fa-fw fa-user"></i>  Client   </a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addemployee"><i class="fa fa-fw fa-user-md"></i>  employees</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addarea"><i class="fa fa-fw fa-location-arrow"></i>   Area </a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=adddevice"><i class="fa fa-fw fa-desktop"></i>  Device</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addcarer"><i class="fa fa-fw fa-joomla"></i>  Occupations</a>
                                </li>
                                <li>
                                    <a href="addition.php?lang=en&act=addcountry"><i class="fa fa-fw fa-area-chart"></i>  Country</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addairport"><i class="fa fa-fw fa-plane"></i>   Ports</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addpayment"><i class="fa fa-fw fa-credit-card"></i>  payment</a>
                                </li>
                                 <li>
                                    <a href="addition.php?lang=en&act=addreson"><i class="fa fa-fw fa-navicon"></i> Reasons </a>
                                </li>
                                 
                        </ul>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		
		
		
		
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <i class="fa fa-fw fa-calendar"></i> Celender 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                               <h4> The Celender Of operations  </h4>
                            </li>
                        </ol>
                    </div>
                </div>
               
		<table  class = "table table-bordered table-hover table-striped text-center table-responsive" border="1">
			<tr>
				<td><input type="button" value="<" name="previousbutton" onclick="goLastMonth(<?php echo $month.",".$year?>)"></td>
				<td colspan="5"><?php echo $monthName." , " . $year; ?></td>
				<td><input type="button" value=">" name="nextbutton" onclick="goNextMonth(<?php echo $month.",".$year?>)"></td>
			</tr>
			<tr>
				<td>Sat</td>
				<td >Sun</td>
				<td >Mon</td>
				<td>Tue</td>
				<td>Wed</td>
				<td>Thu</td>
				<td>Fri</td>
			</tr>
			<tr>
			<?php
				for($i = 1; $i < $numDays+1; $i++ , $counter++){
					$timeStamp = strtotime("$year-$month-$i");
						if($i == 1){
							$fristDay = date("w", $timeStamp);
							for($j = -1; $j < $fristDay; $j++, $counter++){
								echo "<td>&nbsp;</td>";
							}
						}
						if($counter %7 == 0){
							echo "</tr><tr>";
						}
						$dateet = $year."-".$month."-".$i;
						$ordercountam = ordero::countOfOrder("where `orderdate` = '$dateet' AND `timing` = 'am' AND `process` = 0 AND `resono` = 0");
                                                $ordercountwk = ordero::countOfOrder("where `odatedp` = '$dateet' AND `timingdp` = 'am' AND `process` > 3 AND `resono` = 0");
                                                $ordercountac = ordero::countOfOrder("where `orderdate` = '$dateet' AND `timing` = 'am' AND `process` = 1 AND `resono` = 0");
                                                $ordercountpm = ordero::countOfOrder("where `orderdate` = '$dateet' AND `timing` = 'pm' AND `process` = 0 AND `resono` = 0");
                                                $ordercountpwk = ordero::countOfOrder("where `odatedp` = '$dateet' AND `timingdp` = 'pm' AND`process` > 3 AND `resono` = 0");
                                                $ordercountpacp = ordero::countOfOrder("where `orderdate` = '$dateet' AND `timingdp` = 'pm' AND `process` = 1 AND `resono` = 0");
                                                echo "<td><br/>".$i."<hr/>AM<br/><button class='btn btn-sm btn-default' type='button'>  ".$ordercountam." </button>
                                                        <button class='btn btn-sm btn-warning' type='button'>".$ordercountwk."</button>
                                                        <button class='btn btn-sm btn-success' type='button'>".$ordercountac."</button>
                                                        <hr/>PM<br/><button class='btn btn-sm btn-default' type='button'> ".$ordercountpm." </button>
                                                        <button class='btn btn-sm btn-warning' type='button'>".$ordercountpwk."</button> 
                                                        <button class='btn btn-sm btn-success' type='button'>".$ordercountpacp."</button>
                                                       <hr/>
						  <form action='addition.php?lang=en&act=orderdate' method='POST'>
                                                        <input type='hidden' name='orderdate' value='$dateet' />
                                                        <input type='submit' class='btn btn-sm btn-default' name='prepar' value='Un Active'>
                                                        </form>  <br/>
                                                         <form action='addition.php?lang=en&act=orderactive' method='POST'>
                                                        <input type='hidden' name='orderactive' value='$dateet' />
                                                        <input type='submit' class='btn btn-sm btn-success' name='prepar' value='Active'>
                                                        </form> 
                                                        <br/>
						</td>";
                                                
				}
				
			?>
			</tr>
		</table>

               

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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
		
		
		

<script>

			function goLastMonth(month, year){
				if(month == 1){
					--year;
					month = 12;
				}
				document.location.href = "<?php $_SERVER['PHP_SELF'];?>?lang=en&month="+(month-1)+"&year="+year;
				
			}
			function goNextMonth(month, year){
				if(month == 12){
					++year;
					month = 0;
				}
				document.location.href = "<?php $_SERVER['PHP_SELF'];?>?lang=en&month="+(month+1)+"&year="+year;
			}
			
		</script>
</html>

<!--------------------------------------------------------Arabic----------------------------------------------------------------------->
<?php }else{ ?>


<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>مزامنه الاعمال </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Core CSS RTL-->
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/sb-admin-rtl.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
                <a class="navbar-brand" href="index.php"><i class="fa fa-cogs" aria-hidden="true"></i> مؤسسه العطل  التجاريه</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-left top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> <i class="fa fa-user"></i> <?php  echo $usernamema; ?> </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> الصفحه الشخصيه</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> الضبط</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> تسجيل خروج</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                 <a href="celender.php?lang=en"><i class="fa fa-language"></i> &nbsp; English   &nbsp; </a>
                </li>
            </ul>
			
		<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> الرئيسيه</a>
                    </li>
                                                        <li>
                                    <a href="addition.php?act=search"><i class="fa fa-fw fa-search"></i>البحث عن عميل</a>
                                </li>
                                <li>
                                    <a href="celender.php"><i class="fa fa-fw fa-calendar"></i> المزامنه </a>
                                </li>
                                
                                
                     <li>
                                    <a href="addition.php?act=orderdate"><i class="fa fa-fw fa-adjust"></i> معاملات اليوم  <span class="btn btn-xs btn-default marginit"><?php echo $ordernow; ?></span></a>   	
                                </li>
                                 <li>
                                    <a href="addition.php?act=orderactive"><i class="fa fa-fw fa-check-square"></i> معاملات مفعله  <span class="btn btn-xs btn-success marginit"><?php echo $orderactive; ?></span></a>   	
                                </li>
                                <li>
                                    <a href="addition.php?act=orderuning"><i class="fa fa-fw fa-cogs"></i> معاملات جاريه  <span class="btn btn-xs btn-primary marginit"><?php echo $orderuning; ?></span></a>   	
                                </li>                          
                                <li>
                                    <a href="addition.php?act=penorder"><i class="fa fa-fw fa-clock-o"></i> معاملات معلقه<span class=" btn btn-xs btn-warning marginit"><?php echo $orderpen; ?></span></a>
                                </li>
                                   <li>
                                    <a href="addition.php?act=orderunactive"><i class="fa fa-fw fa-times-circle"></i> معاملات  غير مفعله<span class=" btn btn-xs btn-warning marginit"><?php echo $orderunactive; ?></span></a>
                                </li> 
                                 <li>
                                    <a href="addition.php?act=ordercancel"><i class="fa fa-fw fa-times-circle"></i> معاملات  ملغيه<span class=" btn btn-xs btn-danger marginit"><?php echo $ordercancle; ?></span></a>
                                </li>
                                             
                                <li>
                                    <a href="addition.php?act=report"><i class="fa fa-file-text-o"></i> تقرير يومي </a>
                                </li>
                                <li>
                                    <a href="addition.php?act=reportst"><i class="fa fa-files-o"></i>تقرير بتحديد فترة </a>
                                </li>
                               
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-plus"></i> الإضافات <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                               
                                <li>
                                    <a href="addition.php?act=addcastumer"><i class="fa fa-fw fa-user"></i>إضافه عميل </a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addemployee"><i class="fa fa-fw fa-user-md"></i>إاضافه موظف</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addarea"><i class="fa fa-fw fa-location-arrow"></i>إضافه منطقه </a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=adddevice"><i class="fa fa-fw fa-desktop"></i> إضافه جهاز</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addcarer"><i class="fa fa-fw fa-joomla"></i> إضافه مهنه</a>
                                </li>
                                <li>
                                    <a href="addition.php?act=addcountry"><i class="fa fa-fw fa-area-chart"></i> إضافه دوله</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addairport"><i class="fa fa-fw fa-plane"></i> إضافه ميناء</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addpayment"><i class="fa fa-fw fa-credit-card"></i> إضافه طريقه دفع</a>
                                </li>
                                 <li>
                                    <a href="addition.php?act=addreson"><i class="fa fa-fw fa-navicon"></i> إضافه اسباب</a>
                                </li>
                                 
                        </ul>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        
		
		
		
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <i class="fa fa-fw fa-calendar"></i> مزامنه 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                               <h4> مزامنه الاعمال </h4>
                            </li>
                             <li class="active pull-left">
                              معاملات جديده  <button class='btn btn-sm btn-default' type='button'></button>
                              منتهيه وتوصيل <button class='btn btn-sm btn-warning' type='button'> </button> 
                               مفعله <button class='btn btn-sm btn-success' type='button'> </button> 
                            </li>
                        </ol>
                        
                    </div>
                </div>
               
		<table  class = "table-bordered table-hover table-striped text-center table-responsive" border="1">
			<tr>
				<td><input type="button" value="<" name="previousbutton" onclick="goLastMonth(<?php echo $month.",".$year?>)"></td>
				<td colspan="5"><?php echo  $monthNameAr." , " . $year; ?></td>
				<td><input type="button" value=">" name="nextbutton" onclick="goNextMonth(<?php echo $month.",".$year?>)"></td>
			</tr>
			<tr>
				<td>السبت</td>
				<td >الأحد</td>
				<td >الأثنين</td>
				<td>الثلاثاء</td>
				<td>الاربعاء</td>
				<td>الخميس</td>
				<td>الجمعه</td>
			</tr>
			<tr>
			<?php
                        
				for($i = 1; $i < $numDays+1; $i++ , $counter++){
					$timeStamp = strtotime("$year-$month-$i");
						if($i == 1){
							$fristDay = date("w", $timeStamp);
							for($j = -1; $j < $fristDay; $j++, $counter++){
								echo "<td>&nbsp;</td>";
							}
						}
						if($counter %7 == 0){
							echo "</tr><tr>";
						}
						$dateet = $year."-".$month."-".$i;
						$ordercountam = ordero::countOfOrder("where `orderdate` = '$dateet' AND `timing` = 'am' AND `process` = 0 AND `resono` = 0");
                                                $ordercountwk = ordero::countOfOrder("where `odatedp` = '$dateet' AND `timingdp` = 'am' AND `process` > 3 AND `resono` = 0");
                                                $ordercountac = ordero::countOfOrder("where `orderdate` = '$dateet' AND `timing` = 'am' AND `process` = 1 AND `resono` = 0");
                                                $ordercountpm = ordero::countOfOrder("where `orderdate` = '$dateet' AND `timing` = 'pm' AND `process` = 0 AND `resono` = 0");
                                                $ordercountpwk = ordero::countOfOrder("where `odatedp` = '$dateet' AND `timingdp` = 'pm' AND`process` > 3 AND `resono` = 0");
                                                $ordercountpacp = ordero::countOfOrder("where `orderdate` = '$dateet' AND `timingdp` = 'pm' AND `process` = 1 AND `resono` = 0");
						echo "<td><br/>".$i."<hr/>صباحا<br/><button class='btn btn-sm btn-default' type='button'>  ".$ordercountam." </button>
                                                        <button class='btn btn-sm btn-warning' type='button'>".$ordercountwk."</button>
                                                        <button class='btn btn-sm btn-success' type='button'>".$ordercountac."</button>
                                                        <hr/>مساءا<br/><button class='btn btn-sm btn-default' type='button'> ".$ordercountpm." </button>
                                                        <button class='btn btn-sm btn-warning' type='button'>".$ordercountpwk."</button> 
                                                        <button class='btn btn-sm btn-success' type='button'>".$ordercountpacp."</button>
                                                        <hr/>
						  <form action='addition.php?act=orderdate' method='POST'>
                                                        <input type='hidden' name='orderdate' value='$dateet' />
                                                        <input type='submit' class='btn btn-sm btn-default' name='prepar' value='غير مفعله'>
                                                        </form> <br/>
                                                           <form action='addition.php?act=orderactive' method='POST'>
                                                        <input type='hidden' name='orderactive' value='$dateet' />
                                                        <input type='submit' class='btn btn-sm btn-success' name='prepar' value='مفعله'>
                                                        </form> 
                                                        <br/>
						</td>";
				}
				
			?>
			</tr>
		</table>

               

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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
		
		
		

<script>

			function goLastMonth(month, year){
				if(month == 1){
					--year;
					month = 12;
				}
				document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+(month-1)+"&year="+year;
				
			}
			function goNextMonth(month, year){
				if(month == 12){
					++year;
					month = 0;
				}
				document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+(month+1)+"&year="+year;
			}
			
		</script>
</html>



<?php }

        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
        }

?>


