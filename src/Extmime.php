<?php

namespace Nishadil\Extmime;

use Nishadil\Extmime\Utils\Utils;

class Extmime extends Utils{

    public function __construct() {
        parent::__construct();
    }

    public function getExtension( string $mimeType ) : string {
        $extensions = $this->searchMime($mimeType);
        return isset($extensions[0]) ? $extensions[0] : '';
    }


    public function getAllExtensions( string $mimeType ) : array {
        return $this->searchMime($mimeType);
    }


    public function getMimeType( string $ext ) : string {
        $mimeTypes = $this->searchExt($ext);
        return isset($mimeTypes[0]) ? $mimeTypes[0] : '';
    }


    public function getAllMimeTypes( string $ext ) : array {
        return $this->searchExt($ext);
    }

}

?>