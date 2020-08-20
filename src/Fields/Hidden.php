<?php

namespace codicastudio\Novacron\Fields;

use Laravel\Nova\Fields\Text;

class Hidden extends Text
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'hidden';
}
