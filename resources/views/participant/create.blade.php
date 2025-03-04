@extends('layouts.guest')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Registration {{$event->name}}</h2>
                        <p>Home <span>//</span>{{$event->name}}</p>
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
                        <img src="{{$event->image64}}" alt="">
                        <div>
                            <h5>Fee : <span>&#8358;</span> {{$event->fee}}</h5>
                            <h5>Early Bird : <span>&#8358;</span> {{$event->early_birds}}</h5>
                            <h5>Late Payment : <span>&#8358;</span> {{$event->late_payment}}</h5>
                            Event Date and Time: {{Carbon::parse($event->event_date)}}
                        </div>
                    </div>
                    <div class="col">
                    <form action="{{route('participant.register')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your first name" value="{{ old('first_name') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your last name" value="{{ old('last_name') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="other_name">Other Name</label>
                <input type="text" class="form-control" name="other_name" id="other_name" placeholder="Enter your Other name" value="{{ old('other_name') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                      <option value="{{ old('gender') ?? ''}}" @if (old('gender') == null) selected="selected" @endif>
                          {{ old('gender') ? ucwords(old('gender')) : 'Select Gender' }}</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Telephone</label>
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter your telephone number" value="{{ old('telephone') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="address">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your e-mail" value="{{ old('email') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" value="{{ old('address') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" id="state" placeholder="Enter your state" value="{{ old('state') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" id="country" placeholder="Enter your Country" value="{{ old('country') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="employment_status">Employment Status</label>
                <select class="form-control" name="employment_status" id="employment_status">
                    <option value="{{ old('employment_status') ?? ''}}" 
                    @if (old('employment_status')) selected="selected"@endif>
                    {{ old('employment_status') ? ucwords(old('employment_status')) : 'Select Employment Status' }}</option>
                    <option value="not employed">Not Employed</option>
                    <option value="self employed">Self-Employed</option>
                    <option value="full time">Full Time</option>
                    <option value="part time">Part Time</option>
                    <option value="volunteer">Volunteer</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Organisation</label>
                <input type="text" class="form-control" name="organisation" id="organisation" placeholder="Enter your organisation?" value="{{ old('organisation') ?? '' }}">
            </div>

            <div class="form-group">
                <label for="address">How do you hear about us</label>
                <input type="text" class="form-control" name="eavesdrop" id="eavesdrop" placeholder="How do you hear about us?" value="{{ old('eavesdrop') ?? '' }}">
            </div>

            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox"  name="is_volunteering" id="is_volunteering" {{ old('is_volunteering') ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_volunteering">
                        Do you want to volunteer?
                    </label>
                </div> 
            </div>

            <input type="hidden" name="event_id" value="{{$event->id}}">

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
