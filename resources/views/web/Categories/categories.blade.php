@extends('layouts.main')

@section('title', 'Categories')
@section('content')
<div class="container">

  <div class="starter-template">
                                  
    @foreach ($categories as $category)
      <div class="panel">
        <a href="{{ route('showCategory', $category->slug) }}">
            <img src="{{ $category->getImage() }}" style="height: 100px" >
            <h2>{{ $category->__('title ')}}</h2>
        </a>
        <p>
            {{ $category->slug }}
        </p>
      </div>
    @endforeach
    
    <nav>
      <ul class="pagination">
        <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
          {{ $categories->links() }}
        </li>
       
      </ul>
    </nav>
  
  </div>
 
</div>
@endsection