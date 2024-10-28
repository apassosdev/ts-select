<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestSelect extends Controller
{


    public function search(Request $request)
    {

        $data = [
            ['id' => 1, 'name' => 'Joao', 'emp_number' => 501],
            ['id' => 2, 'name' => 'Maria', 'emp_number' => 502], 
            ['id' => 3, 'name' => 'Pedro', 'emp_number' => 503],
            ['id' => 4, 'name' => 'Ana', 'emp_number' => 504],
        ];

        $searchTerm = $request->search ?? '';
        
        $resultado = collect($data)->filter(function ($item) use ($searchTerm) {
            return stripos($item['name'], $searchTerm) !== false || stripos($item['emp_number'], $searchTerm) !== false;
        });
        
        return $resultado->values(); 
        
    }

}
