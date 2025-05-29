@extends('layouts.guest')

@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item text-center py-5 rounded-4 shadow-sm">
                        <h2 class="fw-bold display-6 mb-3 text-white">AYB AI, Data Science & Machine Learning Training</h2>
                        <p class="fs-3 text-dark fw-semibold" style="color: white !important; letter-spacing: 0.5px;">
                            <span class="text-primary fw-bold" style="font-size: 20px !important; color:white !important;">Start Date:</span> 2nd June, 2025   |  
                            <span class="text-success fw-bold" style="font-size: 20px !important; color:white !important;">Duration:</span> 4 Months Training
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end-->

<!-- service_part start-->
<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <!-- Flyer Image -->
                        <div class="text-center mb-5">
                            <img src="{{ asset('img/bootcamp_img.jpg') }}" alt="Bootcamp Flyer" class="img-fluid rounded-3" style="max-width: 70%; height: auto;">
                        </div>
                        <h1 class="mb-5 text-center display-5 fw-bold">Register for AI, Data Science & Machine Learning Training</h1>
                        <form action="{{ route('form.store.DataScienceBootcamp') }}" method="POST" style="font-size: 1.1rem;" onsubmit="showloader6()">
                            @csrf
                            <div class="mb-4">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" placeholder="Enter your first name" required value="{{ old('firstname') }}">
                                @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" placeholder="Enter your last name" required value="{{ old('lastname') }}">
                                @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter your email" required value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control form-control-lg" placeholder="Enter your phone number" required value="{{ old('phone') }}">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label SEEKING YOUR FEEDBACK for="country" class="form-label">Country</label>
                                <input type="text" id="country" name="country" class="form-control form-control-lg" placeholder="Country" required value="{{ old('country') }}">
                                @error('country')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="jobtitle" class="form-label">Job Title</label>
                                <input type="text" id="jobtitle" name="jobtitle" class="form-control form-control-lg" placeholder="e.g., Software Engineer" required value="{{ old('jobtitle') }}">
                                @error('jobtitle')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="joinas" class="form-label">Join As</label>
                                <select id="joinas" name="joinas" class="form-select form-select-lg" required>
                                    <option selected disabled>Join As</option>
                                    <option value="Student" {{ old('joinas') == 'Student' ? 'selected' : '' }}>Student</option>
                                </select>
                                @error('joinas')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 fs-5">Submit &nbsp;<span
                                        class="spinner-border loader spinner-border-sm" id="thisLoader6"
                                        role="status" aria-hidden="true"
                                        style="display:none"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service_part end-->

@endsection

@push('styles')
<!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
@endpush

@push('scripts')
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        // Owl Carousel initialization
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        // SweetAlert2 for success message
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('
            success ') }}',
            confirmButtonText: 'OK',
            confirmButtonColor: '#0d6efd'
        });
        @endif

        // SweetAlert2 for validation errors
        @if($errors -> any())
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            html: `{!! implode('<br>', $errors->all()) !!}`,
            confirmButtonText: 'OK',
            confirmButtonColor: '#dc3545'
        });
        @endif
    });
</script>
<script>
    function showloader6() {
        var loader = document.getElementById('thisLoader6');
        loader.style.display = "inline-block";
    }
</script>
@endpush