<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<br>
						<li >
							<a href="{{route('beranda')}}" class="{{ request()->is('beranda') ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
						</li>
						
						<li><a href="{{route('Create_Pengajuan')}}" class="{{ request()->is('Create_Pengajuan') ? 'active' : ''}}"><i class="lnr lnr-file-add"></span></i> <span>Pengajuan</span></a></li>
						@if(auth()->user()->level=="admin")
						<li><a href="{{route('Data_Pengajuan')}}" class="{{ request()->is('Data_Pengajuan') ? 'active' : ''}}"><i class="fa fa-table"></i> <span>Kelola Pengajuan</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Kelola Subdomain</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">								
									<li><a href="{{route('Data_SitusWeb')}}" class="{{ request()->is('Data_SitusWeb') ? 'active' : ''}}" class=""><span>Monitor Data Subdomain Web</span></a></li>
									<li><a href="{{route('Data_SubdomainHosting')}}" class="{{ request()->is('Data_PembuatanWebAplikasi') ? 'active' : ''}}" class="">Monitor Data Subdomain dan Hosting Aplikasi</a></li>
									<li><a href="{{route('Data_Subdomain')}}" class="{{ request()->is('Data_Subdomain') ? 'active' : ''}}" class="">Monitor Data Subdomain</a></li>
									<li><a href="{{route('Data_PembuatanWebAplikasi')}}" class="{{ request()->is('Data_PembuatanWebAplikasi') ? 'active' : ''}}" class="">Monitor Data Pembatan Web / Aplikasi</a></li>
									
								</ul>
							</div>
						</li>
						<li><a href="{{route('Data_Syarat')}}" class="{{ request()->is('Data_Syarat') ? 'active' : ''}}"><i class="fa fa-table"></i> <span>Kelola Syarat </span></a></li>
						<li><a href="{{route('Data_Admin')}}" class="{{ request()->is('Data_Admin') ? 'active' : ''}}"><i class="fas fa-users"></i> <span>Kelola User</span></a></li>

						@endif
						
						<li><a href="{{route('logout')}}" class="{{ request()->is('logout') ? 'active' : ''}}"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
					</ul>
				</nav>
			</div>
		</div>