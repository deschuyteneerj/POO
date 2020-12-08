<?php
class Html
{
    public function createCssLink($cssLink){
        return '<link rel="stylesheet" href="'.$cssLink.'"/>';
    }

    public function createJsScript($jsLink){
        return '<script src="'.$jsLink.'"></script>';
    }

    public function createMetaTag($metaName, $metaContent){
        return '<meta name="'.$metaName.'" content="'.$metaContent.'"/>';
    }

    public function createMetaCharset($charset){
        return '<meta charset="'.$charset.'"/>';
    }

    public function createTitle($title){
        return '<title>'.$title.'</title>';
    }
    public function createFavicon($iconLink){
        return '<link rel="icon" href="'.$iconLink.'">';
    }

    public function createImg($imgLink, $imgAlt){
        return '<img src="'.$imgLink.'" alt="'.$imgAlt.'"/>';
    }

    public function createLink($link, $name){
        return '<a href="'.$link.'"/>'.$name.'</a>';
    }
}