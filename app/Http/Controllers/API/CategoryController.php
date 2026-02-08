<?php
// app/Http\Controllers/API/CategoryController.php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Helper\ResponseHelper;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    // Display a listing of categories
    public function index(Request $request): JsonResponse
    {
        try {
            $query = Category::with(['parent:id,name', 'user:id,title,email']);

            // Filter by parent_id if provided
            if ($request->has('parent_id')) {
                $parentId = $request->get('parent_id');
                $query->where('parent_id', $parentId === 'null' ? null : $parentId);
            }

            // Filter by user_id if provided
            if ($request->has('user_id')) {
                $query->where('user_id', $request->get('user_id'));
            }

            // Order by priority (nulls last) then by name
            $categories = $query->orderByPriority()
                ->orderBy('name')
                ->get();
            $categories->makeHidden(['user_id', 'parent_id', 'updated_at', 'created_at']);
            return ResponseHelper::success('Categories retrieved successfully', $categories, 200);
        } catch (\Exception $e) {
            return ResponseHelper::error('Failed to retrieve categories', $e->getMessage(), 500);
        }
    }

    // Store a newly created category
    public function store(CategoryRequest $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            $category = Category::create($request->validated());
            DB::commit();
            $category->load(['parent:id,name', 'user:id,title,email'])->makeHidden(['user_id', 'parent_id', 'updated_at', 'created_at']);
            return ResponseHelper::success('Category created successfully',  $category, 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return ResponseHelper::error('Failed to create category', $e->getMessage(), 500);
        }
    }
    // Display the specified category
    public function show($id): JsonResponse
    {
        try {
            $category = Category::with(['parent', 'user', 'children'])->find($id);

            if (!$category) {
                return ResponseHelper::error('Category not found', null, 404);
            }

            return ResponseHelper::success('Category retrieved successfully', $category, 200);
        } catch (\Exception $e) {
            return ResponseHelper::error('Failed to retrieve category', $e->getMessage(), 500);
        }
    }
    // Update the specified category
    public function update(CategoryRequest $request, $id): JsonResponse
    {
        try {
            $category = Category::find($id);
            if (!$category) {
                return ResponseHelper::error('Category not found', null, 404);
            }
            DB::beginTransaction();
            $category->update($request->validated());
            DB::commit();
            $category->load(['parent:id,name', 'user:id,title,email'])->makeHidden(['user_id', 'parent_id', 'updated_at', 'created_at']);
            return ResponseHelper::success('Category updated successfully', $category, 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return ResponseHelper::error('Failed to update category', $e->getMessage(), 500);
        }
    }
    //Remove the specified category
    public function destroy($id): JsonResponse
    {
        try {
            $category = Category::withCount('children')->find($id);
            if (!$category) {
                return ResponseHelper::error('Category not found', null, 404);
            }
            // Check if category has children (due to restrictOnDelete)
            if ($category->children_count > 0) {
                return ResponseHelper::error('Cannot delete category because it has child categories', null, 400);
            }
            DB::beginTransaction();
            $category->delete();
            DB::commit();
            return ResponseHelper::success('Category deleted successfully', null, 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return ResponseHelper::error('Failed to delete category', $e->getMessage(), 500);
        }
    }
    // Search categories by name
    public function search(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'name' => 'required|string|min:1'
            ]);
            $categories = Category::where('name', 'like', '%' . $request->name . '%')
                ->orderByPriority()
                ->orderBy('name')
                ->get();
            return ResponseHelper::success('Categories search results', $categories, 200);
        } catch (\Exception $e) {
            return ResponseHelper::error('Failed to search categories', $e->getMessage(), 500);
        }
    }
    public function frontendCategories()
{
    try {
        $categories = Category::whereNull('parent_id')
            ->withCount('products')
            ->orderBy('priority', 'asc')
            ->orderBy('name', 'asc')
            ->get(['id', 'name', 'image', 'priority']);

        return ResponseHelper::success('Categories retrieved', $categories, 200);
    } catch (\Exception $e) {
        return ResponseHelper::error('Failed to load categories', $e->getMessage(), 500);
    }
}
}
