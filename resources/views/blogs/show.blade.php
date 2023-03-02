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
                                <li class="breadcrumb-item"><a href="{{url('admin/blogs')}}">Blogs</a></li>
                                <li class="breadcrumb-item active">{{$pageTitle}}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{$pageTitle}}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


                <div class="row">

                    <div class="col-lg-8 col-xl-8">
                        <div class="card-box">


                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fas fa-pen mr-1"></i> Blog</h5>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="article_title">Title</label>
                                        <input type="text" class="form-control" readonly placeholder="Enter article title" value="{{$blog[0]->article_title}}">

                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type_content">Type</label>
                                        <input type="text" class="form-control" readonly placeholder="Enter article title" value="{{$blog[0]->type_content}}">
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="about">Article Content</label>
                                        <textarea class="form-control" id="summernote" name="article_content" rows="4" placeholder="Write something...">{{$blog[0]->article_content}}</textarea>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type_content">Status</label>
                                        @if ($blog[0]->status_content == '0')
                                            @php
                                                $status = 'Draft';
                                            @endphp
                                        @endif

                                        @if ($blog[0]->status_content == '1')
                                        @php
                                            $status = 'Publish';
                                        @endphp
                                    @endif
                                        <input type="text" class="form-control" readonly  value="{{$status}}">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->



                        </div> <!-- end card-box-->

                    </div> <!-- end col -->

                    <div class="col-lg-4 col-xl-4">
                        <div class="card-box">
                            <div class="form-group">
                                <label for="github">Image</label>
                                <div class="d-block mb-3">
                                    <img src="{{ Storage::url($blog[0]->image_content) }}" alt="Image" class="img-thumbnail w-100">
                                </div>
                            </div>
                        </div> <!-- end card group -->
                    </div> <!-- end col -->

                </div> <!-- end row-->

                <div class="row">
                    <div class="col">
                        <div class="card-box d-flex justify-content-between">
                            <div>
                                <a href="{{url('./admin/blogs/' . $id) . '/edit'}}" type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="fas fa-pen"></i> Edit </a>
                                <a href="{{url('admin/blogs')}}" class="btn btn-outline-secondary waves-effect waves-light mt-2"><i class="fas fa-arrow-left"></i> Close this page </a>
                            </div>
                            <div>
                                <button  type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#bs-example-modal-sm-{{$blog[0]->id}}"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
                     <!-- MODAL -->
                     <div class="modal fade" id="bs-example-modal-sm-{{$blog[0]->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="mySmallModalLabel">Delete</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body text-center">
                                    <h3 class="mb-3">Are you sure?</h3>

                                    <form action="{{url('admin/blogs/' . $blog[0]->id) }}" method="POST" class="d-inline" >
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
        </div> <!-- container -->
    </div> <!-- content -->

</x-layout>
