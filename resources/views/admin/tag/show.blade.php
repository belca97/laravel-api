@extends('admin.layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <h1>Visualizza Tag</h1>

          <div><strong>Name:</strong> {{$tag->name}}</div>
          <div><strong>Slug:</strong> {{$tag->slug}}</div>
          {{-- <div><strong>Categoria:</strong> {{$post->category->name}}</div> --}}
          

          <div>

            <ul>
              @foreach ($tag->posts as $post )
            

              <li>
                <a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a>
              </li>

             @endforeach
            </ul>
             
          </div>


          <a href="{{route('admin.tags.index')}}" class="btn btn-primary mt-4">Torna alla lista</a>

        </div>
    </div>
</div>
@endsection