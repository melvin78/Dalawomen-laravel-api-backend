<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class WomenEnterpriseFundBorrowingRule implements Rule
{
    protected $maxamount=6000;
    protected $minamount=25000;

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value >=6000 && $value<=25000;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Amount to be borrowed for Women Enterprise Fund loans is between ' .$this->maxamount .' and '.$this->minamount;
    }
}
