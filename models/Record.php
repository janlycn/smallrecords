<?php

namespace JanVince\SmallRecords\Models;

use Str;
use Model;
use URL;
use October\Rain\Router\Helper as RouterHelper;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;
use JanVince\SmallRecords\Models\Settings;

/**
 * Model
 */
class Record extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'janvince_smallrecords_records';

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $timestamps = true;

    protected $guarded = [];

    protected $jsonable = ['repeater'];

    protected $dates = [
        'created_at',
        'updated_at',
        'date',
    ];

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:janvince_smallrecords_records',
    ];

    public $translatable = [
        'name',
        ['slug', 'index' => true],
        'description',
        'content',
        'url',
        'repeater',
    ];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'categories' => [
            'JanVince\SmallRecords\Models\Category',
            'table' => 'janvince_smallrecords_records_categories',
        ],
        'attributes' => [
            'JanVince\SmallRecords\Models\Attribute',
            'table' => 'janvince_smallrecords_records_attributes',
            'pivot' => ['value_text', 'value_number', 'value_boolean', 'value_string'],
            'timestamps' => true,
        ],
        'tags' => [
            'JanVince\SmallRecords\Models\Tag',
            'table' => 'janvince_smallrecords_records_tags',
            'timestamps' => true,
        ],

        /*
        *    Same relation with different name for frontend component
        *    - word 'attributes' is reserved!
        */
        'records_attributes' => [
            'JanVince\SmallRecords\Models\Attribute',
            'table' => 'janvince_smallrecords_records_attributes',
            'id' => 'records_id',
            'otherKey' => 'attribute_id',
            'pivot' => ['value_text', 'value_number', 'value_boolean', 'value_string'],
            'timestamps' => true,
        ]

    ];

    public $belongsTo = [
        'area' => [
            'JanVince\SmallRecords\Models\Area',
        ],
        'category' => [
            'JanVince\SmallRecords\Models\Category',
        ],
        'client' => [
            'JanVince\SmallRecords\Models\Client',
            'table' => 'janvince_smallrecords_records_clients',
        ],

    ];

    public $attachOne = [
        'preview_image' => ['System\Models\File'],
        'image' => ['System\Models\File'],
    ];
    public $attachMany = [
        'images' => ['System\Models\File', 'delete' => true],
        'files'    => ['System\Models\File', 'delete' => true],
    ];

    /**
     *  SCOPES
     */
    public function scopeIsActive($query) {
        return $query->where('active', '=', true);
    }

    /**
    *    FILTERS
    */
    public function filterFields($fields, $context = NULL) {

        $area = Area::find($context);

        if( empty( $area) ) {
            return;
        }

        $fields->area->cssClass = 'hidden';

        if($context and !empty( Area::find($context) ) ) {
            $fields->area->value = $context;
        };


        $allowed_fields = $area->allowed_fields;

        $protected_fields = [
            'id',
            'name',
            'slug',
            'area',
        ];

        foreach( $fields as $fieldKey => $field ) {

            if( ( empty($allowed_fields) && !in_array($fieldKey, $protected_fields) ) or
                ( !in_array($fieldKey, $protected_fields) && !in_array($fieldKey, $allowed_fields) ) ) {
                $fields->{$fieldKey}->hidden = true;
            }

        }

    }

    public function deleteAttachedImages(){

        foreach($this->images as $image){
            $image->delete();
        }

        return ['images' => count($this->images)];

    }

    public static function getAllRecords($area, $categorySlug = NULL, $activeOnly = NULL) {

        return Record::get();

    }

}