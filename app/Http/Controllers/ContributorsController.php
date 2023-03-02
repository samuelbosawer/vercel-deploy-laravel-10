<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Contributors;

class ContributorsController extends Controller
{

    // show all data
    public function index(Request $request) {
        return view('contributors.index', [
            'contributors' => Contributors::latest()->paginate(6),
            'pageTitle' => 'Contributors'
        ]);
    }

    // show create form
    public function create(){
        return view('contributors.create', ['pageTitle' => 'New Contributor']);
    }

    // store new data
    public function store(Request $request) {
        $formFields = $request->validate([

            // personal info
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'nullable',
            'about' => 'nullable',
            'profile_picture' => 'nullable',

            // profesional info
            'job_title' => 'nullable',
            'company' => 'nullable',

            // contact
            'address' => 'nullable',
            'email' => ['required', 'email', Rule::unique('contributors', 'email')],
            'whatsapp' => 'nullable',
            'website' => 'nullable',

            // social media
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'youtube' => 'nullable',
            'github' => 'nullable',

        ]);

        if($request->hasFile('profile_picture')) {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('contributors', 'public');
        }

        Contributors::create($formFields);

        return redirect('./admin/contributors')->with('message', 'Contributor created successfully!');

    }

    // show single data
    public function show(Contributors $contributor){
        return view('contributors.show', [
            'contributor' => $contributor,
            'pageTitle' => 'Detail Contributor'
        ]);
    }

    // show edit form
    public function edit(Contributors $contributor){
        return view('contributors.edit', [
            'contributor' => $contributor,
            'pageTitle' => 'Edit Contributor'
        ]);
    }

    // update data
    public function update(Request $request, Contributors $contributor){
        $formFields = $request->validate([

            // personal info
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'nullable',
            'about' => 'nullable',
            'profile_picture' => 'nullable',

            // profesional info
            'job_title' => 'nullable',
            'company' => 'nullable',

            // contact
            'address' => 'nullable',
            'email' => 'required', 'email',
            'whatsapp' => 'nullable',
            'website' => 'nullable',

            // social media
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'youtube' => 'nullable',
            'github' => 'nullable',
        ]);

        if($request->hasFile('profile_picture')) {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('contributors', 'public');
        }

        $contributor->update($formFields);

        return redirect()->back()->with([
            'message' => 'Contributor updated successfully!',
            'alert' => 'alert alert-success',
        ]);

    }

    // delete data
    public function destroy(Contributors $contributor){
        $contributor->delete();
        return redirect('admin/contributors')->with([
            'message' => 'Contributor deleted succesfully',
            'alert' => 'alert alert-success',
        ]);
    }

}
