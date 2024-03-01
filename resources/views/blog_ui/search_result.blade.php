{{--@dd($error)--}}
<x-layout>
    <div class="row d-flex justify-content-center" >
        @if(count($posts)<1)
            <div class="d-flex justify-content-center mt-4">
                <p> {{$error}}</p>
            </div>
            </div>
        @else
            @foreach($posts as $post)
                <x-postcard :post="$post"/>
            @endforeach
        @endif

    </div>
</x-layout>
