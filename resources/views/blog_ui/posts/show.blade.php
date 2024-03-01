<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <h2>{{$post->title}}</h2>
                    <h5>Slug::{{$post->slug}}</h5>
                    <div class="img-fluid">
                        <img src={{($post->cover)}} class="card-img-top" width="354px" height="236px" alt="...">
                    </div>
                    <p>Published Date: {{$post->created_at->diffForHumans()}}</p>
                    <p>{{$post->body}}</p>
                    <p>Author:{{$post->user->email}}</p>

                </div>

            </div>
        </div>
    </div>

</x-layout>
