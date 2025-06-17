@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Segoe UI', sans-serif;
    }

    .industrial-card {
        border-radius: 12px;
        padding: 20px;
        background: #ffffff;
        border-left: 6px solid #ffc107; /* kuning safety */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        position: relative;
        transition: all 0.3s ease-in-out;
    }

    .industrial-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .industrial-title {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 6px;
    }

    .industrial-value {
        font-size: 2.2rem;
        font-weight: bold;
        color: #343a40;
    }

    .shortcut-industrial {
        background-color: #ffffff;
        border-left: 6px solid #17a2b8;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .shortcut-industrial h6 {
        font-size: 1rem;
        margin-bottom: 15px;
        color: #17a2b8;
    }

    .shortcut-industrial a {
        display: block;
        margin-bottom: 10px;
        color: #212529;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.2s;
    }

    .shortcut-industrial a:hover {
        color: #007bff;
        text-decoration: underline;
    }

    .icon-box {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 1.5rem;
        color: #dee2e6;
    }
</style>

<div class="container mt-4">
    <div class="row g-4">
        <div class="col-md-3">
            <div class="industrial-card">
                <div class="icon-box">⚙️</div>
                <p class="industrial-title">Data Jabatan</p>
                <p class="industrial-value">{{ $positionCount }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="industrial-card">
                <div class="icon-box">👷</div>
                <p class="industrial-title">Data Karyawan</p>
                <p class="industrial-value">{{ $userCount }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="industrial-card">
                <div class="icon-box">⏱️</div>
                <p class="industrial-title">Absen Masuk Hari Ini</p>
                <p class="industrial-value">{{ $attendanceCount }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="industrial-card">
                <div class="icon-box">🚪</div>
                <p class="industrial-title">Absen Keluar Hari Ini</p>
                <p class="industrial-value">{{ $attendanceCountOut }}</p>
            </div>
        </div>

        {{-- <div class="col-md-4 mt-4">
            <div class="shortcut-industrial">
                <h6>🔧 Menu Navigasi</h6>
                <a href="{{ route('positions.index') }}">📁 Jabatan</a>
                <a href="{{ route('employees.create') }}">👨‍🏭 Tambah Karyawan</a>
                <a href="{{ route('holidays.create') }}">📆 Hari Libur</a>
                <a href="{{ route('attendances.index') }}">🛠️ Absensi</a>
                <a href="{{ route('presences.index') }}">📊 Kehadiran</a>
            </div>
        </div> --}}
    </div>
</div>
@endsection
