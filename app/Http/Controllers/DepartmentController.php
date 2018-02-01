<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        return  view('department.index');
    }
    public function add(Request $request, Department $department)
    {
        try
        {
            $result = $department->createNew($request->all());
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }


    public function delete(Request $request, Department $department)
    {
        try
        {
            $result = $department->deleteDepartment($request->all());
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }

    public function viewDepartments(Department $department)
    {
        try
        {
            $result = $department->viewAll();
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }

    public function viewDepartment(Request $request, Department $department)
    {
        try
        {
            $result = $department->view($request->all());
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }

    public function edit(Request $request, Department $department)
    {
        try
        {
            $result = $department->updateDepartment($request->all());
            return apiSuccess($result);
        }
        catch (\Exception $e)
        {
            return apiFailure($e);
        }
    }
}
