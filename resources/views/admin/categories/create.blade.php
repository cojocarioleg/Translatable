@extends('admin.layouts.layout')

@section('title', 'Home Page')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layouts.headerSection', ['title'=>'Categories'])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create a Category</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="title">
                                </div>
                                <div class="form-group">
                                    <label for="title_en">Title_en</label>
                                    <input type="text" name="title_en"
                                           class="form-control @error('title_en') is-invalid @enderror" id="title_en"
                                           placeholder="title_en">
                                </div>
                                <div class="form-group">
                                    <label for="title_ru">Title_ru</label>
                                    <input type="text" name="title_ru"
                                           class="form-control @error('title_ru') is-invalid @enderror" id="title_ru"
                                           placeholder="title_ru">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                        name="description" id="description" rows="5" placeholder="description">
                                        
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description_en">Description_en</label>
                                    <textarea class="form-control @error('description_en') is-invalid @enderror" 
                                        name="description_en" id="description_en" rows="5" placeholder="description_en">
                                      
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description_ru">Description_ru</label>
                                    <textarea class="form-control @error('description_ru') is-invalid @enderror" 
                                        name="description_ru" id="description_ru" rows="5" placeholder="description_ru">
                                        
                                    </textarea>
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