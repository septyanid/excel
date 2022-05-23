<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomersImport implements ToModel, WithHeadingRow
{
  /**
   * @param array $row
   *
   * @return \Illuminate\Database\Eloquent\Model|null
   */
  public function model(array $row)
  {
    return new Customer([
      'customer_id'  => $row['customer_id'],
      'name'         => $row['name'],
      'gender_id'    => $row['gender'],
      'address'      => $row['address'],
      'phone_number' => $row['phone'],
    ]);
  }
}
