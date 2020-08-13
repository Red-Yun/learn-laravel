<?php

namespace App\Admin\Controllers;

use App\Model\Student;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StudentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Student';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Student());

        $grid->column('studentno', __('Studentno'));
        $grid->column('loginpwd', __('Loginpwd'));
        $grid->column('studentname', __('Studentname'));
        $grid->column('sex', __('Sex'));
        $grid->column('gradeid', __('Gradeid'));
        $grid->column('phone', __('Phone'));
        $grid->column('address', __('Address'));
        $grid->column('borndate', __('Borndate'));
        $grid->column('email', __('Email'));

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
        $show = new Show(Student::findOrFail($id));

        $show->field('studentno', __('Studentno'));
        $show->field('loginpwd', __('Loginpwd'));
        $show->field('studentname', __('Studentname'));
        $show->field('sex', __('Sex'));
        $show->field('gradeid', __('Gradeid'));
        $show->field('phone', __('Phone'));
        $show->field('address', __('Address'));
        $show->field('borndate', __('Borndate'));
        $show->field('email', __('Email'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Student());

        $form->text('studentno', __('Studentno'));
        $form->number('loginpwd', __('Loginpwd'));
        $form->text('studentname', __('Studentname'));
        $form->text('sex', __('Sex'));
        $form->number('gradeid', __('Gradeid'));
        $form->mobile('phone', __('Phone'));
        $form->text('address', __('Address'));
        $form->datetime('borndate', __('Borndate'))->default(date('Y-m-d H:i:s'));
        $form->email('email', __('Email'));

        return $form;
    }
}
