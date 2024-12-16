<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Admin Dashboard for Certificate Management" />
    <title>Certificate Management - Admin Ican</title>

    <!-- Stylesheets -->
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet" />
    <link href="{{ asset('asset-landing-page-admin/css/admin.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset-landing-page-admin/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background: linear-gradient(135deg, #003366, #336699);">
    <a class="navbar-brand ps-3" href="/dashboard">Manage Certificates</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
    </button>
</nav>

    <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion bg-custom-blue" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading text-white">Kategori</div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
    <div class="sb-nav-link-icon">
        <i class="fas fa-home"></i> <!-- Ganti ikon menjadi 'home' -->
    </div>
    Home <!-- Ganti nama menjadi 'Home' -->
    <div class="sb-sidenav-collapse-arrow">
        <i class="fas fa-angle-down"></i>
    </div>
</a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseDashboard" aria-expanded="false" aria-controls="pagesCollapseDashboard">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </div>
                                    Dashboard
                                    <div class="sb-sidenav-collapse-arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
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

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Manage Certificates</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Certificates</li>
                    </ol>

                   <!-- Create New Certificate Button -->
<div class="row">
    <a href="{{ route('admin.certificate.create') }}" class="btn btn-primary create-btn" role="button">
        <i class="fas fa-plus-circle"></i> Create New Certificate
    </a>
</div>

<!-- Certificates Table -->
<div class="row mt-4">
    <table class="table table-hover table-striped" id="myTable">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Issued By</th>
                <th scope="col">Issued At</th>
                <th scope="col">Description</th>
                <th scope="col">File</th>
                <th scope="col">Type</th> <!-- Kolom baru untuk 'Type' -->
                <th scope="col">Image</th> <!-- Kolom baru untuk 'Image' -->
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($certificate as $certificate)
            <tr>
                <td>{{ $certificate->name }}</td>
                <td>{{ $certificate->issued_by }}</td>
                <td>{{ $certificate->formatted_issued_at }}</td>
                <td>{{ $certificate->description }}</td>
                <td>
                    @if($certificate->file)
                        <a href="{{ asset('storage/' . $certificate->file) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
                <td>{{ $certificate->type ?? 'N/A' }}</td> <!-- Menampilkan 'type' -->
                <td>
    @if($certificate->image)
        @if(str_ends_with($certificate->image, '.svg'))
            <!-- Jika gambar berupa SVG -->
            <img src="{{ asset('storage/' . $certificate->image) }}" alt="Certificate SVG" style="width: 100px; height: auto; background-color: #f8f9fa; border: 1px solid #ddd;">
        @else
            <!-- Jika gambar bukan SVG -->
            <img src="{{ asset('storage/' . $certificate->image) }}" alt="Certificate Image" style="width: 100px; height: auto;">
        @endif
    @else
        <span>No Image</span>
    @endif
</td>

                <td>
                    <a href="{{ route('admin.certificate.show', $certificate->id) }}" class="btn btn-sm btn-info">Detail</a>
                    <a href="{{ route('admin.certificate.edit', $certificate) }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn delete-btn btn-danger btn-sm" data-id="{{ $certificate->id }}">Delete</button>
                    <form action="{{ route('admin.certificate.destroy', $certificate->id) }}" id="delete-form-{{ $certificate->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

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
  
   



    <!-- Script Section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('asset-landing-page-admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('asset-landing-page-admin/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('asset-landing-page-admin/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
    </script>

    <script>
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
    </script>

    <!-- Initialize DataTables -->
    <script>
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
