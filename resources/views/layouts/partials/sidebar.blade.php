<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Esoft</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a href="{{ route('welcome') }}" class="logo-wrapper" title="Home">
                        <span class="icon home" aria-hidden="true"></span>Home
                    </a>
                </li>
                <li>
                 <a href="{{ route('students.index', ['BranchId' => request()->route('BranchId')]) }}">
                 <span class="icon image" aria-hidden="true"></span>Students
                 </a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Lecturers
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon image" aria-hidden="true"></span>Branches
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon paper" aria-hidden="true"></span>Courses
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                    <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon image" aria-hidden="true"></span>Diplomas
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon image" aria-hidden="true"></span>Degrees
                    </a>
                </li>
                    </ul>
               
            <span class="system-menu__title">system</span>
            <ul class="sidebar-body-menu">
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-link">
                        <span class="icon edit" aria-hidden="true"></span>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
            <picture>
    <source srcset="{{ asset('assets/css/IMG-20250116-WA0002.jpg') }}" type="image/jpeg">
    <img src="{{ asset('assets/css/IMG-20250116-WA0002.jpg') }}" alt="User name">
</picture>

            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Nethma Vilhan De Silva</span>
                <span class="sidebar-user__subtitle">Owner</span>
            </div>
        </a>
    </div>
</aside>