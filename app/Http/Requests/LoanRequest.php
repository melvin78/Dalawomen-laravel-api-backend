<?php

namespace App\Http\Requests;


use App\Rules\CoploanBorrowingRule;
use App\Rules\EmergencyLoanBorrowingRule;
use App\Rules\WelfareBorrowingRule;
use App\Rules\WomenEnterpriseFundBorrowingRule;
use Illuminate\Foundation\Http\FormRequest;

class LoanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = '';

        if ($this->loantype_id === 'wef') {
            $rules = new WomenEnterpriseFundBorrowingRule();
        }

        if ($this->loantype_id === 'coploan') {
            $rules = new CoploanBorrowingRule();
        }

        if ($this->loantype_id === 'welfare') {
            $rules = new WelfareBorrowingRule();
        }

        if ($this->loantype_id === 'emergency') {
            $rules = new EmergencyLoanBorrowingRule();
        }
        return [

            'loantype_id' => 'required',
            'amount' => ['required', $rules]


        ];
    }

    public function messages()
    {
        return [
            'amount.required' => 'Kindly specify amount you wish to borrow',
            'amount.between' => 'Amount to be borrowed should be between :between and :between',
            'loantype_id' => 'kindly choose a loan'
        ];

    }
}
