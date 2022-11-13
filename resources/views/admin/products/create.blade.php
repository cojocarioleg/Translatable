@extends('admin.layouts.layout')

@section('title', 'Home Page')
@section('js')
    
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layouts.headerSection', ['title'=>'Create a Product'])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Product</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="title" required>  
                                </div>
                                <div class="form-group">
                                    <label for="title_en">Title_en</label>
                                    <input type="text" name="title_en"
                                           class="form-control @error('title_en') is-invalid @enderror" id="title_en"
                                           placeholder="title_en" required>  
                                </div>
                                <div class="form-group">
                                    <label for="title_ru">Title_ru</label>
                                    <input type="text_ru" name="title_ru"
                                           class="form-control @error('title_ru') is-invalid @enderror" id="title_ru"
                                           placeholder="title_ru" required>  
                                </div>

                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" 
                                        name="content" id="content" rows="3" placeholder="content ...">

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_en">Content_en</label>
                                    <textarea class="form-control @error('content_en') is-invalid @enderror" 
                                        name="content_en" id="content_en" rows="3" placeholder="content_en ...">

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_ru">Content_ru</label>
                                    <textarea class="form-control @error('content_ru') is-invalid @enderror" 
                                        name="content_ru" id="content_ru" rows="3" placeholder="content_ru ...">

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" 
                                        class="form-control @error('price') is-invalid @enderror" 
                                        placeholder="Enter price ..." required>
                                    </div>
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" 
                                        id="category_id" name="category_id">

                                            @foreach ($categories as $k => $v )
                                                <option value="{{ $k }}"> {{ $v }}</option>
                                            @endforeach   
                                    
                                    </select>
                                </div>

                               
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <select name="tags[]" class="select2" id="tags" multiple="multiple" 
                                        data-placeholder="Select tags" style="width: 100%;">

                                        @foreach ($tags as $k =>$v )
                                            <option value="{{ $k }}"> {{ $v }}</option>
                                        @endforeach
                                   
                                    </select>
                                </div>
                             
                                <div class="form-group">
                                    <label for="image">Image input</label>
                                    <div class="input-group">

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose image</label>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection