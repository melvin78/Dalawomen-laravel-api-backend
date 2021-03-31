<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EmergencyLoanBorrowingRule implements Rule
{
 protected $maxamount=2000;
 protected $minamount=5000;

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value >=5000 && $value<=53000;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Amount to be borrowed for Emergency loans is between ' .$this->maxamount .' and '.$this->minamount;
    }
}
