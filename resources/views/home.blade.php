@extends('layouts.jumbotron')
@section('container')
    <!-- Working Space -->
    <br>
    <div class="row learning-materials mt-4">
        <div class="col-lg-6">
          <img src="/img/workingspace.png" alt="Workingspace" class="img-fluid">
        </div>  
        <div class="col-lg-5">
          <h3>
            Sistem Informasi Padukuhan
          </h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius exercitationem in ea a? 
            Dicta maiores, voluptas, possimus expedita fuga odit exercitationem consequatur et itaque labore doloremque 
            enim inventore aliquam ullam illum odio asperiores? Animi voluptatum optio similique. Nemo, sint id asperiores 
            voluptas nisi officia dolor aliquam beatae incidunt eveniet, quod consequatur exercitationem, modi quam cupiditate 
            ducimus accusamus molestias quas sed placeat! Modi, qui aperiam. Voluptate ea excepturi maiores porro ab. Facilis error 
            dolore eligendi illo dolor exercitationem beatae, repudiandae quas blanditiis quia rem dolorum nesciunt quis. Architecto, 
            odio distinctio atque molestias unde sunt deserunt accusamus saepe similique nemo id suscipit.
          </p>
          <p>
           <b> <a href="/register">Klik Disini</a> </b>untuk melakukan pembelian paket ajar
          </p>
        </div>
    </div>

    <br><br>
    <div class="container">
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="col-sm-8 col-md-6">
                        <div class="card">
                            <div class="card-header">Demografik Penduduk</div>
                            <div class="card-body" style="height: 420px">
                                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                </div> <canvas id="chart-line" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

{{-- 
<br>
<h1 class="mt-3 mb-3 text-center">Paket Ajar</h1>
    @if($packages->count())
    <div class="container">
        <div class="row">
            @foreach ($packages as $package)

            <div class="d-flex align-items-stretch col-md-4 mb-2">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)">
                        <a href="/packages?category={{ $package->category->slug }}" class="text-decoration-none text-white">{{$package->category->name}}</a>
                    </div>
                    
                    @if($package->image)
                        <img src="{{asset('storage/'. $package->image)}}" style="height: 320px; width: 500px;" alt="{{$package->category->name}}" class="img-fluid">
                    @else
                        <img class="card-img-top" src="https://source.unsplash.com/500x500?{{$package->category->name}}" alt="{{$package->category->name}}">
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="/packages/{{ $package->slug }}" class="text-decoration-none"> {{$package->title}} </a>
                        </h2>

                        <p class="card-text">
                          <article>
                            {!!$package->body!!}
                          </article>
                        </p>
                    </div>
                    <a href="/packages/{{ $package->slug }}" class="btn btn-success ">Read More</a>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Package Found.</p>
    @endif
    <br>
    <h1 class="mt-3 mb-3 text-center">{{ $title }}</h1>
    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                @endif

                @if(request('user'))
                    <input type="hidden" name="user" value="{{request('user')}}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="carousel-item">
      <img src="/img/jumbotron-bg.jpg" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
    </div>

    @if($posts->count())
        <div class="card mb-3">
            
            @if($posts[0]->image)
            <div style="max-height: 450px; overflow:hidden;" class="d-flex justify-content-center">
                <img src="{{asset('storage/'. $posts[0]->image)}}" alt="{{$posts[0]->category->name}}" class="img-fluid">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" alt="{{$posts[0]->category->name}}" class="img-fluid mt-3">
            @endif
            
            <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
            <p>
                <small class="text-muted">
                By. <a href="/posts?user={{$posts[0]->user->username}}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in 
                <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }} </a>
                {{$posts[0]->created_at->diffForHumans()}}
                </small>
            </p>
            
            <p class="card-text">{{$posts[0]->excerpt}}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
            
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)

            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)">
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{$post->category->name}}</a>
                    </div>
                    
                    @if($post->image)
                        <img src="{{asset('storage/'. $post->image)}}" style="height: 320px; width: 500px;" alt="{{$post->category->name}}" class="img-fluid">
                    @else
                        <img class="card-img-top" src="https://source.unsplash.com/500x500?{{$post->category->name}}" alt="{{$post->category->name}}">
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none"> {{$post->title}} </a>
                        </h2>
                        <p>
                            <small class="text-muted">
                            By. <a href="/posts?user={{$post->user->username}}" class="text-decoration-none">{{ $post->user->name }}</a>
                            {{$post->created_at->diffForHumans()}}
                            </small>
                        </p>
                        <p class="card-text">{{$post->excerpt}}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{$posts->links()}}
    </div> --}}

@endsection