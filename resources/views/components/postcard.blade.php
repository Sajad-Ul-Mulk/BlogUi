@props(['post'])
<div class="col-md-4 mt-4">
    <div class="card">
        <div class="img-fluid">
            <img src={{($post->cover)}} class="card-img-top" width="354px" height="236px" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Title:{{$post->title}}</h5>
            <h5 class="card-title">Post Slug:{{$post->slug}}</h5>
            <h5 class="card-title">Category:{{$post->category->slug}}</h5>
            <p class="card-text">Body: {{$post->body}}</p>
            <a href="{{ route('posts.show',$post) }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>
