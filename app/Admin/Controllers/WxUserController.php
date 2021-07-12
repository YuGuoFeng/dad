<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\WxUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class WxUserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new WxUser(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('phone');
            $grid->column('add_time');
            $grid->column('logistics_company');
            $grid->column('car_number');
            $grid->column('heng_car_number');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new WxUser(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('phone');
            $show->field('add_time');
            $show->field('logistics_company');
            $show->field('car_number');
            $show->field('heng_car_number');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new WxUser(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('phone');
            $form->text('add_time');
            $form->text('logistics_company');
            $form->text('car_number');
            $form->text('heng_car_number');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
