<!-- Header -->
<div class="ol-header print-d-none d-flex align-items-center justify-content-between py-2 ps-3">
    <div class="header-title-menubar d-flex align-items-start flex-wrap mt-md-1">
        <div class="main-header-title d-flex align-items-start pb-sm-0 h-auto p-0">
            <button class="menu-toggler sidebar-plus">
                <span class="fi-rr-menu-burger"></span>
            </button>
            <h1 class="page-title ms-2 fs-18px d-flex flex-column row-gap-0">
                <span style="display: -webkit-box !important;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical !important;
                overflow: hidden !important;
                text-overflow: ellipsis !important;
                white-space: normal !important;">
                    {{ get_settings('system_title') }}
                </span>
                <p class="text-12px fw-400 d-none d-lg-none d-xl-inline-block mt-1">{{ get_phrase('Instructor Panel') }}</p>
            </h1>
        </div>
        <a href="{{ route('home') }}" target="_blank" class="btn btn-sm p-0 ms-4 ms-md-2 text-14px text-muted">
            <span>{{ get_phrase('View site') }}</span>
            <i class="fi-rr-arrow-up-right-from-square text-12px text-muted"></i>
        </a>
    </div>
    <div class="header-content-right d-flex align-items-center justify-content-end">

        <!-- Profile -->
        <div class="header-dropdown-md">
            <button class="header-dropdown-toggle-md" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-profile-sm">
                    <img src="{{ get_image(auth()->user()->photo) }}" alt="">
                </div>
            </button>
            <div class="header-dropdown-menu-md p-3">
                <div class="d-flex column-gap-2 mb-12px pb-12px ol-border-bottom-2">
                    <div class="user-profile-sm">
                        <img src="{{ get_image(auth()->user()->photo) }}" alt="">
                    </div>
                    <div>
                        <h6 class="title fs-12px mb-2px">{{ auth()->user()->name }}</h6>
                        <p class="sub-title fs-12px">{{ ucfirst(auth()->user()->role) }}</p>
                    </div>
                </div>
                <ul class="mb-12px pb-12px ol-border-bottom-2">
                    <li class="dropdown-list-1"><a class="dropdown-item-1" href="{{ route('my.profile') }}">{{ get_phrase('My Profile') }}</a></li>
                </ul>
                <ul>
                    <li class="dropdown-list-1"><a class="dropdown-item-1 logout-link" href="javascript:;">{{ get_phrase('Sign Out') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


 <script>
    document.addEventListener('DOMContentLoaded', function () {
        const token = localStorage.getItem('device_token');
        const logoutLinks = document.querySelectorAll('.logout-link');

        logoutLinks.forEach(link => {
            if (token) {
                const url = new URL("{{ route('logout') }}", window.location.origin);
                url.searchParams.append('user_agent', token);
                link.href = url.toString();
            } else {
                link.href = "{{ route('logout') }}";
            }
        });
    });
</script>