<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white shadow-sm sidebar collapse">
    <style>
        #sidebarMenu {
            min-height: 100vh;
            border-right: 1px solid #dee2e6;
        }

        #sidebarMenu .nav-link {
            color: #495057;
            padding: 12px 16px;
            border-radius: 8px;
            transition: background 0.2s, color 0.2s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #sidebarMenu .nav-link:hover {
            background-color: #f8f9fa;
            color: #007bff;
        }

        #sidebarMenu .nav-link.active {
            background-color: #ffc107;
            color: #212529;
            font-weight: bold;
        }

        #sidebarMenu .nav-link.active svg {
            color: #212529;
        }

        #sidebarMenu .nav-link span[data-feather] {
            width: 18px;
            height: 18px;
        }

        #sidebarMenu form button {
            width: 100%;
            background: #f8d7da;
            color: #721c24;
            padding: 12px 16px;
            border-radius: 8px;
            margin-top: 20px;
            font-weight: bold;
            transition: all 0.2s ease;
        }

        #sidebarMenu form button:hover {
            background: #f5c6cb;
        }
    </style>

    <div class="position-sticky pt-3 px-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard.*') ? 'active' : '' }}"
                   href="{{ route('dashboard.index') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('positions.*') ? 'active' : '' }}"
                   href="{{ route('positions.index') }}">
                    <span data-feather="tag"></span>
                    Jabatan / Posisi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('employees.*') ? 'active' : '' }}"
                   href="{{ route('employees.index') }}">
                    <span data-feather="users"></span>
                    Karyawan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('holidays.*') ? 'active' : '' }}"
                   href="{{ route('holidays.index') }}">
                    <span data-feather="calendar"></span>
                    Hari Libur
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('attendances.*') ? 'active' : '' }}"
                   href="{{ route('attendances.index') }}">
                    <span data-feather="clipboard"></span>
                    Absensi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('presences.*') ? 'active' : '' }}"
                   href="{{ route('presences.index') }}">
                    <span data-feather="clipboard"></span>
                    Data Kehadiran
                </a>
            </li>
        </ul>

        <form action="{{ route('auth.logout') }}" method="post"
              onsubmit="return confirm('Apakah anda yakin ingin keluar?')">
            @method('DELETE')
            @csrf
            <button type="submit">Keluar</button>
        </form>
    </div>
</nav>
