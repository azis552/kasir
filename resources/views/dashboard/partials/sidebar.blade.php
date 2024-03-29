 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @php
                   $role = Auth::user()->role;
               @endphp
               @foreach ($role as $i)
                @if ($i->id_akses == 1 || $i->id_akses == 2)
                 <li class="nav-item">
                     <a href="{{ route('dashboard.index') }}" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>                           
                 @endif
                <li class="nav-item {{ Route::is('data.petugas') || Route::is('akses.index') || Route::is('role.index') ? 'menu-open' : '' }} ">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Data Master
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                        @if ($i->id_akses == 1)
                         <li class="nav-item ">
                             <a href=" {{ route('data.petugas') }} " class="nav-link {{ Route::is('data.petugas')  ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Petugas</p>
                             </a>
                         </li>
                         <li class="nav-item ">
                            <a href=" {{ route('akses.index') }} " class="nav-link {{ Route::is('akses.index')  ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Menu</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href=" {{ route('role.index') }} " class="nav-link {{ Route::is('role.index')  ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Role</p>
                            </a>
                        </li>
                        @endif
                        @if ($i->id_akses == 1 || $i->id_akses == 2)
                        <li class="nav-item">
                            <a href=" {{route('categori.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kategori</p>
                            </a>
                        </li>
                         <li class="nav-item">
                             <a href=" {{route('barang.index')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Barang</p>
                             </a>
                         </li>
                         @endif
                     </ul>
                 </li>
                 
                 @if ($i->id_akses == 1 || $i->id_akses == 2)
                 <li class="nav-item">
                     <a href="{{ route('transaksi.index') }}" class="nav-link">
                        <i class=" nav-icon fas fa-comments-dollar"></i>
                         <p>
                             Transaksi Unpaid
                             
                         </p>
                     </a>
                 </li>
                 @endif
                 @if ($i->id_akses == 1 || $i->id_akses == 2)
                 <li class="nav-item">
                    <a href="{{ route('transaksi.terbayar') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p> 
                            Transaksi Paid
                            
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item {{ Route::is('laporan.barang') || Route::is('laporan.transaksi')  ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                       @if ($i->id_akses == 1)
                        <li class="nav-item ">
                            <a href=" {{ route('laporan.barang') }} " class="nav-link {{ Route::is('laporan.barang')  ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan barang</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                           <a href=" {{ route('laporan.transaksi') }} " class="nav-link {{ Route::is('laporan.transaksi')  ? 'active' : '' }}">
                               <i class="far fa-circle nav-icon"></i>
                               <p>Laporan Transaksi</p>
                           </a>
                       </li>
                       
                       @endif
                      
                    </ul>
                </li>
                 @if ($i->id_akses == 1 || $i->id_akses == 2)
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link ">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a>
              </li>   
              @endif               
              @endforeach
             </ul>
         </nav>
         
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

 