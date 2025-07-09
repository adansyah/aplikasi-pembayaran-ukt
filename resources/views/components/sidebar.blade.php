<section id="sidebar">
    <a href="/admin" class="brand">
        <i class='bx bx-user-circle'></i>
        <span class="text">Syahdan Mutahariq</span>
    </a>
    <ul class="side-menu top">
        <li class="{{ request()->is('admin') ? 'active' : '' }}"">
            <a href="admin">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-user-rectangle'></i>
                <span class="text">Profile</span>
            </a>
        </li>
        <li class="{{ request()->is('tagihan') ? 'active' : '' }}"">
            <a href="tagihan">
                <i class='bx bxs-wallet'></i>
                <span class="text">Tagihan</span>
            </a>
        </li>
        <li class="{{ request()->is('riwayat') ? 'active' : '' }}">
            <a href="riwayat">
                <i class='bx bx-task'></i>
                <span class="text">Riwayat Transaksi</span>
            </a>
        </li>
        <li>
            <a href="/" class="logout">
                <i class='bx bx-log-out'></i>
                <span class="text">Logout</span>
            </a>
        </li>
        {{-- <li>
            <a href="#">
                <i class='bx bxs-group'></i>
                <span class="text">Drop Semester</span>
            </a>
        </li> --}}
    </ul>
    {{-- <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li> --}}

</section>
