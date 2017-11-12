<?php

namespace VhomHome;

use \Form;
use \Html;

Html::macro('delete', function ($route, $params = [], $label = 'Delete')
{
    $id = uniqid();

    $form = Form::open(['route' => array_merge([$route], is_array($params) ? $params: [$params]), 'method' => 'DELETE', 'class' => 'deletePanel delete__form button__inline__block', 'id' => 'form-'.$id]);
    $form .= '<a class="confirm button">' . $label . '</a>';
    $form .= Form::close();

    return $form;
});