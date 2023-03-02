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
                                <li class="breadcrumb-item"><a href="{{url('admin/contributors')}}">Contributors</a></li>
                                <li class="breadcrumb-item active">{{$pageTitle}}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{$pageTitle}}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center">

                        <img src="{{$contributor->profile_picture ? asset('storage/'. $contributor->profile_picture) : asset('/images/no-image.png')}}" class="rounded-circle avatar-lg img-thumbnail"
                            alt="profile-image">

                        <h4 class="mb-0">{{$contributor->first_name}} {{$contributor->last_name}}</h4>
                        <p class="text-muted">{{$contributor->email}}</p>

                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                        <div class="text-left mt-3">
                            <h4 class="font-13 text-uppercase">About :</h4>
                            <p class="text-muted font-13 mb-3">
                                {{$contributor->about}}
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">{{$contributor->first_name}} {{$contributor->last_name}}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Whatsapp :</strong><span class="ml-2">{{$contributor->whatsapp}}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{$contributor->email}}</span></p>

                            <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">{{$contributor->address}}</span></p>
                        </div>

                        <ul class="social-list list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="{{$contributor->facebook}}" target="_blank" class="social-list-item border-primary text-primary"><i
                                        class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$contributor->twitter}}" target="_blank" class="social-list-item border-info text-info"><i
                                        class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$contributor->instagram}}" target="_blank" class="social-list-item border-warning text-warning"><i
                                        class="mdi mdi-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$contributor->linkedin}}" target="_blank" class="social-list-item border-secondary text-secondary"><i
                                        class="mdi mdi-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$contributor->youtube}}" target="_blank" class="social-list-item border-danger text-danger"><i
                                        class="mdi mdi-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$contributor->github}}" target="_blank" class="social-list-item border-dark text-dark"><i
                                        class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                        
                        <div class="mt-3">
                            <a href="{{url('./admin/contributors/' . $contributor->id . '/edit')}}" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit mr-1"></i> Edit</a>
                        </div>

                    </div> <!-- end card-box -->

                </div> <!-- end col-->

                <div class="col-lg-8 col-xl-8">
                    <div class="card-box">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quibusdam quisquam atque voluptate, at voluptas consequatur sapiente ut praesentium dignissimos!</p>
                    </div>
                </div> <!-- end col-->
                
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->

</x-layout>