<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\Position;
// use App\Http\Controllers\DB;



class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Employee List';

        // RAW SQL QUERY
        // $employees = DB::select('
        //     select *, employees.id as employee_id
        //     from employees
        //     left join positions on employees.position_id = positions.id
        // ');

        $employees = Item::all();

        return view('item.index', [
            'pageTitle' => $pageTitle,
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Employee';
        // RAW SQL Query
        $positions = Position::all();

        return view('item.create', compact('pageTitle', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $messages = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'nameItem' => 'required',
        'priceItem' => 'required|numeric',
        'descriptionItem' => 'required',
        'amount' => 'required|numeric',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // INSERT QUERY
    // DB::table('employees')->insert([
    //     'firstname' => $request->firstName,
    //     'lastname' => $request->lastName,
    //     'email' => $request->email,
    //     'age' => $request->age,
    //     'position_id' => $request->position,
    // ]);
    $employee = New Item;
    $employee->nameitem = $request->nameItem;
    $employee->priceitem = $request->priceItem;
    $employee->descriptionitem = $request->descriptionItem;
    $employee->amount = $request->amount;
    $employee->position_id = $request->position;
    $employee->save();


    return redirect()->route('employees.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Employee Detail';

    // // // RAW SQL QUERY Done ke queery builder
    // //     // $employee = DB::table('employees')
    // //     //     ->select('employees.*', 'positions.name as position_name')
    // //     //     ->leftJoin('positions', 'employees.position_id', '=', 'positions.id')
    // //     //     ->where('employees.id', $id)
    // //     //     ->first();
        $employee = Item::find($id);

        return view('item.show', compact('pageTitle', 'employee'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $pageTitle = 'Edit Employee';

    // $positions = DB::table('positions')->get();
    // $employee = DB::table('employees')
    //     ->select('*', 'employees.id as employee_id', 'positions.id as position_id')
    //     ->leftJoin('positions', 'employees.position_id', '=', 'positions.id')
    //     ->where('employees.id', $id)
    //     ->first();
    $positions = Position::all();
    $employee = Item::find($id);

    return view('item.edit', compact('pageTitle', 'employee', 'positions'));
}





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $messages = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'nameItem' => 'required',
        'priceItem' => 'required|numeric',
        'descriptionItem' => 'required',
        'amount' => 'required|numeric',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // DB::table('employees')
    // ->where('id', $id)
    // ->update([
    //     'firstname' => $request->firstName,
    //     'lastname' => $request->lastName,
    //     'email' => $request->email,
    //     'age' => $request->age,
    //     'position_id' => $request->position,
    // ]);
    $employee = Item::find($id);
    $employee->nameitem = $request->nameItem;
    $employee->priceitem = $request->priceItem;
    $employee->descriptionitem = $request->descriptionItem;
    $employee->amount = $request->amount;
    $employee->position_id = $request->position;
    $employee->save();

    return redirect()->route('employees.index');

}


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        // QUERY BUILDER
        // DB::table('employees')
        //     ->where('id', $id)
        //     ->delete();
        Item::find($id)->delete();

        return redirect()->route('employees.index');
    }


}
