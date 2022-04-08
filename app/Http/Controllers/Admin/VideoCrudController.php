<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VideoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VideoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VideoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Video::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/video');
        CRUD::setEntityNameStrings('video', 'videos');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label("Tiêu đề");
        CRUD::addColumn(['name' => 'thumbnail', 'type' => 'image','label'=>'Ảnh bìa']);
        CRUD::addColumn([
            'name' => 'category_id',
            'label'=> 'Danh mục',
            'model'=>'App\Models\Category',
            'type' => 'select',
            'entity'=>'Category',
            'attribute'=>'name',
        ]);
        CRUD::column('episode')->type("hidden");
        CRUD::column('updated_at')->label("Ngày cập nhật");

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(VideoRequest::class);

        CRUD::field('name')->label("Tiêu đề");
//        CRUD::addField(['name' => 'thumbnail', 'type' => 'image','crop'=>'true','aspect_ratio'=>16/9]);
        CRUD::addField(['name' => 'thumbnail', 'type' => 'browse']);
        CRUD::addField(['name' => 'source', 'type' => 'text']);
        CRUD::addField(['name' => 'hls_source', 'type' => 'text']);
        CRUD::addField(['name' => 'use_hls','label'=>'Tùy chọn', 'type' => 'radio','options'=>[1=>"Thay thế bằng HLS",0=>"Dùng mp4 nguyên bản"]]);
        CRUD::addField([
            'name' => 'category_id',
            'label'=> 'Danh mục',
            'model'=>'App\Models\Category',
            'type' => 'select',
            'entity'=>'Category',
            'attribute'=>'name',
        ]);
        CRUD::field('episode')->type("number")->label("Bài số ");


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
