<?php

namespace App\Rules;
use App\Models\Expediente;

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
        $expediente = Expediente::where('numero_expediente', $this->expediente);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
