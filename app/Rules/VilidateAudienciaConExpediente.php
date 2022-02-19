<?php

namespace App\Rules;
use App\Models\Expediente;
use App\Models\Audiencia;
use App\Models\TipoAudiencia;

use Illuminate\Contracts\Validation\Rule;

class VilidateAudienciaConExpediente implements Rule
{
    private $expediente = '';
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($expediente)
    {
        $this->expediente = $expediente;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $expedientes = Expediente::where('numero_expediente', $this->expediente)->get();

        if(count($expedientes) > 0) {
            
            foreach ($expedientes as $expediente) {

                $audiencia = Audiencia::where('expediente_id', $expediente->id)->where('tipo_id', $value)->first();

                if($audiencia) {
                   return false;
                } 
        
            }

            return true;

        } else {
            return true;
        }
            

       
        

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ya existe un expediente con el mismo tipo de audiencia.';
    }
}
