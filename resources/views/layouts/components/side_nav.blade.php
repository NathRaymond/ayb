<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<div class="card nav-card">
    <div class="card-header bg-navy text-white d-flex align-items-center">
        <i class="fas fa-bars me-2"></i> Navigation
    </div>
    <div class="card-body p-0">
        <nav class="nav flex-column">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
            <a href="/events" class="nav-link {{ request()->is('events') ? 'active' : '' }}">
                <i class="fas fa-calendar me-2"></i> Events
            </a>
            <a href="{{ route('event.past') }}" class="nav-link {{ request()->routeIs('event.past') ? 'active' : '' }}">
                <i class="fas fa-history me-2"></i> Past Events
            </a>
            <a href="{{ route('participants') }}" class="nav-link {{ request()->routeIs('participants') ? 'active' : '' }}">
                <i class="fas fa-users me-2"></i> Participants
            </a>
            <a href="{{ route('member.index') }}" class="nav-link {{ request()->routeIs('member.index') ? 'active' : '' }}">
                <i class="fas fa-user-friends me-2"></i> Members
            </a>
            <a href="{{ route('gallery.manage') }}" class="nav-link {{ request()->routeIs('gallery.manage') ? 'active' : '' }}">
                <i class="fas fa-images me-2"></i> Gallery
            </a>
            <a href="{{ route('bootcamp.datascience') }}" class="nav-link {{ request()->routeIs('bootcamp.datascience') ? 'active' : '' }}">
                <i class="fas fa-database me-2"></i> Data Science Users
            </a>
            <a href="{{ route('bootcamp.dataacademy') }}" class="nav-link {{ request()->routeIs('bootcamp.dataacademy') ? 'active' : '' }}">
                <i class="fas fa-graduation-cap me-2"></i> Data Academy Users
            </a>
        </nav>
    </div>
</div>

<style>
    :root {
        --navy: #1a2b4f;
        --white: #ffffff;
        --navy-light: #2c3e66;
        --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .nav-card {
        border: none;
        border-radius: 10px;
        background: var(--white);
        overflow: hidden;
        box-shadow: var(--card-shadow);
        height: 100%;
        min-width: 250px;
        max-width: 300px;
    }

    .card-header.bg-navy {
        background-color: var(--navy) !important;
        padding: 1.5rem;
        font-weight: 600;
        font-size: 1.2rem;
    }

    .nav-link {
        display: flex;
        align-items: center;
        padding: 14px 24px;
        color: var(--navy);
        font-weight: 500;
        font-size: 1rem;
        border-left: 4px solid transparent;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .nav-link:hover {
        background: #f1f5f9;
        border-left-color: var(--navy);
        color: var(--navy-light);
        transform: translateX(4px);
    }

    .nav-link.active {
        background: #e6e9f0;
        border-left-color: var(--navy);
        font-weight: 600;
        color: var(--navy);
    }

    .nav-link i {
        width: 24px;
        text-align: center;
    }

    @media (max-width: 992px) {
        .nav-card {
            height: auto;
            min-width: 100%;
            max-width: 100%;
        }

        .card-header.bg-navy {
            padding: 1rem;
            font-size: 1rem;
        }

        .nav.flex-column {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            gap: 5px;
            padding: 10px;
        }

        .nav-link {
            flex: 1 0 auto;
            padding: 8px 12px;
            border-left: none;
            border-bottom: 3px solid transparent;
            font-size: 0.9rem;
        }

        .nav-link:hover,
        .nav-link.active {
            border-left: none;
            border-bottom-color: var(--navy);
            transform: none;
        }
    }

    @media (max-width: 768px) {
        .nav-link {
            font-size: 0.85rem;
            padding: 6px 10px;
        }

        .nav-link i {
            margin-right: 8px;
        }
    }
</style>