<?php

namespace classes;

class View
{
    public function render($contentView, $layotView, $country = null)
    {
        include 'views/layouts/' . $layotView;
    }
}
