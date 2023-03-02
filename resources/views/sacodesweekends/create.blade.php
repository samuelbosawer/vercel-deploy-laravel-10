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
                                <li class="breadcrumb-item"><a href="{{url('admin/sacodesweekends')}}">SaCode's Weekends</a></li>
                                <li class="breadcrumb-item active">{{$pageTitle}}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{$pageTitle}}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="{{url('admin/sacodesweekends')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-8 col-xl-8">
                        <div class="card-box">


                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fas fa-user mr-1"></i> New Event SaCode's Weekend</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contributor_id" class="form-label">Speaker</label>
                                    <select class="form-control" name="contributor_id" id="contributor_id">
                                        <option value="">Select Speaker</option>
                                        @foreach ($contributors as $c )
                                            <option value="{{$c->id}}"> {{$c->first_name .' '.$c->last_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('contributor_id')
                                        <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                    @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="topic">Topic</label>
                                        <input type="text" class="form-control" id="topic" name="topic" placeholder="Enter topic" value="{{old('topic')}}">
                                        @error('topic')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="" placeholder="Write something..." rows="3">{{old('description')}}</textarea>
                                        @error('description')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input class="form-control" id="date" name="date" type="date" value="{{old('date')}}">
                                        @error('date')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="time">Time</label>
                                        <input class="form-control" id="time" name="time" type="time" value="{{old('time')}}">
                                        @error('time')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div> <!-- end card-box-->

                    </div> <!-- end col -->

                    <div class="col-lg-4 col-xl-4">
                        <div class="card-box">
                            <div class="form-group">
                                <label for="github">Poster</label>
                                {{-- <div class="d-block mb-3">
                                    <img src="{{asset('./images/no-image.png')}}" alt="Poster SaCode Weekend" class="img-thumbnail w-100">
                                </div> --}}

                                <div class="form-group">
                                    <input type="file" class="form-control " id="poster"  name="poster">
                                </div>

                                @error('poster')
                                    <p class="form-text text-danger text-xs "><small>{{$message}}</small></p>
                                @enderror
                            {{-- </div> --}}
                            </div>
                        </div> <!-- end card group -->
                    </div> <!-- end col -->

                </div> <!-- end row-->

                <div class="row">
                    <div class="col">
                        <div class="card-box">
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="fas fa-user-plus"></i> Create</button>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </form> <!-- end form -->


        </div> <!-- container -->

    </div> <!-- content -->

</x-layout>
