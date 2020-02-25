<?php

namespace App\Admin\Controllers;

use App\namayande;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NamayandeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\namayande';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new namayande());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('code', __('Code'));
        $grid->column('hoze', __('Hoze'));
        // $grid->column('province_id', __('Province id'));
        $grid->province_id(__('models.Province'))->display(function ($province_id) {
            return ($province_id ? \App\Province::find($province_id)->name : null);
        });

        //$grid->column('created_at', __('Created at'));
        //$grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(namayande::findOrFail($id));

        $show->field('name', __('Name'));
        $show->field('code', __('Code'));
        $show->field('hoze', __('Hoze'));
        // $show->field('province_id', __('Province id'));

        $prov = \App\Province::all()->toArray();
        $provArray = [];
        foreach ($prov as $item) {
            $provArray[$item['id']] = $item['name'];
        }
        $show->province_id(__('models.province'))->using($provArray);

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new namayande());

        $form->text('name', __('Name'));
        $form->text('code', __('Code'));
        $form->text('hoze', __('Hoze'));
        //$form->number('province_id', __('Province id'));

        $form->select('province_id', __('models.province'))->options(\App\Province::all()->pluck('name', 'id'));

        return $form;
    }
}
