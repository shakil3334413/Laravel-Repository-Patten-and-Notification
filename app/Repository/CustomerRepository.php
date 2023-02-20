<?php
namespace App\Repository;

use App\Models\Customer;
use App\Repository\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
    //first look like
    // public function get_all()
    // {
    //      return Customer::orderby('name')
    //             ->where('active',1)
    //             ->with('user')
    //             ->get()
    //             ->map(function($customer){
    //                 return[
    //                     'customer_id'=>$customer->id,
    //                     'name'=>$customer->name,
    //                     'created_by'=>$customer->user->name,
    //                     'last_updated'=>$customer->updated_at->diffForHumans(),
    //                 ];
    //             });
    // }

    //Data Come to Function 
    // public function get_all()
    // {
    //      return Customer::orderby('name')
    //             ->where('active',1)
    //             ->with('user')
    //             ->get()
    //             ->map(function($customer){
    //                 $this->formate($customer);
    //             });
    // }

    //Data Come To Model Function
    public function get_all()
    {
        //  return Customer::orderby('name')
        //         ->where('active',1)
        //         ->with('user')
        //         ->get()
        //         ->map(function($customer){
        //            return $customer->formate();
        //         });
        return Customer::orderby('name')
                ->where('active',1)
                ->with('user')
                ->get()
                ->map->formate();
    }

    //first look like
    // public function findbyId($customerId)
    // {
    //     return Customer::where('id',$customerId)
    //             ->where('active',1)
    //             ->with('user')
    //             ->firstOrFail();
    // }

    // public function findbyId($customerId)
    // {
    //      $customer=Customer::where('id',$customerId)
    //             ->where('active',1)
    //             ->with('user')
    //             ->firstOrFail();

    //         return $this->formate($customer);
    // }

    //Data Come Model Function
    public function findbyId($customerId)
    {
         return Customer::where('id',$customerId)
                ->where('active',1)
                ->with('user')
                ->firstOrFail()
                ->formate();

    }

    public function data_update($customerId)
    {
        $customer=Customer::where('id',$customerId)->firstOrFail();
        $customer->update(request()->only('name'));
    }
    public function delete($customerId)
    {
        $customer=Customer::where('id',$customerId)->delete();
    }


    protected function formate($customer)
    {
        return[
            'customer_id'=>$customer->id,
            'name'=>$customer->name,
            'created_by'=>$customer->user->name,
            'last_updated'=>$customer->updated_at->diffForHumans(),
        ];
    }
}