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

            <form action="{{url('admin/blogs')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-8 col-xl-8">
                        <div class="card-box">


                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fas fa-pen mr-1"></i> Blog</h5>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="article_title">Title</label>
                                        <input type="text" class="form-control" id="article_title" name="article_title" placeholder="Enter article title" value="{{old('article_title')}}">
                                        @error('article_title')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type_content">Type</label>
                                        <select name="type_content" id="type_content" class="custom-select">
                                            <option hidden selected>Choose</option>
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
                                        <textarea class="form-control" id="summernote" name="article_content" rows="4" placeholder="Write something...">{{old('article_content')}}</textarea>
                                        @error('article_content')
                                            <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                        @enderror
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type_content">Status</label>
                                        <select name="status_content" id="type_content" class="custom-select">
                                            <option hidden selected>Choose</option>
                                            <option value="0">Draft</option>
                                            <option value="1">Publish</option>
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
                                    <img src="{{asset('./images/no-image.png')}}" alt="Image" class="img-thumbnail w-100">
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
                        <div class="card-box">
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="fas fa-plus"></i> Create</button>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->

            </form> <!-- end form -->


        </div> <!-- container -->

    </div> <!-- content -->

</x-layout>
