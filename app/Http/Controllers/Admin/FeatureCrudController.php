<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeatureRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FeatureCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FeatureCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Feature::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/feature');
        CRUD::setEntityNameStrings('Khoá học', 'Các khoá học');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::column('name')->label("Tên");
        CRUD::column('slug')->label("URL");
        CRUD::column('starter')->label("Dự kiến bắt đầu");
        CRUD::column('coach')->label("Dự kiến giảng viên");
        CRUD::column('description')->label("Giới thiệu");
        CRUD::column('thumbnail')->label("Ảnh bìa")->type("image");
        CRUD::column('poster')->label("Poster")->type("image");

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
        CRUD::setValidation(FeatureRequest::class);

        CRUD::field('name')->label("Tên");
        CRUD::field('slug')->type("hidden");
        CRUD::field('starter')->label("Dự kiến bắt đầu")->type("date");
        CRUD::field('coach')->label("Dự kiến giảng viên");
        CRUD::field('description')->label("Giới thiệu");
        CRUD::field('thumbnail')->label("Ảnh bìa")->type("image")->aspect_ratio(0.65)->crop(true);
        CRUD::field('poster')->label("Poster")->type("image")->aspect_ratio(1920/1080)->crop(true);

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
