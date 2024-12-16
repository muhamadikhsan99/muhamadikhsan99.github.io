<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Admin Dashboard for Contact Management" />
    <title>Contact Management - Admin</title>

    <!-- Stylesheets -->
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet" />
    <link href="{{ asset('asset-landing-page-admin/css/admin.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset-landing-page-admin/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="sweetalert2.min.css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background: linear-gradient(135deg, #003366, #336699);">
    <a class="navbar-brand ps-3" href="/dashboard">Manage Contacts</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
    </button>
</nav>


    <div id="layoutSidenav">
        <!-- Sidebar -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion bg-custom-blue" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading text-white">Kategori</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Home
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseDashboard" aria-expanded="false" aria-controls="pagesCollapseDashboard">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseDashboard" aria-labelledby="headingDashboard" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a href="{{ url('/admin/dashboard') }}" class="btn btn-danger btn-sm">Back To Dashboard</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Manage Contacts</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Contacts</li>
                    </ol>

                    <!-- Create New Contact Button -->
                    <div class="row">
                        <a href="{{ route('admin.contact.create') }}" class="btn btn-primary create-btn" role="button">
                            <i class="fas fa-plus-circle"></i> Create New Contact
                        </a>
                    </div>

                    <!-- Contacts Table -->
                    <div class="row mt-4">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Phone</th>
                                    <th>Social Media</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
    <td>{{ $contact->name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ Str::limit($contact->message, 50) }}</td>
    <td>{{ $contact->phone ?? '-' }}</td>
    <td>
        @if($contact->social_media)
            @php
                // Decode JSON untuk social media jika ada
                $socialMedia = json_decode($contact->social_media, true);
            @endphp
            @if(json_last_error() === JSON_ERROR_NONE && is_array($socialMedia))
                <ul>
                    @foreach($socialMedia as $platform => $link)
                        <li>
                            <strong>{{ ucfirst($platform) }}:</strong>
                            <a href="{{ $link }}" target="_blank">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>{{ $contact->social_media }}</p>
            @endif
        @else
            -
        @endif
    </td>
    <td>
        @if($contact->is_read)
            <span class="badge custom-read">Read</span>
        @else
            <span class="badge custom-unread">Unread</span>
        @endif
    </td>

                                    <td>
                                        <a href="{{ route('admin.contact.show', $contact->id) }}" class="btn btn-sm btn-info">Detail</a>
                                        <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <button type="button" class="btn delete-btn btn-danger btn-sm" data-id="{{ $contact->id }}">Delete</button>
                                        <form action="{{ route('admin.contact.destroy', $contact->id) }}" id="delete-form-{{ $contact->id }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        @if(!$contact->is_read)
                                        <form action="{{ route('admin.contact.mark-as-read', $contact->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm btn-success">Read</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Website Ican 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

 <!-- Custom Styles -->
 <style>
        .custom-read {
            background-color: purple;
            color: white;
            font-weight: bold;
        }

        .custom-unread {
            background-color: lightblue;
            color: black;
            font-weight: bold;
        }
    </style>

 
    


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('asset-landing-page-admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    <script>
        @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500,
        });
        @endif

        document.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('delete-btn')) {
                var id = event.target.dataset.id;
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                });
            }
        });

        $(document).ready(function() {
            $('#myTable').DataTable({
                "paging": true,
                "searching": true,
                "info": true,
                "ordering": true
            });
        });
    </script>
</body>
</html>
