@extends('layouts.header')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add New Menu Category</h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center"> <!-- Added d-flex and align-items-center to center items vertically -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <form action="{{ route('menuCategory.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" class="form-control" name="menuCategoryName" placeholder="Enter Category Name">
                            </div>

                            <div class="form-group">
                                <label>Category Image</label>
                                <div class="image-upload image-upload-new">
                                    <input type="file" class="form-control-file" name="image">
                                    <div class="image-uploads">
                                        <img src="assets/img/icons/upload.svg" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">Submit</button>
                                <a href="{{ route('menuCategory.index') }}" class="btn btn-cancel">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
