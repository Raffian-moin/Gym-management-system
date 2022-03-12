<?php

use Illuminate\Support\Str;

function formClass($field_name, $errors, $required = false, $classNames = null) {

    $id = Str::replace("-","_", $field_name);
    $default_classes = "form-control form-control-sm";
    $classes = $default_classes;

    if (!empty($classNames)) {
        foreach ($classNames as $className) {
            $classes .= " $className";
        }
    }

    $classes = $classes .($errors->has($field_name) ? ' border-danger' : null);

    return [
        'class' => $classes,
        'id' => $id,
        'required' => $required,
    ];
}

function inputFieldError($errors, $field_name) {
          if ($errors->has($field_name)) {
                return "<span class='text-danger' role='alert'>"
                            . $errors->first($field_name) .
                        "</span>";
    }
}