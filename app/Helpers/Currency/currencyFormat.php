<?php


if( !function_exists('european_format'))
{
    function european_format($amount)
    {
        //$fmt = new NumberFormatter( 'nl_NL', NumberFormatter::CURRENCY );
        //return $fmt->formatCurrency($amount, "EUR");
        return $amount;
    }
}

if( !function_exists('getKeyValueArray'))
{
    function getKeyValueArray($products)
    {
        $vatKeyValue = [];
    
        for ($i = 0; $i < count($products); $i++) {
            if ( ! isset($vatKeyValue[(int)$products[$i]->productVAT])) {
                $vatKeyValue[(int)$products[$i]->productVAT] = null;
            }
            $vatKeyValue[(int)$products[$i]->productVAT] += ($products[$i]->productUnitPrice * $products[$i]->productQuantity * $products[$i]->productVAT) / 100.00;
        }
    
        return $vatKeyValue;
    }
}
