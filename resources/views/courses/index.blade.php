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
                            <h2>List of all courses in SaCode Community</h2>
                            <p>A course is who join SaCode Community and be able to share or support any events, SaCode's Weekend Event. During the event, the course can be a speaker / moderator / note taker / informer and event manager.</p>


                            <a href="{{url('admin/courses/create')}}" class="btn btn-lg btn-primary"><i class="fas fa-plus-square"></i> New course</a>
                        </div> <!-- card body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- row -->

            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="table-responsive">

                                <table id="datatable-buttons"
                                    class="table table-striped dt-responsive  w-100">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th></th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        @unless(count($courses) == 0)

                                        @foreach($courses as $course)
                                            <tr>
                                                <td class=" align-middle">
                                                    {{$course->title}}
                                                </td>
                                                <td class="align-middle">
                                                    {{$course->description}}
                                                </td>
                                                <td class="align-middle">
                                                    {{$course->date}}
                                                </td>
                                                <td class="align-middle">
                                                    {{$course->time}}
                                                </td>
                                                <td>
                                                    <div class="btn-group mb-2">
                                                        <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{url('./admin/courses/' . $course->id)}}"><i class="fas fa-eye"></i> Detail</a>
                                                            <a class="dropdown-item" href="{{url('./admin/courses/' . $course->id) . '/edit'}}"><i class="fas fa-edit"></i> Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#bs-example-modal-sm-{{$course->id}}"><i class="fas fa-trash"></i> Delete</a>
                                                        </div>
                                                    </div><!-- /btn-group -->
                                                </td>
                                            </tr>
    
                                            <!-- MODAL -->
                                            <div class="modal fade" id="bs-example-modal-sm-{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="mySmallModalLabel">Delete</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <h3 class="mb-3">Are you sure?</h3>
                                                            
                                                            <form action="{{url('admin/courses/' . $course->id) }}" method="POST">
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