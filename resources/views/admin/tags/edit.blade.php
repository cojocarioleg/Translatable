@extends('admin.layouts.layout')

@section('title', 'Home Page')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layouts.headerSection', ['title'=>'Edit Tag'])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Tag "{{ $tag->title }}"
                            </h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('tags.update', ['tag' => $tag->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $tag->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="title_en">Titl_ene</label>
                                    <input type="text_en" name="title_en"
                                           class="form-control @error('title_en') is-invalid @enderror" id="title"
                                           value="{{ $tag->title_en }}">
                                </div>
                                <div class="form-group">
                                    <label for="title_ru">Title_ru</label>
                                    <input type="text_ru" name="title_ru"
                                           class="form-control @error('title_ru') is-invalid @enderror" id="title"
                                           value="{{ $tag->title_ru }}">
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