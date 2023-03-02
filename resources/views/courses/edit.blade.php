<x-layout>
    
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{url('admin/contributors/')}}">Contributors</a></li>
                                <li class="breadcrumb-item active">{{$pageTitle}}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{$pageTitle}}</h4>
                    </div>

                    <!-- flash message -->
                    <x-flash-message />

                </div>
            </div>
            <!-- end page title -->

            <form action="{{url('admin/contributors/' . $contributor->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-lg-8 col-xl-8">
                        <div class="card-box">
                        

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fas fa-user mr-1"></i> Personal Info</h5>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name"  value="{{$contributor->first_name}}">
                                        @error('first_name')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" value="{{$contributor->last_name}}">
                                        @error('last_name')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="custom-select">
                                            <option @if ($contributor->gender == '') selected @endif hidden>Choose</option>
                                            <option @if ($contributor->gender == 'Male') selected @endif value="Male">Male</option>
                                            <option @if ($contributor->gender == 'Female') selected @endif value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea class="form-control" id="about" name="about" rows="4" placeholder="Write something...">{{$contributor->about}}</textarea>
                                        @error('about')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <!-- profesional info -->

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fas fa-building mr-1"></i> Profesional Info</h5>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_title">Job Title</label>
                                        <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Your job title" value="{{$contributor->job_title}}">
                                        @error('job_title')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" class="form-control" id="company" name="company" placeholder="Company name" value="{{$contributor->company}}">
                                        @error('company')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                            <!-- contact -->

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fas fa-book mr-1"></i> Contact</h5>

                            <div class="row">  
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="2" placeholder="Recent address...">{{$contributor->address}}</textarea>
                                        @error('address')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->                             
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email address" value="{{$contributor->email}}">
                                        </div>
                                        @error('email')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->                           
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="whatsapp">WhatsApp</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Phone number" value="{{$contributor->whatsapp}}">
                                        </div>
                                        @error('whatsapp')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="website" name="website" placeholder="Url" value="{{$contributor->website}}">
                                        </div>
                                        @error('website')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->    


                            </div> <!-- end row -->
                            


                            <!-- social media -->

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fas fa-globe mr-1"></i> Social Media</h5>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Url" value="{{$contributor->facebook}}">
                                        </div>
                                        @error('facebook')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Username" value="{{$contributor->twitter}}">
                                        </div>
                                        @error('twitter')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Url" value="{{$contributor->instagram}}">
                                        </div>
                                        @error('instagram')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="linkedin">Linkedin</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Url" value="{{$contributor->linkedin}}">
                                        </div>
                                        @error('linkedin')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="youtube">Youtube</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Url" value="{{$contributor->youtube}}">
                                        </div>
                                        @error('youtube')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="github">Github</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-github"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="github" name="github" placeholder="Username" value="{{$contributor->github}}">
                                            @error('github')
                                                <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                            @enderror
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            
                            
                            
                        </div> <!-- end card-box-->
                        
                    </div> <!-- end col -->
                    
                    <div class="col-lg-4 col-xl-4">
                        <div class="card-box">
                            <div class="form-group">
                                <label for="profile_picture">Profile Picture</label>
                                <div class="d-block mb-3">
                                    <img src="{{$contributor->profile_picture ? asset('storage/'. $contributor->profile_picture) : asset('/images/no-image.png')}}" alt="Profile Picture" class="img-thumbnail w-100">
                                </div>

                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="profie_picture" name="profile_picture">
                                    <label class="custom-file-label" for="profie_picture">Choose a new picture</label>
                                    </div>
                                    @error('profie_picture')
                                        <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                    @enderror
                                </div>
                            </div>                       
                        </div> <!-- end card group -->
                    </div> <!-- end col -->
                    
                </div> <!-- end row-->

                <div class="row">
                    <div class="col">
                        <div class="card-box d-flex justify-content-between">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mt-2"><i class="fas fa-save"></i> Save</button>
                                <a href="{{url('admin/contributors')}}" class="btn btn-outline-secondary waves-effect waves-light mt-2"><i class="fas fa-arrow-left"></i> Close this page </a>
                            </div>
                            <div>
                                <a href="{{url('admin/contributors/' . $contributor->id)}}" class="btn btn-outline-primary waves-effect waves-light mt-2"><i class="fas fa-eye"></i> Detail</a>
                                <a href="" type="submit" class="btn btn-outline-danger waves-effect waves-light mt-2"><i class="fas fa-trash"></i></a>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            
            </form> <!-- end form -->

        </div> <!-- container -->

    </div> <!-- content -->

</x-layout>