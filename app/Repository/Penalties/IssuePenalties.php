<?php


namespace App\Repository\Penalties;


use App\Models\Credits\PenaltiesModel;
use App\Models\Loans\LoansAccountModel;
use App\Repository\IssuePenaltyInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IssuePenalties extends FindPenaltiesClass implements IssuePenaltyInterface
{

    /**
     * @var PenaltiesModel
     */
    private $penaltiesModel;

    public function __construct(LoansAccountModel $loansAccountModel, Carbon $carbon, PenaltiesModel $penaltiesModel)
    {
        parent::__construct($loansAccountModel, $carbon);
        $this->penaltiesModel = $penaltiesModel;
    }


    public function issuePenalty()
    {



            $values = $this->findLatePayments();

            foreach ($values as $value) {

                $this->penaltiesModel->create([
                    'penaltytype_id' => $value->loantype_id,
                    'member_id' => $value->member_id,
                    'loantype_id' => $value->loantype_id

                ]);
            }


    }
}
