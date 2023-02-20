<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Repository\CustomerRepositoryInterface;

class CustomerController extends Controller
{

    private $CustomerRepository;

    public function __construct(CustomerRepositoryInterface $CustomerRepository)
    {
        $this->CustomerRepository=$CustomerRepository;
    }
    public function index()
    {

       return $this->CustomerRepository->get_all();
        
    }
    public function show($customerId)
    {
        return $this->CustomerRepository->findbyId($customerId);
    }

    public function update($customerId)
    {
        $this->CustomerRepository->data_update($customerId);
        return redirect('/customer/'.$customerId);
    }
    public function destroy($customerId)
    {
        $this->CustomerRepository->delete($customerId);
        return redirect('/customer');
    }
}
