<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Contracts\CategoryContract;

/**
 * Undocumented class
 */
class CategoryController extends BaseController
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $categoryRepository;
    /**
     * Undocumented function
     *
     * @param CategoryContract $categoryRepository
     */
    public function __construct(CategoryContract $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $categories = $this->categoryRepository->listCategories();
        $this->setPageTitle('Categories', 'List of All Categories');
        return view('admin.categories.index', compact('categories'));
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function create()
    {
        $categories = $this->categoryRepository->treeList();
        $this->setPageTitle('Categories', 'Create Category');
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'parent_id' =>  'required|not_in:0',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $category = $this->categoryRepository->createCategory($params);

        if (!$category) {
            return $this->responseRedirectBack('Error occurred while creating category.', 'error', true, true);
        }
        return $this->responseRedirect('admin.categories.index', 'Category added successfully', 'success', false, false);
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id)
    {
        $targetCategory = $this->categoryRepository->findCategoryById($id);
        $categories = $this->categoryRepository->treeList();

        $this->setPageTitle('Categories', 'Edit Category : ' . $targetCategory->name);
        return view('admin.categories.edit', compact('categories', 'targetCategory'));
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'parent_id' =>  'required|not_in:0',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $category = $this->categoryRepository->updateCategory($params);

        if (!$category) {
            return $this->responseRedirectBack('Error occurred while updating category.', 'error', true, true);
        }
        return $this->responseRedirectBack('Category updated successfully', 'success', false, false);
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        $category = $this->categoryRepository->deleteCategory($id);

        if (!$category) {
            return $this->responseRedirectBack('Error occurred while deleting category.', 'error', true, true);
        }
        return $this->responseRedirect('admin.categories.index', 'Category deleted successfully', 'success', false, false);
    }
}