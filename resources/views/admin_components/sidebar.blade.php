<!-- BEGIN: Sidebar Navigation -->
<!-- BEGIN: Sidebar -->
<div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden">
    </div>
    <div class="logo-segment">
        <!-- Application Logo -->
        <a class="flex items-center" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('assets/img/logo/logo.png') }}" class="black_logo" alt="logo" width="auto">
            <img src="{{ asset('assets/img/logo/logo.png') }}" class="white_logo" alt="logo">
        </a>

        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200" icon="fa-regular:dot-circle"></iconify-icon>
            <iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200" icon="material-symbols:circle-outline"></iconify-icon>
        </div>
        
    </div>
    <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <!-- Homepage Settings -->
            <li>
                <a href="{{route('admin.Settings','homepage-settings')}}" class="navItem {{url()->current()==route('admin.Settings','homepage-settings')?'active':''}}">
                    <span class="flex items-center">
                    <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Homepage</span>
                    </span>
                </a>
            </li>
            <!-- Course Settings -->
            <li>
                <a href="{{route('admin.Settings','loan-settings')}}" class="navItem {{url()->current()==route('admin.Settings','loan-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="solar:dollar-broken"></iconify-icon>
                        <span>Loans</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.loantabs')}}" class="navItem {{url()->current()==route('admin.loantabs')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="solar:dollar-broken"></iconify-icon>
                        <span>Loan Tabs</span>
                    </span>
                </a>
            </li>
         
            <!-- Pricing Settings -->
            <li>
                <a href="{{route('admin.Settings','cityloan-settings')}}" class="navItem {{url()->current()==route('admin.Settings','cityloan-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="solar:dollar-broken"></iconify-icon>
                        <span>City Loans</span>
                    </span>
                </a>
            </li>
           
            <!-- Bank Settings -->
            <li>
                <a href="{{route('admin.Settings','bank-settings')}}" class="navItem {{url()->current()==route('admin.Settings','bank-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="fluent-mdl2:blog"></iconify-icon>
                        <span>{{ __('Banking Partners') }}</span>
                    </span>
                </a>
            </li>
            <!-- Offer Settings -->
            <li>
                <a href="{{route('admin.Settings','offer-settings')}}" class="navItem {{url()->current()==route('admin.Settings','offer-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="fluent-mdl2:blog"></iconify-icon>
                        <span>{{ __('Offers') }}</span>
                    </span>
                </a>
            </li>
           
            <!-- Career Settings -->
            <li>
                <a href="{{route('admin.Settings','partner-settings')}}" class="navItem {{url()->current()==route('admin.Settings','partner-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:work-outline"></iconify-icon>
                        <span>Partners</span>
                    </span>
                </a>
            </li>

             <!-- About Settings -->
             <li>
                <a href="{{route('admin.Settings','about-settings')}}" class="navItem {{url()->current()==route('admin.Settings','about-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>About Us</span>
                    </span>
                </a>
            </li>
          
            <!-- Contact Settings -->
            <li>
                <a href="{{route('admin.Settings','contact-settings')}}" class="navItem {{url()->current()==route('admin.Settings','contact-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:contact-page-outline"></iconify-icon>
                        <span>Contact</span>
                    </span>
                </a>
            </li>
            <!-- Contact Settings -->
            <li>
                <a href="{{route('admin.Settings','enquiry-settings')}}" class="navItem {{url()->current()==route('admin.Settings','enquiry-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:contact-page-outline"></iconify-icon>
                        <span>Loan Enquiries</span>
                    </span>
                </a>
            </li>

           
        </ul>
    </div>
</div>
<!-- End: Sidebar -->