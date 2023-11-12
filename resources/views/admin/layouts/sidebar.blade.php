    <!-- Sidebar -->

<div class="navbar-vertical navbar nav-dashboard">
    <div class="h-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="/admin/dashboard">
            <img src="{{ asset('template/dashuipro/assets/images/brand/logo/logo-2.svg') }}" alt="dash ui - bootstrap 5 admin dashboard template">
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <i data-feather="home" class="nav-icon me-2 icon-xxs" >
                    </i> Dashboard
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link"
                    href="/admin/laporan">
                    <i data-feather="calendar" class="nav-icon me-2 icon-xxs" >
                    </i> Laporan Kegiatan
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link"
                    href="pages/chat-app.html">
                    <i data-feather="message-square" class="nav-icon me-2 icon-xxs" >
                    </i> Daftar Ekskul
                </a>
               </li>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed " href="#!">
                    <i data-feather="mail" class="nav-icon me-2 icon-xxs" >
                    </i> Jadwal Ekskul
                </a>

                <div id="navEmail" class="collapse "
                    data-bs-parent="#sideNavbar">
                </div>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link " href="/admin/presensi">
                    <i data-feather="layout" class="nav-icon me-2 icon-xxs" >
                    </i> Presensi
                </a>
            </li>

            <li class="nav-item">
               <a class="nav-link has-arrow  collapsed " href="#!">
                   <i data-feather="layout" class="nav-icon me-2 icon-xxs" >
                   </i> Nilai
               </a>
           </li>
       </ul>
   </div>

   <div id="navCRM" class="collapse "
       data-bs-parent="#sideNavbar">
       <ul class="nav flex-column">
       </ul>
   </div>
</li>
           </div>
