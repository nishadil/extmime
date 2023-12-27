<?php

namespace Nishadil\Extmime;

use Nishadil\Extmime\Utils\Utils;

class Extmime{

    public function getExtension($mimeType) : string {
        $extensions = Utils::searchMime($mimeType);
        return isset($extensions[0]) ? $extensions[0] : '';
    }


    public function getAllExtensions($mimeType) : array {
        return Utils::searchMime($mimeType);
    }


    public function getMimeType($ext) : string {
        return Utils::searchExt($ext);
    }

}

?>