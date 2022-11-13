@extends('admin.layouts.layout')

@section('title', 'Home Page')
@section('content')
<div class="content-wrapper">
  <div class="container mt-2">
    <div class="row">
      <div class="col-12">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul class="list-unstyled">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif 


        @if (session()->has('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif 

      </div>
    </div>
  </div>
  
    <!-- Content Header (Page header) -->
    @include('admin.layouts.headerSection', ['title'=>'Products'])

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button> 
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
       <!--card-body -->
        <div class="card-body">
          <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add a product</a>
          @if (count($products))
              <div class="table-responsive">
                  <table class="table table-bordered table-hover text-nowrap">
                      <thead>
                      <tr>
                          <th style="width: 30px">#</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Price</th>
                          <th>Tags</th>
                          <th>Data</th>
                          <th>Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                        
                      @foreach($products as $product)
                          <tr>
                              <td>{{ $product->id }}</td>
                              
                              <td height="70px" width="70px">
                                <img src="{{$product->getImage()}}" height="50px" width="50px" alt="images/noImag" > 
                              </td>
                              <td>{{ $product->title }}</td>
                              <td>{{ $product->category->title }}</td>
                              <td>{{ $product->price}} lei</td>
                              <td>{{ $product->tags->pluck('title')->join(', ') }}</td>
                              <td>{{ $product->created_at }}</td>
                              <td>
                                  <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                     class="btn btn-info btn-sm float-left mr-1">
                                      <i class="fas fa-pencil-alt"></i>
                                  </a>

                                  <form
                                      action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                      method="post" class="float-left">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm"
                                              onclick="return confirm('Confirm deletion')">
                                          <i class="fas fa-trash-alt"></i>
                                      </button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>
          @else
              <p>No products yet...</p>
          @endif
      </div>

        <!-- /.card-body -->
        <div class="card-footer clearfix">
          {{ $products->links() }}
      </div>

        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection