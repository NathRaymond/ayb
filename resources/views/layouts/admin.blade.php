@extends('layouts.app')

@section('content')
<style>
    :root {
        --navy: #1a2b4f;
        --white: #ffffff;
        --navy-light: #2c3e66;
        --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .container-fluid {
        padding: 2rem 1rem;
        background: #f8fafc;
        min-height: 100vh;
    }

    .main-row {
        gap: 1.5rem;
        max-width: 1400px;
        margin: 0 auto;
        transition: all 0.3s ease;
    }

    .sidebar-col {
        transition: all 0.3s ease;
    }

    .content-col {
        transition: all 0.3s ease;
    }

    @media (max-width: 992px) {
        .main-row {
            flex-direction: column;
            gap: 1rem;
        }

        .sidebar-col {
            width: 100%;
        }

        .content-col {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding: 1rem 0.5rem;
        }

        .main-row {
            gap: 0.75rem;
        }
    }
</style>

<div class="container-fluid">
    <div class="row main-row justify-content-center">
        <div class="col-md-3 sidebar-col">
            @include("layouts.components.side_nav")
        </div>
        <div class="col-md-9 col-lg-7 content-col">
            @yield('rightMainContent')
        </div>
    </div>
</div>

@endsection