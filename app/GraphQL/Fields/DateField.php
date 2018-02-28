<?php

namespace App\GraphQL\Fields;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Field;

class DateField extends Field {
    protected $attributes = [
        'description' => 'A date field'
    ];

    public function type()
    {
        return Type::string();
    }

    public function args()
    {
        return [
            'format' => [
                'type' => Type::string(),
                'description' => 'Desired string format of field',
            ],
        ];
    }

    protected function resolve($root, $args)
    {
        if (!isset($args['format'])) {
            $args['format'] = 'Y-m-d H:m:s';
        }

        return $root->getAttribute($this->attributes['name'])->format($args['format']);
    }
}
