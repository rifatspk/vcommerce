<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Contracts\AttributeContract;

class AttributeController extends BaseController
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $attributeRepository;
    /**
     * Undocumented function
     *
     * @param AttributeContract $attributeRepository
     */
    public function __construct(AttributeContract $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $attributes = $this->attributeRepository->listAttributes();

        $this->setPageTitle('Attributes', 'List of all attributes');
        return view('admin.attributes.index', compact('attributes'));
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function create()
    {
        $this->setPageTitle('Attributes', 'Create Attribute');
        return view('admin.attributes.create');
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
            'code'          =>  'required',
            'name'          =>  'required',
            'frontend_type' =>  'required'
        ]);

        $params = $request->except('_token');

        $attribute = $this->attributeRepository->createAttribute($params);

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while creating attribute.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attributes.index', 'Attribute added successfully', 'success', false, false);
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id)
    {
        $attribute = $this->attributeRepository->findAttributeById($id);

        $this->setPageTitle('Attributes', 'Edit Attribute : ' . $attribute->name);
        return view('admin.attributes.edit', compact('attribute'));
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
            'code'          =>  'required',
            'name'          =>  'required',
            'frontend_type' =>  'required'
        ]);

        $params = $request->except('_token');

        $attribute = $this->attributeRepository->updateAttribute($params);

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while updating attribute.', 'error', true, true);
        }
        return $this->responseRedirectBack('Attribute updated successfully', 'success', false, false);
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        $attribute = $this->attributeRepository->deleteAttribute($id);

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while deleting attribute.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attributes.index', 'Attribute deleted successfully', 'success', false, false);
    }
}
