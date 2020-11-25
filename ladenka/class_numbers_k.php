<?php
declare (strict_types = 1);

class numbersBarboraKozena{
    
    /**
     * 
     * @param float $hodnota
     * @param type $misto
     * @return float
     */
    public static function round_BarboraKozena(float $hodnota, $misto = NULL): float{
        
        if (is_null($misto)){
           return round($hodnota);
       }
       else {
          return round($hodnota, $misto);
       }
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float
     */
    public static function ceil_BarboraKozena(float $hodnota): float{
       
        return ceil($hodnota); 
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float
     */
    public static function floor_BarboraKozena(float $hodnota): float{
       
        return floor($hodnota); 
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float
     */
    public static function sqrt_BarboraKozena(float $hodnota): float{
        
        return sqrt($hodnota);
    }
    
    /**
     * 
     * @param type $hodnota
     * @param type $exponent
     * @return type
     */
    public static function pow_BarboraKozena($hodnota, $exponent){
        
        return pow($hodnota, $exponent);
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float
     */
    public static function sin_BarboraKozena(float $hodnota): float{
        
        return sin($hodnota);
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float
     */
    public static function cos_BarboraKozena(float $hodnota): float{
        
        return cos($hodnota);
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float
     */
    public static function tan_BarboraKozena(float $hodnota): float{
        
        return tan($hodnota);
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float
     */
    public static function asin_BarboraKozena(float $hodnota): float{
        
        return asin($hodnota);
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float¨
     */
    public static function acos_BarboraKozena(float $hodnota): float{
        
        return acos($hodnota);
    }
    
    /**
     * 
     * @param float $hodnota
     * @return float
     */
    public static function atan_BarboraKozena(float $hodnota): float{
        
        return atan($hodnota);
    }
    
    /**
     * 
     * @param float $hodnota
     * @param float $hodnota2
     * @return float
     */
    public static function fmod_BarboraKozena(float $hodnota, float $hodnota2): float{
        
         return fmod($hodnota, $hodnota2);
    }
    
    /**
     * 
     * @param array $hodnoty
     * @return type
     */
    public static function max_BarboraKozena(array $hodnoty){
        
         return max($hodnoty);
    }
    
    /**
     * 
     * @param array $hodnoty
     * @return type
     */
    public static function min_BarboraKozena(array $hodnoty){
        
         return min($hodnoty);
    }
    
    /**
     * 
     * @param type $hodnota
     * @return type
     */
    public static function abs_BarboraKozena($hodnota){
        
        return abs($hodnota);
    }
    
    /**
     * 
     * @param type $hodnota
     * @param type $hodnota2
     * @return type
     */
    public static function odcitani_BarboraKozena($hodnota, $hodnota2){
        
        return ($hodnota - $hodnota2);
    }
    
    /**
     * 
     * @param type $hodnota
     * @param type $hodnota2
     * @return type
     */
    public static function scitani_BarboraKozena($hodnota, $hodnota2){
        
        return ($hodnota + $hodnota2);
    }
    
    /**
     * 
     * @param type $hodnota
     * @param type $hodnota2
     * @return type
     */
    public static function celociselne_deleni_BarboraKozena($hodnota, $hodnota2){
        
        return ($hodnota / $hodnota2);
    }
    
    /**
     * 
     * @param type $hodnota
     * @param type $hodnota2
     * @return type
     */
    public static function nasobeni_BarboraKozena($hodnota, $hodnota2){
        
        return ($hodnota * $hodnota2);
    }
    
    /**
     * 
     * @param float $hodnota
     * @param type $misto
     * @param type $znamenko
     * @param type $oddelovac
     * @return string
     */
    public static function number_format_BarboraKozena(float $hodnota, $misto = NULL, $znamenko = NULL, $oddelovac = NULL): string{
        
        if (!empty($misto) && is_null($znamenko) && is_null($oddelovac)){
            return number_format($hodnota, $misto);
        }
        else if(!empty($misto) && !empty($znamenko) && !empty($oddelovac)){
            return number_format($hodnota, $misto, $znamenko, $oddelovac);
        }
        else{
            return number_format($hodnota);
        }
    }
}

?>