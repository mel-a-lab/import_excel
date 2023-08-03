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
            dump($key);
            $key = str_replace('compteaffaire', 'compte Affaire', $key);
            
            $key = str_replace('Numero et Nom de la voie', 'numero Et Nom De Voie', $key);
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
        dump($dataMapped);
        return $dataMapped;
    }
}