<?php


namespace App\Traits;


use App\Models\Loans\EmergencyModelAccount;
use App\Models\Loans\LoansAccountModel;


trait LoanEvent
{

    public static function bootLoanEvent()
    {

        request()->input('loantype_id')=== 'coploan' ?
            static::created(function (LoansAccountModel $loansAccountModel) {
                $loansAccountModel->cooploan()->create([
                    'member_id' => $loansAccountModel->member_id
                ]);
            }): response()->json([
                'data'=>'something went wrong'
        ],422);

         request()->input('loantype_id') === 'wef' ?

            static::created(function (LoansAccountModel $loansAccountModel) {
                $loansAccountModel->wefloan()->create([
                    'member_id' => $loansAccountModel->member_id
                ]);


            }): response()->json([
             'data'=>'something went wrong'
         ],422);

         request()->input('loantype_id')=== 'welfare'?

            static::created(function (LoansAccountModel $loansAccountModel) {
                $loansAccountModel->welfare()->create([
                    'member_id' => $loansAccountModel->member_id
                ]);


            }): response()->json([
             'data'=>'something went wrong'
         ],422);

        request()->input('loantype_id')=== 'emergency'?

            static::created(function (LoansAccountModel $loansAccountModel) {

                $loansAccountModel->emergency()->create([
                    'member_id' => $loansAccountModel->member_id
                ]);



            }): response()->json([
            'data'=>'something went wrong'
        ],422);



    }

}
