<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"> <h6 class="text-muted font-semibold">WELCOME!</h6></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Penilaian Kepala Divisi</span>
                </a>
               
            <li
                class="sidebar-item  ">
                <a href="<?php echo site_url('login/logout'); ?>" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>LOG OUT</span>
                </a>
            </li>
        
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            