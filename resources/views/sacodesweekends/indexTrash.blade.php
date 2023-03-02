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
                            <h2>List of all sacodesweekends in SaCode Community</h2>
                            <p>A sacodesweekend is who join SaCode Community and be able to share or support any events, SaCode's Weekend Event. During the event, the sacodesweekend can be a speaker / moderator / note taker / informer and event manager.</p>


                            <a href="{{url('admin/sacodesweekends/create')}}" class="btn btn-lg btn-primary"><i class="fas fa-plus-square"></i> New sacodesweekend</a>
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
                                    class="table table-striped dt-responsive  w-100">
                                    <thead>
                                        <tr>
                                            <th>Poster</th>
                                            <th>Topic</th>
                                            <th>Speaker</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        @unless(count($sacodesweekends) == 0)

                                        @foreach($sacodesweekends as $sacodesweekend)
                                            <tr>
                                                <td class="align-middle">
                                                    @if($sacodesweekend->poster) 
                                                        <img src="{{asset('/storage/sacodesweekends/' . $sacodesweekend->poster)}}" alt="{{$sacodesweekend->poster}}" class="img img-thumbnail rounded mr-1" style="height: 75px;width:75px;">
                                                    @else
                                                        <img src="{{asset('/images/no-image.png')}}" alt="Poster" class="img img-thumbnail rounded mr-1" style="height: 75px;width:75px;">
                                                    @endif
                                                </td>
                                                <td class=" align-middle">
                                                    <b class="h4 text-secondary">
                                                        {{$sacodesweekend->topic}}
                                                    </b>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="d-block">{{$sacodesweekend->first_name . ' ' . $sacodesweekend->last_name}}</span>
                                                    <small class="badge border text-secondary">{{$sacodesweekend->job_title}}</small>
                                                </td>
                                                <td class="align-middle">
                                                    {{$sacodesweekend->date}}
                                                </td>
                                                <td class="align-middle">
                                                    {{$sacodesweekend->time}}
                                                </td>
                                                <td class="align-middle text-warning">
                                                    <i class="fas fa-trash"></i> {{ucfirst($sacodesweekend->status)}}
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group mb-2">
                                                        <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{url('./admin/sacodesweekends/' . $sacodesweekend->id)}}"><i class="fas fa-eye"></i> Detail</a>
                                                            <a class="dropdown-item" href="{{url('./admin/sacodesweekends/' . $sacodesweekend->id) . '/edit'}}"><i class="fas fa-edit"></i> Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-success" href="#" data-toggle="modal" data-target="#bs-example-modal-sm-{{$sacodesweekend->id}}-active"><i class="fas fa-check-square"></i> Active</a>
                                                            <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#bs-example-modal-sm-{{$sacodesweekend->id}}"><i class="fas fa-trash"></i> Delete</a>
                                                        </div>
                                                    </div><!-- /btn-group -->
                                                </td>
                                            </tr>
    
                                            <!-- MODAL -->
                                            <div class="modal fade" id="bs-example-modal-sm-{{$sacodesweekend->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="mySmallModalLabel">Delete</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <h3 class="mb-3">Are you sure?</h3>
                                                            
                                                            <form action="{{url('admin/sacodesweekends/' . $sacodesweekend->id) }}" method="POST">
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
    
                                            <!-- MODAL ACTIVE -->
                                            <div class="modal fade" id="bs-example-modal-sm-{{$sacodesweekend->id}}-active" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="mySmallModalLabel">Active</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <h3 class="mb-3">Are you sure?</h3>
                                                            
                                                            <form action="{{url('admin/sacodesweekends/' . $sacodesweekend->id) }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status" value="active">
                                                                <button type="submit" class="btn btn-success">
                                                                    <i class="fas fa-check-square"></i> Active
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
                                            <!-- END MODAL ACTIVE -->

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