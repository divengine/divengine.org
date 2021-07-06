<?php
#id = myform

include "FormView.php";

class MyForm extends FormView
{
    public $action = "/myform";

    public function __construct($src = null, $items = null, $ignore = [])
    {
        $src = 'FormView';

        $field = new FieldView();
        $field->name = 'name';
        $field->label = 'Nombre';
        $field->value = $_POST['name'] ?? '';

        $this->addChild($field);
        parent::__construct($src, $items, $ignore);
    }

    #listen@showForm = get://myform
    static function showForm(){
        $form  = new self();
        var_dump($form);
        echo $form;
    }

    #listen@process = post://myform
    static function process($data, $args){
        $form = new self();
        $label = new LabelView();
        $label->text = base64_encode($form->childs['name']->value);
        $form->addChild($label);
    }
}