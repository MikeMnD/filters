<?php

namespace Administr\Filters\Types;

use Administr\Form\Field\RadioGroup;

class Boolean extends Type
{
    public function formField()
    {
        return new RadioGroup($this->field(), $this->label(), function (RadioGroup $group) {
            $group
                ->radio('да', ['value' => 1])
                ->radio('не', ['value' => 0])
                ;
        });
    }

    public function value()
    {
        $value = parent::value();

        if(is_null($value)) {
            return null;
        }

        return (bool)$value;
    }
}