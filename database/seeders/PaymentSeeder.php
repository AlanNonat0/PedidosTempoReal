<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $payments = [
           ['type' => 'Dinheiro'],
           ['type' => 'Débito'],
           ['type' => 'Crédito'],
           ['type' => 'Pix'],
       ];
       foreach ($payments as $payment) {
           Payment::create($payment);
       }
       
    }
}
