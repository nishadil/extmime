<?php

namespace Nishadil\Extmime\Utils;


class Utils{

    protected $mimeTypesJson  = "";
    protected $mimeTypes      = "";
    protected $searchResult   = [];
    protected $libFile        = __DIR__ . "/mime_to_ext.json";

    public function __construct() {
        $this->mimeTypesJson    = file_get_contents($this->libFile);
        $this->mimeTypes        = json_decode($this->mimeTypesJson, true);
    }
    
    public function searchExt(string $extension) : array {
        
        // Check and fix if extension doen't have dot(.) prefix
        $extension = isset($extension[0]) && $extension[0] === '.' ? ".".$extension : $extension;
    
        // Search for the MIME type based on the extension
        foreach ($this->mimeTypes as $mimeType => $extensions) {
            if (in_array($extension, (array)$extensions)) {
                $this->searchResult[] = $mimeType;
            }
        }
    
        // Return empty string if no match is found
        return $this->searchResult;
    }



    public function searchMime( string $mimeType ) : array {
    
        // Search for the extension based on the MIME type
        foreach ($this->mimeTypes as $currentMimeType => $extensions) {
            if ($currentMimeType === $mimeType) {
                return $extensions;
            }
        }
    
        // Return empty array if no match is found
        return [];
    }

}

?>