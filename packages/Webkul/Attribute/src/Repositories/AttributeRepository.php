<?php

namespace Webkul\Attribute\Repositories;

use Webkul\Core\Eloquent\Repository;
use Illuminate\Support\Facades\Event;
use Webkul\Attribute\Repositories\AttributeOptionRepository;
use Illuminate\Container\Container as App;
use DB;

/**
 * Attribute Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class AttributeRepository extends Repository
{
    /**
     * AttributeOptionRepository object
     *
     * @var array
     */
    protected $attributeOption;

    /**
     * Create a new controller instance.
     *
     * @param  Webkul\Attribute\Repositories\AttributeOptionRepository  $attributeOption
     * @return void
     */
    public function __construct(AttributeOptionRepository $attributeOption, App $app)
    {
        $this->attributeOption = $attributeOption;

        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Attribute\Contracts\Attribute';
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        Event::fire('catalog.attribute.create.before');

        $data = $this->validateUserInput($data);

        $options = isset($data['options']) ? $data['options'] : [];
        unset($data['options']);
        $attribute = $this->model->create($data);

        if (in_array($attribute->type, ['select', 'multiselect', 'checkbox']) && count($options)) {
            foreach ($options as $optionInputs) {
                $this->attributeOption->create(array_merge([
                        'attribute_id' => $attribute->id
                    ], $optionInputs));
            }
        }

        Event::fire('catalog.attribute.create.after', $attribute);

        return $attribute;
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $data = $this->validateUserInput($data);

        $attribute = $this->find($id);

        Event::fire('catalog.attribute.update.before', $id);

        $attribute->update($data);

        $previousOptionIds = $attribute->options()->pluck('id');

        if (in_array($attribute->type, ['select', 'multiselect', 'checkbox'])) {
            if (isset($data['options'])) {
                foreach ($data['options'] as $optionId => $optionInputs) {
                    if (str_contains($optionId, 'option_')) {
                        $this->attributeOption->create(array_merge([
                                'attribute_id' => $attribute->id,
                            ], $optionInputs));
                    } else {
                        if (is_numeric($index = $previousOptionIds->search($optionId))) {
                            $previousOptionIds->forget($index);
                        }

                        $this->attributeOption->update($optionInputs, $optionId);
                    }
                }
            }
        }

        foreach ($previousOptionIds as $optionId) {
            $this->attributeOption->delete($optionId);
        }

        Event::fire('catalog.attribute.update.after', $attribute);

        return $attribute;
    }

    /**
     * @param $id
     * @return void
     */
    public function delete($id)
    {
        Event::fire('catalog.attribute.delete.before', $id);

        parent::delete($id);

        Event::fire('catalog.attribute.delete.after', $id);
    }

    /**
     * @param array $data
     * @return array
     */
    public function validateUserInput($data)
    {
        if ($data['is_configurable']) {
            $data['value_per_channel'] = $data['value_per_locale'] = 0;
        }

        if (! in_array($data['type'], ['select', 'multiselect', 'price'])) {
            $data['is_filterable'] = 0;
        }

        if (in_array($data['type'], ['select', 'multiselect', 'boolean'])) {
            unset($data['value_per_locale']);
        }

        return $data;
    }

    /**
     * @return array
     */
    public function getFilterAttributes()
    {
        return $this->model->where('is_filterable', 1)->with('options')->get();
    }
    public function getCoffeeMachines()
    {
        return $this->model->where('is_filterable', 1)->where('code', 'coffeemachineweight')->with('options')->get();
    }
    public function getCoffee()
    {
        return $this->model->where('is_filterable', 1)->where('code', 'CoffeeWeight')->with('options')->get();
    }
    public function getBaristaTools(){
        $attributeFamily = DB::table('attribute_families')->where('code', 'coffeemachine')->first();
    }
    public function getFam($fam_id){

        $db = DB::table('attribute_families')->where('id', $fam_id)->first();

        $group = DB::table('attribute_groups')->where('attribute_family_id', $db->id)->get();

        foreach($group as $gr){
            if($gr->name == 'General'){
                $id = $gr->id;
            }
        }

        $atr_group = DB::table('attribute_group_mappings')->where('attribute_group_id', $id)->get();

        //dd($atr_group);

        $arr = [];

        foreach($atr_group as $atr){
            $arr[] = $atr->attribute_id;
        }
        //dd($arr);

        $all_atr = DB::table('attributes')->where('is_filterable', 1)->whereIn('id', $arr)->get();
        //dd($all_atr);

        return $this->model->where('is_filterable', 1)->whereIn('id', $arr)->get();
        //return $this->model->where('is_filterable', 1)->with('options')->get();
        //return $all_atr;

        //dd($all_atr);

        //$attributeFamily = DB::table('attribute_families')->where('code', 'coffeemachine')->first();

        //dd($attributeFamily);

        //$test = $this->getAttributeByCode('sku');

        //dd($test);

        //return $this->model->where('is_filterable', 1)->where('code', 'BaristaTools')->with('options')->get();
    }
    public function getFlavored(){
        return $this->model->where('is_filterable', 1)->where('code', 'Flavored')->with('options')->get();
    }
    public function getCoffeeAccessories(){
        return $this->model->where('is_filterable', 1)->where('code', 'CoffeeAccessories')->with('options')->get();
    }

    /**
     * @return array
     */
    public function getProductDefaultAttributes($codes = null)
    {
        $attributeColumns  = ['id', 'code', 'value_per_channel', 'value_per_locale', 'type', 'is_filterable'];

        if (! is_array($codes) && !$codes)
            return $this->findWhereIn('code', [
                'name',
                'description',
                'short_description',
                'url_key',
                'price',
                'special_price',
                'special_price_from',
                'special_price_to',
                'status'
            ], $attributeColumns);

        if (in_array('*', $codes))
            return $this->all($attributeColumns);

        return $this->findWhereIn('code', $codes, $attributeColumns);
    }

    /**
     * @return Object
     */
    public function getAttributeByCode($code)
    {
        static $attributes = [];

        if (array_key_exists($code, $attributes))
            return $attributes[$code];

        return $attributes[$code] = $this->findOneByField('code', $code);
    }

    /**
     * @return Object
     */
    public function getFamilyAttributes($attributeFamily)
    {
        static $attributes = [];

        if (array_key_exists($attributeFamily->id, $attributes))
            return $attributes[$attributeFamily->id];

        return $attributes[$attributeFamily->id] = $attributeFamily->custom_attributes;
    }

    /**
     * @return Object
     */
    public function getPartial()
    {
        $attributes = $this->model->all();
        $trimmed = array();

        foreach($attributes as $key => $attribute) {
            if ($attribute->code != 'tax_category_id' && ($attribute->type == 'select' || $attribute->type == 'multiselect' || $attribute->code == 'sku')) {
                array_push($trimmed, [
                    'id' => $attribute->id,
                    'name' => $attribute->name,
                    'type' => $attribute->type,
                    'code' => $attribute->code
                ]);
            }
        }

        return $trimmed;
    }
}