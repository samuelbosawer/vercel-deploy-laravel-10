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

                        <!-- flash message -->
                        <x-flash-message />
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="{{url('admin/blogs/'. $id)}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-lg-8 col-xl-8">
                        <div class="card-box">

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fas fa-pen mr-1"></i> Blog</h5>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="article_title">Title</label>
                                        <input type="text" class="form-control" id="article_title" name="article_title" placeholder="Enter article title" value="{{old('article_title') ? old('article_title') : $blog[0]->article_title }}">
                                        @error('article_title')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type_content">Type</label>
                                        <select name="type_content" id="type_content" class="custom-select">
                                            <option value="{{$blog[0]->type_content}}">{{$blog[0]->type_content}}</option>
                                            <option value="SaCode Weekend">SaCode Weekend</option>
                                            <option value="SaCode Course">SaCode Course</option>
                                            <option value="KopiCoding">KopiCoding</option>
                                            <option value="News">News</option>
                                        </select>
                                        @error('type_content')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="about">Article Content</label>
                                        <textarea class="form-control" id="summernote" name="article_content" rows="4" placeholder="Write something...">{{old('article_content') ? old('article_content') : $blog[0]->article_content }}</textarea>
                                        @error('article_content')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type_content">Status</label>
                                        <select name="status_content" id="type_content" class="custom-select">
                                            @if ($blog[0]->status_content == '0')
                                                <option selected value="0">Draft</option>
                                                <option value="1">Publish</option>
                                            @endif
                                            @if ($blog[0]->status_content == '1')
                                                <option value="1">Publish</option>
                                                <option selected value="0">Draft</option>
                                            @endif


                                        </select>
                                        @error('status')
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
                                <label for="github">Image</label>
                                <div class="d-block mb-3">
                                    <img src="{{ Storage::url($blog[0]->image_content) }}" alt="Image" class="img-thumbnail w-100">
                                </div>

                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_content" name="image_content">
                                    <label class="custom-file-label" for="image_content">Choose a picture</label>
                                    </div>
                                    @error('image_content')
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
                                <a href="{{url('admin/blogs')}}" class="btn btn-outline-secondary waves-effect waves-light mt-2"><i class="fas fa-arrow-left"></i> Close this page </a>
                            </div>
                            <div>
                                <button  type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#bs-example-modal-sm-{{$blog[0]->id}}"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->

                    <!-- END MODAL -->
            </form> <!-- end form -->
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
        </div> <!-- container -->

    </div> <!-- content -->

</x-layout>
