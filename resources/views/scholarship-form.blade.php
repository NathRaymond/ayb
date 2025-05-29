@extends('layouts.guest')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <h1 class="mb-5 text-center display-5 fw-bold">Scholarship Application</h1>
                    
                    <form action="{{ route('scholarship.store') }}" method="POST" style="font-size: 1.1rem;">
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
                                    placeholder="Enter your phone number" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" id="country" name="country" class="form-control form-control-lg" 
                                placeholder="Country" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="education_level" class="form-label">Highest Education Level</label>
                            <select id="education_level" name="education_level" class="form-select form-select-lg" required>
                                <option value="" selected disabled>Select Education Level</option>
                                <option value="High School">High School</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                <option value="Master's Degree">Master's Degree</option>
                                <option value="PhD">PhD</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="why_apply" class="form-label">Why are you applying for this scholarship? (Minimum 50 characters)</label>
                            <textarea id="why_apply" name="why_apply" class="form-control form-control-lg" 
                                rows="4" required minlength="50"></textarea>
                        </div>
                        
                        <div class="mb-4">
                            <label for="referral_source" class="form-label">How did you hear about us? (Optional)</label>
                            <input type="text" id="referral_source" name="referral_source" 
                                class="form-control form-control-lg" placeholder="Social media, friend, etc.">
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5 py-3 fs-5">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection