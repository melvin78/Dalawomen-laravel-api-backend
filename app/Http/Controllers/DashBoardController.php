<?php

namespace App\Http\Controllers;

use App\Repository\AccountsInterface;

class DashBoardController extends Controller
{
    /**
     * @var AccountsInterface
     */
    private $accounts;

    public function __construct(AccountsInterface $accounts)
    {

        $this->accounts = $accounts;
    }

    public function balance()
    {
        $data = $this->accounts->allBalances();

        return response()->json([
           'data'=>$data
        ]);


    }
}
