{{--@php--}}
{{--    $categories=\App\Models\Category::all();--}}
{{--@endphp--}}
<x-layout>
    <div class="container">
        <div class="row justify center">

            <div class="row">
                <div class="row text-center mb-3">
                    <h3>Editing Post</h3>
                </div>
                <form class="form-control" action="{{ route('posts.update',$post) }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="col-6 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" value="{{$post->title}}" name="title"
                               required placeholder="Title">
                        @error('title')
                        {{ $message }}
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="slug" class="form-label">Slug for Post</label>
                            <textarea type="text" class="form-control" id="slug"  name="slug"
                                      required
                                      placeholder="Slug for Post">{{$post->slug}}</textarea>
                            @error('slug')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="body" class="form-label">Body of Post</label>
                            <textarea type="text" class="form-control" id="body" name="body"
                                      required
                                      placeholder="body of Post">{{$post->body}}</textarea>
                        </div>
                        @error('body')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="cover" class="form-label">Cover for Post</label>
                            <input type="file" class="form-control" id="cover" name="cover" required
                                   placeholder="Cover for Post"/>
                            <div class="img-fluid">
                                <img src={{($post->cover)}} class="card-img-top" width="354px" height="236px" alt="...">
                            </div>
                        </div>
                        @error('cover')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="category_id" class="form-label">Category of Post</label>
                            <select class="form-select" name="category_id" aria-label="Default select example">
                                <option selected>{{$post->category->title}}</option>
                                @foreach($categories as $category)
                                    <option value={{$category->id}}>{{$category->slug}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3 ">
                            <button class="btn btn-primary justify-end" type="submit">Submit</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-layout>

