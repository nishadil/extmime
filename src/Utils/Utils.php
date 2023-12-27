<?php

namespace Nishadil\Extmime\Utils;


class Utils{
    
    function searchExt(string $extension) : string {
        // Check and fix if extension doen't have dot(.) prefix
        $extension = isset($extension[0]) && $extension[0] === '.' ? ".".$extension : $extension;

        // Load mime_types.json file
        $mimeTypesJson = file_get_contents('mime_types.json');
    
        // Decode JSON to associative array
        $mimeTypes = json_decode($mimeTypesJson, true);
    
        // Search for the MIME type based on the extension
        foreach ($mimeTypes as $mimeType => $extensions) {
            if (in_array($extension, (array)$extensions)) {
                return $mimeType;
            }
        }
    
        // Return empty string if no match is found
        return '';
    }



    function searchMime( string $mimeType ) : array {
        // Load mime_types.json file
        $mimeTypesJson = file_get_contents('mime_types.json');
    
        // Decode JSON to associative array
        $mimeTypes = json_decode($mimeTypesJson, true);
    
        // Search for the extension based on the MIME type
        foreach ($mimeTypes as $currentMimeType => $extensions) {
            if ($currentMimeType === $mimeType) {
                return $extensions;
            }
        }
    
        // Return empty array if no match is found
        return [];
    }

}

?>