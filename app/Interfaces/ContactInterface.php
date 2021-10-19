<?php

namespace App\Interfaces;

interface ContactInterface{

    public function all();

    public function store($customer);
}