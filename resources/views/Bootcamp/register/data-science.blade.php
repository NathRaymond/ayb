@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/datatables.net-dt@1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<div class="container-fluid py-4">
    <div class="row justify-content-center g-4">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="sidebar-nav">
                @include("layouts.components.side_nav")
            </div>
        </div>

        <!-- Main Content Column -->
        <div class="col-md-9 col-lg-7">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center bg-navy text-white">
                    <h5 class="mb-0">Data Science Applicants</h5>
                    <a href="{{ route('export.bootcamps', ['eventtype' => 'DataScience']) }}" class="btn btn-white">
                        <i class="fas fa-file-export me-1"></i> Export Data
                    </a>

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="dataScienceTable" class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0" style="width:100%">
                            <thead class="table-navy">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Join As</th>
                                    <th scope="col">Event Type</th>
                                    <th scope="col">Date Registered</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bootcamps as $bootcamp)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $bootcamp->firstname }}</td>
                                    <td>{{ $bootcamp->lastname }}</td>
                                    <td class="text-truncate" style="max-width: 150px;">{{ $bootcamp->email }}</td>
                                    <td>{{ $bootcamp->phone }}</td>
                                    <td>{{ $bootcamp->country }}</td>
                                    <td>{{ $bootcamp->jobtitle }}</td>
                                    <td>{{ $bootcamp->joinas }}</td>
                                    <td>{{ $bootcamp->eventtype }}</td>
                                    <td>{{ $bootcamp->created_at->format('M d, Y') }}</td>
                                    <td class="d-flex">
                                        <a href="" class="btn btn-sm btn-outline-navy me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-outline-navy">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --navy: #1a2b4f;
        --white: #ffffff;
        --navy-light: #2c3e66;
        --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    /* Custom Navy Classes */
    .bg-navy {
        background-color: var(--navy) !important;
    }

    .table-navy {
        background-color: var(--navy);
        color: var(--white);
    }

    .btn-white {
        background-color: var(--white);
        border-color: var(--white);
        color: var(--navy);
        transition: all 0.2s ease;
    }

    .btn-white:hover {
        background-color: #f5f5f5;
        border-color: #f5f5f5;
        color: var(--navy);
    }

    .btn-outline-navy {
        border-color: var(--navy);
        color: var(--navy);
        transition: all 0.2s ease;
    }

    .btn-outline-navy:hover {
        background-color: var(--navy);
        color: var(--white);
        transform: translateY(-1px);
    }

    /* Sidebar Styling */
    .sidebar-nav {
        background: var(--white);
        padding: 15px 0;
        box-shadow: var(--card-shadow);
        border: 1px solid #e5e7eb;
    }

    .sidebar-nav .nav-link {
        border-left: 4px solid transparent;
        margin: 5px 10px;
        padding: 10px 15px;
        color: var(--navy);
        transition: all 0.3s ease;
    }

    .sidebar-nav .nav-link:hover {
        background: #f1f5f9;
        border-left: 4px solid var(--navy);
    }

    .sidebar-nav .nav-link.active {
        background: #f1f5f9;
        border-left: 4px solid var(--navy);
        font-weight: 600;
        color: var(--navy);
    }

    /* Card Styling */
    .card {
        border: none;
        background: var(--white);
        overflow: hidden;
    }

    .card-header {
        padding: 1.25rem;
        font-weight: 600;
    }

    /* Table Styling */
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        background: var(--white);
    }

    .table {
        font-size: 0.9rem;
        margin-bottom: 0;
        background: var(--white);
    }

    .table th {
        white-space: nowrap;
        position: sticky;
        top: 0;
        padding: 0.75rem;
        font-weight: 600;
    }

    .table td {
        padding: 0.75rem;
        vertical-align: middle;
        color: var(--navy);
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8fafc;
    }

    /* Responsive Adjustments */
    @media (max-width: 1200px) {
        .col-md-3 {
            max-width: 300px;
        }

        .col-md-9 {
            flex: 1;
        }
    }

    @media (max-width: 992px) {
        .col-md-3 {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
        }

        .col-md-9 {
            width: 100%;
        }

        .sidebar-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            padding: 10px;
        }

        .sidebar-nav .nav-link {
            margin: 0;
            padding: 8px 12px;
            border-left: none;
            border-bottom: 3px solid transparent;
            font-size: 0.9rem;
        }

        .sidebar-nav .nav-link:hover,
        .sidebar-nav .nav-link.active {
            border-left: none;
            border-bottom: 3px solid var(--navy);
        }
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding: 1rem 0.5rem;
        }

        .card-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.75rem;
            padding: 1rem;
        }

        .card-header h5 {
            font-size: 1rem;
        }

        .table th,
        .table td {
            padding: 0.5rem;
            font-size: 0.8rem;
        }

        .btn-sm {
            padding: 0.2rem 0.4rem;
            font-size: 0.75rem;
        }

        .text-truncate {
            max-width: 80px;
        }

        .table-responsive {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 576px) {
        .btn-white {
            font-size: 0.8rem;
            padding: 0.4rem 0.8rem;
        }

        .table th,
        .table td {
            padding: 0.4rem;
            font-size: 0.75rem;
        }

        .text-truncate {
            max-width: 60px;
        }
    }
</style>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net@1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net-responsive@2.5.0/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataScienceTable').DataTable({
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details for ' + data[1] + ' ' + data[2];
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    })
                }
            },
            pageLength: 10,
            order: [
                [9, 'desc']
            ],
            columnDefs: [{
                    orderable: false,
                    targets: 10
                },
                {
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: 1
                }, // First Name
                {
                    responsivePriority: 3,
                    targets: 3
                }, // Email
                {
                    responsivePriority: 4,
                    targets: 10
                } // Actions
            ],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search registrations..."
            }
        });
    });
</script>
@endsection