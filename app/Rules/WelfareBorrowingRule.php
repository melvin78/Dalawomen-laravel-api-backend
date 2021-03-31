<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class WelfareBorrowingRule implements Rule
{
    protected $maxamount=35000;
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
        return $value >=5000 && $value<=35000;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Amount to be borrowed for Welfare loans is between ' .$this->maxamount .' and '.$this->minamount;
    }
}
