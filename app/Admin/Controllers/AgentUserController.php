<?php

namespace App\Admin\Controllers;

use App\Model\AgentUsers;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AgentUserController extends AdminController
{
        

    protected $title = 'AgentUsers';
    protected function grid()
    {
        $grid = new Grid(new AgentUsers());

        $grid->column('id', __('Id'));
        $grid->column('username', __('Username'));
        $grid->column('password', __('Password'));
        $grid->column('encrypt_password', __('Encrypt password'));
        $grid->column('name', __('Name'));
        $grid->column('avatar', __('Avatar'));
        // $grid->column('remember_token', __('Remember token'));
        $grid->column('account_type', __('Account type'));
        $grid->column('recommend_id', __('Recommend id'));
        $grid->column('agent_id', __('Agent id'));
        $grid->column('unit_id', __('Unit id'));
        $grid->column('center_id', __('Center id'));
        $grid->column('relationship', __('Relationship'));
        $grid->column('profit_ratio', __('Profit ratio'));
        $grid->column('fee_ratio', __('Fee ratio'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(AgentUsers::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('username', __('Username'));
        $show->field('password', __('Password'));
        $show->field('encrypt_password', __('Encrypt password'));
        $show->field('name', __('Name'));
        $show->field('avatar', __('Avatar'));
        $show->field('remember_token', __('Remember token'));
        $show->field('account_type', __('Account type'));
        $show->field('recommend_id', __('Recommend id'));
        $show->field('agent_id', __('Agent id'));
        $show->field('unit_id', __('Unit id'));
        $show->field('center_id', __('Center id'));
        $show->field('relationship', __('Relationship'));
        $show->field('profit_ratio', __('Profit ratio'));
        $show->field('fee_ratio', __('Fee ratio'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        return $show;
    }

    protected function form()
    {
        $form = new Form(new AgentUsers());

        $form->text('username', __('Username'));
        $form->password('password', __('Password'));
        $form->text('encrypt_password', __('Encrypt password'));
        $form->text('name', __('Name'));
        $form->image('avatar', __('Avatar'));
        $form->text('remember_token', __('Remember token'));
        $form->switch('account_type', __('Account type'));
        $form->number('recommend_id', __('Recommend id'));
        $form->number('agent_id', __('Agent id'));
        $form->number('unit_id', __('Unit id'));
        $form->number('center_id', __('Center id'));
        $form->text('relationship', __('Relationship'));
        $form->switch('profit_ratio', __('Profit ratio'));
        $form->switch('fee_ratio', __('Fee ratio'));
        return $form;
    }


}
