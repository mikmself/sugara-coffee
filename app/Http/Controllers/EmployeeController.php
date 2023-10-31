<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('dashboard.employee.index', compact('employees'));
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            return view('dashboard.employee.show', compact('employee'));
        } else {
            return back()->with('error', 'Data employee tidak ditemukan');
        }
    }

    public function create()
    {
        return view('dashboard.employee.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'type_of_employee' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $id = Str::uuid();
            $data = $request->only([
                'name',
                'email',
                'telephone',
                'address',
                'type_of_employee',
            ]);
            $data['id'] = $id;
            $dataCreated = Employee::create($data);
            if ($dataCreated) {
                return redirect(route('index-dashboard-employee'))->with('success', 'Employee berhasil dibuat.');
            } else {
                return back()->with('error', 'Employee gagal dibuat');
            }
        }
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('dashboard.employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'type_of_employee' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $employee = Employee::find($id);
            if (!$employee) {
                return back()->with('error', 'Data employee tidak ditemukan');
            } else {
                $data = $request->only([
                    'name',
                    'email',
                    'telephone',
                    'address',
                    'type_of_employee',
                ]);
                $dataUpdated = $employee->update($data);
                if ($dataUpdated) {
                    return redirect(route('index-dashboard-employee'))->with('success', 'Employee berhasil diedit.');
                } else {
                    return back()->with('error', 'Employee gagal diedit');
                }
            }
        }
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return back()->with('error', 'Data employee tidak ditemukan');
        }
        $employee->delete();
        return redirect(route('index-dashboard-employee'))->with('success', 'Employee berhasil dihapus.');
    }
}
