<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('slug', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status === 'active');
        }

        $categories = $query->latest()->paginate(10)->withQueryString();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:categories,slug',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimetypes:image/jpeg,image/png,image/webp,image/avif|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('categories', 'public');
        }

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        Category::create($validated);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        $category->loadCount('products');

        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:categories,slug,'.$category->id,
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimetypes:image/jpeg,image/png,image/webp,image/avif|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->boolean('remove_image')) {
            if ($category->image) {
                $disk = Storage::disk('public');
                if ($disk->exists($category->image)) {
                    $disk->delete($category->image);
                }
            }
            $validated['image'] = null;
        } elseif ($request->hasFile('image')) {
            if ($category->image) {
                $disk = Storage::disk('public');
                if ($disk->exists($category->image)) {
                    $disk->delete($category->image);
                }
            }
            $validated['image'] = $request->file('image')->store('categories', 'public');
        }

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $category->update($validated);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        if ($category->image) {
            $disk = Storage::disk('public');
            if ($disk->exists($category->image)) {
                $disk->delete($category->image);
            }
        }

        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
