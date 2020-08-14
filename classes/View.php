<?php

namespace classes;

class View
{
    public function render($contentView, $layotView, $countries = null)
    {
        include 'views/layouts/' . $layotView;
    }
}
