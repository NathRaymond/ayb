@extends('layouts.guest')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <h1 class="mb-5 text-center display-5 fw-bold">Scholarship Application</h1>

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('scholarship.store') }}" method="POST" style="font-size: 1.1rem;" id="scholarshipForm">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" id="firstname" name="firstname" class="form-control form-control-lg"
                                    value="{{ $firstname }}" required readonly>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" id="lastname" name="lastname" class="form-control form-control-lg"
                                    value="{{ $lastname }}" required readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                    value="{{ $email }}" required readonly>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control form-control-lg"
                                    placeholder="Enter your phone number" required value="{{ old('phone') }}">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" id="country" name="country" class="form-control form-control-lg"
                                placeholder="Country" required value="{{ old('country') }}">
                            @error('country')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="scholarship_level" class="form-label">Highest scholarship Level</label>
                            <select id="scholarship_level" name="scholarship_level" class="form-select form-select-lg" required>
                                <option value="" selected disabled>Select scholarship Level</option>
                                <option value="50" {{ old('scholarship_level') == '50' ? 'selected' : '' }}>50</option>
                                <option value="70" {{ old('scholarship_level') == '70' ? 'selected' : '' }}>70</option>
                                <option value="90" {{ old('scholarship_level') == '90' ? 'selected' : '' }}>90</option>
                            </select>
                            @error('scholarship_level')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="mb-4">
                            <label for="payment_method" class="form-label">Payment Method</label>
                            <select id="payment_method" name="payment_method" class="form-select form-select-lg" required>
                                <option value="" selected disabled>Select scholarship Level</option>
                                <option value="50" {{ old('payment_method') == '50' ? 'selected' : '' }}>50</option>
                                <option value="70" {{ old('payment_method') == 'Bachelor\'s Degree' ? 'selected' : '' }}>70</option>
                                <option value="90" {{ old('payment_method') == '90' ? 'selected' : '' }}>90</option>
                            </select>
                            @error('payment_method')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="why_apply" class="form-label">Why are you applying for this scholarship? (Minimum 50 characters)</label>
                            <textarea id="why_apply" name="why_apply" class="form-control form-control-lg"
                                rows="4" required minlength="50">{{ old('why_apply') }}</textarea>
                            @error('why_apply')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-text">Characters: <span id="charCount">0</span>/50</div>
                        </div>

                        <div class="mb-4">
                            <label for="referral_source" class="form-label">How did you hear about us? (Optional)</label>
                            <input type="text" id="referral_source" name="referral_source"
                                class="form-control form-control-lg" placeholder="Social media, friend, etc." value="{{ old('referral_source') }}">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5 py-3 fs-5" id="submitBtn">
                                Submit Application
                                <span class="spinner-border spinner-border-sm d-none" id="spinner"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Character count for why_apply
        const whyApply = document.getElementById('why_apply');
        const charCount = document.getElementById('charCount');

        whyApply.addEventListener('input', function() {
            charCount.textContent = this.value.length;
        });

        // Form submission loader
        const form = document.getElementById('scholarshipForm');
        const submitBtn = document.getElementById('submitBtn');
        const spinner = document.getElementById('spinner');

        form.addEventListener('submit', function() {
            submitBtn.disabled = true;
            spinner.classList.remove('d-none');
        });
    });
</script>
@endpush

@endsection