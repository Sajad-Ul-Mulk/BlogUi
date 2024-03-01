@props(['posts'])
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        @foreach($posts as $post)
            @if($loop->index<3)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" class="active" aria-current="true" aria-label="Slide {{$loop->index}}"></button>
            @endif
        @endforeach
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{($post->cover)}}" class="card-img-top" alt="..." height="300" width="400" >
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$post->slug}}</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <a href="post.html" class="btn btn-primary">Read this Post</a>
            </div>
        </div>

        @foreach($posts as $post)
            @if($loop->index<3)
            <div class="carousel-item ">
                <img src="{{asset('images/3.jpg')}}" class="card-img-top" alt="..."  height="300" width="400" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>featured Post {{$loop->index}}</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <a href="post.html" class="btn btn-primary">Read this Post</a>
                </div>
            </div>
            @endif
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
