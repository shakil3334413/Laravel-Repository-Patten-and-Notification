<?php 
namespace App\Repository;

interface CustomerRepositoryInterface
{
    public function get_all();
    public function findbyId($customerId);
    public function data_update($customerId);
    public function delete($customerId);

}