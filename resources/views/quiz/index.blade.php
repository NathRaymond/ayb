@extends('layouts.guest')


<!-- breadcrumb start-->
@section('content')
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Quiz And Debate</h2>
                            <p>Home <span>//</span>Quiz And Debate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- breadcrumb start-->


     <!-- about part start-->
     <section class="about_part about_padding">
        <div class="container">
            <div class="row align-items-start">

                <div class="col">
                    <img src="img/nominate.jpg" alt="nominate">
                </div>
                <div class="col p-5 border rounded">
                    <h1 class="text-center font-weight-bolder pb-5">Nominate A School</h1>
                    <x-alert />
                    <form action="{{route('quiz.store')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="first_name">First Name</label>
                            <div class="input-group @error('first_name') border border-danger @enderror">
                                <div class="input-group-prepend">
                                    <div class="input-group-text @error('first_name') text-danger @enderror"><i class="fas fa-user"></i></div>
                                  </div>
                          
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your first name">
                            </div>
                            @error('first_name')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <div class="input-group @error('last_name') border border-danger @enderror">
                                <div class="input-group-prepend ">
                                    <div class="input-group-text  @error('last_name') text-danger @enderror"><i class="fas fa-user"></i></div>
                                  </div>
                                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your last name">  
                            </div>
                            @error('last_name')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group @error('email') border border-danger @enderror">
                                <div class="input-group-prepend">
                                    <div class="input-group-text @error('email') text-danger @enderror"><i class="fas fa-at"></i></div>
                                  </div>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                            @error('email')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="institution_type">School Name</label>
                            <div class="input-group @error('institution') border border-danger @enderror">
                                <div class="input-group-prepend">
                                    <div class="input-group-text  @error('institution') text-danger @enderror">
                                        <i class="fas fa-university"></i></div>
                                  </div>
                                  <input type="text" class="form-control" name="institution" id="institution" placeholder="Enter your name of school">
                            </div>
                            @error('institution')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
                        </div> 
                        
                        <div class="form-group">
                            <label for="institution_email">School Email</label>
                            <div class="input-group @error('institution_email') border border-danger @enderror">
                                <div class="input-group-prepend">
                                    <div class="input-group-text  @error('institution_email') text-danger @enderror">
                                        <i class="fas fa-at"></i></div>
                                  </div>
                                  <input type="text" class="form-control" name="institution_email" id="institution_email" placeholder="Enter your name of school">
                                </div>
                                @error('institution_email')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="institution_type">Type</label>
                                <div class="input-group @error('institution_type') border border-danger @enderror">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text  @error('institution_type') text-danger @enderror">
                                            <i class="fas fa-university"></i></div>
                                      </div>
                                      <select name="institution_type" id="institution_type" class="form-control">
                                        <option value="primary">Primary School</option>
                                        <option value="secondary">Secondary School</option>
                                        <option value="secondary">University</option>
                                      </select>
                                </div>
                                @error('institution_type')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
                            </div> 
                            
                            <button type="submit" class="btn btn-success btn-lg btn-block my-5">Submit</button> 
                        </div>
                    </form>

                </div>
                
           
            
            </div>
        </div>
    
    </section>
    <!-- about part start-->

@endsection