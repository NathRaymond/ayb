@extends('layouts.guest')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5 text-center">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#28a745" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                    </div>
                    <h1 class="display-5 fw-bold mb-4">Application Submitted Successfully!</h1>
                    <p class="fs-4">Thank you for applying for AYB AI, Data Science & Machine Learning scholarship. We will review your application and get back to you soon.</p>
                    <p class="fs-5">For any questions, please contact us:</p>
                    <p class="fs-5">Phone: +234 810 617 1072, +1 330 400 0513 | Email: aimgr@africanyoungbrains.com </p>
                    <a href="{{ url('/') }}" class="btn btn-primary mt-4 px-4 py-2">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection