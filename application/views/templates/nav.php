<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><h1>PHP Codeigniter</h1></span>
                            <span class="block m-t-xs">Ini PHP Codeigniter broo </span>
                        </a>

                    </div>
                    <div class="logo-element">
                        MVC
                    </div>
                </li>
                <!-- <?= $nav['navacchome'];?> -->
                <li class="<?= $nav['navacchome'];?>">
                    <a  href="<?= base_url(); ?>home/index"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                </li>
                <li class="<?= $nav['navaccuks'];?>">
                    <a  href="<?= base_url(); ?>uks/index"><i class="fa fa-hospital-o"></i> <span class="nav-label">UKS</span></a>
                </li>
                <li class="<?= $nav['navaccpeople'];?>">
                    <a  href="<?= base_url(); ?>people/index"><i class="fa fa-user"></i> <span class="nav-label">People</span></a>
                </li>
                
                <!-- <li >
                    <a href="#"><i class="fa fa-search"></i> <span class="nav-label">CRUD</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="active"><a href="CRUD_UKS.html" >UKS</a></li>
                        <li><a href="CRUD_Siswa.html">Siswa</a></li>

                    </ul>
                </li> -->
            
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
    <nav class="navbar navbar-static-top  white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
        <ul class="nav navbar-top-links navbar-right">

   


            <li>
                <a href="login.html">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>

    </nav>
</div>




<!-- gunakan foreach untuk menggunakan bredcum -->
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <h2>Home</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#"><strong>Home</strong></a>
                </li>
               
            </ol>
        </div>
    </div>