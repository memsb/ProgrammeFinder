<?php

class Zend_View_Helper_ImageChef extends Zend_View_Helper_Abstract
{
    public function imageChef($url, $width, $height)
    {
        return str_replace('$recipe', "{$width}x{$height}", $url);
    }
}