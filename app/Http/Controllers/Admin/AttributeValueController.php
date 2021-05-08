<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Http\Controllers\Controller;
use App\Contracts\AttributeContract;

class AttributeValueController extends Controller
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
     * @param Request $request
     * @return void
     */
    public function getValues(Request $request)
    {
        $attributeId = $request->input('id');
        $attribute = $this->attributeRepository->findAttributeById($attributeId);

        $values = $attribute->values;

        return response()->json($values);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function addValues(Request $request)
    {
        $value = new AttributeValue();
        $value->attribute_id = $request->input('id');
        $value->value = $request->input('value');
        $value->price = $request->input('price');
        $value->save();

        return response()->json($value);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function updateValues(Request $request)
    {
        $attributeValue = AttributeValue::findOrFail($request->input('valueId'));
        $attributeValue->attribute_id = $request->input('id');
        $attributeValue->value = $request->input('value');
        $attributeValue->price = $request->input('price');
        $attributeValue->save();

        return response()->json($attributeValue);
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function deleteValues(Request $request)
    {
        $attributeValue = AttributeValue::findOrFail($request->input('id'));
        $attributeValue->delete();

        return response()->json(['status' => 'success', 'message' => 'Attribute value deleted successfully.']);
    }
}
