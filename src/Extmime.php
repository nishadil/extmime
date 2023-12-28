<?php

namespace Nishadil\Extmime;

use Nishadil\Extmime\Utils\Utils;

class Extmime extends Utils{

    public function __construct() {
        parent::__construct();
    }

    public function getExtension($mimeType) : string {
        $extensions = $this->searchMime($mimeType);
        return isset($extensions[0]) ? $extensions[0] : '';
    }


    public function getAllExtensions($mimeType) : array {
        return $this->searchMime($mimeType);
    }


    public function getMimeType($ext) : string {
        return $this->searchExt($ext);
    }

}

?>