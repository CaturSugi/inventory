@php
    // $userRole = auth()->user()->role; // Assuming you have a role field in your user model

    $menus = [
		(object)[
			'title' => 'Dashboard',
			'url' => '/dashboard',
			'icon' => 'icon-home',
		],
        (object)[
            'title' => 'Inventory',
            'url' => '#',
            'icon' => 'icon-layers',
            'submenus' => [
                (object)[
                    'title' => 'Stok Barang',
					'url' => '/barang',
					'icon' => 'icon-grid'
                ],

                (object)[
                    'title' => 'Barang Masuk',
					'url' => '/barangmasuk',
					'icon' => 'icon-cloud-download'
				],

				(object)[
					'title' => 'Barang Keluar',
					'url' => '/barangkeluar',
					'icon' => 'icon-cloud-upload'
				],
				// (object)[
				// 	'title' => 'Registrasi Barang',
				// 	'url' => '/barang',
				// 	'icon' => 'icon-note'
				// ],
            ]
        ],
    ];
@endphp

<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
		<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
		<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
		<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			@foreach ($menus as $menu)
				@php
					// Cek apakah submenu aktif
					$isSubmenuActive = false;
					if (isset($menu->submenus)) {
						foreach ($menu->submenus as $submenu) {
							if (request()->is(ltrim($submenu->url, '/'))) {
								$isSubmenuActive = true;
								break;
							}
						}
					}
				@endphp
				@if (isset($menu->submenus))
					<li class="nav-item {{ $isSubmenuActive ? 'active open' : '' }}">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="{{ $menu->icon }}"></i>
							<span class="title">{{ $menu->title }}</span>
							<span class="arrow {{ $isSubmenuActive ? 'open' : '' }}"></span>
						</a>
						<ul class="sub-menu" style="{{ $isSubmenuActive ? 'display:block;' : '' }}">
							@foreach ($menu->submenus as $submenu)
								<li class="nav-item {{ request()->is(ltrim($submenu->url, '/')) ? 'active' : '' }}">
									<a href="{{ $submenu->url }}" class="nav-link">
										<i class="{{ $submenu->icon }}"></i>
										<span class="title">{{ $submenu->title }}</span>
									</a>
								</li>
							@endforeach
						</ul>
					</li>
				@else
					<li class="nav-item {{ request()->is(ltrim($menu->url, '/')) ? 'active' : '' }}">
						<a class="nav-link" href="{{ $menu->url }}">
							<i class="{{ $menu->icon }}"></i>
							<span class="title">{{ $menu->title }}</span>
						</a>
					</li>
				@endif
			@endforeach
			<!-- BEGIN ANGULARJS LINK -->
			<li>
				<a href="#" data-toggle="modal" data-target="#logoutModal">
				<i class="icon-logout"></i>
				<span class="title">LogOut</span>
				</a>
			</li>

			<!-- Logout Confirmation Modal -->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Are you sure you want to log out?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</button>
						</div>
					</div>
				</div>
			</div>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
			<!-- END ANGULARJS LINK -->
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>