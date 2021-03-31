<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CoploanBorrowingRule implements Rule
{
    protected $maxamount=10000;
    protected $minamount=70000;

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value >=10000 && $value<=70000;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Amount to be borrowed for Cooperative loans is between ' .$this->maxamount .' and '.$this->minamount;
    }
}
