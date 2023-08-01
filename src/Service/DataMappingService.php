<?php

namespace App\Service;

class DataMappingService
{
    public function applyMapping(array $dataToMap)
    {
        $dataMapped = [];
        foreach ($dataToMap as $key => $value) {
            $key = str_replace(['è', 'é'], 'e', $key);
            $key = str_replace('°', 'umero', $key);
            
            $key = str_replace('compteaffaire', 'compteAffaire', $key);
            
            $key = str_replace('numeroEtNomDeLaVoie', 'numeroEtNomDeVoie', $key);
            $pattern = '/\([^)]*\)\s*/';
            $replacement = '';

            $key = preg_replace($pattern, $replacement, $key);

            $words = explode(' ', strtolower($key));
            $capitalizedWords = array_map('ucfirst', $words);
            $pascalCaseString = implode('', $capitalizedWords);
            $pascalCaseString = lcfirst($pascalCaseString);
            $dataMapped[$pascalCaseString] = $value;
            unset($dataMapped['telephoneJob']);
            unset($dataMapped['compteaffaire']);
            unset($dataMapped['numeroEtNomDeLaVoie']);
        }
        return $dataMapped;
    }
}