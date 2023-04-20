<?php 


abstract class UnidadMedida{
    
    abstract public function convertir_a_metros($valor, $unidad_desde);
    abstract public function convertir_desde_metros($valor, $unidad_hasta);
    abstract public function imprimirResultado($resultado);
   
    
    
   
}
 
class Longitud extends UnidadMedida{
    
   public $desde ="";
    public $hasta ="";
    public $calculoDesde="";
    


    public function convertir_a_metros($valor, $unidad_desde){
        switch ($unidad_desde) {
            case 'Milimetro':
                return floatval($valor) / 1000;
                break;
            case 'Centimetro':
                    return floatval($valor) / 100;
                    break;
            case 'Decimetro':
                return floatval($valor) / 10;
                        break;
            case 'Metro':
                    return floatval($valor) *1;
                            break;
            case 'Decametro':
                    return floatval($valor) *10;
                                break;
            case 'Hectometro':
                    return floatval($valor) * 100;
            break;
            case 'Kilometro':
                return floatval($valor) * 1000;
            break;
            default:
                return 'Unidad de medida no soportada';
                break;
        }
    }

    public function convertir_desde_metros($valor, $unidad_hasta){
        switch ($unidad_hasta) {
            case 'Milimetro':
                return floatval($valor) *1000;
                break;
            case 'Centimetro':
                    return floatval($valor) *100;
                    break;
            case 'Decimetro':
                return floatval($valor) *10;
                        break;
            case 'Metro':
                    return floatval($valor) *10;
                            break;
            case 'Decametro':
                    return floatval($valor) / 10;
                                break;
            case 'Hectometro':
                    return floatval($valor) /100;
            break;
            case 'Kilometro':
                return floatval($valor) /1000;
            break;

            default:
                return 'Unidad de medida no soportada';
                break;
        }
    }

    public function imprimirResultado($resultado)
    {
        
    }
     

    }

    
    

?>