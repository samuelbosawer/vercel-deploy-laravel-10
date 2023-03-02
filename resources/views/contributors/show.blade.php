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

                        @if($contributor->profile_picture) 
                            <img src="{{asset('/storage/contributors/' . $contributor->profile_picture)}}" alt="{{$contributor->profile_picture}}" class="img img-thumbnail rounded mr-1 w-100">
                        @else
                            <img src="{{asset('/images/no-image.png')}}" alt="Image" class="img img-thumbnail rounded mr-1 w-100">
                        @endif

                        <div class="text-left mt-3">
                            <h4 class="font-13 text-uppercase">About :</h4>
                            <p class="text-muted font-13 mb-3">
                                {{$contributor->about}}
                            </p>
                        </div>

                    </div> <!-- end card-box -->

                </div> <!-- end col-->

                <div class="col-lg-8 col-xl-8">
                    <div class="card-box">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <b class="d-block">Full Name :</b>
                                {{$contributor->first_name}} {{$contributor->last_name}}
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Job Title :</b>
                                {{$contributor->job_title}}
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Address :</b>
                                {{$contributor->address}}
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Email :</b>
                                <a href="mailto:{{$contributor->email}}" class="text-secondary"><i class="mdi mdi-email"></i> {{$contributor->email}}</a>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Whatsapp :</b>
                                <a href="tel:{{$contributor->whatsapp}}" class="text-secondary"><i class="mdi mdi-whatsapp"></i> {{$contributor->whatsapp}}</a>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Instagram :</b>
                                <a href="{{$contributor->instagram}}" target="_blank" class="text-secondary"><i class="mdi mdi-instagram"></i> {{$contributor->instagram}}</a>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Facebook :</b>
                                <a href="{{$contributor->facebook}}" target="_blank" class="text-secondary"><i class="mdi mdi-facebook"></i> {{$contributor->facebook}}</a>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Twitter :</b>
                                <a href="{{$contributor->twitter}}" target="_blank" class="text-secondary"><i class="mdi mdi-twitter"></i> {{$contributor->twitter}}</a>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Linkedin :</b>
                                <a href="{{$contributor->linkedin}}" target="_blank" class="text-secondary"><i class="mdi mdi-linkedin"></i> {{$contributor->linkedin}}</a>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Youtube :</b>
                                <a href="{{$contributor->youtube}}" target="_blank" class="text-secondary"><i class="mdi mdi-youtube"></i> {{$contributor->youtube}}</a>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">GitHub :</b>
                                <a href="{{$contributor->github}}" target="_blank" class="text-secondary"><i class="mdi mdi-github"></i> {{$contributor->github}}</a>
                            </li>
                        </ul>

                        
                        <div class="mt-3">
                            <a href="{{url('./admin/contributors/' . $contributor->id . '/edit')}}" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit mr-1"></i> Edit</a>
                            <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-sm btn-link-dark"><i class="fas fa-arrow-left mr-1"></i> Back</a>
                        </div>

                    </div>
                </div> <!-- end col-->
                
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->

</x-layout>