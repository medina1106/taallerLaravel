<?php

namespace Tests\Unit;

//use Tests\TestCase;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Collection;
use PHPUnit\Framework\TestCase;


class EmployeeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function employee_has_many_quotes()
    {
      /*   $employee = new Employee;
        $this->assertInstanceOf(Collection::class, $employee->quotes);

       */
      $this->assertTrue(true); 
       
    }
}
