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
                                <li class="breadcrumb-item"><a href="{{url('admin/sacodesweekends')}}">sacodesweekends</a></li>
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

                        @if($sacodesweekend->poster)
                            <img src="{{asset('/storage/sacodesweekends/' . $sacodesweekend->poster)}}" alt="{{$sacodesweekend->poster}}" class="img img-thumbnail rounded mr-1 w-100">
                        @else
                            <img src="{{asset('/images/no-image.png')}}" alt="Poster" class="img img-thumbnail rounded mr-1 w-100">
                        @endif

                    </div> <!-- end card-box -->

                </div> <!-- end col-->

                <div class="col-lg-8 col-xl-8">
                    <div class="card-box">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <b class="d-block">Topic :</b>
                                {{$sacodesweekend->topic}}
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Speaker :</b>
                                {{$sacodesweekend->first_name}} {{$sacodesweekend->last_name}}
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Description :</b>
                                {{$sacodesweekend->description}}
                            </li>
                            <li class="list-group-item">
                                <b class="d-block">Status :</b>
                                @if ($sacodesweekend->status == 'active')
                                <span class="text-success">
                                    <i class="fas fa-check-square"></i> {{ucfirst($sacodesweekend->status)}}
                                </span>
                                @else
                                <span class="text-warning">
                                    <i class="fas fa-trash"></i> {{ucfirst($sacodesweekend->status)}}
                                </span>
                                @endif
                            </li>
                        </ul>


                        <div class="mt-3">
                            <a href="{{url('./admin/sacodesweekends/' . $sacodesweekend->id . '/edit')}}" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit mr-1"></i> Edit</a>
                            <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-sm btn-link-dark"><i class="fas fa-arrow-left mr-1"></i> Back</a>
                        </div>

                    </div>
                </div> <!-- end col-->

            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->

</x-layout>
