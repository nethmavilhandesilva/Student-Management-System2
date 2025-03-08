<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                
                <!-- Logo Image (on the left side) -->
                <img src="{{ asset('assets/images.png') }}" alt="Esoft Logo" style="height: 40px; margin-right: 10px;">
                
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
                        <i class="bi bi-house-door" style="margin-right: 8px;"></i> Home
                    </a>
                </li>

                <li> 
                    <a href="{{ route('students.index', ['BranchId' => request()->route('BranchId')]) }}">
                        <i class="bi bi-person-lines-fill" style="margin-right: 8px;"></i> Students
                    </a>
                </li>

                <li>
                        <a href="{{ route('teachers.index', ['BranchId' => request()->route('BranchId')]) }}">
                        <i class="bi bi-person-badge" style="margin-right: 8px;"></i> Lecturers
                    </a>
                </li>

                <li>
                <a href="{{ route('branches.index', ['BranchId' => request()->route('BranchId')]) }}">
                        <i class="bi bi-diagram-3" style="margin-right: 8px;"></i> Branches
                    </a>
                </li>

                <li>
                    <a class="show-cat-btn" href="##">
                        <i class="bi bi-book" style="margin-right: 8px;"></i> Courses
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <i class="bi bi-arrow-down" aria-hidden="true"></i>
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
                </li>
                <script>
    document.addEventListener("DOMContentLoaded", function () {
        const showCatBtns = document.querySelectorAll(".show-cat-btn");

        showCatBtns.forEach((btn) => {
            btn.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent the default anchor action
                const subMenu = this.nextElementSibling;

                if (subMenu && subMenu.classList.contains("cat-sub-menu")) {
                    subMenu.classList.toggle("active");
                }
            });
        });
    });
</script>
<style>.cat-sub-menu {
    display: none;
    list-style: none;
    padding: 0;
}

.cat-sub-menu.active {
    display: block;
}
</style>

                <span class="system-menu__title">System</span>

                <ul class="sidebar-body-menu">
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-link">
                            <i class="bi bi-box-arrow-right" style="margin-right: 8px;"></i> Logout
                        </a>
                    </li>
                </ul>
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
