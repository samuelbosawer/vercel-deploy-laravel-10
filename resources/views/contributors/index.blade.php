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
                                <li class="breadcrumb-item active">{{$pageTitle}}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{$pageTitle}}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- flash message -->
            <x-flash-message />

            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>List of all contributors in SaCode Community</h2>
                            <p>A contributor is who join SaCode Community and be able to share or support any events, SaCode's Weekend Event. During the event, the contributor can be a speaker / moderator / note taker / informer and event manager.</p>


                            <a href="{{url('admin/contributors/create')}}" class="btn btn-lg btn-primary"><i class="fas fa-plus-square"></i> New Contributor</a>
                        </div> <!-- card body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- row -->

            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">

                                {{-- <table id="datatable-buttons" --}}
                                <table id="datatable-buttons"
                                    class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Job Title</th>
                                            <th>Email</th>
                                            <th>GitHub</th>
                                            <th></th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        @unless(count($contributors) == 0)

                                        @foreach($contributors as $contributor)
                                            <tr>
                                                <td class=" align-middle">
                                                    @if($contributor->profile_picture)
                                                        <img src="{{asset('/storage/contributors/' . $contributor->profile_picture)}}" alt="{{$contributor->profile_picture}}" class="img img-thumbnail rounded-circle mr-1" style="height: 75px;width:75px;">
                                                    @else
                                                        <img src="{{asset('/images/no-image.png')}}" alt="Image" class="img img-thumbnail rounded mr-1" style="height: 75px;width:75px;">
                                                    @endif

                                                    <b class="h4 text-secondary">
                                                        {{$contributor['first_name'] .' ' .$contributor['last_name']}}
                                                    </b>
                                                </td>
                                                <td class="align-middle">
                                                    <i class="mdi mdi-briefcase"></i> {{$contributor->job_title}}
                                                </td>
                                                <td class="align-middle">
                                                    <i class="mdi mdi-email"></i> <a href="mailto:{{$contributor['email']}}" target="_blank" class="text-secondary">{{$contributor['email']}}</a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{$contributor->github}}" target="_blank">
                                                        <i class="mdi mdi-github"></i> {{$contributor->github}}
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group mb-2">
                                                        <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{url('./admin/contributors/' . $contributor->id)}}"><i class="fas fa-eye"></i> Detail</a>
                                                            <a class="dropdown-item" href="{{url('./admin/contributors/' . $contributor->id) . '/edit'}}"><i class="fas fa-edit"></i> Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#bs-example-modal-sm-{{$contributor->id}}"><i class="fas fa-trash"></i> Delete</a>
                                                        </div>
                                                    </div><!-- /btn-group -->
                                                </td>
                                            </tr>

                                            <!-- MODAL -->
                                            <div class="modal fade" id="bs-example-modal-sm-{{$contributor->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="mySmallModalLabel">Delete</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <h3 class="mb-3">Are you sure?</h3>

                                                            <form action="{{url('admin/contributors/' . $contributor->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fas fa-trash"></i> Delete
                                                                </button>
                                                            </form>

                                                            <button type="submit" class="btn btn-dark" data-dismiss="modal" aria-hidden="true">
                                                                <i class="fas fa-arrow-left"></i>
                                                                Cancel
                                                            </button>

                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <!-- END MODAL -->

                                        @endforeach

                                        @else
                                            <p>No listings found here...</p>
                                        @endunless

                                    </tbody>
                                </table>

                            </div>

                        </div> <!-- card body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- row -->


        </div> <!-- container -->

    </div> <!-- content -->

</x-layout>
