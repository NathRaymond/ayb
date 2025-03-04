@extends('layouts.guest')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Registration </h2>
                        <p>Home <span>//</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- about part start-->
<section class="container-fluid my-5 p-5">
    <div class=" col-md-8 col-md-offset-2">
        <div class="card p-3">
            <div class="card-body">
                <x-alert />
                <div class="row">
                    <div class="col">                        
                    <img src="{{ asset('img/logo.png')}}" height="100">
                        <div>
                           <h4>Welcome to African Young Brains</h4>
                        </div>
                    </div>
                    <div class="col">
                    <form action="{{route('member.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your first name">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your last name">
            </div>

            <div class="form-group">
                <label for="other_name">Other Name</label>
                <input type="text" class="form-control" name="other_name" id="other_name" placeholder="Enter your Other name">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option>Select Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Telephone</label>
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter your telephone number">
            </div>

            <div class="form-group">
                <label for="address">Email</label>
                <input type="text" class="form-control" name="email" id="address" placeholder="Enter your e-mail">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address">
            </div>


            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" id="state" placeholder="Enter your state">
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" id="country" placeholder="Enter your Country">
            </div>

            <div class="form-group">
                <label for="employment_status">Employment Status</label>
                <select class="form-control" name="employment_status" id="employment_status">
                    <option>Select Employment Status</option>
                    <option value="not employed">Not Employed</option>
                    <option value="self employed">Self-Employed</option>
                    <option value="Full Time">Full Time </option>
                    <option value="Part Time">Part Time </option>
                    <option value="Part Time">Voluntary Service </option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Organisation</label>
                <input type="text" class="form-control" name="organisation" id="organisation" placeholder="Enter your organisation?">
            </div>

            <div class="form-group">
                <label for="address">How do you hear about us</label>
                <input type="text" class="form-control" name="eavesdrop" id="eavesdrop" placeholder="How do you hear about us?">
            </div>

            <div class="form-group">
                <label for="volunteer">Do you want to volunteer?</label>
                <select class="form-control" name="volunteer" id="volunteer">
                    <option>Select One Option</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="role_id">Aspiration in AYB</label>
                <select class="form-control" name="role_id" id="role_id">
                    <option>Select One Option</option>
                    <option value="1">Sponsor</option>
                    <option value="2">Member</option>
                    <option value="3">Volunteer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- about part start-->


@endsection
