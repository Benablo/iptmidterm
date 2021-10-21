<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id'=> 1,
                'acct_name'=> 'Benablo MD. Regular Account',
                'init_invest'=> 15500,
                'start_date'=> '2021-05-22',
                'remarks'=> 'Done the transaction',
            ],
            [
                'user_id'=> 2,
                'acct_name'=> 'Mendez M. Regular Account',
                'init_invest'=> 22500,
                'start_date'=> '2021-05-28',
                'remarks'=> 'Done the transaction',
            ],
            [
                'user_id'=> 3,
                'acct_name'=> 'James L. Trust Fund',
                'init_invest'=> 50500,
                'start_date'=> '2021-12-12',
                'remarks'=> 'Done the transaction',
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
