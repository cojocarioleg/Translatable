@extends('admin.layouts.layout')

@section('title', 'Edit Product Page')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layouts.headerSection', ['title'=>'Edit Product'])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit the => {{ $product->title }}</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('products.update', ['product'=>$product->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $product->title }}" required>  
                                </div>

                                <!--CONTENT -->
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" 
                                        name="content" id="content" rows="7" >
                                        {!! $product->content !!}
                                        
                                    </textarea>
                                </div>
                                 <!--END CONTENT -->

                                <!--PRICE -->
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" 
                                        class="form-control @error('price') is-invalid @enderror" 
                                        
                                        value="{{ $product->price }}" required>
                                </div>
                                 <!--end PRICE -->

                                 <!--CATEGORIES -->
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" 
                                        id="category_id" name="category_id">

                                            @foreach ($categories as $k => $v )
                                                <option value="{{ $k }}" 
                                                    @if ($k == $product->category_id)
                                                        selected
                                                    @endif > 
                                                    {{ $v }}
                                                </option>
                                            @endforeach   
                                    
                                    </select>
                                </div>
                                <!--end CATEGORIES -->
                               
                                <!--TAGS -->
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <select name="tags[]" class="select2" id="tags" multiple="multiple" 
                                        data-placeholder="Select tags" style="width: 100%;">

                                        @foreach ($tags as $k =>$v )
                                            <option value="{{ $k }}"
                                                @if (in_array($k, $product->tags->pluck('id')->all()))
                                                    selected
                                                @endif> 
                                                {{ $v }}
                                            </option>
                                        @endforeach
                                   
                                    </select>
                                </div>
                                 <!--END TAGS -->

                                <!-- image -->
                                <div class="form-group">
                                    <label for="image">Image input</label>
                                    <div class="input-group">

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose image</label>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div> 
                                    <img src="{{$product->getImage() }}" class="img-thumbnail" height="200px" width="200px" alt="" >
                                </div>
                                 <!-- end image -->
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