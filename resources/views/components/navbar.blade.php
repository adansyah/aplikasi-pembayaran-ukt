<nav>
    <i class='bx bx-menu'></i>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
    </form>
    {{-- <input type="checkbox" id="switch-mode" hidden> --}}
    {{-- <label for="switch-mode" class="switch-mode"></label> --}}

    <a href="#" class="profile d-flex align-items-center gap-3">
        <img src="{{ asset('style/people.png') }}" alt="Profile" class="rounded-circle" width="40" height="40"
            loading="lazy">
        <div class="d-flex flex-column">
            <span class="fw-semibold">Syahdan Mutahariq</span>
            <small class="text-muted">Semester 4</small>
        </div>
    </a>
</nav>
