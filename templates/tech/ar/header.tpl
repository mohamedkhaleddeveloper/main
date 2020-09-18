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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> <i class="fa fa-user"></i> {$username} </a>
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
                 <a href="{$stay1}{if $stay2 eq Null}?lang=en {else}?lang=en&{$stay2}{/if}"><i class="fa fa-language"></i> &nbsp; English   &nbsp; </a>
                </li>
            </ul>