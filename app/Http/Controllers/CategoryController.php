<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use function SebastianBergmann\Type\TestFixture\voidReturnType;

class CategoryController extends Controller
{

    public function index()
    {
        return view('blog_ui.category.index', [
            'categories' => Category::latest()->paginate(6),
        ]);
    }


    public function create()
    {
        return view('blog_ui.category.create-category');
    }


    public function store(StoreCategoryRequest $request)
    {
        $newCategory = $request->validated();

        Category::create($newCategory);

        return redirect('categories');
    }


    public function show(Category $category)
    {
        //
    }


    public function edit(Category $category)
    {
        return view('blog_ui.category.edit',compact('category'));
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if(!Gate::allows('is_admin'))
            return redirect()->back();

        $category->update($request->validated());
        return redirect('categories');
    }


    public function destroy(Category $category)
    {
        if(!Gate::allows('is_admin'))
            return redirect()->back();

        $category->delete();
        return redirect()->back();
    }
}
