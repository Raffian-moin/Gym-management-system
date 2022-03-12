<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();
        return view('admin.branch.list',compact("branches"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $inputs = $request->all();

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'mobile_number' => 'required',
                'address' => 'required',
                'email' => 'sometimes|nullable|email:rfc,dns',
            ]);

            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            } else {
                DB::beginTransaction();

                Branch::create($inputs);

                DB::commit();

                session()->flash('success', 'Branch Created successfully!');
                return back();
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return back()
                ->withErrors($e->getMessage())
                ->withInput($request->all());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        return view('admin.branch.view', compact("branch"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('admin.branch.edit',compact("branch"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        try {
            $inputs = $request->all();

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'mobile_number' => 'required',
                'address' => 'required',
                'email' => 'sometimes|nullable|email:rfc,dns',
            ]);

            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            } else {

                DB::transaction(function () use($branch, $inputs) {
                    $branch->update($inputs);
                });

                session()->flash('success', 'Branch Updated successfully!');
                return back();
            }
        } catch (\Exception $e) {
            return back()
                ->withErrors($e->getMessage())
                ->withInput($request->all());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function delete(Branch $branch)
    {
        $branch = $branch->delete();
        if ($branch) {
            session()->flash('success', 'Branch Deleted successfully!');
            return back();
        }
        
    }
}
