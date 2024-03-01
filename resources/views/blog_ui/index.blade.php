{{--@php--}}
{{--    $posts=\App\Models\Post::latest()->paginate(6);--}}
{{--@endphp--}}
<x-layout>

    <div class="container">
        @if(count($posts)>0)
            <div class="row">
                <x-feature-carousal :posts="$posts"/>
            </div>
            <div class="row d-flex justify-content-center" >
                @foreach($posts as $post)
                    <x-postcard :post="$post"/>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{$posts->links()}}
            </div>
        @else
            <div class="d-flex justify-content-center mt-4" >
                <h3>No Published Posts...</h3>
            </div>
        @endif

    </div>
</x-layout>

