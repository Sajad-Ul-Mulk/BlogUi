
<div class="container">
    <div class="row justify center">

        <div class="row">
            <div class="row text-center mb-3">
                <h3>Create New Category</h3>
            </div>
            <form class="form-control" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-6 mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required placeholder="Title">
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="slug" class="form-label">Slug for Category</label>
                        <textarea type="text" class="form-control" id="slug" name="slug" required placeholder="Slug"></textarea>
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
