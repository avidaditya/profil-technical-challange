<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigasi Menu</h5>

                <div>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                @if (request()->user()->hasRole([UserRoleEnum::Superadmin, UserRoleEnum::Admin, UserRoleEnum::Editor]))
                    <!-- Main -->
                    <li class="nav-item-header pt-0">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Content Management</div>
                        <i class="ph-dots-three sidebar-resize-show"></i>
                    </li>
                    <li
                        class="nav-item nav-item-submenu {{ request()->routeIs('admin-panel.cms.*') ? 'nav-item-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="ph-article-medium"></i>
                            <span>
                                Pages CMS
                            </span>
                        </a>
                        <ul class="nav-group-sub collapse {{ request()->routeIs('admin-panel.cms.*') ? 'show' : '' }}">
                            <li class="nav-item">
                                <a href="{{ route('admin-panel.cms.header.index') }}"
                                    class="nav-link {{ request()->routeIs('admin-panel.cms.header.*') ? 'active' : '' }}">Header</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin-panel.cms.footer.index') }}"
                                    class="nav-link {{ request()->routeIs('admin-panel.cms.footer.*') ? 'active' : '' }}">Footer</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a href="{{ route('admin-panel.cms.seo.index') }}"
                                    class="nav-link {{ request()->routeIs('admin-panel.cms.seo.*') ? 'active' : '' }}">SEO</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin-panel.cms.contact-and-social-media.index') }}"
                                    class="nav-link {{ request()->routeIs('admin-panel.cms.contact-and-social-media.*') ? 'active' : '' }}">Kontak
                                    & Sosial Media</a>
                            </li>
                            <li
                                class="nav-item nav-item-submenu {{ request()->routeIs('admin-panel.cms.homepage.*') ? 'nav-item-open' : '' }}">
                                <a href="#" class="nav-link">Homepage</a>
                                <ul
                                    class="nav-group-sub collapse {{ request()->routeIs('admin-panel.cms.homepage.*') ? 'show' : '' }}">
                                    <li class="nav-item"><a
                                            href="{{ route('admin-panel.cms.homepage.content.index') }}"
                                            class="nav-link {{ request()->routeIs('admin-panel.cms.homepage.content.*') ? 'active' : '' }}">Home
                                            Content</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('admin-panel.cms.homepage.jury.index') }}"
                                            class="nav-link {{ request()->routeIs('admin-panel.cms.homepage.jury.*') ? 'active' : '' }}">Juri</a>
                                    </li>
                                    <li class="nav-item"><a
                                            href="{{ route('admin-panel.cms.homepage.timeline.index') }}"
                                            class="nav-link {{ request()->routeIs('admin-panel.cms.homepage.timeline.*') ? 'active' : '' }}">Timeline</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin-panel.cms.faq.index') }}"
                                    class="nav-link {{ request()->routeIs('admin-panel.cms.faq.*') ? 'active' : '' }}">FAQ
                                    Page</a>
                            </li> --}}

                    </li>
            </ul>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('admin-panel.modal-popup.index') }}"
                    class="nav-link {{ request()->routeIs('admin-panel.modal-popup.*') ? 'active' : '' }}">
                    <i class="ph-clipboard-text"></i>
                    <span>
                        Modal Popup
                    </span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('admin-panel.location.index') }}"
                    class="nav-link {{ request()->routeIs('admin-panel.location.*') ? 'active' : '' }}">
                    <i class="ph-map-pin-line"></i>
                    <span>
                        Lokasi
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin-panel.faq.index') }}"
                    class="nav-link {{ request()->routeIs('admin-panel.faq.*') ? 'active' : '' }}">
                    <i class="ph-question"></i>
                    <span>
                        FAQ
                    </span>
                </a>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#"
                    class="nav-link {{ request()->routeIs('admin-panel.master-data.*') ? 'active' : '' }}">
                    <i class="ph-stack"></i>
                    <span>
                        Master Data
                    </span>
                </a>
                <ul
                    class="nav-group-sub collapse {{ request()->routeIs('admin-panel.master-data.job.*') ? 'show' : '' }}">
                    <li class="nav-item">
                        <a href="{{ route('admin-panel.master-data.job.index') }}"
                            class="nav-link {{ request()->routeIs('admin-panel.master-data.job.index') ? 'active' : '' }}">
                            <span>
                                Pekerjaan
                            </span>
                        </a>
                        <a href="{{ route('admin-panel.master-data.master_sektors.index') }}"
                            class="nav-link {{ request()->routeIs('admin-panel.master-data.master_sektors.index') ? 'active' : '' }}">
                            <span>
                                Master Sektor
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            @if (request()->user()->hasRole([UserRoleEnum::Superadmin, UserRoleEnum::Admin, UserRoleEnum::Moderator]))
                <!-- Features -->
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Features</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('admin-panel.member.*') ? 'active' : '' }}">
                        <i class="ph-user"></i>
                        <span>
                            Peserta
                        </span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->routeIs('admin-panel.member.*') ? 'show' : '' }}">
                        <li class="nav-item">
                            <a href="{{ route('admin-panel.member.verified') }}"
                                class="nav-link {{ request()->routeIs('admin-panel.member.verified') ? 'active' : '' }}">
                                <i class="ph-check-circle"></i>
                                <span>
                                    Verified
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin-panel.member.not-verified') }}"
                                class="nav-link {{ request()->routeIs('admin-panel.member.not-verified') ? 'active' : '' }}">
                                <i class="ph-shield-warning"></i>
                                <span>
                                    Not Verified
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin-panel.solusi.index') }}"
                        class="nav-link {{ request()->routeIs('admin-panel.solusi.index') ? 'active' : '' }}">
                        <i class="ph-lightbulb-filament"></i>
                        <span>
                            Ide
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-panel.komentar.index') }}"
                        class="nav-link {{ request()->routeIs('admin-panel.komentar.index') ? 'active' : '' }}">
                        <i class="ph-chats"></i>
                        <span>
                            Komentar
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-panel.blacklist.index') }}"
                        class="nav-link {{ request()->routeIs('admin-panel.blacklist.index') ? 'active' : '' }}">
                        <i class="ph-smiley-x-eyes"></i>
                        <span>
                            Blacklist
                        </span>
                    </a>
                </li>
                <!-- End of Features -->
            @endif

            <!-- Components -->
            <li class="nav-item-header">
                <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">System</div>
                <i class="ph-dots-three sidebar-resize-show"></i>
            </li>
            @if (request()->user()->hasRole([UserRoleEnum::Superadmin, UserRoleEnum::Admin]))
                <li class="nav-item">
                    <a href="{{ route('admin-panel.admin-user.index') }}"
                        class="nav-link {{ request()->routeIs('admin-panel.admin-user.index') ? 'active' : '' }}">
                        <i class="ph-user-circle"></i>
                        <span>
                            Admin User
                        </span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a href="{{ url('/logout') }}" class="nav-link">
                    <i class="ph-sign-out"></i>
                    <span>
                        Logout
                    </span>
                </a>
            </li>
            <!-- /components -->
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
